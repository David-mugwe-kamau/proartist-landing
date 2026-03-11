<?php
/**
 * Front Page Template
 *
 * @package ProArtist
 */

get_header();
?>

<main id="main" class="site-main home-slides">
    <div class="home-carousel">
        <div class="home-carousel-track">
            <!-- Slide 1: Investors Thrive, Professionals Grow -->
            <section class="home-slide hero-section" style="padding: 60px 0;">
        <div class="container" style="display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; max-width: 1200px;">
            <div style="display: flex; flex-direction: column; justify-content: center; max-width: 550px;">
                <h1 class="hero-title" style="text-align: left; margin-bottom: 24px; line-height: 1.2; font-weight: 800; font-size: clamp(28px, 4vw, 40px);">
                    Investors Thrive, <span style="white-space: nowrap;">Professionals Grow.</span>
                </h1>
                <p class="hero-subtitle" style="text-align: left; margin-bottom: 32px; color: #333;">
                    We're building Africa's next big portfolio of hair & beauty investment opportunities - starting with barbershops.
                </p>
                <div style="display: flex; gap: 16px; flex-wrap: wrap; margin-top: 24px;">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('investors'))); ?>" class="btn" style="background: var(--color-primary); color: var(--color-black); border: 1px solid var(--color-black);">Invest With Us</a>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('brands'))); ?>" class="btn" style="background: var(--color-black); color: var(--color-primary); border: none;">Explore Our Brands</a>
                </div>
            </div>
            <div style="display: flex; align-items: center; justify-content: flex-end;">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/pdf_page0_img0.png'); ?>" alt="Africa silhouette graphic for ProArtist Africa" style="max-width: 100%; height: auto; display: block;" />
            </div>
        </div>
    </section>

    <!-- Slide 2: 360 Degree Support System -->
    <section class="home-slide hero-section" style="padding: 60px 0; background: var(--color-primary);">
        <div class="container" style="display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; max-width: 1200px;">
            <div style="display: flex; flex-direction: column; justify-content: center; max-width: 550px;">
                <h2 class="section-title" style="text-align: left; font-size: clamp(28px, 4vw, 40px); margin-bottom: 16px; color: #000000;">360 Degree Support System</h2>
                <p class="section-content" style="text-align: left; margin-bottom: 32px; color: #000000;">
                    We handle everything - recruitment, training, operations, customer experience and growth.
                    This allows each location to thrive with clarity and consistency.
                </p>
                <div style="display: flex; gap: 16px; flex-wrap: wrap; margin-top: 24px;">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('investors'))); ?>" class="btn" style="background: var(--color-primary); color: var(--color-black); border: 1px solid var(--color-black);">Invest With Us</a>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('brands'))); ?>" class="btn" style="background: var(--color-black); color: var(--color-primary); border: none;">Explore Our Brands</a>
                </div>
            </div>
            <div style="display: flex; align-items: center; justify-content: flex-end;">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/pdf_page0_img0.png'); ?>" alt="Africa silhouette graphic for ProArtist Africa" style="max-width: 100%; height: auto; display: block;" />
            </div>
        </div>
    </section>
        </div>
    </div>
</main>

<?php
get_footer();
