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
                            <input id="currentPassword" type="password" class="book-form-control" placeholder="Current Password" value="">
                            <span class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" onclick="togglePasswordVisibility('currentPassword')">
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
                            <input id="newPassword" type="password" class="book-form-control" placeholder="New Password" value="">
                            <span class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" onclick="togglePasswordVisibility('newPassword')">
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
                            <input id="confirmPassword" type="password" class="book-form-control" placeholder="Confirm Password" value="">
                            <span class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" onclick="togglePasswordVisibility('confirmPassword')">
                                    <i class="fas fa-eye" aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="d-flex gap-5">
                    <div class=" text-center">
                        <button class="btn btn-primary profile-button" type="button">
                            Save Password
                        </button>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>