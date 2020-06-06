<?php
session_start();
$nama_user = $_SESSION['nama_user'];
$nyawa = $_SESSION['nyawa'];
$nilai = $_SESSION['nilai'];
?>
<!DOCTYPE html>
<html>
 <head>
 <link rel="shortcut icon" href="berhitung.png">
  <title>Game Berhitung</title></head>
  <style>
  	#tampilan {
        background: #fbfbfb;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 600px;
        margin: 2rem auto 4rem auto;
        width: 1200px;
    }
     body {
       background: -webkit-linear-gradient(bottom, #2dbd6e, #1E90FF);
       -moz-linear-gradient(bottom, #2dbd6e, #1E90FF);
       background-repeat: no-repeat;
     }
     #judul{
     	text-align: center;
     	padding-top: 0.1px;
     }
     #footer{
     	font-family: "Raleway Thin", sans-serif;
     	text-align: center;
     	margin-top: 0px;
    }
    #btn-lanjut{
    background-color: #800000;
    border: none;
    box-shadow: 0px 1px 8px #24c64f;
    cursor: pointer;
    color: white;
    font-family: "Raleway SemiBold", sans-serif;
    height: 42.3px;
    margin: 0 auto;
    margin-top: 30px;
    transition: 0.25s;
    width: 153px;
    
    }
   
  </style>
  <body>
  	<div id="tampilan">
      <div id="judul">
		<h2>Hallo <?php echo $nama_user?>, Sayang Jawaban Anda Salah.. Tetap Semangat Ya!!!</h2>
		<h3>Lives : <?php echo $nyawa ?> | Score : <?php echo $nilai ?></h3>
	  </div><br><br><br>
	  <div id="gambarbenar">
	  	<center><img src="jawabansalah.jpg" width="30%" height="30%" style="margin-top: 0;"></center>
	  </div>
    <center><a href="gamestart.php">Soal Selanjutnya</button>
    </center></div>
	<div id="footer">
    <b>Game Berhitung ini di buat oleh Nuur Roofiah Kusumawati K3518048</b>
  	</div>
  </body>
  </html>
