<?php
require_once '../classes/customer-register.class.php';

if (isset($_POST['register'])) {
    $user = new Register();
    //sanitize
    $user->firstname = htmlentities($_POST['firstname']);
    $user->middlename = htmlentities($_POST['middlename']) ? $_POST['middlename'] : "";
    $user->lastname = htmlentities($_POST['lastname']);
    $user->email = htmlentities($_POST['email']);
    $user->password = htmlentities($_POST['password']);

    //validate
    if (
        validate_field($user->firstname) &&
        validate_field($user->lastname) &&
        validate_field($user->email) &&
        validate_field($user->password) &&
        validate_password($user->password) &&
        validate_cpw($user->password, $_POST['confirmpassword']) &&
        validate_email($user->email) &&
        !$user->is_email_exist()
    ) {
        if ($user->add()) {
            $_SESSION['error'] = null;
            $_SESSION['email_exist'] = null;
            $message = 'Account successfully created!';
            echo "<script>window.location.href = './include/success-registered.php';</script>";
        } else {
            echo 'An error occurred while adding in the database.';
        }
    } else {
        if($user->is_email_exist()){
            $_SESSION['email_exist'] = "Email already exist";
        }
        $_SESSION['error'] = 'Please check your input and try again.';
        $_SESSION['form_submission_failed'] = true;
        echo "<script>window.location.href = './index.php';</script>";
    }
}
?>
    <!--Modal-->
        <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.5)">
                    <div class="modal-body pr-3 pl-3 pb-3">
                        <section class="p-sm-3 d-flex justify-content-center align-items-center">
                            <div class="col-12 col-lg-10 col-lg-4">
                            <?php if (isset($_SESSION['form_submission_failed']) && $_SESSION['form_submission_failed']): ?>
                                                    <!-- Display error message here -->
                                                    <div class="alert alert-danger my-1 mb-3 text-center" role="alert">
                                                     Please check your input and try again.
                                                    </div>
                            <?php endif; ?>
                                <h1 class="h1 text-center mb-5" style="color: #5263AB; font-weight: bold;">Register</h1>
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="needs-validation" id="registrationForm" method="post" novalidate>
                                    <div class="mb-3">
                                        <label for="firstname" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstname" name="firstname" value="<?php if (isset($_POST['firstname'])) {
                                            echo $_POST['firstname'];
                                        } ?>" required>
                                        <div class="invalid-feedback">
                                          Please input first name.
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="middlename" class="form-label">Middle Name (Optional)</label>
                                        <input type="text" class="form-control" id="middlename" name="middlename" value="<?php if (isset($_POST['middlename'])) {
                                            echo $_POST['middlename'];
                                        } ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="lastname" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="lastname" name="lastname" value="<?php if (isset($_POST['lastname'])) {
                                            echo $_POST['lastname'];
                                        } ?>" required>
                                        <div class="invalid-feedback">
                                          Please input last name.
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="<?php if (isset($_POST['email'])) {
                                            echo $_POST['email'];
                                        } ?>" required>
                                        <?php
                                          if (isset($_SESSION['email_exist'])): ?>
                                            <p class="text-danger">
                                                <?= $_SESSION['email_exist'] ?>
                                            </p>
                                        <?php    
                                            endif;
                                        ?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" value="<?php if (isset($_POST['password'])) {
                                            echo $_POST['password'];
                                        } ?>" required>
                                        <div class="invalid-feedback">
                                          Please input password.
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="confirmpassword" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" value="<?php if (isset($_POST['confirmpassword'])) {
                                            echo $_POST['confirmpassword'];
                                        } ?>" required>
                                        <?php
                                        if (isset($_POST['password']) && isset($_POST['confirmpassword']) && !validate_cpw($_POST['password'], $_POST['confirmpassword'])) {
                                            ?>
                                                                    <p class="text-danger my-1">Your confirm password didn't match</p>
                                                            <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="my-3">
                                    </div>
                                    <div class="col-12 col-md-6 col-md-4 mt-5 mx-auto text-center">
                                        <button type="submit" name="register" class="btn btn-create-account py-2 px-3" style="background-color: #5263AB; color: white; font-weight: bold; border-radius: 10px;">Create Account</button>
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
