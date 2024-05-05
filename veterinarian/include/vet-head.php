<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="website icon" type="png" href="./assets/img/Logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />  
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="vendor/bootstrap-5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vetstyle.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/appointment.css">
</head>

<body>
    
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

</script>
</body>