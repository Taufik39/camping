<?php
session_name("verify");
session_start();
if (isset($_SESSION['login_user']) == '')
{
	header("location: formloginmitra.php");
}
require_once("koneksi.php");
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
            <?php
        require_once("koneksi.php");
        $stmt = $pdo_conn->prepare("SELECT * FROM barang JOIN bio_menyewakan WHERE nama_barang=" ."'" . $_GET['barang'] . "'");
        $stmt->execute();
        $result = $stmt->fetchAll();
    ?>
           </div>
           <div class="login-body">
           <form name="frmAdd" action="editbarang.php" method="POST" enctype="multipart/form-data">
                <h3 class="text-center title-login">Edit Barang Sewaan</h3>
                    <div class="form-group">
                         <input type="text" name="namatoko" value="<?php echo $result[0]['nama_toko']; ?>" readonly="" />
                    </div>
                    <div class="form-group">
                         <input type="text" name="namabarang" value="<?php echo $result[0]['nama_barang']; ?>" readonly=""/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="biaya" required value="<?php echo $result[0]['biaya']; ?>"/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="deskripsi" required value="<?php echo $result[0]['deskripsi']; ?>" />
                    </div>
                    <div class="form-group">
                        <small style="align: left; color:grey;">Tambahkan Foto Barang</small><br><br>
                        <input type="file" name="foto" required value="<?php echo $result[0]['foto']; ?> " />
                    </div>
                        <input type="submit" class="btn btn-block btn-custom-pink" value="UBAH" name="editbarang"/>
                    
                    <div class="text-center forget"><br>
                    <a href="viewmitra.php">Back</a>
</form>
       
            
           </div>
          
        
       </div>
</body>
</html>
