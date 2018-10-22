<nav class="top-nav">
    <div class="nav-wrapper">
    <a href="#" data-target="mobile-demo" class="sidenav-trigger black-text"><i class="material-icons">menu</i></a>
        <a href="<?php echo base_url();?>restaurant/view" class="brand-logo black-text" style="margin-top:10px; margin-left:15px;">
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
    <li><a href="<?php echo base_url();?>restaurant/viewSettings">Settings</a></li>
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
                        <span style="color: #505050; font-size:22px;">Menu Options</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col s6 m6 l3 left-align">
                        <a class="menu-options-btn btn-large waves-effect waves-light" href="#" onclick="$('#create-menu').modal('open');">Create Menu</a>
                    </div>
                    <!-- <div class="col s6 m6 l3 left-align">
                        <a href="#" onclick="$('#delete-menu').modal('open');" class="menu-options-btn btn-large waves-effect waves-light">Delete Menu</a>
                    </div> -->
                </div>
                <div class="row" style="margin-top:20px;">
                    <div class="col s12 m12 l12 left-align">
                        <span style="color: #505050; font-size:22px;">Current Menu</span>
                    </div>
                </div>
                <div class="row" style="margin-top:20px;">
                    <div style="padding:20px; background-color: #505050;" class="card">
                        <div style="background-color:white;" id="menu-container">
                            <table class="responsive-table center-align">
                                <thead>
                                    <!-- <th>Item ID</th> -->
                                    <th>Item Name</th>
                                    <th>Item Price</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <?php
                                        
                                        foreach($items as $row){
                                           
                                    ?>
                                            <tr>
                                            <?php $id = $row->ItemID;?>
                                            <td><?php echo $row->Name;?></td>
                                            <td>Ksh <?php echo $row->Price?></td> 
                                            <td class="left-align">
                                            <a href="<?php echo base_url()."restaurant/viewMenu#edit-menu?id='$id'"?>" onclick ="$('#edit-menu').modal('open')" title="Edit Menu Item"><i class="menu-edit-icon material-icons">edit</i></a>
                                            <!-- <a href="" title="Delete Menu Item"><i class="menu-delete-icon material-icons">delete</i></a> -->
                                            </td>                                          
                                            </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                        </table>   
                        </div>
                    </div>
                </div>
                <div class="modal" id="create-menu" >
                    <div class="modal-content" style="padding:10px;">
                        <div class="row">
                            <div class="col s8 m8 l8 left-align">
                                <span class="modal-header">Create Menu</span>
                            </div>
                            <div class="col s4 m4 l4 right-align">
                                <a href="#" class="modal-close waves-effect btn-flat"><i class="material-icons">close</i></a>
                            </div>
                        </div>
                        <form method = "post" action="<?php echo base_url();?>restaurant/createMenu">
                        <div class="row">
                            <div id="menufields">
                                 <div class="col s6 m6 l6">
                                <div class="input-field" id="itemInput">
                                    <input type="text" placeholder="Item Name" id="food-name" name="foodName" autocomplete="off" required>
                                    <label for="food-name">Item Name</label>
                                </div>
                                </div>
                                <div class="col s4 m4 l4">
                                    <div class="input-field" id="itemPrice">
                                        <input type="text" placeholder="Item Price"  name="foodPrice" id="food-price" autocomplete="off" required>
                                        <label for="food-price">Item Price</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <button type="submit" class="btn waves-effect waves-light" name="makeMenu">Submit</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>  
                <!-- <div class="modal" id="delete-menu">
                    <div class="modal-content" style="padding:10px;">
                        <div class="row">
                            <div class="col s8 m8 l8 left-align">
                                <span class="modal-header">Delete Menu</span>
                            </div>
                            <div class="col s4 m4 l4 right-align">
                                <a href="#" class="modal-close waves-effect btn-flat"><i class="material-icons">close</i></a>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="modal" id="edit-menu">
                    <div class="modal-content">
                        <div class="row">
                            <div class="col s8 m8 l8 left-align">
                                    <span class="modal-header">Edit Menu Item</span>
                            </div>
                            <div class="col s4 m4 l4 right-align">
                                    <a href="#" class="modal-close waves-effect btn-flat"><i class="material-icons">close</i></a>
                            </div>    
                        </div>
                        <form method = "post" action="<?php echo base_url();?>restaurant/createMenu">
                        <div class="row">
                            <div id="menufields">
                                 <div class="col s6 m6 l6">
                                <div class="input-field" id="itemInput">
                                    <input type="text" placeholder="Item Name" id="food-name" name="foodName" autocomplete="off" required>
                                    <label for="food-name">Item Name</label>
                                </div>
                                </div>
                                <div class="col s4 m4 l4">
                                    <div class="input-field" id="itemPrice">
                                        <input type="text" placeholder="Item Price"  name="foodPrice" id="food-price" autocomplete="off" required>
                                        <label for="food-price">Item Price</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <button type="submit" class="btn waves-effect waves-light" name="makeMenu">Submit</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            
    </div>
</main>
