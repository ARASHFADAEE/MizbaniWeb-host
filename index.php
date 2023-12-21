<?php get_header()?>

    <div class="main">
        <!--blog section start-->
        <div class="module ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="sidebar-left pr-4">

                            <!-- جستجو widget-->
                            <aside class="widget widget-search">
                                <form>
                                    <input class="form-control" type="search" placeholder="کلمه کلیدی...">
                                    <button class="search-button" type="submit"><span class="ti-search"></span></button>
                                </form>
                            </aside>


                            <!-- دسته ها widget-->
                            <aside class="widget widget-categories">
                                <div class="widget-title">
                                    <h6>دسته ها</h6>
                                </div>
                                <ul>

                                <?php
    $categories = get_categories(array(
        'post_type' => 'post',
        'hide_empty' => false, // نمایش دسته‌بندی‌های خالی
    ));

    foreach ($categories as $category) {
        $category_link = get_category_link($category->term_id);
        echo  '<li><a href='.esc_url($category_link).'> '.esc_html($category->name).'<span class="float-right"></span></a></li>';

    }
    ?>
 



                                </ul>
                            </aside>

                            <!-- Recent entries widget-->
                            <aside class="widget widget-recent-entries-custom">
                                <div class="widget-title">
                                    <h6>پست های اخیر</h6>
                                </div>
                                <ul>
                                    <?php

                                    $arraypost=array(
                                        // 'post_type'=>'post',
                                        'posts_per_page'=> 3,
                                        
                                    );

                                    $query=new WP_Query($arraypost);


                                    if ( $query->have_posts() ) :
                                        while ( $query->have_posts() ) : $query->the_post();

?>
                                    <li class="clearfix">
                                        <div class="wi"><a href="blog-details.html">
                                        <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid rounded'])?>
                                        </a></div>
                                        <div class="wb"><a href="<?php the_permalink()?>"><?php the_title()?></a><span class="post-date"><?php the_date()?></span></div>
                                    </li>
<?php
endwhile;
endif;
?>
                                </ul>
                            </aside>

                            <!-- عضویت widget-->
                            <aside class="widget widget-categories">
                                <div class="widget-title">
                                    <h6>خبرنامه</h6>
                                </div>
                                <p>آدرس ایمیل خود را در زیر وارد کنید تا در خبرنامه ما مشترک شوید</p>
                                <form action="#" method="post" class="d-none d-md-block d-lg-block">
                                    <input type="text" class="form-control input" id="email-footer" name="email" placeholder="info@yourdomain.com">
                                    <button type="submit" class="btn primary-solid-btn btn-block btn-not-rounded mt-3">عضویت</button>
                                </form>
                            </aside>

                            <!-- Tags widget-->

                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                       
                                        <div class="row">
                    <?php


                            if (have_posts()) {
                                while (have_posts()) : the_post(); 

                                ?>
                    <div class="col-md-6">
                        <div class="single-blog-card card border-0 shadow-sm">
                            <span class="category position-absolute badge badge-pill badge-primary"><?php the_category()?></span>
                            <?php the_post_thumbnail( array(600,300) ,['class'=> 'card-img-top position-relative custom-imgs',] )?>
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
						
<!-- 						page -->
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

                    </div>
                </div>
            </div>
        </div>
        <!--blog section end-->
                

                
    </div>


<?php get_footer()?>
</body>

</html>