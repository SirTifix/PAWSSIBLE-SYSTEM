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

  
<section class="table-con ">
    <section class="customer-info-icon-vet row  ">
                <div class="cus-head-form col-11 d-flex justify-content-between align-items-center mb-3">
                <div class="col-12 d-flex justify-content-between align-items-center px-3">
                <div class="customer-info-head">
                    <h2>Appointment </h2>
                </div>
                <div class="row col-4">
                <div class="row justify-content-start align-items-center">
            <div class="col-auto my-1">
                <div class="search-con">
                    <input type="text" id="searchInput" class="search-input" placeholder="Search here...">
                </div>
            </div>
    </div> 
            </div>
        </div>


        </section>

        <div class="table-wrapper-vet">  
      <table id ="customer"class="table table table-striped table-hover">
        <thead>
          <tr>
          <th scope="col">Book No.</th>
                <th scope="col">Name</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Status</th>
                
          </tr>
        </thead>
        <tbody>
          <tr>
            <td scope="row">1</td>
            <td>Mark Chi</td>
            <td>Feb 23, 2023</td>
            <td>3:00pm</td>
            <td></td>
            
          </tr>
      
        </tbody>
      </table>
      </div>
</section>
    </section>
    
</body>
</html>

