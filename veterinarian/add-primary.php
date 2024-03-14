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
                    <h2> Primary Booster </h2>
                  
                  </div>
                

                <div class="row">
                    <div class="col-lx-7  col-md-12">
                         <div class="add-medical">
                          <form action="" method="post">
                            <div class="form-customer-info">

                                <div class="d-flex mt-3 add-med">
                                    <label for="Age" class="form-label fw-bold">Age/Weeks:</label>
                                    <input type="text" class="form-control" id="Age" name="Age" required>
                                  </div>

                              <div class="d-flex mt-3 add-med">
                                <label for="Veterinarian" class="form-label fw-bold">Veterinarian</label>
                                <input type="text" class="form-control" id="Veterinarian" name="Veterinarian" required>
                              </div>
                

                              <div class="d-flex add-med">
                                <label for="Date" class="form-label fw-bold">Vaccine:</label>

                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                      <!-- Table header -->
                                      <thead>
                                        <tr class="font-weight-bold">
                                          <th>Vaccine ID</th>
                                          <th>Vaccine</th>
                                          <th>Dosage</th>
                                          <th>Weeks Interval</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <!-- Table rows -->
                                        <tr>
                                          <td>1</td>
                                          <td>Rabies 1-year</td>
                                          <td>Single dose.</td>
                                          <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Rabies 1-year</td>
                                            <td>Single dose.</td>
                                            <td>-</td>
                                          </tr>
                                          <tr>
                                            <td>1</td>
                                            <td>Rabies 1-year</td>
                                            <td>Single dose.</td>
                                            <td>-</td>
                                          </tr>
                                        
                                      </tbody>
                                    </table>
                                  </div>
                                  
                                  <!-- Pagination -->
                                  <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-center">
                                      <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                      </li>
                                      <li class="page-item active" aria-current="page">
                                        <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                                      </li>
                                      <!-- Next link is initially enabled -->
                                      <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                      </li>
                                      </ul>
                                  </nav>
                                  

                                    <div class="d-flex add-med">
                                        <label for="Date" class="form-label fw-bold">Date:</label>
                                        <input type="Date" class="form-control" id="Date" name="Date" required>
                                      </div>

                                      <div class="d-flex add-med">
                                        <label for="Date" class="form-label fw-bold">Suggested Date:</label>
                                        <input type="Text" class="form-control" id="Date" name="Date" required>
                                      </div>



                  
                             

                            </div>
                        </form>
                         </div>
            
                    </div>

                   

                 <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <a href="primaryseries.php" class="back-btn btn-secondary">Cancel</a>
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