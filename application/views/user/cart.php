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
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <style type="text/css">
            table, tr {
                border: 10px;
                width:80%;
                color: black;
                text-align: left;
                margin-left:300px;
            }
            td {
                
            }
        </style>
    </head>
    <body>

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

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

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
                        <h1 class="title-1"><span class="text-color ">Eatplicity,</span> Strathmore's Food Ordering System.</h1>  
                    </div>
                </div>
            </div>
        </div><hr>
    <hr width=660px;>
    <hr width=260px;><br>
                            
    <?php echo form_open('users/update'); ?>

<table cellpadding="6" cellspacing="1" style="width:60%" border="1">

<tr>
        <th>Delete</th>
        <th>Quantity</th>
        <th>Item Description</th>
        <th style="text-align:right">Item Price</th>
        <th style="text-align:right">Sub-Total</th>
</tr>

<?php $i = 1; ?>
<?php foreach ($this->cart->contents() as $items): ?>

        <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

        <tr>
                <td align="center"><?php echo anchor('users/delete/'.$items['rowid'], 'X'); ?></td>
                <td align="center"><?php echo form_input(array('name' => 'qty'.$i, 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
                <td>
                        <?php echo $items['name']; ?>

                         <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

                                <p>
                                        <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

                                                <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

                                        <?php endforeach; ?>
                                </p>

                        <?php endif; ?>

                </td>
                <td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
                <td style="text-align:right">Ksh.<?php echo $this->cart->format_number($items['subtotal']); ?></td>
        </tr>

<?php $i++; ?>

<?php endforeach; ?>

<tr>
        <td colspan="3"> </td>
        <td class="right"><strong>Total</strong></td>
        <td class="right">Ksh.<?php echo $this->cart->format_number($this->cart->total()); ?></td>
</tr>

</table><br>

<p align="center"><?php echo form_submit('', 'Update your Cart'); ?></p>
<?php form_close(); ?>

                             <div class="col-md-7 margin-b-30">
                                 <div class="cart-buttons text-right">
                                     <a href="<?php echo base_url()?>users/dash" class="btn btn-dark btn-lg">Add to Cart</a>
                                     <a href="<?php echo base_url()?>users/checkout" class="btn btn-dark btn-lg">Checkout</a>
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
