<!DOCTYPE html>
<html>
<head>
<title>LOGIN</title>
<link href="css/loginuser.css" rel="stylesheet">   
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
      <h1>Login</h1>
        <form action="ceklogin.php" method="post">
            <label>Username</label><br>
            <input type="text" name="userlog" id="userlog"><br>
            <label>Password</label><br>
            <input type="password" name="passlog" id="passlog"><br>
            <button id="masuk" name="masuk">Login</button>
            <p> Belum punya akun?
              <a href="pendaftaranuser.php">Register di sini</a><br><br><br>
              <a href="formloginmitra.php">Masuk sebagai mitra</a>
            </p>
        </form>
    </div>
  </body>
</html>
    

