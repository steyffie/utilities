
<div class="register-box">
  <div class="box-body">
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
        <?php echo validation_errors(); ?>
      </div>
    </div>
  <div class="register-logo">
    <b>SITE</b>&nbsp;Student Form
  </div>
  <div class="register-box-body">
    <?php echo form_open('student/StudentBoard/student_form')?>
    <p class="login-box-msg">Register your Student Info</p>
    <form action="../../index.html" method="post">
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-building-o"></i>
          </div>
          <input type="text"  class="form-control" name="studid" placeholder="Student ID No." required>
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-user"></i>
          </div>
          <input type="text" class="form-control" name="studfname" placeholder="First Name" required>
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-user"></i>
          </div>
         <input type="text" class="form-control" name="studlname" placeholder="Last Name" required>
        </div>
      </div>
      <label>BSIT/Year/Section</label>
      <div class="row">
        <div class="col-lg-6">
          <div class="input-group">
            <input type="text" class="form-control" name="year" placeholder="Year" required>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="input-group">
            <input type="text" class="form-control" name="section" placeholder="Section" required>
          </div>
        </div>
      </div>
      <br>
      <div class="form-group">
        <select name="gender" class="form-control">
          <optgroup label="GENDER">
            <option value="Female">Female</option>
            <option value="Male">Male</option>
          </optgroup>
        </select>
      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
          </div>
          <input type="text" class="form-control" name="birthdate" data-inputmask="'alias': 'yyyy/mm/dd'" placeholder="birthdate" data-mask required>
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-map"></i>
          </div>
          <input type="text" class="form-control" name="studaddress" placeholder="Address" required>
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-envelope"></i>
          </div>
          <input type="text" class="form-control" name="studemail" placeholder="Student Email Address" required>
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-phone"></i>
          </div>
          <input type="text" class="form-control" name="studcontactno" placeholder="Student Contact Number" required>
        </div>
      </div>
      <label>IN CASE OF EMERGENCY CONTACT</label>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon"> 
            <i class="fa fa-user"></i>
          </div>
          <input type="text" name="personfname" class="form-control" placeholder="First Name" required>
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-user"></i>
          </div>
          <input type="text" name="personlname" class="form-control" placeholder="Last Name" required>
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-users"></i>
          </div>
          <input type="text" name="studrelation" class="form-control" placeholder="Relation to Student" required>
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-map"></i>
          </div>
          <input type="text" name="personaddress" class="form-control" placeholder="Person's Address" required>
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-phone"></i>
          </div>
          <input type="text" name="personcontactno" class="form-control" placeholder="Person's Contact Number" required>
        </div>
      </div>
      <div class="form-group">
        <select name="studstatus" class="form-control">
          <optgroup label="School Status">
            <option value="Enrolled">Enrolled</option>
            <option value="Not Enrolled">Not Enrolled</option>
          </optgroup>
        </select>
      </div>
      <a href="<?php echo site_url('student/students'); ?>" class="btn btn-warning btn-flat">Cancel</a>
      <button type="submit" class="btn btn-primary btn-flat pull-right">Register</button>
    </form>
  </div>
</div>
