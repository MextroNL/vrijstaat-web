<?php
/**
 * Template Name: Home
 *
 * @package WordPress
 */
?>

<?php get_header(); ?>

    <div class="container">
        <div class="block1">
            <?php
            if(is_active_sidebar('body-widget-left')){?>
                <?php dynamic_sidebar('body-widget-left');
            }
            ?>
            <?php
            if(is_active_sidebar('body-widget-right')){?>
                <?php dynamic_sidebar('body-widget-right');
            }
            ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                <div class="block1content">

                    <?php the_content();?>
                </div>

            <?php endwhile;
            else:?>
                <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
        </div>
    </div>




    <div class="block2">
        <div class="row footer-widget-wrapper">
            <?php
            if(is_active_sidebar('index-widget-1')){?>
                <div class="col-sm-3"><?php dynamic_sidebar('index-widget-1');?></div><?php
            }

            if(is_active_sidebar('index-widget-2')){?>
                <div class="col-sm-3"><?php dynamic_sidebar('index-widget-2');?></div><?php
            }

            if(is_active_sidebar('index-widget-3')){?>
                <div class="col-sm-3"><?php dynamic_sidebar('index-widget-3');?></div><?php
            }

            if(is_active_sidebar('index-widget-4')){?>
                <div class="col-sm-3"><?php dynamic_sidebar('index-widget-4');?></div><?php
            }

            ?>
        </div>
    </div>
    <div class="container">
        <script defer src="https://www.livecoinwatch.com/static/lcw-widget.js"></script> <div class="livecoinwatch-widget-1" lcw-coin="ADA" lcw-base="EUR" lcw-secondary="BTC" lcw-period="m" lcw-color-tx="#ffffff" lcw-color-pr="#2a71d0" lcw-color-bg="#333333" lcw-border-w="0" lcw-digits="4" ></div>
    </div>


<?php get_footer(); ?>