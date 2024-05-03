<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , user-scalable=no">
    <title>About Us</title>
    <link rel="website icon" type="png" href="./assets/img/logo.png">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/9ea2f828e7.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php
    require_once('./include/login-modal.php');
    ?>
    <header>
        <img class="seventh-lec" src="./assets/img/Ellipse 17.png" alt="img">
        <img class="eighth-lec" src="./assets/img/Vector 7.png" alt="img">
        <img class="nignth-lec" src="./assetsimg/Ellipse 18.png" alt="img">
        <img class="tenth-lec" src="./assets/img/Rectangle 10.png" alt="img">
        <img class="twelveth-lec" src="./assets/img/multiple-pets2-Photoroom.png.png" alt="img">


        <div class="sticky-top">
            <nav class="navbar navbar-expand-lg navbar-light" style="background: none;">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div class="logo p-3 d-flex align-items-center ">
                            <img class="logo-clinic img-fluid" src="assets/img/logo.png" alt="Logo">
                            <div class="logo-text-customer ps-1">PAWSsible Solutions <br> Veterinary Clinic</div>
                        </div>
                        <!-- Navbar toggler button -->
                        <div class=" d-flex align-items-center">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                    </div>

                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <div class="navbar-links navbar-nav navbar-nav align-items-center" id="navbar-links">
                            <a class="navbar-links" href="./index.php">Home</a>
                            <a class="navbar-links" href="./services.php">Services</a>
                            <a class="navbar-links" href="./aboutus.php">About Us</a>
                            <a class="navbar-links" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
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
            navbarCollapse.addEventListener("hidden.bs.collapse", function() {
                navbarCollapse.classList.remove("bg-color");
            });

            navbarToggler.addEventListener("click", function() {
                navbarCollapse.classList.toggle("bg-color");
            });
        });
    </script>
    <script src="https://kit.fontawesome.com/9ea2f828e7.js" crossorigin="anonymous"></script>
    
    <?php
    require_once('./include/footer.php');
    require_once('./include/js.php');
    ?>
</body>

</html>