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
                                        <li><a href="#"><?php get_comments_number($post->ID)?> کامنت</a></li>
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
                        <div class="comments-area">
                            <h5 class="comments-title">3 کامنت</h5>
                            <div class="comment-list">
                                <!-- Comment-->
                                <div class="comment">
                                    <div class="comment-author"><img class="avatar img-fluid rounded-circle" src="assets/img/client-2.jpg" alt="comment" /></div>
                                    <div class="comment-body">
                                        <div class="comment-meta">
                                            <div class="comment-meta-author"><a href="#">جیسون فورد</a></div>
                                            <div class="comment-meta-date"><a href="#">5 دی، 1400 در ساعت 4:51 ب.ظ</a></div>
                                        </div>
                                        <div class="comment-content">
                                            <p>این یک نوشته آزمایشی است که به طراحان و برنامه نویسان کمک میکند تا این عزیزان با بهره گیری از این نوشته تستی و آزمایشی بتوانند نمونه تکمیل شده از پروژه و طرح خودشان را به کارفرما نمایش دهند، استفاده از این متن تستی می تواند سرعت پیشرفت پروژه را افزایش دهد، و طراحان به جای تایپ.</p>
                                        </div>
                                        <div class="comment-reply"><a href="#">پاسخ</a></div>
                                    </div>
                                    <!-- Subcomment-->
                                    <div class="children">
                                        <div class="comment">
                                            <div class="comment-author"><img class="avatar img-fluid rounded-circle" src="assets/img/client-3.jpg" alt="comment" /></div>
                                            <div class="comment-body">
                                                <div class="comment-meta">
                                                    <div class="comment-meta-author"><a href="#">هری بانسون</a></div>
                                                    <div class="comment-meta-date"><a href="#">5 دی، 1400 در ساعت 4:51 ب.ظ</a></div>
                                                </div>
                                                <div class="comment-content">
                                                    <p> این یک نوشته آزمایشی است که به طراحان و برنامه نویسان کمک میکند تا این عزیزان با بهره گیری از این نوشته تستی و آزمایشی بتوانند نمونه تکمیل شده از پروژه و طرح خودشان را به کارفرما نمایش دهند، استفاده از این متن تستی می تواند سرعت پیشرفت پروژه را افزایش دهد.</p>
                                                </div>
                                                <div class="comment-reply"><a href="#">پاسخ</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment-->
                                <div class="comment">
                                    <div class="comment-author"><img class="avatar img-fluid rounded-circle" src="assets/img/client-4.jpg" alt="comment" /></div>
                                    <div class="comment-body">
                                        <div class="comment-meta">
                                            <div class="comment-meta-author"><a href="#">هنری سویل</a></div>
                                            <div class="comment-meta-date"><a href="#">5 دی، 1400 در ساعت 4:51 ب.ظ</a></div>
                                        </div>
                                        <div class="comment-content">
                                            <p>این یک نوشته آزمایشی است که به طراحان و برنامه نویسان کمک میکند تا این عزیزان با بهره گیری از این نوشته تستی و آزمایشی بتوانند نمونه تکمیل شده از پروژه و طرح خودشان را به کارفرما نمایش دهند، استفاده از این متن تستی می تواند سرعت پیشرفت پروژه را افزایش دهد، و طراحان به جای تایپ.</p>
                                        </div>
                                        <div class="comment-reply"><a href="#">پاسخ</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-respond">
                                <h5 class="comment-reply-title">ارسال نظر</h5>
                                <p class="comment-notes">آدرس ایمیل شما منتشر نخواهد شد. فیلدهای الزامی مشخص شده اند</p>
                                <form class="comment-form row">
                                    <div class="form-group col-md-4">
                                        <input class="form-control" type="text" placeholder="نام">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <input class="form-control" type="text" placeholder="ایمیل">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <input class="form-control" type="url" placeholder="شرکت">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea class="form-control" rows="8" placeholder="نظر شما..."></textarea>
                                    </div>
                                    <div class="form-submit col-md-12">
                                        <button class="btn primary-solid-btn" type="submit">ارسال نظر</button>
                                    </div>
                                </form>
                            </div>
                        </div>
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
                                    <h6>دسته ها</h6>
                                </div>
                                <ul>
                                    <?php
                                        $categories = get_categories(array(
                                            'hide_empty' => true, 
                                        ));
                                    
                                    ?>
                                    <?php
                                        foreach ($categories as $category){?>


                                    <li><a href="#"><?php $category->name?> <span class="float-right">112</span></a></li>
<?php };?>
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
                            <aside class="widget widget-tag-cloud">
                                <div class="widget-title">
                                    <h6>تگ ها</h6>
                                </div>
                                <div class="tag-cloud"><a href="#">ای کامرس</a><a href="#">نمونه کار</a><a href="#">واکنشگرا</a><a href="#">بوت استرپ</a><a href="#">کار</a><a href="#">شرکت</a></div>
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