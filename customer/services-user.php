<?php
// Resume the session to fetch or create the cart
session_start();

if (!isset($_SESSION['user']) || $_SESSION['user'] != 'customer') {
  header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Service</title>
  <link rel="website icon" type="png" href="./assets/img/logo.png">
  <script src="./script/script.js"></script>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-xn538HYobU8Un3x+RmL7gg7pKViPIzhwFX+JGLaP6JZ1eG9MzHtlHjkE3vGbeD9L" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <!-- <header>
    <img class="third-lec" src="assets/img/Vector2.png" alt="img">
    <img class="fourth-lec" src="assets/img/Vector3.png" alt="img">
    <img class="sixth-lec" src="assets/img/vector-4.png" alt="img">
    <img class="eleventh-lec" src="assets/img/multiple-pets.png" alt="img">

    <div class="sticky-top">
      <nav class="navbar navbar-expand-lg navbar-light" style="background: none;">
        <div class="container-fluid align-items-center">

          <div class="logo p-3 d-flex align-items-center">
            <img class="logo-clinic" src="assets/img/logo.png" alt="Logo">
            <div class="logo-text-customer px-3">PAWSsible Solutions <br> Veterinary Clinic</div>
          </div>

          <div class=" d-flex justify-content-end align-items-center">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>

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
                  <ul class="notif-dropdown dropdown-menu dropdown-menu-end" aria-labelledby="notificationDropdown">
                    <li>
                      <h3 class="title-notifications dropdown-header">Notifications</h3>
                    </li>
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
  </header> -->
  <?php
  require_once ('./include/customer-header.php');
  ?>
  <div class="intro-title text-center">
    <h1> Our Services </h1>
  </div>



  <div class="sliders">
    <!-- Swiper -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="content-slider">
            <div class="content-background-border">


              <br>
              <br>
              <h2> <strong>Consultation</strong></h2>
              <br>
              <h6><em>Price starts at</em></h6>
              <h3>Php 250.00</h3>
              <br>
              <br>
              <h3>Offers expert care and advice to ensure the health and well-being of your beloved pets.</h3>
              <br>
              <br>

              <a target="#" class="service-button"> <strong>BOOK NOW!</strong></a>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="content-slider">
            <div class="content-background-border">
              <br>
              <br>
              <h2> <strong>Vaccination</strong></h2>
              <br>
              <h6><em>Price starts at</em></h6>
              <h3>Php 350.00</h3>
              <br>
              <br>
              <h3>Ensure your pet's well-being with timely vaccinations for a lifetime of health.</h3>
              <br>
              <br>

              <a target="#" class="service-button"> <strong>BOOK NOW!</strong></a>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="content-slider">
            <div class="content-background-border">
              <br>
              <br>
              <h2> <strong>Deworming</strong></h2>
              <br>
              <h6><em>Price starts at</em></h6>
              <h3>Php 200.00</h3>
              <br>
              <br>
              <h3>Promote your pet's health and vitality through regular, reliable deworming solutions.</h3>
              <br>
              <br>

              <a target="#" class="service-button"> <strong>BOOK NOW!</strong></a>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="content-slider">
            <div class="content-background-border">
              <br>
              <br>
              <h2> <strong>Spay/Neuter</strong></h2>
              <br>
              <h6> <em>Price starts at </em></h6>
              <h3>Php 250.00</h3>
              <br>
              <br>
              <h3>Offers expert care and advice to ensure the health and well-being of your beloved pets.</h3>
              <br>
              <br>

              <a target="#" class="service-button"> <strong>BOOK NOW!</strong></a>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="content-slider">
            <div class="content-background-border">
              <br>
              <br>
              <h2> <strong>Eye Surgery</strong></h2>
              <br>
              <h6><em>Price starts at</em></h6>
              <h3>Php 250.00</h3>
              <br>
              <br>
              <h3>Offers expert care and advice to ensure the health and well-being of your beloved pets.</h3>
              <br>
              <br>

              <a target="#" class="service-button"> <strong>BOOK NOW!</strong></a>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="content-slider">
            <div class="content-background-border">
              <br>
              <br>
              <h2> <strong>Imputation</strong></h2>
              <br>
              <h6><em>Price starts at</em></h6>
              <h3>Php 250.00</h3>
              <br>
              <br>
              <h3>Offers expert care and advice to ensure the health and well-being of your beloved pets.</h3>
              <br>
              <br>

              <a target="#" class="service-button"> <strong>BOOK NOW!</strong></a>
            </div>
          </div>
        </div>


      </div>

      <div class="swiper-pagination"></div>
    </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>

  <section class="FAQS">
    <div class=" intro-faqs text-center">
      <h1><Strong> FAQS</Strong></h1>
    </div>
    <div class="FQS">
      <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              How do I schedule an appointment for my pet?
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body"> class. This is the first item's accordion body.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
              What information do I need to schedule an appointment online?
            </button>
          </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body "> class. This is the second item's accordion body. Let's imagine this
              being filled with some actual content.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
              Can I schedule appointments for multiple pets in one session?
            </button>
          </h2>
          <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">it look, at least at first glance, a bit more representative of how this
              would look in a real-world application.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
              How far in advance can I schedule an appointment online?
            </button>
          </h2>
          <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">it look, at least at first glance, a bit more representative of how this
              would look in a real-world application.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
              Is there a cancellation fee for missed appointments?
            </button>
          </h2>
          <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">it look, at least at first glance, a bit more representative of how this
              would look in a real-world application.</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 5,
      spaceBetween: 10,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        1024: {
          slidesPerView: 3,
          spaceBetween: 10,
        },
        320: {
          slidesPerView: 1,
          spaceBetween: 1,
        },
      },
    });
    // Initialize Swiper
    initializeSwiper();
  </script>
  <script src="https://kit.fontawesome.com/9ea2f828e7.js" crossorigin="anonymous"></script>
  <script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
      document.getElementById('navbar-links').classList.toggle('active');
    });
  </script>
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

  <?php
  require_once ('./include/footer.php');
  require_once ('./include/js.php');
  ?>
</body>

</html>