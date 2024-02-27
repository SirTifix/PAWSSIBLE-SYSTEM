<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Veterinarian';
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
                <p>Veterinarian's Accounts</p>
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
                <a href="create-vet.php" class="crud-text"><i class="fa-solid fa-circle-plus m-1" aria-hidden="true"></i>Add</a>
            </div>

        </section>

        <section class="table-con">
            <div class="table-wrapper">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Recently Added</th>
                        <th scope="col" width="5%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark Otto</td>
                            <td>12 Jan 2024</td>
                            <td class="d-flex justify-content-end">
                            <div class="crud-btn">
                                <a href="update-vet.php" class="crud-icon-update"><i class="fa-solid fa-pen-to-square m-1" aria-hidden="true"></i></a>
                            </div>
                            <div class="crud-btn">
                                <a href="" class="crud-icon-delete" data-bs-toggle="modal" data-bs-target="#deleteDModal"><i class="fa-solid fa-trash-can m-1"aria-hidden="true"></i></a>
                            </div> 

                        </td>
                        </tr>
                        </tbody>
                </table>
            </div>
        </section>  

        <section>
            <div class="modal fade" id="deleteDModal" tabindex="-1" aria-labelledby="deleteDModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <h4 class="modal-title m-4 text-center" id="deleteDModalLabel">Are you sure you want to delete this Veterinarian?</h4>
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