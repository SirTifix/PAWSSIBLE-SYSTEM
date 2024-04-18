<?php
    //session_start();
    //if (!isset($_SESSION['user']) || $_SESSION['user'] != 'customer'){
        //header('location: ./index.php');
    //}
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
                <p>Customer's Records</p>
            </div>
        </section>

        <section class="filter-con row">
            <div class="row col-7">
                <div class="form-group col-8 col-sm-auto">
                    <select id="dateRangeSelect" class="form-select">
                        <option value="today">Today</option>
                        <option value="thisYear">This Year</option>
                        <option value="lastYear">Last Year</option>
                        <option value="custom" class="custom-option">Custom date range</option>
                    </select>
                

                    <div id="customDateContainer">
                        <div id="customDateRange" class="customDateRange">
                            <label for="startDate" class="my-1">After:</label>
                            <input type="date" id="startDate" class="my-1" name="startDate">

                            <label for="endDate" class="my-2">Before:</label>
                            <input type="date" id="endDate" name="endDate">

                            <div class="d-flex justify-content-between align-items-center mt-3">
                            <button type="button" class="btn btn-secondary">Cancel</button>
                            <button type="button" class="btn btn-primary">Apply</button>
                        </div>

                    </div>
                </div>  
            </div>

            <div class="form-group col-4 col-sm-auto">
                    <select name="status" class="form-select">
                        <option value="">All Status</option>
                        <option value="Active">Active</option>
                        <option value="Deactivated">Deactivated</option>
                    </select>
                </div>
            </div>

            <div class="crud-btn col-5 justify-content-end">
                <a href="add-customer.php" class="crud-text" style="width: 35%"><i class="fa-solid fa-circle-plus pe-2 pt-1" aria-hidden="true"></i>Add Customer</a>
            </div>
        </section>

        <section class="table-con">
            <?php
            require_once('../classes/customer.class.php');
            require_once('./tools/functions.php');

            $customer = new Customer();
            $customerArray = $customer->show();
            $counter = 1;
            ?>
            <div class="table-wrapper">
                <table id="customer" class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Recently Added</th>
                            <th scope="col" width="5%" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody id="customerTableBody">
                        <?php
                        if ($customerArray) {
                            foreach ($customerArray as $item) {
                                ?>
                                <tr>
                                    <td>
                                        <?= $counter ?>
                                    </td>
                                    <td>
                                        <?= $item['customerLastname'] . ', ' . $item['customerFirstname'] ?>
                                    </td>
                                    <td>
                                        <?= $item['updated_at'] ?>
                                    </td>
                                    <td class="d-flex justify-content-end">
                                        <div class="crud-btn">
                                            <a href="update-customer.php?customerID=<?= $item['customerID'] ?>"
                                                class="crud-icon-update"><i class="fa-regular fa-pen-to-square"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                        <div class="crud-btn">
                                            <a href="" class="crud-icon-delete" data-bs-toggle="modal"
                                                data-bs-target="#deleteDModal" data-customer-id="<?= $item['customerID'] ?>"><i
                                                    class="fa-regular fa-trash-can" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="crud-btn">
                                            <a href="customer-info.php?customerID=<?= $item['customerID'] ?>" class=""><i
                                                    class="fa fa-ellipsis-h me-2" aria-hidden="true"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                $counter + 1;
                            }
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </section>

        <section>
            <div class="modal fade" id="deleteDModal" tabindex="-1" aria-labelledby="deleteDModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <h4 class="modal-title m-4 text-center" id="deleteDModalLabel">Are you sure you want to delete
                            this Customer?</h4>
                        <div class="modal-footer justify-content-between" style="border: none;">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary" id="confirmDelete" data-customer-id=""
                                style="background-color: #FF0000; border: none;">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
             document.getElementById('confirmDelete').addEventListener('click', function () {
                var customerID = this.getAttribute('data-customer-id');
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'delete-customer.php');
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onload = function () {
                    if (xhr.status === 200) {
                        location.reload();
                    } else {
                        console.error('Error:', xhr.statusText);
                    }
                };
                xhr.send('customerID=' + customerID);
            });

            document.querySelector('.crud-icon-delete').addEventListener('click', function () {
                var customerID = this.getAttribute('data-customer-id');
                document.getElementById('confirmDelete').setAttribute('data-customer-id', customerID);
            });

            document.getElementById("dateRangeSelect").addEventListener("change", function() {
                var customDateRange = document.getElementById("customDateRange");
                if (this.value === "custom") {
                    customDateRange.style.display = "block";
                } else {
                    customDateRange.style.display = "none";
                }
            });
        </script>
    </main>
    <?php
    require_once('./include/js.php')
        ?>
</body>
</html>