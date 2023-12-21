<?php get_header()?>
    <div class="main">
        <!--breadcrumb bar start-->
        <?php  
                        if ( have_posts() ) :
                            while ( have_posts() ) : the_post(); ?>
        

        <div class="breadcrumb-bar py-3 gray-light-bg border-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0 pl-0">
                                <li class="list-inline-item breadcrumb-item"><a href="#">خانه</a></li>
                                <li class="list-inline-item breadcrumb-item active"><?php the_title();?></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumb bar end-->

        <!--blog section start-->
        <div class="module ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <!-- Post-->
                        <article class="post">
                            <div class="post-preview">
                                <!-- <img src="assets/img/blog/1-w.jpg" alt="article" class="img-fluid" /></div> -->
                                <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid'])?>
                            <div class="post-wrapper">
                                <div class="post-header">
                                    <h1 class="post-title"><?php the_title();?></h1>
                                    <ul class="post-meta">
                                        <li><?php the_date();?></li>
                                        <li><?php the_category();?></li>
                                        <li><a href="#"><?php echo get_comments_number($post->ID)?> کامنت</a></li>
                                    </ul>
                                </div>
                                <div class="post-content">
                                    <?php the_content();?>

                                </div>
                                <div class="post-footer">
                                    <div class="post-tags">
                                        <?php the_tags();?>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- Post end-->

                        <!-- Comments area-->
                        <?php comments_template(); ?>


                        <!-- Comments area end-->
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="sidebar-right pl-4">

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
                                    <h6>دسته بندی مقالات</h6>
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
                                    <h6>پست های اخیر میزبانی وب</h6>
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
                            <aside class="widget widget-tag-cloud">
                                <div class="widget-title">
                                    <h6>تگ ها</h6>
                                </div>
                                <div class="tag-cloud">
                                    <?php the_tags(' ')?>

                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--blog section end-->
<?php
endwhile;
endif;
?>
    </div>

<?php get_footer()?>
</body>

</html>