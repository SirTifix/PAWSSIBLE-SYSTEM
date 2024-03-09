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
 <section class="veterinarian-con">
            <div class="veterinarian-head">
                <p>Customer</p>
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
                            <label for="fname" class="form-label-setting">First Name :</label>
                            <input type="text" class="form-control" id="fname" name="fname" required>
                            </div>
                        </div>  
                        <div class="d-flex mt-3 align-items-center">
                            <div class="my-1 align-items-center ps-5">
                                <label for="address" class="form-label-setting">Address:</label>
                                <input type="text" class="form-control" id="address" name="address" required>
                            </div>
                        </div> 
                        <div class="d-flex mt-3 align-items-center">
                            <div class="my-1 align-items-center ps-5">
                                <label for="email" class="form-label-setting">Email:</label>
                                <input type="text" class="form-control" id="email" name="email" required>
                            </div>
                        </div> 
                        <div class="d-flex mt-3 align-items-center">
                            <div class="my-1 align-items-center ps-5">
                                <label for="zip_code" class="form-label-setting">Zip Code/Postal:</label>
                                <input type="text" class="form-control" id="zip_code" name="zip_code" required>
                            </div>
                        </div> 
                   
                    </div> 
                    <div class="new-account-con col-lg-6 col-md-6">
                        <div class="d-flex mt-3 align-items-center col-12 ">
                            <div class="my-1 align-items-center ps-5">
                            <label for="last_name" class="form-label-setting">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                            </div>
                        </div>  
                        <div class="d-flex mt-3 align-items-center col-12 ">
                            <div class="my-1 align-items-center ps-5">
                            <label for="city" class="form-label-setting">City</label>
                            <input type="text" class="form-control" id="city" name="city" required>
                            </div>
                        </div>  
                        <div class="d-flex mt-3 align-items-center col-12 ">
                            <div class="my-1 align-items-center ps-5">
                            <label for="state_province" class="form-label-setting">State/Province:</label>
                            <input type="text" class="form-control" id="state_province" name="state_province" required>
                            </div>
                        </div>  
                        <div class="d-flex mt-3 align-items-center col-12 ">
                            <div class="my-1 align-items-center ps-5">
                            <label for="phone_number" class="form-label-setting">Phone Number:</label>
                            <input type="tel" class="form-control" id="phone_number" name="phone_number" required>
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