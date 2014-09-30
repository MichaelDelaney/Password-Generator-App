<!DOCTYPE html>
<html>
<head>
	<!-- Meta -->
	<meta charset='utf-8'>
	<!-- Webpage Title -->
	<title>Password Generator</title>
	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap core CSS -->
	<link href="css/style.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>

	<div class="container" >

		<!--Application Title at the Top-->
		<br><p class="application_title" >Password <span style="color:orange">Generator</span></p>
		
		<!-- Generated Password imported from PHP Logic-->
		<p class="para2"><?php require('logic.php'); ?></p><br>
		
		<!-- Password Form -->
			<form class="form_style" method='post' action='index.php'>
				# of Words <input type="text" name="WordAmount"><br><br>
				<input type="checkbox" name="AddASymbol" value="Yes" />Add A Symbol <BR>
				<input type="checkbox" name="AddANumber" value="Yes" />Add A Number <BR>
				<input type='submit' value='Generate a New Password!'><br><br>
			</form>
		
		<!-- Desription of App and What xkcd is -->
		<p class="para1"><b>Description:</b> xkcd is a webcomic that was created by Randall Munroe. The comic "Password Strength" was created to question pass phrase strength.
		It is a common misconception that short passwords that include a variation of numbers and symbols are difficult to break, however, longer passwords with simple words 
		(that are easier to remember) provided better protection. This web app will generate a password with random simple words. You can also specify whether or not you want
		to include numbers and symbols within the password.
		<br><br>
		You can view the original comic source by clicking this link:  
		<a href="http://xkcd.com/936/">xkcd password strength.</a></p><br>
		
		<!-- Picture of the Comic -->
		<img src="images/password_strength.png" alt="xkcd comic"/>
		<br><br>
		
		<!--Contact Information-->
		<center><p>MichaelDelaney@fas.harvard.edu</p></center>
		
	</div><br><br>

<!--JavaScript-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
	
</body>
</html>