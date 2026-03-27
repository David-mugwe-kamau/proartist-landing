# ProArtist Africa - Project Handoff Notes

Last updated: 2026-03-27

## Current Stack

- Frontend hosting: Vercel (static deployment from GitHub)
- Data/auth/storage: Supabase
- Legacy hosting panel: TrueHost cPanel (used for DNS and related hosting services)
- Repo: `David-mugwe-kamau/proartist-landing`
- Vercel root directory: `wordpress-theme`

## Live Domains

- `https://www.proartist.africa` (primary production host)
- `https://proartist.africa` (redirects to `www.proartist.africa`)
- `https://proartist.vercel.app` (valid fallback/technical domain)

## DNS State (TrueHost/cPanel Zone Editor)

Configured records for Vercel:

- `proartist.africa` -> `A` -> `216.198.79.1`
- `www.proartist.africa` -> `CNAME` -> `f0863e4ffd8c8320.vercel-dns-017.com`

Notes:

- Email-related records (MX/TXT/DMARC/etc.) were left intact.
- `@` label is not required if provider prefers explicit apex name.

## Vercel Project Settings

- Project name: `proartist`
- Root Directory: `wordpress-theme`
- Preset: `Other`
- Domains page shows valid configuration for production domains.

## Admin + Content Changes Completed

### Admin UX/Responsiveness

- Improved mobile usability and touch targets.
- Added mobile right-side hamburger drawer behavior for sections.
- Added/styled mobile header pattern with ProArtist brand and menu.
- Added subtle load fade animation with reduced-motion support.
- Updated fade timing to smoother, slower motion.

### Dashboard/Manual/Layout

- Added overflow/word-wrap fixes for long content.
- Manual panel is overlay-style while preserving same IDs/toggle flow.
- Sticky save/publish action bar kept functional IDs unchanged.

### Blog Admin + Blog Page

- Blog image treated as optional (defaults no longer force legacy card text/image).
- Added "Clean Non-Main Cards" action:
  - Keeps published Card 1
  - Clears published Cards 2 and 3
  - Leaves drafts unchanged
- Preview blog behavior improved when hero image missing/broken:
  - hides broken image state
  - suppresses unwanted title fallback display
- Blog hero image visual polish:
  - subtle 3D/zoom effect
  - reduced desktop footprint
  - tighter subtitle-to-image spacing

### Investors Page

- "Learn More" button now links to:
  - `https://drive.google.com/file/d/1VtcHmRdm67tygGzq6UQLCJJqZIZOSZmQ/view?fbclid=PAT01DUAQzf1dleHRuA2FlbQIxMABzcnRjBmFwcF9pZA81NjcwNjczNDMzNTI0MjcAAaeGrb9jBT4twX1dVx4MTVnfEXA8zYNUIuZRf89Te6OMMVm5p9ac9KZYqVEvxw_aem_maV2JSn3JvAlNiCUVLJQbQ`

### Image Asset Replacement

- Replaced `wordpress-theme/proartist-theme/assets/images/Lm2.jpeg` with cleaned source (mute icon removed).

## Supabase Behavior Notes

- Public page content (including contact and blog content) can be overridden by published data in `site_content`.
- Blog page reads `site_content` row where `section_key='blog'`.
- Contact values are pulled from `site_content` settings in frontend logic.

## Operational Guidance

- Keep admin links private (do not publish publicly).
- Keep Supabase users restricted to authorized editors.
- Keep periodic backups of `site_content` and `blog_drafts`.
- When updating DNS/provider recommendations in Vercel, apply exact values shown in Domains settings.

## Verification Checklist

After any major update:

- Homepage loads on custom domain
- `www` and root redirect behavior works
- Admin login works (`/admin.html`)
- Blog page renders expected hero, image, and blocks
- Investors "Learn More" opens expected external document
- No stale DNS status in Vercel Domains

