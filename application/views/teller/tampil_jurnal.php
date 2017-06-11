<div class="box-header">
  <h3><u>Penjurnalan</u></h3>
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
                <h3 class="box-title">Jurnal Transaksi Akad Mudharabah</h3>
              </div><!-- /.box-header -->
              <div class="box-body">
                <a href='javascript:window.print()' class="btn btn-primary btn-flat"><i class="glyphicon glyphicon-file"></i>&nbsp;Cetak Jurnal</a><br/><br/></br>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>ID Jurnal</th>
                      <th><u>ID Transaksi</u></th>
                      <th><center>Tgl</center></th>
                      <th><center>Kode Akun</center></th>
                      <th><center>Keterangan</center></th>
                      <th>Debit</th>
                      <th>Kredit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no = 1;
                    if(empty($list_jurnal))
                    {
                      echo "Data Masih Kosong!";
                    }
                    else{
                      foreach ($list_jurnal as $row) {
                        /*var_dump($lihatTransaksi);
                        exit();*/

                      ?>

                      <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $row->id_jurnal ?></td>
                          <td><?php echo $row->id_transaksi ?></td> 
                          <td><center><?php echo $row->tanggal?></center></td>
                          <td><center><?php echo $row->kode_akun ?></center></td>
                          <td><center><?php echo $row->keterangan ?></center></td>
                          <td><?php echo $row->debit ?></td>
                          <td><?php echo $row->kredit ?></td>
  
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
                      <th>ID Jurnal</th>
                      <th><u>ID Transaksi</u></th>
                      <th><center>Tgl</center></th>
                      <th><center>Kode Akun</center></th>
                      <th><center>Keterangan</center></th>
                      <th>Debit</th>
                      <th>Kredit</th>
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