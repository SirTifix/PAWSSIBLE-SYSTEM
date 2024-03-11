<header class="row m-0 align-items-center fixed-top">
    <div class="logo col-4 align-items-center m-0 row">
        <img src="assets/img/Logo.png" alt="Logo" class="logosec col-6">
        <div class="logo-text col-6">PAWSsible Solutions <br> Veterinary Clinic</div>
    </div>

    <div class="search-container col-4 d-flex justify-content-center">
        <div class="search-wrapper d-flex align-items-center m-0 row">
            <input type="text" class="search col-10" placeholder="search.....">
            <i class="search-icon fas fa-search col-2" aria-hidden="true"></i>
        </div>
    </div>

    <div class="bell-logout-con col-4 d-flex justify-content-end">
        <div class="bell-btn">
            <span class="notification-count">0</span>
            <button><i class="bell-icon fa-solid fa-bell pe-4" aria-hidden="true"></i></button>
        </div>
        <div class="logout-btn">
            <button onclick="confirmLogout()"><i class="logout-icon fas fa-right-from-bracket pe-2" aria-hidden="true"></i></button>
        </div>
    </div>
</header>
<script>
    function confirmLogout() {
        // Display a confirmation dialog
        var confirmation = confirm("Are you sure you want to logout?");

        // If user confirms, redirect to index.php
        if (confirmation) {
            window.location.href = "index.php";
        }
    }

    function updateNotificationCount() {
        // Fetch data from server/database to determine the count
        // For demonstration, let's assume count is retrieved from server-side script
        var notificationCount = 5; // Replace with actual count from database

        // Update the notification count displayed
        var notificationCountElement = document.querySelector('.notification-count');
        notificationCountElement.textContent = notificationCount;
    }

    // Call the function to update notification count on page load
    updateNotificationCount();
</script>