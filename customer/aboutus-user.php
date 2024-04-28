<?php
// Resume the session to fetch or create the cart
    session_start();

if (!isset($_SESSION['user']) || $_SESSION['user'] != 'customer'){
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , user-scalable=no">
    <title>Pawssible Solutions Veterinary</title>
    <link rel="website icon" type="png" href="./assets/img/logo.png">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-xn538HYobU8Un3x+RmL7gg7pKViPIzhwFX+JGLaP6JZ1eG9MzHtlHjkE3vGbeD9L" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
    <script src="https://use.fontawesome.com/releases/v4.7.0/js/all.js" integrity="sha384-wmJFVFK01zC5ZZ1LyU7IzNJ4eLTQuv0U6bF7VlD3PvVT6A6MpDqDIh0UCSNdU52Q" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
<header>
    <img class="eighth-lec" src="./assets/img/Vector 7.png" alt="img">
    <img class="twelveth-lec" src="./assets/img/multiple-pets2-Photoroom.png.png" alt="img">

    <div class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light" style="background: none;">
        <div class="container-fluid align-items-center">
            <!-- Logo -->
            <div class="logo p-3 d-flex align-items-center">
                <img class="logo-clinic" src="assets/img/logo.png" alt="Logo">
                <div class="logo-text-customer px-3">PAWSsible Solutions <br> Veterinary Clinic</div>
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
                    <a class="navbar-links" href="services-user.php">Services</a>
                    <a class="navbar-links" href="aboutus-user.php">About Us</a>
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
                            <ul class="notif-dropdown dropdown-menu dropdown-menu-end" style="left: auto; right: 0;" aria-labelledby="notificationDropdown">
                                <li><div class="title-notifications title-wrap d-flex align-items-center">
                                        <h3 class="title-notifications">Notifications</h3>
                                    </div>
                                </li>
                                <div class="drop-cont">

                        </div>
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
                            <div class="dropdown-menu dropdown-menu-end" style="left: auto; right: 0;" aria-labelledby="ProfileDropdown">
                                <a class="dropdown-item" style="margin:0;" href="./customer-profile.php">My Profile</a>
                                <a class="dropdown-item" style="margin:0;" href="./appointment.php">Appointments</a>
                                <a class="dropdown-item" style="margin:0;" href="./logout.php">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    </div>
</header>

    <div class="intro-title text-center">
        <h1> About Us </h1>
    </div>

    <section>
        <div class="about-us-description">
            <h1> Our Mission </h1>
            <br>
            <h3>
                To assist clients' pets in living long, happy, and healthy lives. An excellent connection 
                with the veterinarian is essential for your pet's well-being. Everyone at Pawssible Solution 
                Veterinary Clinic is dedicated to providing professional, compassionate, and personalized service. 
                Pawssible Solution Veterinary Clinic takes pleasure in adhering to the best veterinary medicine 
                standards. We have a full-service clinic with cutting-edge veterinary medical technologies.
            </h3>
        </div>
    </section>

    <section>
        <div class="about-us-description2">
            <br>
            <h2><i class="paw fa-solid fa-paw"></i></h2>
            <h3>
                We care for our patients as if they were our own pets, 
                and we strive to provide customers with the treatment they 
                envision and deserve.
            </h3>
            
            <br>
            <h2><i class="paw fa-solid fa-paw"></i></h2>
            <h3>
                We adopt an individualized approach to each of our patients' 
                long-term care and are committed to giving our clients with enough 
                knowledge to make proper decisions on the health care of their animal 
                companions.
            </h3>
        </div>
    </section>

    <?php
        require_once('./include/footer.php');
        require_once('./include/js.php');
    ?>

    <script src="https://kit.fontawesome.com/9ea2f828e7.js" crossorigin="anonymous"></script>
    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            document.getElementById('navbar-links').classList.toggle('active');
        });
    </script>

        <!-- Navbar -->
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
</body>
</html>
