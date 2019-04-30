<?php
    require'vendor/autoload.php';
    include 'function.php';


    if (isset($_POST['submit'])) {
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $operator=validator($_POST['operator']);
    $amount=validator($_POST['amount']);
    $txnid=validator($_POST['txnid']);

    $tourPackage=Payment::create([
    'operator' => $operator,
    'amount' => $amount,
    'txnid' => $txnid,
    ]);
    echo '<script type="text/javascript">
               window.location = "booking.php"
          </script>';
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
                                <h2 style="text-align: center;">PAYMENT</h2><br>
                                <div class="row justify-content-center">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-9">
                                        <div class="card">
                                            <h2 style="color: green;"> <B>Welcome To Our EASY-TOUR !!! </B> </h2>
                                            <p> 1.Select Your Operator. </p>
                                            <p> 1.Send Half Money Of Tour Packages & Write Your Amount Of Advance. </p>
                                            <p> 3.Write Your TX-ID after paying money. </p> 
                                            <p> 4.After submitting you must be get confirmation call or sms.  </p>  
                                            <h5 style="color: red;">[N:B] Before Sending Money You Must Be Connect With Admin Than Send Your Money And Fillup This Form For Your Safety! </h5>  
                                            <div class="card-body">
                                                <form  action="" method="post">
                                                    <div class="form-group row">
                                                        <label for="full_name" class="col-md-2 col-form-label text-md-right">Operator</label>
                                                        <div class="col-md-5">
                                                            <select name="operator">
                                                                <option>Select</option>
                                                                <option>bkash</option>
                                                                <option>Mobile Banking</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="email_address" class="col-md-2 col-form-label text-md-right">Amount</label>
                                                        <div class="col-md-5">
                                                            <input type="text" id="email_address" class="form-control" name="amount" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="email_address" class="col-md-2 col-form-label text-md-right">Txnid</label>
                                                        <div class="col-md-5">
                                                            <input type="text" id="email_address" class="form-control" name="txnid" required>
                                                        </div>
                                                    </div>

                                                    <button type="submit" name="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
                                                    
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