<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>KSPS BMT AT-TAQWA__Log in</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!--css-->
    <link href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url()?>assets/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
    <!--end of css-->

  </head>
  <body class="login-page" background="<?php echo base_url();?>assets/img/flower-pattern-wallpaper-3.jpg">
    <div class="login-box">
      <div class="login-logo">
        <b>KSPS AT-TAQWA</b>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Silahkan Login</p>
        <?php echo form_open("c_login/cek_login"); ?>
          <div class="form-group has-feedback">
            <input name="username" id="username" type="text" class="form-control" placeholder="Username"/>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" id="password" name="password" class="form-control" placeholder="Password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <button  type="submit" name="login" value="Login" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
        <?php echo form_close(); ?>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!--script template-->
    <script src="<?php echo base_url();?>assets/plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!--end of script template-->

    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>