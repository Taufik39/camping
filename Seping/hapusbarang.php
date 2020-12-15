<?php
    require_once("koneksi.php");
    $stmt=$pdo_conn->prepare("DELETE from barang WHERE id_barang=" ."'" . $_GET['barang'] . "'");
    $stmt->execute();
    echo '<script type="text/javascript">'; 
    echo 'alert("Barang Berhasil Dihapus !");'; 
    echo 'window.location.href = "viewmitra.php";';
    echo '</script>';
?>