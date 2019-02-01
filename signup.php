<?php
    session_start();
    require'vendor/autoload.php';
    include 'function.php';
    $rfirstname=$rlastname=$rusername=$remail=$rcountry=$rgender=$rpassword=$rerror=$duplicateuser=$duplicateemail="";
if (isset($_POST['registration'])) {
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $name=validator($_POST['name']);
    $email=validatorPass($_POST['email']);
    $phone=validatorPass($_POST['phone']);
    $village=validator($_POST['village']);
    $upozila=validator($_POST['upozila']);
    $district=validator($_POST['district']);
    $country=validator($_POST['country']);
    $zip=validator($_POST['zip']);
    $password=md5(validatorPass($_POST['password']));

    $user=User::insert([
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'village' => $village,
        'upozila' => $upozila,
        'district' => $district,
        'country' => $country,
        'zip_code' => $zip,
        'password' => $password,
    ]);
    $msg="Registration succesfull please login now!";
    header('location:login.php?msg='.$msg);
    }
}

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
                                <h2 style="text-align: center;">Register as a new user...</h2><br>
                                <div class="row justify-content-center">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-9">
                                        <div class="card">
                                            <div class="card-body">
                                                <form  action="" method="post">
                                                    <div class="form-group row">
                                                        <label for="full_name" class="col-md-2 col-form-label text-md-right">Full Name </label>
                                                        <div class="col-md-8">
                                                            <input type="text" id="full_name" class="form-control" name="name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="email_address" class="col-md-2 col-form-label text-md-right">E-Mail Address</label>
                                                        <div class="col-md-8">
                                                            <input type="email" id="email_address" class="form-control" name="email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="phone_number" class="col-md-2 col-form-label text-md-right">Phone Number</label>
                                                        <div class="col-md-8">
                                                            <input type="text" name="phone" id="phone_number" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="user_name" class="col-md-2 col-form-label text-md-right">Password</label>
                                                        <div class="col-md-3">
                                                            <input type="password" id="user_name" class="form-control" name="password">
                                                        </div>
                                                        <label style="text-align: right;" for="user_name" class="col-md-2 col-form-label text-md-right">Confirm Password</label>
                                                        <div class="col-md-3">
                                                            <input type="password" id="user_name" class="form-control" name="password">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <label for="present_address" class="col-md-2 col-form-label text-md-right">Village</label>
                                                        <div class="col-md-3">
                                                            <input type="text" name="village" id="present_address" class="form-control">
                                                        </div>
                                                        <label style="text-align: right;" for="permanent_address" class="col-md-2 col-form-label text-md-right">Upozila</label>
                                                        <div class="col-md-3">
                                                            <input type="text" name="upozila" id="permanent_address" class="form-control" name="permanent-address">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="permanent_address" class="col-md-2 col-form-label text-md-right">District</label>
                                                        <div class="col-md-3">
                                                            <input type="text" name="district" id="permanent_address" class="form-control" name="permanent-address">
                                                        </div>
                                                        <label style="text-align: right;" for="permanent_address" class="col-md-2 col-form-label text-md-right">Country</label>
                                                        <div class="col-md-3">
                                                            <input type="text" name="country" id="permanent_address" class="form-control" name="permanent-address">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="permanent_address" class="col-md-2 col-form-label text-md-right">Zip Code</label>
                                                        <div class="col-md-8">
                                                            <input type="text" name="zip" id="permanent_address" class="form-control" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="permanent_address" class="col-md-2 col-form-label text-md-right">Profile Image <small style="color: red;">300*200 | under 1MB</small></label>
                                                        <div class="col-md-8">
                                                            <input type="file" name="image" id="permanent_address" class="form-control" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="nid_number" class="col-md-2 col-form-label text-md-right"></label>
                                                        <div class="col-md-8">
                                                            <button name="registration" type="submit" class="btn btn-primary">
                                                        Register
                                                        </button>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="nid_number" class="col-md-2 col-form-label text-md-right"></label>
                                                        <div class="col-md-8">
                                                            Already a member? please <a href="login.php"><u>Sign In </u></a> 
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