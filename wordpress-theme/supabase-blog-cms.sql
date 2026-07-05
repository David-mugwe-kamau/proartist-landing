-- =============================================================================
-- ProArtist Africa — Blog CMS tables (multi-post system)
-- Run this in: Supabase Dashboard → SQL Editor → New query → Run
-- Safe to re-run: uses IF NOT EXISTS / ADD COLUMN IF NOT EXISTS
-- =============================================================================

-- 1) blog_page_settings — single row for blog landing page hero + theme
create table if not exists public.blog_page_settings (
  id bigint generated always as identity primary key,
  slug text not null unique default 'blog',
  hero_title text not null default '',
  hero_subtitle text not null default '',
  hero_image_url text,
  theme text not null default 'minimal',
  updated_at timestamptz not null default now()
);

-- Add theme column if table already existed without it
alter table public.blog_page_settings add column if not exists theme text not null default 'minimal';

-- Seed the single settings row
insert into public.blog_page_settings (slug)
values ('blog')
on conflict (slug) do nothing;

-- 2) blog_posts — individual articles (draft/publish workflow)
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
create index if not exists blog_posts_updated_at_idx on public.blog_posts(updated_at desc);

-- 3) RLS policies
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

-- 4) Grants
grant usage on schema public to anon, authenticated;
grant select on public.blog_page_settings to anon;
grant all on public.blog_page_settings to authenticated;
grant select on public.blog_posts to anon;
grant all on public.blog_posts to authenticated;

-- =============================================================================
-- Done. The blog CMS system now uses:
--   site_content (section_key='blog') → hero title, subtitle, theme name
--   blog_posts → individual articles (title, excerpt, cover image, content JSON)
--   blog-images storage bucket → all uploaded images
-- =============================================================================
