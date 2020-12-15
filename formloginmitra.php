<!DOCTYPE html>
<html>
<head>
<title>LOGIN</title>
<link href="css/loginmitra.css" rel="stylesheet">   
</head>
<body>
  <body>
    <?php
		if(isset($errorMsg))
		{
			?>
            <div class="alert alert-danger">
            	<strong>UPS! <?php echo $errorMsg; ?></strong>
            </div>
            <?php
		}
		if(isset($insertMsg)){
		?>
			<div class="alert alert-success">
				<strong>SUCCESS! <?php echo $insertMsg; ?></strong>
			</div>
        <?php
		}
		?> 
    <div class="container">
      <h1>Login Mitra</h1>
        <form action="cekloginmitra.php" method="post">
            <label>Username Mitra</label><br>
            <input type="text" name="userlog" id="userlog"><br>
            <label>Password Mitra</label><br>
            <input type="password" name="passlog" id="passlog"><br>
            <button id="masukmitra" name="masukmitra">Login</button>
            <p> Belum punya akun?
              <a href="pendaftaranmitra.php">Register di sini</a><br><br><br>
            </p>
        </form>
    </div>
  </body>
</html>
    

