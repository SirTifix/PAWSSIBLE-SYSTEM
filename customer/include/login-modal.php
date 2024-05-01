<?php
require_once '../classes/account.class.php';
if (isset($_POST['login'])) {
    $user = new Account();
    $user->email = htmlentities($_POST['email2']);
    $user->password = htmlentities($_POST['password2']);
    if ($user->sign_in_customer()) {
        $_SESSION['user'] = 'customer';
        $_SESSION['email2'] = $user->email;
        $_SESSION['customerID'] = $user->customerID;
    } else {
        $error = 'Invalid email/password. Try Again.';
    }
}
?>
        <!-- Modal -->
        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.5)">
                    <div class="modal-header border-bottom-0 p-5" style="background-color: #C1CCF8">
                    </div>
                    <div class="modal-body" style="padding: 0rem 5rem 5rem 5rem">
                        <div class="container-fluid d-flex justify-content-center align-items-center">
                            <div class="col-12 col-lg-10 col-lg-4 mt-3">
                                <p class="text-center"> 
                                    <img src="./assets/img/clinic-logo.png" class="h-100 d-inline-block" style="width: 150px" alt="">
                                </p>    
                                <h1 class="h2 mb-5 text-center" style="color: #5263AB; font-weight: bold;">LOGIN</h1>
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                    <div class="mb-5 input-group">
                                        <span class="input-group-text" style="background-color: #ffffff;"><i class="fa fa-user"></i></span>
                                        <input type="email" class="form-control" style="border-left: none;" id="email2" name="email2" placeholder="Email" value="<?php if (isset($_POST['email2'])) {
                                            echo $_POST['email2'];
                                        } ?>">
                                    </div>
                                    <div class="mb-4 input-group">
                                        <span class="input-group-text" style="background-color: #ffffff;"><i class="fa fa-lock"></i></span>
                                        <input type="password" class="form-control" style="border-left: none;" id="password2" name="password2" placeholder="Password" value="<?php if (isset($_POST['password2'])) {
                                            echo $_POST['password2'];
                                        } ?>">
                                    </div>
                                    <div class="form-group text-end">
                                        <a href="#" id="forgotpasswordLink" style="color: #8A8A8A;" data-bs-toggle="modal" data-bs-target="#forgotpasswordModal">Forgot Password?</a>
                                    </div>
                                    <div class="col-12 col-md-6 col-md-4 mt-5 mx-auto text-center">
                                        <button type="submit" name="login" class="btn btn-create-account py-2 px-5" style="background-color: #5263AB; color: white; font-weight: bold; border-radius: 10px;">Login</button>
                                    </div>
                                </form>
                                <?php
                                if (isset($_POST['login']) && isset($error)) {
                                    ?>
                                        <div>
                                            <p class="text-danger text-center">
                                                <?= $error ?>
                                            </p>
                                        </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--Forgot Password Modal-->
    <div class="modal fade" id="forgotpasswordModal" tabindex="-1" aria-labelledby="forgotpasswordModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.5)">
                <div class="modal-body pr-3 pl-3 pb-3">
                    <section class="p-sm-3 d-flex justify-content-center align-items-center">
                        <div class="col-12 col-lg-10 col-lg-4">
                            <h2 class="h2 text-start mb-4" style="color: #5263AB; font-weight: bold;">Reset Password</h2>
                            <p class="mb-5" style="color: #293566;">Enter the email associated with your account and we’ll send an email with details to reset your password. </p>
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="email3" class="form-label" style="color: #293566;"><b>Email Address</b></label>
                                    <input type="email" class="form-control" id="email3" name="email3">
                                </div>
                                <div class="col-12 col-md-6 col-md-4 my-5 mx-auto text-center w-auto">
                                    <button type="button" id="resetPasswordBtn" class="btn btn-reset-password py-2 px-3" style="background-color: #5263AB; color: white; font-weight: bold; border-radius: 10px;">Reset your password</button>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!--Forgot Password Modal #2-->
    <div class="modal fade" id="forgotpassword2Modal" tabindex="-1" aria-labelledby="forgotpassword2ModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.5)">
                <div class="modal-body pr-3 pl-3 pb-3">
                    <section class="p-sm-3 d-flex justify-content-center align-items-center">
                        <div class="col-12 col-lg-10 col-lg-4">
                            <h2 class="h2 text-center mb-4" style="color: #5263AB; font-weight: bold;">Email</h2>
                            <p class="text-center"> 
                                <img src="./assets/img/mail.png" class="h-100 d-inline-block" style="width: 150px" alt="">
                            </p> 
                            <p class="mb-5 text-center" style="color: #293566;">We have sent a password recover<br> instructions to your email.</p>
                            <form action="" method="post">
                            <p class="mb-5 text-center" style="color: #293566;">Did not receive anything?<br> Please click the resend button.</p>
                                <div class="col-12 col-md-6 col-md-4 my-5 mx-auto text-center w-auto">
                                    <button type="button" id="resendBtn" class="btn btn-reset-password py-2 px-3" style="background-color: #5263AB; color: white; font-weight: bold; border-radius: 10px;">Resend</button>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!--Forgot Password Modal #3-->
    <div class="modal fade" id="forgotpassword3Modal" tabindex="-1" aria-labelledby="forgotpassword3ModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.5)">
                <div class="modal-body pr-3 pl-3 pb-3">
                    <section class="p-sm-3 d-flex justify-content-center align-items-center">
                        <div class="col-12 col-lg-10 col-lg-4">
                            <h2 class="h2 text-start mb-4" style="color: #5263AB; font-weight: bold;">Create new password</h2>
                            <p class="mb-5" style="color: #293566;">Your new password must be different<br> from the previous used passwords.</p>
                            <form action="" method="post">
                                <div class="mb-5">
                                    <label for="new-password" class="form-label" style="color: #5263AB; "><b>Password</b></label>
                                    <input type="password" class="form-control" id="new-password" name="new-password">
                                    <p style="font-size: 13px; color: #6D6D6D">Must be atleast 5-10 characters.</p>
                                </div>
                                <div class="mb-3">
                                    <label for="confirmNewpassword" class="form-label" style="color: #5263AB;"><b>Confirm Password</b></label>
                                    <input type="password" class="form-control" id="confirmNewpassword" name="confirmNewpassword">
                                    <p style="font-size: 13px; color: #6D6D6D">Both passwords must match.</p>
                                </div>
                                <div class="col-12 col-md-6 col-md-4 my-5 mx-auto text-center w-auto">
                                    <button type="button" id="resetPasswordBtn2" class="btn btn-reset-password py-2 px-3" style="background-color: #5263AB; color: white; font-weight: bold; border-radius: 10px;">Reset Password</button>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!--Forgot Password Modal #4-->
    <div class="modal fade" id="forgotpassword4Modal" tabindex="-1" aria-labelledby="forgotpassword4ModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.5)">
                <div class="modal-body pr-3 pl-3 pb-3">
                    <section class="p-sm-3 d-flex justify-content-center align-items-center">
                        <div class="col-12 col-lg-10 col-lg-4">
                            <h4 class="h4 text-center mb-4" style="color: #5263AB;"><b>Password has been changed</b></h4>
                            <p class="text-center my-5"> 
                                <img src="./assets/img/check_circle.png" class="h-100 d-inline-block" style="width: 100px" alt="">
                            </p> 
                            <p class="mb-5 text-center" style="color: #293566;">You can now log in back again with your<br> new password click to login.</p>
                            <form action="" method="post">
                                <div class="col-12 col-md-6 col-md-4 mt-5 mx-auto text-center w-auto" style="margin-bottom: 100px;">
                                    <button type="button" id="loginBtn" class="btn btn-reset-password py-2 px-5" style="background-color: #5263AB; color: white; font-weight: bold; border-radius: 10px;">Login</button>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>