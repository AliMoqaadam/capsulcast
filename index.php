<?php
    require_once("./config/db.php");
    // unset($_SESSION['userEmail'], $_SESSION['login']);
?>
<!DOCTYPE html>
<html lang="fa">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>CapsulCast - قالب پادکست</title>

    <link rel="icon" type="image/x-icon" href="images/favicon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all-fontawesome.min.css">
    <link rel="stylesheet" href="css/feather.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/magnific-popup.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/amplitude.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="home-2" dir="rtl">

    <div class="preloader d-none">
        <div class="loader-ripple">
            <div></div>
            <div></div>
        </div>
    </div>

    <?php include_once("./config/header.php") ?>

    <main class="main">

        <div class="hero-section">
            <div class="hero-single">
                <div class="hero-shape">
                    <img src="images/01.png" alt="">
                </div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-lg-6">
                            <div class="hero-content">
                                <h6 class="hero-sub-title wow fadeInDown" data-wow-delay=".25s">
                                    <i class="far fa-microphone-lines"></i> پادکست های کپسولی 10 دقیقه ای
                                </h6>
                                <h1 class="hero-title wow fadeInRight" data-wow-delay=".50s">
                                    اینجا <span>کپسول کست</span> هستش
                                </h1>
                                <p class="wow fadeInUp" data-wow-delay=".75s">
                                    شما لایق بهترین آموزش ها هستید ما اینجاییم تا این رویا رو به حقیقت برسونیم
                                </p>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="hero-img wow fadeInRight" data-wow-delay=".25s">
                                <div class="hero-img-text">
                                    <p>مهارت های توسعه فردی رو باید از همین الان یادگرفت</p>
                                </div>
                                <div class="row g-4">
                                    <div class="col-6">
                                        <div class="img-1">
                                            <img src="images/img-heading-3.jpeg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="img-2">
                                            <img src="images/img-heading-4.jpeg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="img-3">
                                            <img src="images/img-heading-2.jpeg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="img-4">
                                            <img src="images/img-heading-1.jpeg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="feature-area pt-80">
            <div class="container">
                <div class="feature-wrapper">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4">
                            <div class="feature-item wow fadeInUp" data-wow-delay=".25s">
                                <span class="count">۰۱</span>
                                <div class="feature-icon">
                                    <img src="images/podcast-1.svg" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4 class="feature-title">پادکست های به روز</h4>
                                    <p>در کپسول کست تمامی محتواها به روز بوده و سعی شده محبوب ترین ها برای شما کاربران عزیز فراهم گردد تا نهایت استفاده را ببرید</p>
                                </div>
                                <div class="feature-shape">
                                    <img src="images/podcast-1.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="feature-item active wow fadeInDown" data-wow-delay=".25s">
                                <span class="count">۰۲</span>
                                <div class="feature-icon">
                                    <img src="images/podcast.svg" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4 class="feature-title">بهترین کیفیت صدا</h4>
                                    <p>تمامی پادکست ها دارای حداکثر کیفیت می‌باشند تا مخاطبان از شنیدن آنها نهایت لذت و استفاده را ببرند و تجربه کاربری خوبی به جای بگذارد</p>
                                </div>
                                <div class="feature-shape">
                                    <img src="images/podcast.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="feature-item wow fadeInUp" data-wow-delay=".25s">
                                <span class="count">۰۳</span>
                                <div class="feature-icon">
                                    <img src="images/host.svg" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4 class="feature-title">دسته بندی جذاب</h4>
                                    <p>ما در کپسول کست در تلاشیم تا تمامی دسته بندی های عمومی را پوشش دهیم تا شعار آموزش 10 دقیقه ای به خوبی اجرا شود</p>
                                </div>
                                <div class="feature-shape">
                                    <img src="images/host.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="about-area py-80 mb-20">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-left wow fadeInLeft" data-wow-delay=".25s">
                            <div class="about-img">
                                <div class="about-experience">
                                    <h6>مثبت هزار</h6>
                                    <p>شنونده</p>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="img-1">
                                            <img src="images/abus-1.jpg" style="border-radius: 4px;" alt="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="img-2">
                                            <img src="images/abus-2.jpg" style="border-radius: 4px;" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-right wow fadeInRight" data-wow-delay=".25s">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline"><i class="fas fa-microphone-lines"></i> درباره
                                    ما</span>
                                <h2 class="site-title">
                                    شماهم عضو خانواده <span>کپسول کست</span> شوید
                                </h2>
                            </div>
                            <div class="about-content">
                                <p class="about-text">
                                    مفتخریم که درحضور شماییم و قدمی در اکوسیستم آموزش برمی‌داریم تا به پیشرفت سواد عمومی در زمینه های گوناگون کمکی کنیم.
                                </p>
                                <div class="about-item-wrap">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="about-item">
                                                <div class="icon">
                                                    <img src="images/podcast-1.svg" alt="">
                                                </div>
                                                <div class="content">
                                                    <h4>دوری از اتلاف وقت</h4>
                                                    <p>تمامی مطالب سایت کپسول وار و پر محتوا می‌باشد</p>
                                                </div>
                                            </div>
                                            <div class="about-item">
                                                <div class="icon">
                                                    <img src="images/podcast.svg" alt="">
                                                </div>
                                                <div class="content">
                                                    <h4>بهترین پادکسترها</h4>
                                                    <p>تولیدکنندگان حرفه‌ای محتوا قدمی برای پیشرفت</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="about-list">
                                                <li class="about-list-item">
                                                    <i class="fas fa-circle-check"></i> همکاری با پادکسترها
                                                </li>
                                                <li class="about-list-item">
                                                    <i class="fas fa-circle-check"></i> پوشش عناوین گسترده
                                                </li>
                                                <li class="about-list-item">
                                                    <i class="fas fa-circle-check"></i> کیفیت بالای پادکست‌ها
                                                </li>
                                                <li class="about-list-item">
                                                    <i class="fas fa-circle-check"></i>بروزترین مطالب آموزشی
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="counter-area pt-40 pb-40">
            <div class="container">
                <div class="row wow fadeInUp" data-wow-delay=".25s">
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon">
                                <img src="images/podcast.svg" alt="">
                            </div>
                            <div class="counter-item">
                                <div class="counter-content">
                                    <span class="counter" data-count="+" data-to="50" data-speed="2000" style="    font-family: 'vazir-number';">50</span>
                                    <span class="counter-unit">+</span>
                                </div>
                                <h6 class="title">مجموع قسمت ها</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon">
                                <img src="images/love.svg" alt="">
                            </div>
                            <div class="counter-item">
                                <div class="counter-content">
                                    <span class="counter" data-count="+" data-to="150" data-speed="2000" style="    font-family: 'vazir-number';">150</span>
                                    <span class="counter-unit">+</span>
                                </div>
                                <h6 class="title">شنونده راضی</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon">
                                <img src="images/host.svg" alt="">
                            </div>
                            <div class="counter-item">
                                <div class="counter-content">
                                    <span class="counter" data-count="+" data-to="80" data-speed="2000" style="    font-family: 'vazir-number';">80</span>
                                    <span class="counter-unit">+</span>
                                </div>
                                <h6 class="title">مجموع میزبان ها</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon">
                                <img src="images/rate.svg" alt="">
                            </div>
                            <div class="counter-item">
                                <div class="counter-content">
                                    <span class="counter" data-count="+" data-to="66" data-speed="2000" style="    font-family: 'vazir-number';">66</span>
                                    <span class="counter-unit">+</span>
                                </div>
                                <h6 class="title">روزهای تجربه</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="main-category py-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <div class="site-heading-inline wow fadeInDown" data-wow-delay=".25s">
                            <div>
                                <span class="site-title-tagline"><i class="fas fa-microphone-lines"></i> دسته بندی
                                    ها</span>
                                <h2 class="site-title">دسته بندی موردعلاقتان را انتخاب کنید</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row wow fadeInUp" data-wow-delay=".25s">
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="category-item">
                            <div class="category-img">
                                <img src="images/01_2.jpg" alt="">
                            </div>
                            <div class="category-content">
                                <h4>بازاریابی</h4>
                                <span><i class="far fa-podcast"></i>۱۲۰ پادکست</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="category-item">
                            <div class="category-img">
                                <img src="images/02_2.jpg" alt="">
                            </div>
                            <div class="category-content">
                                <h4>توسعه فردی</h4>
                                <span><i class="far fa-podcast"></i>۸۶ پادکست</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="category-item">
                            <div class="category-img">
                                <img src="images/03_1.jpg" alt="">
                            </div>
                            <div class="category-content">
                                <h4>هوش مصنوعی</h4>
                                <span><i class="far fa-podcast"></i>۱۱۰ پادکست</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="category-item">
                            <div class="category-img">
                                <img src="images/04_1.jpg" alt="">
                            </div>
                            <div class="category-content">
                                <h4>بازارهای مالی</h4>
                                <span><i class="far fa-podcast"></i>۴۶ پادکست</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="category-item">
                            <div class="category-img">
                                <img src="images/05.jpg" alt="">
                            </div>
                            <div class="category-content">
                                <h4>کسب و کار</h4>
                                <span><i class="far fa-podcast"></i>۶۵ پادکست</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="category-item">
                            <div class="category-img">
                                <img src="images/06.jpg" alt="">
                            </div>
                            <div class="category-content">
                                <h4>تکنولوژی</h4>
                                <span><i class="far fa-podcast"></i>۹۵ پادکست</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="category-item">
                            <div class="category-img">
                                <img src="images/07.jpg" alt="">
                            </div>
                            <div class="category-content">
                                <h4>مدیریت</h4>
                                <span><i class="far fa-podcast"></i>۷۶ پادکست</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="category-item">
                            <div class="category-img">
                                <img src="images/08.jpg" alt="">
                            </div>
                            <div class="category-content">
                                <h4>زبان انگلیسی</h4>
                                <span><i class="far fa-podcast"></i>۳۷ پادکست</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="cta-area">
            <div class="cta-shape">
                <img src="images/06.png" alt="">
            </div>
            <div class="container">
                <div class="cta-wrapper">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="cta-content">
                                <h2 class="wow fadeInUp" data-wow-delay=".25s" style="color: #fff;line-height: 3rem;">در هرکجا که هستید به راحتی پادکست دلخواهتان را گوش دهید</h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="cta-img wow fadeInUp" data-wow-delay=".25s">
                                <div class="cta-img-shape">
                                    <img src="images/05.png" alt="">
                                </div>
                                <img src="images/01_2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="testimonial-area bg pt-60 pb-60">
            <div class="testimonial-bg">
                <img src="images/bg.jpg" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="site-heading wow fadeInDown" data-wow-delay=".25s">
                            <span class="site-title-tagline"><i class="fas fa-microphone-lines"></i> دیدگاه ها</span>
                            <h2 class="site-title">کاربران در مورد ما چه میگویند</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 wow fadeInUp" data-wow-delay=".25s" dir="ltr" style="margin-left: auto;">
                    <div class="testimonial-slider owl-carousel owl-theme">
                        <div class="testimonial-item" dir="rtl">
                            <div class="testimonial-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="testimonial-quote">
                                <p>
                                    جدیدترین پادکست‌ها در حوزه فناوری و داده رو من تنها داخل کپسول کسب گوش میدهم و بسیار راضی هستم هرروز بهتر از دیروز
                                </p>
                            </div>
                            <div class="testimonial-author">
                                <div class="author-img">
                                    <img src="images/us01.png" alt="">
                                </div>
                                <div class="author-info">
                                    <h4>محسن سالک</h4>
                                    <p>مدیرارشد ویکی‌پدیا فارسی</p>
                                </div>
                            </div>
                            <div class="quote-icon">
                                <img src="images/quote.svg" alt="">
                            </div>
                        </div>
                        <div class="testimonial-item" dir="rtl">
                            <div class="testimonial-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="testimonial-quote">
                                <p>
                                    از نظر ظاهر و تجربه کاربری امتیاز خوبی رو بهش میدم مخصوصا بروز بودن موضوع پادکست‌ها و آپدیت ماهیانه مطالب سایت کپسول کست
                                </p>
                            </div>
                            <div class="testimonial-author">
                                <div class="author-img">
                                    <img src="images/us04.png" alt="">
                                </div>
                                <div class="author-info">
                                    <h4>علی امیری</h4>
                                    <p>هم بنیان گذار زرین پال</p>
                                </div>
                            </div>
                            <div class="quote-icon">
                                <img src="images/quote.svg" alt="">
                            </div>
                        </div>
                        <div class="testimonial-item" dir="rtl">
                            <div class="testimonial-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="testimonial-quote">
                                <p>
                                    من تمام پادکست‌های آقای علی بندری رو شنیدم ولی وقتی با سایت کپسول کست آشنا شدم از نظر رابط کاربری ارتباط بسیار خوبی گرفتم
                                </p>
                            </div>
                            <div class="testimonial-author">
                                <div class="author-img">
                                    <img src="images/us03.png" alt="">
                                </div>
                                <div class="author-info">
                                    <h4>اسماعیل نورمحمدی</h4>
                                    <p>بنیانگذار کیوردچی</p>
                                </div>
                            </div>
                            <div class="quote-icon">
                                <img src="images/quote.svg" alt="">
                            </div>
                        </div>
                        <div class="testimonial-item" dir="rtl">
                            <div class="testimonial-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="testimonial-quote">
                                <p>
                                    داخل این آشوب‌های روانی و جنگ نرم خیلی خوبه که پادکست هایی در این حوزه رو بشنویم ممنونم از سایتتون برای کاری که انجام میدید
                                </p>
                            </div>
                            <div class="testimonial-author">
                                <div class="author-img">
                                    <img src="images/us02.png" alt="">
                                </div>
                                <div class="author-info">
                                    <h4>محمدابراهیم دهدشتی</h4>
                                    <p>مدیرعامل فناسا پلاس</p>
                                </div>
                            </div>
                            <div class="quote-icon">
                                <img src="images/quote.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="blog-area py-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                            <span class="site-title-tagline"><i class="fas fa-microphone-lines"></i> وبلاگ ما</span>
                            <h2 class="site-title">جدیدترین اخبار و مقالات</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="blog-img">
                                <img src="images/01_9.jpg" alt="Thumb">
                                <div class="blog-date"><i class="fal fa-calendar-alt"></i> ۲۵ مرداد, ۱۴۰۳ </div>
                            </div>
                            <div class="blog-info">
                                <div class="blog-meta">
                                    <ul>
                                        <li><a href="#"><i class="far fa-user"></i> توسط محسن دادار</a></li>
                                        <li><a href="#"><i class="far fa-comments"></i> ۳ دیدگاه</a></li>
                                    </ul>
                                </div>
                                <h4 class="blog-title">
                                    <a href="#">تغییرات زیادی وجود دارد که در این مورد وجود دارد.</a>
                                </h4>
                                <p>
                                    انواع مختلفی از معابر وجود دارد که اکثر آنها به نوعی دچار تغییر شده اند با تزریق
                                </p>
                                <a class="theme-btn" href="#">بیشتر بخوانید<i class="fas fa-circle-arrow-left"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="blog-img">
                                <img src="images/02_8.jpg" alt="Thumb">
                                <div class="blog-date"><i class="fal fa-calendar-alt"></i> ۵ مرداد, ۱۴۰۳ </div>
                            </div>
                            <div class="blog-info">
                                <div class="blog-meta">
                                    <ul>
                                        <li><a href="#"><i class="far fa-user"></i> توسط محسن دادار</a></li>
                                        <li><a href="#"><i class="far fa-comments"></i> ۵ دیدگاه</a></li>
                                    </ul>
                                </div>
                                <h4 class="blog-title">
                                    <a href="#">برخلاف تصور رایج، قطعه تصادفی کلاسیک است.</a>
                                </h4>
                                <p>
                                    انواع مختلفی از معابر وجود دارد که اکثر آنها به نوعی دچار تغییر شده اند با تزریق
                                </p>
                                <a class="theme-btn" href="#">بیشتر بخوانید<i class="fas fa-circle-arrow-left"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="blog-img">
                                <img src="images/03_7.jpg" alt="Thumb">
                                <div class="blog-date"><i class="fal fa-calendar-alt"></i> ۱۰ مرداد, ۱۴۰۳ </div>
                            </div>
                            <div class="blog-info">
                                <div class="blog-meta">
                                    <ul>
                                        <li><a href="#"><i class="far fa-user"></i> توسط محسن دادار</a></li>
                                        <li><a href="#"><i class="far fa-comments"></i> ۶ دیدگاه</a></li>
                                    </ul>
                                </div>
                                <h4 class="blog-title">
                                    <a href="#">این همه تصور اشتباه در تقبیح لذت و ستایش درد.</a>
                                </h4>
                                <p>
                                    انواع مختلفی از معابر وجود دارد که اکثر آنها به نوعی دچار تغییر شده اند با تزریق
                                </p>
                                <a class="theme-btn" href="#">بیشتر بخوانید<i class="fas fa-circle-arrow-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <?php include_once("./config/footer.php") ?>


    <div class="scroll-top">
        <a href="#" class="scroll-top-icon"><i class="far fa-arrow-up"></i></a>
        <svg class="scroll-progress-circle" viewBox="0 0 100 100">
            <circle class="scroll-progress-bg" cx="50" cy="50" r="45"></circle>
            <circle class="scroll-progress-bar" cx="50" cy="50" r="45"></circle>
        </svg>
    </div>


    <script data-cfasync="false" src="js/email-decode.min.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/modernizr.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.appear.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/counter-up.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/amplitude.min.js"></script>
    <script src="js/amplitude-custom.js"></script>
    <script src="js/main.js"></script>

</body>

</html>