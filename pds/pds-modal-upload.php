<?php
include 'pds-process-upload.php';
?>
<div class="modal fade " id="exampleModal8"data-bs-backdrop="false" tabindex="-1" aria-labelledby="exampleModalLabel8" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel8">Upload PDS Excel File</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post"enctype="multipart/form-data">
                <div class="row align-items-start mt-2">
                    <div class="col">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Excel file:</span>
                            <input type="file" name="fileToUpload" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" value="upload" class="btn btn-success" >Submit</button>
                <button type="button" class="btn btn-danger"data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
        </form>
    </div>
</div>