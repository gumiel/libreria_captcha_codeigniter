<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div>
		<h3><?php echo $mensaje ?></h3>
		<form action="<?php echo site_url('login/procesarIngreso'); ?>" method="post" >
			<div>
				<label>Usuario:</label> <input type="text" name="login" value="">

			</div>
			<br>
			<div>
				<label>Contraseña:</label> <input type="password" name="password" value="">
			</div>
			<br>
		    <div>
		    	<label>CAPTCHA:</label><img src="http://localhost/libreria_captcha_codeigniter/ejemplo/ci_captcha/index.php/Login/crearCaptcha" alt="CAPTCHA" class="captcha-image">
		    	<button type="button" class="refresh-captcha">ACTULIZAR</button>
			    <p>Ingresar texto de captcha:<input type="text" id="captcha" name="captcha" ></p>
		    </div>
		    <br>
		    <div>
		    	<button type="submit">INGRESAR</button>
		    </div>
		</form>
	    
	</div>
	<script>
		var refreshButton = document.querySelector(".refresh-captcha");
		refreshButton.onclick = function() {
			document.querySelector(".captcha-image").src = 'http://localhost/libreria_captcha_codeigniter/ejemplo/ci_captcha/index.php/Login/crearCaptcha?' + Date.now();
		}
	</script>
</body>
</html>