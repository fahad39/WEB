<?php
include("facebook.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Facebook.com</title>
	<link rel="stylesheet" type="text/css" href="facbook.css">
	<script src="facebook.javascript"></script>
	<link rel="stylesheet" type="text/css" href="E:\website\facbook\bootstrap-4.0.0-beta.2-dist\css\bootstrap.css">
</head>
<body>
<div id="header" class="col-lg-12">
	<div id="facbook">
		<h1><b>facebook</b></h1>
	</div>
	<div>
		<form name="login" onsubmit="return check();" method="post">
	<table id="login_form">
		<tr>
			<td>Email or Phone</td>
			<td>Password</td>
		</tr>
		<tr>
			<td><input type="Email or Phone" name="eop"></td>
			<td><input type="Password" name="pass"></td>
			<td><input type="submit" name="sub" value="log in" id="logbutton"></td>
		</tr>
	</table>
	</form>
	</div>
	
</div>
<div id="body_left">
	
	<table id="leftpic">
		<tr>
			<td> <p id="use"><b> Facebook helps you connect and share with the <br />people in your life.</b></p></td>
		</tr>
		<tr>
			<td>
				<img src="2.png">
			</td>
		</tr>
	</table>
</div>
<div id="body_right">
	<h1 id="Create">Create an account</h1>
	<h2 style="font-family: calibri; font-size: 23px;">It's free and always will be</h2>
	<form name="new_account" onsubmit="return new_acc()" method="post">
		<table>
			<tr>
				<td><input type="text" name="fname" placeholder="First Name" class="box"></td>
				<td><input type="text" name="lname" placeholder="Last Name" class="box"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="Phone or Email" name="eop" placeholder="Phone Number or Email" class="box"></td>
			</tr>
			<tr>
				<td><input type="Password" name="pass" placeholder="Password" class="box"></td>
			</tr>
			<tr><td>Birthday</td></tr>
			<tr>
				<td>
					<select name="day">
					 <option>Day</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
					</select>
					<select name="mon">
						<option>Month</option>
                            <option>Jan</option>
                            <option>Feb</option>
                            <option>Mar</option>
                            <option>Apr</option>
                            <option>May</option>
                            <option>Jun</option>
                            <option>Jul</option>
                            <option>Aug</option>
                            <option>Sep</option>
                            <option>Oct</option>
                            <option>Nov</option>
                            <option>Dec</option>
					</select>
					<select name="year">
						 <option>Year</option>
                            <option>2017</option>
                            <option>2016</option>
                            <option>2015</option>
                            <option>2014</option>
                            <option>2013</option>
                            <option>2012</option>
                            <option>2011</option>
                            <option>2010</option>
					</select>
				</td>
				<td>
					<a href="#" id="dob">Why do I need to provide my <br>date of birth?</a>
				</td>
			</tr>
			<tr>
				<td style="font-family: Helvetica;font-size: 16.5px;"><input type="radio" name="gender">Female  <input type="radio" name="gender">Male</td>
			</tr>
			<tr>
				<td>
					<p style="font-size:10.5px;font-family:helvetica;">By clicking Create Account, you agree to<br> our <a class="clicks" href="#">Terms </a> and confirm that you have read<br> our<a class="clicks" href="#"> Data Policy</a>, including our<a class="clicks" href="#"> Cookie Use<br> Policy.</a> You may receive SMS message<br> notifications from Facebook and can opt<br> out at any time.</p>
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="Create an account" id="c_acc">
				</td>
			</tr>
			<tr>
				<td>
					<b style="font-size: 12.5px;"><a href="#" style="text-decoration: none;">Create a page</a> for Celebrity or Brand</b>
				</td>
			</tr>
		</table>
	</form>
</div>
<div id="footer" class="col-lg-12">
	<center><pre id="options"> English (UK)   ردو  پښتو    العربية   हिन्दीবাং  লাਪੰਜਾਬੀ      فارسی     ગુજરાતી    Deutsch   Español <hr>Sign Up Log In  Messenger   Facebook Lite   Mobile  Find Friends    People  Pages   Places  Games   Locations
Celebrities Marketplace Groups  Recipes Sports  Moments Instagram   About   Create Advert   Create Page Developers
Careers Privacy Cookies AdChoices   Terms   Help
</pre></center>
</div>
</body>
</html>
