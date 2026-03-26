-- Optional "pro" blog CMS tables (non-breaking with current setup).
-- You can run this now or later. Current blog page will keep working either way.

-- 1) Single-row settings for blog landing page
create table if not exists public.blog_page_settings (
  id bigint generated always as identity primary key,
  slug text not null unique default 'blog',
  hero_title text not null default 'Learn More About The
Grooming Industry',
  hero_subtitle text not null default 'Welcome to the ProArtist Knowledge Hub - simplified insights for investors and anyone exploring the grooming business.',
  hero_image_url text,
  updated_at timestamptz not null default now()
);

insert into public.blog_page_settings (slug)
values ('blog')
on conflict (slug) do nothing;

-- 2) Post-based blog content table (draft/publish workflow)
create table if not exists public.blog_posts (
  id uuid primary key default gen_random_uuid(),
  title text not null,
  slug text not null unique,
  excerpt text,
  content text,
  cover_image_url text,
  status text not null default 'draft' check (status in ('draft','published')),
  published_at timestamptz,
  created_at timestamptz not null default now(),
  updated_at timestamptz not null default now()
);

create index if not exists blog_posts_status_idx on public.blog_posts(status);
create index if not exists blog_posts_published_at_idx on public.blog_posts(published_at desc);

-- 3) RLS
alter table public.blog_page_settings enable row level security;
alter table public.blog_posts enable row level security;

drop policy if exists "blog_page_settings_public_read" on public.blog_page_settings;
create policy "blog_page_settings_public_read"
on public.blog_page_settings
for select
to anon, authenticated
using (true);

drop policy if exists "blog_page_settings_authenticated_write" on public.blog_page_settings;
create policy "blog_page_settings_authenticated_write"
on public.blog_page_settings
for all
to authenticated
using (true)
with check (true);

drop policy if exists "blog_posts_public_published_read" on public.blog_posts;
create policy "blog_posts_public_published_read"
on public.blog_posts
for select
to anon, authenticated
using (status = 'published');

drop policy if exists "blog_posts_authenticated_all" on public.blog_posts;
create policy "blog_posts_authenticated_all"
on public.blog_posts
for all
to authenticated
using (true)
with check (true);

