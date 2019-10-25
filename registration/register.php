<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>  
  <title>CSC 208 | Registration system with PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body> 
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Full Name</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
	<div class="input-group">
  	  <label>Sex</label>
  	  <input type="sex" name="sex" value="<?php echo $sex; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Matric Number</label>
  	  <input type="matric" name="matric" value="<?php echo $matric; ?>">
  	</div>
	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
	  <div class="input-group">
  	  <label>Address</label>
  	  <input type="address" name="address" value="<?php echo $address; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Log in</a>
  	</p>
  </form>
</body>
</html>