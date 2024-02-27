<?php
    session_start();

    if(isset($_SESSION['user']) && $_SESSION['user'] == 'customer'){
        header('location: home.php');
    }

    require_once '../classes/account.class.php';
    if(isset($_POST['login'])){
        $user = new Account();
        $user->email = htmlentities($_POST['email']);
        $user->password = htmlentities($_POST['password']);
        if($user->sign_in_customer()){
            $_SESSION['user'] = 'customer';
            header('location: home.php');
        }else{
            $error = 'Invalid email/password. Try Again.';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<?php
    $title = '';
?>
<body>
    <main>
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
                                <form action="" method="post">
                                    <div class="mb-5 input-group">
                                        <span class="input-group-text" style="background-color: #ffffff;"><i class="fa fa-user"></i></span>
                                        <input type="email" class="form-control" style="border-left: none;" id="email" name="email" placeholder="Username" value="<?php if(isset($_POST['email'])){ echo $_POST['email']; } ?>">
                                    </div>
                                    <div class="mb-4 input-group">
                                        <span class="input-group-text" style="background-color: #ffffff;"><i class="fa fa-lock"></i></span>
                                        <input type="password" class="form-control" style="border-left: none;" id="password" name="password" placeholder="Password" value="<?php if(isset($_POST['password'])){ echo $_POST['password']; } ?>">
                                    </div>
                                    <div class="form-group text-end">
                                        <a href="forgot-password.php" style="color: #8A8A8A;">Forgot Password?</a>
                                    </div>
                                    <div class="col-12 col-md-6 col-md-4 mt-5 mx-auto text-center">
                                        <button type="submit" name="login" class="btn btn-create-account py-2 px-5" style="background-color: #5263AB; color: white; font-weight: bold; border-radius: 10px;">Login</button>
                                    </div>
                                </form>
                                <?php
                                if(isset($_POST['login']) && isset($error)){
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
    </main>
    <?php
        require_once('./include/js.php')
    ?>
</body>
</html>