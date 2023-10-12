<?php get_header()?>
    <div class="main">
        <!--breadcrumb bar start-->
        <?php  
                        if ( have_posts() ) :
                            while ( have_posts() ) : the_post(); ?>
        
        ?>
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
                                <?php the_post_thumbnail();?>
                            <div class="post-wrapper">
                                <div class="post-header">
                                    <h1 class="post-title">چگونه از سایت تم فارست خرید کنیم؟</h1>
                                    <ul class="post-meta">
                                        <li>16 تیر، 1400</li>
                                        <li>در <a href="#">برندینگ</a>, <a href="#">طراحی</a></li>
                                        <li><a href="#">3 کامنت</a></li>
                                    </ul>
                                </div>
                                <div class="post-content">
                                    <p>ورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود.</p>
                                    <p> این یک نوشته آزمایشی است که به طراحان و برنامه نویسان کمک میکند تا این عزیزان با بهره گیری از این نوشته تستی و آزمایشی بتوانند نمونه تکمیل شده از پروژه و طرح خودشان را به کارفرما نمایش دهند، استفاده از این متن تستی می تواند سرعت پیشرفت پروژه را افزایش دهد، و طراحان به جای تایپ و نگارش متن می توانند تنها با یک کپی و پست این متن را در کادرهای مختلف جایگزین نمائید. این نوشته توسط سایت لورم ایپسوم فارسی نگاشته شده است.</p>
                                    <blockquote class="blockquote">
                                        <p>هر نفسی که فرو می‌ بریم، مرگی را که مدام به ما دست‌ اندازی می‌کند پس می‌زند... در نهایت این مرگ است که باید پیروز شود، زیرا.</p>
                                        <footer class="blockquote-footer">آماندا پولاگ، گوگل.</footer>
                                    </blockquote>
                                    <p>این یک نوشته آزمایشی است که به طراحان و برنامه نویسان کمک میکند تا این عزیزان با بهره گیری از این نوشته تستی و آزمایشی بتوانند نمونه تکمیل شده از پروژه و طرح خودشان را به کارفرما نمایش دهند، استفاده از این متن تستی می تواند سرعت پیشرفت پروژه را افزایش دهد، و طراحان به جای تایپ.</p>
                                    <p>ورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود.</p>
                                    <ol>
                                        <li>استراتژی طراحی</li>
                                        <li>توسعه اپلیکیشن</li>
                                        <li>مدرن طراحی</li>
                                    </ol>
                                    <p>این یک نوشته آزمایشی است که به طراحان و برنامه نویسان کمک میکند تا این عزیزان با بهره گیری از این نوشته تستی و آزمایشی بتوانند نمونه تکمیل شده از پروژه و طرح خودشان را به کارفرما نمایش دهند، استفاده از این متن تستی می تواند سرعت پیشرفت پروژه را افزایش دهد، و طراحان به جای تایپ.</p>
                                    <p> این یک نوشته آزمایشی است که به طراحان و برنامه نویسان کمک میکند تا این عزیزان با بهره گیری از این نوشته تستی و آزمایشی بتوانند نمونه تکمیل شده از پروژه و طرح خودشان را به کارفرما نمایش دهند، استفاده از این متن تستی می تواند سرعت پیشرفت پروژه را افزایش دهد، و طراحان به جای تایپ و نگارش متن می توانند تنها با یک کپی و پست این متن را در کادرهای مختلف جایگزین نمائید. این نوشته توسط سایت لورم ایپسوم فارسی نگاشته شده است.</p>
                                </div>
                                <div class="post-footer">
                                    <div class="post-tags"><a href="#">زندگی</a><a href="#">موزیک</a><a href="#">اخبار</a><a href="#">سفر</a></div>
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
                                    <li><a href="#">سفر <span class="float-right">112</span></a></li>
                                    <li><a href="#">توسعه <span class="float-right">86</span></a></li>
                                    <li><a href="#">ورزش <span class="float-right">10</span></a></li>
                                    <li><a href="#">عکاسی <span class="float-right">144</span></a></li>
                                    <li><a href="#">وردپرس <span class="float-right">18</span></a></li>
                                </ul>
                            </aside>

                            <!-- Recent entries widget-->
                            <aside class="widget widget-recent-entries-custom">
                                <div class="widget-title">
                                    <h6>پست های اخیر</h6>
                                </div>
                                <ul>
                                    <li class="clearfix">
                                        <div class="wi"><a href="blog-details.html"><img src="assets/img/blog/1.jpg" alt="recent post" class="img-fluid rounded" /></a></div>
                                        <div class="wb"><a href="blog-details.html">میزبانی اشتراکی چیست؟.</a><span class="post-date">16 مهر، 1402</span></div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="wi"><a href="blog-details.html"><img src="assets/img/blog/2.jpg" alt="recent post" class="img-fluid rounded" /></a></div>
                                        <div class="wb"><a href="blog-details.html">میزبانی اشتراکی چیست؟.</a><span class="post-date">16 مهر، 1402</span></div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="wi"><a href="blog-details.html"><img src="assets/img/blog/3.jpg" alt="recent post" class="img-fluid rounded" /></a></div>
                                        <div class="wb"><a href="blog-details.html">میزبانی اشتراکی چیست؟.</a><span class="post-date">16 مهر، 1402</span></div>
                                    </li>
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