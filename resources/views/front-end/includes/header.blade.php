<section class="page_topline cs table_section table_section_md columns_padding_0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 text-center text-md-left">
                <ul class="inline-dropdown inline-block divided_content">

                    <li class="dropdown login-dropdown">
                        <a class="header-button" data-target="#" href="index.html" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                            <i class="fa fa-user"></i>
                            <span class="header-button-text">Login</span>
                        </a>

                        <div class="dropdown-menu ls with_padding">

                            <p>
                                <strong class="grey">If you have an account, please log in:</strong>
                            </p>
                            <form role="form" action="http://webdesign-finder.com/">

                                <div class="form-group">
                                    <label for="login_email" class="sr-only">Email address</label>
                                    <input type="email" class="form-control" id="login_email" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <label for="login_password" class="sr-only">Password</label>
                                    <input type="password" class="form-control" id="login_password" placeholder="Password">
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" id="remember_checkbox">
                                    <label for="remember_checkbox">
                                        Remember Me
                                    </label>
                                </div>

                                <button type="button" class="theme_button color1 block_button">
                                    Log in
                                </button>

                            </form>
                            <div class="topmargin_20 darklinks">
                                <a href="#">Forgot Your Password?</a>
                            </div>

                        </div>
                    </li>


                    <a class="header-button" href="#">
                        <i class="fa fa-lock"></i>
                        <span class="header-button-text">Register</span>
                    </a>
                </ul>

            </div>

            <div class="col-md-6 text-center divided_content">

                <div>
                    <div class="media small-teaser">
                        <div class="media-left">
                            <i class="fa fa-user highlight fontsize_16"></i>
                        </div>
                        <div class="media-body">
                            +8801738526663
                        </div>
                    </div>
                </div>

                <div>
                    <div class="media small-teaser">
                        <div class="media-left">
                            <i class="fa fa-map-marker highlight fontsize_16"></i>
                        </div>
                        <div class="media-body">
                            Daffodil Tower, Dhanmandi
                        </div>
                    </div>
                </div>

                <div>
                    <div class="media small-teaser">
                        <div class="media-left">
                            <i class="fa fa-envelope highlight fontsize_16"></i>
                        </div>
                        <div class="media-body">
                            oroddho@psychologist.com
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-3 text-center text-md-right bottommargin_0">
                <a href="#appointment" class="theme_button color1 margin_0">Make an appointment</a>
            </div>

        </div>
    </div>
</section>

<header class="page_header header_white table_section columns_padding_0 toggler-xs-right">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-5">
                <a href="index.html" class="logo">
                    Oroddho Foundation
                </a>
                <!-- header toggler -->
                <span class="toggle_menu visible-xs">
								<span></span>
							</span>
            </div>
            <div class="col-md-6 col-sm-2 text-center">
                <!-- main nav start -->
                <nav class="mainmenu_wrapper">
                    <ul class="mainmenu nav sf-menu">
                        <li class="active">
                            <a href="index-2.html">Home</a>

                        </li>

                        <!-- blog -->
                        <li>
                            <a href="{{route('blog')}}">Blog</a>
                            <!-- <ul>

                                <li>
                                    <a href="blog-right.html">Right Sidebar</a>
                                </li>
                            </ul> -->
                        </li>

                        <li>
                            <a href="{{route('therapy')}}">Therapy</a>
                            <div class="mega-menu">
                                <ul class="mega-menu-row">
                                    <li class="mega-menu-col">
                                        <a href="#">Headers</a>
                                        <ul>
                                            <li>
                                                <a href="header1.html">Header Type 1</a>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                            <!-- eof mega menu -->
                        </li>
                        <!-- eof features -->


                        <li>
                            <a href="{{route('tutorial')}}">Tutorial</a>
                           
                        </li>
                        <!-- eof pages -->

                        <!-- gallery -->
                        <li>
                            <a href="{{route('ourDoctor')}}">Our Doctors</a>
                         
                </nav>
                <!-- eof main nav -->
                <span class="toggle_menu hidden-xs">
								<span></span>
							</span>
            </div>
            <div class="col-md-3 col-sm-5 text-right hidden-xs lightgreylinks">
                <div class="page_social_icons divided_content">
								<span>
									<a class="social-icon soc-facebook" href="#" title="Facebook"></a>
								</span>
                    <span>
									<a class="social-icon soc-twitter" href="#" title="Twitter"></a>
								</span>
                    <span>
									<a class="social-icon soc-google" href="#" title="Google"></a>
								</span>
                    <span>
									<a class="social-icon soc-linkedin" href="#" title="LinkedIn"></a>
								</span>
                </div>
            </div>
        </div>
    </div>
</header>

@if (Session::has('message'))
<section id="services" class="ls section_padding_top_130 section_padding_bottom_100 alert alert-success">

        <ul class="list-unstyled">
            <li >{{ Session::get('message')}}</li>
        </ul>
<?php
    Session::forget('message');
    ?>
</section>
@endif
