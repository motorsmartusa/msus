<div class="modal fade" id="titleModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <a role="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="cls rounded white"></span>
        </a>
          
        <h4 class="modal-title" id="myModalLabel">ADD NEW TITLE DETAILS</h4>
      </div>
      <div class="modal-body">
        <form action="title.php" method="post" name="add-new-title">

            <div class="sub-heading">
              Where would you like your <span class="highlight">TITLE</span> to go?
            </div>


            <div class="row align-items-end">
              <div class="col-md-6">
                <label>Company Name</label> <input class="form-control" name="title_name" type="text">
              </div>


              <div class="col-md-6">
                <label>Contact Name</label> <input class="form-control" name="title_contact" type="text">
              </div>
            </div>


            <div class="row align-items-end">
              <div class="col-md-3">
                <label>Phone</label> <input class="form-control" name="title_phone" type="tel">
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
                <label>Address</label> <input class="form-control" name="title_address" type="text">
              </div>
            </div>


            <div class="row align-items-end">
              <div class="col-md-3">
                <label>City</label> <input class="form-control" name="title_city" type="text">
              </div>


              <div class="col-md-3">
                <label>State/Province</label> <select class="form-control" name="title_state">
                  <option>
                  </option>
                </select>
              </div>


              <div class="col-md-3">
                <label>Zip/Postal Code</label> <input class="form-control" name="title_postal_code" type="text">
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