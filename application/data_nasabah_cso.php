<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/bmt.jpg">

    <title>CSO</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">BMT AT-TAQWA RAYA</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class='active'><a href="logout">username_cso</a></li>
            <li><a href="logout">Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
    </div>

        <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Input Data Anggota</a></li>
            <li><a href="#">List Data Anggota</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Input Data Rekening</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Lihat Data Rekening</a></li>
            <li><a href="">Lihat Data Transaksi</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

<center><h1>Data Anggota</h1></center>
<table width="1918" border = 1>
<tr>
      <td width='38' height='31' align='center'> No </td>
      <td width='21' align='center'> ID </td>
      <td width='50' align='center'> Nama </td>
      <td width='50' align='center'> No Telpon </td>
      <td width='50' align='center'> Jenis Kelamin </td>
      <td width='50' align='center'> Tempat Lahir </td>
      <td width='50' align='center'> Tanggal Lahir </td>
      <td width='50' align='center'> Alamat </td>
      </tr>
<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "http://localhost/webservice/show_pegawai.php");
curl_setopt($curl, CURLOPT_HEADER, 0);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$xml = new SimpleXMLElement(curl_exec($curl));
curl_close($curl);
$no = 1;
	foreach($xml->data as $nasabah)
	{
		echo "<tr>";
			echo "<td> $no</td>";
			echo "<td> $nasabah->id_nasabah</td>";
			echo "<td> $nasabah->nama_nasabah</td>";
			echo "<td> $nasabah->no_telp</td>";
			echo "<td> $nasabah->jenis_kelamin</td>";
			echo "<td> $nasabah->tempat_lahir</td>";
			echo "<td> $nasabah->tgl_lahir</td>";
			echo "<td> $nasabah->alamat_nasabah</td>";
		$no++;
	}  
	echo "</tr>";
echo "<table>";
?>

<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
  </body>
</html>

