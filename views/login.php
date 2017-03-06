<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo base_url();?>"><b>SITE</b>Utilities</a>
  </div>
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    <?php echo form_open('login/login_form'); ?>
    <form>
        <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="username" required>
        <?php echo form_error('username'); ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="password" required>
        <?php echo form_error('password'); ?>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
      </div>
    </form>
  </div>