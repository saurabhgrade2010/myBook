<?php
        session_start();
		include "db.php";
        $user_id=2;
		$fname1=$_SESSION["fname"];
		$lname1=$_SESSION["lname"];
		$image1=$_SESSION["image1"];
		$fname="";
		$lname="";
		$image="";
		$c_image="";
		$bio="";
	    $x=$_SESSION["o_value"];
	$sql="select * from `user_info` where user_id='$x'";
	$run_query = mysqli_query($con,$sql);
	if(mysqli_num_rows($run_query)>= 1)
	{
		$row = mysqli_fetch_array($run_query);
		$user_id=$row["user_id"];
		$fname=$row["fname"];
		$lname=$row["lname"];
		$image=$row["user_image"];
		$c_image=$row["cover_image"];
		$bio=$row["user_bio"];
	}

 ?>
 
 <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<style>
.x1{
	position:fixed;
	margin-left:5px;
	border-radius: 50%; 
	width:25px; 
	height:25px; 
	margin-top:10px;
}
.x11{
	margin-left:0px;
	border-radius: 50%; 
	width:30px;
	height:30px; 
	margin-top:4px;
}
.x2{
	border:none;
	
	padding:5px;
	border-radius:10px;
	margin-left:10px;
	background-color:rgb(85, 105, 151) ;
	margin-top:10px;
}
.i1{
	border-radius: 50%; 
	width:10px; 
	height:10px;
	margin-right:15px;
	margin-top:0px;
}
.i2{
	border-radius: 50%; 
	width:25px; 
	height:30px;
	margin-left:0px;
	margin-top:0px;
}
.a6{
	margin-left:88%;
	width:170px;
	height:600px;
	margin-top:50px;
	border:1px solid LightGray;
	position:fixed;
}
.x2:hover{
	margin-top:10px;
	margin-left:10px;
	border-radius:10px;
	padding:5px;
	background-color:DarkSlateBlue;
}
button{
background-color:blue;
border:1px solid black;
margin-top:1px;
color:white;
}
.j1{
	margin-left:0%;
	margin-top:0px;
	border:none;
	width:60%;
	height:auto;
	
}
.j2{
	margin-left:0%;
	margin-top:-60px;
	border:none;
	width:60%;
	height:auto;
	
}
.f1{
	background-color:white;
	color:DarkSlateBlue;
	border-color:LightGray;
	height:100%;
	width:90px;
	font-size:13px;
	margin-left:-4px;
	margin-top:-0.5px;
}
.f2{
	background-color:rgb(242, 242, 242);
	border-color:LightGray;
	color:DarkSlateBlue;
	height:100%;
	width:100px;
	font-size:13px;
	margin-left:2px;
	margin-top:0px;
}
.f4{
	background-color:rgb(242, 242, 242);
	color:gray;
	width:110px;
	float:right;
	margin-top:270px;
	margin-right:15px;
	border:1px solid LightGray;
	height:25px;
	border-radius:2px;
}
.badge {
  position: absolute;
  top: 253px;
  right: 0px;
  padding: 8px 8px;
  border-radius: 50%;
  background-color: red;
  color: white;
  pos:absolute;
}
.a8{
	background-color:rgb(242, 242, 242);
	border-radius:10px;
	margin-top:4px;
	color:gray;
	width:200px;
	border:none;
	text-align:left;
}
div#popupContact2 {
position:absolute;
left:0%;
top:50%;
float:left;
height:250px; 
margin-bottom:100px;
max-width:250px;
margin-left:-302px;
font-family:'Raleway',sans-serif;
}
.form2 {
max-width:20px;
margin-bottom:100px;
min-width:250px;
padding:10px 10px;
background-color:white;
border:1px solid LightGray;
border-radius:10px;
height:300px;
	overflow:scroll;
font-family:raleway;
}
.m1{
	width:60%;
	padding:10px;
	margin-top:5px;
	background-color:rgb(242, 242, 242);
	float:right;
}
.m2{
	padding:10px;
	margin-top:5px;
	width:60%;
	background-color:rgb(242, 242, 242);
	float:left;
}


.x1{
	position:fixed;
	margin-left:5px;
	border-radius: 50%; 
	width:25px; 
	height:25px; 
	margin-top:10px;
}
.x11{
	margin-left:0px;
	border-radius: 50%; 
	width:30px;
	height:30px; 
	margin-top:4px;
}
.x2{
	border:none;
	padding:5px;
	border-radius:10px;
	margin-left:10px;
	background-color:rgb(85, 105, 151) ;
	margin-top:10px;
}
.f3{
	margin-left:0px;	
	background-color:rgb(242, 242, 242);
	color:black;
	border-radius:2px;
	margin-left:-5px;
	font-size:13px;
	width:164px;
	margin-top:0px;
	border:2px solid LightGray;
	height:100%;
}
.btn-group1 button {
  border: none ;
  margin-left:5px;
   border-radius: 5px;
  color: black;
  float:left;
  background-color:LightGray;
  margin-top:0px;
  padding:3px;
  cursor: pointer; 
  width: 28%; 
  display: block; 
}
.btn-group1 button:hover {
  background-color:rgb(242, 242, 242);
  border-box:solid;
   border-radius: 5px;
}

</style>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/jquery2.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
	online_list();
	 $("#t1").text("20+").css("color","white");
	  $("#t2").text(7).css("color","white");
      function online_list(){
		$.ajax({
			url	:	"action.php",
			method:	"POST",
			data	:{online_list:1},
			success	:function(data){
				$("#z8").html(data);
				
			}
		})
	}
	
	
	$("body").delegate("#btnn","click",function(event){
		event.preventDefault();
		//  var x=$("#postid2").val();
		$(".overlay").show();
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {btnn:1},
			success : function(data){
				$('.overlay').hide();
				if(data=="yes")
				{	
			     
			       $("#yy").html(data);
				  
				}
				else{
					
			        $("#yy").html(data);				  
					$(".overlay").hide();
				}
			}
		})
	})
	
	
	$("body").delegate("#text_msg_btn","click",function(event){
		var fid = $(this).attr("fid");
		var user_id=$(this).attr("user_id");
		var x=$("#text_msg").val();
		event.preventDefault();
		$(".overlay").show();
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {msg_send:1,fId:fid,user_Id:user_id,msg:x},
			success : function(data){
				$('.overlay').hide();
				if(data=="yes") 
				{	
			      $("#y1").text(x).css("color","red");
				  $("#text_msg").val("");
				  fun(fid);
				  document.getElementById("#text_msg").focus();
				}
				else{ 
				   $("#y1").text(x).css("color","red");
				   $("#text_msg").val("");
				}
			}
		})
	})
	
	$("body").delegate("#home","click",function(event){
		event.preventDefault();
		$(".overlay").show();
		 window.location.href = "profile.php";
	})
	
	
	$("body").delegate("#btn_n","click",function(event){
		var y=$("#postid2").val();
		var u=$("#cc1").is(':checked');
		var v=$("#cc2").is(':checked');
		var u1=0,v1=0;
		if(u==true)
	    {
			u1=1;
		}
		if(v==true)
		{
			v1=1;
		}
		var x=$("#photo").val();
	    //alert(x);
		//x=(string)(x);
		 var n = x.lastIndexOf("\\");
		// alert(n);
		 var z=x.length;
		 //alert(z);
		 var s1 = x.substring(n+1, z);
		 //alert(s1);
		event.preventDefault();
		$(".overlay").show();
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {btn_n:1,X:s1,Y:y,U:u1,V:v1},
			success : function(data){
				$('.overlay').hide();
				if(data=="yes")
				{	
			       window.location.href = "myself.php";
				}
				else{
					window.location.href = "myself.php";
					//alert(data);
					$(".overlay").hide();
				}
			}
		})
	})
	
	
	$("body").delegate("#msg_btn","click",function(event){
		var user_id = $(this).attr("user_id");
		var x=$("#z5").val();
		event.preventDefault();
		$(".overlay").show();
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {msg_kar:1,user_Id:user_id},
			success : function(data){
				$('.overlay').hide();
				if(data=="yes")
				{	
			        alert("yes");
				}
				else{
					
					$("#z5").html(data);
					$(".overlay").hide();
				}
			}
		})
	})
	
	$("body").delegate("#postid2","click",function(event){	
	             
		event.preventDefault();
		$(".overlay").show();
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {post_kar2:1},
			success : function(data){
				$('.overlay').hide();
				if(data=="yes")
				{	
			       alert("yes");
				}
				else{
					var x=$("#postid").val();
					 $("#r2").html(data);
					 if(x!="")
		             {
		                $("#btn10").css("background-color","DarkSlateBlue");
	                 }
					$(".overlay").hide();
				}
			}
		})
	})
	
	
})
</script>
</head>
<body style="background-color:rgb(242, 242, 242);" id="body">

<section class="j2">
<header style="position:fixed;">
  <div class="topnav">
     
	 <img style="margin-left:38px; height:25px;position:absolute; padding:2px;width:25px; margin-top:10px;" src="pictures/logo.png"/>
      
	  <div class="search-container" >
        <form action="/action_page.php">
          <input  style="position:absolute; margin-top:12px;width:450px;padding:3px; " type="text" placeholder="Search....." name="search"/>
         <i style="font-size:24px;color:white;margin-left:457px;margin-top:13px;position:absolute;" class="fa">&#xf002;</i>
        </form>
      </div>
      
     <div style="position:fixed;margin-left:700px; width:400px; height:40px; margin-top:5px;">
	  <?php  echo "<img class='x1' id='myself_profile' src='pictures/$image1'>"; ?>
	 
	  <div style="position:fixed;margin-left:25px;">
	    <button class="x2"><?php echo $fname1; ?></button>
	    <button id="home" class="x2"><i style="font-size:18px" class="fa">&#xf015;</i></button>
	    <button class="x2">Create</button>
		
     	<i class="material-icons" style="margin-top:5px;position:absolute;margin-left:10px;margin-top:8px;">&#xe7ef;</i>
		<i class="fa fa-envelope" style="margin-top:5px;position:absolute;margin-left:40px;margin-top:8px;font-size:22px;color:black;"></i>
		<i class="material-icons" style="margin-top:5px;position:absolute;margin-left:70px;margin-top:8px;">&#xe7f5;</i>
		<i class="material-icons" style="margin-top:5px;position:absolute;margin-left:100px;margin-top:8px;">&#xe0c6;</i>
		
	   </div>
   </div>
</header>
<?php 
 echo "<div style='width:100%;height:300px;margin-left:15%; margin-top:55px;'>
         <div style='background-image:url(pictures/$c_image);border:none; width:auto; height:300px;' >   
	      <img src='pictures/$image' style='margin-left:3%;margin-top:180px;width:150px;height:150px; border-radius:50%;border:3px solid white;'> 
		  <h3 style='position:absolute;color:RoyalBlue;margin-left:200px;margin-top:-75px;'>$fname $lname</h3>
		  <button class='f4'>Activity log <span class='badge' id='t1' style='float:right;'></span></button>
 <button class='f4'>Update Info <label id='t2' style='float:right;'></label></button>		  
		 </div>
		 <div style='width:100%;height:40px;border:1px solid LightGray; background-color:white;'>
		    <div style='margin-left:200px;background-color:white;height:40px;'>
			
			<button style='border-style:none solid none solid;' class='f1'>Timeline</button> 
			<button style='border-style:none solid none none;' class='f1'>About</button>
			<button style='border-style:none solid none none;' class='f1'><b>Friends</b></button>
			<button style='border-style:none solid none none;' class='f1'><b>Photos</b></button>
			<button style='border-style:none solid none none;' class='f1'><b>Archieve</b></button>
			<button style='border-style:none solid none none;' class='f1'><b>More</b></button>
			
			</div>
		 </div>
       </div>
 ";?>
 </section>
 <section class="j1" style="margin-top:45px;">
 <div style="width:35%;margin-left:15%;height:auto;background-color:white;margin-top:2px;padding:10px;border:1px solid LightGray;border-radius:5px">
 <img src="pictures/c1.png" style="position:absolute;width:25px;height:25px; border-radius:50%;"> 
  <h6 style="margin-left:30px;font-size:20px;position:absolute;margin-top:3px;"> Intro </h6>
  <br><br>
  <div style="margin-left:20px;color:DarkSlateBlue;height:auto;width:230px;">
  <?php echo $bio;?>
  </div>
  <button style="background-color:rgb(242, 242, 242);width:285px;height:30px;border:1px solid LightGray;color:DarkGray;border-radius:5px;">Edit Bio</button>
  <br><hr style="width:280px;margin-left:3px; background-color:LightGray;"><br>
   <?php 
	$sql="select * from `user_info` where user_id='$user_id'";
	$run_query=mysqli_query($con,$sql);
	if(mysqli_num_rows($run_query)>0)
	{
		$row=mysqli_fetch_array($run_query);
		$c_city=$row["c_city"];
		$h_city=$row["h_city"];
		echo "Lives in  <b style='color:DarkSlateBlue;'> $c_city</b><br> ";
		echo "From  <b style='color:DarkSlateBlue;'> $h_city</b> <br><br>";
	}
    ?>
	<button style="background-color:rgb(242, 242, 242);width:285px;height:30px;border:1px solid LightGray;color:DarkGray;border-radius:5px;">Edit Details</button>
    <br><br>
	<div style="border: 1px solid LightGray;width:290px; background-color:white;margin-left:-3px;">
	 <?php 
	    $sql="select * from `user_data` where user_id='$user_id'";
	    $run_query=mysqli_query($con,$sql);
	    if(mysqli_num_rows($run_query)>0)
	    {
		   while($row=mysqli_fetch_array($run_query)){
		   $photo=$row["user_photo"];
	        echo "<img src='pictures/$photo' style='height:100px;width:90px;padding:3px;'>";
		   }
	    }
	  ?>
	</div>
	<br>
	<button style="background-color:rgb(242, 242, 242);width:285px;height:30px;border:1px solid LightGray;color:DarkGray;border-radius:5px;">Edit Featured</button>
 </div>
 <div style="background-color:white;border:1px solid LightGray;margin-left:54%;margin-top:-300px;border-radius:5px;height:auto;width:61%;">
   <div style="height:30px;width:100%; border-radius:5px;background-color:rgb(242, 242, 242);">
      <button style='border-style:none solid none none;' class='f2'><b style="color:gray;">Create Post</b></button> 
	  <button style='border-style:none solid none none;' class='f2'><b>Photos/Videos</b></button>
      <button style='border-style:none solid none none;' class='f2'><b>Live Video</b></button>
	  <button style='border-style:none none none none;' class='f2'><b>Life Event</b></button>
   </div>
    <div style="height:70px;width:100%;border:none;">
	 <input id="postid2" type="text" placeholder="                whats on your mind...." 
	 style="border:none;height:70px;width:488px;  background-color:none;">
	 <?php 
	   echo "<img src='pictures/$image' style='position:absolute;width:40px;margin-left:10px;margin-top:-50px;border:1px solid white;height:40px;border-radius:50%;'>";
	 ?>
	 
   </div>
   <div id="yy">
   </div>
    <div style="height:50px;width:100%; background-color:white;border-radius:5px;">
	<div class="btn-group1" style="margin-top:10px;">
	
      <button id="btnn"><img style="float:left;width:25px; height:25px;" src="pictures/c14.png"/>
	   Photos/Videos
	   </button>
       <button><img style="float:left;width:25px; height:25px;" src="pictures/c15.jpg"/>Tag Friends</button>
        <button><img style="float:left;width:25px; height:25px;" src="pictures/c16.jpg"/>Feeling/Activity</button>	 
    </div>
   </div>
    <div id="r2">
		</div>
 </div>
 <div style="margin-left:54%;width:61%;margin-top:10px;background-color:rgb(242, 242, 242);border:none;">
 <?php 
  $sql="select * from `postdata` where user_id='$user_id' ORDER BY datedata DESC";
  $run_query=mysqli_query($con,$sql);
  if(mysqli_num_rows($run_query)>0)
  {
	  while($row=mysqli_fetch_array($run_query))
	  {
		  $img=$row["imagedata"];
		  $post=$row["post"];
		  $no_like=$row["no_of_likes"];
		  $no_share=$row["no_of_share"];
		  $sh=$row["share_status"];
		  $x="";
		  $y="";
		  if($sh==1)
		  {
			  $x="shared a";
			  $y="post.";
		  }
		  else
		  {
			  $x="uploaded a";
			  $y="photo.";
		  }
		  if(!empty($img)){
		  echo "<div style='background-color:white;margin-top:5px;height:auto;border:1px solid LightGray;border-radius:5px;'>
              		         
                <div style='margin-left:0px;border-radius:2px;height:60px;width:100%;background-color:white;'>
                 <img src='pictures/$image' style='margin-left:10px;margin-top:14px;position:absolute;width:35px;height:35px;border-radius:50%;'>
				<b style='margin-left:60px;position:absolute;margin-top:20px;color:DarkSlateBlue;'> $fname $lname 
				 <b style='color:gray;'>$x</b> $y</b>
				
				</div>		
                <p  style='margin:10px;'>$post</p>			
                 <div style='width:100%;height:330px;background-color:none;'>
				
				 <img style='width:100%;height:100%;' src='pictures/$img'>;				
			     
				 </div>
				 
				<div style='width:100%;height:60px;border-radius:5px;background-color:white;'>
				 <b style='position:absolute;margin-top:5px;margin-left:10px;'>$no_like like</b>
				<button style='border:none;background-color:white;height:33px;width:160px;margin-top:25px;'>
				<i style='color:DarkSlateBlue;font-size:30px;float:left;margin-left:50px;' class='fa'>&#xf087;<b style='font-size:15px;margin-left:5px;color:gray;'>Like</b></i></button>
                 <button style='border:none;background-color:white;height:33px;width:160px;margin-top:25px;'> 
				 <i style='color:DarkSlateBlue;font-size:24px;float:left;margin-left:30px;' class='fa'>&#xf0e5;<b style='font-size:15px;margin-left:5px;color:gray;'>Comment</b></i></button>
                <button style='border:none;background-color:white;height:33px;width:160px;margin-top:25px;'> 
				<i style='font-size:20px;float:left;margin-left:30px;color:DarkSlateBlue;' class='fa'>&#xf064;<b style='font-size:15px;margin-left:5px;color:gray;'>Share</b></i></button>
				 </div>
				 
		        </div>";
		  }
		  else{
           
		   		  echo "<div style='background-color:white;margin-top:5px;height:auto;border:1px solid LightGray;border-radius:5px;'>
              		         
                <div style='margin-left:0px;border-radius:2px;height:60px;width:100%;background-color:white;'>
                 <img src='pictures/$image' style='margin-left:10px;margin-top:14px;position:absolute;width:35px;height:35px;border-radius:50%;'>
				<b style='margin-left:60px;position:absolute;margin-top:20px;color:DarkSlateBlue;'> $fname $lname 
				 <b style='color:gray;'>$x</b> $y</b>
				
				</div>		
                			
                 <div style='width:100%;min-height:50px;max-height:auto;background-color:none;'>
				
				   <p  style='margin:10px;'>$post</p>	
			     
				 </div>
				 
				<div style='width:100%;height:60px;border-radius:5px;background-color:white;'>
				 <b style='position:absolute;margin-top:5px;margin-left:10px;'>$no_like like</b>
				<button style='border:none;background-color:white;height:33px;width:160px;margin-top:25px;'>
				<i style='color:DarkSlateBlue;font-size:30px;float:left;margin-left:50px;' class='fa'>&#xf087;<b style='font-size:15px;margin-left:5px;color:gray;'>Like</b></i></button>
                 <button style='border:none;background-color:white;height:33px;width:160px;margin-top:25px;'> 
				 <i style='color:DarkSlateBlue;font-size:24px;float:left;margin-left:30px;' class='fa'>&#xf0e5;<b style='font-size:15px;margin-left:5px;color:gray;'>Comment</b></i></button>
                <button style='border:none;background-color:white;height:33px;width:160px;margin-top:25px;'> 
				<i style='font-size:20px;float:left;margin-left:30px;color:DarkSlateBlue;' class='fa'>&#xf064;<b style='font-size:15px;margin-left:5px;color:gray;'>Share</b></i></button>
				 </div>
				 
		        </div>";
		   
		   
		  }
	  }
  }
 
 ?>
 </div>
 <br><br><br>
</section>
<section class="a6"> 
<div>
<p style="margin-top:30px; margin-left:5px;color:DarkGray;"> CONTACTS </p>
<div id="z8">
</div>
<div>
<label id="z5" style="float:left; margin-top:430px;"> p</label>
</div>
</div>    		
</section> 
</body>
</html>




