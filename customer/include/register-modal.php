<?php
require_once '../classes/customer-register.class.php';

if (isset($_POST['register'])) {
    $user = new Register();
    //sanitize
    $user->firstname = htmlentities($_POST['firstname']);
    $user->middlename = htmlentities($_POST['middlename']) ? $_POST['middlename'] : null;
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
            $message = 'Account successfully created!';
        } else {
            echo 'An error occurred while adding in the database.';
        }
    } else {
        $form_submission_failed = true;
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
                            <?php if (isset($form_submission_failed) && $form_submission_failed): ?>
                                            <!-- Display error message here -->
                                            <div class="alert alert-danger my-1 mb-3 text-center" role="alert">
                                                Please fill the required forms.
                                            </div>
                            <?php endif; ?>
                                <h1 class="h1 text-center mb-5" style="color: #5263AB; font-weight: bold;">Register</h1>
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                    <div class="mb-3">
                                        <label for="firstname" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstname" name="firstname" value="<?php if (isset($_POST['firstname'])) {
                                            echo $_POST['firstname'];
                                        } ?>">
                                        <?php
                                        if (isset($_POST['firstname']) && !validate_field($_POST['firstname'])) {
                                            ?>
                                                            <p class="text-danger my-1">First name is required</p>
                                                    <?php
                                        }
                                        ?>
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
                                        } ?>">
                                        <?php
                                        if (isset($_POST['lastname']) && !validate_field($_POST['lastname'])) {
                                            ?>
                                                            <p class="text-danger my-1">Last name is required</p>
                                                    <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="<?php if (isset($_POST['email'])) {
                                            echo $_POST['email'];
                                        } ?>">
                                        <?php
                                        $new_user = new Register();
                                        if (isset($_POST['email'])) {
                                            $new_user->email = htmlentities($_POST['email']);
                                        } else {
                                            $new_user->email = '';
                                        }

                                        if (isset($_POST['email']) && strcmp(validate_email($_POST['email']), 'success') != 0) {
                                            ?>
                                                            <p class="text-danger my-1"><?php echo validate_email($_POST['email']) ?></p>
                                                    <?php
                                        } else if ($new_user->is_email_exist() && $_POST['email']) {
                                            ?>
                                                                        <p class="text-danger my-1">Email already exist</p>
                                                <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" value="<?php if (isset($_POST['password'])) {
                                            echo $_POST['password'];
                                        } ?>">
                                        <?php
                                        if (isset($_POST['password']) && validate_password($_POST['password']) !== "success") {
                                            ?>
                                                            <p class="text-danger my-1"><?= validate_password($_POST['password']) ?></p>
                                                    <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="confirmpassword" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" value="<?php if (isset($_POST['confirmpassword'])) {
                                            echo $_POST['confirmpassword'];
                                        } ?>">
                                        <?php
                                        if (isset($_POST['password']) && isset($_POST['confirmpassword']) && !validate_cpw($_POST['password'], $_POST['confirmpassword'])) {
                                            ?>
                                                            <p class="text-danger my-1">Your confirm password didn't match</p>
                                                    <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="or-divider my-3">
                                        <span class="or-text">Or</span>
                                    </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6 text-center">
                                                <!-- Facebook Button -->
                                                <a href="#" class="btn btn-primary brand-bg-color btn-social" style="width: 150px">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </div>
                                            <div class="col-md-6 text-center">
                                                <!-- Google Button -->
                                                <a href="#" class="btn btn-danger brand-bg-color btn-social" style="width: 150px">
                                                    <i class="fab fa-google"></i> 
                                                </a>
                                            </div>
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
