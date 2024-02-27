<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Customer';
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
        <section class="veterinarian-con">
            <div class="veterinarian-head">
              <p>Customer's Information</p>
            </div>
        </section>
      
        <section class="vet-form-con row">
          <div class="head-form d-flex justify-content-between align-items-center col-12">
            <i class="fa-solid fa-user " aria-hidden="true"></i>
            <i class="fa-solid fa-paw" aria-hidden="true"></i>
          </div>
      
        <div class="row">
          <div class="col-lx-7 col-lg-8 col-md-12">
              <div class="create-vet-form-info">
                <form action="" method="post">
                  <div class="form-customer-info">
                    <div class="d-flex mt-3">
                      <label for="id" class="form-label fw-bold">ID:</label>
                      <input type="text" class="form-control" id="id" name="id" required>
                    </div>
      
                    <div class="d-flex">
                      <label for="name" class="form-label fw-bold">Name:</label>
                      <input type="text" class="form-control" id="name" name="name" required>
                    </div>
      
                    <div class="d-flex">
                      <label for="address" class="form-label fw-bold">Address:</label>
                      <input type="text" class="form-control" id="address" name="address" required>
                    </div>
      
                    <div class="d-flex">
                      <label for="email" class="form-label fw-bold">Email:</label>
                      <input type="text" class="form-control" id="email" name="email" required>
                    </div>
      
                    <div class="d-flex">
                      <label for="num" class="form-label fw-bold">Phone Number:</label>
                      <input type="text" class="form-control" id="num" name="num" required>
                    </div>
                  </div>
              </form>
              </div>

          </div>

          <div class="col-lx-5 col-lg-4 col-md-12">
            <div class="create-vet-form-info-pet">
              <div class="d-flex justify-content-between">
                <h3>Pets:</h3>
                <button class="add-pet-btn-info" type="button" data-bs-toggle="modal" data-bs-target="#addpetModal">
                  <i class="fa-solid fa-circle-plus m-1" aria-hidden="true"></i> Add Pet</button>
              </div>
              <form action="" method="post">
                <div class="form-pet-info">
                  <div class="pet-info-box">
                    <div class="mb-3">
                      <div class="d-flex">
                        <label for="petname" class="form-label-pet">Name:</label>
                        <input type="text" class="form-control-pet" id="petname" name="petname" required value="Belgy">    
                      </div>
                      <div class="d-flex">
                        <label for="pettype" class="form-label-pet">Pet Type:</label>
                        <input type="text" class="form-control-pet" id="pettype" name="pettype" required value="Dog">    
                      </div>
                    </div>
                    <a href="">View</a>
                  </div>

                  <div class="pet-info-box">
                    <div class="mb-3">
                      <div class="d-flex">
                        <label for="petname" class="form-label-pet">Name:</label>
                        <input type="text" class="form-control-pet" id="petname" name="petname" required value="Belgy">    
                      </div>
                      <div class="d-flex">
                        <label for="pettype" class="form-label-pet">Pet Type:</label>
                        <input type="text" class="form-control-pet" id="pettype" name="pettype" required value="Dog">    
                      </div>
                    </div>
                    <a href="">View</a>
                  </div>

                  <div class="pet-info-box">
                    <div class="mb-3">
                      <div class="d-flex">
                        <label for="petname" class="form-label-pet">Name:</label>
                        <input type="text" class="form-control-pet" id="petname" name="petname" required value="Belgy">    
                      </div>
                      <div class="d-flex">
                        <label for="pettype" class="form-label-pet">Pet Type:</label>
                        <input type="text" class="form-control-pet" id="pettype" name="pettype" required value="Dog">    
                      </div>
                    </div>
                    <a href="">View</a>
                  </div>
                  
                  
                </div>
              </form>
            </div>
          </div>
        </div>
        </section>

        <section>
          <div class="modal fade" id="addpetModal" tabindex="-1" aria-labelledby="addpetModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                      <div class="modal-header">
                          <div class="d-flex align-items-center w-100">
                              <div class="mt-4 text-center w-100">
                                  <h2 class="modal-title fw-bold" id="addpetModalLabel">Pet Information</h2>
                              </div>
                          </div>
                      </div>
                      <div class="modal-body">
                        <div class="d-flex justify-content-around">
                          <div class="upload-pic-con">
                          <form action="upload.php" method="post" enctype="multipart/form-data">
                              <input type="submit" value="Upload Image" name="submit">
                            </form>
                          </div>
              
                          <form action="" method="post">
                              <div class="form-body">
                                  <div class="d-flex mt-3">
                                    <label for="petname" class="form-label fw-bold">Pet Name:</label>
                                    <input type="text" class="form-control" id="petname" name="petname" required>
                                  </div>
                    
                                  <div class="d-flex">
                                    <label for="state" class="form-label fw-bold">Birth Date:</label>
                                    <input type="text" class="form-control" id="state" name="state" required>
                                  </div>
                    
                                  <div class="d-flex">
                                    <label for="state" class="form-label fw-bold">Pet Age:</label>
                                    <input type="text" class="form-control" id="state" name="state" required>
                                  </div>
                    
                                  <div class="d-flex">
                                    <label for="state" class="form-label fw-bold">Breed:</label>
                                    <input type="text" class="form-control" id="state" name="state" required>
                                  </div>
                    
                                  <div class="d-flex">
                                    <label for="state" class="form-label fw-bold">Pet Type:</label>
                                    <input type="text" class="form-control" id="state" name="state" required>
                                  </div>
                    
                                  <div class="d-flex">
                                    <label for="state" class="form-label fw-bold">Gender:</label>
                                    <input type="text" class="form-control" id="state" name="state" required>
                                  </div>
                    
                                  <div class="d-flex">
                                    <label for="state" class="form-label fw-bold">Weight:</label>
                                    <input type="text" class="form-control" id="state" name="state" required>
                                  </div>
                    
                                  <div class="d-flex">
                                    <label for="state" class="form-label fw-bold">Color:</label>
                                    <input type="text" class="form-control" id="state" name="state" required>
                                  </div>
                                </div>
                          
                        </div>
        
                          <div class="d-flex justify-content-between align-items-center">
                              <div>
                                  <a href="customer-info.php" class="back-btn btn-secondary">Cancel</a>
                              </div>
                              <div>
                                  <button type="submit" class="save-vet-btn btn-secondary" id="addStaffButton">Add</button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </section>
      </main>
      <?php
        require_once('./include/js.php')
    ?>
</body>
</html>