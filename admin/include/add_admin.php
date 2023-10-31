<!--Add admin-->
<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <form action="create_Admin.php" method="POST">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold"><i class="fas fa-user-plus"></i> Add Admin</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-3">
          <div class="md-form mb-5">
          </div>

          <div class="">
            <select name="office" id="office" class="form-control validate">
              <option value="">all</option>
              <option value="SMC">SMC</option>
              <option value="SMC">Crempco</option>
            </select>
            <label for="office">Office</label>
          </div>
          <div class="">
            <select name="designation" id="designation" class="form-control validate">
              <option value="Legal">Legal</option>
              <option value="Welfare">Welfare</option>
              <option value="HR">Human Resource</option>
              <option value="Skilled">Skilled</option>
              <option value="Skilled">Achrom</option>
              <option value="Marketing(SMC)">Marketing</option>
            </select>
            <label for="desigantion">Designation</label>
          </div>

          <div class="md-form mb-5">
            <i class="fas fa-user prefix grey-text"></i>
            <input type="text" id="orangeForm-name" name="name" class="form-control validate" required="">
            <label data-error="wrong" data-success="right" for="orangeForm-name">Your name</label>
          </div>

          <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="email" id="orangeForm-email" name="admin_user" class="form-control validate" required="">
            <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label>
          </div>

          <div class="md-form mb-4">
            <i class="fas fa-lock prefix grey-text"></i>
            <input type="password" id="orangeForm-pass" name="admin_password" class="form-control validate" required="">
            <label data-error="wrong" data-success="right" for="orangeForm-pass">Your password</label>
          </div>

          <div class="">
            <select name="userStatus" id="admin_status" class="form-control validate">
              <option value="Admin">Admin</option>
              <option value="Employee">Employee</option>
            </select>
            <label for="desigantion">User Status</label>
          </div>

        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button class="btn btn-info" name="reg">Sign up</button>
        </div>
      </div>
    </div>
</div>
</form>
<!--end modaladmin-->