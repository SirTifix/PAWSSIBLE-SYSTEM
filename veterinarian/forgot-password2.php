<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Welcome to PAWSsible Solution Veterinary Clinic';
    require_once('./include/vet-index.php');
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
                        <h2 class="h2 text-center mb-5" style="color: #5263AB;"><b>Email</b></h2>
                        <p class="text-center mb-5"> 
                            <img src="./assets/img/mail.png" class="h-100 d-inline-block" style="width: 150px" alt="">
                        </p> 
                        <p class="mb-5 text-center" style="color: #293566; font-size: 20px;">We have sent a password recover<br> instructions to your email.</p>
                        <form action="forgot-password3.php" method="post">
                        <p class="mb-5 text-center" style="color: #293566; font-size: 20px;">Did not receive anything?<br> Please click the resend button.</p>
                            <div class="col-12 col-md-6 col-md-4 my-5 mx-auto text-center w-auto">
                                <button type="submit" id="resendBtn" class="btn btn-reset-password py-2 px-3" style="background-color: #5263AB; color: white; font-size: 20px; border-radius: 10px;"><b>RESEND</b></button>
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