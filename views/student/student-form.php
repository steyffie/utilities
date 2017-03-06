<body class="hold-transition register-page">
  <button class="btn btn-default" data-toggle="modal" data-target="#notifyModal"><span class="fa fa-times"></span></button>
  <div class="register-box">
    <div class="box-body">
        <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-ban"></i> Alert!</h4>
          Student Information not added.. etc etc
        </div>
      </div>
    <div class="register-logo">
      <b>SITE</b>&nbsp;Student Form
    </div>
    <div class="register-box-body">
      <p class="login-box-msg">Register your Student Info</p>
      <form action="../../index.html" method="post">
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-building-o"></i>
            </div>
            <input type="text" class="form-control" placeholder="Student ID No.">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-user"></i>
            </div>
            <input type="text" class="form-control" placeholder="Full Name">
          </div>
        </div>
        <label>BSIT/Year/Section</label>
        <div class="row">
          <div class="col-lg-6">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="year">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="section">
            </div>
          </div>
        </div>
        <br>
        <div class="form-group">
          <select class="form-control">
            <optgroup label="GENDER">
              <option>Female</option>
              <option>Male</option>
            </optgroup>
          </select>
        </div>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
            </div>
            <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" placeholder="birthdate" data-mask>
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-map"></i>
            </div>
            <input type="text" class="form-control" placeholder="Address">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-envelope"></i>
            </div>
            <input type="text" class="form-control" placeholder="Student Email Address">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-phone"></i>
            </div>
            <input type="text" class="form-control" placeholder="Student Contact Number">
          </div>
        </div>
        <div class="form-group">
          <select class="form-control">
            <optgroup label="School Status">
              <option>Enrolled</option>
              <option>Not Enrolled</option>
            </optgroup>
          </select>
        </div>
        <label>IN CASE OF EMERGENCY CONTACT</label>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-user"></i>
            </div>
            <input type="text" class="form-control" placeholder="Person's Name">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-users"></i>
            </div>
            <input type="text" class="form-control" placeholder="Relation to Student">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-map"></i>
            </div>
            <input type="text" class="form-control" placeholder="Person'sAddress">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-phone"></i>
            </div>
            <input type="text" class="form-control" placeholder="Person's Contact Number">
          </div>
        </div>
        <a href="<?php echo site_url('student/students'); ?>" class="btn btn-default btn-flat">Back</a>
        <button type="submit" class="btn btn-primary btn-flat pull-right">Register</button>
      </form>
    </div>
  </div>
  <!--notify modal-->
<div class="modal fade" id="notifyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Admin Pass</h4>
      </div>
      <div class="modal-body">
        <form action="#" method="post">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-key"></i>
            </div>
            <input type="text" class="form-control" placeholder="Enter Key" required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <a href="<?php echo base_url(); ?>" class="btn btn-primary">ok</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--jquery js-->
<script src="<?php echo base_url('assets/resources/vendors/plugins/jQuery/jquery-2.2.3.min.js'); ?>"></script>
<!--bootstrap js-->
<script src="<?php echo base_url('assets/resources/vendors/bootstrap/js/bootstrap.min.js'); ?>"></script>
<!-- Select2 -->
<script src="<?php echo base_url('assets/resources/vendors/plugins/select2/select2.full.min.js'); ?>"></script>
<!-- InputMask -->
<script src="<?php echo base_url('assets/resources/vendors/plugins/input-mask/jquery.inputmask.js'); ?>"></script>
<script src="<?php echo base_url('assets/resources/vendors/plugins/input-mask/jquery.inputmask.date.extensions.js'); ?>"></script>
<script src="<?php echo base_url('assets/resources/vendors/plugins/input-mask/jquery.inputmask.extensions.js'); ?>"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url('assets/resources/vendors/plugins/daterangepicker/daterangepicker.js'); ?>"></script>
<!-- bootstrap datepicker -->
<script src="echo base_url('assets/resources/vendors/plugins/datepicker/bootstrap-datepicker.js'); ?>"></script>
<!-- bootstrap color picker -->
<script src="echo base_url('assets/resources/vendors/plugins/colorpicker/bootstrap-colorpicker.min.js'); ?>"></script>
<!-- bootstrap time picker -->
<script src="echo base_url('assets/resources/vendors/plugins/timepicker/bootstrap-timepicker.min.js'); ?>"></script>
<!--slimscroll js-->
<script src="<?php echo base_url('assets/resources/vendors/plugins/slimScroll/jquery.slimscroll.min.js'); ?>"></script>
<!-- iCheck 1.0.1 -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<!--fastclick js-->
<script src="<?php echo base_url('assets/resources/vendors/plugins/fastclick/fastclick.js'); ?>"></script>
<!--app js-->
<script src="<?php echo base_url('assets/resources/vendors/dist/js/app.min.js'); ?>"></script>
<!--demo stuff-->
<script src="<?php echo base_url('assets/resources/vendors/dist/js/demo.js'); ?>"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
</body>
</html>