<div class="container rounded mt-2 mb-5">
    <div class="row">
        <div class="col-md-12 border-right">
            <div class="p-3 py-5">

                <div class="Title d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>

                <div class="row mt-2">
                    <div class="col-md-6"><label class="form-label"> First Name</label><input type="text"
                            class="form-control" placeholder="First name" value=""></div>
                    <div class="col-md-6"><label class="form-label">Last Name</label><input type="text"
                            class="form-control" value="" placeholder="Last Name"></div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-6"><label class="form-label"> Username</label><input type="text"
                            class="form-control" placeholder="Username" value=""></div>

                    <div class="col-md-6"><label class="form-label"> Gender</label><select class="form-select"
                            aria-label="Default select example">
                            <option selected>Select your Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="N/A">N/A</option>
                        </select></div>
                </div>

                <div class="row mt-3 mb-5">
                    <div class="col-md-6"><label class="form-label">Birth Date</label><input type="date"
                            class="form-control" placeholder="Birth Date" value=""></div>
                    <div class="col-md-6"><label class="form-label">Email</label><input type="email"
                            class="form-control" value="" placeholder="Email"></div>
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
                                    Are you sure you want to save your profile?
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