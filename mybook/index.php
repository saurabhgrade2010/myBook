<?php 
session_start();
?>
<!DOCTYPE html>
<head>
  <script src="main.js">
    </script>
	<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>
<head>
<style>
header{
background-color:rgb(85, 105, 151);
height:80px;
width:100%;
}
.login1{
  float: right;
  padding: 6px 10px;
  margin-top: 20px;
  margin-right: 170px;
  color: white;
  font-size: 17px;
  border: none;
  cursor: pointer;
}
button{
background-color:blue;
border:1px solid black;
color:white;
}
.a1{
width:50%;
height:100%;
position:absolute;
}
.a2{
margin-left:50%;
height:100%;
}
.a3{
margin-left:40px;
margin-top:150px;
  position:absolute;
}
 .a4{
 border: 1px solid gray;
  border-radius: 4px;
   width: 30%;
  padding: 12px 20px;
  margin: 8px 0  ;
  box-sizing: border-box;
}
</style>
</head>
<body style="background-color:rgb(242, 242, 242);">
<header>
<form onsubmit="return false" id="login" method="post">
   <div style="position:absolute;margin-left:200px;margin-top:30px;color:white;font-family: arial;font-size: 40px;"><b>facebook</b></div>
   <div class="login1"> 
      <div style="color:white">Email or mobile<div style="margin-right:150px; float:right;">Password</div>
	  </div>
										<input type="email"  name="email" id="email" required/>
										<input type="password" name="password" id="password" required/>
										<input type="submit" value="Login">								
  </div>
  </form>
</header>
<section class="a1">
<h2 style="margin-left:150px; margin-top:50px; color:darkblue;">Facebook helps you connect and share with the people in your life.</h2>
<img style="margin-left:150px" src="pictures/ab.png"/>
</section>
<section class="a2">
<p style="margin-top:40px; margin-left:40px;font-size:40px;color:black; position:absolute;"><b>Create an account</b></p>
<p style="margin-left:40px; margin-top:90px; font-size:20px; position:absolute;">It's free and always will be.</p>
<div class="a3">
      
       <input  class="a4" type="text" placeholder="First name">
      <input  class="a4"type="text" placeholder="Surname"/>
	   <input  class="a4" style="width:60%" type="text" placeholder="Mobile number & email address">
	  <input  class="a4" style="width:60%" type="text" placeholder="New Password"/>
	  <p style="font-size:20px; position:absolute;">Birthday</p><br>
	 <!-- <input style="position:absolute;" class="a4" type="date"/>-->
	  <select class="a4" style="width:10%;margin-top:50px;position:absolute;">
	  <option>1</option>
	  <option>2</option>
	  <option>3</option>
	  <option>3</option>
	  <option>5</option>
	  <option>6</option>
	  <option>7</option>
	  </select>
	   <select class="a4" style="width:10%;margin-top:50px;position:absolute;margin-left:70px;">
	  <option>Jan</option>
	  <option>Feb</option>
	  <option>Mar</option>
	  <option>Apr</option>
	  <option>May</option>
	  <option>June</option>
	  <option>July</option>
	  </select>
	   <select class="a4" style="width:10%;margin-top:50px;position:absolute;margin-left:145px;">
	  <option>1990</option>
	  <option>1991</option>
	  <option>1992</option>
	  <option>1993</option>
	  <option>1994</option>
	  <option>1995</option>
	  <option>1996</option>
	  </select>
	  </br>
	  <input type="radio" style="margin-top:80px">Female
	  <input type="radio" style="margin-top:80px">Male<br>
	  <pre style="font-size:10px;color:gray"><b>By clicking Sign Up, you agree to our <b style="color:blue">Terms, Data Policy </b>and
<b style="color:blue">Cookie Policy</b>.You may receive SMS notifications from us and 
can opt out at any time.</b></pre>
<input class="a4" type="submit" style="background-color:green;color:white; border: 1px solid gray; border-radius: 4px;" value="Sign Up"/><br>

<b style="font-size:15px"><a href="#" style="color:blue; text-decoration: none;">Create a Page</a> for a celebrity, band or business.</b>
</div>
</section>
</body>
</html>