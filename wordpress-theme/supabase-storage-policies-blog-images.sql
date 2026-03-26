-- Create/verify Supabase Storage policies for Blog images.
-- Bucket name expected: `blog-images`
-- Run in Supabase → SQL Editor.

-- Public read: allow anyone (anon) to view blog images
DROP POLICY IF EXISTS "blog_images_public_read" ON storage.objects;
CREATE POLICY "blog_images_public_read"
ON storage.objects
FOR SELECT
TO anon
USING (bucket_id = 'blog-images');

-- Authenticated write: allow logged-in admins to upload/update/delete objects
DROP POLICY IF EXISTS "blog_images_authenticated_write" ON storage.objects;
CREATE POLICY "blog_images_authenticated_write"
ON storage.objects
FOR ALL
TO authenticated
USING (bucket_id = 'blog-images')
WITH CHECK (bucket_id = 'blog-images');

