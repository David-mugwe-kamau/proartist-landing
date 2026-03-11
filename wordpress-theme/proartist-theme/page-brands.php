<?php
/**
 * Template Name: Brands Page
 *
 * @package ProArtist
 */

get_header();
?>

<main id="main" class="site-main">
    <!-- MANCAVE Section -->
    <section class="hero-section" style="padding: 60px 0; background: var(--color-white);">
        <div class="container" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 80px; align-items: center; max-width: 1200px;">
            <div style="display: flex; flex-direction: column; justify-content: center; max-width: 550px;">
                <h1 class="hero-title" style="text-align: left; margin-bottom: 24px; line-height: 1.2; font-weight: 800; color: #000000; font-size: clamp(36px, 6vw, 56px);">
                    MANCAVE
                </h1>
                <p class="hero-subtitle" style="text-align: left; margin-bottom: 32px; color: #000000;">
                    MANCAVE is a modern men's grooming and lifestyle hub delivering premium, fast haircuts with ManMarket - style and essentials in one stop.
                </p>
                
                <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-bottom: 32px;">
                    <div>
                        <div style="font-size: 32px; font-weight: 800; color: #000000; margin-bottom: 8px;">3</div>
                        <div style="font-size: 12px; text-transform: uppercase; letter-spacing: 0.1em; color: #666;">LOCATIONS</div>
                    </div>
                    <div>
                        <div style="font-size: 32px; font-weight: 800; color: #000000; margin-bottom: 8px;">5k+</div>
                        <div style="font-size: 12px; text-transform: uppercase; letter-spacing: 0.1em; color: #666;">CUSTOMERS<br>SERVED</div>
                    </div>
                    <div>
                        <div style="font-size: 32px; font-weight: 800; color: #000000; margin-bottom: 8px;">750k</div>
                        <div style="font-size: 12px; text-transform: uppercase; letter-spacing: 0.1em; color: #666;">AV<br>REVENUE</div>
                    </div>
                </div>
                
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('investors'))); ?>" class="btn" style="background: #000000; color: #ffffff; border: none; width: fit-content;">Learn More</a>
            </div>
            <div class="jobs-image-carousel" style="display: flex; align-items: center; justify-content: flex-end; width: 100%; max-width: 100%; overflow: hidden;">
                <div class="jobs-image-carousel-track">
                    <div class="jobs-image-carousel-slide"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/mancave-image.jpg'); ?>" alt="MANCAVE interior" /></div>
                    <div class="jobs-image-carousel-slide"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/nsk1.jpeg'); ?>" alt="MANCAVE grooming hub" /></div>
                    <div class="jobs-image-carousel-slide"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/nsk2.jpeg'); ?>" alt="MANCAVE grooming hub" /></div>
                </div>
            </div>
        </div>
    </section>

    <!-- BARBERSTOP Section -->
    <section class="hero-section" style="padding: 60px 0; background: #333333;">
        <div class="container" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 80px; align-items: center; max-width: 1200px;">
            <div style="display: flex; flex-direction: column; justify-content: center; max-width: 550px;">
                <h1 class="hero-title" style="text-align: left; margin-bottom: 24px; line-height: 1.2; font-weight: 800; color: #ffffff; font-size: clamp(36px, 6vw, 56px);">
                    BARBERSTOP
                </h1>
                <p class="hero-subtitle" style="text-align: left; margin-bottom: 32px; color: #ffffff;">
                    Barberstop blends grooming and wellness - premium haircuts, massages, and showers in a calm, luxurious space.
                </p>
                
                <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-bottom: 32px;">
                    <div>
                        <div style="font-size: 32px; font-weight: 800; color: #ffffff; margin-bottom: 8px;">1</div>
                        <div style="font-size: 12px; text-transform: uppercase; letter-spacing: 0.1em; color: #cccccc;">LOCATIONS</div>
                    </div>
                    <div>
                        <div style="font-size: 32px; font-weight: 800; color: #ffffff; margin-bottom: 8px;">1k+</div>
                        <div style="font-size: 12px; text-transform: uppercase; letter-spacing: 0.1em; color: #cccccc;">CUSTOMERS<br>SERVED</div>
                    </div>
                    <div>
                        <div style="font-size: 32px; font-weight: 800; color: #ffffff; margin-bottom: 8px;">1.1m</div>
                        <div style="font-size: 12px; text-transform: uppercase; letter-spacing: 0.1em; color: #cccccc;">AV<br>REVENUE</div>
                    </div>
                </div>
                
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('investors'))); ?>" class="btn" style="background: #ffffff; color: #000000; border: none; width: fit-content;">Learn More</a>
            </div>
            <div class="jobs-image-carousel brands-barberstop-carousel" style="display: flex; align-items: center; justify-content: flex-end; width: 100%; max-width: 100%; overflow: hidden;">
                <div class="jobs-image-carousel-track">
                    <div class="jobs-image-carousel-slide"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/barberstop-image.jpg'); ?>" alt="BARBERSTOP spa bathroom" /></div>
                    <div class="jobs-image-carousel-slide"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/barberstop1.jpeg'); ?>" alt="BARBERSTOP premium grooming" /></div>
                    <div class="jobs-image-carousel-slide"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/mission-image.jpg'); ?>" alt="ProArtist barbershop interior" /></div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();

