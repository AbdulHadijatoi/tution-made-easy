

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Tuition Made Easy">
    <meta name="author" content="H∆DI">
    <title> Welcome | Tuition Made Easy </title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon_140.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/img/favicon_140.png') }}" sizes="32x32">
    <link rel="icon" href="{{ asset('assets/img/favicon_140.png') }}" sizes="192x192">
    

    <!-- GOOGLE WEB FONT -->
    <link href="{{ asset('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap') }}" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/vendors.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/icon_fonts/css/all_icons_min.css') }}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

    <link rel='stylesheet' href='{{ asset("https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css") }}'>
    <link rel='stylesheet' href='{{ asset("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css") }}'>
    <link href="{{ asset('assets/css/supplier_logos.css') }}" rel="stylesheet">

    <script src="{{ asset('https://code.jquery.com/jquery-3.3.1.slim.min.js') }}" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js') }}" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js') }}" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

</head>

<body>
    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div>
    <!-- End Preload -->

    <header>
        <div class="container">
            <div class="row d-flex align-items-center my-header justify-content-between">
                <div class="col-lg-3 col-6 my-logo">
                    <div id="logo_home">
                        <h1><a href="index.php" title="FindTutor">FindATutor</a></h1>
                    </div>
                </div>
                <nav class="col-lg-9 custom-col-6 d-flex custom-flex-row-reverse align-items-center">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="#0"><span>Menu mobile</span></a>
                    <ul id="top_access">
                        <!-- <li id="bell_icon" class="d-flex justify-content-center"><a href="#"><i class="icon-bell"></i></a></li> -->
                        
                        
                        <ul>
                            <li class="d-flex align-items-center">
                                <a id="register_button" href="user/account.php" class="d-flex align-items-center pr-4 pl-4 pt-2 pb-2" style="width: 150px;">My Account</a>
                                <ul>
                                    <li style="width: 100px;"><a href="controller/logout.php"><i class="icon-login"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                        <li><a id="login_button" href="login.php" class="d-flex align-items-center"><i class="icon-login"></i>Login</a></li>
                        <li><a id="register_button" href="user/register.php" class="d-flex align-items-center"><i class="icon-user-add-outline"></i>Register</a></li>                        
                    </ul>

                    <div class="main-menu">
                        <ul class="my-menu-items">
                            
                                <li><a href="tutor/profile.php">I AM A TUTOR</a></li>
                            
                                <li><a href="tutor/register.php">I AM A TUTOR</a></li>
                            
                            
                            <li><a href="tutor/list.php">FIND A TUTOR</a></li>
                        </ul>
                    </div>
                    <!-- /main-menu -->
                </nav>
            </div>
        </div>
        <!-- /container -->
    </header>
    <!-- /header -->

    <main>
        <div class="hero_home tutor">
            <div class="content">
                <h3>Find a Tutor!</h3>
                <p>
                    WE CAN HELP YOU FIND THE BEST JOBS.
                </p>
                <a href="tutor/profile.php" class="btn_1 medium">I AM A TUTOR</a>
                <a href="tutor/list.php" class="btn_1 medium">FIND A TUTOR</a>
            </div>
        </div>
        <!-- /Hero -->

        <div class="container margin_120_95">
            <div class="main_title">
                <h2>How it <strong>works?</strong></h2>
                <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel.</p>
            </div>
            <div class="row add_bottom_30">
                <div class="col-lg-4">
                    <div class="box_feat" id="icon_1">
                        <span></span>
                        <h3>Find a Tutor</h3>
                        <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box_feat" id="icon_2">
                        <span></span>
                        <h3>View profile</h3>
                        <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box_feat" id="icon_3">
                        <h3>Save Candidate</h3>
                        <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie.</p>
                    </div>
                </div>
            </div>
            <!-- /row -->
            <p class="text-center"><a href="tutor/list.php" class="btn_1 medium">Find a Tutor</a></p>

        </div>
        <!-- /container -->

        <?php 
            // include_once("controller/getJobs.php");
        ?>
        <div class="margin_120_95 my_filter_section">
            <div class="main_title">
                <h2>Browse Jobs</h2>
                <p>Jobs are filtered by category and company.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-6">
                    <div class="list_home">
                        <div class="list_title">
                            <i class="icon-th-large"></i>
                            <h3>Filtered by category</h3>
                        </div>
                        <ul>
                            <?php
                                // if($getCategories != null){
                                    // for ($i=0; $i < sizeof($CAT_id); $i++) { ?>
                                    <li><a href="user/jobs.php?id=<?php // echo $CAT_id[$i]; ?>"><strong><?php //echo $CAT_total[$i] ?> </strong><?php //echo $CAT_category[$i] ?></a></li>
                                    
                            <?php //}
                            // }
                            ?>
                        
                            <li>
                                <a href="user/jobs.php?category=0">More...</a>    
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-6">
                    <div class="list_home">
                        <div class="list_title">
                            <i class="icon-commerical-building"></i>
                            <h3>Filtered by company</h3>
                        </div>
                        <ul>
                            <?php
                                
                                    //for ($i=0; $i < sizeof($COMP_id); $i++) { 
                                    ?>
                                    <li><a href="user/jobs.php?id=<?php //echo $COMP_id[$i]; ?>"><strong><?php //echo $COMP_total[$i] ?> </strong><?php //echo $COMP_company[$i] ?></a></li>
                                    <?php          
                                    //}
                            ?>
                            <li><a href="user/jobs.php?company=0">More....</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->

        <div class="my_testimonials">
            <div class="my_inner">
                <div class="main_title" style="margin-bottom: 0px;">
                    <p class="my-p">It is a long established fact that a reader will be</p>
                    <h2 class="my-h2 p-0">WHATS OUR CLIENTS SAYS</h2>
                </div>
                <div class="my_row">
                    <div class="my_col">
                        <div class="testimonial d-flex flex-column align-items-start">
                            <i class="icon-quote-left"></i>
                            <p class="text-left">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>

                            <div class="d-flex align-content-center justify-content-center">
                                <img src="{{ asset('assets/img/testimonial1.jpg') }}" alt="">
                                <div class="d-flex align-items-start flex-column justify-content-center">
                                    <div class="my_name">Jhon Shelley</div>
                                    <div class="my_tag">CEO Eyecix</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="my_col">
                        <div class="testimonial d-flex flex-column align-items-start">
                            <i class="icon-quote-left"></i>
                            <p class="text-left">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>

                            <div class="d-flex align-content-center justify-content-center">
                                <img src="{{ asset('assets/img/testimonial2.jpg') }}" alt="">
                                <div class="d-flex align-items-start flex-column justify-content-center">
                                    <div class="my_name">Jhon Shelley</div>
                                    <div class="my_tag">CEO Eyecix</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="my_col">
                        <div class="testimonial d-flex flex-column align-items-start">
                            <i class="icon-quote-left"></i>
                            <p class="text-left">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>

                            <div class="d-flex align-content-center justify-content-center">
                                <img src="{{ asset('assets/img/testimonial3.jpg') }}" alt="">
                                <div class="d-flex align-items-start flex-column justify-content-center">
                                    <div class="my_name">Jhon Shelley</div>
                                    <div class="my_tag">CEO Eyecix</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- /main content -->

    <footer>
        <div class="container margin_60_35">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <a href="index.php" title="Tutor">
                        <img src="assets/img/logo-white.png" data-retina="true" alt="" width="100%" class="img-fluid">
                    </a>
                    <p class="footer-para">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a auctor urna, et porttitor lorem. Fusce at neque et orci rhoncus hendrerit. Praesent nec quam ac orci placerat semper.
                    </p>
                    <p><a href="list.php" class="btn_footer medium">Search Jobs</a></p>
                </div>

                <div class="col-lg-4 col-md-4">
                    <h4 class="text-white">CONTACT INFO</h4>
                    <p><a href="mailto:abdulhadijatoi@gmail.com" class="text-white">info@tutionmadeeasy.com</a></p>
                </div>

                <div class="col-lg-4 col-md-4">
                    <h4 class="text-white">NEWSLETTER SUBSCRIBE</h4>
                    <div class="form-group">
                        <div class="footer-email-field">
                            <input id="footer-email-input" type="email" class="form-control" placeholder="Email" name="email" autocapitalize="off" autocomplete="off">

                            <button id="btn-subscribe" tabindex="0" aria-pressed="false">
								<i class="icon-right-4"></i>
							</button>
                        </div>
                    </div>
                    <h4 class="text-white">STAY IN TOUCH</h4>
                    <ul class="d-flex footer-social-icons">
                        <li><a href="#0"><i class="social_facebook"></i></a></li>
                        <li><a href="#0"><i class="social_twitter"></i></a></li>
                        <li><a href="#0"><i class="social_linkedin"></i></a></li>
                        <li><a href="#0"><i class="social_instagram"></i></a></li>
                    </ul>
                </div>


            </div>
            <!--/row-->
            <div class="row d-flex justify-content-center my-h5 margin_top_20">
                Find TutionMadeEasy © 2021, All Right Reserved
            </div>
        </div>
    </footer>
    <!--/footer-->

    <div id="toTop"></div>
    <!-- Back to top button -->

    <script src='{{ asset("https://cdn.rawgit.com/JacobLett/bootstrap4-latest/master/bootstrap-4-latest.min.js")}}'></script>
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/common_scripts.min.js') }}"></script>
    <script src="{{ asset('assets/js/functions.js') }}"></script>    

</body>
</html>