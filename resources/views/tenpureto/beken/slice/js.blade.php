<!-- jQuery 3 -->
<script src="{{asset('tenpureto/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('tenpureto/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('tenpureto/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{asset('tenpureto/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{asset('tenpureto/bower_components/morris.js/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('tenpureto/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('tenpureto/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('tenpureto/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('tenpureto/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('tenpureto/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('tenpureto/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('tenpureto/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('tenpureto/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('tenpureto/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('tenpureto/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('tenpureto/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('tenpureto/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('tenpureto/dist/js/demo.js')}}"></script>



<!-- DataTables -->
<script src="{{asset('tenpureto/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('tenpureto/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>









<!-- Page script -->
<script>
  $(function () {
    //Date picker
    // $('#datepicker').datepicker({
    //   autoclose: true,
    //   format: 'yyyy-mm-dd',
    //   todayHighlight:'TRUE',
    // })
    //Date picker
    $('.datepicker').datepicker({ format: "yyyy-mm-dd", todayHighlight:"true", autoclose: "true" });

  });
</script>

<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>






