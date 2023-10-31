 <!--Add user-->
 <div class="modal fade" id="modalRegisterForm2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <form action="create_user.php" method="POST">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold"><i class="fas fa-user-plus"></i> Add User Employee</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body mx-3">
            <div class="md-form mb-5">
      

            </div>
            <div class="">
              <select name="designation" id="designation" class="form-control validate">
                <option value="SMC">SMC</option>
                <option value="Legal">&nbsp;&nbsp;&nbsp;&nbsp;Legal</option>
                <option value="Welfare">&nbsp;&nbsp;&nbsp;&nbsp;Welfare</option>
                <option value="HR">&nbsp;&nbsp;&nbsp;&nbsp;Human Resource</option>
                <option value="Skilled">&nbsp;&nbsp;&nbsp;&nbsp;Skilled</option>
                <option value="Marketing(SMC)">&nbsp;&nbsp;&nbsp;&nbsp;Marketing(SMC)</option>
                <option value="">&nbsp;&nbsp;&nbsp;&nbsp;</option>
                <option value="SMC">Crempco</option>
              </select>
              <label for="desigantion">Office</label>
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
              <input type="text" id="orangeForm-name" name="name" class="form-control validate">
              <label data-error="wrong" data-success="right" for="orangeForm-name">Your name</label>
            </div>
            <div class="md-form mb-5">
              <i class="fas fa-envelope prefix grey-text"></i>
              <input type="email" id="orangeForm-email" name="email_address" class="form-control validate" required="">
              <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label>
            </div>

            <div class="md-form mb-4">
              <i class="fas fa-lock prefix grey-text"></i>
              <input type="password" id="orangeForm-pass" name="user_password" class="form-control validate"
                required="">
              <label data-error="wrong" data-success="right" for="orangeForm-pass">Your password</label>
            </div>
            <div class="md-form mb-4">
              <i class="fas fa-user prefix grey-text"></i>
              <input type="text" id="orangeForm-pass" name="user_status" value="Employee" class="form-control validate"
                readonly="">
              <label data-error="wrong" data-success="right" for="orangeForm-pass">User Status</label>
            </div>
          </div>
          <div class="modal-footer d-flex justify-content-center">
            <button class="btn btn-info" name="reguser">Sign up</button>
          </div>
        </div>
      </div>
  </div>
  </form>
  <!--end modaluser-->