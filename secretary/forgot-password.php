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
                    <div class="col-12 col-lg-10 col-lg-4">
                        <h2 class="h2 text-start my-5" style="color: #5263AB;"><b>Reset Password</b></h2>
                        <p class="mb-5" style="color: #293566; font-size: 20px;">Enter the email associated with your account and we’ll send an email with details to reset your password. </p>
                        <form action="forgot-password2.php" method="post">
                            <div class="mb-5">
                                <label for="email" class="form-label mb-3" style="color: #293566; font-size: 20px;"><b>Email Address</b></label>
                                <input type="email" class="form-control py-3" id="email" name="email">
                            </div>
                            <div class="col-12 col-md-6 col-md-4 my-5 mx-auto text-center w-auto pt-5">
                                <button type="submit" id="resetPasswordBtn" class="btn btn-reset-password py-2 px-3" style="background-color: #5263AB; color: white; font-size: 20px; border-radius: 10px;"><b>RESET YOUR PASSWORD</b></button>
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