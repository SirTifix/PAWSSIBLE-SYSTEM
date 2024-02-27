<?php
// Resume the session to fetch or create the cart
    session_start();

if (!isset($_SESSION['user']) || $_SESSION['user'] != 'customer'){
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Home';
    require_once('./include/user-head.php');
    require_once('./tools/functions.php');
?>
<body>
    <?php
    require_once('./include/home-header.php')
    ?>
    <main>
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
  
        <button type="button" class="boton" style="background-color: #2A2F4F; color: white;">BOOK NOW</button>
  
        <div class="social-icons col-2">
          <a href="https://www.facebook.com/profile.php?id=61551085774858"  title="facebook"> 
            <i class="fa-brands fa-facebook" aria-hidden="true"></i> 
          </a>
          <a href="#" title="instagram">  
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </a>
          <a href="#" title="twitter"> 
            <i class="fa-sharp fa-solid fa-x" aria-hidden="true"></i>
          </a>
          </div>
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
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Cursus elementum magna ut duis pulvinar tincidunt vivamus adipiscing quam. Eget dui quis etiam sed eget sed est.
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
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Cursus elementum magna ut duis pulvinar tincidunt vivamus adipiscing quam. Eget dui quis etiam sed eget sed est.
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
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus elementum magna ut duis pulvinar tincidunt vivamus adipiscing quam. Eget dui quis etiam sed eget sed est.
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
        require_once('./include/js.php');
    ?>
    <script src="./script/calendar.js"></script>
</body>
</html>
