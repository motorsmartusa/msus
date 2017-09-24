<div class="modal fade" id="labelModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <a role="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="cls rounded white"></span>
        </a>
          
        <h4 class="modal-title" id="myModalLabel">ADD NEW LABEL DETAILS</h4>
      </div>
      <div class="modal-body">
        <form action="label.php" method="post" name="add-new-label">

            <div class="sub-heading">
              Got a new place to send your <span class="highlight">RI LABEL</span>, just tell us where
            </div>


            <div class="row align-items-end">
              <div class="col-md-6">
                <label>Company Name</label> <input class="form-control" name="label_name" type="text">
              </div>


              <div class="col-md-6">
                <label>Contact Name</label> <input class="form-control" name="label_contact" type="text">
              </div>
            </div>


            <div class="row align-items-end">
              <div class="col-md-3">
                <label>Phone</label> <input class="form-control" name="label_phone" type="tel">
              </div>


              <div class="col-md-3">
                <label>Fax</label> <input class="form-control" name="label_fax" type="tel">
              </div>


              <div class="col-md-6">
                <label>Email</label> <input class="form-control" name="label_email" type="email">
              </div>
            </div>


            <div class="row align-items-end">
              <div class="col-md-3">
                <label>Unit</label> <input class="form-control" name="label_unit" type="text">
              </div>


              <div class="col-md-9">
                <label>Address</label> <input class="form-control" name="label_address" type="text">
              </div>
            </div>


            <div class="row align-items-end">
              <div class="col-md-3">
                <label>City</label> <input class="form-control" name="label_city" type="text">
              </div>


              <div class="col-md-3">
                <label>State/Province</label> <select class="form-control" name="label_state">
                  <option>
                  </option>
                </select>
              </div>


              <div class="col-md-3">
                <label>Zip/Postal Code</label> <input class="form-control" name="label_postal_code" type="text">
              </div>


              <div class="col-md-3">

              </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary btn-med" type="submit">ADD</button>
      </div>
    </div>
  </div>
</div>