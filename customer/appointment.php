<?php
session_start();

if (!isset($_SESSION['user']) || $_SESSION['user'] != 'customer'){
    header('location: index.php');
}
require_once ('../classes/account.class.php');
require_once ('./tools/functions.php');

if(isset($_SESSION['email2'])) {
  $email = $_SESSION['email2'];

  $customer = new Account(); 
  $customerData = $customer->getCustomerData($email); 

} else {
  echo "Session email not set.";
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Appointment';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="website icon" type="png" href="../customer/assets/img/logo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../customer/assets/css/style.css">
    <link rel="stylesheet" href="../customer/assets/css/customer-profile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php require_once('./include/customer-header.php'); ?>
<div class="Profile container d-flex flex-row">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div class="user-picture position-relative ">
                <input type="file" id="fileInput" style="display: none;" accept="image/*">
                <img src="./assets/img/default-profile-pic.png" alt="Profile Picture" class="profile-pic" id="profilePic">
                <label for="fileInput" class="upload-icon">
                    <i class="fa-solid fa-plus"></i>
                </label>
            </div>
            <span class="text-black fs-5"><?php echo $customerData['firstname']. " " . $customerData['lastname']; ?></span>
        </div>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a onclick="showContent('appointment', this)" class="nav-link text-black active" style="color: black;" aria-current="page">
                    <i style="margin-right: 10px;" class="fa-regular fa-calendar"></i>
                    Appointment
                </a>
            </li>
            <li>
                <a onclick="showContent('history', this)" class="nav-link text-black" style="color: black;">
                    <i style="margin-right: 10px;" class="fa-solid fa-history"></i>
                    History
                </a>
            </li>
        </ul>
    </div>
    <div class="customer-prof-content content"></div>
</div>

<script>
    function showContent(page, link) {
        let content = 'appointment';
        switch (page) {
            case 'appointment':
                content = './include/appointment.php';
                break;
            case 'history':
                content = './include/history.php';
                break;
        }
        fetch(content)
            .then(response => response.text())
            .then(data => {
                document.querySelector('.content').innerHTML = data;
                document.querySelectorAll('.nav-link').forEach(item => {
                    item.classList.remove('active');
                });
                link.classList.add('active');
            })
            .catch(error => console.error('Error:', error));
    }

    document.getElementById('fileInput').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = function() {
                document.getElementById('profilePic').src = reader.result;
            };
            reader.readAsDataURL(file);
        }
    });

    // Automatically display profile page on page load
    window.onload = function() {
        showContent('appointment', document.querySelector('.nav-link.active'));
    };
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/9ea2f828e7.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://kit.fontawesome.com/9ea2f828e7.js" crossorigin="anonymous"></script>
</body>
</html>
