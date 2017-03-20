<div class="register-box">
  <div class="box-body">
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
        Successfully Created!
      </div>
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
    <?php echo form_open('student/StudentBoard')?>
    <p class="login-box-msg">Register your Student Info</p>
    <form action="../../index.html" method="post">
      <div class="form-group">
        <label for="studid">Student ID No.</label> 
        <input type="text"  class="form-control" name="studid" id="studid" placeholder="Student ID No." required>
      </div>
      <div class="form-group">
        <label for="studfname">First Name</label>
        <input type="text" class="form-control" name="studfname" id="studfname" placeholder="First Name" required>
      </div>
      <div class="form-group">
        <label for="studlname">Last Name</label>
        <input type="text" class="form-control" name="studlname" id="studlname" placeholder="Last Name" required>
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
        <label>Gender&nbsp;&nbsp;&nbsp;</label>
        <label class="radio-inline">
          <input type="radio" name="gender" value="Male"> Male
        </label>
        <label class="radio-inline">
          <input type="radio" name="gender" value="Female"> Female
        </label>
      </div>
      <div class="form-group">
        <label for="birthdate">Birthdate</label>
        <input type="text" class="form-control" name="birthdate" id="birthdate" placeholder="MM/DD/YYYY" required>
      </div>
      <div class="form-group">
      <label for="studaddress">Address</label>
        <input type="text" class="form-control" name="studaddress" id="studaddress" placeholder="Address" required>
      </div>
      <div class="form-group">
        <label for="studemail">Email</label>
        <input type="text" class="form-control" name="studemail" id="studemail" placeholder="Student Email Address" required>
      </div>
      <div class="form-group">
        <label for="studcontactno">Student Contact Number</label>
        <input type="text" class="form-control" name="studcontactno" id="studcontactno" placeholder="Student Contact Number" required>
      </div>
      <h4>IN CASE OF EMERGENCY CONTACT</h4>
      <div class="form-group">
        <label for="personfname">Person First Name</label>
        <input type="text" name="personfname" class="form-control" id="personfname" placeholder="First Name" required>
      </div>
      <div class="form-group">
        <label for="personlname">Person Last Name</label>
        <input type="text" name="personlname" class="form-control" id="personlname" placeholder="Last Name" required>
      </div>
      <div class="form-group">
        <label for="studrelation">Relation to Student</label>
        <input type="text" name="studrelation" class="form-control" id="studrelation" placeholder="Relation to Student" required>
      </div>
      <div class="form-group">
        <label for="personaddress">Person's Address</label>
        <input type="text" name="personaddress" class="form-control" id="personaddress" placeholder="Person's Address" required>
      </div>
      <div class="form-group">
        <label for="personcontactno">Person's Contact Number</label>
        <input type="text" name="personcontactno" class="form-control" id="personcontactno" placeholder="Person's Contact Number" required>
      </div>
      <a href="<?php echo site_url('student/students'); ?>" class="btn btn-warning btn-flat">Cancel</a>
      <button type="submit" class="btn btn-primary btn-flat pull-right">Register</button>
    </form>
  </div>
</div>
