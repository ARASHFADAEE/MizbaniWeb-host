<?php get_header()?>
    <div class="main">

        <!--hero section start-->
        <section class="hero-equal-height pt-165 pb-100 gradient-overlay" style="background: url('<?php echo get_template_directory_uri()?>/assets/img/hero-1.jpg')no-repeat center center / cover">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-9">
                        <div class="hero-content-wrap text-white text-center position-relative z-index">
                            <h1 class="text-white">هاست ووکامرس</h1>
                            <p class="lead">ورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--hero section end-->

        <!--custom plan section start-->
        <section id="custom-plan" class="custom-plan gray-light-bg pt-5 mt--165">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="custom-plan-box white-bg custom-shadow">
                            <input id="c-plan" type="text" data-slider-min="1" data-slider-max="12" data-slider-step="1" data-slider-value="6" data-currency="هزار تومانءءء" data-unit="">

                            <ul class="list-inline mt-5 custom-vps-list text-center">
                                <li class="list-inline-item">
                                    <div class="single-vps-item rounded text-center">
                                        <span class="ti-shield icon-sm color-primary p-2 mb-3"></span>
                                        <h6 class="d-block py-1">هسته</h6>
                                        <h5 class="mb-0 feature vpsCore h5"><span>1</span>  گیگابایت</h5>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="single-vps-item rounded text-center">
                                        <span class="ti-plug icon-sm color-primary p-2 mb-3"></span>
                                        <h6 class="d-block py-1">حافظه</h6>
                                        <h5 class="mb-0 feature vpsحافظه"><span>2</span>  گیگابایت</h5>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="single-vps-item rounded text-center">
                                        <span class="ti-harddrive icon-sm color-primary p-2 mb-3"></span>
                                        <h6 class="d-block py-1">فضا</h6>
                                        <h5 class="mb-0 feature vpsStorage"><span>10</span>  گیگابایت</h5>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="single-vps-item rounded text-center">
                                        <span class="ti-dashboard icon-sm color-primary p-2 mb-3"></span>
                                        <h6 class="d-block py-1">پهنای باند</h6>
                                        <h5 class="mb-0 feature vpsBandwidth"><span>1000</span>  گیگابایت</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="custom-plan-info-box p-5 white-bg custom-shadow">
                            <h5>خلاصه سفارش</h5>
                            <p>بستر میزبانی انعطاف پذیر برای استقرار پروژه های آنلاین شما.</p>
                            <div class="price vpsPrice">200,000 تومانءءء</div>
                            <div class="btn-holder">
                                <a href="#" class="btn primary-solid-btn vpsWHmcsUrl">خرید</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--custom plan section end-->

        <!--vps hosting pricing plane start-->
        <section class="vps-pricing-plane ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>تعرفه های هاست ووکامرس</h2>
                            <p class="lead">ورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <table class="table vps-hosting-pricing-table">
                            <thead>
                                <tr>
                                    <th>پلن</th>
                                    <th>سی پی یو</th>
                                    <th>رم</th>
                                    <th>قدرت سی پی یو</th>
                                    <th>پورت شبکه</th>
                                    <th>هارد</th>
                                    <th>پهنای باند</th>
                                    <th colspan="2">قیمت</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php 
                            
                            $query= new WP_Query( [

                                'post_type'=>'wchost',
                            ]);                         
                            
                            ?>

                            <?php

if ( $query->have_posts() ) :
    while ( $query->have_posts() ) : $query->the_post(); ?>

                                <tr class="vps-pricing-row border-accent-primary">
                                <td data-value="پلن"><?php echo esc_html( get_field('plan') ); ?></td>
                                    <td data-value="CPU"><?php echo esc_html( get_field('cpu') ); ?></td>
                                    <td data-value="رم"><?php echo esc_html( get_field('ram') ); ?> </td>
                                    <td data-value="قدرت سی پی یو"><span><?php echo esc_html( get_field('cpu-power') ); ?></td>
                                    <td data-value="پورت شبکه"><span><?php echo esc_html( get_field('port') ); ?></td>
                                    <td data-value="هارد"><?php echo esc_html( get_field('hard') ); ?> </td>
                                    <td data-value="پهنای باند"><?php echo esc_html( get_field('Band-width') ); ?></td>
                                    <td data-value="قیمت">
                                        <p>
                                            <span class="rate"><?php echo esc_html( get_field('price') ); ?> تومانءءء<span>/ماهانه</span></span>
                                            <!-- <span class="pricing-onsale">پرفروش - <span class="badge color-3 color-3-bg">30% تخفیف</span></span> -->
                                        </p>
                                    </td>
                                    <td>
                                        <a href="<?php echo esc_attr( get_field('buy-link') ); ?>" class="btn primary-solid-btn">خرید</a>
                                    </td>
                                </tr>
                                   <?php
                                endwhile;
                            endif;

                                   ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!--vps hosting pricing plane end-->

        <!--feature section start-->
        <section class="feature-section ptb-100 ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>ویژگی های پلتفرم میزبانی</h2>
                            <p class="lead">این ویژگی‌ها در همه برنامه‌های میزبانی ما استاندارد هستند. به طور پویا الزامات را از طریق بازارهای ویژه منبع باز گسترش دهید.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-feature-list p-4 text-center">
                            <span class="ti-harddrives icon-sm d-block color-primary mb-3"></span>
                            <h5 class="mb-2">درایوهای دیسک SSD</h5>
                            <p>با بارگیری سرورهای اختصاصی درجه یک ما هرگز نمی توانید اشتباه کنید</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-feature-list p-4 text-center">
                            <span class="ti-rss-alt icon-sm d-block color-primary mb-3"></span>
                            <h5 class="mb-2">شبکه 100 مگابیت بر ثانیه</h5>
                            <p>ما می توانیم یک تجربه عالی و زمان بارگیری را برای موفقیت شما تضمین کنیم</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-feature-list p-4 text-center">
                            <span class="ti-lock icon-sm d-block color-primary mb-3"></span>
                            <h5 class="mb-2">حفاظت از حملات DDoS</h5>
                            <p>With full root access you will be able to take full control of your server very easy</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-feature-list p-4 text-center">
                            <span class="ti-world icon-sm d-block color-primary mb-3"></span>
                            <h5 class="mb-2">آی پی اختصاصی</h5>
                            <p>یکی از بسیاری از ویژگی‌های برتر، ارزان‌ترین طرح سرور مجازی است</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-feature-list p-4 text-center">
                            <span class="ti-location-pin icon-sm d-block color-primary mb-3"></span>
                            <h5 class="mb-2">پشتیبانی از IPv6</h5>
                            <p>طرح سرور مجازی ما به طور کامل با آی پی پروتکل اینترنت اختصاصی IPv6 بسته بندی شده است</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-feature-list p-4 text-center">
                            <span class="ti-wallet icon-sm d-block color-primary mb-3"></span>
                            <h5 class="mb-2">بازگشت وجه</h5>
                            <p>اگر 100٪ از هاستلر راضی نیستید، اشکالی نداره، وجه پرداختی شما را بازپرداخت خواهیم کرد.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--feature section end-->

        <!--call to action new section start-->
        <section class="call-to-action ptb-100 gradient-overlay " style="background: url('assets/img/hero-bg-4.jpg')no-repeat center center / cover">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="cta-new-wrap text-white text-center">
                            <h2 class="text-white">30 روز بازگشت وجه</h2>
                            <p class="lead">این یک نوشته آزمایشی است که به طراحان و برنامه نویسان کمک میکند تا این عزیزان با بهره گیری از این نوشته تستی و آزمایشی بتوانند.</p>
                            <div class="action-btns mt-4">
                                <a href="#" class="btn solid-white-btn animated-btn mr-lg-3">همین الان شروع کنید</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--call to action new section end-->


        <!--faq section start-->
        <div id="faq" class="ptb-100 ">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading mb-5">
                            <h2>سوالات متداول</h2>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است <a href="#contact" class="page-scroll">ارتباط با ما</a></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div id="accordion-one" class="accordion accordion-faq">
                            <div class="card mb-0">
                                <a class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
                                    <h6 class="mb-0 d-inline-block">میزبانی وب چیست؟
                                    </h6>
                                </a>
                                <div id="collapseOne" class="collapse" data-parent="#accordion-one">
                                    <div class="card-body">
                                        <p>این یک نوشته آزمایشی است که به طراحان و برنامه نویسان کمک میکند تا این عزیزان با بهره گیری از این نوشته تستی و آزمایشی بتوانند نمونه تکمیل شده از پروژه و طرح خودشان را به کارفرما نمایش دهند، استفاده از این متن تستی می تواند سرعت پیشرفت پروژه.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0">
                                <a class="card-header collapsed" data-toggle="collapse" href="#collapseTwo">
                                    <h6 class="mb-0 d-inline-block">تفاوت محصولات ما با DreamHost چیست؟</h6>
                                </a>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion-one">
                                    <div class="card-body">
                                        <p>این یک نوشته آزمایشی است که به طراحان و برنامه نویسان کمک میکند تا این عزیزان با بهره گیری از این نوشته تستی و آزمایشی بتوانند نمونه تکمیل شده از پروژه و طرح خودشان را به کارفرما نمایش دهند، استفاده از این متن تستی می تواند سرعت پیشرفت پروژه.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0">
                                <a class="card-header collapsed" data-toggle="collapse" href="#collapseThree">
                                    <h6 class="mb-0 d-inline-block">چگونه یک دامین بخرم؟
                                    </h6>
                                </a>
                                <div id="collapseThree" class="collapse" data-parent="#accordion-one">
                                    <div class="card-body">
                                        <p>این یک نوشته آزمایشی است که به طراحان و برنامه نویسان کمک میکند تا این عزیزان با بهره گیری از این نوشته تستی و آزمایشی بتوانند نمونه تکمیل شده از پروژه و طرح خودشان را به کارفرما نمایش دهند، استفاده از این متن تستی می تواند سرعت پیشرفت پروژه.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0">
                                <a class="card-header collapsed" data-toggle="collapse" href="#collapseFour">
                                    <h6 class="mb-0 d-inline-block">آیا می توانید به من کمک کنید تا درباره وردپرس بیشتر بدانم؟
                                    </h6>
                                </a>
                                <div id="collapseFour" class="collapse" data-parent="#accordion-one">
                                    <div class="card-body">
                                        <p>این یک نوشته آزمایشی است که به طراحان و برنامه نویسان کمک میکند تا این عزیزان با بهره گیری از این نوشته تستی و آزمایشی بتوانند نمونه تکمیل شده از پروژه و طرح خودشان را به کارفرما نمایش دهند، استفاده از این متن تستی می تواند سرعت پیشرفت پروژه.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--faq section end-->

        <!--testimonial and review section start-->
        <section class="client-review-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>مشتریان در مورد ما چه می گویند؟</h2>
                            <p class="lead">این یک نوشته آزمایشی است که به طراحان و برنامه نویسان کمک میکند تا این عزیزان با بهره گیری از این نوشته تستی و آزمایشی بتوانند نمونه تکمیل شده از پروژه.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="single-testimonial white-bg shadow-sm rounded p-5">
                            <ul class="list-inline ratting-list mb-2">
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                            </ul>
                            <div class="ratting-content">
                                <h5>پشتیبانی عالی فنی</h5>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه.</p>
                            </div>
                            <div class="ratting-author mt-3">
                                <h6>الکس سامر</h6>
                                <small class="text-right">6 روز قبل</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-testimonial white-bg shadow-sm rounded p-5">
                            <ul class="list-inline ratting-list mb-2">
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                            </ul>
                            <div class="ratting-content">
                                <h5>کیفیت طراحی عالی با پشتیبانی</h5>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه.</p>
                            </div>
                            <div class="ratting-author mt-3">
                                <h6>پیتر اندرسون</h6>
                                <small class="text-right">3 روز قبل</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-testimonial white-bg shadow-sm rounded p-5">
                            <ul class="list-inline ratting-list mb-2">
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                            </ul>
                            <div class="ratting-content">
                                <h5>پشتیبانی 24 ساعته</h5>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه.</p>
                            </div>
                            <div class="ratting-author mt-3">
                                <h6>جولیا دارکس</h6>
                                <small class="text-right">8 روز قبل</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--testimonial and review section end-->
    </div>

    <!--footer section start-->
<?php get_footer()?>
</body>

</html>