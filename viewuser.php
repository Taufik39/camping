<?php
session_name("verify");
session_start();
if (isset($_SESSION['login_user']) == '')
{
	header("location: formloginuser.php");
}
require_once("koneksi.php");
$stmt = $pdo_conn->prepare("SELECT * FROM barang ORDER BY nama_barang DESC");
$stmt->execute();
$result = $stmt->fetchAll();
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Seping </title>
    <meta name="keywords" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.">
    <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.">
  
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/flat-icon/flaticon.css">
    <link rel="stylesheet" href="css/viewuser.css">
<title>Seping</title>
</head>
<body>
  <div class="container-fluid oke">
    <div class="row">
      <div class ="col-sm-4">
        <h3>Temukan peralatan campingmu disini</h3>
      </div>
      <div class ="col-sm-6" style="text-align: right; padding-top: 20px;">
        <a href="masukuser.php" >Home</a>
        <a href="barangdisewa.php" >Keranjang</a>
      </div>
      </div>
    </div>
    </div>
  </div>
  </div>
  <br><br>
    <div class="container-fluid d">
        <div class="container">
        <?php
    $stmt_makanan = $pdo_conn->prepare("SELECT * FROM barang JOIN bio_menyewakan WHERE pemilik = id_menyewakan ORDER BY nama_barang");
    $stmt_makanan->execute();
    $result_makanan = $stmt_makanan->fetchAll();
  ?>
          <div class="row">
          <?php
        		if(!empty($result_makanan)) { 
        		foreach($result_makanan as $row) {
        		?>
				<div class="col-md-4" data-aos="slide-up">
					<div class="card view zoom">
              <?php echo "<img style='height: 200px; width: 300px;' src='img/$row[foto]'/>";?>
					  	<div class="card-body">
						  <h4 class="card-title"><?php echo $row["nama_barang"]; ?></h4>
					    	<ul class="list-group list-group-flush">
                  
                <li class="list-group-item">Nomor Barang : <?php echo $row["id_barang"]; ?></li>
                  <li class="list-group-item">Nama Toko : <?php echo $row["nama_toko"]; ?></li>
                  <li class="list-group-item">Biaya : <?php echo $row["biaya"]; ?></li>
                  <li class="list-group-item">Deskripsi : <?php echo $row["deskripsi"]; ?></li>
								<center><a href='formpemesan.php?barang=<?php echo $row['nama_barang']; $_SESSION['barang']; ?>'><button>PESAN</button></a></center>
							</ul>
					  	</div>
					</div>
				</div>
				<?php
					}
					}
				?>
           </div>
        </div>
      </div>
      <br><br>
      </div>
</body>
</html>