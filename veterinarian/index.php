<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Welcome to PAWSsible Solution Veterinary Clinic';
require_once('./include/vet-index.php');
require_once '../classes/account.class.php';

if (isset($_POST['login'])) {
    $user = new Account();
    $user->vetUsername = htmlentities($_POST['username']);
    $user->vetPassword = htmlentities($_POST['password']);
    if ($user->sign_in_admin()) {
        $_SESSION['user'] = 'veterinarian';
        $_SESSION['username'] = $user->vetUsername;
        header('location: dashboard.php');
    } else {
        $error = 'Invalid email/password. Try Again.';
    }
}
?>
<body>
    <main>
        <div class="row m-0">
            <div class="container logo-picture col-lg-7 col-md-6">
                <div class="title pt-5 px-5">
                    <h1> Welcome to PAWSsible Solution<br>
                        Veterinary Clinic</h1>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 pt-5">
                <div class="login-body p-auto">
                    <div class="container-fluid d-flex justify-content-center align-items-center">
                        <div class="col-12 col-lg-10 col-lg-4 mt-3">
                            <p class="text-center"> 
                                <img src="./assets/img/clinic-logo.png" style="width: 300px" alt="">
                            </p>    
                            <h1 class="h1 my-5 text-center" style="color: #5263AB; font-weight: bold;">LOGIN</h1>
                            <form action="" method="post">
                                <div class="mb-5 input-group">
                                    <span class="input-group-text pe-4" style="background-color: #C1CCF8;"><i class="fa fa-user ps-1"></i></span>
                                    <input type="text" class="form-control py-2" style="border-left: none; background-color: #C1CCF8;" id="username" name="username" placeholder="Username">
                                </div>
                                <div class="mb-4 input-group">
                                    <span class="input-group-text pe-4" style="background-color: #C1CCF8;"><i class="fa fa-lock ps-1"></i></span>
                                    <input type="password" class="form-control py-2" style="border-left: none; background-color: #C1CCF8;" id="password" name="password" placeholder="Password">
                                </div>
                                <div class="form-group text-end">
                                    <a href="forgot-password.php" style="color: #8A8A8A; font-size: 15px;">Forgot Password?</a>
                                </div>
                                <div class="col-12 col-md-6 col-md-4 mt-5 mx-auto text-center">
                                    <button type="submit" name="login" class="btn btn-create-account py-2 px-5" style="background-color: #5263AB; color: white; font-weight: bold; border-radius: 10px;">LOGIN</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
    require_once('./include/js.php')
    ?>
</body>
</php>