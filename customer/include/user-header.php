<header>
    <img class="circle" src="assets/img/circle-bg.png">
    <img class="second-lec" src="assets/img/second-lec.png">
    <img class="third-lec" src="assets/img/Vector2.png" alt="img">
    <img class="fourth-lec" src="assets/img/Vector3.png" alt="img">
    <img class="fifth-lec" src="assets/img/vet-dog.png" alt="img">

    <div class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light" style="background: none;">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <div class="logo p-3 d-flex align-items-center ">
                        <img class="logo-clinic img-fluid" src="./assets/img/logo.png" alt="Logo" class="logosec">
                        <div class="logo-text ps-1">PAWSsible Solutions <br> Veterinary Clinic</div>
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