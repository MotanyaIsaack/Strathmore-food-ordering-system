<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Restaurant Registration</h4>
                            </div>
                            <div class="card-body">
                            <?php if($this->session->flashdata('user_registered')): ?>
                                <?php 
                                    echo '<p class="alert alert-success">'.
                                    $this->session->flashdata('user_registered').
                                    '</p>' 
                                ?>
                            <?php endif; ?>

                            <?php if($this->session->flashdata('failed_register')): ?>
                                <?php
                                    echo '<p class="alert alert-warning">'.
                                    $this->session->flashdata('failed_register').
                                    '</p>' 
                                ?>
                            <?php endif; ?>
                                <form method="post" action="<?= base_url();?>admin/restaurants" class="form-horizontal">
                                    <div class="form-body">
                                        <h3 class="box-title">Restaurant Owner</h3>
                                        <hr class="m-t-0 m-b-40">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">First Name</label>
                                                    <div class="col-md-9">
                                                        <input name="Firstname" type="text" class="form-control" placeholder="John">
                                                        <small class="form-control-feedback"></small> </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Last Name</label>
                                                    <div class="col-md-9">
                                                        <input name="Lastname" type="text" class="form-control form-control-danger" placeholder="Kamau">
                                                        <small class="form-control-feedback"></small> </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Gender</label>
                                                    <div class="col-md-9">
                                                        <select name="Gender" class="form-control custom-select">
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>
                                                        <small class="form-control-feedback"> Select your gender. </small> </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Email</label>
                                                    <div class="col-md-9">
                                                        <input name="Email" type="email" class="form-control" placeholder="john@gmail.com">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">National ID</label>
                                                    <div class="col-md-9">
                                                        <input name="ID" type="number" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Category</label>
                                                    <div class="col-md-9">
                                                        <select name="Type" class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                                            <option value="Restaurant Owner">Restaurant Owner</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Password</label>
                                                    <div class="col-md-9">
                                                        <div class="m-b-10">
                                                            <input name="Password" type="password" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                 
                                    <hr>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button type="submit" class="btn btn-success">Submit</button>
                                                        <button type="button" class="btn btn-inverse">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                    
                    
                </div>
                