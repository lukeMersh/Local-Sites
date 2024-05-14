/**
Template Name: Houses for sale
*/




<?php

get_header();

if(have_posts()) : ?>

   <header>
   <?php
            // Start the Loop.
            while ( have_posts() ) :
                the_post();

                // You can use ACF functions to display custom fields.
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
</header>
<div class="entry-content">
                        <?php
                        // Display custom fields
                        if ( function_exists('get_field') ) {
                            $house = get_field('house');
                            if ( $house ) {
                                echo '<p>' . esc_html( $house ) . '</p>';
                            }
                        }
                        ?>

                    </div><!-- .entry-content -->
                    <?php endwhile; 
                     the_post_navigation();
                     else :
                         get_template_part('template-parts/content', 'none');?>
                         

