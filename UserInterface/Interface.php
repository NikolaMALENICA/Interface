
<html>
<head>
</head>
<body>
	<?php
	$db = new PDO('sqlite:UserInfo.db');
	$db->exec("CREATE TABLE IF NOT EXISTS Autentification(name TEXT, email TEXT, phone TEXT)");
	if (isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email']; 
		$phone = $_POST['phone'];
		if ($search = $db->exec("SELECT (name, email, phone) from Autentification WHERE (name = $name AND email = $email AND phone = $phone)") == TRUE ){
			$insert = $db->exec("INSERT INTO TABLE Autentification(name, email, phone) VALUES ($name, $email, $phone)");?>
			<a href="./Users/heyUser.php">niko</a>
	<?php
		}
	}

	?>
	
	<form action="" method="POST">
	   <label><b>Name</b></label>
       <input type="text" placeholder="Enter your name" id='name' name="name" required></br></br>
       
	   <label><b>Email</b></label>
       <input type="text" placeholder="Enter your email" id='email' name="email" required></br></br>
       
	   <label><b>Phone number</b></label>
       <input type="text" placeholder="Enter your phone number" id='phone' name="phone" required></br></br>
	   
	   <input type="submit" name="submit" value="sign in">
	</form>
</body>

