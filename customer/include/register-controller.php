<?php
require_once '../classes/customer-register.class.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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