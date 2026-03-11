<?php
/**
 * Template Name: Jobs Page
 *
 * @package ProArtist
 */

get_header();
?>

<main id="main" class="site-main">
    <section class="hero-section jobs-professional-artists" style="padding: 60px 0; background: var(--color-primary);">
        <div class="container" style="display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; max-width: 1200px;">
            <div style="display: flex; flex-direction: column; justify-content: center; max-width: 550px;">
                <h1 class="hero-title" style="text-align: left; margin-bottom: 16px; line-height: 1.2; font-weight: 800; color: #000000; font-size: clamp(32px, 5vw, 48px);">
                    Professional Artists
                </h1>
                <h2 style="text-align: left; margin-bottom: 24px; line-height: 1.2; font-weight: 700; color: #000000; font-size: clamp(24px, 4vw, 32px);">
                    Be Seen. Be Skilled. Be Successful.
                </h2>
                <p class="hero-subtitle" style="text-align: left; margin-bottom: 24px; color: #000000; font-size: 16px; line-height: 1.6;">
                    Join ProArtist and become part of a movement that values your craft. We offer training, consistent clients, structured systems, and pathways to leadership.
                </p>
                
                <ul style="list-style: none; padding: 0; margin: 0 0 32px 0;">
                    <li style="margin-bottom: 12px; color: #000000; font-size: 16px; line-height: 1.6;">· Grow your skillset</li>
                    <li style="margin-bottom: 12px; color: #000000; font-size: 16px; line-height: 1.6;">· Earn more consistently</li>
                    <li style="margin-bottom: 12px; color: #000000; font-size: 16px; line-height: 1.6;">· Work in premium locations</li>
                    <li style="margin-bottom: 12px; color: #000000; font-size: 16px; line-height: 1.6;">· Access leadership programs</li>
                    <li style="margin-bottom: 12px; color: #000000; font-size: 16px; line-height: 1.6;">· Be part of an artist-first culture</li>
                </ul>
                
                <a href="https://forms.gle/LMRh3Bo8zr2DeLnJA" target="_blank" rel="noopener noreferrer" class="btn" style="background: #000000; color: #ffffff; border: none; width: fit-content; padding: 12px 32px;">Apply Now</a>
            </div>
            <div class="jobs-image-carousel" style="display: flex; align-items: center; justify-content: flex-end; width: 100%; max-width: 100%; overflow: hidden;">
                <div class="jobs-image-carousel-track">
                    <div class="jobs-image-carousel-slide"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/professional-artists-image1.jpg'); ?>" alt="Professional barber cutting hair" /></div>
                    <div class="jobs-image-carousel-slide"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Lm2.jpeg'); ?>" alt="Professional Artists - MANCAVE team" /></div>
                    <div class="jobs-image-carousel-slide jobs-image-zoom"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/professional-artists-image.jpg'); ?>" alt="Professional Artists" /></div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Location Coordinators Section -->
    <section class="hero-section jobs-location-coordinators" style="padding: 60px 0; background: var(--color-white);">
        <div class="container" style="display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; max-width: 1200px;">
            <div style="display: flex; flex-direction: column; justify-content: flex-start; max-width: 550px;">
                <h1 class="hero-title" style="text-align: left; margin-bottom: 16px; line-height: 1.2; font-weight: 800; color: #000000; font-size: clamp(32px, 5vw, 48px);">
                    Location <span style="color: var(--color-primary);">Coordinators</span>
                </h1>
                <h2 style="text-align: left; margin-bottom: 24px; line-height: 1.2; font-weight: 700; color: #000000; font-size: clamp(24px, 4vw, 32px);">
                    Lead the Floor. Shape the Experience.
                </h2>
                <p class="hero-subtitle" style="text-align: left; margin-bottom: 24px; color: #000000; font-size: 16px; line-height: 1.6;">
                    ProArtist Location Coordinators are the heartbeat of each store - running operations, supporting artists, and ensuring customer excellence every day.
                </p>
                
                <ul style="list-style: none; padding: 0; margin: 0 0 32px 0;">
                    <li style="margin-bottom: 12px; color: #000000; font-size: 16px; line-height: 1.6;">· You lead daily performance</li>
                    <li style="margin-bottom: 12px; color: #000000; font-size: 16px; line-height: 1.6;">· You enable artists to succeed</li>
                    <li style="margin-bottom: 12px; color: #000000; font-size: 16px; line-height: 1.6;">· You drive customer satisfaction</li>
                    <li style="margin-bottom: 12px; color: #000000; font-size: 16px; line-height: 1.6;">· You grow into multi-location leadership roles</li>
                </ul>
                
                <a href="https://forms.gle/Pagqt6LzBEJCrZGz7" target="_blank" rel="noopener noreferrer" class="btn" style="background: #000000; color: #ffffff; border: none; width: fit-content; padding: 12px 32px;">Apply Now</a>
            </div>
            <div class="jobs-image-carousel" style="display: flex; align-items: center; justify-content: flex-end; width: 100%; max-width: 100%; overflow: hidden;">
                <div class="jobs-image-carousel-track">
                    <div class="jobs-image-carousel-slide"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/location-coordinators-image.jpg'); ?>" alt="Location Coordinators - store interior" /></div>
                    <div class="jobs-image-carousel-slide"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Lm1.jpg'); ?>" alt="Location Coordinators team" /></div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
