<div class="modal fade" id="billingModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <a role="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="cls rounded white"></span>
        </a>
          
        <h4 class="modal-title" id="myModalLabel">ADD NEW BILLING DETAILS</h4>
      </div>
      <form action="billing.php" method="post" name="add-new-billing">
        <div class="modal-body">

          <div class="sub-heading">
            Changing who pays the <span class="highlight">INVOICE</span> below
          </div>


          <div class="row align-items-end">
            <div class="col-md-6">
              <label>Name on Invoice</label> <input class="form-control" name="bill_name" type="text">
            </div>


            <div class="col-md-6">
              <label>Contact Name</label> <input class="form-control" name="bill_contact" type="text">
            </div>
          </div>


          <div class="row align-items-end">
            <div class="col-md-3">
              <label>Phone</label> <input class="form-control" name="bill_phone" type="tel">
            </div>


            <div class="col-md-3">
              <label>Fax</label> <input class="form-control" name="bill_fax" type="tel">
            </div>


            <div class="col-md-6">
              <label>Email</label> <input class="form-control" name="bill_email" type="email">
            </div>
          </div>


          <div class="row align-items-end">
            <div class="col-md-3">
              <label>Unit</label> <input class="form-control" name="bill_unit" type="text">
            </div>


            <div class="col-md-9">
              <label>Address</label> <input class="form-control" name="bill_address" type="text">
            </div>
          </div>


          <div class="row align-items-end">
            <div class="col-md-3">
              <label>City</label> <input class="form-control" name="bill_city" type="text">
            </div>


            <div class="col-md-3">
              <label>State/Province</label> <select class="form-control" name="bill_state">
               <?php include dirname(__FILE__)."/states.php"; ?>
              </select>
            </div>


            <div class="col-md-3">
              <label>Zip/Postal Code</label> <input class="form-control" name="bill_postal_code" type="text">
            </div>


            <div class="col-md-3">
              <label>Send Via</label> <input class="form-control" name="bill_send_via" type="text">
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