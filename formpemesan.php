<?php
session_name("verify");
session_start();
if (isset($_SESSION['login_user']) == '')
{
	header("location: formloginuser.php");
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>
 || Seping
</title>
 <style>
     body{
 background-image: url("assets/images/img-2.jpeg");
 margin-right: 20%;
 margin-left: 20%;

}
.login-background{
 font-family: arial;
 background: peachpuff;
 padding: 10px;
 box-shadow: 0px 0px 15px #222;
 border-radius: 3px;
 width: 500px;
 height: auto;
 margin: 50px auto;
 text-align: center;
 color:#222;

}
input[type="text"]{
  border: none;
 border-bottom: 1px solid #999;
 margin-bottom: 15px;
 color: #222;
 width: 100%;
 padding: 15px 0px;
 background: none;

}


input[type="submit"]{
 background: #0eb7cc;
 color: #fff;
 border-radius: 3px;
 padding: 15px;
 width: 100%;
 border: none;
 margin-top: 18px;
}
.img-logo{
 height: 100px;
 width: 100px;
}
a,a:hover,a:visited,a:active{
 text-decoration: none;
 color: #999;
}
 </style>

</head>
<body>
    <div class="container">
        
        <div class="login-background">
            <div class="login-header">
            
           </div>
       
    <?php
        require_once("koneksi.php");
        $stmt = $pdo_conn->prepare("SELECT * FROM barang JOIN bio_menyewakan JOIN bio_penyewa WHERE id_barang=" ."'" . $_GET['barang'] . "'");
        $stmt->execute();
        $result = $stmt->fetchAll();
    ?>
           <div class="login-body">
           <form name="frmAdd" action="tambahpesanan.php" method="POST" enctype="multipart/form-data">
                <h3 class="text-center title-login">Form Penyewaan Barang</h3>
                    <div class="form-group">
                         <input type="text" name="tglsewa" required placeholder="Tanggal Sewa"  />
                    </div>
                    <div class="form-group">
                         <input type="text" name="tglkembali" required placeholder="Tanggal Kembali" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="jumlah" required placeholder="Jumlah" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="barang" value="<?php echo $result[0]['id_barang']; ?>" readonly=""/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="pemilik" value="<?php echo $result[0]['id_menyewakan']; ?>" readonly=""/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="penyewa" value="<?php echo $_SESSION['id_user']; ?>" readonly=""/>
                    </div>
                        <input type="submit" class="btn btn-block btn-custom-pink" value="PESAN" name="tambahpesanan"/>
                    
                    <div class="text-center forget"><br>
                    <a href="viewuser.php">Back</a>
            </form>
           </div>
       </div>
</body>
</html>
