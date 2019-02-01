<?php include('views/master/header.php'); ?>
<!-- always need start -->
<div class="site wrapper-content">
    <br><br><br>
    <section class="content-area">
        <div class="container">
            <div class="row">
                <div class="site-main col-sm-12">
                    <div class="entry-content">
                        <div class="travel_tour">
                            <!-- always need end -->
                            <div class="travel_tour-info-login-form">
                                <h2 style="text-align: center;">Register as a new user..</h2><br>
                                <div class="row justify-content-center">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-8">
                                        <div class="card">
                                            <div class="card-body">
                                                <form name="my-form" onsubmit="return validform()" action="success.php" method="">
                                                    <div class="form-group row">
                                                        <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                                                        <div class="col-md-6">
                                                            <input type="text" id="full_name" class="form-control" name="full-name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                                        <div class="col-md-6">
                                                            <input type="text" id="email_address" class="form-control" name="email-address">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="user_name" class="col-md-4 col-form-label text-md-right">User Name</label>
                                                        <div class="col-md-6">
                                                            <input type="text" id="user_name" class="form-control" name="username">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number</label>
                                                        <div class="col-md-6">
                                                            <input type="text" id="phone_number" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="present_address" class="col-md-4 col-form-label text-md-right">Present Address</label>
                                                        <div class="col-md-6">
                                                            <input type="text" id="present_address" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="permanent_address" class="col-md-4 col-form-label text-md-right">Permanent Address</label>
                                                        <div class="col-md-6">
                                                            <input type="text" id="permanent_address" class="form-control" name="permanent-address">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="nid_number" class="col-md-4 col-form-label text-md-right"><abbr
                                                        title="National Id Card">NID</abbr> Number</label>
                                                        <div class="col-md-6">
                                                            <input type="text" id="nid_number" class="form-control" name="nid-number">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="nid_number" class="col-md-4 col-form-label text-md-right"></label>
                                                        <div class="col-md-6">
                                                            <button type="submit" class="btn btn-primary">
                                                            Register
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
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