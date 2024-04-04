<header>

    <nav class="navbar">
        <div class="logo p-3 d-flex align-items-center">
            <img class="logo-clinic" src="assets/img/logo.png" alt="Logo" class="logosec">

            <div class="logo-text-customer px-3">PAWSsible Solutions <br>
                Veterinary Clinic</div>
        </div>
        <div class="navbar-links">
            <a href="home.php">Home</a>
            <a href="services.php">Services</a>
            <a href="aboutus.php">About Us</a>
            <a href="booking.php">Booking</a>

            <div class="customized-drop-customer btn-group m-3" role="group">
                <div class="btn-group dropstart" role="group">
                    <button class="btn btn-primary" type="button" id="notificationDropdown" data-toggle="dropdown"
                        aria-expanded="false" aria-haspopup="true">
                        <i class="fa-regular fa-bell position-relative">
                            <span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                                style="font-size: 10px">
                                3
                            </span>
                        </i>
                    </button>
                    <ul class="notif-dropdown dropdown-menu dropdown-menu-end" style="left: auto; right: 0;"
                        aria-labelledby="notificationDropdown">

                        <div class="title-notifications title-wrap d-flex align-items-center">
                            <h3 class="title-notifications">Notifications</h3>
                        </div>

                        <div class="drop-cont">

                        </div>
                        <li>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" style="margin:0;" href="#">
                                <div class="text">
                                    <strong>Belgy</strong> Has a <strong> Consultation </strong>Appointment on <strong>
                                        Jan 13,2024 </strong>
                                </div>
                            </a>

                        </li>
                        <li>
                            <a class="dropdown-item" style="margin:0;" href="#">
                                <div class="text">
                                    <strong>Max</strong> Has a <strong> Vaccination </strong>Appointment on <strong>
                                        Jan 13,2024 </strong>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" style="margin:0;" href="#">
                                <div class="text">
                                    <strong>Kebies</strong> Has a <strong> Imputation </strong>Appointment on <strong>
                                        Jan 13,2024 </strong>
                                </div>
                            </a>
                        </li>
                        <div class="dropdown-divider"></div>
                        <li>
                            <a class="dropdown-item text-center" style="margin:0;font-size:90%;font-weight400"
                                href="./appointment.php">View all</a>
                        </li>
                    </ul>
                </div>

                <div class="btn-group" role="group">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="ProfileDropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Account
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="ProfileDropdown"
                        style="left: auto; right: 0;">
                        <a class="dropdown-item" style="margin:0;" href="./customer-profile.php">My Profile</a>
                        <a class="dropdown-item" style="margin:0;" href="./appointment.php">Appointments</a>
                        <a class="dropdown-item" style="margin:0;" href="./logout.php">Logout</a>
                    </div>
                </div>
            </div>

        </div>
    </nav>
</header>