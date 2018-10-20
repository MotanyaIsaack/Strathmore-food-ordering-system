<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from bootstraplovers.com/bootstrap4/resto-2.2/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Oct 2018 10:37:19 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Checkout</title>
        <!-- Bootstrap -->
        <link href="<?php echo base_url()?>assets/css/plugins/plugins.css" rel="stylesheet">
        <!--slider revolution-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/revolution/css/settings.css"> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/revolution/css/navigation.css">
        <!--main css file-->
        <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
        <link rel="shortcut icon" href="<?php echo base_url()?>assets/vendor/images/auth/favicon.png" />
</head>
    <body>
        <header class="header header-top-transparent">
            <nav>
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

                    </div>

                </div><!--/.container-fluid -->

                <div class="float-right">
                        <a href="<?php echo base_url()?>/users/logout" onclick="return  confirm('Ready to logout?')" class="dropdown-toggle nav-link"  role="button" aria-haspopup="true" aria-expanded="false">Logout <span class="caret"></span></a>
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
                        <h1 class="title-1"><span class="text-color ">Eatplicity,</span> Strathmore's Food Ordering System.</h1>  
                        <br><hr><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
        <div class="col-md-6" style="margin-left:275px;">
        <h2 style="margin-left:190px;"> Checkout </h2>
                        <div class="cart-totals margin-b-20">
                            <div class="cart-totals-title">
                                <h4>Cart Summary</h4>
                            </div>
                            <div class="cart-totals-fields">
                                <table class="table">
                                    <tbody>
                                        <tr>

                                            <td class="text-color"><strong>Total</strong></td>
                                            <td class="text-color"><strong>$31.00</strong></td>
                                        </tr>
                                    </tbody></table>
                            </div>
                        </div><!--cart summary-->
                        <div class="payment-option"><br><br>
                            <h4> Payment Method? </h4><br>
                            <ul class=" list-unstyled">
                                <li>
                                    <input type="radio" name="paymentmethod" id="cheque" checked class="iradio_minimal-red"><label for="cheque"> Mpesa</label>
                                    <br>
                                </li>
                                <li>
                                    <input type="radio" name="paymentmethod" id="paypal" class="iradio_minimal-red"><label for="paypal"> Paypal <img src="assets/images/paypal.jpg" alt="" width="90"></label>
                                </li>
                                <li>
                                    <input type="radio" name="paymentmethod" id="cash" class="iradio_minimal-red"><label for="cash"> Cash <img src="assets/images/paypal.jpg" alt="" width="90"></label>
                                </li>
                            </ul>
                            <div class="space-30"></div>
                            <p>
                                <input type="checkbox" name="agree" id="agree">
                                <label for="agree">Accept our <a href="javascript:void(0)">Terms &  Condition</a></label>
                            </p>

                            <div class="text-center">
                                <hr>
                                <input name="submit" onclick="return  confirm('Your order has been submitted. Thank you for using Eatplicity. ')" type="button" value="Submit order" class="btn btn-primary btn-xl btn-block">
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div> 
        </div><br>
       
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
                        <img class="margin-b-20" src="assets/images/eatplicity.png" alt="">

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

    </body>

<!-- Mirrored from bootstraplovers.com/bootstrap4/resto-2.2/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Oct 2018 10:41:38 GMT -->
</html>
