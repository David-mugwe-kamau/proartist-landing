# ProArtist Africa - WordPress Deployment Guide

## Pre-Deployment Checklist

- [ ] WordPress installed on hosting
- [ ] Database created and configured
- [ ] FTP/cPanel access available
- [ ] Domain DNS configured (if applicable)

## Step-by-Step Deployment

### 1. Upload Theme Files

**Via FTP:**
1. Connect to your hosting via FTP (FileZilla, WinSCP, etc.)
2. Navigate to `/wp-content/themes/`
3. Upload the entire `proartist-theme` folder
4. Ensure all files uploaded successfully

**Via cPanel File Manager:**
1. Log into cPanel
2. Open File Manager
3. Navigate to `public_html/wp-content/themes/`
4. Upload `proartist-theme` folder (zip first, then extract in cPanel)

### 2. Activate Theme

1. Log into WordPress Admin (`yoursite.com/wp-admin`)
2. Go to **Appearance → Themes**
3. Find "ProArtist Africa" theme
4. Click **Activate**

### 3. Configure Permalinks

1. Go to **Settings → Permalinks**
2. Select "Post name" (recommended)
3. Click **Save Changes**

### 4. Create Pages

Create these pages in **Pages → Add New**:

1. **Home**
   - Title: "Home"
   - Leave content empty (theme uses front-page.php)
   - Publish

2. **Investors**
   - Title: "Investors"
   - Template: Select "Investors Page"
   - Publish

3. **Brands**
   - Title: "Brands"
   - Template: Select "Brands Page"
   - Publish

4. **Jobs**
   - Title: "Jobs"
   - Template: Select "Jobs Page"
   - Publish

5. **Blog**
   - Title: "Blog"
   - Leave content empty
   - Publish

### 5. Set Reading Settings

1. Go to **Settings → Reading**
2. Set **Front page displays** to "A static page"
3. Select "Home" as Front page
4. Select "Blog" as Posts page
5. Click **Save Changes**

### 6. Create Navigation Menu

1. Go to **Appearance → Menus**
2. Click **Create a new menu**
3. Name it "Primary Menu"
4. Add pages: Home, Investors, Brands, Jobs, Blog
5. Check "Primary Menu" under Menu Settings
6. Click **Save Menu**

### 7. Add Initial Content

**Add Brands:**
1. Go to **Brands → Add New**
2. Add MANCAVE:
   - Title: "MANCAVE"
   - Description: "MANCAVE is a modern men's grooming and lifestyle hub delivering premium, fast haircuts with ManMarket - style and essentials in one stop."
   - Locations: 3
   - Customers: 5k+
   - Revenue: 750k
   - Add featured image
   - Publish

3. Repeat for BARBERSTOP and ROYAL AFRICAN

**Add Jobs:**
1. Go to **Jobs → Add New**
2. Add "Professional Artists"
3. Add "Location Coordinators"
4. Add descriptions and publish

### 8. Create Manager Account

1. Go to **Users → Add New**
2. Fill in:
   - Username: (create unique username)
   - Email: (client's email)
   - First/Last Name
   - Role: **Administrator**
   - Strong password (generate secure one)
3. Click **Add New User**
4. Share credentials securely with client

### 9. Configure Email

1. Go to **Settings → General**
2. Update **Email Address** to client's email
3. Test form submissions to ensure emails work

### 10. Test Everything

- [ ] Home page loads correctly
- [ ] All navigation links work
- [ ] Investors page shows stats and form
- [ ] Brands page displays brands
- [ ] Jobs page shows jobs and forms
- [ ] Blog page works
- [ ] Forms submit and send emails
- [ ] Mobile responsive
- [ ] Manager can log in and edit content

## Post-Deployment

### Security Recommendations

1. Install security plugin (Wordfence or similar)
2. Enable automatic updates
3. Use strong passwords
4. Regular backups (use UpdraftPlus or hosting backup)

### Performance

1. Install caching plugin (WP Super Cache or W3 Total Cache)
2. Optimize images before uploading
3. Consider CDN for faster loading

## Support

If issues arise:
1. Check WordPress error logs
2. Verify file permissions (folders: 755, files: 644)
3. Ensure PHP version is 7.4 or higher
4. Check that all theme files uploaded correctly

## File Structure

```
proartist-theme/
├── style.css
├── functions.php
├── header.php
├── footer.php
├── index.php
├── front-page.php
├── page-investors.php
├── page-brands.php
├── page-jobs.php
├── archive.php
├── single.php
├── assets/
│   ├── css/
│   │   └── main.css
│   ├── js/
│   │   └── main.js
│   └── images/
├── template-parts/
│   ├── content.php
│   └── content-none.php
└── README.md
```

