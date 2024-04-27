<header class="row m-0 align-items-center fixed-top">
    <div class="logo col-4 align-items-center m-0 row">
        <img src="assets/img/Logo.png" alt="Logo" class="logosec col-6">
        <div class="logo-text col-6">PAWSsible Solutions <br> Veterinary Clinic</div>
    </div>

    <div class="search-container col-4 d-flex justify-content-center">
        <div class="search-wrapper d-flex align-items-center m-0 row">
            <input type="" class="search col-10" placeholder="search.....">
            <i class="search-icon fas fa-search col-2" aria-hidden="true"></i>
        </div>
    </div>

    
    <div class="notification-dropdown col-4 d-flex justify-content-end" id="notificationDropdown">
        <i class="fas fa-bell bell-icon pe-4" onclick="toggleDropdown(event)"></i>
        <span class="notification-badge">5</span>

        <div class="notification-dropdown-content dropdown-menu dropdown-menu-end dropdown-menu-lg-start"
            id="notificationDropdownContent">
            <p class="notification-title">Notifications</p>
            <div class="container-fluid">
                <p class="notification-title">Today</p>
                <div class="notification-dropdown-content-item list-group">
                    <a href="#" class="list-group-item list-group-item-action">New upcoming appointments for Dr. Chylle
                        have been scheduled. <span class="time">- 26 minutes ago</span></a>
                    <a href="#" class="list-group-item list-group-item-action">New upcoming appointments for Dr. Raf
                        have been scheduled.
                        <span class="time"> 15
                            minutes ago</span></a>
                    <a href="#" class="list-group-item list-group-item-action">New upcoming appointments for Dr. Chylle
                        have been scheduled. <span class="time">- 26 minutes ago</span></a>
                </div>
                <div class="notification-divider"></div>
                <p class="notification-title">Earlier</p>

                <div class="notification-dropdown-content-item list-group">
                    <a href="#" class="list-group-item list-group-item-action">New upcoming appointment for
                        <strong>Jerry Santos</strong>
                        for <strong>deworming</strong> today.<span class="time">Yesterday</span></a>
                </div>

                <div class="notification-dropdown-content-item list-group">
                    <a href="#" class="list-group-item list-group-item-action">New upcoming appointment for
                        <strong>Chylle Chile</strong>
                        for <strong>Vaccination</strong> today.<span class="time">Yesterday</span></a>
                </div>


            </div>
        </div>

        <div class="logout-btn">
            <button onclick="confirmLogout()"><i class="logout-icon fas fa-right-from-bracket pe-2"
                    aria-hidden="true"></i></button>
        </div>

    </div>
</header>