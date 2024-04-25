<header>
    <img class="circle" src="assets/img/circle-bg.png">
    <img class="second-lec" src="assets/img/second-lec.png">
    <img class="third-lec" src="assets/img/Vector2.png" alt="img">
    <img class="fourth-lec" src="assets/img/Vector3.png" alt="img">

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
                <div class="navbar-links navbar-nav navbar-nav align-items-center">
                    <a class="navbar-links" href="home.php">Home</a>
                    <a class="navbar-links" href="services.php">Services</a>
                    <a class="navbar-links" href="aboutus.php">About Us</a>
                    <a class="navbar-links" href="booking.php">Booking</a>

                    <div class="customized-drop-customer btn-group m-3" role="group">
                        <div class="btn-group dropstart" role="group">
                            <button class="btn btn-primary" type="button" id="notificationDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-regular fa-bell position-relative">
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 10px">
                                        3
                                    </span>
                                </i>
                            </button>
                            <ul class="notif-dropdown dropdown-menu dropdown-menu-end" aria-labelledby="notificationDropdown">
                                <li><h3 class="title-notifications dropdown-header">Notifications</h3></li>
                                <li><a class="dropdown-item" href="#"><strong>Belgy</strong> Has a <strong> Consultation </strong>Appointment on <strong> Jan 13, 2024 </strong></a></li>
                                <li><a class="dropdown-item" href="#"><strong>Max</strong> Has a <strong> Vaccination </strong>Appointment on <strong> Jan 13, 2024 </strong></a></li>
                                <li><a class="dropdown-item" href="#"><strong>Kebies</strong> Has a <strong> Imputation </strong>Appointment on <strong> Jan 13, 2024 </strong></a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item text-center" href="./appointment.php">View all</a></li>
                            </ul>
                        </div>
                        <div class="btn-group" role="group">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="ProfileDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Account
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="ProfileDropdown">
                                <a class="dropdown-item" href="./customer-profile.php">My Profile</a>
                                <a class="dropdown-item" href="./appointment.php">Appointments</a>
                                <a class="dropdown-item" href="./logout.php">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    </div>
</header>

<script>
   document.addEventListener("DOMContentLoaded", function() {
    var navbarCollapse = document.getElementById("navbarSupportedContent");
    var navbarToggler = document.querySelector(".navbar-toggler");

    // Function to close navbar collapse when clicked outside
    function closeNavbarCollapse(event) {
        if (!navbarCollapse.contains(event.target) && !navbarToggler.contains(event.target)) {
            navbarCollapse.classList.remove("show"); // Remove the 'show' class to hide the collapse menu
            navbarCollapse.classList.remove("bg-color"); // Remove the background color
        }
    }

    // Event listener to close navbar collapse when clicked outside
    document.body.addEventListener("click", closeNavbarCollapse);

    // Event listener to remove background color when collapse menu is hidden
    navbarCollapse.addEventListener("hidden.bs.collapse", function () {
        navbarCollapse.classList.remove("bg-color");
    });

    navbarToggler.addEventListener("click", function() {
        navbarCollapse.classList.toggle("bg-color");
    });
});

</script>