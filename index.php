<?php

	session_start();

	if(isset($_SESSION["error"])){
		echo $_SESSION["error"];
		unset($_SESSION["error"]);
	}

?>

<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="./styles.css">
	</head>
	<body>

		<div class="login-page">
		  <div class="form">
			
		    <form method="POST" action="register.php" class="register-form">
		      <input type="text" name="username" placeholder="name"/>
		      <input type="password" name="password" placeholder="password"/>
		      <button type="submit">create</button>
		      <p class="message">Already registered? <a href="#">Sign In</a></p>
		    </form>
		    <form method="POST" action="login.php" class="login-form">
		      <input type="text" name="username" placeholder="username"/>
		      <input type="password" name="password" placeholder="password"/>
			  <button type="submit">login</button>
		      <p class="message">Not registered? <a href="#">Create an account</a></p>
		    </form>
		  </div>
		</div>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
				<script id="rendered-js" >
			$('.message a').click(function () {
			$('form').animate({ height: "toggle", opacity: "toggle" }, "slow");
			});
    	</script>
	</body>

</html>