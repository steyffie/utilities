<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?php echo site_url('subadmin/Dashboard'); ?>" class="navbar-brand"><b>SITE</b>Utilities</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo site_url('subadmin/Dashboard'); ?>">Students Registered</a></li>
            <li><a href="<?php echo site_url('subadmin/Event'); ?>">Events</a></li>
          </ul>
        </div>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
          <li><a href="<?php echo site_url('Profile/subProfile'); ?>">Profile</a></li>
            <li><a href="<?php echo base_url('login/logout'); ?>">Sign Out</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>