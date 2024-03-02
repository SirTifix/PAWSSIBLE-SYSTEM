<?php
    require_once('./include/login-modal.php');
?>
<header>
    <img class="circle" src="assets/img/circle-bg.png">
    <img class="second-lec" src="assets/img/second-lec.png">
    <img class="third-lec" src="assets/img/Vector2.png" alt="img">
    <img class="fourth-lec" src="assets/img/Vector3.png" alt="img">
    <img class="fifth-lec" src="assets/img/vet-dog.png" alt="img">

    <nav class="navbar">
        <div class="logo p-3 d-flex align-items-center">
            <img class="logo-clinic" src="./assets/img/logo.png" alt="Logo" class="logosec">
            
            <div class="logo-text px-3">PAWSsible Solutions <br>
                Veterinary Clinic</div>
        </div>
        <div class="navbar-links">
            <a href="./index.php">Home</a>
            <a href="./services.html">Services</a> 
            <a href="./aboutus.html">About Us</a>
            <a href="./booking.php">Booking</a>
            <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
        </div>
    </nav>
</header>