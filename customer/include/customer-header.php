<?php
require_once '../classes/booking.class.php';
require_once '../classes/service.class.php';

$booking = new Booking();
$service = new Service();

$bookingCustomer = $booking->showCustomerBooking($_SESSION['customerID']);

$bookingInfo = $booking->showAllAppointments();
$notificationCount = 0;
foreach ($bookingInfo as $bookingRecord) {
    $serviceID = $bookingRecord['serviceID'];
    $bookingID = $bookingRecord['bookingID'];
    $serviceData = $service->fetch($serviceID);
    $bookingData = $booking->show($bookingID);
    if ($bookingData['bookingID'] == $bookingCustomer['bookingID']) {
        $currentDate = date('Y-m-d');
        $nextDay = date('Y-m-d', strtotime($currentDate . ' +1 day'));

        if ($serviceData && $bookingData) {
            $twoDaysBeforeBooking = date('Y-m-d', strtotime($nextDay . ' +2 days'));

            if ($twoDaysBeforeBooking == date('Y-m-d', strtotime($bookingData['bookingDate']))) {
                $notificationCount++;
            }
            if ($nextDay == date('Y-m-d', strtotime($bookingData['bookingDate']))) {
                $notificationCount++;
            }
        } else {
            echo "Service data not found for Service ID: " . $serviceID . "<br>";
        }
    }
}
?>

<header>
    <div class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light" style="background: none;">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <!-- Logo -->
                    <div class="logo p-3 d-flex align-items-center">
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
                                <i class="fa fa-bell position-relative" aria-hidden="true">
                                    <!-- number of li in notifications -->
                                    <?php if ($notificationCount > 0): ?>
                                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 10px">
                                                <?php echo $notificationCount; ?>
                                            </span>
                                    <?php endif; ?>
                                </i>
                            </button>
                            <ul class="notif-dropdown dropdown-menu dropdown-menu-end" style="left: auto; right: 0;" aria-labelledby="notificationDropdown">
                                <li><div class="title-notifications title-wrap d-flex align-items-center">
                                        <h3 class="title-notifications">Notifications</h3>
                                    </div>
                                </li>
                                <div class="drop-cont">

                            </div>
                            <?php
                            foreach ($bookingInfo as $bookingRecord) {
                                $serviceID = $bookingRecord['serviceID'];
                                $bookingID = $bookingRecord['bookingID'];
                                $serviceData = $service->fetch($serviceID);
                                $bookingData = $booking->show($bookingID);
                                if ($bookingData['bookingID'] == $bookingCustomer['bookingID']) {
                                    if ($serviceData && $bookingData) {
                                        // Calculate the date two days before the booking date
                                        $twoDaysBeforeBooking = date('Y-m-d', strtotime($nextDay . ' +2 days'));

                                        // Check if the current date is within two days before the booking date
                                        if ($twoDaysBeforeBooking == date('Y-m-d', strtotime($bookingData['bookingDate']))) {
                                            echo "<li><a class='dropdown-item' href='#'><strong>" . $bookingRecord['petName'] . "</strong> Has a <strong>" . $serviceData['serviceName'] . "</strong> Appointment on <strong>" . $bookingData['bookingDate'] . "</strong></a></li>";
                                            $notificationCount++;
                                        }
                                        if ($nextDay == date('Y-m-d', strtotime($bookingData['bookingDate']))) {
                                            echo "<li><a class='dropdown-item' href='#'><strong>" . $bookingRecord['petName'] . "</strong> Has a <strong>" . $serviceData['serviceName'] . "</strong> Appointment on <strong>" . $bookingData['bookingDate'] . "</strong></a></li>";
                                            $notificationCount++;
                                        }
                                    } else {
                                        echo "Service data not found for Service ID: " . $serviceID . "<br>";
                                    }
                                }
                            }
                            ?>

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