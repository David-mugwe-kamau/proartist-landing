# Deploy ProArtist Static Preview to Vercel

This deploys the static HTML previews (Home, About, Investors, Brands, Jobs, Blog) to Vercel so stakeholders have a live site while the WordPress version is being set up on TrueHost.

## Prerequisites
- GitHub repo pushed (e.g. `David-mugwe-kamau/proartist-landing`)
- Vercel account (free at vercel.com)

## Steps

1. **Go to [vercel.com](https://vercel.com)** and sign in (or create account).

2. **Import Project** → Click "Add New" → "Project".

3. **Import Git Repository** → Select your `proartist-landing` repo (or connect GitHub if needed).

4. **Configure Project**:
   - **Root Directory**: Click "Edit" and set to `wordpress-theme`
   - **Framework Preset**: Other (or leave default)
   - **Build Command**: Leave empty (static site, no build)
   - **Output Directory**: Leave empty

5. **Deploy** → Click "Deploy".

6. **Result**: You’ll get a URL like `proartist-landing.vercel.app` (or a custom domain). The root `/` shows the Home page; other pages use `/preview-about.html`, `/preview-investors.html`, etc.

## What’s deployed
- All preview pages (Home, About, Investors, Brands, Jobs, Blog)
- Theme CSS and assets
- Images from `proartist-theme/assets/images/`
- No functionality changes

## Custom domain
In Vercel dashboard → Project → Settings → Domains, you can add a custom domain (e.g. `preview.proartist.africa`) if desired.
