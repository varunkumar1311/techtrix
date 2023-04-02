<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="biet.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<div id="outside">
  <div align="center">
			<div id="header"> 
				<center><a href="index.html">
					<img src="logo.png"  alt="logo" style="height: 130px; width: 1000px;"></a>
				</center>
	        </div><br>
              
    <div class="navbar">
      <a href="index.html">Home</a>
      <div class="dropdown">
            <a class="dropbtn">EVENTS
                  <i class="fa fa-caret-down"></i>
              </a>
            <div class="dropdown-content">
                <a href="techmaster.html">TECH MASTER</a>
                <a href="ideapitching.html">IDEA PITCHING</a>
                <a href="hauntedhouse.html">HAUNTED HOUSE</a>
                <a href="posterpaperpresentation.html">POSTER&PAPER PRESENTATION</a>
          <a href="bowlout.html">BOWL OUT</a>
                <a href="code-a-thon.html">CODE-A-THON</a>
                <a href="mockinterviews.html">MOCK INTERVIEWS</a>
          <a href="vintagelook.html">VINTAGE LOOK</a>
                <a href="houseoftalents.html">HOUSE OF TALENTS</a>
                <a href="gameon.html">GAME ON</a>
                <a href="sixthsense.html">SIXTH SENSE</a>
              </div>
			</div>
	     <a href="contact.html">Contact Us</a>
    </div>
</div>


<div class="form-wrapper">
            <div class="header">
                <div>
                    <center>
                        <h2 style="font-size: 30px;">SIGN UP</h2>
                    </center>
                </div>
            </div>
            <div ><center>
            <fieldset>
                <legend>Sign Up with your details</legend>
				<div id="box">
					<form method="post">
						<label for="Name">Username:</label>
						<input id="text" type="text" name="user_name"><br><br>
						<label for="Name">Password:</label>
						<input id="text" type="password" name="password"><br><br>
						<input id="button" type="submit" value="Signup"><br><br>
						<a href="login.php">Click here  to  Login</a><br><br>
					</form>
				</div>
			</fieldset>
		</div>
	</div>

<!-- Footer Section -->
<div class="footer">
    <h1>MALLA REDDY COLLEGE OF ENGINEERING & TECHNOLOGY</h1>
    <h3>
    Maisammaguda,Dhulapally,Secunderabad-500100
    </h3>
</div>
</body>
</html>