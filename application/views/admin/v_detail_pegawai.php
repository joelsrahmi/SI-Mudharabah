<div class="box-header">
  <h3><u>Ubah Data Pegawai</u></h3>
</div><!--/.box-header-->
<!--form start-->
<form role="form" action="<?php echo base_url();?>c_admin/update_pegawai" method="post">
  <div class="container">
    <div class="box-body">
      <center>
      <table  border="0" cellpadding="0" cellspacing="0">
        <?php
        foreach ($tampil_pegawai as $row) {
          ?>
        <!--id pegawai-->
        <tr>
          <div class="form-group">
            <td>ID Pegawai : </td>
            <td width="400">
              <input type="text" class="form-control" name="id_peg" id="id_peg" value="<?php echo "$row->id_peg"; ?>" readonly/>
            </td>
          </div>
        </tr>
        <!--end of id pegawai-->
        <tr class="tr2"></tr>
        <!--nama pegawai-->
        <tr>
          <div class="form-group">
            <td>Nama Pegawai : </td>
            <td width="90">
              <input type="text" readonly name="nama" id="nama" value="<?php echo "$row->nama"; ?>" class="form-control">
            </td>
          </div>
        </tr>
        <!--end of nama pegawai-->
        <tr class="tr2"></tr>
        <!--username pegawai-->
        <tr>
          <div class="form-group">
            <td>Username : </td>
            <td width="90" colspan="2">
              <input type="text" readonly name="username" id="username" value="<?php echo "$row->username"; ?>" class="form-control">
            </td>
          </div>
        </tr>
        <!--end of username pegawai-->
        <tr class="tr2"></tr>
        <!--nama password pegawai-->
        <tr>
          <div class="form-group">
            <td>Password : </td>
            <td width="90" colspan="2">
              <input type="password" readonly name="password" id="password" value="<?php echo "$row->password"; ?>" class="form-control">
            </td>
          </div>
        </tr>
        <!--end of password pegawai-->
        <tr class="tr2"></tr>
        <!--jenis identitas-->
        <tr>
          <div class="form-group">
            <td>Jenis Identitas : </td>
            <td width="90" colspan="2">
              <select class="form-control" readonly name="jenis_identitas" value="<?php echo"$row->jenis_identitas"; ?>">
                <option value="KTP">KTP</option>
                <option value="SIM">SIM</option>
                <option value="PASSPORT">PASSPORT</option>
                <option value="KTM">KTM</option>
                <option value="Kartu Pelajar">Kartu Pelajar</option>
              </select>
            </td>
          </div>
        </tr>
        <!--end of jenis identitas-->
        <tr class="tr2"></tr>
        <!--no identitas-->
        <tr>
          <div class="form-group">
            <td>No. Identitas : </td>
            <td width="90" colspan="2">
              <input type="text" readonly name="no_identitas" id="no_identitas" value="<?php echo"$row->no_identitas"; ?>" class="form-control">
            </td>
          </div>
        </tr>
        <!--end of jenis identitas-->
        <tr class="tr2"></tr>
        <!--jenkel-->
        <tr>
          <div class="form-group">
            <td>Jenis Kelamin : </td>
            <td colspan="3">
              <div class="radio">
                <label>
                  <input type="radio" readonly name="jenis_kelamin" id="laki2" value="L"/>Laki-Laki&nbsp;&nbsp;&nbsp;
                </label>
                <label>
                  <input type="radio" readonly name="jenis_kelamin" id="perempuan" value="P"/>Perempuan
                </label>
              </div>
            </td>
          </div>
        </tr>
        <!--end of jenkel-->
        <tr class="tr2"></tr>
        <!--Tanggal lahir pegawai-->
        <tr>
          <div class="form-group">
            <td>Tanggal Lahir : </td>
            <td colspan="2">
              <input maxlength="10" readonly name="tgl_lahir" value="<?php echo"$row->tgl_lahir"; ?>" id="tgl_lahir" type="date" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
            </td>
          </div>
        </tr>
        <!--end of Tanggal lahir pegawai-->
        <tr class="tr2"></tr>
        <!--Tempat lahir-->
        <tr>
          <div calss="form-group">                        
            <td>Tempat Lahir : </td>
            <td colspan="4">
              <input name="tempat_lahir" readonly id="tempat lahir" value="<?php echo"$row->tempat_lahir"; ?>" type="text" class="form-control">
            </td>
          </div>
        </tr>
        <!--end of tempat lahir-->
        <tr class="tr2"></tr>
        <!--alamat rumah tinggal-->
        <div calss="form-group">
          <tr>                        
            <td>Alamat Tempat Tinggal: </td>
            <td colspan="4">
              <input name="alamat_lengkap" readonly id="alamat_lengkap" value="<?php echo"$row->alamat_lengkap"; ?>" type="textarea" class="form-control">
            </td>
          </tr>
        </div>
        <!--end of lamat tempat tinggal-->
        <tr class="tr2"></tr>
        <!--agama-->
        <tr>
          <div class="form-group">
            <td>Agama : </td>
            <td width="90" colspan="2">
              <select class="form-control" readonly name="agama" value="<?php echo"$row->agama"; ?>">
                <option value="Islam">Islam</option>
                <option value="Protestan">Protestan</option>
                <option value="Khatolik">Khatolik</option>
                <option value="Buddha">Buddha</option>
                <option value="Hindu">Hindu</option>
                <option value="Konguchu">Konguchu</option>
              </select>
            </td>
          </div>
        </tr>
        <!--end of Agama-->
        <tr class="tr2"></tr>
        <!--alamat no telp-->
        <div calss="form-group">
          <tr>                        
            <td>No. Telp / Handphone: </td>
            <td colspan="4">
              <input name="no_telp" readonly id="no_telp" value="<?php echo"$row->no_telp"; ?>" type="text" class="form-control">
            </td>
          </tr>
        </div>
        <!--end of no telp-->
        <tr class="tr2"></tr>
        <!--Jabatan-->
        <div calss="form-group">
          <tr>                        
            <td>Jabatan: </td>
            <td colspan="4">
              <select readonly class="form-control" name="level" value="<?php echo"$row->level"; ?>">
                <option value="Manajer">Manajer</option>
                <option value="CS">Customer Service</option>
                <option value="Teller">Teller</option>
                <option value="Admin">Administrator</option>
              </select>
            </td>
          </tr>
        </div>
        <!--end of jabatan-->
        <tr class="tr2"></tr>
        <!--status-->
        <div calss="form-group">
          <tr>                        
            <td>Satus: </td>
            <td colspan="4">
              <select readonly class="form-control" name="status" value="<?php echo"$row->status"; ?>">
                <option value="Aktif">Aktif</option>
                <option value="Tidak Aktif">Tidak Aktif</option>
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
      </table>
    </center>
    </div>
  </div>
</form>