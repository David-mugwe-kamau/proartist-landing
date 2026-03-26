-- Blog drafts table + policies (for admin draft list/open workflow)
-- Run once in Supabase SQL Editor.

create table if not exists public.blog_drafts (
  id uuid primary key default gen_random_uuid(),
  section_key text not null default 'blog',
  title text not null default 'Untitled draft',
  payload_json jsonb not null default '{}'::jsonb,
  status text not null default 'draft' check (status in ('draft','published')),
  published_at timestamptz,
  created_at timestamptz not null default now(),
  updated_at timestamptz not null default now()
);

create index if not exists blog_drafts_section_updated_idx
on public.blog_drafts(section_key, updated_at desc);

alter table public.blog_drafts enable row level security;

drop policy if exists "blog_drafts_authenticated_all" on public.blog_drafts;
create policy "blog_drafts_authenticated_all"
on public.blog_drafts
for all
to authenticated
using (true)
with check (true);

