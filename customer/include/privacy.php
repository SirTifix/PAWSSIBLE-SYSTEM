<div class="container rounded mt-2 mb-5">
    <div class="row">
        <div class="col-md-12 border-right">
            <div class="p-3 py-5">
                <div class="Title d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Privacy Settings</h4>
                </div>

                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="form-label">Current Password</label>
                        <div class="input-group">
                            <input id="currentPassword" type="password" class="form-control"
                                placeholder="Current Password" value="">
                            <span class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button"
                                    onclick="togglePasswordVisibility('currentPassword')">
                                    <i class="fas fa-eye" aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="form-label">New Password</label>
                        <div class="input-group">
                            <input id="newPassword" type="password" class="form-control" placeholder="New Password"
                                value="">
                            <span class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button"
                                    onclick="togglePasswordVisibility('newPassword')">
                                    <i class="fas fa-eye" aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="row mt-3 mb-5">
                    <div class="col-md-6">
                        <label class="form-label">Confirm Password</label>
                        <div class="input-group">
                            <input id="confirmPassword" type="password" class="form-control"
                                placeholder="Confirm Password" value="">
                            <span class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button"
                                    onclick="togglePasswordVisibility('confirmPassword')">
                                    <i class="fas fa-eye" aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="container d-flex gap-5">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirmModal">
                        Save Password
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