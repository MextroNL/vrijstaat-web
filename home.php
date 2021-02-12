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


    <div class="container">

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

    <div class="nomics-ticker-widget" data-name="Cardano" data-base="ADA" data-quote="EUR"></div><script src="https://widget.nomics.com/embed.js"></script>

    </div>


<?php get_footer(); ?>