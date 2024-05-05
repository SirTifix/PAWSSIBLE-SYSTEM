<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Dashboard';
require_once('./include/vet-head.php');
require_once('../classes/veterinarian.class.php');

$vetRecordClass = new Veterinarian;
$vetID = $vetRecordClass->vetID;

$vetCount = $vetRecordClass->countVet($vetID);
?>

<body>
  <?php
  require_once('./include/vet-header.php')
  ?>
  <?php
  require_once('./include/vet-sidepanel.php')
  ?>
  <section class="dashboard-con mb-5 ">
    <div class="box">
      <div class="dashboard-head mb-5">
        <p>Welcome to Dashboard!</p>
      </div>

      <div class="status-vet-con d-flex align-items-center">
        <div class="col-6 text-start">
          <div class="status-border mx-5">Status: Active status</div>
        </div>
        <div class="col-6 text-end">
          <button id="availabilityButton" class="btn btn-success mx-5" data-bs-toggle="modal" data-bs-target="#availabilityModal">Change Status</button>
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
              <button type="button" class="btn btn-success">Available</button>
              <button type="button" class="btn btn-secondary">Unavailable</button>
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
          <tr>
            <th scope="row"></th>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

</body>

</html>