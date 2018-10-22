<nav class="top-nav">
    <div class="nav-wrapper">
    <a href="#" data-target="mobile-demo" class="sidenav-trigger black-text"><i class="material-icons">menu</i></a>
        <a href="<?php echo base_url();?>/restaurant/view" class="brand-logo black-text" style="margin-top:10px; margin-left:15px;">
            <img src="<?php echo base_url();?>assets/img/eatplicity-logo.png" alt="company-logo" class="responsive-img">
        </a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a class="dropdown-trigger black-text" href="#!" data-target="user-functions"><?php foreach($data as $row){echo $row->Name;}?><i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
    </div>
</nav>
<!-- Mobile Menu -->
<ul class="sidenav" id="mobile-demo">
    <li><a href="<?php echo base_url();?>restaurant/viewMenu">Our Menu</a></li>
    <li><a href="<?php echo base_url();?>restaurant/viewOrder">Orders Received</a></li>
    <!-- <li><a href="<?php echo base_url();?>restaurant/viewPayments">Payments</a></li> -->
    <li><a href="<?php echo base_url();?>restuarant/viewSettings">Settings</a></li>
    <li><a href="">Logout</a></li>

</ul>
<ul id="user-functions" class="dropdown-content">
  <li><a href="#!">My Restaurant<i class="material-icons left">more_horiz</i></a></li>
  <li class="divider"></li>
  <li><a href="#!"><i class="material-icons">power_settings_new</i>Logout</a></li>
</ul>
<main>
    <div class="row center-align" style="margin-bottom:0px;">
            <div class="col s12 m12 l3 sidenav-menu" style="min-height:100vh;">
                <div class="row" style="margin-bottom: 0px; margin:10px 20px;">
                    <div class="s12 m12 l12 center-align">
                        <img class="responsive-img circle" src="<?php echo base_url();?>assets/img/restaurant-img.jpg" alt="">
                    </div>
                </div>
                <div class="row" style="margin-top:30px">
                    <div class="col s12 m12 l12">
                        <span class="white-text">Shop Name: <?php foreach($data as $row){echo $row->Name;}?></span>
                    </div>
                </div>
                <div class="row" style="padding-bottom:50px; margin-bottom:0px;">
                    <div class="col s12 m12 l12">
                        <span class="white-text">Shop Number: <?php foreach($data as $row){ echo $row->Location; } ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12 l12" id="sidenav-link">
                        <a href="<?php echo base_url();?>restaurant/viewMenu">Our Menu</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12 l12"id="sidenav-link">
                        <a href="<?php echo base_url();?>restaurant/viewOrder">Orders Received</a>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col s12 m12 l12"id="sidenav-link">
                        <a href="<?php echo base_url();?>restaurant/viewPayments">Payments</a>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col s12 m12 l12 "id="sidenav-link">
                        <a href="<?php echo base_url();?>restaurant/viewSettings">Settings</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 l9">
                <div class="row" style="margin-top:20px;">
                        <div class="col s12 m12 l12 left-align">
                            <span style="color: #505050; font-size:22px;">Active Orders</span>
                        </div>
                </div>
                <div class="row" style="margin-top:20px;">
                        <div style="padding:20px; background-color: #505050;" class="card">
                            <div style="background-color:white;" id="order-container">
                                <table class="responsive-table center-align">
                                    <thead>
                                        <th>Order ID</th>
                                        <th>User ID</th>
                                        <th>Order Items</th>
                                        <th>Order Amount</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>102214</td>
                                            <td>French Fries</td>
                                            <td>Ksh. 100</td>
                                            <td class="left-align">
                                                <a href="" title="Order is ready"><i class="menu-edit-icon material-icons">check</i></a>
                                                <a href="" title="Delete Order"><i class="menu-delete-icon material-icons">delete</i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                            </table>   
                            </div>
                        </div>
                </div>
            </div>
    </div>
</main>
