<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Service';
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
                <p>Services</p>
            </div>
        </section>

        <section class="filter-con row">
            <div class="row col-7">
                <div class="form-group ps-4 col-sm-auto">
                    <select name="status" class="form-select">
                        <option value="">All Services</option>
                        <option value="">Consultation</option>
                        <option value="">Vaccination</option>
                        <option value="">Deworming</option>
                        <option value="">Imputation</option>
                    </select>
                </div>
            </div>

            <div class="col-5 d-flex justify-content-end">
                <div class="crud-btn">
                    <a href="" class="crud-text" data-bs-toggle="modal" data-bs-target="#addServiceModal"><i class="fa-solid fa-circle-plus me-2" aria-hidden="true"></i> Add</a>
                </div>

                <div class="modal fade" id="addServiceModal" tabindex="-1" aria-labelledby="addServiceModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                                <h4 class="modal-title m-4 text-center" id="addServiceModalLabel">Add Service</h4>
                            <div class="modal-body">
                                <form id="addServiceForm">
                                    <div class="mb-3">
                                        <label for="serviceName" class="form-label">Name of Service:</label>
                                        <input type="text" class="form-control" style="width: 465px;" id="serviceName" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="serviceDescription" class="form-label">Description:</label>
                                        <textarea class="form-control" style="width: 465px;" id="serviceDescription" rows="4" required></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="servicePrice" class="form-label">Price:</label>
                                        <input type="number" class="form-control" style="width: 465px;" id="servicePrice" required>
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
                        <th scope="col">Service ID</th>
                        <th scope="col">Service Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Last Update</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Consultation</td>
                        <td>Offers expert care and advice to ensure<br> the health and well-being of your beloved pets.</td>
                        <td>230.00</td>
                        <td>16 March 2023<br>
                            04:00 pm</td>
                        <td class="d-flex justify-content-end">
                            <div class="crud-btn">
                                <a href="" class="crud-icon-update" data-bs-toggle="modal" data-bs-target="#updateServiceModal"><i class="fa-solid fa-pen-to-square m-1" aria-hidden="true"></i></a>
                            </div>
                            <div class="modal fade" id="updateServiceModal" tabindex="-1" aria-labelledby="updateServiceModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                            <h4 class="modal-title m-4 text-center" id="updateServiceModalLabel">Update Service</h4>
                                        <div class="modal-body">
                                            <form id="updateServiceForm">
                                                <div class="mb-3">
                                                    <label for="serviceName" class="form-label">Name of Service:</label>
                                                    <textarea type="text" class="form-control" style="width: 465px;" id="serviceName" required>Consultation</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="serviceDescription" class="form-label">Description:</label>
                                                    <textarea class="form-control" style="width: 465px;" id="serviceDescription" rows="4" required>Offers expert care and advice to ensure the health and well-being of your beloved pets.</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="servicePrice" class="form-label">Price:</label>
                                                    <textarea type="number" class="form-control" style="width: 465px;" id="servicePrice" required>230.00</textarea>
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
                                <a href="" class="crud-icon-delete" data-bs-toggle="modal" data-bs-target="#deleteServiceModal"><i class="fa-solid fa-trash-can m-1"aria-hidden="true"></i></a>
                            </div> 
                            <div class="modal fade" id="deleteServiceModal" tabindex="-1" aria-labelledby="deleteServiceModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                            <h4 class="modal-title m-4 text-center" id="deleteServiceModalLabel">Are you sure you want to delete this service?</h4>
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
                        <td>2</td>
                        <td>Vaccination</td>
                        <td>Ensure your pet's well-being with timely<br> vaccinations for a lifetime of health.</td>
                        <td>200.00</td>
                        <td>16 March 2023<br>
                            04:10 pm</td>
                        <td class="d-flex justify-content-end">
                            <div class="crud-btn">
                                <a href="" class="crud-icon-update" data-bs-toggle="modal" data-bs-target="#updateServiceModal2"><i class="fa-solid fa-pen-to-square m-1" aria-hidden="true"></i></a>
                            </div>
                            <div class="modal fade" id="updateServiceModal2" tabindex="-1" aria-labelledby="updateServiceModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                            <h4 class="modal-title m-4 text-center" id="updateServiceModalLabel">Update Service</h4>
                                        <div class="modal-body">
                                            <form id="updateServiceForm">
                                                <div class="mb-3">
                                                    <label for="serviceName" class="form-label">Name of Service:</label>
                                                    <textarea type="text" class="form-control" style="width: 465px;" id="serviceName" required>Vaccination</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="serviceDescription" class="form-label">Description:</label>
                                                    <textarea class="form-control" style="width: 465px;" id="serviceDescription" rows="4" required>Ensure your pet's well-being with timely vaccinations for a lifetime of health.</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="servicePrice" class="form-label">Price:</label>
                                                    <textarea type="number" class="form-control" style="width: 465px;" id="servicePrice" required>200.00</textarea>
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
                                <a href="" class="crud-icon-delete" data-bs-toggle="modal" data-bs-target="#deleteServiceModal"><i class="fa-solid fa-trash-can m-1"aria-hidden="true"></i></a>
                            </div>
                            <div class="modal fade" id="deleteServiceModal" tabindex="-1" aria-labelledby="deleteServiceModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                            <h4 class="modal-title m-4 text-center" id="deleteServiceModalLabel">Are you sure you want to delete this service?</h4>
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
                        <td>3</td>
                        <td>Deworming</td>
                        <td>Promote your pet's health and vitality through<br> regular, reliable deworming solutions.</td>
                        <td>200.00</td>
                        <td>16 March 2023<br>
                            04:15 pm</td>
                        <td class="d-flex justify-content-end">
                            <div class="crud-btn">
                                <a href="" class="crud-icon-update" data-bs-toggle="modal" data-bs-target="#updateServiceModal3"><i class="fa-solid fa-pen-to-square m-1" aria-hidden="true"></i></a>
                            </div>
                            <div class="modal fade" id="updateServiceModal3" tabindex="-1" aria-labelledby="updateServiceModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                            <h4 class="modal-title m-4 text-center" id="updateServiceModalLabel">Update Service</h4>
                                        <div class="modal-body">
                                            <form id="updateServiceForm">
                                                <div class="mb-3">
                                                    <label for="serviceName" class="form-label">Name of Service:</label>
                                                    <textarea type="text" class="form-control" style="width: 465px;" id="serviceName" required>Deworming</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="serviceDescription" class="form-label">Description:</label>
                                                    <textarea class="form-control" style="width: 465px;" id="serviceDescription" rows="4" required>Promote your pet's health and vitality through regular, reliable deworming solutions.</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="servicePrice" class="form-label">Price:</label>
                                                    <textarea type="number" class="form-control" style="width: 465px;" id="servicePrice" required>200.00</textarea>
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
                                <a href="" class="crud-icon-delete" data-bs-toggle="modal" data-bs-target="#deleteServiceModal"><i class="fa-solid fa-trash-can m-1"aria-hidden="true"></i></a>
                            </div>
                            <div class="modal fade" id="deleteServiceModal" tabindex="-1" aria-labelledby="deleteServiceModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                            <h4 class="modal-title m-4 text-center" id="deleteServiceModalLabel">Are you sure you want to delete this service?</h4>
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
                        <td>4</td>
                        <td>Imputation</td>
                        <td>Entails the provision of knowledgeable and thoughtful<br> assistance, offering expert care 
                            and guidance to uphold the<br> optimal health and thriving condition of your cherished pets.</td>
                        <td>350.00</td>
                        <td>16 March 2023<br>
                            04:25 pm</td>
                        <td class="d-flex justify-content-end">
                            <div class="crud-btn">
                                <a href="" class="crud-icon-update" data-bs-toggle="modal" data-bs-target="#updateServiceModal4"><i class="fa-solid fa-pen-to-square m-1" aria-hidden="true"></i></a>
                            </div>
                            <div class="modal fade" id="updateServiceModal4" tabindex="-1" aria-labelledby="updateServiceModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                            <h4 class="modal-title m-4 text-center" id="updateServiceModalLabel">Update Service</h4>
                                        <div class="modal-body">
                                            <form id="updateServiceForm">
                                                <div class="mb-3">
                                                    <label for="serviceName" class="form-label">Name of Service:</label>
                                                    <textarea type="text" class="form-control" style="width: 465px;" id="serviceName" required>Imputation</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="serviceDescription" class="form-label">Description:</label>
                                                    <textarea class="form-control" style="width: 465px;" id="serviceDescription" rows="4" required>Entails the provision of knowledgeable and thoughtful assistance, offering expert care and guidance to uphold the optimal health and thriving condition of your cherished pets.</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="servicePrice" class="form-label">Price:</label>
                                                    <textarea type="number" class="form-control" style="width: 465px;" id="servicePrice" required>350.00</textarea>
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
                                <a href="" class="crud-icon-delete" data-bs-toggle="modal" data-bs-target="#deleteServiceModal"><i class="fa-solid fa-trash-can m-1"aria-hidden="true"></i></a>
                            </div>
                            <div class="modal fade" id="deleteServiceModal" tabindex="-1" aria-labelledby="deleteServiceModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                            <h4 class="modal-title m-4 text-center" id="deleteServiceModalLabel">Are you sure you want to delete this service?</h4>
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
                        <td>5</td>
                        <td>Imputation</td>
                        <td>Involves the skilled and careful removal of an eye,<br> ensuring the optimal care and well-
                            being of the<br> individual undergoing the procedure.</td>
                        <td>10, 000.00</td>
                        <td>16 March 2023<br>
                            04:40 pm</td>
                        <td class="d-flex justify-content-end">
                            <div class="crud-btn">
                                <a href="" class="crud-icon-update" data-bs-toggle="modal" data-bs-target="#updateServiceModal5"><i class="fa-solid fa-pen-to-square m-1" aria-hidden="true"></i></a>
                            </div>
                            <div class="modal fade" id="updateServiceModal5" tabindex="-1" aria-labelledby="updateServiceModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                            <h4 class="modal-title m-4 text-center" id="updateServiceModalLabel">Update Service</h4>
                                        <div class="modal-body">
                                            <form id="updateServiceForm">
                                                <div class="mb-3">
                                                    <label for="serviceName" class="form-label">Name of Service:</label>
                                                    <textarea type="text" class="form-control" style="width: 465px;" id="serviceName" required>Imputation</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="serviceDescription" class="form-label">Description:</label>
                                                    <textarea class="form-control" style="width: 465px;" id="serviceDescription" rows="4" required>Involves the skilled and careful removal of an eye, ensuring the optimal care and well-being of the individual undergoing the procedure.</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="servicePrice" class="form-label">Price:</label>
                                                    <textarea type="number" class="form-control" style="width: 465px;" id="servicePrice" required>10,000.00</textarea>
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
                                <a href="" class="crud-icon-delete" data-bs-toggle="modal" data-bs-target="#deleteServiceModal"><i class="fa-solid fa-trash-can m-1"aria-hidden="true"></i></a>
                            </div>
                            <div class="modal fade" id="deleteServiceModal" tabindex="-1" aria-labelledby="deleteServiceModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                            <h4 class="modal-title m-4 text-center" id="deleteServiceModalLabel">Are you sure you want to delete this service?</h4>
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