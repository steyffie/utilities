<div class="content-wrapper">
  <div class="container">
    <section class="content">
      <div class="row">
        <div class="col-xs-hidden col-sm-hidden col-md-3 col-lg-3">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <section class="content-header">
            <div class="box-body">
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                <?php echo validation_errors(); ?>
              </div>
            </div>
          </section>
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3>Create Admin Account</h3>
            </div>
            <div class="box-body">
            <?php echo form_open('superadmin/Dashboard/create_admin'); ?>
              <form role="form">
                <div class="box-body">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                      </div>
                      <input type="text" class="form-control" name="adminfname" placeholder="First Name" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                      </div>
                      <input type="text" class="form-control" name="adminlname" placeholder="Last Name" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                      </div>
                      <input type="text" id="username" class="form-control" name="username" placeholder="Username" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-lock"></i>
                      </div>
                      <input type="password" id="password" class="form-control" name="password" placeholder="password" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control" name="birthdate" data-inputmask="'alias': 'mm/dd/yyyy'" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                      </div>
                      <input type="text" class="form-control" name="adminemail" placeholder="Email Address" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <select name="gender" class="form-control" required>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-map"></i>
                      </div>
                      <input type="text" name="adminaddress" class="form-control" placeholder="Address" required>
                    </div>
                  </div>
                </div>
                <div class="box-footer">
                  <button type="submit" class="btn btn-default">Cancel</button>
                  <button type="submit" class="btn btn-primary pull-right">Create</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>




