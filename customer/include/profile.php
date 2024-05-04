<?php
session_start();

if (!isset($_SESSION['user']) || $_SESSION['user'] != 'customer') {
    header('location: index.php');
}
$title = 'My Profile';
require_once ('../../classes/account.class.php');
require_once ('../tools/functions.php');

if (isset($_SESSION['email2'])) {
    $email = $_SESSION['email2'];

    $customer = new Account();
    $customerData = $customer->getCustomerData($email);

} else {
    echo "Session email not set.";
}
?>
<div class="ron-cont container rounded mt-2 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="p-3 py-5">

                <div class="Title d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>

                <div class="row mt-2 gap-3">
                    <div class="col-md-3"><label class="form-label"> First Name</label><input type="text"
                            class="form-control" placeholder="First name" value="<?php echo $customerData['firstname']; ?>"></div>
                    <div class="col-md-3"><label class="form-label"> Middle Name</label><input type="text"
                            class="form-control" value="<?php echo $customerData['middlename']; ?>" placeholder="Last Name"></div>
                    <div class="col-md-3"><label class="form-label">Last Name</label><input type="text"
                            class="form-control" value="<?php echo $customerData['lastname']; ?>" placeholder="Last Name"></div>
                </div>

                <div class="row mt-2 gap-3">
                    <div class="col-md-4"><label class="form-label"> Email</label><input type="text"
                            class="form-control" placeholder="Email" value="<?php echo $customerData['email']; ?>"></div>
                    <div class="col-md-4"><label class="form-label"> Email</label><input type="text"
                            class="form-control" placeholder="Email" value="<?php echo $customerData['email']; ?>"></div>
                </div>

                <div class="container mt-5">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirmModal">
                        Save Profile
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="confirmModalLabel">Confirmation</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p style="padding:1em;">Are you sure you want to save your profile?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>