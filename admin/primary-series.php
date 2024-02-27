<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Vaccine';
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
                <p>Primary Series</p>
            </div>
        </section>

        <section class="filter-con row">
            <div class="row col-7">
                <div class="form-group ps-4 col-sm-auto">
                    <select name="status" class="form-select">
                        <option value="">All Pet Type</option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                </div>
            </div>

            <div class="col-5 d-flex justify-content-end">
                <div class="crud-btn">
                    <a href="" class="crud-text" data-bs-toggle="modal" data-bs-target="#addPSModal"><i class="fa-solid fa-circle-plus me-2" aria-hidden="true"></i> Add</a>
                </div>

                <div class="modal fade" id="addPSModal" tabindex="-1" aria-labelledby="addPSModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                                <h4 class="modal-title m-4 text-center" id="addPSModalLabel">Add Vaccine</h4>
                            <div class="modal-body d-flex justify-content-center">
                                <form id="addPSForm">
                                    <div class="mb-3">
                                        <label for="vaccineName" class="form-label">Vaccine:</label>
                                        <input type="text" class="form-control" style="width: 463px;" id="vaccineName" required>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="vaccineAge" class="form-label">Age(Weeks):</label>
                                            <input type="number" class="form-control" style="width: 220px;" id="vaccineAge" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="vaccineDosage" class="form-label">Dosage:</label>
                                            <input type="text" class="form-control" style="width: 220px;" id="vaccineDosage" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="vaccineWI" class="form-label">Weeks Interval:</label>
                                            <input type="number" class="form-control" style="width: 220px;" id="vaccineWI" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="vaccineBR" class="form-label" style="width: auto;">Booster Recommendation:</label>
                                            <input type="number" class="form-control" style="width: 220px;" id="vaccineBR" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="vaccinePrice" class="form-label">Price:</label>
                                        <input type="number" class="form-control" style="width: 463px;" id="vaccinePrice" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="petType" class="form-label">Pet Type:</label>
                                        <input type="number" class="form-control" style="width: 463px;" id="petType" required>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer justify-content-between" style="border: none;">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary" style="background-color: #065916; border: none;" onclick="">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="table-con">
            <div class="table-wrapper">
                <table class="table table-bordered" style="background-color: white; text-align: center;">
                    <thead>
                    <tr>
                        <th scope="col">Vaccine ID</th>
                        <th scope="col">Vaccine Name</th>
                        <th scope="col">Age (Weeks)</th>
                        <th scope="col">Dosage</th>
                        <th scope="col">Weeks Interval</th>
                        <th scope="col">Booster Recommendation (Weeks)</th>
                        <th scope="col">Price</th>
                        <th scope="col">Pet Type</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="d-flex justify-content-end">
                            <div class="crud-btn">
                                <a href="" class="crud-icon-update" data-bs-toggle="modal" data-bs-target="#updatePSModal"><i class="fa-solid fa-pen-to-square m-1" aria-hidden="true"></i></a>
                            </div>
                            <div class="modal fade" id="updatePSModal" tabindex="-1" aria-labelledby="updatePSModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                            <h4 class="modal-title m-4 text-center" id="updatePSModalLabel">Update Vaccine</h4>
                                        <div class="modal-body">
                                            <form id="updatePSForm" style="text-align: start;">
                                                <div class="mb-3">
                                                    <label for="vaccineName" class="form-label">Vaccine:</label>
                                                    <input type="text" class="form-control" style="width: 463px;" id="vaccineName" required>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="vaccineAge" class="form-label">Age(Weeks):</label>
                                                        <input type="number" class="form-control" style="width: 220px;" id="vaccineAge" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="vaccineDosage" class="form-label">Dosage:</label>
                                                        <input type="text" class="form-control" style="width: 220px;" id="vaccineDosage" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="vaccineWI" class="form-label">Weeks Interval:</label>
                                                        <input type="number" class="form-control" style="width: 220px;" id="vaccineWI" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="vaccineBR" class="form-label" style="width: auto;">Booster Recommendation:</label>
                                                        <input type="number" class="form-control" style="width: 220px;" id="vaccineBR" required>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="vaccinePrice" class="form-label">Price:</label>
                                                    <input type="number" class="form-control" style="width: 463px;" id="vaccinePrice" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="petType" class="form-label">Pet Type:</label>
                                                    <input type="number" class="form-control" style="width: 463px;" id="petType" required>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer justify-content-between" style="border: none;">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-primary" style="background-color: #065916; border: none;" onclick="">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="crud-btn">
                                <a href="" class="crud-icon-delete" data-bs-toggle="modal" data-bs-target="#deletePSModal"><i class="fa-solid fa-trash-can m-1"aria-hidden="true"></i></a>
                            </div> 
                            <div class="modal fade" id="deletePSModal" tabindex="-1" aria-labelledby="deletePSModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                            <h4 class="modal-title m-4 text-center" id="deletePSModalLabel">Are you sure you want to delete this vaccine?</h4>
                                        <div class="modal-footer justify-content-between" style="border: none;">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-primary" style="background-color: #FF0000; border: none;" onclick="">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="d-flex justify-content-end">
                            <div class="crud-btn">
                                <a href="" class="crud-icon-update" data-bs-toggle="modal" data-bs-target="#updatePSModal2"><i class="fa-solid fa-pen-to-square m-1" aria-hidden="true"></i></a>
                            </div>
                            <div class="modal fade" id="updatePSModal2" tabindex="-1" aria-labelledby="updatePSModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                            <h4 class="modal-title m-4 text-center" id="updatePSModalLabel">Update Vaccine</h4>
                                        <div class="modal-body">
                                            <form id="updatePSForm">
                                                <div class="mb-3">
                                                    <label for="vaccineName" class="form-label">Vaccine:</label>
                                                    <input type="text" class="form-control" style="width: 463px;" id="vaccineName" required>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="vaccineAge" class="form-label">Age(Weeks):</label>
                                                        <input type="number" class="form-control" style="width: 220px;" id="vaccineAge" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="vaccineDosage" class="form-label">Dosage:</label>
                                                        <input type="text" class="form-control" style="width: 220px;" id="vaccineDosage" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="vaccineWI" class="form-label">Weeks Interval:</label>
                                                        <input type="number" class="form-control" style="width: 220px;" id="vaccineWI" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="vaccineBR" class="form-label" style="width: auto;">Booster Recommendation:</label>
                                                        <input type="number" class="form-control" style="width: 220px;" id="vaccineBR" required>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="vaccinePrice" class="form-label">Price:</label>
                                                    <input type="number" class="form-control" style="width: 463px;" id="vaccinePrice" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="petType" class="form-label">Pet Type:</label>
                                                    <input type="number" class="form-control" style="width: 463px;" id="petType" required>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer justify-content-between" style="border: none;">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-primary" style="background-color: #065916; border: none;" onclick="">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="crud-btn">
                                <a href="" class="crud-icon-delete" data-bs-toggle="modal" data-bs-target="#deletePSModal"><i class="fa-solid fa-trash-can m-1"aria-hidden="true"></i></a>
                            </div>
                            <div class="modal fade" id="deletePSModal" tabindex="-1" aria-labelledby="deletePSModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                            <h4 class="modal-title m-4 text-center" id="deletePSModalLabel">Are you sure you want to delete this vaccine?</h4>
                                        <div class="modal-footer justify-content-between" style="border: none;">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-primary" style="background-color: #FF0000; border: none;" onclick="">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="d-flex justify-content-end">
                            <div class="crud-btn">
                                <a href="" class="crud-icon-update" data-bs-toggle="modal" data-bs-target="#updatePSModal3"><i class="fa-solid fa-pen-to-square m-1" aria-hidden="true"></i></a>
                            </div>
                            <div class="modal fade" id="updatePSModal3" tabindex="-1" aria-labelledby="updatePSModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                            <h4 class="modal-title m-4 text-center" id="updatePSModalLabel">Update Vaccine</h4>
                                        <div class="modal-body">
                                            <form id="updatePSForm">
                                                <div class="mb-3">
                                                    <label for="vaccineName" class="form-label">Vaccine:</label>
                                                    <input type="text" class="form-control" style="width: 463px;" id="vaccineName" required>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="vaccineAge" class="form-label">Age(Weeks):</label>
                                                        <input type="number" class="form-control" style="width: 220px;" id="vaccineAge" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="vaccineDosage" class="form-label">Dosage:</label>
                                                        <input type="text" class="form-control" style="width: 220px;" id="vaccineDosage" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="vaccineWI" class="form-label">Weeks Interval:</label>
                                                        <input type="number" class="form-control" style="width: 220px;" id="vaccineWI" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="vaccineBR" class="form-label" style="width: auto;">Booster Recommendation:</label>
                                                        <input type="number" class="form-control" style="width: 220px;" id="vaccineBR" required>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="vaccinePrice" class="form-label">Price:</label>
                                                    <input type="number" class="form-control" style="width: 463px;" id="vaccinePrice" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="petType" class="form-label">Pet Type:</label>
                                                    <input type="number" class="form-control" style="width: 463px;" id="petType" required>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer justify-content-between" style="border: none;">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-primary" style="background-color: #065916; border: none;" onclick="">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="crud-btn">
                                <a href="" class="crud-icon-delete" data-bs-toggle="modal" data-bs-target="#deletePSModal"><i class="fa-solid fa-trash-can m-1"aria-hidden="true"></i></a>
                            </div>
                            <div class="modal fade" id="deletePSModal" tabindex="-1" aria-labelledby="deletePSModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                            <h4 class="modal-title m-4 text-center" id="deletePSModalLabel">Are you sure you want to delete this vaccine?</h4>
                                        <div class="modal-footer justify-content-between" style="border: none;">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-primary" style="background-color: #FF0000; border: none;" onclick="">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="d-flex justify-content-end">
                            <div class="crud-btn">
                                <a href="" class="crud-icon-update" data-bs-toggle="modal" data-bs-target="#updatePSModal4"><i class="fa-solid fa-pen-to-square m-1" aria-hidden="true"></i></a>
                            </div>
                            <div class="modal fade" id="updatePSModal4" tabindex="-1" aria-labelledby="updatePSModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                            <h4 class="modal-title m-4 text-center" id="updatePSModalLabel">Update Vaccine</h4>
                                        <div class="modal-body">
                                            <form id="updatePSForm">
                                                <div class="mb-3">
                                                    <label for="vaccineName" class="form-label">Vaccine:</label>
                                                    <input type="text" class="form-control" style="width: 463px;" id="vaccineName" required>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="vaccineAge" class="form-label">Age(Weeks):</label>
                                                        <input type="number" class="form-control" style="width: 220px;" id="vaccineAge" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="vaccineDosage" class="form-label">Dosage:</label>
                                                        <input type="text" class="form-control" style="width: 220px;" id="vaccineDosage" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="vaccineWI" class="form-label">Weeks Interval:</label>
                                                        <input type="number" class="form-control" style="width: 220px;" id="vaccineWI" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="vaccineBR" class="form-label" style="width: auto;">Booster Recommendation:</label>
                                                        <input type="number" class="form-control" style="width: 220px;" id="vaccineBR" required>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="vaccinePrice" class="form-label">Price:</label>
                                                    <input type="number" class="form-control" style="width: 463px;" id="vaccinePrice" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="petType" class="form-label">Pet Type:</label>
                                                    <input type="number" class="form-control" style="width: 463px;" id="petType" required>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer justify-content-between" style="border: none;">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-primary" style="background-color: #065916; border: none;" onclick="">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="crud-btn">
                                <a href="" class="crud-icon-delete" data-bs-toggle="modal" data-bs-target="#deletePSModal"><i class="fa-solid fa-trash-can m-1"aria-hidden="true"></i></a>
                            </div>
                            <div class="modal fade" id="deletePSModal" tabindex="-1" aria-labelledby="deletePSModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                            <h4 class="modal-title m-4 text-center" id="deletePSModalLabel">Are you sure you want to delete this vaccine?</h4>
                                        <div class="modal-footer justify-content-between" style="border: none;">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-primary" style="background-color: #FF0000; border: none;" onclick="">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="d-flex justify-content-end">
                            <div class="crud-btn">
                                <a href="" class="crud-icon-update" data-bs-toggle="modal" data-bs-target="#updatePSModal5"><i class="fa-solid fa-pen-to-square m-1" aria-hidden="true"></i></a>
                            </div>
                            <div class="modal fade" id="updatePSModal5" tabindex="-1" aria-labelledby="updatePSModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                            <h4 class="modal-title m-4 text-center" id="updatePSModalLabel">Update Vaccine</h4>
                                        <div class="modal-body">
                                            <form id="updatePSForm">
                                                <div class="mb-3">
                                                    <label for="vaccineName" class="form-label">Vaccine:</label>
                                                    <input type="text" class="form-control" style="width: 463px;" id="vaccineName" required>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="vaccineAge" class="form-label">Age(Weeks):</label>
                                                        <input type="number" class="form-control" style="width: 220px;" id="vaccineAge" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="vaccineDosage" class="form-label">Dosage:</label>
                                                        <input type="text" class="form-control" style="width: 220px;" id="vaccineDosage" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="vaccineWI" class="form-label">Weeks Interval:</label>
                                                        <input type="number" class="form-control" style="width: 220px;" id="vaccineWI" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="vaccineBR" class="form-label" style="width: auto;">Booster Recommendation:</label>
                                                        <input type="number" class="form-control" style="width: 220px;" id="vaccineBR" required>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="vaccinePrice" class="form-label">Price:</label>
                                                    <input type="number" class="form-control" style="width: 463px;" id="vaccinePrice" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="petType" class="form-label">Pet Type:</label>
                                                    <input type="number" class="form-control" style="width: 463px;" id="petType" required>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer justify-content-between" style="border: none;">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-primary" style="background-color: #065916; border: none;" onclick="">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="crud-btn">
                                <a href="" class="crud-icon-delete" data-bs-toggle="modal" data-bs-target="#deletePSModal"><i class="fa-solid fa-trash-can m-1"aria-hidden="true"></i></a>
                            </div>
                            <div class="modal fade" id="deletePSModal" tabindex="-1" aria-labelledby="deletePSModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                            <h4 class="modal-title m-4 text-center" id="deletePSModalLabel">Are you sure you want to delete this vaccine?</h4>
                                        <div class="modal-footer justify-content-between" style="border: none;">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-primary" style="background-color: #FF0000; border: none;" onclick="">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </td>
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