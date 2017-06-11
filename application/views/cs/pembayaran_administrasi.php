<div class="box-header">
  
</div><!--/.box-header-->
<!--form start-->
<form role="form">
  <div class="container">
    <div class="box-body">
      <section class="content">
        <div class="row">
          
            
              
                <h3 class="box-title"><u>Data Administrasi Pembiayaan</u></h3><br/></br>
            
          
          <div class="col-xs-9">
            
            <div class="box">
              <center>
                <table border="0" id="example1" class="table table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>No Rekening</th>
                      <th><center>Nama</center></th>
                      <th><center>Status Administrasi</center></th>
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
                          <td><?php echo $row->no_rekening ?></td>
                          <td><center><?php echo $row->nama_anggota ?></center></td>
                          <td><center><?php echo $row->status_adm ?></center></td>
                          <th><center><?php
                          echo "<form action='tampilBayarAdministrasi' method='post'><input type='hidden' name='adm' value='$row->no_rekening'><button class='btn btn-success btn-flat'><i class='glyphicon glyphicon-pencil'></i>Bayar</button></form></div>";?></center></th>
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
                      <th><center>Nama</center></th>
                      <th><center>Status Administrasi</center></th>
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