<div class="box-header">
  <h3><u><center>Ubah Data Pemohon</center></u></h3>
</div><!--/.box-header-->
<!--form start-->
<form role="form" action="<?php echo base_url();?>c_cs/update_pemohon" method="post">
  <div class="container">
    <div class="box-body">
      <center>
      <table border="0" cellpadding="0" cellspacing="0">
        <?php
        foreach ($tampilPemohon as $row) {
          ?>
        <!--nama pemohon-->
        <tr>
          <div class="form-group">
            <td width="100">ID Pemohon : </td>
            <td colspan="2">
              <input type="text" name="id_pemohon" id="id_pemohon" class="form-control" value="<?php echo "$row->id_pemohon"; ?>" readonly>
            </td>
          </div>
        </tr>
        <tr class="tr2"></tr>
        <tr>
          <div class="form-group">
            <td width="300">Nama Pemohon : </td>
            <td colspan="2">
              <input type="text" name="nama_pemohon" id="nama_pemohon" class="form-control" value="<?php echo "$row->nama_pemohon"; ?>">
            </td>
          </div>
        </tr>
        <!--end of nama pemohon-->
        <tr class="tr2"></tr>
        <!--tgl permohonan-->
        <tr>
          <div class="form-group">
            <td>Tanggal : </td>
            <td colspan="2">
              <input maxlength="10" name="date" type="text" class="form-control" value="<?php echo "$row->date"; ?>"/>
            </td>
          </div>
        </tr>
        <!--end of tgl permohonan-->
        <tr class="tr2"></tr>
        <!--no. akad-->
          <div class="form-group">
            <td>No. KTP : </td>
            <td colspan="2">
              <input type="text" name="no_ktp" id="no_ktp" class="form-control" value="<?php echo "$row->no_ktp"; ?>">
            </td>
          </div>
        </tr>
        <!--end of no.ktp-->
        <tr class="tr2"></tr>
        <!--jenkel-->
        <tr>
          <div class="form-group">
            <td>Jenis Kelamin : </td>
            <td colspan="3">
              <div class="radio">
                <label>
                  <input type="radio" name="jenkel" id="laki2" value="L" selected="<?php echo "$row->jenkel"; ?>"/>Laki-Laki&nbsp;&nbsp;&nbsp;
                </label>
                <label>
                  <input type="radio" name="jenkel" id="perempuan" value="P" selected="<?php echo "$row->jenkel"; ?>"/>Perempuan
                </label>
              </div>
            </td>
          </div>
        </tr>
        <!--end of jenkel-->
        <tr class="tr2"></tr>
        <tr>
          <div class="form-group">
            <td>Pekerjaan Terakhir : </td>
            <td  colspan="2">
              <input type="text" class="form-control" name="pekerjaan_terakhir" id="pekerjaan_terakhir" value="<?php echo "$row->pekerjaan_terakhir"; ?>"/>
            </td>
          </div>
        </tr>
        <tr class="tr2"></tr>
        <tr>
          <div class="form-group">
            <td>Tempat Lahir : </td>
            <td colspan="2">
              <input type="text" class="form-control" name="tempat_lahir" id="ttl" value="<?php echo "$row->tempat_lahir"; ?>"/>
            </td>
          </div>
        </tr>
        <tr class="tr2"></tr>
        <tr>
          <div class="form-group">
            <td>Tanggal Lahir : </td>
            <td colspan="2">
              <input type="date" class="form-control" name="tgl_lahir" id="tgllahir" value="<?php echo "$row->tgl_lahir"; ?>"/>
            </td>
          </div>
        </tr>
        <tr class="tr2"></tr>
        <!--alamat rumah sesuai identitas-->
        <div calss="form-group">
          <tr>                        
            <td>Alamat lengkap: </td>
            <td colspan="4"><textarea name="alamat1" class="form-control" id="alamat1"><?php echo "$row->alamat1"; ?></textarea>
            </td>
          </tr>
          <tr class="tr2"></tr>
        </div>
        <!--end of alamat rumah identitas-->
        <tr class="tr2"></tr>
        <!--Status Rumah tinggal-->
        <tr>
          <div class="form-group">
            <td>Status Rumah Tinggal : </td>
            <td colspan="4">
              <div class="radio">
                <label>
                  <input type="radio" name="status_rumah" id="rumahsendiri" value="Rumah Sendiri" selected="<?php echo "$row->status_rumah"; ?>"/>Rumah Sendiri&nbsp;&nbsp;&nbsp;
                </label>
                <label>
                  <input type="radio" name="status_rumah" id="rumahortu" value="Rumah Orang Tua" selected="<?php echo "$row->status_rumah"; ?>"/>Rumah Orang Tua&nbsp;&nbsp;&nbsp;
                </label>
                <label>
                  <input type="radio" name="status_rumah" id="rumahkontrak" value="Kontrak" selected="<?php echo "$row->status_rumah"; ?>"/>Kontrak
                </label>
              </div>
            </td>
          </div>
        </tr>
        <!-- end of status rumah tinggal-->
        <tr class="tr2"></tr>
        <!--alamat rumah tinggal-->
        <div calss="form-group">
        </div>
        <!--no telp-->
        <div class="form-group">
          <tr>
            <td>No. Telepon : </td>
            <td width="292">
              <input type="text" class="form-control" name="no_telp" id="telpkantor" value="<?php echo "$row->no_telp"; ?>"/>
            </td>
        </div>
        <!--end of no.telp-->
        <tr class="tr2"></tr>
        <!--orang terdekat yg bisa dihubungi-->
        <div class="form-group">
          <tr>
            <td>Orang Terdekat Yang Bisa Dihubungi : </td>
            <td>Nama
            <input type="text" class="form-control" name="nama_wali" id="namawali" value="<?php echo "$row->nama_wali"; ?>"/></td>
          </tr>
          <tr class="tr2"></tr>
          <tr>
            <td>&nbsp;</td>
            <td>Hubungan
            <input type="text" class="form-control" name="hubungan_wali" id="hubdgnwali" value="<?php echo "$row->hubungan_wali"; ?>"/></td>
          </tr>
          <tr class="tr2"></tr>
          <tr>
            <td>&nbsp;</td>
            <td>Alamat
            <input type="text" class="form-control" name="alamat_wali" id="alamatwali" value="<?php echo "$row->alamat_wali"; ?>"/></td>
          </tr>
          <tr class="tr2"></tr>
          <tr>
            <td>&nbsp;</td>
            <td>No. Telp
            <input type="text" class="form-control" name="no_telp_wali" id="telpwali" value="<?php echo "$row->no_telp_wali"; ?>"/></td>
          </tr>
        </div>
        <!--end of orang terdekat yg bisa dihubungi-->
        <tr class="tr2"></tr>
        <!--jumlah pinjaman(angka)-->
        <tr>
          <div class="form-group">
            <td>Jumlah Permohonan Pinjaman</td>
            <td colspan="3">
              <input type="int" class="form-control" name="jumlah_pinjaman" id="jumlah_pinjaman" value="<?php echo "$row->jumlah_pinjaman"; ?>"/>
            </td>
          </div>
        </tr>
        <!--end of jumlah pijaman(angka)-->
        <tr class="tr2"></tr>
        <!--jumlah terbilang-->
        <tr>
          <div class="form-group">
            <td>Terbilang</td>
            <td colspan="3">
              <input type="text" class="form-control" name="terbilang" id="terbilang" value="<?php echo "$row->terbilang"; ?>"/>
            </td>
          </div>
        </tr>
        <!--end of jumlah terbilang-->
        <tr class="tr2"></tr>
        <!--jangka waktu : -->
        <tr>
          <div class="form-group">
            <td>Jangka Waktu</td>
            <td>
                <input class="form-control" type="text" name="jangka_waktu" id="jangka_waktu" value="10" disabled/>
            Bulan            </td>
          </div>
        </tr>
        <!--end of jangka waktu-->
        <tr class="tr2"></tr>
        <!--penggunaan pinjaman-->
        <tr>
          <div class="form-group">
            <td>Penggunaan Pinjaman</td>
            <td colspan="3">
              <input type="text" class="form-control" name="penggunaan_pinjaman" id="penggunaan_pinjaman" value="<?php echo "$row->penggunaan_pinjaman"; ?>"/>
            </td>
          </div>
        </tr>
        <tr class="tr2"></tr>
        <?php
        }
        ?>
        <!--penggunaan pinjaman-->
        <tr class="tr2"></tr>
        <tr class="tr2"></tr>
        <tr class="tr2"></tr>
        <tr class="tr2"></tr>
        <tr>
          <div class="form-group">
            <td>&nbsp;</td>
            <td>
              <input type="submit" value="Update">
            </td>
          </div>
        </tr>
      </table>
    </div>
  </div>
</form>