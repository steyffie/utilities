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
                User Profile not updated!
              </div>
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                Successfully updated!
              </div>
            </div>
        </section>
          <div id="detail" class="box box-primary">
            <?php foreach ($single_student as $student): ?>
            <div class="box-header with-border">
              <h3>Edit User Profile</h3>
            </div>
            <div class="box-body">
              <form role="form" method="post">
                <div class="box-body">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                      </div>
                      <input type="text" class="form-control" name="adminfname" value="<?php echo $student->adminfname; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                      </div>
                      <input type="text" class="form-control" name="adminlname" value="<?php echo $student->adminlname; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                      </div>
                      <input type="text" class="form-control" name="username" value="<?php echo $student->username; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-lock"></i>
                      </div>
                      <input type="password" class="form-control" name="password" value="<?php echo $student->password; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" name="birthdate"value="<?php echo $student->birthdate; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                      </div>
                      <input type="text" class="form-control" name="adminemail" value="<?php echo $student->birthdate; ?>">
                    </div>
                  </div>
                  <div class="form-group ">
                    <select class="form-control" name="gender" value="<?php echo $student->gender; ?>">
                      <option>Male</option>
                      <option>Female</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-map"></i>
                      </div>
                      <input type="text" class="form-control" name="adminaddress" value="<?php echo $student->adminaddress; ?>">
                    </div>
                  </div>
                </div>
                <div class="box-footer">
                  <button type="submit" class="btn btn-default">Cancel</button>
                  <button type="submit" id="submit" class="btn btn-primary pull-right" value="Update" name="dsubmit">Update</button>
                </div>
              </form>
            <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

