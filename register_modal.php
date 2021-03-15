<!-- Register Modal -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="registerLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4>Registration</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <form method="POST" action="" class="form-horizontal" enctype="multipart/form-data" >
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group col-12">
                  <label>User Full Name</label>
                  <input type="text" name="user_name" required placeholder="Enter Full Name" class="form-control"/>
                </div>
                <div class="form-group col-12">
                  <label>User Email</label>
                  <input type="email" name="user_email" required placeholder="Enter Email" class="form-control"/>
                </div>
                <div class="form-group col-12">
                  <label>User Password</label>
                  <input type="pass" name="user_pass" required placeholder="Enter Password" class="form-control"/>
                </div>
                <div class="form-group col-12">
                  <label>User Mobile</label>
                  <input type="tel" name="user_tel" required value="+88" placeholder="Enter Contact Number" class="form-control"/>
                </div>
                <div class="form-group col-12">
                  <label>User Village/Holding No.</label>
                  <input type="text" name="user_holding" required placeholder="Enter Village/Holding Number" class="form-control"/>
                </div>
                <div class="form-group col-12">
                  <label>User Post Office</label>
                  <input type="text" name="user_post" required placeholder="Enter Post Office" class="form-control"/>
                </div>
                <div class="form-group col-12">
                  <label>User Thana</label>
                  <input type="text" name="user_thana" required placeholder="Enter Thana" class="form-control"/>
                </div>
                <div class="form-group col-12">
                  <label>User District</label>
                  <input type="text" name="user_dist" required placeholder="Enter District" class="form-control"/>
                </div>
                <div class="form-group col-12">
                  <label>User Type</label> <br>
                  <label class="form-check-label">
                   <input type="checkbox" name="user_admin" /> Administrator
                  </label> <br>
                  <label class="form-check-label">
                   <input type="checkbox" name="user_vendor" /> Seller/Vendor
                  </label> <br>
                  <label class="form-check-label">
                   <input type="checkbox" name="user_customer" /> Customer
                  </label>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Register</a>
          <input type="hidden" name="action" value="register">
        </div>
      </form>
    </div>
  </div>
</div>