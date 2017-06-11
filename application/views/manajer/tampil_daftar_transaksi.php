<div class="box-header">
  <h3><u>Permohonan Akad</u></h3>
</div><!--/.box-header-->
<!--form start-->
<form role="form">
  <div class="container">
    <div class="box-body">
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Data Pemohon Akad Mudharabah</h3>
              </div><!-- /.box-header -->
              <div class="box-body">
                <a href='javascript:window.print()' class="btn btn-primary btn-flat"><i class="glyphicon glyphicon-file"></i>&nbsp;Cetak Data Pemohon</a><br/><br/></br>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>ID Pemohon</th>
                      <th>Jumlah Permohonan Pinjaman</th>
                      <th><u>Status Akad</u></th>
                      <th colspan="2"><center>Action</center></th>
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
                          <td><center>Rp&nbsp;<?php echo $row->jumlah_pinjaman ?></center></td>
                          <td><?php echo $row->status_akad ?></td>
                          <td><center><?php
                          echo "<form action='tampilTransaksi' method='post'><input type='hidden' name='tampil_transaksi' value='$row->id_pemohon'><button class='btn btn-success btn-flat'><i class='glyphicon glyphicon-pencil'></i> Lihat</button></form></div>";?></center>
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
                      <th>Jumlah Permohonan Pinjaman</th>
                      <th><u>Status Akad</u></th>
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