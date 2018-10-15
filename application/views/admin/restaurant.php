<section class="content">
                <header class="content__title">
                    <h1>RESTAURANT</h1>
                   
                </header>

                <div class="card">
                    <?php if($this->session->flashdata('user_registered')): ?>
                        <?php 
                            echo '<p class="alert alert-success" role="alert">'.
                            $this->session->flashdata('user_registered').
                            '</p>' 
                        ?>
                    <?php endif; ?>

                    <?php if($this->session->flashdata('failed_register')): ?>
                        <?php
                            echo '<p class="alert alert-warning" role="alert">'.
                            $this->session->flashdata('failed_register').
                            '</p>' 
                        ?>
                    <?php endif; ?>
                    <div class="card-header">
                        <h2 class="card-title">Restaurant Registration</h2>
                        
                    </div>

                    <div class="card-block">
                        <form class="form-restaurant" action="<?= base_url('admin/restaurant');?>" method="post">
                            <div class="form-group form-group--float">
                                <input name="Firstname" type="text" class="form-control">
                                <label>First Name</label>
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group form-group--float">
                                <input name="Lastname" type="text" class="form-control">
                                <label>Last Name</label>
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group form-group--float">
                                <input name="Email" type="text" class="form-control">
                                <label>Email</label>
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group form-group--float">
                                <div class="select">
                                    <select name="Gender" class="form-control">
                                        <option>Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>
                            
                            
                            <div class="form-group form-group--float">
                                <input name="Password" type="password" class="form-control">
                                <label>Password</label>
                                <i class="form-group__bar"></i>
                            </div>
                            <button class="btn btn-success btn-register-restaurant btn--icon-text"><i class="zmdi zmdi-check"></i> REGISTER</button>
                        </form>
                    </div>
                </div>
