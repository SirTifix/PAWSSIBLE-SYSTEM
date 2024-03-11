<!DOCTYPE html>
<html lang="en">
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



  <section class="customer-title ">
 
    <div class="customer-info-head">
        <h2>Medical History</h2>
    </div>

  </section>
  <div class="crud-btn col-11 justify-content-end">
    <div class="add-annual">
    <a href="add-primary.php" class="crud-text"><i class="fa-solid fa-circle-plus m-1 ml-2" aria-hidden="true"></i>Add</a>
    </div>
  </div>
      
      <div class="container">
        <div class="pet-information ">
          <div class="row justify-content-center">
            <div class="title-vaccine">
                  <button class="icon-bars">
                      <a href="deworming.php">
                          <span class="icon fa fa-caret-left" style="color: rgb(255, 251, 251);"></span> 
                      </a>
                  </button>
                  <h2>Primary Series</h2>
                  <button class="icon-bars">
                      <a href="annual.php">
                          <span class="icon fa fa-caret-right" style="color: rgb(255, 251, 251);"></span> 
                      </a>
                  </button>
              </div>
              
                  <div class="row font-weight-bold py-4">
                    <div class="col">Age(weeks)</div>
                      <div class="col">Weight</div>
                      <div class="col">Date Given</div>
                      <div class="col">Vaccine</div>
                      <div class="col">Next Date</div>
                      <div class="col">Veterinarian</div>
                      <div class="col">Action</div>
                  </div>

                  <div class="row py-3 row-divider">
                    <div class="col">6</div>
                    <div class="col">12lbs</div>
                    <div class="col">12/11/2023</div>
                    <div class="col">Distemper, Hepatitis, Parvovirus, Parainfluenza (DHPP)</div>
                    <div class="col">January 8, 2024</div>
                    <div class="col">Dr.Green</div>
                    <div class="col crud-btn">
                      <a href="edit-primary.php" class="crud-icon-update"><i class="fa-solid fa-pen-to-square m-1" aria-hidden="true"></i></a>
                  </div>
                      
                  </div>

                 <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <a href="medical-history.html" class="back-btn btn-secondary">Cancel</a>
                  </div>
                <div>
                  <button type="submit" class="create-vet-btn btn-secondary" id="addStaffButton">Save</button>
                </div>
                </div>

                 
                
  
          </div>
      </div>
    </div>
            

    <?php
        require_once('./include/js.php')
    ?>
<script src="vendor/script.js"></script>
</body>
</html>