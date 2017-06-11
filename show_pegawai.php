<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "mudh_attaqwa";

// Koneksi dan memilih database di server
mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");


$query=mysql_query("select * from pegawai");

// membuat header dokumen XML
header('Content-Type: text/xml');
echo "<?xml version='1.0'?>";

// membuat tag data respon pada dokumen XML
echo "<data_pegawai  xmlns:xsi='http://www.w3.org/2001/XMLSchema-instance'
						 xsi:noNamespaceSchemaLocation='Pegawai.xsd'>";	while ($data  = mysql_fetch_array($query))
	{
		echo "<data>";
			echo "<id_pegawai>".$data['id_peg']."</id_pegawai>";
			echo "<nama_pegawai>".$data['nama']."</nama_pegawai>";
			echo "<username>".$data['no_identitas']."</username>";
			echo "<jenis_identitas>".$data['jenis_identitas']."</jenis_identitas>";
			echo "<no_identitas>".$data['no_identitas']."</no_identitas>";
			echo "<tgl_lahir>".$data['tgl_lahir']."</tgl_lahir>";
			echo "<tempat_lahir>".$data['tempat_lahir']."</tempat_lahir>";
			echo "<jenis_kelamin>".$data['jenis_kelamin']."</jenis_kelamin>";	
			echo "<agama>".$data['agama']."</agama>";
			echo "<jabatan>".$data['level']."</jabatan>";
			echo "<no_telp>".$data['no_telp']."</no_telp>";
		echo "</data>";		
	}
echo "</data_pegawai>";
/*}
function tidakSesuai()
{

	// membuat header dokumen XML
	header('Content-Type: text/xml');
	echo "<?xml version='1.0'?>";

	// membuat tag data respon pada dokumen XML
	echo "<data_nasabah>";
		echo "<data>";
			echo "<info>Token Salah</info>";
		echo "</data>";		
	echo "</data_nasabah>";
}*/
?>
