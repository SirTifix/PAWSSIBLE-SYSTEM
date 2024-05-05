<?php
session_start();
$title = 'Welcome to PAWSsible Solution Veterinary Clinic';

require_once '../classes/account.class.php';

if (isset($_POST['login'])) {
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
<!DOCTYPE html>
<html lang="en">
<?php
    require_once('./include/sec-index.php');
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
                            <?php if(isset($error)): ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $error; ?>
                                </div>
                            <?php endif; ?>
                            <form action="" method="post" class="needs-validation" novalidate>
                                <div class="mb-5 input-group">
                                    <span class="input-group-text pe-4" style="background-color: #C1CCF8;"></span><i class="fa fa-user ps-2"></i>
                                    <input type="text" class="form-control py-2" style="border-left: none; background-color: #C1CCF8;" id="username" name="username" placeholder="Username" value="<?php if (isset($_POST['username'])) {
                                            echo $_POST['username'];
                                        } ?>" required>
                                </div>
                                <div class="mb-4 input-group">
                                    <span class="input-group-text pe-4" style="background-color: #C1CCF8;"></span><i class="fa fa-lock ps-2"></i>
                                    <input type="password" class="form-control py-2" style="border-left: none; background-color: #C1CCF8;" id="password" name="password" placeholder="Password" value="<?php if (isset($_POST['password'])) {
                                            echo $_POST['password'];
                                        } ?>" required>
                                </div>
                                <div class="form-group text-end">
                                    <a href="forgot-password.php" style="color: #8A8A8A; font-size: 15px;">Forgot Password?</a>
                                </div>
                                <div class="col-12 col-md-6 col-md-4 mt-5 mx-auto text-center">
                                    <button type="submit" name="login" id="loginBtn" class="btn btn-create-account py-2 px-5" style="background-color: #5263AB; color: white; font-weight: bold; border-radius: 10px;">LOGIN</button>
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
</html>