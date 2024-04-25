<!DOCTYPE html>
<html lang="en">
<head>
<?php
    $title = 'Appointment';
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
      <div class="head-form col-12 d-flex justify-content-between align-items-center mb-3">
          <div class="icon-circle">
              <i class="icon fa fa-solid  fa-user mr-2 mt-1" style="color: white;"></i> 
          </div>
          <div class=" col-12 d-flex justify-content-between align-items-center px-3">
            <div class="customer-info-head">
                <h2>Appointment</h2>
            </div>
        </div>
      </div>
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
    </section>
</body>
</html>

