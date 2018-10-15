<!DOCTYPE html>
<html>
<head>
	<title>Struktur Sekolah</title>
	<style>
	* {box-sizing: border-box;}

	.kolom{
		float: left;
		padding: 0;
		height: 600px;
	}

	.kiri{
		width: 25%;
		padding-top : 255px;
		color: white;
		font-family: arial;
		text-align: center;
	}

	.kanan{
		padding-top: 55px;
		width: 75%;
	}

	.baris:after{
		content: "";
		display: table;
		clear: both;
	}

	.baris a {
		text-decoration: none;
		color: #fff;
	}

	.baris .kotak {
		position: relative;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  		padding: 10px;
  		text-align: center;
  		background-color: #7fbf4d;
  		bottom: 10px;
	}
	</style>
</head>
<body>
	<div class="baris">
		<div class="kolom kiri" style="background-color: #3178d6;">
			<h2>STRUKTUR SEKOLAH SMKN 1 PURBALINGGA</h2>
			<div class="kotak">
			<h4><a href="javascript:history.back()">Kembai</a></h4>
			</div>
		</div>
		<div class="kolom kanan" style="background-color: white;">
			<img src="img/stuktur_2.jpg" width="100%" height="500">
		</div>
	</div>
</body>
</html>