<div class="modal fade" id="transporterModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <a role="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="cls rounded white"></span>
        </a>
          
        <h4 class="modal-title" id="myModalLabel">ADD A NEW TRANSPORTER</h4>
      </div>
      <form action="transporter.php" method="post" name="add-new-transporter">
        <div class="modal-body">

          <div class="sub-heading">
            Got a new <span class="highlight">TRANSPORTER?</span>
          </div>


          <div class="row align-items-end">
            <div class="col-md-6">
              <label>Transporter Name*</label> <input class="form-control" name="trans_company" type="text" required>
            </div>


            <div class="col-md-6">
              <label>Contact Name*</label> <input class="form-control" name="trans_company_contact" type="text" required>
            </div>
          </div>


          <div class="row align-items-end">
            <div class="col-md-3">
              <label>Phone*</label> <input class="form-control" name="trans_company_phone" type="tel" required>
            </div>


            <div class="col-md-3">
              <label>Fax</label> <input class="form-control" name="trans_company_fax" type="tel">
            </div>


            <div class="col-md-6">
              <label>Email*</label> <input class="form-control" name="trans_company_email" type="email" required>
            </div>
          </div>
         
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" type="submit">SAVE</button>
        </div>
      </form>
    </div>
  </div>
</div>