<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Veterinarian';
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
          <p>Create Veterinarian Account</p>
        </div>
    </section>

    <section class="vet-form-con row">
      <div class="head-form col-12 d-flex justify-content-between align-items-center">
        <i class="fa-solid fa-user " aria-hidden="true"></i>
        <i class="fa-solid fa-paw" aria-hidden="true"></i>
      </div>

      <div class="create-vet-form col-12">
        <div class="vet-head-form">
          <p>Veterinarian Account</p>
        </div>
        <form action="" method="post">
            <div class="forms-body row justify-content-center">

            <div class="col-6">
            <div class="ms-5">
            <div class="mt-3">
                <label for="vetFirstname" class="forms-label">Firstname</label>
                <input type="text" class="form-control" id="vetFirstname" name="vetFirstname" required>
              </div>
              
              <div>
                <label for="vetLastname	" class="forms-label">Lastname</label>
                <input type="text" class="form-control" id="vetLastname	" name="vetLastname	" required>
              </div>

              <div>
                <label for="vetPhone" class="forms-label">Phone Number</label>
                <input type="text" class="form-control" id="vetPhone" name="vetPhone" required>
              </div>
            </div>
            </div>

             <div class="col-6">
             <div class="ms-5">
             <div class="mt-3">
                <label for="vetEmail" class="forms-label">Email Address</label>
                <input type="text" class="form-control" id="vetEmail" name="vetEmail" required>
              </div>
      
              <div>
                <label for="vetUsername" class="forms-label">Username</label>
                <input type="text" class="form-control" id="vetUsername" name="vetUsername" required>
              </div>
      
              <div>
                <label for="vetPassword" class="forms-label">Password</label>
                <div class="d-flex align-items-center ">
                  <input type="password" class="form-control" id="vetPassword" name="vetPassword" required>
                  <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password pt-3"></span>
              </div>            
              </div>
             </div>
             </div>

            </div>

            <div class="d-flex justify-content-between align-items-center">
              <div>
                <a href="veterinarians.php" class="back-btn btn-secondary">Cancel</a>
              </div>
            <div>
              <button type="submit" class="create-vet-btn btn-secondary" id="addStaffButton">Create Account</button>
            </div>
            </div>
          
        </form>
      </div>
    </section>
  </main>
  <?php
    require_once('./include/js.php')
  ?>
</body>
</html>