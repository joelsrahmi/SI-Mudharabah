<div class="box-header">
  <h3><u><center>Pengajuan Akad</center></u></h3>
</div><!--/.box-header-->
<!--form start-->
<form role="form" action="<?php echo base_url();?>c_cs/input_pengajuan_akad" method="post">
  <div class="container">
    <div class="box-body">
      <center>
      <table width="700" border="0" cellpadding="0" cellspacing="0">
        <?php
        foreach ($tampilRekening as $row) {
          ?>
        <!--id pegawai-->
        <tr>
          <div class="form-group">
            <td width="250" align="right">No. Rekening&nbsp;&nbsp;</td>
            <td >
              <input type="text" name="no_rekening" id="no_rekening" class="form-control" value="<?php echo "$row->no_rekening"; ?>" readonly>
            </td>
          </div>
        </tr>
        <!--end of id pegawai-->
        <tr class="tr2"></tr>
        <tr>
          <div class="form-group">
            <td align="right">Nama&nbsp;&nbsp;</td>
            <td>
              <input type="text" name="nama_anggota" id="nama_anggota" class="form-control" value="<?php echo "$row->nama_anggota"; ?>" readonly>
            </td>
          </div>
        </tr>
        <?php
      }
      ?>
      <tr class="tr2"></tr>

      <tr>
          <div class="form-group">
            <td align="right">Jumlah Permohonan Pinjaman&nbsp;&nbsp;</td>
            <td>
              <input type="text" class="form-control" name="jumlah_pinjaman" id="jumlah_pinjaman"/>
            </td>
          </div>
        </tr>
      <tr class="tr2"></tr>
        <tr>
          <div class="form-group">
            <td align="right">Jangka Waktu&nbsp;&nbsp;<br/>(Bulan)&nbsp;&nbsp;</td>
            <td>
              <input type="text" name="jangka_waktu" id="jangka_waktu" class="form-control" value="10" readonly>
            </td>
          </div>
        </tr>
        <tr class="tr2"></tr>
        <tr>
          <div class="form-group">
            <td align="right">Bagi Hasil&nbsp;&nbsp;<br/>(dalam %)&nbsp;&nbsp;</td>
            <td>
              <input type="text" name="basil_persen" id="basil_persen" class="form-control">
            </td>
          </div>
        </tr>
        <tr>
          <div class="form-group">
            <td align="right">Penggunaan Pinjaman&nbsp;&nbsp;</td>
            <td>
              <input type="text" class="form-control" name="penggunaan_pinjaman" id="penggunaan_pinjaman"/>
            </td>
          </div>
        </tr>
      
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
                  <input type="submit" value="Submit">
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