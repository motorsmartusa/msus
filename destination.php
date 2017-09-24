<div class="modal fade" id="destinationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <a role="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="cls rounded white"></span>
        </a>
          
        <h4 class="modal-title" id="myModalLabel">ADD A NEW DESTINATION</h4>
      </div>
      <div class="modal-body">
        <form action="destination.php" method="post" name="add-new-destination">

            <div class="sub-heading">
              Add a new <span class="highlight">DESTINATION</span> here
            </div>


            <div class="row align-items-end">
              <div class="col-md-6">
                <label>Destination Name</label> <input class="form-control" name="dest_owner" type="text">
              </div>


              <div class="col-md-6">
                <label>Contact Name</label> <input class="form-control" name="dest_contact" type="text">
              </div>
            </div>


            <div class="row align-items-end">
              <div class="col-md-3">
                <label>Phone</label> <input class="form-control" name="dest_phone" type="tel">
              </div>


              <div class="col-md-3">
                <label>Fax</label> <input class="form-control" name="dest_fax" type="tel">
              </div>


              <div class="col-md-6">
                <label>Email</label> <input class="form-control" name="dest_email" type="email">
              </div>
            </div>


            <div class="row align-items-end">
              <div class="col-md-3">
                <label>Unit</label> <input class="form-control" name="dest_unit" type="text">
              </div>


              <div class="col-md-9">
                <label>Address</label> <input class="form-control" name="dest_address" type="text">
              </div>
            </div>


            <div class="row align-items-end">
              <div class="col-md-3">
                <label>City</label> <input class="form-control" name="dest_city" type="text">
              </div>


              <div class="col-md-3">
                <label>State/Province</label> <select class="form-control" name="dest_state">
                  <option>
                  </option>
                </select>
              </div>


              <div class="col-md-3">
                <label>Zip/Postal Code</label> <input class="form-control" name="dest_postal_code" type="text">
              </div>


              <div class="col-md-3">
                <label>Federal Tax ID</label> <input class="form-control" name="dest_federal_tax_id" type="text">
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