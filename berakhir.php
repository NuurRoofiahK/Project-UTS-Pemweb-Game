<?php
include 'connectionn.php';
$db = new connectionn();

session_start();

$nama_user = $_SESSION['nama_user'];
$nyawa = $_SESSION['nyawa'];
$nilai = $_SESSION['nilai'];
$email = $_SESSION['email'];

$db->insertdata($nama_user, $email, $nilai, $nyawa);
?>

<!DOCTYPE html>
<html>
 <head>
 <link rel="shortcut icon" href="berhitung.png">
  <title>GAME OVER <?php echo $nama_user ?> </title>
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
     #logout-btn {
    background-color: blue;
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
    text-align: center;
    }
    #logout-btn:hover {
    box-shadow: 0px 1px 18px #24c64f;
    }
      #start-btn {
    background-color: red;
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
    text-align: center;
    }
    #start-btn:hover {
    box-shadow: 0px 1px 18px #24c64f;
    }
    #close-btn {
    background-color: green;
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
    text-align: center;
    }
    #close-btn:hover {
    box-shadow: 0px 1px 18px #24c64f;
    }
    #footer{
     	font-family: "Raleway Thin", sans-serif;
     	text-align: center;
     	margin-top: 0px;
    }
    #gambar{
    text-align: center;
    }
 #hall-btn {
    background-color: blue;
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
    text-align: center;
    }
    #hall-btn:hover {
    box-shadow: 0px 1px 18px #24c64f;
    }
  </style>
</head>
<body>
	<div id="tampilan">
      <div id="judul">
		<h2>Hallo <?php echo $nama_user?>, Sayang Permainan Sudah Selesai. Semoga lain kali bisa lebih baik yaa :)</h2>
		<h2>Skor Anda :<?php echo $nilai?> </h2>
	  </div>
	  <div id="gambar">
    	<img src="berhitung.png" width="60px" height="60px">
      </div>
	  <center> 
	  	<a href="index.php"><input id="start-btn" type="start" name="btnStart" value="Main Lagi"/></a>
	  	<a href="klik.php"><input id="close-btn" type="close" name="btnClose" value="Keluar"/></a>
      <a href="halloffame.php"><input id="hall-btn" type="hall" name="btnhall" value="Hall Of Fame"/></a>
	  </center>
  	</div>
  	<div id="footer">
    <b>Game Berhitung ini di buat oleh Nuur Roofiah Kusumawati K3518048</b>
  	</div>
</body>
</html>

