<?php 
    session_start();
    require'vendor/autoload.php';
    include 'function.php';
    $username="";
    $password="";
    $errmassage="";
    if (isset($_POST['login'])) {
        if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $email = validatorPass($_POST['email']);
        $password = md5(validatorPass($_POST['password']));
        $findUser=User::where('email','=',$email)->where('password','=',$password)->first();
        if ($findUser) {
            $_SESSION['user']=$findUser->name;
            $_SESSION['user_id']=$findUser->id;
            header("location:blog.php");
        }
        else{
            header("location:login.php?loginErrMsg=Email or Password incorrect! Try again.");
        }
    }
}
?>




<?php include('views/master/header.php'); ?>
<!-- always need start -->
<div class="site wrapper-content">
    <br><br><br><br><br><br>
    <section class="content-area">
        <div class="container">
            <div class="row">
                <div class="site-main col-sm-12">
                    <div class="entry-content">
                        <div class="travel_tour">
                            <!-- always need end -->
                            <div class="row">
                                <?php if (isset($_GET['msg'])) { ?>
                                    <p style="text-align: center;" class="alert alert-success"><?php echo $_GET['msg'];?></p> 
                                <?php
                                } 
                                ?>
                            </div>
                            <div class="row">
                                <?php if (isset($_GET['loginErrMsg'])) { ?>
                                    <p style="text-align: center;" class="alert alert-danger"><?php echo $_GET['loginErrMsg'];?></p> 
                                <?php
                                } 
                                ?>
                            </div>
                            <div class="travel_tour-info-login-form">
                                <h2 style="text-align: center;">Login</h2><br>
                                <div class="row justify-content-center">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-8">
                                        <div class="card">
                                            <div class="card-body">
                                                <form action="" method="post">
                                                    <div class="form-group row">
                                                        <label for="email_address" class="col-md-3 col-form-label text-md-right">E-Mail Address</label>
                                                        <div class="col-md-6">
                                                            <input type="text" id="email_address" class="form-control" name="email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="user_name" class="col-md-3 col-form-label text-md-right">Password</label>
                                                        <div class="col-md-6">
                                                            <input type="password" id="user_name" class="form-control" name="password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="nid_number" class="col-md-3 col-form-label text-md-right"></label>
                                                        <div class="col-md-6">
                                                            <button name="login" type="submit" class="btn btn-primary">
                                                            Login
                                                            </button>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="nid_number" class="col-md-3 col-form-label text-md-right"></label>
                                                        <div class="col-md-6">
                                                            Do not have a account? <a href="signup.php"><u>Sign Up </u></a> 
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
        </div><br><br><br><br>
    </div>
</section>
<!-- always need stop -->
<?php
include('views/master/footer.php');
?>