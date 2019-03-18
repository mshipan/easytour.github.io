<?php
    require'vendor/autoload.php';
    include 'function.php';
    $tours=Booking::all();
 ?>
<?php include('views/master/header.php'); ?>
<!-- always need start -->
<div class="site wrapper-content">
    <br>
    <section class="content-area">
        <div class="container">
            <div class="row">
                <div class="site-main col-sm-12">
                    <div class="entry-content">
                        <div class="travel_tour">
                            <!-- always need end -->
                            <div class="travel_tour-info-login-form">
                                <h2 style="text-align: center;">Book Your Best Packages and Hotels</h2><br>
                                <div class="row justify-content-center">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-9">
                                        <div class="card">
                                            <div class="card-body">
                                                <form  action="" method="post">
                                                    <div class="form-group row">
                                                        <label for="full_name" class="col-md-2 col-form-label text-md-right">Full Name </label>
                                                        <div class="col-md-8">
                                                            <input type="text" id="full_name" class="form-control" name="name" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="email_address" class="col-md-2 col-form-label text-md-right">E-Mail Address</label>
                                                        <div class="col-md-8">
                                                            <input type="email" id="email_address" class="form-control" name="email" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="phone_number" class="col-md-2 col-form-label text-md-right">Phone Number</label>
                                                        <div class="col-md-8">
                                                            <input type="text" name="phone" id="phone_number" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="form-group row">
                                                        <label for="present_address" class="col-md-2 col-form-label text-md-right">Package Name</label>
                                                        <div class="col-md-8">
                                                            <input type="text" name="package" id="present_address" class="form-control" >
                                                        </div>
                                                        
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="present_address" class="col-md-2 col-form-label text-md-right">Hotel Name</label>
                                                        <div class="col-md-8">
                                                            <input type="text" name="hotel_name" id="present_address" class="form-control" >
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="present_address" class="col-md-2 col-form-label text-md-right">ID</label>
                                                        <div class="col-md-8">
                                                            <input type="text" name="tour_id" id="present_address" class="form-control" >
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="form-group row">
                                                        <label for="nid_number" class="col-md-2 col-form-label text-md-right"></label>
                                                        <div class="col-md-8">
                                                            <button name="registration" type="submit" class="btn btn-primary">
                                                        Confirm
                                                        </button>
                                                        </div>
                                                    </div>
                                                    
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                            </div>
<!-- allways need start -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- always need stop -->
<?php
include('views/master/footer.php');
?>