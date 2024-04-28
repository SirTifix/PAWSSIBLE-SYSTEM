<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Dashboard';
    require_once('./include/vet-head.php');
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

            <div class="dashboard-container"> 

                <div class="dashboard-box py-1 px-3">
                    <p class="my-1">Customer Handled: </p>
                    <div class="d-flex justify-content-between align-items-center">
                      <i class="dashboard-icon fa-solid fa-users m-2" aria-hidden="true"></i>
                      <h1 class="m-3">13</h1>
                    </div>
                </div> 

                <div class="dashboard-box py-1 px-3">
                    <p class="my-1">Upcoming Appointments: </p>
                    <div class="d-flex justify-content-between align-items-center">
                      <i class="dashboard-icon fa-solid  fa-clock  m-2" aria-hidden="true"></i>
                      <h1 class="m-3">4</h1>
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
    </main>
    
</body>
</php>

