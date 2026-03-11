# ProArtist Africa – TrueHost Deployment & Client Guide

A complete guide for deploying the website on TrueHost and teaching your client how to edit content.

---

## PART 1: Deploying on TrueHost

### Before You Start

- [ ] TrueHost hosting account (shared or WordPress plan)
- [ ] Domain registered/pointing to TrueHost
- [ ] The `proartist-theme` folder ready to upload

---

### Step 1: Install WordPress on TrueHost

**Option A – One-Click Install (Recommended)**

1. Log into **TrueHost cPanel** (e.g. `yourdomain.com:2083` or the URL TrueHost gave you)
2. Find **Softaculous Apps Installer** or **WordPress** in the cPanel
3. Click **Install Now**
4. Fill in:
   - **Choose Protocol:** `https://` (if SSL is active) or `http://`
   - **Choose Domain:** Select your domain
   - **Site Name:** ProArtist Africa
   - **Admin Username:** Create a secure username (not "admin")
   - **Admin Password:** Use a strong password (save it safely)
   - **Admin Email:** Your or the client’s email
5. Click **Install**
6. WordPress will be installed (usually in `public_html` or your domain root)

**Option B – Manual Install**

1. Download WordPress from [wordpress.org](https://wordpress.org/download/)
2. Create a MySQL database in cPanel → **MySQL Databases**
3. Upload WordPress files to `public_html` via File Manager or FTP
4. Visit `yourdomain.com` and complete the setup wizard

---

### Step 2: Upload the ProArtist Theme

**Via cPanel File Manager**

1. Log into cPanel
2. Open **File Manager**
3. Go to `public_html/wp-content/themes/`
4. Click **Upload**
5. Zip the `proartist-theme` folder on your computer first
6. Upload the zip file
7. Right-click the zip → **Extract**
8. Delete the zip after extraction
9. Confirm the folder is named `proartist-theme`

**Via FTP (FileZilla, etc.)**

1. Connect to TrueHost using the FTP details from cPanel
2. Go to `/public_html/wp-content/themes/`
3. Upload the entire `proartist-theme` folder
4. Ensure all files (including `assets/images/`) are uploaded

---

### Step 3: Activate the Theme

1. Go to `yourdomain.com/wp-admin`
2. Log in with your admin credentials
3. Open **Appearance** → **Themes**
4. Locate **ProArtist Africa**
5. Click **Activate**

---

### Step 4: Configure Permalinks

1. Go to **Settings** → **Permalinks**
2. Select **Post name**
3. Click **Save Changes**

---

### Step 5: Create Pages

Go to **Pages** → **Add New** and create these pages:

| Page     | Title    | Template          | Notes                          |
|----------|----------|-------------------|--------------------------------|
| Home     | Home     | Default           | Leave content empty            |
| About    | About    | About Page        | If available                   |
| Investors| Investors| Investors Page    | Select from Template dropdown  |
| Brands   | Brands   | Brands Page       | Select from Template dropdown  |
| Jobs     | Jobs     | Jobs Page        | Select from Template dropdown  |
| Blog     | Blog     | Default           | Leave content empty            |

Click **Publish** for each page.

---

### Step 6: Set Home & Blog

1. Go to **Settings** → **Reading**
2. Under **Your homepage displays**, select **A static page**
3. **Homepage:** Home
4. **Posts page:** Blog
5. Click **Save Changes**

---

### Step 7: Create the Menu

1. Go to **Appearance** → **Menus**
2. Click **Create a new menu**
3. Name it: **Primary Menu**
4. Add pages: Home, About, Investors, Brands, Jobs, Blog (use **Add**)
5. Drag to reorder as needed
6. Under **Menu Settings**, check **Primary Menu**
7. Click **Save Menu**

---

### Step 8: Add Images (If Needed)

1. Ensure images exist in `proartist-theme/assets/images/` before upload, or:
2. Go to **Media** → **Add New**
3. Upload images
4. For theme images (e.g. africa.png, brand images), upload via File Manager to `wp-content/themes/proartist-theme/assets/images/`

---

### Step 9: Create Client Admin Account

1. Go to **Users** → **Add New**
2. Fill in the client’s details
3. **Role:** Administrator (if they will manage content)
4. Generate a strong password and share it securely (e.g. by phone or secure channel)
5. Click **Add New User**

---

### Step 10: Configure Email

1. Go to **Settings** → **General**
2. Set **Email Address** to the address where you want forms sent
3. Click **Save Changes**

---

### Step 11: Test the Site

- [ ] Visit the homepage – slides and footer work
- [ ] Check Investors, About, Brands, Jobs
- [ ] Test **Apply Now** and any contact forms
- [ ] Test on mobile (hamburger menu)
- [ ] Ensure client can log in

---

## PART 2: Teaching the Client – How to Edit Content

Give this section to your client (or use it to train them).

---

### Logging In

1. Go to `yourdomain.com/wp-admin`
2. Enter username and password
3. Click **Log In**

**Important:** Keep the password private and log out on shared computers.

---

### Editing Pages (Home, About, Investors, etc.)

1. Go to **Pages** → **All Pages**
2. Find the page (e.g. About, Investors)
3. Click the page name or **Edit**
4. Change text, headings, or content
5. Click **Update** (top right) to save

**Tip:** Use the **Visual** tab for an editor similar to Word.

---

### Managing Brands

**Add a brand**

1. Go to **Brands** → **Add New**
2. Enter the brand name as the title
3. Add the description in the editor
4. Click **Set featured image** (right sidebar) to add an image
5. In **Brand Statistics**, add:
   - Locations
   - Customers
   - Revenue
6. Click **Publish**

**Edit a brand**

1. Go to **Brands** → **All Brands**
2. Click the brand
3. Make changes
4. Click **Update**

---

### Managing Jobs

**Add a job**

1. Go to **Jobs** → **Add New**
2. Enter the job title (e.g. "Professional Artists")
3. Add the description and bullets
4. Click **Set featured image** for an image
5. Click **Publish**

**Edit or remove a job**

1. Go to **Jobs** → **All Jobs**
2. Click the job to edit, or use **Trash** to remove it

**Note:** "Apply Now" links go to Google Forms. To change these, contact your developer.

---

### Writing Blog Posts

1. Go to **Posts** → **Add New**
2. Enter the title
3. Write the content
4. Click **Set featured image**
5. Add an excerpt (short summary)
6. Click **Publish**

---

### Changing the Menu

1. Go to **Appearance** → **Menus**
2. Select **Primary Menu**
3. Check or uncheck pages to add/remove
4. Drag items to reorder
5. Click **Save Menu**

---

### Uploading Images

1. Go to **Media** → **Add New**
2. Upload images
3. Use them in pages, brands, jobs, or posts via **Set featured image** or the editor

**Guidelines:**

- Width around 1200px for main images
- Use JPG or PNG
- Keep files under 2MB

---

### Quick Reference Table

| Task               | Go to                    |
|--------------------|--------------------------|
| Edit a page        | Pages → All Pages → Edit |
| Add a brand        | Brands → Add New         |
| Edit a brand       | Brands → All Brands      |
| Add a job          | Jobs → Add New           |
| Edit jobs          | Jobs → All Jobs          |
| Write blog post    | Posts → Add New          |
| Change menu        | Appearance → Menus       |
| Upload images      | Media → Add New          |
| View site          | Click site name (top left) |

---

### Important Reminders for the Client

1. Always click **Update** or **Publish** after changes
2. Use **Preview** before publishing
3. Contact the developer for: design changes, contact info in the footer, technical issues
4. Do not install plugins without consulting the developer
5. Do not share the admin password

---

### Common Issues

**"I don’t see my changes"**

- Clear cache (Ctrl+F5 or Cmd+Shift+R) or wait a minute

**"I can’t find where to edit something"**

- Check if it’s a Page, Post, Brand, or Job
- If unsure, ask the developer

**"Forgot my password"**

- Use **Lost your password?** on the login page

---

## Summary Checklist

### For You (Developer)

- [ ] WordPress installed on TrueHost
- [ ] Theme uploaded and activated
- [ ] Pages created and templates assigned
- [ ] Menu created and assigned
- [ ] Client account created
- [ ] Email configured
- [ ] Client trained or given this guide

### For the Client

- [ ] Can log in
- [ ] Knows how to edit pages
- [ ] Knows how to add/edit brands and jobs
- [ ] Knows how to add blog posts
- [ ] Has this guide for reference

---

**Last Updated:** February 2026
