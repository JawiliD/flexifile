<?php

?>
<div class="modal fade" id="exampleModal1"data-bs-backdrop="false" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel1">Create PDS Profile</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <h3>Personal Information</h3>
                        <form method="POST">                                             
                        <div class="row align-items-start mt-2">
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Firstname:</span>
                                <input type="text" name="firstname" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Surname:</span>
                                <input type="text" name="surname" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Middle Name:</span>
                                <input type="text" name="midname" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Name Extension(JR,SR):</span>
                                <input type="text" name="extension" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Date of Birth:</span>
                                <input type="date" name="birthday" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Place of Birth:</span>
                                <input type="text" name="birthplace" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Sex:</span>
                                <input type="text" name="sex" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Civil Status:</span>
                                <input type="text" name="civilStatus" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Height(m):</span>
                                <input type="text" name="height" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Weight(kg):</span>
                                <input type="text" name="weight" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Blood Type:</span>
                                <input type="text" name="bloodtype" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">GSIS ID no:</span>
                                <input type="text" name="gsis" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">PHILHEATH ID no:</span>
                                <input type="text" name="philhealth" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">SSS no:</span>
                                <input type="text" name="sss" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Tin no:</span>
                                <input type="text" name="tin" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Agency Employee no:</span>
                                <input type="text" name="agencyNo" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Citizenship:</span>
                                <input type="text" name="citizenship" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Telephone:</span>
                                <input type="text" name="telephone" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">E-mail Address:</span>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Mobile no:</span>
                                <input type="text" name="mobileNo" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <p><strong>Residential Address:</strong><p>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">House/Block/Lot No.</span>
                                <input type="text" name="residentialHouseNo" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Street</span>
                                <input type="text" name="residentialStreet" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Subdivision/Village</span>
                                <input type="text" name="residentialSubdivision" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Barangay</span>
                                <input type="text" name="residentialBarangay" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">City/Municipality</span>
                                <input type="text" name="residentialMunicipality" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Province</span>
                                <input type="text" name="residentialProvince" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Zipcode</span>
                                <input type="text" name="residentialZipcode" class="form-control">
                            </div>
                            <p><strong>Permanent Address:</strong><p>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">House/Block/Lot No.</span>
                                <input type="text" name="permanentHouseNo" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm"6>Street</span>
                                <input type="text" name="permanentStreet" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Subdivision/Village</span>
                                <input type="text" name="permanentSubdivision" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Barangay</span>
                                <input type="text" name="permanentBarangay" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">City/Municipality</span>
                                <input type="text" name="permanentMunicipality" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Province</span>
                                <input type="text" name="permanentProvince" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Zipcode</span>
                                <input type="text" name="permanentZipcode" class="form-control">
                            </div>
                            </div>     
                             
                        </div>      
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn btn-success" name="save_personal">Save</button>
                    <button type="button" class="btn btn-danger"data-bs-dismiss="modal">Cancel</button>
                </div>
                </form>
            </div>
        </div>
    </div>