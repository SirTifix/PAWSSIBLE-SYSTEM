<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Secretary';
require_once('./include/admin-head.php');
require_once('../classes/secretary.class.php');

$secretaryClass = new Secretary();

if(isset($_GET['secretaryID'])) {
    $secretaryID = $_GET['secretaryID'];
    $secretaryData = $secretaryClass->fetch($secretaryID); 
    $currentDateTime = date('Y-m-d H:i:s');

    if($secretaryData) {
        $secretaryFirstname = $secretaryData['secretaryFirstname'];
        $secretaryMiddlename = $secretaryData['secretaryMiddlename'];
        $secretaryLastname = $secretaryData['secretaryLastname'];
        $secretaryEmail = $secretaryData['secretaryEmail'];
        $secretaryUsername = $secretaryData['secretaryUsername'];
        $secretaryPhone = $secretaryData['secretaryPhone'];

        if(isset($_POST['submit'])) {
            $secretaryFirstname = $_POST['secretaryFirstname'];
            $secretaryMiddlename = $_POST['secretaryMiddlename'];
            $secretaryLastname = $_POST['secretaryLastname'];
            $secretaryPhoneNumber = $_POST['secretaryPhone'];
            $secretaryEmail = $_POST['secretaryEmail'];
            $secretaryUsername = $_POST['secretaryUsername'];
            $secretaryPassword = $_POST['secretaryPassword'];
            $hashedPassword = password_hash($secretaryPassword, PASSWORD_DEFAULT);
            $created_at = $currentDateTime;
            $secretaryRePassword = $_POST['secretaryRePassword'];

            if($secretaryPassword !== $secretaryRePassword) {
                echo "Passwords do not match.";
            } else {
                $secretaryClass->secretaryFirstname = $secretaryFirstname;
                $secretaryClass->secretaryMiddlename = $secretaryMiddlename;
                $secretaryClass->secretaryLastname = $secretaryLastname;
                $secretaryClass->secretaryPhone = $secretaryPhoneNumber;
                $secretaryClass->secretaryEmail = $secretaryEmail;
                $secretaryClass->secretaryUsername = $secretaryUsername;
                $secretaryClass->secretaryPassword = $hashedPassword;
                $secretaryClass->secretaryID = $secretaryID;

                $result = $secretaryClass->update();

                if($result) {
                    echo "Secretary data updated successfully.";
                    header("Location: secretary.php");
                } else {
                    echo "Failed to update secretary data.";
                }
            }
        }
    } else {
        echo "Error: Secretary data not found.";
        exit();
    }
} else {
    echo "Error: secretaryID not provided.";
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
          <p>Update Secretary Account</p>
        </div>
    </section>

    <section class="vet-form-con row">
      <div class="head-form col-12 d-flex justify-content-between align-items-center">
        <i class="fa-solid fa-user " aria-hidden="true"></i>
        <i class="fa-solid fa-paw" aria-hidden="true"></i>
      </div>

      <div class="create-vet-form col-12">
        <div class="vet-head-form">
          <p>Secretary Account</p>
        </div>
        <form action="" method="post">
          <div class="forms-body row d-flex justify-content-center">
              <div class="col-6">
                  <div class="ms-5">
                      <div class="mt-3">
                          <label for="secretaryFirstname" class="form-label">First Name</label>
                          <input type="text" class="form-control" id="secretaryFirstname" name="secretaryFirstname" required value="<?php echo $secretaryData['secretaryFirstname']; ?>">
                      </div>
                      <div>
                          <label for="secretaryMiddlename" class="form-label">Middle Name (Optional)</label>
                          <input type="text" class="form-control" id="secretaryMiddlename" name="secretaryMiddlename" value="<?php echo $secretaryData['secretaryMiddlename']; ?>">
                      </div>
                      <div>
                          <label for="secretaryLastname" class="form-label">Last Name</label>
                          <input type="text" class="form-control" id="secretaryLastname" name="secretaryLastname" required value="<?php echo $secretaryData['secretaryLastname']; ?>">
                      </div>
                      <div>
                          <label for="secretaryPhone" class="form-label">Phone Number</label>
                          <input type="text" class="form-control" id="secretaryPhone" name="secretaryPhone" required value="<?php echo $secretaryData['secretaryPhone']; ?>">
                      </div>
                  </div>
              </div>
              <div class="col-6">
                  <div class="ms-5">
                      <div class="mt-3">
                          <label for="secretaryEmail" class="form-label">Email Address</label>
                          <input type="text" class="form-control" id="secretaryEmail" name="secretaryEmail" required value="<?php echo $secretaryData['secretaryEmail']; ?>">
                      </div>
                      <div>
                          <label for="secretaryUsername" class="form-label">Username</label>
                          <input type="text" class="form-control" id="secretaryUsername" name="secretaryUsername" required value="<?php echo $secretaryData['secretaryUsername']; ?>">
                      </div>
                      <div>
                          <label for="secretaryPassword" class="form-label">Password</label>
                          <div class="d-flex align-items-center">
                              <input type="password" class="form-control" id="secretaryPassword" name="secretaryPassword" required>
                          </div>
                      </div>
                      <div>
                          <label for="secretaryRePassword" class="form-label">Re-enter Password</label>
                          <div class="d-flex align-items-center">
                              <input type="password" class="form-control" id="secretaryRePassword" name="secretaryRePassword" required>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="d-flex justify-content-between align-items-center mt-3">
              <div>
                  <a href="secretary.php" class="back-btn btn-secondary">Cancel</a>
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
