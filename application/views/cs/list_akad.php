<div class="box-header">
  
</div><!--/.box-header-->
<!--form start-->
<form role="form">
  <div class="container">
    <div class="box-body">
      <section class="content">
        <div class="row">
          
            
              
                <h3 class="box-title"><u>Daftar Pemohon Akad</u></h3>
                <br/>
              <!-- /.box-header -->
              
          <div class="col-xs-12">
            
            <div class="box">
              <center>
                <table border="0" id="example1" class="table table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>No Rekening</th>
                      <th>Nama Anggota</th>
                      <th><center>Jumlah Pinjaman</center></th>
                      <th><center>Bagi Hasil</center></th>
                      <th><center>Jangka Waktu</center></th>
                      <th><center>Status Akad</center></th>
                      
                  </thead>
                  <tbody>
                    <?php 
                    $no = 1;
                    if(empty($getAkad))
                    {
                      echo "Data Masih Kosong!";
                    }
                    else{
                      foreach ($getAkad as $row) {
                      ?>
                      <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $row->no_rekening ?></td>
                          <td><?php echo $row->nama_anggota ?></td>
                          <td><center><?php echo $row->jumlah_pinjaman ?></center></td>
                          <td><center><?php echo $row->basil_persen ?>&nbsp;%</center></td>
                          <td><center><?php echo $row->jangka_waktu ?></center></td>
                          <td><center><?php echo $row->status_akad ?></center></td>
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
                      <th><center>Jumlah Pinjaman</center></th>
                      <th><center>Bagi Hasil</center></th>
                      <th><center>Jangka Waktu</center></th>
                      <th><center>Status Akad</center></th>
                      
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