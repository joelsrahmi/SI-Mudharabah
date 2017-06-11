<div class="box-header">
  <center><h3><u>Ubah Status Pemohon</u></h3></center>
</div><!--/.box-header-->
<!--form start-->
<form role="form" action="<?php echo base_url();?>c_manajer/update_status_pemohon" method="post">
  <div class="container">
    <div class="box-body">
      <center>
      <table width="700" border="0" cellpadding="0" cellspacing="0">
        <?php
        foreach ($getPersetujuan as $row) {
          ?>
        <tr>
          <div class="form-group">
            <td>
              <input type="hidden" name="id_akad" id="id_akad" class="form-control" value="<?php echo "$row->id_akad"; ?>" >
            </td>
          </div>
        </tr>
        <tr>
          <div class="form-group">
            <td width="250" align="right">No. Rekening&nbsp;&nbsp;</td>
            <td>
              <input type="text" name="no_rekening" id="no_rekening" class="form-control" value="<?php echo "$row->no_rekening"; ?>" readonly>
            </td>
          </div>
        </tr>
        <!--end of id pegawai-->
        <tr class="tr2"></tr>
        <!--username pegawai-->
        <tr>
          <div class="form-group">
            <td align="right">Tanggal Permohonan&nbsp;&nbsp;</td>
            <td colspan="2">
              <input maxlength="10" name="date" type="text" class="form-control" value="<?php echo "$row->date"; ?>" readonly/>
            </td>
          </div>
        </tr>
        <tr class="tr2"></tr>
        <tr>
          <div class="form-group">
            <td align="right">Nama&nbsp;&nbsp;</td>
            <td>
              <input type="text" name="nama_anggota" id="nama_anggota" class="form-control" value="<?php echo "$row->nama_anggota"; ?>" readonly>
            </td>
          </div>
        </tr>
        <tr class="tr2"></tr>
        <tr>
          <div class="form-group">
            <td align="right">Jumlah Permohonan Pinjaman&nbsp;&nbsp;</td>
            <td>
              <input type="int" class="form-control" name="jumlah_pinjaman" id="jumlah_pinjaman" value="<?php echo "$row->jumlah_pinjaman"; ?>"/ readonly>
            </td>
            <td>&nbsp;</td>
          </div>
        </tr>
        <!--end of jumlah pijaman(angka)-->
        <tr class="tr2"></tr>
        <tr>
          <div class="form-group">
            <td align="right">Jangka Waktu&nbsp;&nbsp;<br/>(Bulan)&nbsp;&nbsp;</td>
            <td>
              <input type="text" name="jangka_waktu" id="jangka_waktu" value="<?php echo"$row->jangka_waktu"; ?>" class="form-control" readonly>
            </td>
          </div>
        </tr>
        <tr class="tr2"></tr>
        <tr>
          <div class="form-group">
            <td align="right">Bagi Hasil&nbsp;&nbsp;<br/>(dalam %)&nbsp;&nbsp;</td>
            <td>
              <input type="text" name="basil_persen" id="basil_persen" class="form-control" value="<?php echo"$row->basil_persen"; ?>" readonly>
            </td>
          </div>
        </tr>
        <tr class="tr2"></tr>
        <tr>
          <div class="form-group">
            <td align="right">Penggunaan Pinjaman&nbsp;&nbsp;</td>
            <td>
              <input type="text" class="form-control" name="penggunaan_pinjaman" id="penggunaan_pinjaman" value="<?php echo"$row->penggunaan_pinjaman"; ?>" readonly/>
            </td>
          </div>
        </tr>
        <tr class="tr2"></tr>
        <!--status-->
        <div calss="form-group">
          <tr>                        
            <td align="right">Satus&nbsp;&nbsp;</td>
            <td colspan="4">
              <select class="form-control" name="status_akad" id="status_akad" value="<?php echo"$row->status_akad"; ?>">
                <option value="Belum Disetujui" name="status_akad">Belum Disetujui</option>
                <option value="Disetujui" name="status_akad">Disetujui</option>
                <option value="Ditolak" name="status_akad">Ditolak</option>
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