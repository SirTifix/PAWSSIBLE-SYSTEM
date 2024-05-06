<?php
session_start();

if (!isset($_SESSION['user']) || $_SESSION['user'] != 'secretary') {
  header('location: index.php');
}

require_once('../classes/account.class.php');
$secretaryClass = new Account();

$secretaryID = $_SESSION['secretaryID'];
$secretaryData = $secretaryClass->fetchSec($secretaryID); 
?>
<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Dashboard';
require_once ('./include/sec-head.php');
require_once ('../classes/customer.class.php');
require_once ('../classes/pet.class.php');
require_once ('../classes/vaccine.class.php');

$customerRecordClass = new Customer;
$petRecordClass = new Pet;
$vaccineRecordClass = new Vaccine;

$customerCount = $customerRecordClass->countAll();
$petCount = $petRecordClass->countAll();
$vaccineCount = $vaccineRecordClass->countAll();

$recentCustomer = $customerRecordClass->showWeekly();
?>
<body>
    <?php
    require_once ('./include/sec-header.php')
      ?>
    <main>
    <?php
    require_once ('./include/sec-sidepanel.php')
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
                      <h1 class="m-3"><?php echo $customerCount; ?></h1>
                    </div>
                </div> 

                <div class="dashboard-box py-1 px-3">
                    <p class="my-1">Total No. of Pet: </p>
                    <div class="d-flex justify-content-between align-items-center">
                      <i class="dashboard-icon fa-solid fa-paw m-2" aria-hidden="true"></i>
                      <h1 class="m-3"><?php echo $petCount; ?></h1>
                    </div>
                </div> 

                <div class="dashboard-box py-1 px-3">
                    <p class="my-1">Total No. of Vaccination: </p>
                    <div class="d-flex justify-content-between align-items-center">
                      <i class="dashboard-icon fa-solid fa-syringe m-2" aria-hidden="true"></i>
                      <h1 class="m-3"><?php echo $vaccineCount; ?></h1>
                    </div>
                </div> 
                
            </div>
        </div>
    </section>

    <section class="chart-con">
      <div class="chart-container">

        <div class="chart-box row">
          <p class="col-lg-10 m-3">Weekly Customer </p> <button class="calendar col-lg-2"><i
              class="fa-solid fa-calendar " aria-hidden="true"></i> </button>
          <canvas id="weeklyTable"></canvas>
        </div>

        <div class="chart-box row">
          <p class="col-lg-10 m-3">Monthly Customer </p> <button class="calendar col-lg-2"><i
              class="fa-solid fa-calendar " aria-hidden="true"></i> </button>
          <canvas id="monthlyTable"></canvas>
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
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Date</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach ($recentCustomer as $customer):
            ?>
              <tr>
                <th scope="row"><?php echo $customer['customerID']; ?></th>
                <td><?php echo $customer['customerFirstname']; ?></td>
                <td><?php echo $customer['customerLastname']; ?></td>
                <td><?php echo date('F j, Y', strtotime($customer['created_at'])); ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
      new Chart(document.getElementById('weeklyTable'), {
        type: 'bar',
        data: {
          labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
          datasets: [{
            label: 'Example Dataset',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(153, 102, 255, 0.2)',
              'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
              'rgba(255, 99, 132, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)',
              'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
          }]
        },
        options: {
          responsive: true,
          plugins: {
            legend: {
              position: 'top',
            },
            title: {
              display: true,
              text: 'Weekly Customer'
            }
          }
        }
      })

      new Chart(document.getElementById('monthlyTable'), {
        type: 'bar',
        data: {
          labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
          datasets: [{
            label: 'Example Dataset',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(153, 102, 255, 0.2)',
              'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
              'rgba(255, 99, 132, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)',
              'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
          }]
        },
        options: {
          responsive: true,
          plugins: {
            legend: {
              position: 'top',
            },
            title: {
              display: true,
              text: 'Monthly Customer'
            }
          }
        }
      })
    </script>
</body>
</html>