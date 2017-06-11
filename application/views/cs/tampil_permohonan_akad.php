<div class="box-header">
  
</div><!--/.box-header-->
<!--form start-->
<form role="form">
  <div class="container">
    <div class="box-body">
      <section class="content">
        <div class="row">
          
            
              
                <h3 class="box-title"><u>Data Pemohon Akad Mudharabah</u></h3>
              <!-- /.box-header -->
              <div class="box-body">
                <a href="<?php echo base_url();?>c_cs/tampilInputPemohon" class="btn btn-primary btn-flat"><i class="glyphicon glyphicon-plus"></i>&nbsp;Tambah Pemohon</a>&nbsp;&nbsp;&nbsp;
                <a href='javascript:window.print()' class="btn btn-primary btn-flat"><i class="glyphicon glyphicon-file"></i>&nbsp;Cetak Data Pemohon</a><br/><br/></br>
              </div>
            
          
          <div class="col-xs-12">
            <div class="box">

                <table id="example1" class="table table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>ID Pemohon</th>
                      <th>Nama Pemohon</th>
                      <th weight="10px">Jenis Kelamin</th>
                      <th>Pekerjaan Terakhir</th>
                      <th>Jumlah Permohonan Pinjaman</th>
                      <th><u>Status Akad</u></th>
                      <th><center>Action</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no = 1;
                    if(empty($getPemohon))
                    {
                      echo "Data Masih Kosong!";
                    }
                    else{
                      foreach ($getPemohon as $row) {
                      ?>
                      <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $row->id_pemohon ?></td>
                          <td><?php echo $row->nama_pemohon ?></td>
                          <td><center><?php echo $row->jenkel ?></center></td>
                          <td><?php echo $row->pekerjaan_terakhir ?></td>
                          <td><center>Rp&nbsp;<?php echo $row->jumlah_pinjaman ?></center></td>
                          <td><?php echo $row->status_akad ?></td>
                          <td><center><?php
                          echo "<form action='tampilUpdatePemohon' method='post'><input type='hidden' name='ubah' value='$row->id_pemohon'><button class='btn btn-success btn-flat'><i class='glyphicon glyphicon-pencil'></i> Ubah</button></form></div>";?></center>
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
                      <th>ID Pemohon</th>
                      <th>Nama Pemohon</th>
                      <th weight="10px">Jenis Kelamin</th>
                      <th>Pekerjaan Terakhir</th>
                      <th>Jumlah Permohonan Pinjaman</th>
                      <th><u>Status Akad</u></th>
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