<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pawssible Solutions Veterinary</title>
    <script src="./script/script.js"></script>
    <link rel="website icon" type="png" href="./assets/img/logo.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
<?php
    $title = 'Pawssible Solutions Veterinary';
    require_once('./include/user-header.php');
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
      <div class="swiper-slide">
        <div class="content-slider">
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
      <div class="swiper-slide">
        <div class="content-slider">
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
      <div class="swiper-slide">
        <div class="content-slider">
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
      <div class="swiper-slide">
        <div class="content-slider">
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
      <div class="swiper-slide">
        <div class="content-slider">
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
    
    <div class="swiper-pagination"></div>
  </div>

  <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>

<section class="FAQS">
    <div class=" intro-faqs text-center"> <h1><Strong> FAQS</Strong></h1></div>
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
            <div class="accordion-body "> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Can I schedule appointments for multiple pets in one session?
            </button>
          </h2>
          <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
          </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                How far in advance can I schedule an appointment online?
              </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                Is there a cancellation fee for missed appointments?
              </button>
            </h2>
            <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
            </div>
          </div>
      </div>
    </div>
</section>

 <!-- Initialize Swiper -->
 <script>
   var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
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
      breakpoints:{
        1024:{
            slidesPerView: 3,
            spaceBetween: 10,

        }
      }
      });

  </script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
 <script src="https://kit.fontawesome.com/9ea2f828e7.js" crossorigin="anonymous"></script>


 <?php
        require_once('./include/footer.php');
        require_once('./include/js.php');
    ?>
</body>
</html>