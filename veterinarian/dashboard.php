<?php
session_start();

if (!isset($_SESSION['user']) || $_SESSION['user'] != 'veterinarian') {
  header('location: index.php');
}

require_once ('../classes/account.class.php');
require_once ('../classes/booking.class.php');
require_once ('../classes/veterinarian.class.php');
$vetClass = new Account();
$vetMethods = new Veterinarian();
$bookingClass = new Booking();

$vetID = $_SESSION['vetID'];
$vetData = $vetClass->fetchVet($vetID);
$vetPets = $vetMethods->vetAppointments($vetID);
?>
<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Dashboard';
require_once ('./include/vet-head.php');
require_once ('../classes/veterinarian.class.php');

$vetRecordClass = new Veterinarian;
$vetID = $vetRecordClass->vetID;
$vetCount = $vetRecordClass->countVet($vetID);

$userInfo = $vetRecordClass->fetch($_SESSION['vetID']);
$status = $userInfo['vetStatus']
  ?>

<body>
  <?php
  require_once ('./include/vet-header.php')
    ?>
  <?php
  require_once ('./include/vet-sidepanel.php')
    ?>
  <section class="dashboard-con mb-5 ">
    <div class="box">
      <div class="dashboard-head mb-5">
        <p>Welcome to Dashboard!</p>
      </div>

      <div class="status-vet-con d-flex align-items-center">
        <div class="col-6 text-start">
          <div class="status-border mx-5" style="background: <?= $status === 'Unavailable' ? '#ff0000' : '#00a500' ?>;">Status: <?= $status ?></div>
        </div>
        <div class="col-6 text-end">
          <button id="availabilityButton" class="btn btn-primary mx-5" data-bs-toggle="modal" data-bs-target="#availabilityModal">Change Status</button>
        </div>
      </div>

      <!-- Modal Section -->
      <div class="modal fade" id="availabilityModal" tabindex="-1" role="dialog" aria-labelledby="availabilityModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content" style="max-width: 400px;">
            <button type="button" data-bs-dismiss="modal" aria-label="Close" style="display:flex; justify-content: flex-end; font-size: 1.5em;">
              <i class="fa-solid fa-circle-xmark"></i></button>
            <h5 class="modal-title text-center" id="availabilityModalLabel">Change Status</h5>
            <div class="modal-body d-flex align-items-center justify-content-between">
              <button type="button" class="btn btn-success" onclick="updateStatus(<?php echo $_SESSION['vetID']; ?>, 'Available')">Available</button>
              <button type="button" class="btn btn-secondary" onclick="updateStatus(<?php echo $_SESSION['vetID']; ?>, 'Unavailable')">Unavailable</button>
            </div>
          </div>
        </div>
      </div>

      <div class="dashboard-container">
        <div class="dashboard-box py-1 px-3">
          <p class="my-1">Customer Handled: </p>
          <div class="d-flex justify-content-between align-items-center">
            <i class="dashboard-icon fa-solid fa-users m-2" aria-hidden="true"></i>
            <h1 class="m-3"><?php echo $vetCount; ?></h1>
          </div>
        </div>

        <div class="dashboard-box py-1 px-3">
          <p class="my-1">Upcoming Appointments: </p>
          <div class="d-flex justify-content-between align-items-center">
            <i class="dashboard-icon fa-solid  fa-clock  m-2" aria-hidden="true"></i>
            <h1 class="m-3">0</h1>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="customer-table-con">
    <div class="cust-table-wrapper">
      <p class="cust-text">Recent Appointments</p>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Book No.</th>
            <th scope="col">Name</th>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($vetPets as $pets):
          $bookingID = $pets['bookingID'];
          $appointments = $bookingClass->show($bookingID);
          ?>
            <tr>
              <td><?= $appointments['bookingID'] ?></td>
              <td><?= $appointments['firstName'] . " " . $appointments['lastName'] ?></td>
              <td><?= $appointments['bookingDate'] ?></td>
              <td><?= $appointments['bookingTime'] ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
  <script>
    function updateStatus(vetID, vetStatus) {
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            alert('Status: ' + vetStatus);
                            window.location.reload();
                        } else {
                            alert('Failed to update status.');
                        }
                    }
                };
                xhr.open('POST', 'update-status.php', true);
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                xhr.send('vetID=' + vetID + '&vetStatus=' + encodeURIComponent(vetStatus));
            }
  </script>

</body>

</html>