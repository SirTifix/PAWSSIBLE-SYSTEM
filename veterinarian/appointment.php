<!DOCTYPE html>
<html lang="en">
<head>
<?php
    
    require_once('./include/vet-head.php');
?>

<body>
  <?php
        require_once('./include/vet-header.php')
    ?>
   <?php
        require_once('./include/vet-sidepanel.php')
    ?>
    <section class="customer-info-icon row  ">
      <div class="head-form col-12 d-flex justify-content-between align-items-center">
          <div class="icon-circle">
              <i class="icon fa fa-solid  fa-user mr-2 mt-1" style="color: white;"></i> 
          </div>
          <div class=" col-12 d-flex justify-content-between align-items-center px-3">
            <div class="customer-info-head">
                <h2>Appointment</h2>
            </div>
        </div>
      </div>    
    
    <div class="app-container app-center">
      <div class="row justify-content-center ">
        <div class="app-con col-md-7 ">
      
            <div class="row font-weight-bold py-4">
            <div class="col">Book No.</div>
              <div class="col">Name</div>
              <div class="col">Date</div>
              <div class="col">Time</div>
            </div>
            <div class="row py-3 row-divider">
              <div class="col">01</div>
              <div class="col">John Doe</div>
              <div class="col">30</div>
              <div class="col">New York</div>
            </div>
            <div class="row py-3">
            <div class="col">02</div>
              <div class="col">Jane Smith</div>
              <div class="col">25</div>
              <div class="col">Los Angeles</div>
            </div>
            <div class="row py-3">
                <div class="col">03</div>
                <div class="col">Michael Johnson</div>
              <div class="col">40</div>
              <div class="col">Chicago</div>
            </div>
          </div>
        </div>
      </div>
    </section>
</body>
</html>

