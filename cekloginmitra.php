<?php
require_once("koneksi.php");
session_name("verify");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$admin = $pdo_conn->prepare('SELECT * FROM bio_menyewakan WHERE username = :username and pass_menyewakan = :pass');
$admin->execute(array(
                  ':username' => $_POST['userlog'],
                  ':pass' => $_POST['passlog']
                  ));
$row = $admin->fetch(PDO::FETCH_ASSOC);
if(empty($row['username']))
{
    echo "Username atau password yang dimasukan tidak valid";
    echo"<br/><a href='formloginmitra.php'>Login Ulang</a>";
}
else 
{
    $_SESSION['login_user'] = $_POST['userlog'];
    $_SESSION['id_user'] = $row['id_menyewakan'];
    $_SESSION['level_user'] = $row['level'];
    header("location: masukmitra.php");
}
}
?>