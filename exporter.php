<div class="modal fade" id="exporterModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <a role="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="cls rounded white"></span>
        </a>
          
        <h4 class="modal-title" id="myModalLabel">ADD A NEW EXPORTER</h4>
      </div>
      <form action="exporter.php" method="post" name="add-new-exporter">
        <div class="modal-body">
          
          <div class="sub-heading">
            Got a new <span class="highlight">EXPORTER?</span>
          </div>


          <div class="row align-items-end">
            <div class="col-md-6">
              <label>Exporter (Shipper)*</label> <input class="form-control" name="exp_owner" type="text" required>
            </div>


            <div class="col-md-6">
              <label>Contact Name*</label> <input class="form-control" name="exp_contact" type="text" required>
            </div>
          </div>


          <div class="row align-items-end">
            <div class="col-md-3">
              <label>Phone*</label> <input class="form-control" name="exp_phone" type="tel" required>
            </div>


            <div class="col-md-3">
              <label>Fax</label> <input class="form-control" name="exp_fax" type="tel">
            </div>


            <div class="col-md-6">
              <label>Email</label> <input class="form-control" name="exp_email" type="email">
            </div>
          </div>


          <div class="row align-items-end">
            <div class="col-md-3">
              <label>Unit</label> <input class="form-control" name="exp_unit" type="text">
            </div>


            <div class="col-md-9">
              <label>Address*</label> <input class="form-control" name="exp_address" type="text" required>
            </div>
          </div>


          <div class="row align-items-end">
            <div class="col-md-3">
              <label>City*</label> <input class="form-control" name="exp_city" type="text" required>
            </div>


            <div class="col-md-3">
              <label>State/Province*</label> <select class="form-control" name="exp_state" required>
               <?php include dirname(__FILE__)."/states.php"; ?>
              </select>
            </div>


            <div class="col-md-3">
              <label>Zip/Postal Code*</label> <input class="form-control" name="exp_postal_code" type="text" required>
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
