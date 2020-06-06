<?php
session_start();
if(isset($_POST['btnSubmit']))
{
    $_SESSION['nama_user'] = $_POST['nama_user'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['masuk'] = 1;
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
 <head>
  <link rel="shortcut icon" href="berhitung.png">
  <title>Game UTS Berhitung</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <style>
  	#tampilan {
        background: #fbfbfb;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 410px;
        margin: 6rem auto 8.1rem auto;
        width: 329px;
    }
    body {
       background: -webkit-linear-gradient(bottom, #2dbd6e, #1E90FF);
       -moz-linear-gradient(bottom, #2dbd6e, #1E90FF);
       background-repeat: no-repeat;
     }
     #kontainer {
      padding: 12px 44px;
     }
     #judul {
      font-family: "Raleway Thin", sans-serif;
      letter-spacing: 4px;
      padding-bottom: 23px;
      padding-top: 13px;
      text-align: center;
      }
     #garisbawah {
      background: -webkit-linear-gradient(right, #2dbd6e, #1E90FF);
      height: 2px;
      margin: -1.1rem auto 0 auto;
      width: 200px;
      }
      a {
      text-decoration: none;
      }
      label {
      font-family: "Raleway", sans-serif;
      font-size: 14pt;
      }
.form {
    align-items: left;
    display: flex;
    flex-direction: column;
}
.form-border {
    background: -webkit-linear-gradient(right, #2dbd6e, #1E90FF);
    height: 1px;
    width: 100%;
}
.form-content {
    background: #fbfbfb;
    border: none;
    outline: none;
    padding-top: 14px;
}
#submit-btn {
    background: -webkit-linear-gradient(right, #2dbd6e, #1E90FF);
    border: none;
    border-radius: 15px;
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
#submit-btn:hover {
    box-shadow: 0px 1px 18px #24c64f;
}
#gambar{
  text-align: center;
}
  </style>
 </head>
 <body>
 	<div id="tampilan">
    <div id="gambar">
    <img src="berhitung.png" width="60px" height="60px">
    </div>
  		<div id="kontainer">
  			<div id="judul">
    			<h2>START GAME</h2>
    			<div id="garisbawah"></div>
            </div>
            	<form method="post" class="form"> 
            		  <label for="name" style="padding-top:22px">&nbsp;Name</label>
                        <input id="user-name" class="form-content" type="text" name="nama_user" required placeholder="Enter Name" />
                    <div class="form-border"></div>
            		   <label for="user-email" style="padding-top:13px">&nbsp;Email</label>
            		   <input id="user-email" class="form-content"type="email" name="email" autocomplete="on"required placeholder="Enter Email" />
                    <div class="form-border"></div>
                       <input id="submit-btn" type="submit" name="btnSubmit" value="Submit" />
            	</form>
        </div>
  	</div>
 </body>
</html>