<div class="box-header">
  <h3><u>Pembayaran Administrasi</u></h3>
</div><!--/.box-header-->
<!--form start-->
<form role="form" action="<?php echo base_url();?>c_cs/update_administrasi" method="post">
  <div class="container">
    <div class="box-body">
      <center>
      <table width="700" border="0" cellpadding="0" cellspacing="0">
        <?php
        foreach ($tampilAdministrasi as $row) {
          ?>
        <!--id pegawai-->
        <tr><td width="90" colspan="2">
              <input type="hidden" name="id_administrasi" id="id_administrasi" class="form-control" value="<?php echo "$row->id_administrasi"; ?>">
            </td></tr>
        <tr>
          
          <div class="form-group">

            <td width="300">No Rekening</td>
            <td width="90" colspan="2">
              <input type="text" name="no_rekening" id="no_rekening" class="form-control" value="<?php echo "$row->no_rekening"; ?>" readonly>
            </td>
          </div>
        </tr>
        <!--end of id pegawai-->
        <tr class="tr2"></tr>
        <!--nama pegawai-->
        <tr>
          <div class="form-group">
            <td width="300">Biaya pokok : </td>
            <td width="90" colspan="2">
              <input type="text" name="biaya_pokok" id="biaya_pokok" class="form-control" value="100000" readonly>
            </td>
          </div>
        </tr>
        <!--end of nama pegawai-->
        <tr class="tr2"></tr>
        <!--username pegawai-->
        <tr>
          <div class="form-group">
            <td>Biaya Sertifikat</td>
            <td colspan="2">
              <input name="biaya_sertifikat" type="text" class="form-control" value="900000" readonly/>
            </td>
          </div>
        </tr>
        <!--end of username pegawai-->
        <tr class="tr2"></tr>
        <!--status-->
        <div calss="form-group">
          <tr>                        
            <td>Satus Administrasi: </td>
            <td colspan="4">
              <select class="form-control" name="status_adm" id="status_adm" value="<?php echo"$row->status_adm"; ?>">
                <option name="status_adm" value="Belum Bayar" >Belum Bayar</option>
                <option name="status_adm" value="Sudah Bayar" >Sudah Bayar</option>
              </select>
            </td>
          </tr>
          <?php
        }
        ?>
        </div>
        <!--end of status-->
        <tr class="tr2"></tr>
        <tr class="tr2"></tr>
        <tr class="tr2"></tr>
        <tr class="tr2"></tr>

        <div class="form-group">
          <tr>
              <td>&nbsp;</td>
              <td>
                <div class="input-group">
                  <input type="submit" value="Update">
                </div>
              </td>
            </div>
          </tr>
        <div class="form-group">
      </table>
    </center>
    </div>
  </div>
</form>