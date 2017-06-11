<div class="box-header">
  <center><h3><u>Transaksi</u></h3></center>
</div><!--/.box-header-->
<!--form start-->
<form role="form" action="<?php echo base_url();?>c_teller/update_transaksi" method="post">
  <div class="container">
    <div class="box-body">
      <center>
      <table width="700" border="0" cellpadding="0" cellspacing="0">
        <?php
        foreach ($tampil_transaksi as $row) {
          ?>
        <tr>
          <div class="form-group">
            <td>
              <input type="hidden" name="id_transaksi" id="id_transaksi" class="form-control" value="<?php echo "$row->id_transaksi"; ?>" >
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
            <td align="right">Basil (%)&nbsp;&nbsp;</td>
            <td>
              <input type="int" class="form-control" name="basil_persen" id="basil_persen" value="<?php echo "$row->basil_persen"; ?>"/ readonly>
            </td>
            <td>&nbsp;</td>
          </div>
        </tr>
        <!--end of jumlah pijaman(angka)-->
        <tr class="tr2"></tr>
        <tr>
          <div class="form-group">
            <td align="right">Jumlah Setoran&nbsp;&nbsp;</td>
            <td>
              <input type="text" class="form-control" name="jumlah_setoran" id="jumlah_setoran" value="<?php echo"$row->jumlah_setoran"; ?>"/>
            </td>
          </div>
        </tr>
        <tr class="tr2"></tr>
        <tr class="tr2"></tr>
        <!--status-->
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