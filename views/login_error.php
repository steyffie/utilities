<div class="login-box">
  <div class="login-logo">
    <b>SITE</b>Utilities
  </div>
  <div class="login-box-body">
    <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-ban"></i> Alert!</h4>
      Invalid Username or Password!
    </div>
    <?php echo validation_errors(); ?>
    <?php echo form_open('login/login_form'); ?>
    <form>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo set_value('username'); ?>" autofocus>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="password" required><?php echo form_error('password'); ?>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
      </div>
    </form>
    <a href=href="<?php echo base_url()?>user_registration" class="text-center">Register a new membership</a>
  </div>
</div>