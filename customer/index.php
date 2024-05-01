<?php
session_start();
if (isset($_SESSION['user']) && $_SESSION['user'] == 'customer') {
  header('location: home.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Pawssible Solutions Veterinary';
require_once ('./include/user-head.php');
require_once ('./tools/functions.php');
?>
<body>
    <?php
    require_once ('./include/user-header.php')
      ?>
    <section class="uno d-flex col-12">
        <div class="intro col-11"> 
            <h1>Your Pet's Health,</h1>
            <h1>Our Priority</h1> 
            <div class="border-line"></div>

            <div class="description">
            <h2>Welcome to Pawssible Solutions Veterinary </h2>   
            <h2>Clinic, Your trusted destination for </h2> 
            <h2>compassionate care and expert attention.</h2>
        </div>
  
        <button type="button" class="boton" style="background-color: #2A2F4F; color: white;" data-bs-toggle="modal" data-bs-target="#registerModal">REGISTER NOW</button>
    </section>

    <section class="dos">

        <div class="title">
            <div class="featured">
                <h1>Your Pet Health Comes First</h1>
            </div>
        </div>

    <div class="featured-pics">
        <div class="showcase">
            <img src="assets/img/feat1.png" alt="vet-dog">
        </div>

        <div class="showcase">
            <img src="assets/img/feat2.jpg" alt="vet-dog">
        </div>
    </div>

    <div class="description">
        <div class="container-description">
            <h3>
                Ensuring the well-being of your beloved companion begins 
                with a commitment to prioritize their health above all else. 
                Your pet's health is the cornerstone of their happiness 
                and vitality, and by making it a top priority, 
                you are not only providing them with a fulfilling and 
                joyful life but also strengthening the bond you share.
            </h3>
        </div>
    </div>
    </section>

    <section class="tres">
        <div class="responsive-container-block big-container">
            <div class="responsive-container-block bg">
              <p class="text-blk title">
                What Our Clients Say?
              </p>
              <p class="text-blk desc">
                We're dedicated to your pet's health, offering expert care from check-ups to tailored nutrition. 
                Our mission is to ensure your furry friend's well-being and happiness with quality veterinary services.
              </p>
              <div class="responsive-container-block blocks">
                <div class="responsive-cell-block wk-desk-1 wk-tab-1 wk-mobile-1 wk-ipadp-1 content">
                  <p class="text-blk info-block">
                  I can't thank Pawssible Solutions Veterinary Clinic enough for their exceptional service. From the moment I walked in, 
                  I knew my pet was in good hands. The staff is friendly, knowledgeable, and genuinely cares about the well-being of every animal they treat.
                  </p>
                  <div class="responsive-container-block person">
                    <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12 icon-block">
                      <img class="profile-img" src="./assets/img/default.png">
                    </div>
                    <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12 text-block">
                      <p class="text-blk name">
                        Amelia Louise
                      </p>
                      <p class="text-blk desig">
                        Customer
                      </p>
                    </div>
                  </div>
                </div>
                <div class="responsive-cell-block wk-desk-1 wk-tab-1 wk-mobile-1 wk-ipadp-1 content">
                  <p class="text-blk info-block">
                  The team at Pawssible Solutions Veterinary Clinic is absolutely amazing! They took such great care of my pet during his 
                  recent check-up. Their expertise and dedication to providing top-notch care truly set them apart.
                  </p>
                  <div class="responsive-container-block person">
                    <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12 icon-block">
                      <img class="profile-img" src="./assets/img/default.png">
                    </div>
                    <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12 text-block">
                      <p class="text-blk name">
                        Jane Doe
                      </p>
                      <p class="text-blk desig">
                        Customer
                      </p>
                    </div>
                  </div>
                </div>
                <div class="responsive-cell-block wk-desk-1 wk-tab-1 wk-mobile-1 wk-ipadp-1 content bottom">
                  <p class="text-blk info-block">
                  Choosing Pawssible Solutions Veterinary Clinic was the best decision for my pet's care. The veterinarians 
                  here are skilled professionals who go above and beyond to ensure every pet's health and happiness. Highly recommended!
                  </p>
                  <div class="responsive-container-block person">
                    <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12 icon-block">
                      <img class="profile-img" src="./assets/img/default.png">
                    </div>
                    <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12 text-block">
                      <p class="text-blk name">
                        Joey Paras
                      </p>
                      <p class="text-blk desig">
                        Customer
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
    <?php
    require_once ('./include/login-modal.php');
    require_once ('./include/register-modal.php');
    require_once ('./include/footer.php');
    require_once ('./include/js.php');
    ?>
    <script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        document.getElementById('navbar-links').classList.toggle('active');
    });
</script>
</body>
</html>
