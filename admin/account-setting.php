<?php
session_start();
require_once('../classes/account.class.php');

$adminClass = new Account();

if(isset($_SESSION['adminID'])) {
    $adminID = $_SESSION['adminID'];
    $adminData = $adminClass->fetchAdmin($adminID); 

    if($adminData) {
        $adminUsername = $adminData['adminUsername'];
        $adminEmail = $adminData['adminEmail'];

        if(isset($_POST['submit'])) {
            $adminUsername = $_POST['adminUsername'];
            $adminEmail = $_POST['adminEmail'];
            $adminPassword = $_POST['adminPassword'];
            $hashedPassword = password_hash($adminPassword, PASSWORD_DEFAULT);
            $adminRePassword = $_POST['adminRePassword'];

            if($adminPassword !== $adminRePassword) {
                echo "Passwords do not match.";
            } else {
                $adminClass->adminUsername = $adminUsername;
                $adminClass->adminEmail = $adminEmail;
                $adminClass->adminPassword = $hashedPassword;
                $adminClass->adminID = $adminID;

                $result = $adminClass->updateAdmin();

                if($result) {
                    echo "admin data updated successfully.";
                    header("Location: dashboard.php");
                } else {
                    echo "Failed to update secretary data.";
                }
            }
        }
    } else {
        echo "Error: admin data not found.";
        exit();
    }
} else {
    echo "Error: adminID not provided.";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Setting';
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
                            <input type="text" class="form-control" id="emailadd" name="emailadd" value="<?=$adminUsername?>" readonly>
                            </div>
                        </div>  
                        <div class="d-flex mt-3 align-items-center">
                            <div class="my-1 align-items-center ps-5">
                                <label for="username" class="form-label-setting">Username </label>
                                <input type="text" class="form-control" id="username" name="username" value="<?=$adminEmail?>" readonly>
                            </div>
                        </div> 
                    </div> 
                    <div class="new-account-con col-lg-6 col-md-6">
                        <div class="d-flex mt-3 align-items-center col-12 ">
                            <div class="my-1 align-items-center ps-5">
                            <label for="adminEmail" class="form-label-setting">Change Email Address</label>
                            <input type="text" class="form-control" id="adminEmail" name="adminEmail" required>
                            </div>
                        </div>  
                        <div class="d-flex mt-3 align-items-center col-12 ">
                            <div class="my-1 align-items-center ps-5">
                                <label for="adminUsername" class="form-label-setting">Change Username </label>
                                <input type="text" class="form-control" id="adminUsername" name="adminUsername" required>
                            </div>
                        </div> 
                        <div class="d-flex mt-3 align-items-center col-12 ">
                            <div class="my-1 align-items-center ps-5">
                                <label for="adminPassword" class="form-label-setting">New Password </label>
                                <input type="password" class="form-control" id="adminPassword" name="adminPassword" required>
                            </div>
                        </div> 
                        <div class="d-flex mt-3 align-items-center col-12 ">
                            <div class="my-1 align-items-center ps-5">
                                <label for="adminRePassword" class="form-label-setting">Confirm Password </label>
                                <input type="password" class="form-control" id="adminRePassword" name="adminRePassword" required>
                            </div>
                        </div> 
                    </div> 
                    <div class="col-md-12 mt-3 text-md-end">
                        <button type="submit" name="submit" class="save-vet-btn btn-secondary" id="submit">Save</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
</body>
</html>
