<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Dashboard';
    require_once('./include/admin-head.php');
?>
<body>
    <?php
        require_once('./include/admin-header.php')
    ?>
    <main>
    <?php
        require_once('./include/admin-sidepanel.php')
    ?>
    <section class="dashboard-con mb-5">
        <div class="box">
            <div class="dashboard-head mb-5">
              <p>Welcome to Dashboard!</p>
            </div>

            <div class="dashboard-container"> 

                <div class="dashboard-box py-1 px-3">
                    <p class="my-1">Total No. of Customer: </p>
                    <div class="d-flex justify-content-between align-items-center">
                      <i class="dashboard-icon fa-solid fa-users m-2" aria-hidden="true"></i>
                      <h1 class="m-3">13</h1>
                    </div>
                </div> 

                <div class="dashboard-box py-1 px-3">
                    <p class="my-1">Total No. of Pet: </p>
                    <div class="d-flex justify-content-between align-items-center">
                      <i class="dashboard-icon fa-solid fa-paw m-2" aria-hidden="true"></i>
                      <h1 class="m-3">4</h1>
                    </div>
                </div> 

                <div class="dashboard-box py-1 px-3">
                    <p class="my-1">Total No. of Vaccination: </p>
                    <div class="d-flex justify-content-between align-items-center">
                      <i class="dashboard-icon fa-solid fa-syringe m-2" aria-hidden="true"></i>
                      <h1 class="m-3">22</h1>
                    </div>
                </div> 
                
            </div>
        </div>
    </section>

    <section class="chart-con">
      <div class="chart-container">

        <div class="chart-box row">
          <p class="col-lg-10 m-3">Weekly Customer </p> <button class="calendar col-lg-2"><i class="fa-solid fa-calendar " aria-hidden="true"></i> </button>
        </div>

        <div class="chart-box row">
          <p class="col-lg-10 m-3">Monthly Customer </p> <button class="calendar col-lg-2"><i class="fa-solid fa-calendar " aria-hidden="true"></i> </button>
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
        </tbody>
      </table>
      </div>
    </section>
    </main>
</body>
</html>