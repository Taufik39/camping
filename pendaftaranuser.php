<!DOCTYPE html>
<html lang="en">
<head>
	<title>Form Pendaftaran | Penyewa </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('assets/images/img-4.jpeg');"></div>
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
			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" action="tambahakun.php" name="tambahadmin" method="post">
					<span class="login100-form-title p-b-59">
						Form Pendaftaran | Penyewa
					</span>

                    <div class="wrap-input100 validate-input" data-validate="Nama tidak boleh kosong">
						<span class="label-input100">Nama</span>
						<input class="input100" type="text" name="nama" placeholder="Nama..." required="required">
						<span class="focus-input100"></span>
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Username..." required="required">
						<span class="focus-input100"></span>
                    </div>
                    
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="*************" required="required">
						<span class="focus-input100"></span>
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="email" placeholder="Alamat Email..." required="required">
						<span class="focus-input100"></span>
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate="Nomor Handphone tidak boleh kosong">
						<span class="label-input100">Nomor Handphone</span>
						<input class="input100" type="number" name="nohp" placeholder="No. Handphone..." required="required">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Alamat tidak boleh kosong">
						<span class="label-input100">Alamat</span>
						<input class="input100" type="text" name="alamat" placeholder="Alamat..." required="required">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button name="daftar" value="Sign Up" ><a class="login100-form-btn">Daftar</a></button> 
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>