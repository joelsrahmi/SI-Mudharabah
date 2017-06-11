<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "at-taqwa";

// Koneksi dan memilih database di server
mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");

/*$token= $_GET['token'];
if($token == "")
{
  echo ('masukan token!');
}
else
{
  // Cek Token terlebih dahulu	
	$cek = mysql_query("SELECT * FROM tb_token WHERE token = '$token' AND status = 'aktif' AND akses = 'show_rekening' ");
	$data  = mysql_num_rows($cek);

	if ($data > 0) 
	{
		// Cek waktu 
		// if waktu valid {
			$response = "TRUE";
			tampilData();
			// 1. ambil dulu jumlah batas akses
			
			// 2. kurangi dengan satu
			
			// 3. update tabel tb_token
		// } 
		// else {
		
		// }
	}
	else 
	{	
		$response = "FALSE";
		tidakSesuai();
	}

}
function tampilData()
{*/

$query=mysql_query("select * from tb_rekening");

// membuat header dokumen XML
header('Content-Type: text/xml');
echo "<?xml version='1.0'?>";

// membuat tag data respon pada dokumen XML
echo "<data_rekening>";
	while ($data  = mysql_fetch_array($query))
	{
		echo "<data>";
			echo "<id_nasabah>".$data['id_nasabah']."</id_nasabah>";
			echo "<nama_nasabah>".$data['nama_nasabah']."</nama_nasabah>";
			echo "<no_rekening>".$data['no_rekening']."</no_rekening>";
			echo "<tgl_buka>".$data['tgl_buka']."</tgl_buka>";
			echo "<saldo_minimum>".$data['saldo_minimum']."</saldo_minimum>";
			echo "<saldo>".$data['saldo']."</saldo>";
			echo "<status>".$data['status']."</status>";
		echo "</data>";		
	}
echo "</data_rekening>";
/*}
function tidakSesuai()
{

	// membuat header dokumen XML
	header('Content-Type: text/xml');
	echo "<?xml version='1.0'?>";

	// membuat tag data respon pada dokumen XML
	echo "<data_rekening>";
		echo "<data>";
			echo "<info>Token Salah</info>";
		echo "</data>";		
	echo "</data_rekening>";
}*/
?>
