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







<!--        <!--Index Post Block-->
<!--        <div class="block3">-->
<!---->
<!---->
<!--            --><?php
//
//            if (strpos($url,'/en/') !== false) {
//                $category_id = 'english cat';
//            }else{
//                $category_id = '3';
//            }
//
//            $catquery = new WP_Query( 'cat='. $category_id . '&posts_per_page=-1' );
//
//            if ( $catquery->have_posts() ) :
//                while($catquery->have_posts()) : $catquery->the_post();
//                    ?>
<!---->
<!---->
<!--                    --><?php // ?>
<!---->
<!---->
<!---->
<!---->
<!---->
<!--                        <div class="row post-block" id="post---><?php //the_ID(); ?><!--">-->
<!---->
<!--                                <!--                                     Thumbnail-->
<!--<!--                                <a href="-->--><?php ////the_permalink(); ?><!--<!--#content"><div class="post-thumbnail">-->--><?php ////the_post_thumbnail('medium_large'); ?><!--<!--</div></a>-->-->
<!--                                <!--                                     Thumbnail End-->
<!---->
<!--                            <a href="--><?php //the_permalink(); ?><!--#content">-->
<!---->
<!--                                <!--                                     Title-->
<!--                               <h4 class="post-title">--><?php //the_title(); ?><!--</h4>-->
<!---->
<!---->
<!---->
<!--                                </a>-->
<!---->
<!---->
<!--                        </div>-->
<!--                        <!--                            Post Content End-->
<!---->
<!---->
<!--                --><?php
//                endwhile;?>
<!---->
<!--            --><?php
//            else:
//                echo '<h4 id="results">' . $nocurrentresults . '</h4>';
//            endif; ?>
<!--            --><?php //wp_reset_query(); // reset the query ?>
<!--        </div>-->

        <!--Container End-->





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




<?php get_footer(); ?>