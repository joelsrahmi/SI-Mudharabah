<div class="box-header">
  <h3><u>Daftar Pegawai</u></h3>
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
                <a href="<?php echo base_url();?>c_admin/tampil_input_pegawai" class="btn btn-primary btn-flat"><i class="glyphicon glyphicon-plus"></i>&nbsp;Tambah Pegawai</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url();?>c_admin/cetakDataPegawai" class="btn btn-primary btn-flat"><i class="glyphicon glyphicon-file"></i>&nbsp;Cetak Data Pegawai</a><br/><br/></br>
                
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    tr>
                      <th>No</th>
                      <th>ID Pemohon</th>
                      <th>Nama Pemohon</th>
                      <th weight="10px">Jenis Kelamin</th>
                      <th>Pekerjaan Terakhir</th>
                      <th>Jumlah Permohonan Pinjaman</th>
                      <th><u>Status Akad</u></th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1; 
                    if(empty($list_pemohon))
                    {
                      echo "Data Masih Kosong";
                    }
                    else{
                      foreach ($list_pemohon as $row) {
                        ?>
                        <tr>
               td><?php echo $no; ?></td>
                          <td><?php echo $row->id_pemohon ?></td>
                          <td><?php echo $row->nama_pemohon ?></td>
                          <td><?php echo $row->jenkel ?></td>
                          <td><?php echo $row->pekerjaan_terakhir ?></td>
                          <td><?php echo $row->jumlah_pinjaman ?></td>
                          <td><?php echo $row->status_akad ?></td>
                          <td>
                            <?php
                            echo "<form action='lihatDetailPemohon' method='post'><input type='hidden' name='lihatpmh' value='$row->id_pemohon'><button class='btn btn-success btn-flat'>Lihat</button></form>";
                            ?>
                            <a name="lihat" value="<?php echo $row->id_pemohon ?>" href="<?php echo base_url();?>c_admin/tampilDetailPemohon" class="btn btn-success btn-flat"><i class="glyphicon glyphicon-align-justify"></i>Lihat</a>&nbsp;
                            <a href="<?php echo base_url();?>c_admin/tampilUpdatePemohon" class="btn btn-success btn-flat"><i class="glyphicon glyphicon-pencil"></i>&nbsp;Ubah</a>
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
                      <th>Nama Pegawai</th>
                      <th>Username</th>
                      <th>Jenis Kelamin</th>
                      <th>Jabatan</th>
                      <th><u>Status</u></th>
                      <th>Action</th>
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