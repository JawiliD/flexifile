<?php

include 'pds-php-syntax.php';


?>

<div class="modal fade" id="pdsmodal"data-bs-backdrop="false" tabindex="-1" aria-labelledby="pdsmodal1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Personal Information</h1>
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
                                <input type="text" name="birthday" class="form-control">
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
                        </hr>
                            <h3>Family background</h3>
                                <div class="row align-items-start mt-2">
                                    <div class="col">                                    
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Spouse Surname:</span>
                                        <input type="text" name="spouseSurname" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Spouse Firstname:</span>
                                            <input type="text" name="spouseFirstname" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Spouse Middle Name:</span>
                                            <input type="text" name="spouseMidname" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Occupation:</span>
                                            <input type="text" name="occupation" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Employer/Business Name:</span>
                                            <input type="text" name="employer" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Business Address:</span>
                                            <input type="text" name="business" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Telephone no:</span>
                                            <input type="text" name="telephoneNo" class="form-control">
                                        </div>        
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Father's Surname:</span>
                                            <input type="text" name="fatherSurname" class="form-control">
                                        </div>                                
                                    </div>
                                    <div class="col">                                       
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Father's Firstname:</span>
                                            <input type="text" name ="fatherFirstname" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Father's Middle name:</span>
                                            <input type="text" name="fatherMidname" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Name Extension(JR.,SR):</span>
                                            <input type="text" name="fatherExtension" class="form-control">
                                        </div>
                                        <p>Mother's Maiden Name</p>                                        
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Mother's Surname:</span>
                                            <input type="text" name="motherSurname" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Mother's Firstname:</span>
                                            <input type="text" name="motherFirstname" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Mother's Middle name:</span>
                                            <input type="text" name="motherMidname" class="form-control">
                                        </div>
                                    </div>
                                </div> 

                                <hr>
                                <div class="input-group input-group-sm mt-3 mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Name of Children:</span>
                                    <input type="text" name="childname" class="form-control">
                                    <span class="mx-2"></span>
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Date of Birth:</span>
                                    <input type="text" name="childbirth" class="form-control">
                                </div>                               
                                <div class="text-end">  
                                    <button type="button" name="addBtn" class="btn btn-primary addbtn5" >Add</button>
                                </div>
                                <h5 class="mt-4">Preview</h5> 
                                <div class="family-div m-0 overflow-scroll">                          
                                <table class="table table-secondary table-striped text-center mt-3  family-table">
                                    <thead>
                                        <tr>
                                            <th>Children Name</th>                                                                                         
                                            <th>Date of Birth</th>                                            
                                            <th>action</th>
                                        </tr>                               
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                    <input type="hidden" name="userid" value="<?php echo $userID; ?>">
                                    <input type="hidden" name="family-details" id="family-details-input" value="<?php echo htmlspecialchars(json_encode($familyDetails)); ?>">
                                </table>
                                </div>
                       
                        <hr>
                        <h3> Educational Background</h3>                                                
                        <div class="container text-start">                                                        
                            <div class="row mt-2">                                                        
                                <div class="col">
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Level:</span>
                                        <select class="form-control" name="level" id="level">
                                            <option value="ELEMENTARY">Elementary</option>
                                            <option value="SECONDARY">Secondary</option>
                                            <option value="VOCATIONAL / TRADE COURSE">Vocational</option>
                                            <option value="COLLEGE">College</option>
                                            <option value="GRADUATE STUDIES">Graduate Studies</option>
                                        </select>   
                                    </div>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Name of School:</span>
                                        <input type="text" name="schoolName" class="form-control">
                                    </div>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Basic Educational/Degree/Course:</span>
                                        <input type="text" name="degree" class="form-control">
                                    </div>
                                    <p><strong>Period Attendance</strong></p>
                                    <div class="input-group input-group-sm mb-3">                                        
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> From:</span>
                                        <input type="text" name="fromDate" class="form-control">
                                        <span class="mx-2"></span>
                                        <span class="input-group-text" id="inputGroup-sizing-sm">To:</span>
                                        <input type="text" name="toDate" class="form-control">
                                        </div>
                                </div>
                                <div class="col">
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Highest Level/Unit Earned:</span>
                                        <input type="text" name="units" class="form-control">
                                    </div>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Year Graduated:</span>
                                        <input type="text" name="graduated" class="form-control">
                                    </div>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Scholarship/Academic Honors Recieved:</span>
                                        <input type="text" name="honors" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="text-end">  
                            <button type="button" name="addBtn" class="btn btn-primary addbtn" >Add</button>
                            </div>
                            <h5 class="mt-4">Preview</h5> 
                            <div class="education-details-div m-0 overflow-scroll">                          
                            <table class="table table-secondary table-striped text-center mt-3  education-table">
                                <thead>
                                    <tr>
                                        <th>Level</th>
                                        <th>School Name</th>
                                        <th>Degree</th>
                                        <th colspan="2">Period of attendance</th>
                                        <th>highest Unit earned</th>
                                        <th>Year graduated</th>
                                        <th>Honors received</th>
                                        <th>Action</th>
                                    </tr> 
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>                                     
                                </thead>
                                <tbody>
                                    
                                </tbody>
                                <input type="hidden" name="userid" value="<?php echo $userID; ?>">
                                <input type="hidden" name="education-details" id="education-details-input" value="<?php echo htmlspecialchars(json_encode($educationDetails)); ?>">
                            </table>
                            </div>            
                            <hr>                            
                            <h3>Civil Service Eligibility</h3>
                            <div class="row align-items-start mt-2">
                                <div class="col">
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Career Service:</span>
                                        <input type="text" name="career" class="form-control">
                                    </div>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Rating:</span>
                                        <input type="text" name="rating" class="form-control">
                                    </div>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Date of Examination/Conferment:</span>
                                        <input type="text" name="examination" class="form-control">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Place of Examination/Conferment:</span>
                                        <input type="text" name="place" class="form-control">
                                    </div>
                                    <p><strong>License:</strong></p>
                                    <div class="input-group input-group-sm mb-3">                                        
                                        <span class="mx-2"></span>
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Number:</span>
                                        <input type="text" name="number" class="form-control">
                                        <span class="mx-2"></span>
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Date of Validity:</span>
                                        <input type="text" name="validity" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-end">  
                                    <button type="button" name="addBtn" class="btn btn-primary addbtn1" >Add</button>
                                </div>
                                <h5 class="mt-4">Preview</h5> 
                                <div class="civil-service-details-div m-0 overflow-scroll">                          
                                <table class="table table-secondary table-striped text-center mt-3  civil-service-table">
                                    <thead>
                                        <tr>
                                            <th>Career Service</th>
                                            <th>Rating</th>
                                            <th>Examination Date</th>
                                            <th>Examination Place</th>
                                            <th colspan="2">License</th>                                            
                                            <th>Action</th>
                                        </tr> 
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>Number</th>
                                            <th>Validity Date</th>
                                            <th></th>                                                                                   </tr>                                     
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                    <input type="hidden" name="userid" value="<?php echo $userID; ?>">
                                    <input type="hidden" name="civil-service-details" id="civil-service-details-input" value="<?php echo htmlspecialchars(json_encode($civilServiceDetails)); ?>">
                                </table>
                                </div>
                                <hr>
                                <h3> Work Experience</h3>
                                <div class="row align-items-start mt-2">
                                    <div class="col">
                                        <p><strong>Inclusive Dates</strong></p>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">From:</span>
                                            <input type="text" name="work-from-date" class="form-control">
                                            <span class="mx-2"></span>
                                            <span class="input-group-text" id="inputGroup-sizing-sm">To:</span>
                                            <input type="text" name="work-to-date" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Position Title:</span>
                                            <input type="text" name="position_title" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Department/Agency/Office:</span>
                                            <input type="text" name="department" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Monthly Salary:</span>
                                                <input type="text" name="salary" class="form-control">
                                            </div>
                                        </div>
                                    <div class="col">
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Salary/Job/Pay Grade:</span>
                                            <input type="text" name="paygrade" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Status of Appointment:</span>
                                            <input type="text" name="appointment" class="form-control">
                                            </div>
                                        
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Gov't Service (Y/N):</span>
                                            <input type="text" name="gov-service" class="form-control">
                                        </div>
                                    </div>
                                    </div>
                                <div class="text-end">  
                                    <button type="button" name="addBtn" class="btn btn-primary addbtn2" >Add</button>
                                </div>
                                <h5 class="mt-4">Preview</h5> 
                                <div class="work-details-div m-0 overflow-scroll">                          
                                <table class="table table-secondary table-striped text-center mt-3  work-table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Inclusive Dates</th> 
                                            <th>Department/Agency</th>
                                            <th>Monthly Salary</th>
                                            <th>Salary/Pay Grade</th>
                                            <th>Appointment status</th>                                                                                       
                                            <th>Gov't Service Y/N</th>                                                                                       
                                            <th>Action</th>
                                        </tr> 
                                        <tr>
                                            <th>From</th>
                                            <th>To</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>                                     
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                    <input type="hidden" name="userid" value="<?php echo $userID; ?>">
                                    <input type="hidden" name="work-details" id="work-details-input" value="<?php echo htmlspecialchars(json_encode($workDetails)); ?>">
                                </table>
                                </div>
                                <hr>
                                <h3>Voluntary Work or Involvement in Civic/Non-Government/People/Voluntary Organization/s</h3>
                                <div class="row align-items-start mt-2">
                                    <div class="col">
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Name and Address of Organization:</span>
                                            <input type="text" name="organization" class="form-control">                                                                
                                        </div>
                                        <p><strong>Inclusive Dates</strong></p>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm"> From:</span>
                                            <input type="text" name="voluntary-from-date" class="form-control">
                                            <span class="mx-2"></span>
                                            <span class="input-group-text" id="inputGroup-sizing-sm">To:</span>
                                            <input type="text" name="voluntary-to-date" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Number of Hours:</span>
                                            <input type="text" name="hours" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Position/ Nature of Work:</span>
                                            <input type="text" name="position" class="form-control">
                                        </div>
                                    </div>
                                </div>                                
                                <div class="text-end">  
                                    <button type="button" name="addBtn" class="btn btn-primary addbtn3" >Add</button>
                                </div>
                                <h5 class="mt-4">Preview</h5> 
                                <div class="voluntary-div m-0 overflow-scroll">                          
                                <table class="table table-secondary table-striped text-center mt-3  voluntary-table">
                                    <thead>
                                        <tr>
                                            <th>Name and address of Org</th>
                                            <th colspan="2">Inclusive Dates</th>                                             
                                            <th>Number of Hours</th>
                                            <th>Position</th>                                                                                                                                  
                                            <th>Action</th>
                                        </tr> 
                                        <tr>
                                            <th></th>
                                            <th>From</th>
                                            <th>To</th>                                            
                                            <th></th>
                                            <th></th>
                                            <th></th>                                            
                                        </tr>                                     
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                    <input type="hidden" name="userid" value="<?php echo $userID; ?>">
                                    <input type="hidden" name="voluntary-details" id="voluntary-details-input" value="<?php echo htmlspecialchars(json_encode($voluntaryDetails)); ?>">
                                </table>
                                </div>
                            <hr>
                            <h3>Learning and Development (L&D) Interventions/Training Programs Attended</h3>
                            <div class="row align-items-start mt-2">
                                <div class="col">
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Title of Learning and Development Interventions/Training Programs:</span>
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                    <p><strong> Dates of Attendance</strong></p>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">From:</span>
                                        <input type="text" name="training-from-date" class="form-control">
                                        <span class="mx-2"></span>
                                        <span class="input-group-text" id="inputGroup-sizing-sm">To:</span>
                                        <input type="text" name="training-to-date" class="form-control">
                                    </div>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Number of Hours:</span>
                                        <input type="text" name="duration" class="form-control">
                                    </div>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Type of LD( Managerial/ Supervisory/Technical/etc):</span>
                                        <input type="text" name="type" class="form-control">
                                    </div>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Conducted/Sponsored by :</span>
                                        <input type="text" name="sponsor" class="form-control">
                                    </div>
                                </div>
                            </div>                                 
                            <div class="text-end">  
                                <button type="button" name="addBtn" class="btn btn-primary addbtn4" >Add</button>
                            </div>
                            <h5 class="mt-4">Preview</h5> 
                            <div class="training-div m-0 overflow-scroll">                          
                                <table class="table table-secondary table-striped text-center mt-3 training-table">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th colspan="2">Inclusive Dates</th>                                             
                                            <th>Number of Hours</th>
                                            <th>Type of LD</th>                                                                                                                                  
                                            <th>Sponsor/conductor</th>
                                            <th>action</th>
                                        </tr> 
                                        <tr>
                                            <th></th>
                                            <th>From</th>
                                            <th>To</th>                                            
                                            <th></th>
                                            <th></th>
                                            <th></th>                                            
                                            <th></th>                                            
                                        </tr>                                     
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                    <input type="hidden" name="userid" value="<?php echo $userID; ?>">
                                    <input type="hidden" name="training-details" id="training-details-input" value="<?php echo htmlspecialchars(json_encode($trainingDetails)); ?>">
                                </table>
                            </div>
                            <hr>
                            <h3>Other Information</h3>
                                <div class="row align-items-start mt-2">
                                    <div class="col">
                                        <div class="input-group input-group-sm mb-3">
                                             <span class="input-group-text" id="inputGroup-sizing-sm">Special Skills and Hobbies:</span>
                                            <input type="text" name="skills_hobbies" class="form-control">                                                                
                                        </div>                                        
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Non-Academic Distinction:</span>
                                            <input type="text" name="recognition" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Membership in Association:</span>
                                            <input type="text" name="association" class="form-control">
                                        </div>
                                    </div>
                                </div>                                
                                <div class="text-end">  
                                    <button type="button" name="addBtn" class="btn btn-primary addbtnOther" >Add</button>
                                </div>
                                <h5 class="mt-4">Preview</h5> 
                                <div class="voluntary-div m-0 overflow-scroll">                          
                                <table class="table table-secondary table-striped text-center mt-3  other-table">
                                    <thead>
                                        <tr>                                                                                        
                                            <th>Skills</th>
                                            <th>Recognition</th>                                                                                                                                  
                                            <th>Association</th>                                                                                                                                  
                                            <th>Action</th>
                                        </tr>                                                                           
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                    <input type="hidden" name="userid" value="<?php echo $userID; ?>">
                                    <input type="hidden" name="other-details" id="other-details-input" value="<?php echo htmlspecialchars(json_encode($otherDetails)); ?>">
                                </table>
                                </div>
                                      
                </div>
                <div class="modal-footer">
                        <button type="submit" class="btn btn-success" name="submit">Save</button>
                        <button type="button" class="btn btn-danger"data-bs-dismiss="modal">Cancel</button>
                </div>
                </form> 
            </div>
        </div>
    </div>
<?php
include 'pds-javascript-syntax.php';
?>