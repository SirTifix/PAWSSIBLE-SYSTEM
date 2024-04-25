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
             <section class="customer-title pt-4">
 
            <div class="customer-info-head">
                <h2>Account Settings</h2>
            </div>

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
                            <input type="text" class="form-control" id="emailadd" name="emailadd" required>
                            </div>
                        </div>  
                        <div class="d-flex mt-3 align-items-center">
                            <div class="my-1 align-items-center ps-5">
                                <label for="username" class="form-label-setting">Username </label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                        </div> 
                        <div class="d-flex mt-3 align-items-center">
                            <div class="my-1 align-items-center ps-5">
                                <label for="currentpass" class="form-label-setting">Current Password </label>
                                <input type="text" class="form-control" id="currentpass" name="currentpass" required>
                            </div>
                        </div> 
                    </div> 
                    <div class="new-account-con col-lg-6 col-md-6">
                        <div class="d-flex mt-3 align-items-center col-12 ">
                            <div class="my-1 align-items-center ps-5">
                            <label for="change_email" class="form-label-setting">Change Email Address</label>
                            <input type="text" class="form-control" id="change_email" name="change_email" required>
                            </div>
                        </div>  
                        <div class="d-flex mt-3 align-items-center col-12 ">
                            <div class="my-1 align-items-center ps-5">
                                <label for="change_username" class="form-label-setting">Change Username </label>
                                <input type="text" class="form-control" id="change_username" name="change_username" required>
                            </div>
                        </div> 
                        <div class="d-flex mt-3 align-items-center col-12 ">
                            <div class="my-1 align-items-center ps-5">
                                <label for="newpass" class="form-label-setting">New Password </label>
                                <input type="text" class="form-control" id="newpass" name="newpass" required>
                            </div>
                        </div> 
                        <div class="d-flex mt-3 align-items-center col-12 ">
                            <div class="my-1 align-items-center ps-5">
                                <label for="confirmpass" class="form-label-setting">Confirm Password </label>
                                <input type="text" class="form-control" id="confirmpass" name="confirmpass" required>
                            </div>
                        </div> 
                    </div> 
                    <div class="col-md-12 mt-3 text-md-end">
                        <button type="submit" class="save-vet-btn btn-secondary" id="addStaffButton">Save</button>
                    </div>
                </form>
            </div>
        </section>
</body>
</html>   