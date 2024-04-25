<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Customer';
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
              <h2>Customer Information</h2>
          </div>
      </div>
    </div>    
  </section>

  <div class="customer-information">
    <div class="row">
        <div class="cus-info col-md-5 ">
              <div class="form-group ">     
                <label for="id" class="form-label">ID:</label>     
                <input type="text" class="form-control" id="id" name="id" required>      
              </div>
              <div class="form-group ">
                <label for="Name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="Name" name="Name" required>
              </div>
              <div class="form-group">
                <label for="Address" class="form-label">Address:</label>
                <input type="text" class="form-control" id="Address" name="Address" required>
              </div>
              <div class="form-group">
                <label for="Email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="Email" name="Email" required>
              </div>
              <div class="form-group mb-3">
                <label for="PhoneNumber" class="form-label ">PhoneNumber:</label>
                <input type="text" class="form-control" id="PhoneNumber" name="PhoneNumber" required>
              </div>
              <div>
                <a href="customer-details.php" class="cus-btn btn-secondary  px-5 my-5">View</a>
              </div>
      
        </div>
        <div class="cus-info col-md-5 " style="overflow-y: auto;">
            <div class="pet-profile" >
                <p> Name: Belgy</p>
                <p> Pet Type: Dog</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <a href="pet_information.php" class="cus-btn btn-secondary">View</a>
                    </div>
                </div>
            </div>
            <div class="pet-profile">
                <p> Name: Belgy</p>
                <p> Pet Type: Dog</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <a href="pet_information.php" class="cus-btn btn-secondary">View</a>
                    </div>
                </div>
            </div>
            <div class="pet-profile">
                <p> Name: Belgy</p>
                <p> Pet Type: Dog</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <a href="pet_information.php" class="cus-btn btn-secondary">View</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

</body>
</php>