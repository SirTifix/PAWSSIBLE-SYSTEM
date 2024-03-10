<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Welcome to PAWSsible Solution Veterinary Clinic';
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
            <div class="fp-body p-auto">
                <section class="p-sm-3 d-flex justify-content-center align-items-center">
                    <div class="col-12 col-lg-10 col-lg-4 mt-5">
                        <h2 class="h2 text-center mb-5" style="color: #5263AB;"><b>Password has been changed</b></h2>
                        <p class="text-center my-5"> 
                            <img src="./assets/img/check_circle.png" class="h-100 d-inline-block" style="width: 100px" alt="">
                        </p> 
                        <p class="mb-5 text-center" style="color: #293566; font-size: 20px;">You can now log in back again with your<br> new password click to login.</p>
                        <form action="index.php" method="post">
                            <div class="col-12 col-md-6 col-md-4 mt-5 mx-auto text-center w-auto" style="margin-bottom: 100px;">
                                <button type="submit" id="loginBtn" class="btn btn-reset-password py-2 px-5" style="background-color: #5263AB; color: white; font-size: 20px; border-radius: 10px;"><b>LOGIN</b></button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </main>
    <?php
    require_once('./include/js.php')
    ?>
</body>
</html>