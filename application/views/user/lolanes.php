<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from bootstraplovers.com/bootstrap4/resto-2.2/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Oct 2018 10:37:19 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lolanes Menu</title>
        <!-- Bootstrap -->
        <link href="<?php echo base_url()?>assets/css/plugins/plugins.css" rel="stylesheet">
        <!--stylesheets-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/revolution/css/settings.css"> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/revolution/css/navigation.css">
        <!--main css file-->
        <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
        <link rel="shortcut icon" href="<?php echo base_url()?>assets/vendor/images/auth/favicon.png" />

    <!-- In line CSS -->
        <style type="text/css">
            table {
                border: 10px;
                width:100%;
                color: black;
                text-align: left;
            }
            .new {
                margin-left: 195px;
            }
        </style>      
    </head>
    <body>
        <!-- <div id="preloader">
            <div id="preloader-inner"></div>
        </div> -->
        <!--===============main navigation + top bar==========================-->
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
                    </div>
                </div>
            </div>

                    <!--cart icon-->
            <div class="float-right cart-nav nav-item">
                <div class="dropdown">
                    <a href="<?php echo base_url()?>/users/cart" class="nav-link dropdown-toggle" title="Cart" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="ion-ios-cart"></i> <span class="badge badge-primary"></span></a>
                </div>
            </div>

            <div class="float-right">
                <a href="<?php echo base_url()?>/users/logout" class="dropdown-toggle nav-link" onclick="return  confirm('Ready to logout?')"  role="button" aria-haspopup="true" aria-expanded="false">Logout <span class="caret"></span></a>
            </div>

            <div class="float-right">
                <a href="<?php echo base_url()?>/users/dash" class="dropdown-toggle nav-link">Home <span class="caret"></span></a>
            </div>
        </nav>
    </header>

    <div class="space-70"></div>
        <div class="overflow-hidden">
            <div class="container">
                <div class="row vertical-align-child">
                    <div class="col-md-6 text-center">
                        <h1 class="title-1"><span class="text-color ">Eatplicity,</span> Strathmore's Food Ordering System.</h1>  
                    </div>
                </div>
            </div>
        </div>
    <br><hr>
    <hr width=660px;>
    <hr width=260px;>
        <div class="space-20"></div>

        <div class="container">
            <div class="text-center">
                <h1 class="title-1">LOLANES' Menu</h1>  
                    <h4>
                        <span>
                            <i class="ion-star"></i>
                            <i class="ion-star"></i>
                            <i class="ion-star"></i>
                            <i class="ion-star"></i>
                            <i class="ion-star"></i>
                      </span>
                    </h4>
                <div class="space-30"></div>
            </div>
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
                                    <div class="container">
                                        <div class="menu-content">
                                           
<br><br>
                                        </div>
                                    </div>

<!-- To display menu from database -->
<?php
            $output = '';
            $this->load->database();
            $conn = mysqli_connect ("localhost","root","","softwareengineering");
            $query = "SELECT ItemID,Name,Value,Price from menu";
            $result = $conn-> query($query);
                
            
            echo "<table>
                <tr>
                    <th> Item ID </th>
                    <th> Name </th>
                    <th> Value </th>
                    <th> Price </th>
                    <th> Add to Cart </th>
                </tr>";

            if ($result -> num_rows > 0)
            {
                while ($row = $result-> fetch_assoc())
                    {
                        echo "<tr><td>".$row["ItemID"]."</td><td>".$row["Name"]."</td><td>".
                        $row["Value"]."</td><td>".$row["Price"]."</td><td>"."<a href='#' onclick=alert('Added') name=add_cart class='btn btn-primary'>+</td></tr>";
                    }
                
                echo "</table>";
            }
            else
            {
                echo "0 result";
            }
            
            $output .='
            </table>
            </div>'
?>


                        </div>
                    </div><!--end tabs-->
                </div>
                <div class="col-md-6 text-center">
                </div>              
            </div>
        </div>

        <div class="testimonials">
            <div class="container"></div>
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
                <div class="row">
                    <div class="col-lg-6 col-md-12 margin-b-30">
                        <span class="new">&copy; 2018. Strathmore Food Ordering System</span>
                    </div>
                </div>
        </footer>



        <!--back to top-->
        <a href="#" class="scrollToTop"><i class="ion-android-arrow-up"></i></a>
        <!--back to top end-->



        <!-- jQuery plugins-->
        <script src="assets/js/plugins/plugins.js"></script>
        <script src="assets/js/template-custom.js" type="text/javascript"></script> 
        <script>
            $(document).ready(function(){
                // add to cart button listener
                $('.add_cart').on('submit', function(){
                });
            });
        </script>
    </body>

<!-- Mirrored from bootstraplovers.com/bootstrap4/resto-2.2/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Oct 2018 10:41:38 GMT -->
</html>
