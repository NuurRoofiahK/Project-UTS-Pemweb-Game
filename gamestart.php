<?php
session_start();
$nama_user = $_SESSION['nama_user'];
$nyawa = $_SESSION['nyawa'];
$nilai = $_SESSION['nilai'];

if($nyawa != 0){
    
    $random1 = rand(1,20);
    $random2 = rand(1,20);
    
    $_SESSION['hasilakhir'] = $random1 + $random2;
}else{
    header('Location: berakhir.php');
}
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
    #soal{
    	text-align: center;
    }
    #soal1{
    	background-color: #800000;
    	width: 50%;
    	margin-left: 300px;
    }
    #btn-jawab{
    background-color: #FFD700;
    border: none;
    box-shadow: 0px 1px 8px #24c64f;
    cursor: pointer;
    color: white;
    font-family: "Raleway SemiBold", sans-serif;
    height: 42.3px;
    margin: 0 auto;
    transition: 0.25s;
    width: 153px;
    text-align: center;
    color: black;
    }
    #jawaban{
        width: 50%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
    	border: 3px solid #555;
    	background-color: lightblue;
    }
    #soal2{
    	color: white;
    }
  </style>
  <body>
  	<div id="tampilan">
      <div id="judul">
		<h2>Hallo <?php echo $nama_user?>, tetap semangat ya.. you can do the best!!</h2>
		<h3>Lives : <?php echo $nyawa ?> | Score : <?php echo $nilai ?></h3>
	  </div><br><br><br>
	  <div id="soal">
	       <h2>Berapa Hasil Penjumlahan dibawah ini? </h2>
	       <div id="soal1">
           <h2 id="soal2"><?php echo $random1; echo  ' + ' ; echo $random2 ?> = </h2>
         <form action="jawaban.php" method="post">
            <input type="text" name="jawaban" id="jawaban" placeholder="Masukkan jawaban anda" autocomplete="off"><br><br>
            <button type="submit" id="btn-jawab" name="btnJawab">Jawab</button>
        </form>
    </div>
   
    </div>
	</div>
	<div id="footer">
    <b>Game Berhitung ini di buat oleh Nuur Roofiah Kusumawati K3518048</b>
  	</div>
  </body>
  </html>
