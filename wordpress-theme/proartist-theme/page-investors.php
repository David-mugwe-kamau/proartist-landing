<?php
/**
 * Template Name: Investors Page
 *
 * @package ProArtist
 */

get_header();
?>

<main id="main" class="site-main">
    <section class="hero-section" style="padding: 60px 0; background: var(--color-white);">
        <div class="container" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 80px; align-items: center; max-width: 1200px;">
            <div style="display: flex; flex-direction: column; justify-content: center; max-width: 550px;">
                <h1 class="hero-title" style="text-align: left; margin-bottom: 24px; line-height: 1.2; font-weight: 800; color: #000000; font-size: clamp(36px, 6vw, 56px);">
                    Invest in an industry that <span style="color: var(--color-primary);">never stops</span> <span style="color: var(--color-primary);">growing.</span>
                </h1>
                <p class="hero-subtitle" style="text-align: left; margin-bottom: 32px; color: #000000;">
                    Hair grows. People groom. Demand is constant. As Africa's population rises, grooming becomes one of the continent's most scalable and recession-proof industries.
                </p>
            </div>
            <div style="display: flex; align-items: center; justify-content: flex-end;">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/investors-image.jpg'); ?>" alt="Barbershop interior" style="max-width: 100%; height: auto; display: block;" />
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section style="padding: 60px 0; background: var(--color-white);">
        <div class="container" style="max-width: 1200px;">
            <div class="stats-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 40px; margin-bottom: 48px;">
                <div style="text-align: center;">
                    <div style="width: 60px; height: 60px; margin: 0 auto 16px; border: 2px solid #000000; border-radius: 8px; display: flex; align-items: center; justify-content: center; padding: 8px;">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/roi-icon.jpg'); ?>" alt="ROI icon" style="max-width: 100%; max-height: 100%; object-fit: contain;" />
                    </div>
                    <h3 style="font-size: 18px; font-weight: 700; margin-bottom: 8px; color: #000000;">ROI (Return On Investment)</h3>
                    <p style="font-size: 16px; line-height: 1.6; color: #000000; margin: 0;">From 2 years</p>
                </div>
                <div style="text-align: center;">
                    <div style="width: 60px; height: 60px; margin: 0 auto 16px; border: 2px solid #000000; border-radius: 8px; display: flex; align-items: center; justify-content: center; padding: 8px;">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/retention-icon.jpg'); ?>" alt="Retention Rate icon" style="max-width: 100%; max-height: 100%; object-fit: contain;" />
                    </div>
                    <h3 style="font-size: 18px; font-weight: 700; margin-bottom: 8px; color: #000000;">Retention Rate</h3>
                    <p style="font-size: 16px; line-height: 1.6; color: #000000; margin: 0;">80% of customers retained monthly</p>
                </div>
                <div style="text-align: center;">
                    <div style="width: 60px; height: 60px; margin: 0 auto 16px; border: 2px solid #000000; border-radius: 8px; display: flex; align-items: center; justify-content: center; padding: 8px;">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/break-even-icon.jpg'); ?>" alt="Break Even icon" style="max-width: 100%; max-height: 100%; object-fit: contain;" />
                    </div>
                    <h3 style="font-size: 18px; font-weight: 700; margin-bottom: 8px; color: #000000;">Break Even</h3>
                    <p style="font-size: 16px; line-height: 1.6; color: #000000; margin: 0;">From 3 months</p>
                </div>
                <div style="text-align: center;">
                    <div style="width: 60px; height: 60px; margin: 0 auto 16px; border: 2px solid #000000; border-radius: 8px; display: flex; align-items: center; justify-content: center; padding: 8px;">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/operating-margins-icon.jpg'); ?>" alt="Operating Margins icon" style="max-width: 100%; max-height: 100%; object-fit: contain;" />
                    </div>
                    <h3 style="font-size: 18px; font-weight: 700; margin-bottom: 8px; color: #000000;">Operating Margins</h3>
                    <p style="font-size: 16px; line-height: 1.6; color: #000000; margin: 0;">25% - 30%</p>
                </div>
            </div>
            
            <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('investors'))); ?>" class="btn" style="background: #ffffff; color: #000000; border: 1px solid #000000;">Learn More</a>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('brands'))); ?>" class="btn" style="background: var(--color-primary); color: #000000; border: none;">Explore Our Brands</a>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();

