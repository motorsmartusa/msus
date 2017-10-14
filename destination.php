<div class="modal fade" id="destinationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <a role="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="cls rounded white"></span>
        </a>
          
        <h4 class="modal-title" id="myModalLabel">ADD A NEW DESTINATION</h4>
      </div>
      <form action="destination.php" method="post" name="add-new-destination">
        <div class="modal-body">     

          <div class="sub-heading">
            Add a new <span class="highlight">DESTINATION</span> here
          </div>


          <div class="row align-items-end">
            <div class="col-md-6">
              <label>Destination Name*</label> <input class="form-control" name="dest_owner" type="text" required>
            </div>


            <div class="col-md-6">
              <label>Contact Name*</label> <input class="form-control" name="dest_contact" type="text" required>
            </div>
          </div>


          <div class="row align-items-end">
            <div class="col-md-3">
              <label>Phone*</label> <input class="form-control" name="dest_phone" type="tel" required>
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
              <label>Unit</label> <input class="form-control" name="dest_unit" type="text" pattern="[a-zA-Z0-9\s]{1,6}" title="Alphanumeric, max 6 digits.">
            </div>


            <div class="col-md-9">
              <label>Address*</label> <input class="form-control" name="dest_address" type="text" required>
            </div>
          </div>


          <div class="row align-items-end">
            <div class="col-md-3">
              <label>City*</label> <input class="form-control" name="dest_city" type="text" required>
            </div>


            <div class="col-md-3">
              <label>State/Province*</label> <select class="form-control" name="dest_state" required>
               <?php include dirname(__FILE__)."/states.php"; ?>
              </select>
            </div>


            <div class="col-md-3">
              <label>Zip/Postal Code*</label> <input class="form-control" name="dest_postal_code" type="text" required>
            </div>


            <div class="col-md-3">
              <label>Federal Tax ID</label> <input class="form-control" name="dest_federal_tax_id" type="text" pattern="[0-9]{1,}" title="Numeric.">
            </div>
          </div>
      
        </div>
        <div class="modal-footer">
          <div>
            <a href="javascript:;"><i class="fa fa-trash"></i></a>
            <button class="btn btn-primary" type="submit">SAVE</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>