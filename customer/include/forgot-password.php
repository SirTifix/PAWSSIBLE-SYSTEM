<!DOCTYPE html>
<html lang="en">
<?php
    $title = '';
?>
<body>
    <main>
    <!--Modal-->
        <div class="modal fade" id="forgotpasswordModal" tabindex="-1" aria-labelledby="forgotpasswordModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.5)">
                    <div class="modal-body pr-3 pl-3 pb-3">
                        <section class="p-sm-3 d-flex justify-content-center align-items-center">
                            <div class="col-12 col-lg-10 col-lg-4">
                                <h1 class="h1 text-center mb-5" style="color: #5263AB; font-weight: bold;">Reset Password</h1>
                                <p>Enter the email associated with your<br> account and we’ll send an email with<br> details to reset your password. </p>
                                <form action="" method="post">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email">
                                    </div>
                                    <div class="col-12 col-md-6 col-md-4 mt-5 mx-auto text-center">
                                        <button type="submit" name="forgotpassword" class="btn btn-reset-password py-2 px-3" style="background-color: #5263AB; color: white; font-weight: bold; border-radius: 10px;">Reset your password</button>
                                    </div>
                                </form>
                            </div>
                        </section>
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