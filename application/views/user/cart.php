<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from bootstraplovers.com/bootstrap4/resto-2.2/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Oct 2018 10:37:19 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cart</title>
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

                </div><!--/.container-fluid -->

                <div class="float-right">
                        <a href="<?php echo base_url()?>/users/logout" class="dropdown-toggle nav-link"  role="button" aria-haspopup="true" aria-expanded="false">Logout <span class="caret"></span></a>
        </div>

                        <div class="float-right">
                        <a href="<?php echo base_url()?>/users/dash" class="dropdown-toggle nav-link">Home <span class="caret"></span></a>
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
        </div><hr>
    <hr width=660px;>
    <hr width=260px;><br>
        <!-- <div class="space-80"></div> -->
        <div class="container">
            <div class="container">
                <h2 style="margin-left:380px;"> Confirm your Cart </h2><br><br>
            <div class="row">
                <div class="col-lg-10 ml-auto mr-auto">
                    <div class="table-responsive">
                        <table class="table table-bordered cart-table">
                            <tbody>
                                <tr>
                                    <td class="item-thumb">
                                        <img src="assets/images/img-1.jpg" alt="" width="70">
                                    </td>
                                    <td class="item-name">
                                        <h4><a href="#">Italian Pizza</a></h4>
                                    </td>
                                    <td class="item-price">
                                        <h4>$9.00</h4>
                                    </td>
                                    <td class="item-count">
                                        <div class="count-input">
                                            <p> Restaurant? </p>
                                        </div>
                                    </td>
                                    <td class="item-remove">
                                        <a href="#"><i class="ion-trash-b"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="item-thumb">
                                        <img src="assets/images/img-2.jpg" alt="" width="70">
                                    </td>
                                    <td class="item-name">
                                        <h4><a href="#">Wine Pizza</a></h4>
                                    </td>
                                    <td class="item-price">
                                        <h4>$12.00</h4>
                                    </td>
                                    <td class="item-count">
                                        <div class="count-input">
                                        <p> Restaurant? </p>
                                        </div>
                                    </td>
                                    <td class="item-remove">
                                        <a href="#"><i class="ion-trash-b"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="item-thumb">
                                        <img src="assets/images/img-3.jpg" alt="" width="70">
                                    </td>
                                    <td class="item-name">
                                        <h4><a href="#">Product Title</a></h4>
                                    </td>
                                    <td class="item-price">
                                        <h4>$9.00</h4>
                                    </td>
                                    <td class="item-count">
                                        <div class="count-input">
                                            <p> Restaurant? </p>
                                        </div>
                                    </td>
                                    <td class="item-remove">
                                        <a href="#"><i class="ion-trash-b"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>                  
                    </div><!--end cart table-->

                             <div class="col-md-7 margin-b-30">
                                 <div class="cart-totals margin-b-20">
                                    <div class="cart-totals-title">
                                        <h3>Cart Totals</h3>
                                    </div>
                                     <div class="cart-totals-fields">
                                         <table class="table">
                                             <tr>
                                                 <td>Cart Subtotal</td>
                                                 <td>$29.00</td>
                                             </tr>
                                              <tr>
                                                  <td class="text-color"><strong>Total</strong></td>
                                                  <td class="text-color"><strong>$31.00</strong></td>
                                             </tr>
                                         </table>
                                     </div>
                                 </div><!--end cart totals-->
                                 <div class="cart-buttons text-right">
                                     <a href="<?php echo base_url()?>users/dash" class="btn btn-dark btn-lg">Update Cart</a>
                                     <a href="<?php echo base_url()?>users/checkout" class="btn btn-primary btn-lg">Checkout</a>
                                 </div>
                             </div>
                        </div>
                </div>
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
                    <div class="col-lg-3 col-md-6 margin-b-30">
                        <img class="margin-b-20" src="assets/images/eatplicity.png" alt="">

                        <span>&copy; Copyright 2018. Eatplicity</span>
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
