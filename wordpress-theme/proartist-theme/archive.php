<?php
/**
 * Archive Template (for Blog/Posts)
 *
 * @package ProArtist
 */

get_header();
?>

<main id="main" class="site-main">
    <section class="hero-section" style="padding: 60px 0; background: var(--color-white);">
        <div class="container" style="max-width: 1200px; text-align: center;">
            <h1 class="hero-title" style="text-align: center; margin-bottom: 24px; line-height: 1.2; font-weight: 800; color: #000000; font-size: clamp(32px, 5vw, 48px);">
                Learn More About The<br />Grooming Industry
            </h1>
            <p class="hero-subtitle" style="text-align: center; margin-bottom: 32px; color: #000000; font-size: 16px; max-width: 700px; margin-left: auto; margin-right: auto;">
                Welcome to the ProArtist Knowledge Hub - simplified insights for investors and anyone exploring the grooming business.
            </p>
        </div>
    </section>

    <section style="padding: 0 0 60px; background: var(--color-white);">
        <div class="container" style="max-width: 1200px;">
            <?php if (have_posts()) : ?>
                <div class="blog-cards-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 32px; margin-top: 60px;">
                    <?php while (have_posts()) : the_post(); ?>
                        <div style="border: 2px solid var(--color-primary); border-radius: 12px; padding: 24px; background: #ffffff; display: flex; flex-direction: column;">
                            <h3 style="font-size: 20px; font-weight: 700; color: #000000; margin-bottom: 12px;">
                                <a href="<?php the_permalink(); ?>" style="color: inherit; text-decoration: none;">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            
                            <p style="font-size: 14px; color: #000000; line-height: 1.6; margin-bottom: 16px;">
                                <?php the_excerpt(); ?>
                            </p>
                            
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')); ?>" alt="<?php the_title(); ?>" style="width: 100%; height: auto; border-radius: 8px; margin-top: auto;" />
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                </div>
                
                <div style="margin-top: 40px; text-align: center;">
                    <?php
                    the_posts_pagination(array(
                        'prev_text' => '&laquo; Previous',
                        'next_text' => 'Next &raquo;',
                    ));
                    ?>
                </div>
            <?php else : ?>
                <p style="text-align: center; padding: 40px; color: #000000;">
                    No blog posts yet. Add posts from WordPress Admin → Posts → Add New.
                </p>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php
get_footer();

