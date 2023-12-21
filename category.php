<?php get_header()?>
<body>

    <div class="main">

        <!--blog section start-->
        <section class="our-blog-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="section-heading mb-5">
                            <h2><?php the_archive_title()?></h2>
                            <p>
                                <?php the_archive_description()?>
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
                            <span class="category position-absolute badge badge-pill badge-primary"><?the_category()?></span>
                            <?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img-top position-relative custom_image_mizban'])?>
                            <div class="card-body">
                                <div class="post-meta mb-2">
                                    <ul class="list-inline meta-list">
                                        <li class="list-inline-item"><?php the_date()?></li>
                                        <li class="list-inline-item"><span><?php get_comments_number($post->ID)?></span> کامنت</li>
                                    </ul>
                                </div>
                                <h3 class="h5 card-title"><a href="<?php the_permalink()?>"><?php the_title()?></a></h3>
                                <p class="card-text"><?php the_excerpt()?></p>
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

    <!--footer section start-->
<?php get_footer()?>
    <!--footer section end-->
    <!--bottom to top button start-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="ti-rocket"></span>
    </button>

</body>

</html>