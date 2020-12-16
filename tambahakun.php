<?php
echo $_POST['username'];
if(!empty($_POST["daftar"])) {
	require_once("koneksi.php");
	$sql = "INSERT INTO bio_penyewa (nama_penyewa, username_penyewa, pass_penyewa, email_penyewa, no_hp_p, alamat_penyewa) VALUES (:nama, :username, :pass, :email, :nohp, :alamat)";
	$stmt = $pdo_conn->prepare( $sql );
    $result = $stmt->execute( array
    (':nama'=>$_POST['nama'],':username'=>$_POST['username'], ':pass'=>$_POST['pass'], ':email'=>$_POST['email'], ':nohp'=>$_POST['nohp'], ':alamat'=>$_POST['alamat'] ) );
	if (!empty($result) ){
      header('location:masukuser.php');
      $insertMsg="Akun berhasil dibuat!"; 
    }
    else{
        $e->getMessage();
    }
}
?>