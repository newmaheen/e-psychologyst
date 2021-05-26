<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<!-- Mirrored from webdesign-finder.com/html/psychologist/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Feb 2020 12:37:03 GMT -->
<head>
    <title>E-Psychologist</title>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="<?php echo e(asset('/user')); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('/user')); ?>/css/animations.css">
    <link rel="stylesheet" href="<?php echo e(asset('/user')); ?>/css/fonts.css">
    <link rel="stylesheet" href="<?php echo e(asset('/user')); ?>/css/main.css" class="color-switcher-link">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>

    <!--[if lt IE 9]>
    <script src="js/vendor/html5shiv.min.js"></script>
    <script src="js/vendor/respond.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <![endif]-->

</head>

<body>
<!--[if lt IE 9]>
<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
<![endif]-->
<div class="preloader">
    <div class="preloader_image"></div>
</div>

<!-- search modal -->
<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">
				<i class="rt-icon2-cross2"></i>
			</span>
    </button>
    <div class="widget widget_search">
        <form method="get" class="searchform search-form form-inline" action="http://webdesign-finder.com/html/psychologist/">
            <div class="form-group">
                <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
            </div>
            <button type="submit" class="theme_button">Search</button>
        </form>
    </div>
</div>

<!-- Unyson messages modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
    <div class="fw-messages-wrap ls with_padding">
        <!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
        <?php if($message != ''): ?>
        <ul class="list-unstyled">
            <li><?php echo e($message); ?></li>
        </ul>
        <?php endif; ?>

    </div>
</div>
<!-- eof .modal -->

<!-- wrappers for visual page editor and boxed version of template -->
<div id="canvas">
    <div id="box_wrapper">

        <!-- template sections -->

<?php echo $__env->make('front-end.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <section class="intro_section page_mainslider ds">
            <div class="flexslider">
                <ul class="slides">

                    <li>
                        <img src="<?php echo e(asset('/user')); ?>/images/slide01.jpg" alt="">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <div class="slide_description_wrapper">
                                        <div class="slide_description">
                                            <div class="intro-layer" data-animation="fadeInRight">
                                                <h3>
                                                    ORODDHO FOUNDATION
                                                </h3>
                                            </div>
                                            <div class="intro-layer" data-animation="fadeInLeft">
                                                <p class="small-text grey">
                                                    Your Mental Health Partner
                                                </p>
                                            </div>
                                        </div>
                                        <!-- eof .slide_description -->
                                    </div>
                                    <!-- eof .slide_description_wrapper -->
                                </div>
                                <!-- eof .col-* -->
                            </div>
                            <!-- eof .row -->
                        </div>
                        <!-- eof .container -->
                    </li>

                    <li>
                        <img src="<?php echo e(asset('/user')); ?>/images/slide01.jpg" alt="">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <div class="slide_description_wrapper">
                                        <div class="slide_description">
                                            <div class="intro-layer" data-animation="fadeInRight">
                                                <h3>
                                                    ORODDHO FOUNDATION
                                                </h3>
                                            </div>
                                            <div class="intro-layer" data-animation="fadeInLeft">
                                                <p class="small-text grey">
                                                    Your Mental Health Partner                                                </p>
                                            </div>
                                        </div>
                                        <!-- eof .slide_description -->
                                    </div>
                                    <!-- eof .slide_description_wrapper -->
                                </div>
                                <!-- eof .col-* -->
                            </div>
                            <!-- eof .row -->
                        </div>
                        <!-- eof .container -->
                    </li>

                </ul>
            </div>
            <!-- eof flexslider -->
        </section>

        <section id="services" class="ls section_padding_top_130 section_padding_bottom_100">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2 class="section_header with_icon">What We Can Offer</h2>
                        <p>
                            Mental health is very important things for human being. A well mentality person is leading his life smoothly. But, once occured by mental pressure or many mental things, he fall down.
                        </p>
                    </div>
                </div>
                <div class="row columns_padding_0 columns_margin_0 fontsize_16">
                    <div class="col-md-3 col-sm-6">
                        <div class="with_padding text-center teaser hover_shadow">
                            <img src="<?php echo e(asset('/user')); ?>/images/service-icons/relationship.png" alt="" />
                            <h4>
                                <a href="service-single.html">Relationship</a>
                            </h4>
                            <p>
                                Can you spot a good relationship? Of course nobody knows what really goes on between any couple, but decades of scientific researc </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="with_padding text-center teaser hover_shadow">
                            <img src="<?php echo e(asset('/user')); ?>/images/service-icons/mental.png" alt="" />
                            <h4>
                                <a href="service-single.html">Mental health</a>
                            </h4>
                            <p>
                                Mental health includes our emotional, psychological, and social well-being. It affects how we think, feel, and act. It also helps det </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 clear-sm">
                        <div class="with_padding text-center teaser hover_shadow">
                            <img src="<?php echo e(asset('/user')); ?>/images/service-icons/feelings.png" alt="" />
                            <h4>
                                <a href="service-single.html">Feelings</a>
                            </h4>
                            <p>
                                Achieve a better level of your well-being and the ability to manage feelings.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="with_padding text-center teaser hover_shadow">
                            <img src="<?php echo e(asset('/user')); ?>/images/service-icons/conflicting.png" alt="" />
                            <h4>
                                <a href="service-single.html">Conflicting</a>
                            </h4>
                            <p>
                                Invaluable insight into the knowledge of reducing conflict in relationship.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 clear-lg clear-md clear-sm">
                        <div class="with_padding text-center teaser hover_shadow">
                            <img src="<?php echo e(asset('/user')); ?>/images/service-icons/meditation.png" alt="" />
                            <h4>
                                <a href="service-single.html">Meditation</a>
                            </h4>
                            <p>
                                Learn how to deal with difficult emotions and feelings by using healthy strategies.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="with_padding text-center teaser hover_shadow">
                            <img src="<?php echo e(asset('/user')); ?>/images/service-icons/depression.png" alt="" />
                            <h4>
                                <a href="service-single.html">Depression</a>
                            </h4>
                            <p>
                                If your depression is keeping you from living your life don’t hesitate to seek help.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 clear-sm">
                        <div class="with_padding text-center teaser hover_shadow">
                            <img src="<?php echo e(asset('/user')); ?>/images/service-icons/mind.png" alt="" />
                            <h4>
                                <a href="service-single.html">Mind Games</a>
                            </h4>
                            <p>
                                It is crucial to understand how to prevent others from playing such games with you.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="with_padding text-center teaser hover_shadow">
                            <img src="<?php echo e(asset('/user')); ?>/images/service-icons/relaxation.png" alt="" />
                            <h4>
                                <a href="service-single.html">Relaxation</a>
                            </h4>
                            <p>
                                Focus your attention on calmness and increase your personal awareness.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="cs parallax darken_gradient page_about section_padding_top_75 columns_margin_bottom_30">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-push-6 text-center">
                        <h2 class="section_header">Welcome to Psychologist &amp; Family Consulting</h2>
                        <br>
                        <p class="bold fontsize_18">It's my goal to create a comfortable, safe environment, where we'll work to achieve the goal together.</p>
                        <p class="fontsize_18">
                            I am a certified specialist in the branch of psychology concerned with the assessment and treatment of mental illness and behavioural problems. My other passion is publishing. You can find and purchase all my books within this site.
                        </p>
                        <div class="with_icon topmargin_60">
                            <h5 class="small-text text-uppercase inline-block">Maheen Absar</h5>
                            <span class="lightgrey">Psychologist</span>
                        </div>
                        <img src="<?php echo e(asset('/user')); ?>/images/signature.png" alt="" />
                    </div>
                    <div class="col-md-6 col-md-pull-6 text-center bottommargin_0">
                        <img src="<?php echo e(asset('/user')); ?>/images/person.png" alt="" class="top-overlap" />
                    </div>
                </div>
            </div>
        </section>

        <section class="ls section_padding_top_130 section_padding_bottom_100 columns_margin_top_0 columns_margin_bottom_30">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2 class="section_header with_icon">Abdur Rahman</h2>
                        <p>
                            Exercitation cupim ex, short ribs cow in ullamco corned beef veniam kevin. Eu frankfurter ham hock ball tip reprehenderit adipisicing ipsum jerky tenderloin aliquip.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 text-center">
                        <article class="vertical-item content-padding post format-standard with_shadow">

                            <div class="item-media entry-thumbnail">
                                <img src="<?php echo e(asset('/user')); ?>/images/blog_post1.jpg" alt="">
                            </div>

                            <div class="item-content entry-content">
                                <header class="entry-header">

                                    <div class="entry-date small-text highlight">
                                        <a href="blog-right.html" rel="bookmark">
                                            <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                                March 13, 2017
                                            </time>
                                        </a>
                                    </div>

                                    <h4 class="entry-title">
                                        <a href="blog-single-right.html" rel="bookmark">How to avoid hostile attitude</a>
                                    </h4>

                                    <hr class="divider_30_1">

                                </header>
                                <!-- .entry-header -->

                                <p class="bottommargin_40 fontsize_18">Exercitation cupim ex, short ribs cow in ullamco corned beef veniam kevin eu frankfurter...</p>

                                <a href="blog-single-right.html" class="theme_button color1">Read article</a>

                            </div>
                            <!-- .item-content.entry-content -->
                        </article>
                    </div>
                    <div class="col-md-4 text-center">
                        <article class="vertical-item content-padding post format-standard with_shadow">

                            <div class="item-media entry-thumbnail">
                                <img src="<?php echo e(asset('/user')); ?>/images/blog_post2.jpg" alt="">
                            </div>

                            <div class="item-content entry-content">
                                <header class="entry-header">

                                    <div class="entry-date small-text highlight">
                                        <a href="blog-right.html" rel="bookmark">
                                            <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                                March 13, 2017
                                            </time>
                                        </a>
                                    </div>

                                    <h4 class="entry-title">
                                        <a href="blog-single-right.html" rel="bookmark">How to avoid hostile attitude</a>
                                    </h4>

                                    <hr class="divider_30_1">

                                </header>
                                <!-- .entry-header -->

                                <p class="bottommargin_40 fontsize_18">Exercitation cupim ex, short ribs cow in ullamco corned beef veniam kevin eu frankfurter...</p>

                                <a href="blog-single-right.html" class="theme_button color1">Read article</a>

                            </div>
                            <!-- .item-content.entry-content -->
                        </article>
                    </div>
                    <div class="col-md-4 text-center">
                        <article class="vertical-item content-padding post format-standard with_shadow">

                            <div class="item-media entry-thumbnail">
                                <img src="<?php echo e(asset('/user')); ?>/images/blog_post3.jpg" alt="">
                            </div>

                            <div class="item-content entry-content">
                                <header class="entry-header">

                                    <div class="entry-date small-text highlight">
                                        <a href="blog-right.html" rel="bookmark">
                                            <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                                March 13, 2017
                                            </time>
                                        </a>
                                    </div>

                                    <h4 class="entry-title">
                                        <a href="blog-single-right.html" rel="bookmark">How to avoid hostile attitude</a>
                                    </h4>

                                    <hr class="divider_30_1">

                                </header>
                                <!-- .entry-header -->

                                <p class="bottommargin_40 fontsize_18">Exercitation cupim ex, short ribs cow in ullamco corned beef veniam kevin eu frankfurter...</p>

                                <a href="blog-single-right.html" class="theme_button color1">Read article</a>

                            </div>
                            <!-- .item-content.entry-content -->
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="cs main_color2 parallax page_testimonials section_padding_75">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="owl-carousel testimonials-carousel top-dots" data-responsive-sm="1" data-responsive-md="1" data-responsive-lg="1" data-dots="true">
                            <blockquote>
                                “for me this was a wonderful experience. i must say that i am really impressed.”
                                <div class="item-meta">
                                    <h5>Myrtle Murray</h5>
                                </div>
                            </blockquote>
                            <blockquote>
                                “for me this was a wonderful experience. i must say that i am really impressed.”
                                <div class="item-meta">
                                    <h5>Myrtle Murray</h5>
                                </div>
                            </blockquote>
                            <blockquote>
                                “for me this was a wonderful experience. i must say that i am really impressed.”
                                <div class="item-meta">
                                    <h5>Myrtle Murray</h5>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="faq" class="ls section_padding_top_130 section_padding_bottom_100">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2 class="section_header with_icon">Frequently Asked Questions</h2>
                        <p>
                            Exercitation cupim ex, short ribs cow in ullamco corned beef veniam kevin. Eu frankfurter ham hock ball tip reprehenderit adipisicing ipsum jerky tenderloin aliquip.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel-group" id="accordion1">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion1" href="#collapse1" class="collapsed">
                                            What can I expect in the first session when I see a psychologist?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Exercitation cupim ex, short ribs cow in ullamco corned beef veniam kevin. Eu frankfurter ham hock ball tip reprehenderit adipisicing ipsum jerky tenderloin.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion1" href="#collapse2" class="collapsed">
                                            What are the sings of being abused by your partner?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Exercitation cupim ex, short ribs cow in ullamco corned beef veniam kevin. Eu frankfurter ham hock ball tip reprehenderit adipisicing ipsum jerky tenderloin.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion1" href="#collapse3" class="collapsed">
                                            What specific qualities are you looking for?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Exercitation cupim ex, short ribs cow in ullamco corned beef veniam kevin. Eu frankfurter ham hock ball tip reprehenderit adipisicing ipsum jerky tenderloin.
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion1" href="#collapse4" class="collapsed">
                                            How much money do psychologists make?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Exercitation cupim ex, short ribs cow in ullamco corned beef veniam kevin. Eu frankfurter ham hock ball tip reprehenderit adipisicing ipsum jerky tenderloin.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="tab-content padding_0">

                            <div class="tab-pane fade in active" id="tab1">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <a href="http://player.vimeo.com/video/1084537" class="embed-placeholder">
                                        <img src="<?php echo e(asset('/user')); ?>/images/video_tab1.jpg" alt="">
                                    </a>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tab2">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <a href="http://player.vimeo.com/video/1084537" class="embed-placeholder">
                                        <img src="<?php echo e(asset('/user')); ?>/images/video_tab2.jpg" alt="">
                                    </a>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tab3">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <a href="http://player.vimeo.com/video/1084537" class="embed-placeholder">
                                        <img src="<?php echo e(asset('/user')); ?>/images/video_tab3.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- eof .tab-content -->

                        <ul class="nav nav-image" role="tablist">
                            <li class="active">
                                <a href="#tab1" role="tab" data-toggle="tab">
                                    <img src="<?php echo e(asset('/user')); ?>/images/video_tab1.jpg" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#tab2" role="tab" data-toggle="tab">
                                    <img src="<?php echo e(asset('/user')); ?>/images/video_tab2.jpg" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#tab3" role="tab" data-toggle="tab">
                                    <img src="<?php echo e(asset('/user')); ?>/images/video_tab3.jpg" alt="">
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </section>

        <section id="prices" class="cs darken_gradient section_padding_75 columns_padding_0 columns_margin_0">
            <div class="container">
                <div class="row flex-row price-row">
                    <div class="col-md-3 col-sm-6">
                        <div class="price-table price-hover">
                            <div class="price-media">
                                <div class="plan-name">
                                    Personal
                                    <br> Help
                                </div>
                                <div class="plan-price with_icon">
                                    $99
                                    <p class="small-text">per hour</p>
                                </div>
                            </div>
                            <div class="price-content ls with_shadow">
                                <ul class="features-list">
                                    <li>
                                        Depression Therapy
                                    </li>
                                    <li>
                                        Stress Management
                                    </li>
                                    <li>
                                        Anxiety Treatment
                                    </li>
                                    <li>
                                        Individual Coaching
                                    </li>
                                    <li>
                                        Post-Divorce Recovery
                                    </li>
                                </ul>
                                <div class="call-to-action">
                                    <a href="#" class="theme_button color1">Book now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="price-table price-hover">
                            <div class="price-media">
                                <div class="plan-name">
                                    Couples
                                    <br> Therapy
                                </div>
                                <div class="plan-price with_icon">
                                    $149
                                    <p class="small-text">per hour</p>
                                </div>
                            </div>
                            <div class="price-content ls with_shadow">
                                <ul class="features-list">
                                    <li>
                                        Depression Therapy
                                    </li>
                                    <li>
                                        Stress Management
                                    </li>
                                    <li>
                                        Anxiety Treatment
                                    </li>
                                    <li>
                                        Post-Divorce Recovery
                                    </li>
                                </ul>
                                <div class="call-to-action">
                                    <a href="#" class="theme_button color1">Book now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="price-table price-hover">
                            <div class="price-media">
                                <div class="plan-name">
                                    Group
                                    <br> Therapy
                                </div>
                                <div class="plan-price with_icon">
                                    $49
                                    <p class="small-text">per hour</p>
                                </div>
                            </div>
                            <div class="price-content ls with_shadow">
                                <ul class="features-list">
                                    <li>
                                        Depression Therapy
                                    </li>
                                    <li>
                                        Stress Management
                                    </li>
                                    <li>
                                        Anxiety Treatment
                                    </li>
                                </ul>
                                <div class="call-to-action">
                                    <a href="#" class="theme_button color1">Book now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="price-table price-hover">
                            <div class="price-media">
                                <div class="plan-name">
                                    Personal
                                    <br> Help
                                </div>
                                <div class="plan-price with_icon">
                                    $99
                                    <p class="small-text">per hour</p>
                                </div>
                            </div>
                            <div class="price-content ls with_shadow">
                                <ul class="features-list">
                                    <li>
                                        Depression Therapy
                                    </li>
                                    <li>
                                        Stress Management
                                    </li>
                                    <li>
                                        Anxiety Treatment
                                    </li>
                                    <li>
                                        Individual Coaching
                                    </li>
                                    <li>
                                        Post-Divorce Recovery
                                    </li>
                                </ul>
                                <div class="call-to-action">
                                    <a href="#" class="theme_button color1">Book now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="appointment" class="ls section_padding_top_130 section_padding_bottom_100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
                        <h2 class="section_header with_icon highlight">Make an Appointment</h2>
                        <div class="fontsize_16">
                            Exercitation cupim ex, short ribs cow in ullamco corned beef veniam kevin. Eu frankfurter ham hock ball tip reprehenderit adipisicing ipsum
                        </div>

                        <form class="contact-form row columns_margin_bottom_40 topmargin_60" method="post" action="<?php echo e(route('new.appointment')); ?>">
                            <?php echo csrf_field(); ?>

                            <div class="col-sm-6">
                                <div class="contact-form-name">
                                    <label for="name">Your Name
                                        <span class="required">*</span>
                                    </label>
                                    <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="contact-form-email">
                                    <label for="email">Email Address
                                        <span class="required">*</span>
                                    </label>
                                    <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="contact-form-subject">
                                    <label for="doctor_id">Doctor
                                        <span class="required">*</span>
                                    </label>
                                    <select aria-required="true" id="doctor_id" name="doctor_id" class="choice empty form-control">
                                        <option value="" disabled selected data-default>Select Doctor</option>
                                        <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($d->id); ?>"><?php echo e($d->name); ?>,<?php echo e($d->last_degree); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="contact-form-phone">
                                    <label for="phone">Phone
                                        <span class="required">*</span>
                                    </label>
                                    <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="contact-form-date select-group">
                                    <label for="date" class="sr-only">Date
                                        <span class="required">*</span>
                                    </label>
                                    <div class="input-group">
                                        <input type="date" aria-required="true" size="30" value="" name="date" id="date" class="form-control" placeholder="date">

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="contact-form-time select-group">
                                    <label for="time" class="sr-only">Date
                                        <span class="required">*</span>
                                    </label>
                                    <div class="input-group">












                                        <input type="time" aria-required="true" size="30" value="" name="time" id="time" class="form-control" placeholder="Time">

                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-12">

                                <div class="contact-form-submit topmargin_20">
                                    <button type="submit" id="" name="save" class="theme_button color1 with_shadow">Make Appointment</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>

        <?php echo $__env->make('front-end.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
    <!-- eof #box_wrapper -->
</div>
<!-- eof #canvas -->

<script src="js/compressed.js"></script>
<script src="js/main.js"></script>
<script src="js/switcher.js"></script>

</body>


<!-- Mirrored from webdesign-finder.com/html/psychologist/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Feb 2020 12:38:36 GMT -->
</html>

<?php /**PATH C:\xampp\htdocs\Psychologist\resources\views/front-end/master.blade.php ENDPATH**/ ?>