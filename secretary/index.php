<!DOCTYPE html>
<html lang="en">

<?php
session_start();
$title = 'Home';

require_once('./include/sec-index.php');
require_once '../classes/account.class.php';


if (isset($_POST['submit'])) {
    $user = new Account();
    $user->secretaryUsername = htmlentities($_POST['username']);
    $user->secretaryPassword = htmlentities($_POST['password']);
    if ($user->sign_in_secretary()) {
        header('location: dashboard.php');
    } else {
        $error = 'Invalid email/password. Try Again.';
    }
}
?>

<body>
    <main>
        <div class="row">
            <div class="container logo-picture col-lg-7 col-md-6">
                <div class="title pt-5 px-5">
                    <h1> Welcome to PAWSsible Solution<br>
                        Veterinary Clinic</h1>
                </div>

            </div>
            <div class="col-lg-5 col-md-6">
                <img src="assets/img/clinic-logo.png" alt="Logo" class="logosec mx-auto d-block">
                <div class="login py-5 text-center">
                    <h1>Secretary Login</h1>
                </div>
                <div class="box-login">
                    <form class="" method="post">
                        <fieldset>
                            <div class="form-group input px-5 py-3">
                                <div class="input-group">
                                    <input type="text" class="form-control px-5" name="username" placeholder="Username">
                                    <i class="fa fa-user"></i>
                                </div>
                            </div>
                            <div class="input px-5 py-3">
                                <div class="form-group input-group d-flex align-items-center">
                                    <input type="password" class="form-control password px-5" id="password"
                                        name="password" placeholder="Password">
                                    <i class="fa fa-lock "></i>
                                    <span toggle="#password-field"
                                        class="fa fa-fw fa-eye field-icon toggle-password pe-4"></span>
                                </div>
                                <div class="form-group text-left">
                                    <a href="forgot-password.php">Forgot Password?</a>
                                </div>
                            </div>
                            <div class="form-actions text-center py-4 ">
                                <button type="submit" class="btn btn-dark-blue" name="submit">
                                    LOG IN
                                </button>
                            </div>

                        </fieldset>
                    </form>
                    <?php
                    if (isset($_POST['submit']) && isset($error)) {
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
    </main>
    <?php
    require_once('./include/js.php')
        ?>
</body>

</html>