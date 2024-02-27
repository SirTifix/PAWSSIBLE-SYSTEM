<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'vaccine';
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
                <p>Vaccines</p>
            </div>
        </section>

        <section class="filter-con row">
            <div class="col-12 d-flex justify-content-end pe-4 py-3">
                <div class="crud-btn">
                    <a href="" class="crud-text" data-bs-toggle="modal" data-bs-target="#addVaccineModal"><i class="fa-solid fa-circle-plus me-2" aria-hidden="true"></i>New</a>
                </div>

                <div class="modal fade" id="addVaccineModal" tabindex="-1" aria-labelledby="addVaccineModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                                <h4 class="modal-title m-4 text-left" id="addVaccineModalLabel">Add Vaccine Category</h4> 
                            <div class="modal-body">
                                <form id="addVaccineForm">
                                    <div class="mb-3">
                                        <label for="vaccineCatName" class="form-label" style="width: 100%;">New Vaccine Category:</label>
                                        <input type="text" class="form-control" style="width: 465px;" id="vaccineCatName" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="vaccineColumn" class="form-label">Column/s:</label>
                                        <input type="number" class="form-control" style="width: 100px;" id="vaccineColumn" required>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer justify-content-between" style="border: none;">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary" style="background-color: #556FF9; border: none;" data-bs-toggle="modal" data-bs-target="#nextModal">Next</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="nextModal" tabindex="-1" aria-labelledby="nextModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                                <h4 class="modal-title m-4 text-left" id="nextModalLabel">Add Vaccine Category</h4> 
                            <div class="modal-body d-flex justify-content-center">
                                <form id="addVaccineForm">
                                    <div class="mb-3">
                                        <label for="column1" class="form-label">Column 1</label>
                                        <input type="text" class="form-control" id="column1" placeholder="Enter column name" required>
                                    </div>
                                
                                    <div class="mb-3">
                                        <label for="column2" class="form-label">Column 2</label>
                                        <input type="text" class="form-control" id="column2" placeholder="Enter column name" required>
                                    </div>
                                
                                    <div class="mb-3">
                                        <label for="column3" class="form-label">Column 3</label>
                                        <input type="text" class="form-control" id="column3" placeholder="Enter column name" required>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer justify-content-between" style="border: none;">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary" style="background-color: #556FF9; border: none;">Create</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="table-con">
            <div class="table-wrapper">
                <table class="table custom-border" style="background-color: white; text-align: center;">
                    <tbody>
                    <tr style="border-width: 0px 0px 10px 0px; border-color: #EAEAEA;">
                        <td style="text-align: start;">Primary Series</td>
                    </tr>
                    <tr style="border-width: 0px 0px 10px 0px; border-color: #EAEAEA;">
                        <td style="text-align: start;">Annual Boosters</td>
                    </tr>
                    <tr style="border-color: #EAEAEA;">
                        <td style="text-align: start;">Deworming/Heatworm Prevention</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
    <?php
        require_once('./include/js.php')
    ?>
</body>
</html>