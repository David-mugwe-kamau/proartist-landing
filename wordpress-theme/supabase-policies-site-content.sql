-- Run this in Supabase → SQL Editor (once per project).
-- Fixes 403 when saving from admin.html: RLS must allow authenticated users to write site_content.

-- 1) Admins (logged-in Supabase Auth users): full read/write on site_content
DROP POLICY IF EXISTS "site_content_authenticated_all" ON public.site_content;
CREATE POLICY "site_content_authenticated_all"
ON public.site_content
FOR ALL
TO authenticated
USING (true)
WITH CHECK (true);

-- 2) Public previews (anon key): read-only for rows the static HTML + main.js must load
--    - blog: preview-blog.html content
--    - settings: footer phone/email/social (applyGlobalSettings in main.js)
DROP POLICY IF EXISTS "site_content_anon_read_blog" ON public.site_content;
CREATE POLICY "site_content_anon_read_blog"
ON public.site_content
FOR SELECT
TO anon
USING (section_key IN ('blog', 'settings'));
