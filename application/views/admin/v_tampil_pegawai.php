<div class="box-header">
  <h3><u><center>Daftar Pegawai</center></u></h3>
</div><!--/.box-header-->
<!--form start-->
<form role="form">
  <div class="container">
    <div class="box-body">
      <section class="content">
        <div class="row">
          <div class="col-xs-11">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Data Pegawai KSPS BMT AT-TAQWA</h3>
              </div><!-- /.box-header -->
              <div class="box-body">
                <a href='<?php echo base_url();?>c_admin/tampil_input_pegawai' class="btn btn-primary btn-flat"><i class="glyphicon glyphicon-plus"></i>&nbsp;Tambah Pegawai</a>&nbsp;&nbsp;&nbsp;
                <a href='javascript:window.print()' class="btn btn-primary btn-flat"><i class="glyphicon glyphicon-file"></i>&nbsp;Cetak Data Pegawai</a><br/><br/></br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>ID Pegawai</th>
                      <th>Nama Pegawai</th>
                      <th>Username</th>
                      <th>Jenis Kelamin</th>
                      <th>Jabatan</th>
                      <th><u>Status</u></th>
                      <th colspan="2"><center>Action</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1; 
                    if(empty($getPegawai))
                    {
                      echo "Data Masih Kosong!";
                    }
                    else{
                      foreach ($getPegawai as $row) {
                        ?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $row->id_peg ?></td>
                          <td><?php echo $row->nama ?></td>
                          <td><?php echo $row->username ?></td>
                          <td><?php echo $row->jenis_kelamin ?></td>
                          <td><?php echo $row->level ?></td>
                          <td><?php echo $row->status ?></td>
                          <td><center><?php
                          echo "<form action='tampilUpdatePegawai' method='post'><input type='hidden' name='ubah' value='$row->id_peg'><button class='btn btn-success btn-flat'><i class='glyphicon glyphicon-pencil'></i> Ubah</button></form></div>";?></center>
                          </td>
                        </tr>
                        <?php 
                        $no++;
                      }
                    }
                    ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>ID Pegawai</th>
                      <th>Nama Pegawai</th>
                      <th>Username</th>
                      <th>Jenis Kelamin</th>
                      <th>Jabatan</th>
                      <th><u>Status</u></th>
                      <th colspan="2"><center>Action</center></th>
                    </tr>
                  </tfoot>
                </table>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </section><!-- /.content -->
      <!--end of table-->
    </div>
  </div>
</form>