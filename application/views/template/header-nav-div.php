<body class="skin-blue layout-top-nav">
  <div class="wrapper">
    <header class="main-header">               
      <nav class="navbar navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <a href="#" class="navbar-brand"><b><?php echo $this->session->userdata('jabatan');?></b></a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
            <ul class="nav navbar-nav">
              <!--Menu for CS-->
              <?php if($this->session->userdata('jabatan')=='CS' && $this->session->userdata('status')=='aktif' )
              {?>
                <li><a href="<?php echo base_url()?>cso/index">Home</a></li>
                <li><a href="<?php echo base_url()?>c_cso/tampil_permohonan_akad">Permohonan Akad</a></li>
                <li><a href="<?php echo base_url()?>c_cso/tampil_administrasi">Administrasi</a></li>
                <!--End of menu CS-->
              <?php
        }
              //Menu for Teller
              elseif ($this->session->userdata('jabatan')=='Teller' && $this->session->userdata('status')=='aktif')
                {?>
                <li><a href="<?php echo base_url()?>c_teller/index">Home</a></li>
                <li><a href="<?php echo base_url()?>c_teller/tampil_transaksi">Transaksi</a></li>
                <li><a href="<?php echo base_url()?>c_teller/tampil_jurnal">Administrasi</a></li>
                <!--End of menu Teller-->
              <?php
        }
              //Menu for Manajer
              elseif($this->session->userdata('jabatan')=='Manajer' && $this->session->userdata('status')=='aktif')
                {?>
                <li><a href="<?php echo base_url()?>c_manajer/index">Home</a></li>
                <li><a href="<?php echo base_url()?>c_manajer/tampil_persetujuan_akad">Persetujuan Akad</a></li>
                <li><a href="<?php echo base_url()?>c_manajer/tampil_daftar_mudharib">Daftar Mudharib</a></li>
                <li><a href="<?php echo base_url()?>c_manajer/tampil_lihat_transaksi">Lihat Transaksi</a></li>
                <li><a href="<?php echo base_url()?>c_manajer/tampil_daftar_pegawai">Daftar Pegawai</a></li>
                <!--End of menu Manajer-->
              <?php
        }
              //Menu for Admin
              elseif($this->session->userdata('jabatan')=='Admin' && $this->session->userdata('status')=='aktif')
                {?>
                <li><a href="<?php echo base_url()?>c_admin/index">Home</a></li>
                <li><a href="<?php echo base_url()?>c_admin/tampil_pegawai">Pegawai</a></li>
                <li><a href="<?php echo base_url()?>c_admin/tampil_log_pegawai">Log Pegawai</a></li>
                <!--End of menu Admin-->
              <?php
        }
              else
              {
              ?>
                <li><a href="#">Anda belum terdaftar sebagai pegawai</a></li>
              <?php
              }
              ?>
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
                      <?php echo $this->session->userdata('nama');?> - <?php echo $this->session->userdata('jabatan');?>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li><!--end of user profile>
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