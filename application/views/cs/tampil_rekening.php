<div class="box-header">
  
</div><!--/.box-header-->
<!--form start-->
<form role="form">
  <div class="container">
    <div class="box-body">
      <section class="content">
        <div class="row">
          
            
              
                <h3 class="box-title"><u>Data Permohonan Akad</u></h3>
              <!-- /.box-header -->
              <div class="box-body">
                <a href="<?php echo base_url();?>c_cs/tampilInputAnggota" class="btn btn-primary btn-flat"><i class="glyphicon glyphicon-plus"></i>&nbsp;Tambah Anggota</a>&nbsp;&nbsp;&nbsp;<!--<a href='javascript:window.print()' class="btn btn-primary btn-flat"><i class="glyphicon glyphicon-file"></i>&nbsp;Cetak Data Pemohon</a><br/><br/></br>-->
              </div>
            
          
          <div class="col-xs-12">
            
            <div class="box">
              <center>
                <table border="0" id="example1" class="table table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>No Rekening</th>
                      <th>Nama Anggota</th>
                      <th><center>Status Rek</center></th>
                      <th><center>Alamat</center></th>
                      <th><center>Action</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no = 1;
                    if(empty($getRekening))
                    {
                      echo "Data Masih Kosong!";
                    }
                    else{
                      foreach ($getRekening as $row) {
                      ?>
                      <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $row->no_rekening ?></td>
                          <td><?php echo $row->nama_anggota ?></td>
                          <td><center><?php echo $row->status_rek ?></center></td>
                          <td><center><?php echo $row->alamat1 ?></center></td>
                          <th><center><?php
                          echo "<form action='tampilPengajuanAkad' method='post'><input type='hidden' name='pengajuan' value='$row->no_rekening'><button class='btn btn-success btn-flat'><i class='glyphicon glyphicon-pencil'></i>Ajukan Akad Mudharabah</button></form></div>";?></center></th>
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
                      <th>No Rekening</th>
                      <th>Nama Anggota</th>
                      <th><center>Status Rek</center></th>
                      <th><center>Alamat</center></th>
                      <th><center>Action</center></th>
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