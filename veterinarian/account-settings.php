<?php
  session_start();

  if (!isset($_SESSION['user']) || $_SESSION['user'] != 'veterinarian') {
    header('location: index.php');
  }
  
  require_once('../classes/account.class.php');
  require_once('../classes/veterinarian.class.php');
  $vetClass = new Account();
  $vetUpdate = new Veterinarian();

    if(isset($_SESSION['vetID'])) {
        $vetID = $_SESSION['vetID'];
        $vetData = $vetClass->fetchVet($vetID); 

        if($vetData) {
            $vetUsername = $vetData['vetUsername'];
            $vetEmail = $vetData['vetEmail'];

            if(isset($_POST['submit'])) {
                $vetUsername = $_POST['vetUsername'];
                $vetEmail = $_POST['vetEmail'];
                $vetPassword = $_POST['vetPassword'];
                $hashedPassword = password_hash($vetPassword, PASSWORD_DEFAULT);
                $vetRePassword = $_POST['vetRePassword'];

                if($vetPassword !== $vetRePassword) {
                    echo "Passwords do not match.";
                } else {
                    $vetUpdate->vetUsername = $vetUsername;
                    $vetUpdate->vetEmail = $vetEmail;
                    $vetUpdate->vetPassword = $hashedPassword;
                    $vetUpdate->vetID = $vetID;

                    $result = $vetUpdate->updateCreds();

                    if($result) {
                        echo "vet data updated successfully.";
                        header("Location: dashboard.php");
                    } else {
                        echo "Failed to update vet data.";
                    }
                }
            }
        } else {
            echo "Error: vet data not found.";
            exit();
        }
    } else {
        echo "Error: vetID not provided.";
        exit();
    } 
?>
<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Settings';
    require_once('./include/vet-head.php');
?>

<body>
  <?php
        require_once('./include/vet-header.php')
    ?>
   <?php
        require_once('./include/vet-sidepanel.php')
    ?>
        <section class="veterinarian-con">
            <div class="veterinarian-head">
                <p>Account Settings</p>
            </div>
        </section>

        <section class="vet-form-con row">
            <div class="head-form col-12 d-flex justify-content-between align-items-center">
                <i class="fa-solid fa-user " aria-hidden="true"></i>
                <i class="fa-solid fa-paw" aria-hidden="true"></i>
            </div>
            <div class="account-settings-con">
                <form action="" method="post" class="row mt-4">
                    <div class="old-account-con col-lg-6 col-md-6">
                        <div class="d-flex mt-3 align-items-center ">
                            <div class="my-1 align-items-center ps-5">
                            <label for="emailadd" class="form-label-setting">Email Address</label>
                            <input type="text" class="form-control" id="emailadd" name="emailadd" value="<?=$vetEmail?>" readonly>
                            </div>
                        </div>  
                        <div class="d-flex mt-3 align-items-center">
                            <div class="my-1 align-items-center ps-5">
                                <label for="username" class="form-label-setting">Username </label>
                                <input type="text" class="form-control" id="username" name="username" value="<?=$vetUsername?>" readonly>
                            </div>
                        </div> 
                    </div> 
                    <div class="new-account-con col-lg-6 col-md-6">
                        <div class="d-flex mt-3 align-items-center col-12 ">
                            <div class="my-1 align-items-center ps-5">
                            <label for="vetEmail" class="form-label-setting">Change Email Address</label>
                            <input type="text" class="form-control" id="vetEmail" name="vetEmail" required>
                            </div>
                        </div>  
                        <div class="d-flex mt-3 align-items-center col-12 ">
                            <div class="my-1 align-items-center ps-5">
                                <label for="vetUsername" class="form-label-setting">Change Username </label>
                                <input type="text" class="form-control" id="vetUsername" name="vetUsername" required>
                            </div>
                        </div> 
                        <div class="d-flex mt-3 align-items-center col-12 ">
                            <div class="my-1 align-items-center ps-5">
                                <label for="vetPassword" class="form-label-setting">New Password </label>
                                <input type="password" class="form-control" id="vetPassword" name="vetPassword" required>
                            </div>
                        </div> 
                        <div class="d-flex mt-3 align-items-center col-12 ">
                            <div class="my-1 align-items-center ps-5">
                                <label for="vetRePassword" class="form-label-setting">Confirm Password </label>
                                <input type="password" class="form-control" id="vetRePassword" name="vetRePassword" required>
                            </div>
                        </div> 
                    </div> 
                    <div class="col-md-12 mt-3 text-md-end">
                        <button type="submit" name="submit" class="save-vet-btn btn-secondary" id="submit">Save</button>
                    </div>
                </form>
            </div>
        </section>
</body>
</html>   