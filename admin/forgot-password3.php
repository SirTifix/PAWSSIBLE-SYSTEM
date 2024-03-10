<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Welcome to PAWSsible Solution Veterinary Clinic';
    require_once('./include/admin-index.php');
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
                        <h2 class="h2 text-start mb-5" style="color: #5263AB;"><b>Create new password</b></h2>
                        <p class="mb-5" style="color: #293566; font-size: 20px;">Your new password must be different from the previous used passwords.</p>
                        <form action="forgot-password4.php" method="post">
                            <div class="mb-5">
                                <label for="new-password" class="form-label" style="color: #5263AB; font-size: 20px;"><b>Password</b></label>
                                <input type="password" class="form-control py-3" id="new-password" name="new-password">
                                <p style="font-size: 13px; color: #6D6D6D">Must be atleast 5-10 characters.</p>
                            </div>
                            <div class="mb-3">
                                <label for="confirmNewpassword" class="form-label" style="color: #5263AB; font-size: 20px;"><b>Confirm Password</b></label>
                                <input type="password" class="form-control py-3" id="confirmNewpassword" name="confirmNewpassword">
                                <p style="font-size: 13px; color: #6D6D6D">Both passwords must match.</p>
                            </div>
                            <div class="col-12 col-md-6 col-md-4 my-5 mx-auto text-center w-auto">
                                <button type="submit" id="resetPasswordBtn2" class="btn btn-reset-password py-2 px-3" style="background-color: #5263AB; color: white; font-size: 20px; border-radius: 10px;"><b>RESET PASSWORD</b></button>
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