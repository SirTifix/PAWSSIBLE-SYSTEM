<div class="pet-info-form background-color-container">
    <h2 class="mb-4">Pet ${i} Information Form</h2>
    <form>
    <div class="form-row">
        <div class="form-group col-sm-2  background-color">
        <label for="petname"><h5>Pet Name</h5></label>
        <input
            type="text"
            class="form-control"
            id="petname"
            placeholder="Enter pet name"
        />
        </div>
        <div class="form-group col-sm-2 background-color">
        <label for="pettype"> <h5>Pet Type</h5></label>
        <input
            type="text"
            class="form-control"
            id="pettype"
            placeholder="Enter pet type"
        />
        </div>
        <div class="form-group col-sm-2 background-color">
        <label for="sex"> <h5>Sex</h5></label>
        <input
            type="text"
            class="form-control background-color"
            id="sex"
            placeholder="Enter sex"
        />
        </div>

        <div class="form-group col-sm-2">
        <label for="concerns"> <h5>Concerns</h5></label>
        <textarea style="height: 200px;" class="form-concerns" id="concerns"></textarea>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-sm-2 background-color">
        <label for="breed"> <h5>Breed</h5></label>
        <input
            type="text"
            class="form-control"
            id="breed"
            placeholder="Enter breed"
        />
        </div>
        <div class="form-group col-sm-2 background-color">
        <label for="services"> <h5>Select Services</h5></label>
        <select class="form-control" id="services">
            <option value="">Choose...</option>
            <option value="Spay/Neuter">
            Spay/Neuter<span class="price">PHP 1,000</span>
            </option>
            <option value="Eye Extraction">
            Eye Extraction<span class="price">PHP 4,500</span>
            </option>
            <option value="Imputation">
            Imputation<span class="price">PHP 2,500</span>
            </option>
            <option value="Caesarian">
            Caesarian<span class="price">PHP 1,000</span>
            </option><option value="Vaccination">
            Vaccination<span class="price">PHP 300</span>
            </option>
        </select>
        </div>

        <div class="form-group col-sm-2 background-color">
        <label for="vet"> <h5>Select vet</h5></label>
        <select class="form-control" id="vet">
            <option value="">Choose...</option>
            <option value="vet1">Dr.Jasmin abayon</option>
            <option value="vet2">Dr.Erwin roy jalao</option>
            <option value="vet3">Dr.Portia quintas</option>
            <option value="vet3">Dr.Roi-lee cataluna</option>
            <option value="vet3">Dr.France jalao</option>
        </select>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-sm-2 background-color">
        <label for="birthdate"> <h5>BirthDate</h5></label>
        <input type="date" class="form-control" id="birthdate" />
        </div>
    </div>

    <div class="select-ex-pet">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#profileModal" style="background-color: #6075d1; float: right;">
        Select Existing Pet
        </button>



        <!-- Profile Modal -->
        <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
            <div class="modal-body">
                <div class="Profile select-container d-flex flex-row">
                <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                    <div class="user-picture position-relative">
                        <input type="file" id="fileInput" style="display: none;" accept="image/*">
                        <img src="default-profile-pic.png" alt="" class="profile-pic" id="profilePic">
                        </label>
                    </div>
                    <span class="text-black fs-5">Raf Saludo</span>
                    </div>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a class="nav-link text-black" style="color: black;">
                        <i style="margin-right: 10px;" class="fa-solid fa-paw"></i> <strong>
                            Pet
                        </strong>
                        </a>
                    </li>
                    </ul>
                </div>
    
                <div class="content p-4 w-100">
                <table class="table table-striped">
                <thead>
                    <tr>
                    <th>Pet No.</th>
                    <th>Pet Name</th>
                    <th>Species</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>4412</td>
                    <td>Max</td>
                    <td>Dog</td>
                    <td> <button type="button" class="Select-button btn btn-primary aria-expanded="false">
                    Select
                    </button>
                    </td>
                    </tr>
                    <tr>
                    <td>4413</td>
                    <td>Max</td>
                    <td>Dog</td>
                    <td> <button type="button" class="Select-button btn btn-primary aria-expanded="false">
                    Select
                    </button>
                    </td>
                    </tr>
                    <tr>
                    <td>4414</td>
                    <td>Kebies</td>
                    <td>Cat</td>
                    <td> <button type="button" class="Select-button btn btn-primary aria-expanded="false">
                    Select
                    </button>
                    </td>

                    </tr>
                </tbody>
                </table>
                </div>
                </div>

                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </form>
</div>