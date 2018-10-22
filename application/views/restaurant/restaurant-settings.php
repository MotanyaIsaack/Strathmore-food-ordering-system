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
    <li><a href="<?php echo base_url();?>restaurant/logout">Logout</a></li>

</ul>
<ul id="user-functions" class="dropdown-content">
  <li><a href="<?php echo base_url();?>restaurant/viewSettings">My Restaurant<i class="material-icons left">more_horiz</i></a></li>
  <li class="divider"></li>
  <li><a href="<?php echo base_url();?>restaurant/logout"><i class="material-icons">power_settings_new</i>Logout</a></li>
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
                        <a href="<?php echo base_url();?>restuarant/viewOrder">Orders Received</a>
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
                            <span style="color: #505050; font-size:22px;">Profile Settings</span>
                        </div>
                </div>
                <div class="row" style="margin-top:20px;">
                    <div class="col s12 m6 l6 offset-l3">
                        <div class="card">
                        <form action="<?php echo base_url();?>restaurant/changeShopName" method="post">
                            <div class="card-content">
                                <div class="row">
                                    <div class="col s6 m6 l6 left-align">
                                        <span style= "color: #505050; font-size:20px;">Change Shop Name</span>
                                    </div>
                                    <div class="col s6 m6 l6 right-align">
                                        <button type="submit" name="submit" class="btn waves-effect waves-light">
                                            <i class="material-icons right">save</i>
                                            Save Changes
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s6 m6 l6 left-align" style="padding-top:20px;">
                                        <span>Shop Name<i class = "material-icons left">edit</i></span>
                                    </div>
                                    <div class="col s6 m6 l6">
                                        <div class="input-field">
                                            <input type="text" name="shopName" autocomplete="off" value="<?php foreach($data as $row){echo $row->Name;}?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</main>
