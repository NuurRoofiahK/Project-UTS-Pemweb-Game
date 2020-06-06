<!DOCTYPE html>
<html>
 <head>
 <link rel="shortcut icon" href="berhitung.png">
  <title>Hall Of Fame</title>
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
    	margin-left: 350px;
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
		<h2>Berikut ini adalah Pengguna Yang Memiliki Skor yang Tinggi. Tetap Semangat Yaa!!</h2>
	  </div>
	  <center> 
	  	<a href="berakhir.php"><input id="start-btn" type="start" name="btnStart" value="Kembali"/></a>
	  	<a href="klik.php"><input id="close-btn" type="close" name="btnClose" value="Keluar"/></a>
	  </center>
	  <div id="table">
	  	<table class="table1">
	  		<thead>
	  			<tr>
	  				<th>No.</th>
	  				<th>Nama</th>
	  				<th>Email</th>
	  				<th>Score</th>
	  			</tr>
	  		</thead>
	  		<tbody>
                <?php
                include 'connectionn.php';
                $db = new connectionn();
                $sql = mysqli_query($db->conn, "select * from user order by score desc limit 10");
                $no_user = 0;
                while($userr = mysqli_fetch_array($sql)){
                    $no_user += 1;
                    echo "<tr>";
                    echo "<td>$no_user</td>";
                    echo "<td>".$userr['name']."</td>";
                    echo "<td>".$userr['email']."</td>";
                    echo "<td>".$userr['score']."</td>";
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

