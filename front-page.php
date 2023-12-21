<?php get_header()?>
<div class="main">
        <!--hero section start-->
<?php get_template_part( 'partials/index/hero', 'hero' );?>

        <!--hero section end-->

        <!--promo-section section start-->
        <?php get_template_part( 'partials/index/promo-section', 'promo-section' );?>

        <!--promo-section section end-->

        <!--services-section start-->
        <?php get_template_part( 'partials/index/services-section', 'services-section' );?>




        <!--services section end-->


        <!--pricing with switch section start-->
        <?php get_template_part( 'partials/index/price-host', 'price-host' );?>

        <!--pricing with switch section end-->

        <!--feature-section start-->

        <?php get_template_part( 'partials/index/feature-section', 'feature-section' );?>


        <!--feature section end-->

        <!--call to action section start-->

        <?php get_template_part( 'partials/index/cal-to-action.php', 'cal-to-action.php' );?>

        <!--call to action section end-->

        <!--faq section start-->

        <?php get_template_part( 'partials/index/faq', 'faq' );?>


        <!--faq section end-->

        <!--testimonial and review section start-->
        <?php get_template_part( 'partials/index/testimonial', 'testimonial' );?>

        <!--testimonial and review section end-->


    </div>

<?php get_footer()?>
</body>

</html>