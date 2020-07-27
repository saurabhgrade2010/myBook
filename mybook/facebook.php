<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<style>
header{
background-color:rgb(85, 105, 151);
height:80px;
width:100%;
}
.login{
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/jquery2.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
  
	function reset(){
		 alert("Time out!");
       	$("#expr").text("nahi hua").css("color","red");
		$("#text1").val("67");
		//window.location.href = "profile.php";
	}
	
</script>
<script>
$(document).ready(function(){

$("body").delegate("#register","click",function(event){
var f=$('input[name=s]:checked', 
                '#myForm').val();
var fname=$("#fname").val();
var lname=$("#lname").val();
var mobile=$("#mobile").val();
var password=$("#pass").val();
var d=$("#s1").val();
var m=$("#s2").val();
var y=$("#s3").val();
var d1="";
d1=d1+y+"-"+m+"-"+d;
alert(d1);
alert(fname);
alert(lname);
alert(mobile);
alert(password);
alert(f);
event.preventDefault();
$(".overlay").show();
$.ajax({
	url : "action.php",
	method : "POST",
	data : {register1:1,Fname:fname,Lname:lname,Mobile:mobile,Password:password,Gender:f,D1:d1},
	success : function(data){
	$('.overlay').hide();
	if(data=="yes")
	{	
        alert("yes");
	}
	else{
	    alert("no");
		$.ajax({
			url : "login.php",
			method : "POST",
			data : {login:1,Email:mobile,Pass:password},
			success : function(data){
				$('.overlay').hide();
				if(data=="login_success")
				{	
        			window.location.href = "profile.php";
				}
				else{
					$("#ww1").html(data);
					$(".overlay").hide();
				}
			}
		})
	    $(".overlay").hide();
	 }
	}
	})
})

$("body").delegate("#ww3","click",function(event){	
	   var email=$("#email").val();
	   var pass=$("#password").val();
		event.preventDefault();
		$(".overlay").show();
		$.ajax({
			url : "login.php",
			method : "POST",
			data : {login:1,Email:email,Pass:pass},
			success : function(data){
				$('.overlay').hide();
				if(data=="login_success")
				{	
        			window.location.href = "profile.php";
				}
				else{
					$("#ww1").html(data);
					$(".overlay").hide();
				}
			}
		})
	})
	
	
})	
	</script>

</head>
<body style="background-color:rgb(242, 242, 242);" id="body">
<header>
   <div style="position:absolute;margin-left:200px;margin-top:30px;color:white;font-family: arial;font-size: 40px;"><b>facebook</b></div>
   <div class="login">

       <div style="color:white">Email or mobile<div style="margin-right:150px; float:right;">Password</div>
	   </div>
	   	 
           <input type="text" name="email" id="email"/>
           <input type="text" name="password" id="password"/>
	       <button id="ww3" type="submit">Login</button>
	  
  </div>
</header>

<section class="a1">
<label style="position:fixed;margin-left:600px;margin-top:-1px;" id="ww1">
</label>
<h2 style="margin-left:150px; margin-top:50px; color:darkblue;">Facebook helps you connect and share with the people in your life.</h2>
<img style="margin-left:150px" src="pictures/ab.png"/>
</section>
<section class="a2">
<p style="margin-top:40px; margin-left:40px;font-size:40px;color:black; position:absolute;"><b>Create an account</b></p>
<p style="margin-left:40px; margin-top:90px; font-size:20px; position:absolute;">It's free and always will be.</p>
<form id="myForm">
<div class="a3">
       <input  id="fname" class="a4" type="text" placeholder="First name">
      <input  id="lname" class="a4"type="text" placeholder="Surname"/>
	   <input id="mobile" class="a4" style="width:60%" type="text" placeholder="Mobile number & email address">
	  <input  id="pass" class="a4" style="width:60%" type="text" placeholder="New Password"/>
	  <p style="font-size:20px; position:absolute;">Birthday</p><br>
	 <!-- <input style="position:absolute;" class="a4" type="date"/>-->
	  <select id="s1" class="a4" style="width:10%;margin-top:50px;position:absolute;">
	  <?php 
	    $i=0;
		for($i=1; $i<=31 ; ){
	    echo " <option value='$i'>$i</option>";
		$i=$i+1;
		}		
		?>
	  </select>
	   <select id="s2" class="a4" style="width:10%;margin-top:50px;position:absolute;margin-left:70px;">
	  <option value="1">Jan</option>
	  <option value="2">Feb</option>
	  <option value="3">Mar</option>
	  <option value="4">Apr</option>
	  <option value="5">May</option>
	  <option value="6">June</option>
	  <option value="7">July</option>
	  <option value="8">Aug</option>
	  <option value="9">Sep</option>
	  <option value="10">Oct</option>
	  <option value="11">Nov</option>
	  <option value="12">Dec</option>
	  </select>
	   <select id="s3" class="a4" style="width:10%;margin-top:50px;position:absolute;margin-left:145px;">
	   <?php 
	    $i=0;
		for($i=2020; $i>=1900 ; ){
	    echo " <option value='$i'>$i</option>";
		$i=$i-1;
		}		
		?>
	  </select>
	  </br>
	  <input type="radio"  value='0' name="s" style="margin-top:80px">Female
	  <input type="radio"  value='1' name="s" style="margin-top:80px">Male<br>
	  <pre style="font-size:10px;color:gray"><b>By clicking Sign Up, you agree to our <b style="color:blue">Terms, Data Policy </b>and
<b style="color:blue">Cookie Policy</b>.You may receive SMS notifications from us and 
can opt out at any time.</b></pre>
<input class="a4" id="register" type="submit" style="background-color:green;color:white; border: 1px solid gray; border-radius: 4px;" value="Sign Up"/><br>

<b style="font-size:15px"><a href="#" style="color:blue; text-decoration: none;">Create a Page</a> for a celebrity, band or business.</b>
</div>
</form>
</section>
</body>
</html>