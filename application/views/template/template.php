<body class="skin-blue layout-top-nav">
  <div class="wrapper">
    <header class="main-header">               
      <nav class="navbar navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <a href="#" class="navbar-brand"><b><?php echo $this->session->userdata('level');?></b></a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
          </div>
<?php if($this->session->userdata('level')=='Admin' && $this->session->->userdata('status')=='Aktif') 
}?>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
            <ul class="nav navbar-nav">
              <!--Menu for Admin-->
              <li><a href="<?php echo base_url()?>c_admin/index">Home</a></li>
              <li><a href="<?php echo base_url()?>c_admin/tampil_pegawai">Pegawai</a></li>
              <li><a href="<?php echo base_url()?>c_admin/tampil_log_pegawai">Log Pegawai</a></li>
              <!--End of menu Admin-->
            </ul>
            
            <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
              </div>
            </form>                          
          </div><!-- /.navbar-collapse -->

          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src=""/><!--foto pegawai-->
                  <span class="hidden-xs"><?php echo $this->session->userdata('nama');?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="" alt="User Image" /><!--foto pegawai-->
                    <p>
                      <?php echo $this->session->userdata('nama');?> - Admin
                    </p>
                  </li>
                  <?php }
                  elseif ($this->session->userdata('level')=='CS' && $this->session->->userdata('status')=='Aktif') 
                  {?>
                              <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src=""/><!--foto pegawai-->
                  <span class="hidden-xs"><?php echo $this->session->userdata('nama');?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="" alt="User Image" /><!--foto pegawai-->
                    <p>
                      <?php echo $this->session->userdata('nama');?> - CS
                    </p>
                  </li>
                  <?php         }
                   ?>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                  </li>
                </ul>
              </li>
              <li><a href="<?php echo base_url()?>c_admin/logout">Logout</a></li><!--end of user profile>
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