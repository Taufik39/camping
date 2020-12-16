<?php
echo $_POST['username'];
if(!empty($_POST["daftarmitra"])) {
	require_once("koneksi.php");
	$sql = "INSERT INTO bio_menyewakan (nama_menyewakan, username, pass_menyewakan, email, no_hp, nama_toko, alamat, profil) VALUES (:nama, :username, :pass, :email, :nohp, :mitra, :alamat, :profil)";
	$stmt = $pdo_conn->prepare( $sql );
    $result = $stmt->execute( array 
    (':nama'=>$_POST['nama'],':username'=>$_POST['username'], ':pass'=>$_POST['pass'], ':email'=>$_POST['email'], ':nohp'=>$_POST['nohp'], ':mitra'=>$_POST['mitra'] , ':alamat'=>$_POST['alamat'] , ':profil'=>$_POST['profil'] ) );
	if (!empty($result) ){
      header('location:masukmitra.php');
      $insertMsg="Akun berhasil dibuat!"; 
    }
    else{
        $e->getMessage();
    }
}
?>