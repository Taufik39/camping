<?php
    if(!empty($_POST["tambahpesanan"])) {
        require_once("koneksi.php");

            $sql = "INSERT INTO pemesanan (tgl_sewa, tgl_kembali, jumlah, barang, pemilik, penyewa) 
            VALUES (:tglsewa, :tglkembali, :jumlah, :barang, :pemilik, :penyewa)";
            $stmt = $pdo_conn->prepare( $sql );
            $result = $stmt->execute( array
            (':tglsewa'=>$_POST['tglsewa'], ':tglkembali'=>$_POST['tglkembali'], ':jumlah'=>$_POST['jumlah'], ':barang'=>$_POST['barang'], ':pemilik'=>$_POST['pemilik'], ':penyewa'=>$_POST['penyewa'] ));
            if (!empty($result) ){
                echo '<script type="text/javascript">'; 
                echo 'alert("Barang Berhasil Disewa !");'; 
                echo 'window.location.href = "viewuser.php";';
                echo '</script>';
            }
            else {
                echo '<script type="text/javascript">'; 
                echo 'alert("Barang Telah disewa, Silahkan Masukkan Barang Lain !");'; 
                echo 'window.location.href = "formpemesan.php";';
                echo '</script>';
            }
        }
?>
