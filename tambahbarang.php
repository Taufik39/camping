<?php
    if(!empty($_POST["tambahbarang"])) {
        require_once("koneksi.php");

		$nama = $_FILES['foto']['name'];
        $file_tmp = $_FILES['foto']['tmp_name'];
        $folder = './img/';
        
        $cek = move_uploaded_file($file_tmp, $folder.$nama);
        
        if($cek){
            $sql = "INSERT INTO barang (pemilik, nama_barang, biaya, deskripsi, foto) 
            VALUES (:namatoko, :namabarang, :biaya, :deskripsi, :foto)";
            $stmt = $pdo_conn->prepare( $sql );
            $result = $stmt->execute( array
            (':namatoko'=>$_POST['namatoko'], ':namabarang'=>$_POST['namabarang'], ':biaya'=>$_POST['biaya'], ':deskripsi'=>$_POST['deskripsi'], ':foto' =>$nama ));
            if (!empty($result) ){
                echo '<script type="text/javascript">'; 
                echo 'alert("Barang Sewaan Berhasil Ditambahkan !");'; 
                echo 'window.location.href = "viewmitra.php";';
                echo '</script>';
            }
            else {
                echo '<script type="text/javascript">'; 
                echo 'alert("Barang Telah ada, Silahkan Masukkan Barang Lain !");'; 
                echo 'window.location.href = "formtambahbarang.php";';
                echo '</script>';
            }
        }
        else{
            echo '<script type="text/javascript">'; 
            echo 'alert("Upload File Gagal !");'; 
            echo 'window.location.href = "formtambahbarang.php";';
            echo '</script>';
        }
        
    }
?>
