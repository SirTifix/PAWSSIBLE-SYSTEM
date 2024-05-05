<?php
require_once ('./tools/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Pawssible Solutions Veterinary';

?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php echo $title ?>
  </title>
  <link rel="website icon" type="png" href="./assets/img/logo.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/9ea2f828e7.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
        <div class="container-sm d-flex my-5" style="padding:0; background:#EEE5FF; flex-direction:column; align-items:center; text-align:center; border-radius:10px;">
            <h2 style="width:100%; background:#C1CCF8; padding:1em 0; border-radius:10px 10px 0 0;">Appointment Confirmation</h2>
            <div style="padding:4em 0;">
                <h4>Booking number:</h4>
                <h1><?php echo isset($_GET['bookingID']) ? $_GET['bookingID'] : ''; ?></h1>
            </div>
            <a href="appointment.php" class="btn btn-success btn-lg mb-5">Finish</a>
        </div>
</body>

</html>