<aside class="sidebar">
                <div class="scrollbar-inner">
                    <div class="user">
                        <div class="user__info" data-toggle="dropdown">
                            <img class="user__img" src="<?= base_url();?>vendor-admin/demo/img/profile-pics/8.jpg" alt="">
                            <div>
                                <div class="user__name">Malinda Hollaway</div>
                                <div class="user__email">malinda-h@gmail.com</div>
                            </div>
                        </div>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">View Profile</a>
                            <!-- <a class="dropdown-item" href="#">Settings</a>
                            <a class="dropdown-item" href="#">Logout</a> -->
                        </div>
                    </div>

                    <ul class="navigation">
                        <li class="navigation__active"><a href=""><i class="zmdi zmdi-home"></i> Home</a></li>

                        <li class="navigation__sub">
                            <a href="<?php echo base_url('admin/overview'); ?>"><i class="zmdi zmdi-home"></i> Manage</a>

                            <ul>
                                <li><a href="<?= base_url('admin/restaurant');?>">Restaurants</a></li>                            </ul>
                        </li>
                    </ul>
                </div>
            </aside>