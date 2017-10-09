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
                <option selected>--</option>
                <option>Alberta</option>
                <option>British Columbia</option>
                <option>Manitoba</option>
                <option>New Brunswick</option>
                <option>Newfoundland</option>
                <option>Nova Scotia</option>
                <option>Nunavut</option>
                <option>Ontario</option>
                <option>Prince Edward Island</option>
                <option>Quebec</option>
                <option>Saskatchewan</option>
                <option>Northwest Territories</option>
                <option>Yukon Territory</option>
                <option>Alaska</option>
                <option>Alabama</option>
                <option>Arkansas</option>
                <option>Arizona</option>
                <option>California</option>
                <option>Colorado</option>
                <option>Connecticut</option>
                <option>District of Columbia</option>
                <option>Delaware</option>
                <option>Florida</option>
                <option>Georgia</option>
                <option>Hawaii</option>
                <option>Iowa</option>
                <option>Idaho</option>
                <option>Illinois</option>
                <option>Indiana</option>
                <option>Kansas</option>
                <option>Kentucky</option>
                <option>Louisiana</option>
                <option>Massachusetts</option>
                <option>Maryland</option>
                <option>Maine</option>
                <option>Michigan</option>
                <option>Minnesota</option>
                <option>Missouri</option>
                <option>Mississippi</option>
                <option>Montana</option>
                <option>North Carolina</option>
                <option>North Dakota</option>
                <option>Nebraska</option>
                <option>New Hampshire</option>
                <option>New Jersey</option>
                <option>New Mexico</option>
                <option>Nevada</option>
                <option>New York</option>
                <option>Ohio</option>
                <option>Oklahoma</option>
                <option>Oregon</option>
                <option>Pennsylvania</option>
                <option>Rhode Island</option>
                <option>South Carolina</option>
                <option>South Dakota</option>
                <option>Tennessee</option>
                <option>Texas</option>
                <option>Utah</option>
                <option>Virginia</option>
                <option>Vermont</option>
                <option>Washington</option>
                <option>West Virginia</option>
                <option>Wisconsin</option>
                <option>Wyoming</option>
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