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
        <p class="cust-text">Recent Customers</p>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
      </div>
    </section>
    </main>
    
</body>
</php>

