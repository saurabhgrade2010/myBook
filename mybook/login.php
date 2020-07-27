<?php
include "db.php";
session_start();
if($_POST["login"])
{
	$email = $_POST["Email"];
	$password=$_POST["Pass"];
	if(empty($email))
	{
		echo "<div style='background-color:red;color:white;height:30px;'>
			      <h3> Enter email first !!</h3>
			      </div>";
		exit();
	}
	if(empty($password)){
	echo "<div style='background-color:red;color:white;height:30px;'>
			      <h3> Enter password first !!</h3>
			      </div>";
				  exit();
	
	}	//$sql = "SELECT * FROM user_info WHERE email = '$email' AND password = '$password'";
	$sql = "SELECT * FROM `user_info` WHERE email = '$email' AND password = '$password'";
	$run_query = mysqli_query($con,$sql);
	if(mysqli_num_rows($run_query)>= 1)
	{
		$row = mysqli_fetch_array($run_query);
		$id=$row["user_id"];
		$_SESSION["uid"] = $row["user_id"];
		$_SESSION["fname"] = $row["fname"];
		$_SESSION["lname"] = $row["lname"];
		$_SESSION["email"]=$email;
		$_SESSION["image1"]=$row["user_image"];
		$_SESSION["c_image"]=$row["cover_image"];
		$_SESSION["bio"]=$row["user_bio"];
		$x=1;
		$sql1="UPDATE `user_info` SET online_status='$x' where user_id='$id'";   
		   if(mysqli_query($con,$sql1))
		   {
			 echo "login_success";
			 exit();  
		   }
		     
	}
	else 
	{
		    
			echo "<div style='background-color:red;color:white;height:30px;'>
			      <h3> Please Enter a valid email and password !!</h3>
			      </div>";
			exit();
	}
		
}


?>


<!--
 <footer class="footer1">
     <div class="btn-group2">
	 <section>
	   <label class="container">News Feed <input type="checkbox" checked="checked">
       <span class="checkmark"></span>
	    <button style="background-color:white;color:black;float:right;border-radius:5px;"><b>Friends</b></button>
   </label></section>
     
	 </div>
	 </footer>
	 <footer class="footer1">
     <div class="btn-group2">
	 <section>
	   <label class="container">News Feed <input type="checkbox" />
       <span class="checkmark"></span>
	   <button style="background-color:white;color:black;float:right;border-radius:5px;"><b>Customs</b></button>
   </label>
	</section>
     
	 </div>
	 </footer>
-->