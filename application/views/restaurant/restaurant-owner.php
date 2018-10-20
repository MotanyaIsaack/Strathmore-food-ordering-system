<nav class="top-nav">
    <div class="nav-wrapper">
    <a href="#" data-target="mobile-demo" class="sidenav-trigger black-text"><i class="material-icons">menu</i></a>
        <a href="#" class="brand-logo black-text" style="margin-top:10px; margin-left:15px;">
            <img src="<?php echo base_url();?>assets/img/eatplicity-logo.png" alt="company-logo" class="responsive-img">
        </a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a class="dropdown-trigger black-text" href="#!" data-target="user-functions">$Restaurant<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
    </div>
</nav>
<!-- Mobile Menu -->
<ul class="sidenav" id="mobile-demo">
    <li><a href="<?php echo base_url();?>restaurant/viewMenu">Our Menu</a></li>
    <li><a href="">Orders Received</a></li>
    <li><a href=""">Payments</a></li>
    <li><a href="">Settings</a></li>
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
                    <span class="white-text">Shop Name: $Name</span>
                </div>
            </div>
            <div class="row" style="padding-bottom:50px; margin-bottom:0px;">
                <div class="col s12 m12 l12">
                    <span class="white-text">Shop Number: $Number</span>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 l12" id="sidenav-link">
                    <a href="<?php echo base_url();?>restaurant/viewMenu">Our Menu</a>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 l12"id="sidenav-link">
                    <a href="">Orders Received</a>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 l12"id="sidenav-link">
                    <a href="">Payments</a>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 l12 "id="sidenav-link">
                    <a href="">Settings</a>
                </div>
            </div>
        </div>
        <div class="col s12 m12 l9">
            <div class="row" style="margin-bottom:0px;">
                <div class="col s12 m12 l3 offset-l9">
                    <div class="card" id="rating-card" style="border-radius:20px;">
                        <div class="card-content">
                            <span>$rating</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 l5 card-container">
                    <a href="">
                        <div class="card">
                            <div class="card-title" id="card-links">
                                Active Orders
                            </div>
                            <div class="card-content" id="card-link-content">
                                <span>$active-orders</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col l2 hide-on-med-and-down">
                    <div>&nbsp;</div>
                </div>
                <div class="col s12 m12 l5 card-container">
                    <a href="<?php echo base_url();?>restaurant/viewMenu">
                        <div class="card">
                            <div class="card-title"id="card-links">
                                Edit Menu
                            </div>
                            <div class="card-content" id="card-link-content">
                                <span>Edit menu content or create menus</span>
                            </div>
                        </div>  
                    </a>
                </div>
            </div>
            <div class="row" style="margin-bottom:50px">
                <div class="col s12 m12 l12 card-container">
                    <a href="">
                        <div class="card">
                            <div class="card-title"id="card-links">
                                Transactions
                            </div>
                            <div class="card-content" id="card-link-content">
                                <span>View recent transactions</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 l12 card-container">
                    <a href="">
                        <div class="card">
                            <div class="card-title" id="card-links">
                                Settings
                            </div>
                            <div class="card-content" id="card-link-content">
                                <span>Edit Restaurant Settings</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>    
</main>
