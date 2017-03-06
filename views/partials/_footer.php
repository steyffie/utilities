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