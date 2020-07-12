<?php
	include "db/conf.php";
	include "db/db.php";
	include "db/session.php";
	Session::checkSession();
	if(isset($_GET["logout"])){
		Session::destroy();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>home_page</title>
	<link rel="stylesheet" type="text/css" href="home_page.css">
</head>
<body>
	<div class="container">
		
	</div>
	<div class="header">
		<div class="container">
			<ul>
				<a href="#Home"><li>Home</li></a>
				<a href="home_page.php?logout"><li>Log Out</li></a>				
			</ul>
		</div>
	</div>
	<div class="header_text">
		<div class="container">
			<h1>Online Course Enrollment: Summer 2020</h1>
		</div>
	</div>
	<div class="home">
		<div class="container">
			<p>Home</p>
		</div>
	</div>
	<div class="information">
		<div class="container">
			<div class="information_box">
				<div class="left">
					<div class="left_up">
						<p>The Class Schedule Summer-2020 will be available at 30th of June 2020. All registered IUBAT students are required to enroll in courses for Summer -2020 by 29th June 2020 through the following procedure:</p>
						<ol>
							<li>Click Course Enrollment at demo.course_ofeering.info.</li>
							<li>Choose the course/courses from the Class Schedule </li>
							<li>If you are under Probation, Suspension, Dismissal list, you can take maximum 8-11 credit hours, not only that first you have to select your completed course/courses in which you got <strong>D or F</strong></li>
							<li>If you cannot choose course/courses, contact your department or College immediately for resolution of the problem</li>
							<li>For system related problem mail to demo@iubat.edu</li>
						</ol>
						<div class="left_up_bottom">
							<strong>Note:</strong>
							<ol>
								<li>Without enrolling in classes of a course, you cannot study for summer-2020</li>
								<li>If your CGPA is 2.00 OR less you must contact with your department.</li>
							</ol>
						</div>
					</div>
					<div class="left_down">
						<div class="left_down_one">
							<p>Result Status</p>
						</div>
						<div class="left_down_two">
							<div class="result_info">
								<p>Result-</p>
								<p>Status-</p>
								<strong>You can take any course but MAX 15 credit</strong>
							</div>
						</div>
					</div>
				</div>
				<div class="right">
					<div class="right_up">
						<div class="right_up_one">
							<h1>Student Information</h1>
						</div>
						<div class="right_up_two">
							<ul>
								<li>Name:</li>
								<li>Student Id:</li>
								<li>Department:</li>
								<li>Program:</li>
								<li>E-mail:</li>
							</ul>
						</div>
					</div>
					<div class="right_down">
						<ul>
							<a href="#"><li>Completed Course</li></a>
							<a href="#"><li>View Pre-Requisite Course</li></a>
							<a href="#"><li>My Class Routine</li></a>
							<a href="demo.pdf" download="doc"><li>Download PDF</li></a>
							<a href="home_page.php?logout"><li>LogOUT</li></a>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="bottom">
		<div class="container">
			<div class="bottom_btn">
				<a href="#">Course Enrollment</a>
			</div>
			
		</div>
	</div>
	<div class="bottom_credit">
		&copy; Copyright 2020 . All right reserved by <a href="#">Shourov</a> 
	</div>
</body>
</html>