<div class="box-header">
  <h3><u><center>Tambah Data Pemohon</center></u></h3>
</div><!--/.box-header-->
<!--form start-->
<form role="form" action="<?php echo base_url();?>c_cs/input_pemohon" method="post">
  <div class="container">
    <div class="box-body">
      <center>
      <table width="700" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <div class="form-group">
          <td  colspan="2"><table width="700" border="0" cellpadding="0" cellspacing="0">
            <div calss="form-group">
              <tr>
                <td><table width="700" border="0" cellpadding="0" cellspacing="0">
                  <!--nama pemohon-->
                  <tr class="tr2"></tr>
                  <tr>
                    <div class="form-group">
                      <td width="100">Nama Pemohon : </td>
                      <td width="90"><input type="text" name="nama_pemohon" id="nama_pemohon" class="form-control"></td>
                    </div>
                  </tr>
                  <!--end of nama pemohon-->
                  <tr class="tr2"></tr>
                  <!--end of tgl permohonan-->
                  <tr class="tr2"></tr>
                  <tr class="tr2"></tr>
                  <!--no. KTP-->
                  <tr>
                    <div class="form-group">
                      <td>No. KTP : </td>
                      <td><input type="text" name="no_ktp" id="no_ktp" class="form-control"></td>
                    </div>
                  </tr>
                  <!--end of no.ktp-->
                  <tr class="tr2"></tr>
                  <!--jenkel-->
                  <tr>
                    <div class="form-group">
                      <td>Jenis Kelamin : </td>
                      <td colspan="3"><div class="radio">
                        <label>
                          <input type="radio" name="jenkel" id="laki2" value="1"/>
                          Laki-Laki&nbsp;&nbsp;&nbsp; </label>
                        <label>
                          <input type="radio" name="jenkel" id="perempuan" value="2"/>
                          Perempuan </label>
                      </div></td>
                    </div>
                  </tr>
                  <!--end of jenkel-->
                  <tr class="tr2"></tr>
                  <tr>
                    <div class="form-group">
                      <td>Pekerjaan Terakhir : </td>
                      <td><input type="text" class="form-control" name="pekerjaan_terakhir" id="pekerjaan_terakhir"/></td>
                      
                    </div>
                  </tr>
                  <tr class="tr2"></tr>
                  <tr>
                    <div class="form-group">
                      <td>Tempat Lahir : </td>
                      <td><input type="text" class="form-control" name="tempat_lahir" id="ttl"/></td>
                    </div>
                  </tr>
                  <tr class="tr2"></tr>
                  <tr>
                    <div class="form-group">
                      <td>Tanggal Lahir : </td>
                      <td><input type="date" class="form-control" name="tgl_lahir" id="ttl"/></td>
                    </div>
                  </tr>
                  <tr class="tr2"></tr>
                  <!--alamat rumah sesuai identitas-->
                  <div calss="form-group">
                    <tr>
                      <td>Alamat Lengkap: </td>
                      <td colspan="4"><textarea name="alamat1" id="alamat1" class="form-control"></textarea></td>
                    </tr>
                    <tr class="tr2"></tr>
                  </div>
                  <!--end of alamat rumah identitas-->
                  <tr class="tr2"></tr>
                  <!--Status Rumah tinggal-->
                  <tr>
                    <div class="form-group">
                      <td>Status Rumah Tinggal : </td>
                      <td colspan="4"><div class="radio">
                        <label>
                          <input type="radio" name="status_rumah" id="rumahsendiri" value="Rumah Sendiri"/>
                          Rumah Sendiri&nbsp;&nbsp;&nbsp; </label>
                        <label>
                          <input type="radio" name="status_rumah" id="rumahortu" value="Rumah Orang Tua"/>
                          Rumah Orang Tua&nbsp;&nbsp;&nbsp; </label>
                        <label>
                          <input type="radio" name="status_rumah" id="rumahkontrak" value="Kontrak"/>
                          Kontrak </label>
                      </div></td>
                    </div>
                  </tr>
                  <tr class="tr2"></tr>
                  <!--no telp-->
                  <div class="form-group">
                    <tr>
                      <td>No. Telp</td>
                      <td><input type="text" class="form-control" name="no_telp" id="no_telp"/></td>
                  </div>
                  <!--end of no.telp-->
                  <tr class="tr2"></tr>
                  <!--orang terdekat yg bisa dihubungi-->
                  <div class="form-group">
                    <tr>
                      <td>Orang Terdekat Yang Bisa Dihubungi : </td>
                      <td><div align="left">Nama                        
                          <input type="text" class="form-control" name="nama_wali" id="namawali"/>
                      </div></td>
                    </tr>
                    <tr class="tr2"></tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>Alamat
                        <input type="text" class="form-control" name="alamat_wali" id="alamatwali"/></td>
                    </tr>
                    <tr class="tr2"></tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>Hubungan
                        <input type="text" class="form-control" name="hubungan_wali" id="hubdgnwali"/></td>
                    </tr>
                    <tr class="tr2"></tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>No. Telp
                        <input type="text" class="form-control" name="no_telp_wali" id="telpwali"/></td>
                    </tr>
                  </div>
                  <!--end of orang terdekat yg bisa dihubungi-->
                  <tr class="tr2"></tr>
                  <!--jumlah pinjaman(angka)-->
                  <tr>
                    <div class="form-group">
                      <td>Jumlah Permohonan Pinjaman</td>
                      <td colspan="3"><input type="int" class="form-control" name="jumlah_pinjaman" id="jumlah_pinjaman"/></td>
                    </div>
                  </tr>
                  <!--end of jumlah pijaman(angka)-->
                  <tr class="tr2"></tr>
                  <!--jumlah terbilang-->
                  <tr>
                    <div class="form-group">
                      <td>Terbilang</td>
                      <td colspan="3"><input type="text" class="form-control" name="terbilang" id="terbilang"/></td>
                    </div>
                  </tr>
                  <!--end of jumlah terbilang-->
                  <tr class="tr2"></tr>
                  <!--jangka waktu : -->
                  <tr>
                    <div class="form-group">
                      <td>Jangka Waktu</td>
                      <td><input class="form-control" type="text" name="jangka_waktu" id="jangka_waktu" value="10" readonly/>
                        Bulan</td>
                    </div>
                  </tr>
                  <!--end of jangka waktu-->
                  <tr class="tr2"></tr>
                  <!--penggunaan pinjaman-->
                  <tr>
                    <div class="form-group">
                      <td>Penggunaan Pinjaman</td>
                      <td colspan="3"><input type="text" class="form-control" name="penggunaan_pinjaman" id="penggunaan_pinjaman"/></td>
                    </div>
                  </tr>
                  <tr>
                    <!--penggunaan pinjaman-->
                  <tr class="tr2"></tr>
                  <tr class="tr2"></tr>
                  <tr class="tr2"></tr>
                  <tr class="tr2"></tr>
                  <tr>
                    <div class="form-group">
                      <td>&nbsp;</td>
                      <td><input type="submit" value="Submit"></td>
                    </div>
                  </tr>
                </table></td>
              </tr>
            </div>
          </table></td>
          </div>
      </tr>
      </table>
    </div>
  </div>
</form>