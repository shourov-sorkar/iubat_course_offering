<?php
    include "db/conf.php";
    include "db/db.php";
    include "db/session.php";
    Session::checkSession();
    $db = new Database();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $student_name = $_POST["student_name"];
      $student_id = $_POST["student_id"];
      $student_mail = $_POST["student_mail"];
      $student_phone_number = $_POST["student_phone_number"];
      $query = "INSERT INTO student_information(`student_name`, `student_id`, `student_mail`, `student_phone_number`) 
      VALUES ('$student_name','$student_id','$student_mail','$student_phone_number')";
      $result = $db->insert($query);
      if($result == true){
        header("Location:home_page.php?msg='Thank you! Your Information collected sucessfully.'");
      }else{
        header("Location:home.php?msg='Something is wrong! Please try again.'");
      }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Information</title>
	<link rel="stylesheet" type="text/css" href="home_style.css">
</head>
<body>
	<form method="POST" action="home.php">
		<div class="container"></div>
	<div class="main_body">
		<h1>Please Provide Your Valid Information</h1>
		<div class="container">
			<div class="Information">
				<div class="logo">
					<img src="img/icon.png">
				</div>
				<div class="personal_information">
					<input class=name type="text" name="student_name" placeholder="Your name" required>
				</div>
				<div class="personal_information">
					<input class=id type="number" name="student_id" placeholder="Student id" required>
				</div>
				<div class="personal_information">
					<input class=email type="email" name="student_mail" placeholder="Your Valid Email"   required>
				</div>
				<div class="personal_information">
					<input class=phone_number type="number" name="student_phone_number" placeholder="Your Valid Phone Number" required>
				</div>
				
				<div class="btn">
			<button type="submit" class="sub">Submit</button>
		</div>
			</div>
		</div>
	</div>
	</form>
	<?php
        if(isset($_GET["msg"])){
          $msg = $_GET["msg"];
      ?>
      <script>
        window.alert(<?php echo $msg;?>);
        window.location = "home.php";
      </script>
      <?php
        }
      ?>

</body>
</html>