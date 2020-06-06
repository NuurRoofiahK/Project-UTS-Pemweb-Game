<?php
session_start();

if(!isset($_SESSION['masuk'])){
    header('Location: login.php');
}else{
    $nama_user = $_SESSION['nama_user'];
    $_SESSION['nilai'] = 0;
    $_SESSION['nyawa'] = 5;
}
?>

<!DOCTYPE html>
<html>
 <head>
 <link rel="shortcut icon" href="berhitung.png">
  <title>Selamat Datang <?php echo $nama_user ?> Di Game Berhitung</title>
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
    #table{
    	padding-top: 50px;
    	text-align: center;
    	margin-left: 300px;
    }
    .table1 {
    font-family: sans-serif;
    color: #444;
    border-collapse: collapse;
    width: 50%;
    border: 1px solid #f2f5f7;
}
.table1 tr th{
    background: black;
    color: #fff;
    font-weight: normal;
}
.table1, th, td {
    padding: 8px 20px;
    text-align: center;
}
.table1 tr:hover {
    background-color: #f5f5f5;
}
.table1 tr:nth-child(even) {
    background-color: #f2f2f2;
}
  </style>
</head>
<body>
	<div id="tampilan">
      <div id="judul">
		<h2>Hallo <?php echo $nama_user?>, Selamat Datang Kembali di Permainan ini</h2>
	  </div>
	  <div id="gambar">
    	<img src="berhitung.png" width="60px" height="60px">
      </div>
	  <center> 
	  	<a href="gamestart.php"><input id="start-btn" type="start" name="btnStart" value="Start"/></a>
	  	<a href="klik.php"><input id="close-btn" type="close" name="btnClose" value="Bukan Anda, Klik Disini"/></a>
	  </center>
	  <div id="table">
	  	<table class="table1">
	  		<thead>
	  			<tr>
	  				<th>No.</th>
	  				<th>Nama</th>
	  				<th>Email</th>
	  				<th>Score</th>
                    <th>Nyawa</th>
	  			</tr>
	  		</thead>
	  		<tbody>
                <?php
                include 'connectionn.php';
                $connectionn = new connectionn();
                $result = mysqli_query($connectionn->conn, "select * from user order by score desc limit 10");
                if($result)
                { $no = 0;
                while($userr = mysqli_fetch_array($result)){
                    $no += 1;
                    echo "<tr>";
                    echo "<td>$no</td>";
                    echo "<td>".$userr['name']."</td>";
                    echo "<td>".$userr['email']."</td>";
                    echo "<td>".$userr['score']."</td>";
                    echo "<td>".$userr['sisa_nyawa']."</td>";
                }
            }
                ?>
            </tbody>
	  	</table>
	  </div>
  	</div>
  	<div id="footer">
    <b>Game Berhitung ini di buat oleh Nuur Roofiah Kusumawati K3518048</b>
  	</div>
</body>
</html>
