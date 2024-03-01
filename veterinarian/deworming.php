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
    <a href="add-deworming.php" class="crud-text"><i class="fa-solid fa-circle-plus m-1 ml-2" aria-hidden="true"></i>Add</a>
    </div>
  </div>
      
      <div class="container">
        <div class="pet-information ">
          <div class="row justify-content-center">
            <div class="title-vaccine">
              
                  <button class="icon-bars">
                      <a href="annual.php">
                          <span class="icon fa fa-caret-left" style="color: rgb(255, 251, 251);"></span> 
                      </a>
                  </button>
                  <h2>Deworming/Heatworm</h2>
                  <button class="icon-bars">
                      <a href="primaryseries.php">
                          <span class="icon fa fa-caret-right" style="color: rgb(255, 251, 251);"></span> 
                      </a>
                  </button>
              </div>
              
                  <div class="row font-weight-bold py-4">
                    <div class="col">Date</div>
                      <div class="col">Medicine Used</div>
                      <div class="col">Dosage</div>
                      <div class="col">Next Date</div>
                      <div class="col">Veterinarian</div>
                      <div class="col">Action</div>
                  </div>

                  <div class="row py-3 row-divider">
                    <div class="col">12lbs</div>
                    <div class="col">12/11/2023</div>
                    <div class="col">Distemper, Hepatitis, Parvovirus, Parainfluenza (DHPP)</div>
                    <div class="col">January 8, 2024</div>
                    <div class="col">Dr.Green</div>
                    <div class="col crud-btn">
                      <a href="edit-deworming.php" class="crud-icon-update"><i class="fa-solid fa-pen-to-square m-1" aria-hidden="true"></i></a>
                  </div>
                      
                  </div>

                 <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <a href="medical-history.php" class="back-btn btn-secondary">Cancel</a>
                  </div>
                <div>
                  <button type="submit" class="create-vet-btn btn-secondary" id="addStaffButton">Save</button>
                </div>
                </div>

                 
                
  
          </div>
      </div>
    </div>
            

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="vendor/script.js"></script>
</body>
</php>