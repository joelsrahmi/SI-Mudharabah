              </div><!--/.box box-primary -->
            </div><!--/.row -->
          </div><!-- /.container -->  
        </div><!--/.content -->
      </div><!-- /.content-wrapper -->
      
      <footer class="main-footer">
        <div class="container">
          <div class="pull-right hidden-xs">
            <b>Version</b> 1.0
          </div>
          <strong>Copyright &copy; 2015 BMT AT-TAQWA.</strong> All rights reserved.
        </div><!-- /.container -->
      </footer>
    </div><!-- ./wrapper -->

    <!--script-->
    <script src="<?php echo base_url();?>assets/plugins/jQuery/jQuery-2.1.4.min.js"</script> 
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>   
    <script src="<?php echo base_url();?>assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>  
    <script src="<?php echo base_url();?>assets/plugins/fastclick/fastclick.min.js"></script>  
    <script src="<?php echo base_url();?>assets/dist/js/app.min.js" type="text/javascript"></script>  
    <script src="<?php echo base_url();?>assets/dist/js/demo.js" type="text/javascript"></script>
    <!--page script-->
     <!-- InputMask -->
    <script src="<?php echo base_url();?>assets/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()."assets/";?>assets/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- bootstrap time picker -->
    <script src="<?php echo base_url()."assets/";?>assets/plugins/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script>
    <!--end of scipt--> 

    <!-- Page script -->
    <script type="text/javascript">
      $(function () {
        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});

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

        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
      });
    </script>
  </body>
</html>