<?php
		include "db/conf.php";
		include "db/db.php";
		$db = new Database();
		include "db/session.php";
		Session::checkLogin();

		if($_SERVER["REQUEST_METHOD"] == "POST"){
        $userName = $_POST["userName"];
        $pass = md5($_POST["pass"]);
        $query = "SELECT * FROM user_account WHERE `user_name`='$userName' and `user_pass`='$pass'";
        $result = $db->select($query);
        if ($result == true) {
            $value = $result->fetch_assoc(); 
            Session::set("login", true);
            header("Location: home.php");
        }else{
        	header("Location: login.php?msg='Wrong information!'");
        }
    }

?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css"/>
    <link rel="stylesheet" href="all.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="image" href="img/icon.png">
</head>
<body>
    <div class="notice">
		<marquee behavior="alternate">Notice: IUBAT course offering will be close in 29th june 2020 </marquee>
	</div>
	<div class="header_image">
		<img src="img/logo.png" alt="logo">
	</div>
   
	<form action="login.php" method="POST">
		<div class="user">
			<input class="first" type="text" name="userName" placeholder="User Name" required>
		</div>
		<div class="pass">
			<input class="last" type="Password" name="pass" placeholder="Password" required>
		</div>
		<div class="btn">
			<button type="submit" class="sub">Submit</button>
		</div>
	</form>


</body>
</html>
		<?php
            if(isset($_GET["msg"]))
            {
				$msg = $_GET["msg"];
		?>
		<script type="text/javascript">
			window.alert(<?php echo $msg;?>);
		</script>
		<?php
			}
		?>

	</body>
</html>