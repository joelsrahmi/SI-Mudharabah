<div class="box-header">
  <h3><u>Transaksi Akad</u></h3>
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
                <h3 class="box-title">Data Transaksi Akad Mudharabah</h3>
              </div><!-- /.box-header -->
              <div class="box-body">
                <a href='javascript:window.print()' class="btn btn-primary btn-flat"><i class="glyphicon glyphicon-file"></i>&nbsp;Cetak Data Transaksi</a><br/><br/></br>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>ID. Transaksi</th>
                      <th><u>Nama</u></th>
                      <th>Jumlah Permohonan Pinjaman</th>
                      <th><center>Basil (%)</center></th>
                      <th><center>Setoran Cicilan</center></th>
                      <th>Angsuran Ke-</th>
                      <th>Sisa Pinjaman</th>
                      <th>Keterangan</th>
                      <th colspan="2"><center>Action</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no = 1;
                    if(empty($getPemohon1))
                    {
                      echo "Data Masih Kosong!";
                    }
                    else{
                      foreach ($getPemohon1 as $row) {
                        /*var_dump($lihatTransaksi);
                        exit();*/

                      ?>

                      <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $row->id_transaksi ?></td> 
                          <td><?php echo $row->nama_anggota ?></td>
                          <td><center>Rp&nbsp;<?php echo $row->jumlah_pinjaman ?></center></td>
                          <td><center><?php echo $row->basil_persen ?></center></td>
                          <td><center>Rp&nbsp;<?php echo $row->setoran_cicilan ?></center></td>
                          <td><center><?php echo $row->cicilan_ke ?></center></td>
                          <td>Rp&nbsp;<?php echo $row->sisa_pinjaman ?></td>
                          <td><?php echo $row->status_cicilan ?></td>
                          <td><center><?php
                          echo "<form action='tampilTransaksi' method='post'><input type='hidden' name='tampil_transaksi' value='$row->id_transaksi'><button type='submit' class='btn btn-success btn-flat'><i class='glyphicon glyphicon-pencil'></i> Transaksi</button></form>";?></center>
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
                      <th>ID. Transaksi</th>
                      <th><u>Nama</u></th>
                      <th>Jumlah Permohonan Pinjaman</th>
                      <th><center>Basil (%)</center></th>
                      <th><center>Setoran Cicilan</center></th>
                      <th>Angsuran Ke-</th>
                      <th>Sisa Pinjaman</th>
                      <th>Keterangan</th>                      
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