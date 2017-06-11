<body class="skin-blue layout-top-nav">
  <div class="wrapper">
    <header class="main-header">               
      <nav class="navbar navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <a href="#" class="navbar-brand"><b>CS</b></a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
            <ul class="nav navbar-nav">
              <!--Menu for CS-->
                <li><a href="<?php echo base_url()?>c_cs/index">Home</a></li>
                <li><a href="<?php echo base_url()?>c_cs/tampilRekening">Rekening Anggota</a></li>
                <li><a href="<?php echo base_url()?>c_cs/listPengajuanAkad">List Pengajuan Akad</a></li>
                <li><a href="<?php echo base_url()?>c_cs/tampilAdministrasi">Administrasi</a></li>
                <!--End of menu CS-->
            </ul>                          
          </div><!-- /.navbar-collapse -->

          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="hidden-xs"><?php echo $this->session->userdata('username');?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <p>
                      <?php echo $this->session->userdata('username');?> - CS
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                  </li>
                </ul>
              </li>
              <li><a href="<?php echo base_url()?>c_admin/logout">Logout</a></li><!--end of user profile-->
            </ul>
          </div><!-- /.navbar-custom-menu -->
        </div><!-- /.container-fluid -->
      </nav>
    </header>
    <div class="content-wrapper">
      <!--this is form-->
      <div class="content">
        <div class="container">
          <div class="row">
            <div class="box box-primary">