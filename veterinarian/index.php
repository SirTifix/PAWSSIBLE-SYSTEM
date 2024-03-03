<!DOCTYPE html>
<html lang="en">

<?php
session_start();
$title = 'Home';
require_once '../classes/account.class.php';


if (isset($_POST['submit'])) {
    $user = new Account();
    $user->vetUsername = htmlentities($_POST['username']);
    $user->vetPassword = htmlentities($_POST['password']);
    if ($user->sign_in_vet()) {
        header('location: dashboard.php');
    } else {
        $error = 'Invalid email/password. Try Again.';
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=., initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/vendor/bootstrap-5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <title>Document</title>
</head>
<body>
    <div class="row">
        <div class="container logo-picture col-lg-7 col-md-6">
            <div class="title pt-5 px-5">
            <h1> Welcome to PAWSsible Vetenirary Solution Veterinary Clinic</h1>
            </div>

        </div>
        <div class="col-lg-5 col-md-6">
            <img src="assets/img/Logo.png" alt="Logo" class="logosec mx-auto d-block">
            <div class="login py-5 text-center">
                <h1>Veterinarian Login</h1>
            </div>
            <div class="box-login">
                <form class="form-login" method="post">
                    <fieldset>
                        <div class="form-group input px-5 py-3">
                            <div class="input-group">                            
                                 
                                <input type="text" class="form-control px-5" name="username" placeholder="Username">
                                <i class="fa fa-user mt-2 px-3"></i>
                            </div>
                        </div>
                        <div class="form-group form-actions input px-5 py-3  ">
                            <div class="input-group ">

                                   <input type="password" class="form-control password px-5" name="password" placeholder="Password">
                                   <i class="fa fa-lock mt-2 px-3"></i>
                            </div>
                        <div class="form-group ">
                                <div class="input-pass text-left">
                                <a href="forgot-password.php">Forgot Password?</a>
                                </div>
                        </div>
                            
                        </div>
                        <div class="form-actions text-center py-4 ">
                            <button type="submit" class="btn btn-dark-blue" name="submit">
                               LOG IN 
                            </button>
                        </div>
                    </fieldset>
                </form>
            </div>
            
            
        
</body>
</php>