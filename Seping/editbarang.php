<?php
if(!empty($_POST["editbarang"])){
    
    require_once("koneksi.php");

    $nama = $_FILES['foto']['name'];
    $file_tmp = $_FILES['foto']['tmp_name'];
    $folder = './img/';
    
    $cek = move_uploaded_file($file_tmp, $folder.$nama);

    if($cek){
        $stmt=$pdo_conn->prepare("UPDATE barang set 
        nama_barang=:namabarang, 
        biaya=:biaya,
        deskripsi=:deskripsi,
        foto=:foto
        where nama_barang=:namabarang");

        $stmt->bindParam(':namabarang', $_POST['namabarang']);
        $stmt->bindParam(':biaya', $_POST['biaya']);
        $stmt->bindParam(':deskripsi', $_POST['deskripsi']);
        $stmt->bindParam(':foto', $nama);
        $re = $stmt->execute();
        if($re) {
            echo '<script type="text/javascript">'; 
            echo 'alert("Barang Berhasil Diupdate !");'; 
            echo 'window.location.href = "viewmitra.php";';
            echo '</script>';
        }
    }
    else{
        echo '<script type="text/javascript">'; 
        echo 'alert("Upload File Gagal!");'; 
        echo 'window.location.href = "formeditbarang.php";';
        echo '</script>';
    }
}   
?>