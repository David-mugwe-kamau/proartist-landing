# ProArtist Africa WordPress Theme

Custom WordPress theme for ProArtist Africa - A grooming franchise portfolio platform.

## Features

- **Custom Post Types**: Brands and Jobs
- **Page Templates**: Home, Investors, Brands, Jobs
- **Contact Forms**: Investment inquiries and job applications
- **Admin Dashboard**: Easy content management for non-technical users
- **Responsive Design**: Works on all devices
- **ProArtist Branding**: Yellow (#ffdb00) and black color scheme with Montserrat font

## Installation

1. Upload the `proartist-theme` folder to `/wp-content/themes/` on your WordPress installation
2. Activate the theme from WordPress Admin → Appearance → Themes
3. Go to Settings → Permalinks and click "Save Changes" to refresh permalinks

## Setup Instructions

### 1. Create Pages

Create the following pages in WordPress Admin → Pages → Add New:

- **Home** (set as Front Page in Settings → Reading)
- **Investors** (select "Investors Page" template)
- **Brands** (select "Brands Page" template)
- **Jobs** (select "Jobs Page" template)
- **Blog** (set as Posts Page in Settings → Reading)

### 2. Set Up Navigation Menu

1. Go to Appearance → Menus
2. Create a new menu called "Primary Menu"
3. Add your pages to the menu
4. Assign to "Primary Menu" location

### 3. Add Brands

1. Go to Brands → Add New
2. Add brand name, description, and featured image
3. Fill in statistics (Locations, Customers, Revenue) in the meta box
4. Publish

### 4. Add Jobs

1. Go to Jobs → Add New
2. Add job title and description
3. Publish

### 5. Create Manager Account

1. Go to Users → Add New
2. Create user with "Administrator" role
3. Use strong password
4. Share credentials with client
5. **Give them the ADMIN-GUIDE.md file** for training

### 6. Configure Email

Forms send emails to the admin email. Update in Settings → General → Email Address.

## Customization

All styles are in `/assets/css/main.css`
All scripts are in `/assets/js/main.js`

## Admin Training

After creating the manager account, provide them with:
- **ADMIN-GUIDE.md** - Complete training guide
- **QUICK-REFERENCE.md** - One-page cheat sheet

These files are in the `wordpress-theme` folder.

## Support

For questions or issues, contact the development team.

