<?php
/**
 * The template for displaying archive of houses
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Dosth
 */
get_header();
?>
<div class="content-container">
    <h1 class="page-title"><?php post_type_archive_title(); ?></h1>    
    <div class="reviews-container">
        <div class="nd-dosth-reviews">
            <?php if ( have_posts() ): ?>
                <?php while( have_posts() ): ?>
                    <?php the_post(); ?>
                    <div class="review">
                        <blockquote>
                            <?php the_content(); ?>
                            <footer>
                                <cite><?php the_title(); ?></cite>
                                <span class="review-from">
                                    <?php printf( __( 'from %s', 'nd_dosth' ), get_field('source') ); ?>
                                </span>
                            </footer>
                        </blockquote>
                    </div>
                <?php endwhile; ?>
                <?php the_posts_pagination(); ?>
            <?php else: ?>
                <p><?php _e( 'No Reviews found', 'nd_dosth' ); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>