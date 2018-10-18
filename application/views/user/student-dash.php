<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from bootstraplovers.com/bootstrap4/resto-2.2/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Oct 2018 10:37:19 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard</title>
        <!-- Bootstrap -->
        <link href="<?php echo base_url()?>assets/css/plugins/plugins.css" rel="stylesheet">
        <!--slider revolution-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/revolution/css/settings.css"> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/revolution/css/navigation.css">
        <!--main css file-->
        <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
        <link rel="shortcut icon" href="<?php echo base_url()?>assets/vendor/images/auth/favicon.png" />
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- <div id="preloader">
            <div id="preloader-inner"></div>
        </div> -->
        <!--===============main navigation + top bar==========================-->
        <header class="header header-top-transparent">
            <!--top bar-->
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 hidden-sm-down">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="ion-ios-telephone"></i> +01 1800 495 593</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="ion-email"></i> support@resto.com</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 text-right">
                            <ul class="list-inline level-2">
                                <li class="lang list-inline-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Lang </i></a>
                                    <ul class="dropdown-menu lang-dropdown">
                                        <li><a href="javascript:void(0)"><img class="flag" src="<?php echo base_url()?>assets/images/spanish.png" alt="Spanish">Spanish</a></li>
                                        <li><a href="javascript:void(0)"><img class="flag" src="<?php echo base_url()?>assets/images/italy.png" alt="Italian">Italian</a></li>
                                        <li><a href="javascript:void(0)"><img class="flag" src="<?php echo base_url()?>assets/images/german.png" alt="German">German</a></li>
                                        <li><a href="javascript:void(0)"><img class="flag" src="<?php echo base_url()?>assets/images/fr.png" alt="French">French</a></li>
                                        <li><a href="javascript:void(0)"><span><img class="flag" src="<?php echo base_url()?>assets/images/usa-flag.png" alt="English">English</span></a></li>
                                        <li><a href="javascript:void(0)"><img class="flag" src="<?php echo base_url()?>assets/images/jp.png" alt="Japanise">Japanise</a></li>
                                        <li><a href="javascript:void(0)"><img class="flag" src="<?php echo base_url()?>assets/images/in.png" alt="Hindi">Hindi</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--end top bar-->           
            <!--main navigation--> 

                            <!-- <img src="assets/images/eatplicity.png" alt="logo"> -->
                            <!-- <img src="assets/images/eatplicity.png" alt="logo" class="logo-scroll"> -->

                    </div>
                    <!--cart icon-->
                    <div class="float-right cart-nav nav-item">
                        <div class="dropdown">
                            <a href="<?php echo base_url()?>/users/cart" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="ion-ios-cart"></i> <span class="badge badge-primary">3</span></a>
                        </div>
                    </div>
                </div><!--/.container-fluid -->

                <div class="float-right">
                        <a href="<?php echo base_url()?>users/logout" class="dropdown-toggle nav-link"  role="button" aria-haspopup="true" aria-expanded="false">Logout <span class="caret"></span></a>
        </div>
            </nav>
        </header>


        <!--===============end main navigation + top bar =====================-->


        <div class="space-70"></div>
        <div class="overflow-hidden">
            <div class="container">
                <div class="row vertical-align-child">
                    <div class="col-md-6 text-center">
                        <h1 class="title-1">Welcome to <span class="text-color ">Eatplicity,</span> Strathmore's Food Ordering System.</h1>  

                    </div>
                </div>
            </div>
        </div>
        <div class="space-70"></div>
        <div class="cta-background parallax-background">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-left">
                        <p class="lead ">
                            " Save yourself the hustle of standing in line and wasting time. Use Eatplicity "
                        </p>
                    </div>
                </div>
            </div>
        </div><!--end call to action-->
        <div class="space-70"></div>

        <div class="container">
            <div class="text-center"><br>
                <h1 class="title-1">Choose from our <span class="text-color ">Restaurants</span></h1>  
                <div class="space-30"></div>
            </div>
            <div class="row vertical-align-child">
                <div class="col-md-6">
                    <div>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active show fade" id="drink">
                                <ul class="list-unstyled">
                                    <li class="menu-box clearfix margin-b-20">
                                        <div class="thumb">
                                            <img src="assets/images/a2.jpg" width="70" class="img-fluid" alt="">
                                        </div>
                                        <div class="menu-content">
                                            <h4><a href="<?php echo base_url()?>users/tonis">TONI'S</a>
                                                <span>
                                                    <i class="ion-star"></i>
                                                    <i class="ion-star"></i>
                                                    <i class="ion-star"></i>
                                                    <i class="ion-star"></i>
                                                    <i class="ion-star"></i>
                                                </span>
                                            </h4>
                                            <p>Can't have a feast without Toni's</p>
                                        </div>
                                        
                                    </li><!--end menu box-->
                                    <li class="menu-box clearfix margin-b-20">
                                        <div class="thumb">
                                            <img src="assets/images/a3.jpg" width="70" class="img-fluid" alt="">
                                        </div>
                                        <div class="menu-content">
                                            <h4><a href="<?php echo base_url()?>users/lolanes">LOLANES</a>     
                                                <span>
                                                    <i class="ion-star"></i>
                                                    <i class="ion-star"></i>
                                                    <i class="ion-star"></i>
                                                    <i class="ion-star"></i>
                                                    <i class="ion-star"></i>
                                                </span>
                                            </h4>
                                            <p>We have everything you need from ice cream to bhajias</p>
                                        </div>
                                    </li><!--end menu box-->
                                    <li class="menu-box clearfix margin-b-20">
                                        <div class="thumb">
                                            <img src="assets/images/a2.jpg" width="70" class="img-fluid" alt="">
                                        </div>
                                        <div class="menu-content">
                                            <h4><a href="<?php echo base_url()?>users/shawarma">SHAWARMA</a> 
                                                <span>
                                                    <i class="ion-star"></i>
                                                    <i class="ion-star"></i>
                                                    <i class="ion-star"></i>
                                                    <i class="ion-star"></i>
                                                </span>
                                           </h4>
                                            <p>We are known for our world class Shawarma</p>
                                        </div>
                                    </li><!--end menu box-->
                                    <li class="menu-box clearfix margin-b-20">
                                        <div class="thumb">
                                            <img src="assets/images/img-6.jpg" width="70" class="img-fluid" alt="">
                                        </div>
                                        <br><br>
                                    </li><!--end menu box-->
                                </ul>
                            </div>
                            </div>

                        </div>

                    </div><!--end tabs-->
                </div>
                <div class="col-md-6 text-center">
                </div>              
            </div>
        </div>
        <div class="space-20"></div>
        <div class="about-chefs">
            <div class="container">
                <div class="row">
                </div>
            </div>
        </div>
        <div class="testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mr-auto ml-auto text-center">
                        <div class="text-center">
                            <h1 class="title-1">Customer Reviews</h1>  
                            <h5 class="subtitle">What they say</h5>
                            <div class="space-30"></div>
                        </div>
                        <div class="testi-slider">
                            <ul class="slides">
                                <li>
                                    <p>
                                        The creation of this application was a wonderful invention. 
                                    </p>

                                    <div class="testi-info">
                                        <img src="assets/images/avtar-1.jpg" alt="" width="50" class="img-circle">
                                        <h4>Kamau Otieno Wepukhulu<small> -App user</small></h4>

                                        <i class="ion-star"></i>
                                        <i class="ion-star"></i>
                                        <i class="ion-star"></i>
                                        <i class="ion-star"></i>
                                        <i class="ion-ios-star-half"></i>
                                    </div>
                                </li><!--slide item-->
                                <li>
                                    <p>
                                       Wonderful application to use!
                                    </p>
                                </li><!--slide item-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--testimonials end-->

        <div class="cta-skin contact-info">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 margin-b-30">
                        <i class="ion-email"></i>
                        <div class="overflow-hidden">
                            <h4>Email</h4>
                            <p class="lead">
                            Eatplicity@yahoo.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 margin-b-30">
                        <span>&copy; 2018. Strathmore Food Ordering System</span>
                    </div>
                </div>
            </div>
        </footer>



        <!--back to top-->
        <a href="#" class="scrollToTop"><i class="ion-android-arrow-up"></i></a>
        <!--back to top end-->



        <!-- jQuery plugins-->
        <script src="assets/js/plugins/plugins.js"></script>
        <script src="assets/js/template-custom.js" type="text/javascript"></script> 

        <!--revolution slider-->
        <script type="text/javascript" src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script>
            jQuery(document).ready(function () {
                jQuery("#slider1").revolution({
                    sliderType: "standard",
                    jsFileLocation: "../../revolution/js/",
                    sliderLayout: "fullscreen",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        arrows: {enable: true}
                    },
                    parallax: {
                        type: "on",
                        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85],
                        origo: "enterpoint",
                        speed: 400,
                        bgparallax: "on",
                        disable_onmobile: "off"
                    },
                    gridwidth: 1170,
                    gridheight: 600
                });
            });
        </script>
    </body>

<!-- Mirrored from bootstraplovers.com/bootstrap4/resto-2.2/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Oct 2018 10:41:38 GMT -->
</html>
