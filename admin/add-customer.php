<?php
require_once('../classes/customer.class.php');
require_once('../classes/pet.class.php');
require_once('./tools/functions.php');

if(isset($_POST['save'])){
    $customer = new Customer();
    $customer->customerFirstname = $_POST['customerFirstname'];
    $customer->customerLastname = $_POST['customerLastname'];
    $customer->customerDOB = $_POST['customerDOB'];
    $customer->customerCity = $_POST['customerCity'];
    $customer->customerAddress = $_POST['customerAddress'];
    $customer->customerEmail = $_POST['customerEmail'];
    $customer->customerState = $_POST['customerState'];
    $customer->customerPostal = $_POST['customerPostal'];
    $customer->customerPhone = $_POST['customerPhone'];

    if (validate_field($customer->customerFirstname) &&
        validate_field($customer->customerLastname) &&
        validate_field($customer->customerDOB) &&
        validate_field($customer->customerCity) &&
        validate_field($customer->customerAddress) &&
        validate_field($customer->customerEmail) &&
        validate_field($customer->customerState) &&
        validate_field($customer->customerPostal) &&
        validate_field($customer->customerPhone)) {
        
        $lastInsertedCustomerId = $customer->add();

        if($lastInsertedCustomerId) {
            $pet = new Pet();
            $pet->petName = $_POST['petName'];
            $pet->petBirthdate = $_POST['petBirthdate'];
            $pet->petAge = $_POST['petAge'];
            $pet->petBreed = $_POST['petBreed'];
            $pet->petType = $_POST['petType'];
            $pet->petGender = $_POST['petGender'];
            $pet->petWeight = $_POST['petWeight'];
            $pet->petColor = $_POST['petColor'];
            
            if (validate_field($pet->petName) &&
                validate_field($pet->petBirthdate) &&
                validate_field($pet->petAge) &&
                validate_field($pet->petBreed) &&
                validate_field($pet->petType) &&
                validate_field($pet->petGender) &&
                validate_field($pet->petWeight) &&
                validate_field($pet->petColor)) {
                
                if($pet->add($lastInsertedCustomerId)) {
                    header('Location: customers.php');
                    exit;
                } else {
                    echo 'Error inserting pet record';
                }
            } else {
                echo 'Invalid pet data';
            }
        } else {
            echo 'Error inserting customer record';
        }
    } else {
        echo 'Invalid customer data';
    }
}
?>



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
            <p>Add New Customer</p>
        </div>
    </section>
    <section class="vet-form-con row">
        <div class="head-form col-12 d-flex justify-content-between align-items-center">
            <i class="fa-solid fa-user " aria-hidden="true"></i>
            <i class="fa-solid fa-paw" aria-hidden="true"></i>
        </div>
            <div class="create-vet-form col-12">
                <div class="vet-head-form">
                    <p>Customer Information</p>
                </div>
                    <form action="" method="post">
                        <div class="form-body d-flex flex-wrap row">
                            <div class="d-flex mt-3 align-items-center col-12 row">
                                <div class="my-1 d-flex align-items-center col-6 ps-5">
                                    <label for="customerFirstname" class="form-label">First Name:</label>
                                    <input type="text" class="form-control" id="customerFirstname" name="customerFirstname" required value="<?php if(isset($_POST['customerFirstname'])) { echo $_POST['customerFirstname']; } ?>">
                                    <?php
                                        if(isset($_POST['customerFirstname']) && !validate_field($_POST['customerFirstname'])){
                                    ?>
                                            <p class="text-danger my-1">First name is required</p>
                                    <?php
                                        }
                                    ?>
                                </div>
                                <div class="my-1 d-flex align-items-center col-6 ps-5">
                                    <label for="customerLastname" class="form-label">Last Name:</label>
                                    <input type="text" class="form-control" id="customerLastname" name="customerLastname" required value="<?php if(isset($_POST['customerLastname'])) { echo $_POST['customerLastname']; }?>">
                                    <?php
                                        if(isset($_POST['customerLastname']) && !validate_field($_POST['customerLastname'])){
                                    ?>
                                            <p class="text-danger my-1">Last name is required</p>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="d-flex align-items-center col-12 row">
                                <div class="my-1 d-flex align-items-center col-6 ps-5">
                                    <label for="customerDOB" class="form-label">DOB:</label>
                                    <input type="date" class="form-control" id="customerDOB" name="customerDOB" required value="<?php if(isset($_POST['customerDOB'])) { echo $_POST['customerDOB']; }?>">
                                    <?php
                                        if(isset($_POST['customerLastname']) && !validate_field($_POST['customerLastname'])){
                                    ?>
                                            <p class="text-danger my-1">Date of birth is required</p>
                                    <?php
                                        }
                                    ?>
                                </div>
                                <div class="my-1 d-flex align-items-center col-6 ps-5">
                                    <label for="customerCity" class="form-label">City:</label>
                                    <input type="text" class="form-control" id="customerCity" name="customerCity" required value="<?php if(isset($_POST['customerCity'])) { echo $_POST['customerCity']; }?>">
                                    <?php
                                        if(isset($_POST['customerCity']) && !validate_field($_POST['customerCity'])){
                                    ?>
                                            <p class="text-danger my-1">City is required</p>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>
                                <div class="address-form align-items-center col-12 ps-5">
                                    <label for="customerAddress" class="form-label ms-2">Address:</label>
                                    <input type="text" class="form-control" id="customerAddress" name="customerAddress" style="width: 82.5%;" required value="<?php if(isset($_POST['customerAddress'])) { echo $_POST['customerAddress']; }?>">
                                    <?php
                                        if(isset($_POST['customerAddress']) && !validate_field($_POST['customerAddress'])){
                                    ?>
                                            <p class="text-danger my-1">Address is required</p>
                                    <?php
                                        }
                                    ?>
                                </div>
                            <div class="d-flex align-items-center col-12 row">
                                <div class="my-1 d-flex align-items-center col-6 ps-5">
                                    <label for="customerEmail" class="form-label">Email:</label>
                                    <input type="text" class="form-control" id="customerEmail" name="customerEmail" required value="<?php if(isset($_POST['customerEmail'])) { echo $_POST['customerEmail']; }?>">
                                    <?php
                                        if(isset($_POST['customerEmail']) && !validate_field($_POST['customerEmail'])){
                                    ?>
                                            <p class="text-danger my-1">Email is required</p>
                                    <?php
                                        }
                                    ?>
                                </div>
                                <div class="my-1 d-flex align-items-center col-6 ps-5">
                                    <label for="customerState" class="form-label">State/Province:</label>
                                    <input type="text" class="form-control" id="customerState" name="customerState" required value="<?php if(isset($_POST['customerState'])) { echo $_POST['customerState']; }?>">
                                    <?php
                                        if(isset($_POST['customerState']) && !validate_field($_POST['customerState'])){
                                    ?>
                                            <p class="text-danger my-1">State/Province is required</p>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="d-flex align-items-center col-12 row">
                                <div class="my-1 d-flex align-items-center col-6 ps-5">
                                    <label for="customerPostal" class="form-label">Zip code/Postal:</label>
                                    <input type="text" class="form-control" id="customerPostal" name="customerPostal" required value="<?php if(isset($_POST['customerPostal'])) { echo $_POST['customerPostal']; }?>">
                                    <?php
                                        if(isset($_POST['customerPostal']) && !validate_field($_POST['customerPostal'])){
                                    ?>
                                            <p class="text-danger my-1">Zip code/Postal is required</p>
                                    <?php
                                        }
                                    ?>
                                </div>
                                <div class="my-1 d-flex align-items-center col-6 ps-5">
                                    <label for="customerPhone" class="form-label">Phone Number:</label>
                                    <input type="text" class="form-control" id="customerPhone" name="customerPhone" required value="<?php if(isset($_POST['customerPhone'])) { echo $_POST['customerPhone']; }?>">
                                    <?php
                                        if(isset($_POST['customerPhone']) && !validate_field($_POST['customerPhone'])){
                                    ?>
                                            <p class="text-danger my-1">Phone number is required</p>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                            <div class="vet-head-form mt-4">
                                <p>Pet Information</p>
                            </div>
                            
                            <div class="d-flex justify-content-around">
                            <div class="pet-profile m-0">
                                    <input type="file" id="fileInput" style="display: none;" accept="image/*">
                                    <img src="./assets/img/upload-photo.png" alt="Pet Profile Pic" class="pet-profile-pic" id="profilePic">
                                    <label for="fileInput" class="upload-icon">
                                        <i class="fa-solid fa-plus" class="pet-pp-icon"></i>
                                    </label>
                                </div>

                                <div class="form-body">
                                    <div class="d-flex mt-3">
                                        <label for="petName" class="form-label fw-bold">Pet Name:</label>
                                        <input type="text" class="form-control" id="petName" name="petName" required value="<?php if(isset($_POST['petName'])) { echo $_POST['petName']; }?>">
                                        <?php
                                            if(isset($_POST['petName']) && !validate_field($_POST['petName'])){
                                        ?>
                                                <p class="text-danger my-1">Pet name is required</p>
                                        <?php
                                            }
                                        ?>
                                    </div>
                                    <div class="d-flex">
                                        <label for="petBirthdate" class="form-label fw-bold">Birth Date:</label>
                                        <input type="text" class="form-control" id="petBirthdate" name="petBirthdate" required value="<?php if(isset($_POST['petBirthdate'])) { echo $_POST['petBirthdate']; }?>">
                                        <?php
                                            if(isset($_POST['petBirthdate']) && !validate_field($_POST['petBirthdate'])){
                                        ?>
                                                <p class="text-danger my-1">Pet birthdate is required</p>
                                        <?php
                                            }
                                        ?>
                                    </div>
                                    <div class="d-flex">
                                        <label for="petAge" class="form-label fw-bold">Pet Age:</label>
                                        <input type="text" class="form-control" id="petAge" name="petAge" required value="<?php if(isset($_POST['petAge'])) { echo $_POST['petAge']; }?>">
                                        <?php
                                            if(isset($_POST['petAge']) && !validate_field($_POST['petAge'])){
                                        ?>
                                                <p class="text-danger my-1">Pet age is required</p>
                                        <?php
                                            }
                                        ?>
                                    </div>
                                    <div class="d-flex">
                                        <label for="petBreed" class="form-label fw-bold">Breed:</label>
                                        <input type="text" class="form-control" id="petBreed" name="petBreed" required value="<?php if(isset($_POST['petBreed'])) { echo $_POST['petBreed']; }?>">
                                        <?php
                                            if(isset($_POST['petBreed']) && !validate_field($_POST['petBreed'])){
                                        ?>
                                                <p class="text-danger my-1">Pet breed is required</p>
                                        <?php
                                            }
                                        ?>
                                    </div>
                                    <div class="d-flex">
                                        <label for="petType" class="form-label fw-bold">Pet Type:</label>
                                        <input type="text" class="form-control" id="petType" name="petType" required value="<?php if(isset($_POST['petType'])) { echo $_POST['petType']; }?>">
                                        <?php
                                            if(isset($_POST['petType']) && !validate_field($_POST['petType'])){
                                        ?>
                                                <p class="text-danger my-1">Pet type is required</p>
                                        <?php
                                            }
                                        ?>
                                    </div>
                                    <div class="d-flex">
                                        <label for="petGender" class="form-label fw-bold">Gender:</label>
                                        <input type="text" class="form-control" id="petGender" name="petGender" required value="<?php if(isset($_POST['petGender'])) { echo $_POST['petGender']; }?>">
                                        <?php
                                            if(isset($_POST['petGender']) && !validate_field($_POST['petGender'])){
                                        ?>
                                                <p class="text-danger my-1">Pet gender is required</p>
                                        <?php
                                            }
                                        ?>
                                    </div>
                                    <div class="d-flex">
                                        <label for="petWeight" class="form-label fw-bold">Weight:</label>
                                        <input type="text" class="form-control" id="petWeight" name="petWeight" required value="<?php if(isset($_POST['petWeight'])) { echo $_POST['petWeight']; }?>">
                                        <?php
                                            if(isset($_POST['petWeight']) && !validate_field($_POST['petWeight'])){
                                        ?>
                                                <p class="text-danger my-1">Pet weight is required</p>
                                        <?php
                                            }
                                        ?>
                                    </div>
                                    <div class="d-flex">
                                        <label for="petColor" class="form-label fw-bold">Color:</label>
                                        <input type="text" class="form-control" id="petColor" name="petColor" required value="<?php if(isset($_POST['petColor'])) { echo $_POST['petColor']; }?>">
                                        <?php
                                            if(isset($_POST['petColor']) && !validate_field($_POST['petColor'])){
                                        ?>
                                                <p class="text-danger my-1">Pet color is required</p>
                                        <?php
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <a href="customers.php" class="back-btn btn-secondary">Back</a>
                                </div>
                                <div>
                                    <button type="submit" name="save" class="save-vet-btn btn-secondary" id="addCustomerButton">Save</button>
                                </div>
                            </div>
                        </form>
            </div>
    </section>
    </main>
</body>
</html>