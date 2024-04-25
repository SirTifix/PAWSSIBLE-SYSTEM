<header>
    <img class="circle" src="assets/img/circle-bg.png">
    <img class="second-lec" src="assets/img/second-lec.png">
    <img class="third-lec" src="assets/img/Vector2.png" alt="img">
    <img class="fourth-lec" src="assets/img/Vector3.png" alt="img">
    <!-- <img class="fifth-lec" src="assets/img/vet-dog.png" alt="img">  -->

    <div class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light" style="background: none;">
            <div class="container-fluid align-items-center">
                <!-- Logo -->
                <div class="logo p-3 d-flex align-items-center">
                    <img class="logo-clinic" src="assets/img/logo.png" alt="Logo" class="logosec img-fluid">
                    <div class="logo-text px-3">PAWSsible Solutions <br> Veterinary Clinic</div>
                </div>

                <!-- Navbar toggler button -->
                <div class=" d-flex justify-content-end align-items-center">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>

                <!-- Navbar links -->
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-links navbar-nav align-items-center">
                        <li class="navbar-links">
                            <a href="home.php">Home</a>
                        </li>
                        <li class="navbar-links">
                            <a href="services.php">Services</a>
                        </li>
                        <li class="navbar-links">
                            <a href="aboutus.php">About Us</a>
                        </li>
                        <li class="navbar-links">
                            <a href="booking.php">Booking</a>
                        </li>
                        <li class="navbar-links dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell"></i> Account
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="accountDropdown">
                                <li><a class="dropdown-item" href="customer-profile.php">My Profile</a></li>
                                <li><a class="dropdown-item" href="appointment.php">Appointments</a></li>
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var navbarCollapse = document.getElementById("navbarSupportedContent");
        var navbarToggler = document.querySelector(".navbar-toggler");

        navbarToggler.addEventListener("click", function() {
            navbarCollapse.classList.toggle("bg-color");
        });
    });
</script>