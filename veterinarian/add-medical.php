<!DOCTYPE html>
<html lang="en">
<?php
        require_once('./include/js.php')
    ?>
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

      
      <div class="container">
        <div class="pet-information ">
          <div class="row justify-content-center">
                  <div class="title-medical">
                    <h2> Medical Record </h2>
                  
                  </div>
                

                <div class="row">
                    <div class="col-lx-7 col-lg-6 col-md-6">
                         <div class="add-medical">
                          <form action="" method="post">
                            <div class="form-customer-info">
                              <div class="d-flex mt-3 add-med">
                                <label for="age" class="form-label fw-bold">Age(weeks)</label>
                                <input type="text" class="form-control" id="id" name="id" required>
                              </div>
                
                              <div class="d-flex add-med">
                                <label for="Date" class="form-label fw-bold">Date:</label>
                                <input type="Date" class="form-control" id="Date" name="Date" required>
                              </div>
                
                              <div class="d-flex add-med my-5">
                                <label for="History" class="form-label fw-bold my-5">History:</label>
                                <input type="text" class="form-control" id="History" name="History" required>
                              </div>
              
                            </div>
                        </form>
                         </div>
            
                    </div>

                    <div class="col-lx-7 col-lg-6 col-md-6">
                      <div class="add-medical">
                       <form action="" method="post">
                         <div class="form-customer-info">
              
                           <div class="d-flex add-med">
                             <label for="PhysicalExam" class="form-label fw-bold">Physical Examination:</label>
                             <input type="text" class="form-control" id="email" name="PhysicalExam" required>
                           </div>
             
                           <div class="d-flex add-med">
                             <label for="Veterinarian" class="form-label fw-bold">Veterinarian:</label>
                             <input type="text" class="form-control" id="Veterinarian" name="Veterinarian" required>
                           </div>

                           <div class="d-flex add-med">
                             <label for="Diagnosis" class="form-label fw-bold">Diagnosis/ Treatment Plan:</label>
                             <input type="text" class="form-control" id="Diagnosis" name="Diagnosis" required>
                           </div>
                         </div>
                     </form>
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