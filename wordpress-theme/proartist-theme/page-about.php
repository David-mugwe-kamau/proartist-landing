<?php
/**
 * Template Name: About Page
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
                    Who are we?
                </h1>
                <p class="hero-subtitle" style="text-align: left; margin-bottom: 32px; color: #000000;">
                    ProArtist is an artist-first grooming ecosystem built on structure, creativity, and business excellence.
                </p>
            </div>
            <div style="display: flex; align-items: center; justify-content: flex-end;">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/about-image.jpg'); ?>" alt="ProArtist team - barbershop interior" style="max-width: 100%; height: auto; display: block;" />
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="hero-section" style="padding: 60px 0; background: var(--color-white);">
        <div class="container" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 80px; align-items: center; max-width: 1200px;">
            <div style="display: flex; flex-direction: column; justify-content: center; max-width: 550px;">
                <h1 class="hero-title" style="text-align: left; margin-bottom: 24px; line-height: 1.2; font-weight: 800; color: #000000; font-size: clamp(36px, 6vw, 56px);">
                    Mission
                </h1>
                <p class="hero-subtitle" style="text-align: left; margin-bottom: 32px; color: #000000;">
                    To empower grooming professionals by <strong>building franchises that nurture talent, elevate creativity,</strong> and run on operational excellence.
                </p>
            </div>
            <div style="display: flex; align-items: center; justify-content: flex-end;">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/mission-image.jpg'); ?>" alt="ProArtist barbershop interior" style="max-width: 100%; height: auto; display: block;" />
            </div>
        </div>
    </section>

    <!-- Vision Section -->
    <section class="hero-section" style="padding: 60px 0; background: var(--color-white);">
        <div class="container" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 80px; align-items: center; max-width: 1200px;">
            <div style="display: flex; flex-direction: column; justify-content: center; max-width: 550px;">
                <h1 class="hero-title" style="text-align: left; margin-bottom: 24px; line-height: 1.2; font-weight: 800; color: #000000; font-size: clamp(36px, 6vw, 56px);">
                    Vision
                </h1>
                <p class="hero-subtitle" style="text-align: left; margin-bottom: 32px; color: #000000;">
                    To become <strong>Africa's leading grooming franchise portfolio</strong> where investors thrive and professionals grow.
                </p>
            </div>
            <div style="display: flex; align-items: center; justify-content: flex-end;">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/vision-image.jpg'); ?>" alt="ProArtist grooming shop exterior" style="max-width: 100%; height: auto; display: block;" />
            </div>
        </div>
    </section>

    <!-- Buttons Section -->
    <section style="padding: 60px 0; background: var(--color-white); text-align: center;">
        <div class="container">
            <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('investors'))); ?>" class="btn" style="background: var(--color-white); color: var(--color-black); border: 1px solid var(--color-black);">Invest With Us</a>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('brands'))); ?>" class="btn" style="background: var(--color-primary); color: var(--color-black); border: none;">Explore Our Brands</a>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();

