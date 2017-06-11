<div class="box-header">
  
</div><!--/.box-header-->
<!--form start-->
<form role="form">
  <div class="container">
    <div class="box-body">
      <section class="content">
        <div class="row">
          
                <h3>Data Pemohon Akad Mudharabah</h3>
             
              <div class="box-body">
                <table width="500" id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>ID Pemohon</th>
                      <th>Nama Pemohon</th>
                      <th>Status Pembayaran</th>
                      <th><center>Action</center></th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no = 1;
                    if(empty($getAdministrasi))
                    {
                      echo "Data Masih Kosong!";
                    }
                    else{
                      foreach ($getAdministrasi as $row) {
                      ?>
                      <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $row->id_pemohon ?></td>
                          <td><?php echo $row->nama_pemohon ?></td>
                          <td><?php echo $row->status_adm ?></td>                         
                          <td><center><?php
                          echo "<form action='tampilUpdateAdministrasi' method='post'><input type='hidden' name='ubah_adm' value='$row->id_pemohon'><button class='btn btn-success btn-flat'><i class='glyphicon glyphicon-pencil'></i>Bayar</button></form></div>";?></center>
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
                      <th>Status Pembayaran</th>
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