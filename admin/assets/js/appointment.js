document.getElementById('appointmentLink').addEventListener('click', function(event) {
    // Remove active class from all links
    document.querySelectorAll('.appointment-btn').forEach(function(link) {
        link.classList.remove('appointment-active');
    });
    // Add active class to clicked link
    this.classList.add('appointment-active');
});

document.getElementById('pendingLink').addEventListener('click', function(event) {
    // Remove active class from all links
    document.querySelectorAll('.appointment-btn').forEach(function(link) {
        link.classList.remove('appointment-active');
    });
    // Add active class to clicked link
    this.classList.add('appointment-active');
});

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

function toggleDropdown(event) {
    var dropdown = document.getElementById("notificationDropdown");
    dropdown.classList.toggle("active");
}

// Close dropdown when clicked outside
document.addEventListener("click", function (event) {
    var dropdown = document.getElementById("notificationDropdown");
    if (!dropdown.contains(event.target)) {
        dropdown.classList.remove("active");
    }
});
