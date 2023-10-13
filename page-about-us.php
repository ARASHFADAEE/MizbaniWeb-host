<?php get_header()?>

    <div class="main">


        <!--breadcrumb bar start-->
        <div class="breadcrumb-bar py-3 gray-light-bg border-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0 pl-0">
                                <li class="list-inline-item breadcrumb-item"><a href="#">خانه</a></li>
                                <li class="list-inline-item breadcrumb-item"><a href="#">صفحات جانبی</a></li>
                                <li class="list-inline-item breadcrumb-item active">درباره ما</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumb bar end-->

        <!--feature section tab style start-->
        <section class="feature-tab-section ptb-100">
            <div class="container">
                <?php the_content()?>

            </div>
        </section>
 

    </div>
<?php get_footer()?>
</body>

</html>