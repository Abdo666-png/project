<?php
if(isset($_POST['icon'])){
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'pharmacie_db';
    $conn = mysqli_connect($host,$user,$pass,$db,$conn);
}