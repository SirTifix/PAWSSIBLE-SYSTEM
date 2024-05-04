<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Veterinarian';
require_once('./include/admin-head.php');
require_once('../classes/veterinarian.class.php');

$veterinarianClass = new Veterinarian();

if(isset($_GET['vetID'])) {
    $vetID = $_GET['vetID'];
    $vetData = $veterinarianClass->fetch($vetID); 
    $currentDateTime = date('Y-m-d H:i:s');

    if($vetData) {
        $vetFirstname = $vetData['vetFirstname'];
        $vetMiddlename = $vetData['vetMiddlename'];
        $vetLastname = $vetData['vetLastname'];
        $vetEmail = $vetData['vetEmail'];
        $vetUsername = $vetData['vetUsername'];
        $vetPhone = $vetData['vetPhone'];

        if(isset($_POST['submit'])) {
            $vetFirstname = $_POST['vetFirstname'];
            $vetMiddlename = $_POST['vetMiddlename'];
            $vetLastname = $_POST['vetLastname'];
            $vetPhoneNumber = $_POST['vetPhone'];
            $vetEmail = $_POST['vetEmail'];
            $vetUsername = $_POST['vetUsername'];
            $vetPassword = $_POST['vetPassword'];
            $created_at = $currentDateTime;
            $vetRePassword = $_POST['vetRePassword'];

            if($vetPassword !== $vetRePassword) {
                echo "Passwords do not match.";
            } else {
                $veterinarianClass->vetFirstname = $vetFirstname;
                $veterinarianClass->vetMiddlename = $vetMiddlename;
                $veterinarianClass->vetLastname = $vetLastname;
                $veterinarianClass->vetPhone = $vetPhoneNumber;
                $veterinarianClass->vetEmail = $vetEmail;
                $veterinarianClass->vetUsername = $vetUsername;
                $veterinarianClass->vetPassword = $vetPassword;
                $veterinarianClass->vetID = $vetID;

                $result = $veterinarianClass->update();

                if($result) {
                    echo "Veterinarian data updated successfully.";
                    header("Location: veterinarians.php");
                } else {
                    echo "Failed to update veterinarian data.";
                }
            }
        }
    } else {
        echo "Error: Veterinarian data not found.";
        exit();
    }
} else {
    echo "Error: vetID not provided.";
    exit();
}
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
          <p>Update Veterinarian Account</p>
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
          <div class="forms-body row d-flex justify-content-center">
              <div class="col-6">
                  <div class="ms-5">
                      <div class="mt-3">
                          <label for="vetFirstname" class="form-label">First Name</label>
                          <input type="text" class="form-control" id="vetFirstname" name="vetFirstname" required value="<?php echo $vetData['vetFirstname']; ?>">
                      </div>
                      <div>
                          <label for="vetMiddlename" class="form-label">Middle Name (Optional)</label>
                          <input type="text" class="form-control" id="vetMiddlename" name="vetMiddlename" value="<?php echo $vetData['vetMiddlename']; ?>">
                      </div>
                      <div>
                          <label for="vetLastname" class="form-label">Last Name</label>
                          <input type="text" class="form-control" id="vetLastname" name="vetLastname" required value="<?php echo $vetData['vetLastname']; ?>">
                      </div>
                      <div>
                          <label for="vetPhone" class="form-label">Phone Number</label>
                          <input type="text" class="form-control" id="vetPhone" name="vetPhone" required value="<?php echo $vetData['vetPhone']; ?>">
                      </div>
                  </div>
              </div>
              <div class="col-6">
                  <div class="ms-5">
                      <div class="mt-3">
                          <label for="vetEmail" class="form-label">Email Address</label>
                          <input type="text" class="form-control" id="vetEmail" name="vetEmail" required value="<?php echo $vetData['vetEmail']; ?>">
                      </div>
                      <div>
                          <label for="vetUsername" class="form-label">Username</label>
                          <input type="text" class="form-control" id="vetUsername" name="vetUsername" required value="<?php echo $vetData['vetUsername']; ?>">
                      </div>
                      <div>
                          <label for="vetPassword" class="form-label">Password</label>
                          <div class="d-flex align-items-center">
                              <input type="password" class="form-control" id="vetPassword" name="vetPassword" required>
                              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password pt-3"></span>
                          </div>
                      </div>
                      <div>
                          <label for="vetRePassword" class="form-label">Re-enter Password</label>
                          <div class="d-flex align-items-center">
                              <input type="password" class="form-control" id="vetRePassword" name="vetRePassword" required>
                              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password pt-3"></span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="d-flex justify-content-between align-items-center mt-3">
              <div>
                  <a href="veterinarians.php" class="back-btn btn-secondary">Cancel</a>
              </div>
              <div>
                  <button type="submit" name="submit" class="create-vet-btn btn-secondary" id="addStaffButton">Save</button>
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
