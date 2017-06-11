<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/bmt.jpg">

    <title>Pegawai</title>

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
        </div>
      </div>
    </div>

        </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="input_pegawai.php">Input Pegawai</a></li>
            <li><a href="list_pegawai.php">Edit Data Pegawai</a></li>
            <li><a href="data_pegawai.php">Data Pegawai</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="../bmt/data_nasabah_pegawai.php">Data Nasabah</a></li>
            <li><a href="../bmt/data_rekening_pegawai.php">Data Rekening</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

          <div class="table-responsive">
            <form name="myForm" method="post" action="input_nasabah.php" onsubmit="return validateForm()">
<center><h1>Data Rekening</h1></center>
<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "http://localhost/webservice/show_rekening.php");
curl_setopt($curl, CURLOPT_HEADER, 0);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$xml = new SimpleXMLElement(curl_exec($curl));
curl_close($curl);
$no = 1;
echo "<center>";
echo "<table border = 1>";
echo "<tr>
        <th> No </th>
		    <th> ID </th>
		    <th> Nama </th>
		    <th> No Rekening </th>
        <th> Tanggal Buka </th>
		    <th> Saldo Minimum </th>
        <th> Jumlah Saldo</th>
        <th> Status </th>
	</tr>";
	foreach($xml->data as $rekening)
	{
		echo "<tr>";
			echo "<td> $no</td>";
			echo "<td> $rekening->id_nasabah</td>";
			echo "<td> $rekening->nama_nasabah</td>";
			echo "<td> $rekening->no_rekening</td>";
			echo "<td> $rekening->tgl_buka</td>";
			echo "<td> $rekening->saldo_minimum</td>";
			echo "<td> $rekening->saldo</td>";
			echo "<td> $rekening->status</td>";
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

