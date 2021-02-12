<!--Theme Footer-->
<footer class="container-fluid footer-block">

    <div class="footer-widget-wrapper">
        <div class="navbar language_menu" id="footer-lang">

<?php
//            wp_nav_menu( array(
//                'theme_location'    => 'lang-menu',
//                'depth'             => 2,
//                'container'         => 'div',
//                'container_class'   => '',
//                'container_id'      => '',
//                'menu_class'        => 'navbar-nav nav-fill',
//                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
//                'walker'            => new WP_Bootstrap_Navwalker(),
//            ) );
           ?>


        </div>
        <?php
        if(is_active_sidebar('footer-widget-1')){
            dynamic_sidebar('footer-widget-1');
        }

        if(is_active_sidebar('footer-widget-2')){
            dynamic_sidebar('footer-widget-2');
        }

        if(is_active_sidebar('footer-widget-3')){
            dynamic_sidebar('footer-widget-3');
        }

        ?>
    </div>
    <script defer src="https://www.livecoinwatch.com/static/lcw-widget.js"></script> <div class="livecoinwatch-widget-5" lcw-base="EUR" lcw-color-tx="#abb8c3" lcw-marquee-1="coins" lcw-marquee-2="movers" lcw-marquee-items="10" ></div>
    <div class="copyrightbottom">
        <a href=""><?php echo bloginfo('name') . " &copy; " . date("Y") . " - Made by Mextro";?></a>
    </div>
</footer>
</div>
</div>
<script>
    // VANTA.FOG({
    //     el: "#animated_bg",
    //     highlightColor: 0x706e68,
    //     midtoneColor: 0x706e68,
    //     lowlightColor: 0xffffff,
    //     baseColor: 0x1b1b1b,
    //     blurFactor: 0.7,
    //     speed: 0.50,
    //     zoom: 0.10
    // })
    VANTA.NET({
        el: "#animated_bg",
        mouseControls: true,
        touchControls: true,
        gyroControls: false,
        minHeight: 200.00,
        minWidth: 200.00,
        scale: 1.00,
        scaleMobile: 1.00,
        color: 0xffffff,
        backgroundColor: 0x9B97CF

    })
</script>
<?php wp_footer(); ?>
</body>
</html>
