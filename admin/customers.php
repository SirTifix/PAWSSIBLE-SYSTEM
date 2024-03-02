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
                <div class="form-group col-6 col-sm-auto">
                    <select name="year" class="form-select">
                        <option value="">Today</option>
                        <option value="Manager">This Year</option>
                        <option value="Staff">Last Year</option>
                        <option value="Cashier">Custom date range</option>
                    </select>
                </div>
        
                <div class="form-group col-6 col-sm-auto">
                    <select name="status" class="form-select">
                        <option value="">All Status</option>
                        <option value="Active">Active</option>
                        <option value="Deactivated">Deactivated</option>
                    </select>
                </div>
            </div> 

            <div class="crud-btn col-5 justify-content-end">
                <a href="add-customer.php" class="crud-text"><i class="fa-solid fa-circle-plus m-1" aria-hidden="true"></i>Add</a>
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
                <table id="customer"class="table table-striped table-sm">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Recently Added</th>
                        <th scope="col" width="5%">Action</th>
                        </tr>
                    </thead>
                    <tbody id="customerTableBody">
                    <?php
                        if ($customerArray){
                            foreach ($customerArray as $item) {
                    ?>
                        <tr>
                            <td><?= $counter ?></td>
                            <td><?= $item['customerLastname'] . ', ' . $item['customerFirstname'] ?></td>
                            <td><?= $item['updated_at'] ?></td>
                            <td class="d-flex justify-content-end">
                                <div class="crud-btn">
                                    <a href="update-customer.php" class="crud-icon-update"><i class="fa-solid fa-pen-to-square m-1" aria-hidden="true"></i></a>
                                </div>
                                <div class="crud-btn">
                                    <a href="" class="crud-icon-delete" data-bs-toggle="modal" data-bs-target="#deleteDModal"><i class="fa-solid fa-trash-can m-1"aria-hidden="true"></i></a>
                                </div> 
                                <div class="crud-btn">
                                    <a href="customer-info.php" class=""><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                                </div> 
                            </td>
                        </tr>
                    <?php
                                $counter++;
                            }
                        }
                    ?>
                        </tbody>
                </table>
            </div>
        </section>  

        <section>
            <div class="modal fade" id="deleteDModal" tabindex="-1" aria-labelledby="deleteDModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <h4 class="modal-title m-4 text-center" id="deleteDModalLabel">Are you sure you want to delete this Customer?</h4>
                        <div class="modal-footer justify-content-between" style="border: none;">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary" style="background-color: #FF0000; border: none;" onclick="">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php
        require_once('./include/js.php')
    ?>
</body>
</html>