<div class="modal fade" id="titleModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <a role="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="cls rounded white"></span>
        </a>
          
        <h4 class="modal-title" id="myModalLabel">ADD NEW TITLE DETAILS</h4>
      </div>
      <form action="title.php" method="post" name="add-new-title">
        <div class="modal-body">
          
          <div class="sub-heading">
            Where would you like your <span class="highlight">TITLE</span> to go?
          </div>


          <div class="row align-items-end">
            <div class="col-md-6">
              <label>Company Name*</label> <input class="form-control" name="title_name" type="text" required>
            </div>


            <div class="col-md-6">
              <label>Contact Name*</label> <input class="form-control" name="title_contact" type="text" required>
            </div>
          </div>


          <div class="row align-items-end">
            <div class="col-md-3">
              <label>Phone*</label> <input class="form-control" name="title_phone" type="tel" required>
            </div>


            <div class="col-md-3">
              <label>Fax</label> <input class="form-control" name="title_fax" type="tel">
            </div>


            <div class="col-md-6">
              <label>Email</label> <input class="form-control" name="title_email" type="email">
            </div>
          </div>


          <div class="row align-items-end">
            <div class="col-md-3">
              <label>Unit</label> <input class="form-control" name="title_unit" type="text">
            </div>


            <div class="col-md-9">
              <label>Address*</label> <input class="form-control" name="title_address" type="text" required>
            </div>
          </div>


          <div class="row align-items-end">
            <div class="col-md-3">
              <label>City*</label> <input class="form-control" name="title_city" type="text" required>
            </div>


            <div class="col-md-3">
              <label>State/Province*</label> <select class="form-control" name="title_state" required>
                <option>
                </option>
              </select>
            </div>


            <div class="col-md-3">
              <label>Zip/Postal Code*</label> <input class="form-control" name="title_postal_code" type="text" required>
            </div>


            <div class="col-md-3">
            
            </div>
          </div>
          
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" type="submit">ADD</button>
        </div>
      </form>
    </div>
  </div>
</div>