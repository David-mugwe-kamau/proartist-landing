<?php
/**
 * Single Post Template
 *
 * @package ProArtist
 */

get_header();
?>

<main id="main" class="site-main">
    <section class="section">
        <div class="container" style="max-width: 800px;">
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h1 class="section-title" style="text-align: left; margin-bottom: 16px;">
                            <?php the_title(); ?>
                        </h1>
                        <div style="color: var(--color-text-muted); margin-bottom: 32px;">
                            <time datetime="<?php echo get_the_date('c'); ?>">
                                <?php echo get_the_date(); ?>
                            </time>
                        </div>
                    </header>

                    <?php if (has_post_thumbnail()) : ?>
                        <div style="margin-bottom: 32px;">
                            <?php the_post_thumbnail('large', array('style' => 'width: 100%; height: auto; border-radius: 12px;')); ?>
                        </div>
                    <?php endif; ?>

                    <div class="entry-content" style="font-size: 18px; line-height: 1.8; color: var(--color-text-muted);">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
            
            <div style="margin-top: 60px; text-align: center;">
                <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="btn btn-secondary">
                    ← Back to Blog
                </a>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();

