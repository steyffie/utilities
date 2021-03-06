<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?php echo site_url('superadmin/Admin'); ?>" class="navbar-brand"><b>SITE</b>Utilities</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo site_url('superadmin/Admin'); ?>">Admins Registered</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Logs <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo site_url('superadmin/Logs/admin_logs'); ?>">Admin Logs</a></li>
                <li><a href="<?php echo site_url('superadmin/Logs/event_logs'); ?>">Event Logs</a></li>
                <li><a href="<?php echo site_url('superadmin/logs/sms_logs'); ?>">SMS Logs</a></li>
              </ul>
            </li>
            <li>
              <a href="<?php echo site_url('recovery/Recovery'); ?>">
                Password Recovery
                <span class="label label-danger">10</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
          <li><a href="<?php echo site_url('Profile/supProfile'); ?>">Profile</a></li>
            <li><a href="<?php echo base_url('login/logout'); ?>">Sign Out</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>