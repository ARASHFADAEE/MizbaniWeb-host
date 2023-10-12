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
                                <li class="list-inline-item breadcrumb-item active"><?php the_archive_title()?></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumb bar end-->

        <!--blog section start-->
        <section class="our-blog-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="section-heading mb-5">
                            <h2>آخرین اخبار هاستینگ</h2>
                            <p>
                                این یک نوشته آزمایشی است که به طراحان و برنامه نویسان کمک میکند تا این عزیزان با بهره گیری از این نوشته تستی و آزمایشی بتوانند نمونه تکمیل شده از پروژه و طرح خودشان.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php


                            if (have_posts()) {
                                while (have_posts()) : the_post(); 

                                ?>
                    <div class="col-md-4">
                        <div class="single-blog-card card border-0 shadow-sm">
                            <span class="category position-absolute badge badge-pill badge-primary"><?php the_category()?></span>
                            <?php the_post_thumbnail( 'post-thumbnails' ,['class'=> 'card-img-top position-relative custom-imgs',] )?>
                            <div class="card-body">
                                <div class="post-meta mb-2">
                                    <ul class="list-inline meta-list">
                                    </ul>
                                </div>
                                <h3 class="h5 card-title"><a href="<?php the_permalink()?>"><?PHP the_title()?></a></h3>
                                <p class="card-text"><?php the_excerpt() ?></p>
                                <a href="<?php the_permalink()?>" class="detail-link">ادامه مطلب <span class="ti-arrow-left"></span></a>
                            </div>
                        </div>
                    </div>
<?php
                        endwhile;
                };


?>
                </div>

                <!--pagination start-->


                <div class="row">
    <div class="col-md-12">
        <nav class="<?php echo esc_attr('custom-pagination-nav mt-4'); ?>">
            <ul class="<?php echo esc_attr('pagination justify-content-center'); ?>">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'posts_per_page' => 4,
                    'paged' => $paged,
                );
                $query = new WP_Query($args);
                $total_pages = $query->max_num_pages;

                if ($total_pages > 1) {
                    echo '<li class="page-item"><a class="page-link" href="' . esc_url(get_pagenum_link($paged - 1)) . '"><span class="ti-angle-left"></span></a></li>';

                    for ($i = 1; $i <= $total_pages; $i++) {
                        echo '<li class="page-item ' . (($paged == $i) ? 'active' : '') . '"><a class="page-link" href="' . esc_url(get_pagenum_link($i)) . '">' . esc_html($i) . '</a></li>';
                    }

                    echo '<li class="page-item"><a class="page-link" href="' . esc_url(get_pagenum_link($paged + 1)) . '"><span class="ti-angle-right"></span></a></li>';
                }
                ?>
            </ul>
        </nav>
    </div>
</div>




                <!--pagination end-->

            </div>
        </section>
        <!--blog section end-->

    </div>
<?php get_footer()?>
</body>

</html>