<?php
session_start();

$hasilakhir = $_SESSION['hasilakhir'];
$jawaban = $_POST['jawaban'];

if(isset($_POST['btnJawab'])){
    if($jawaban == $hasilakhir){
        $_SESSION['nilai'] = $_SESSION['nilai'] + 10;
        header('Location: jawabanbenar.php');
    }else{
        $_SESSION['nilai'] = $_SESSION['nilai'] - 2;
        $_SESSION['nyawa'] = $_SESSION['nyawa'] - 1;
        header('Location: jawabansalah.php');
    }
}

?>