<?php
        session_start();
        $id=$_SESSION["uid"];
		$fname=$_SESSION["fname"];
		$lname=$_SESSION["lname"];
		$email=$_SESSION["email"];
		$image=$_SESSION["image1"];
		$no_of_likes=5;
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<style>
.btn-group2 section {
  border: none ;
  margin-left:2px;
   border-radius: 2px;
  color: black;
  float:left;
  background-color:rgb(242, 242, 242);
  margin-top:1px;
   margin-down:20px;
  padding:5px;
  cursor: pointer; 
  width: 97%; 
  display: block; 
  text-align:center;
}


.btn-group2 section:hover {
  background-color: rgb(85, 105, 151);
  border-box:solid;
   border-radius: 2px;
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



.a5{
	background-color:rgb(242, 242, 242);
	padding:5px 5px;
	border-radius:10px;
	margin-top:0px;
	color:gray;
	border:none;
	text-align:left;
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
.btn-group{
  margin-left:1px;
  border-radius: 10px;
  float:left;
  background-color:rgb(242, 242, 242);
  padding:3px 3px;
  cursor: pointer; 
  width: 80%; 
  text-align:center;
}
.btn-group button:hover {
  background-color:  rgb(85, 105, 151);
   border-radius: 10px;
}


.imag1{
	border-radius: 60%; 
	 width:8%; 
	float:left;
	margin-top:1px;
}

.imag3{
	
	border-radius: 50%; 
	width:50px; 
	height:55px;
	float:right;
	margin-top:20px;
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
.imag7{
	
	border-radius: 50%; 
	width:40px; 
	height:45px;
	float:left;
	background-size:40px 45px;
	margin-top:10px;
}
.imag8{
	
	border-radius: 50%; 
	width:10%; 
	height:30px;
	float:left;
	margin-top:0px;
}
.btn_btn1{
	 border:1px solid LightGray;
	 width:160px;
	 border-radius:1px;
	 height:30px;
	 margin-left:-4px;
	 color:black;
	 background-color:rgb(242, 242, 242);
}
.btn_btn1:hover {
  background-color:white;
  border-box:solid;
   border-radius: 1px;
}
.imag6{
	
	border-radius: 50%; 
	width:40px;
	height:40px;
	float:left;
	margin-top:1px;
}
.c1{
	border:1px solid LightGray;
	margin-bottom:5px; 
	margin-left:20px;
	border-radius:10px;
    width:10px;
}
.form1 {
max-width:600px;
min-width:500px;
padding:0px 0px;
border:1px solid LightGray;
border-radius:10px;
height:100%;
font-family:raleway;
}
#abc1 {
width:100%;
height:100%;
opacity:.99;
top:0;
left:0;
display:none;
position:fixed;
background-color:#313131;
overflow:auto
}
#abc2 {
width:100%;
height:100%;
opacity:.99;
top:0;
left:0;
display:none;
position:fixed;
background-color:#313131;
overflow:auto
}
div#popupContact1 {
position:absolute;
left:45%;
top:2%;
max-width:500px;
margin-left:-202px;
font-family:'Raleway',sans-serif;
}
div#popupContact2 {
position:fixed;
left:67%;
top:50%;
height:250px; 
max-width:250px;
margin-left:-10px;
font-family:'Raleway',sans-serif;
}

.topnav input[type=text]:hover{
 padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.form2 {
max-width:20px;
margin-bottom:100px;
min-width:250px;
padding:10px 10px;
background-color:white;
border:1px solid blue;
border-radius:10px;
height:300px;
overflow-y:scroll;
font-family:raleway;
}
.a3{
margin-left:65%;
margin-top:0px;
height:700px;
width:300px;
background-color:none;
}
.a1{
width:20%;
margin-left:2%;
height:100%;
margin-top:40px;
position:fixed;
background-color:none;
}

.a6{
	margin-left:90%;
	width:170px;
	height:700px;
	margin-top:50px;
	border:1px solid LightGray;
	position:fixed;
	background-color:yellow;
}
.a2{
margin-left:23%;
height:100%;
margin-top:-10px;
width:800px;
background-color:none;
}
.n1{
	margin-left:10px;
	margin-top:5px;
	height:200px;
	width:280px;
	
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
.x2:hover{
	margin-top:10px;
	margin-left:10px;
	border-radius:10px;
	padding:5px;
	background-color:DarkSlateBlue;
}
.s2{
	height:170px;
	width:100px;
	padding:5px;
	margin-top:40px;
	margin-left:5px;
	border-radius:10px;
}
.s3{
	height:180px;
	width:100px;
	margin-top:40px;
	margin-left:5px;
	padding:0px;
	border-radius:10px;
}
.u1{
    width:100px;
    height:100px;
    float:left;	
	position:absolute;
	border-radius:50%;
	margin-left:0px;
	margin-top:0px;
}
button{
background-color:blue;
border:1px solid LightGray;
margin-top:1px;
color:white;
}
.k1{
border:1px solid LightGray; 
margin-top:10px;
 border-radius:5px; 
 height:225px;
}


#abc {
width:100%;
height:100%;
opacity:100;
top:0;
left:0;
display:none;
position:fixed;
background-color:#313131;
overflow:auto;
}
.popupContact {
position:absolute;
left:60%;
top:1%;
max-width:300px;
margin-left:-90%;
font-family:'Raleway',sans-serif
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/jquery2.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>  
$(document).ready(function(){
	side_fun();
	//$('#edit').modal('show');
	// <span class='pull-right'><a href='#edit_photo' class='photo' data-toggle='modal' data-id='".$row['id']."'><i class='fa fa-edit'></i></a></span>
      //<img src='".$image."' height='30px' width='30px'>  
   /* if(!empty($photo)){
				move_uploaded_file($_FILES['photo']['tmp_name'], 'images/'.$photo);
				$filename = $photo;	
			} */	  
	suggestion_friend();
	online_list();
	story(0);
	friend_request();
	friend_msg();
    friend_notify();
	check_kar();
	function check_kar()
	{
		var x=$("#postid").val();
		if(x!="")
		{
			$("#btn9").css("background-color","Blue");
		}
		else{
			 setTimeout(check_kar, 100);
		}
			
	}
	function friend_notify(){
	  $.ajax({
			url	:	"action.php",
			method:	"POST",
			data	:{friend_notify:1},
			success	:function(data){
				if(data=="yes")
				{
					alert("0 hai");
				}
				else {
					$("#oo3").html(data);		  
				}
			}
		})
	}
	function friend_msg()
	{
		$.ajax({
			url	:	"action.php",
			method:	"POST",
			data	:{friend_msg:1},
			success	:function(data){
				if(data=="yes")
				{
					//alert("0 hai");
				}
				else {
					$("#oo2").html(data);		  
				}
			}
		})
	}
	function friend_request(){
	$.ajax({
			url	:	"action.php",
			method:	"POST",
			data	:{friend_request:1},
			success	:function(data){
				if(data=="yes")
				{
					
				}
				else {
				$("#oo1").html(data);
				}
			}
		})
		
	}
	//for stories 
	function story(a)
	{
		$.ajax({
			url	:	"action.php",
			method:	"POST",
			data	:{story_show:1,A:a},
			success	:function(data){
				$("#s1").html(data);
				
			}
		})
	}
	function online_list(){
		$.ajax({
			url	:	"action.php",
			method:	"POST",
			data	:{online_list:1},
			success	:function(data){
				$("#z3").html(data);
				
			}
		})
	}
	function side_fun()
	{
		
		$.ajax({
			url	:	"action.php",
			method:	"POST",
			data	:{side_ki_cheeje:1},
			success	:function(data){
				$("#z1").html(data);	
			}
		})
		setTimeout(side_fun, 2000);
		 
	}
	
	 function suggestion_friend()
	 {
		 //$("#z2").css("position", "fixed");
		 
		 $.ajax({
			url	:	"action.php",
			method:	"POST",
			data	:{suggestion:1},
			success	:function(data){
				$("#z2").html(data);
 
			}
		})
		 setTimeout(suggestion_friend, 3000);
	 }
	 
	 
	 $("body").delegate("#notify_check","click",function(event){
	   var uid=$(this).attr("Uid");
	   var sid=$(this).attr("Sid");
	   alert(uid);
	   alert(sid);
	   
	})
	
	$("body").delegate("#add_frnd","click",function(event){
	   var sid=$(this).attr("Sid");
	   $.ajax({
			url	:	"action.php",
			method:	"POST",
			data	:{add_frnd:1,Sid:sid},
			success	:function(data){
				window.location.href = "profile.php";
			}
		})
	   
	})
	
	
	$("body").delegate("#join_gp","click",function(event){
	   var gp_id=$(this).attr("gp_id");
	   $.ajax({
			url	:	"action.php",
			method:	"POST",
			data	:{join_gp:1,Gp_id:gp_id},
			success	:function(data){
				window.location.href = "profile.php";
			}
		})
	   
	})
	
	$("body").delegate("#sharebtn","click",function(event){
	   var pid=$(this).attr("pid");
	   var uid=$(this).attr("Uid");
	   alert(pid);
	   $.ajax({
			url	:	"action.php",
			method:	"POST",
			data	:{share:1,Pid:pid,Uid:uid},
			success	:function(data){
				window.location.href = "profile.php";
			}
		})
	   
	})
	
	$("body").delegate("#j1","click",function(event){
	var A=$(this).attr("A");
	story(A);
	})
	
	$("body").delegate("#o_data","click",function(event){
	   var x=$(this).attr("oid");
			$.ajax({
			url	:	"action.php",
			method:	"POST",
			data	:{o_data:1,X:x},
			success	:function(data){
			}
		})
	    window.location.href = "friend_page.php";
	})
	
	$("body").delegate("#cmnt_like","click",function(event){
		var cid = $(this).attr("cid");
		var c_no=$(this).attr("c_no");
		var l_id=$(this).attr("lId");
		var c_no1=parseInt(c_no)+1;
		event.preventDefault();
		$(".overlay").show();
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {cmnt_like:1,cId:cid,c_No:c_no1},
			success : function(data){
				$('.overlay').hide();
				if(data=="yes") 
				{	
			     $("#l_id").text(c_no1).css("color","black");
			    $("#cmnt_reply").text(c_no1).css("color","black");
				}
				else{ 
				 $("#l_id").text(c_no1).css("color","black");
				$("#cmnt_reply").text(c_no1).css("color","black");
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
	
	function fun(y)
	{
		event.preventDefault();
		$(".overlay").show();
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {msg_kar:1,user_Id:y},
			success : function(data){
				$('.overlay').hide();
				if(data=="yes")
				{	
			        alert("yes");
				}
				else{
					
					$("#z5").html(data);
					 document.getElementById("#text_msg").focus();
					$(".overlay").hide();
				}
			}
		})
	}
	$("body").delegate("#postid","click",function(event){	
	 
		event.preventDefault();
		$(".overlay").show();
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {post_kar:1},
			success : function(data){
				$('.overlay').hide();
				if(data=="yes")
				{	
			       alert("yes");
				}
				else{
					var x=$("#postid").val();
					 $("#r1").html(data);
					 if(x!="")
		             {
		                $("#btn9").css("background-color","DarkSlateBlue");
	                 }
					$(".overlay").hide();
				}
			}
		})
	})
	
	
$("body").delegate("#likebtn","click",function(event){
		var pid = $(this).attr("pid");
		var no_of=$(this).attr("no_of");
		var pid1="#"+"like"+pid;
		var no_of1=parseInt(no_of)+1;
		event.preventDefault();
		$(".overlay").show();
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {likebtn:1,proId:pid,no_of_id:no_of},
			success : function(data){
				$('.overlay').hide();
				if(data=="yes1")
				{	
			var no_of1=parseInt(no_of)+1;
			$(pid1).text(no_of1).css("color","DarkSlateBlue");
			$("#mm1").css("color","red");
			//window.location.href = "profile.php";
			//document.getElementById("#no_likes").focus();
			//$("#no_likes1").text("likes").css("color","black");
				}
				else {
                var no_of1=parseInt(no_of)-1;
				$(pid1).text(no_of1).css("color","DarkSlateBlue");
				$("#mm2").css("color","DarkSlateBlue");
			     //window.location.href = "profile.php";
				}
			}
		})
	})
	$("body").delegate("#cmnt_kar","click",function(event){
		var pid = $(this).attr("pid");
		var x=$("#text_likh").val();
		event.preventDefault();
		$(".overlay").show();
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {cmnt_kar:1,pId:pid,cmn_data:x},
			success : function(data){
				$('.overlay').hide();
				if(data=="yes")
				{	
		           $("#v1").html(data);
				}
				else{
					$("#v1").html(data);
					$("#text_likh").val("");
				}
			}
		})
	})
	$("body").delegate("#likebtn1","click",function(event){
		var pid = $(this).attr("pid");
		var no_of=$(this).attr("no_of");
		var no_of1=parseInt(no_of)+1;
		event.preventDefault();
		$(".overlay").show();
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {kholde:1,proId:pid,no_of_id:no_of},
			success : function(data){
				$('.overlay').hide();
				if(data=="yes")
				{	
			$("#no_likes").text(no_of1).css("color","black");
			window.location.href = "profile.php";
			//document.getElementById("#no_likes").focus();
			//$("#no_likes1").text("likes").css("color","black");
				}
				else{
                
				$("#no_likes").text(no_of1).css("color","black");
			     window.location.href = "profile.php";
				}
			}
		})
	})
	$("body").delegate("#logout","click",function(event){
		event.preventDefault();
		$(".overlay").show();
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {logout:1},
			success : function(data){			
			
			window.location.href = "facebook.php";
			$(".overlay").hide();
			}
		})
	})
	$("body").delegate("#msg_btn","click",function(event){
		var user_id = $(this).attr("user_id");
		$("#e2").hide();
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
	
	$("body").delegate("#uu1","click",function(event){
		event.preventDefault();
		$("#e1").hide();
		$(".overlay").show();
		
	})
	$("body").delegate("#list1","click",function(event){
		event.preventDefault();
		//$("#e2").hide();
		//var t=$("#ulscroller li:last-child").val;	
		
		
		$(".overlay").show();
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {list1:1},
			success : function(data){
				$('.overlay').hide();
				if(data=="yes")
				{	
			        alert("yes");
				}
				else{
					
					$("#e2").html(data);
					//$("#e1").show();
					$(".overlay").hide();
				}
			}
		})
	})
	$("body").delegate("#list2","click",function(event){
		event.preventDefault();
		//$("#e1").hide();
		
		$(".overlay").show();
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {list2:1},
			success : function(data){
				$('.overlay').hide();
				if(data=="yes")
				{	
			        alert("yes");
				}
				else{
					
					$("#e2").html(data);
					//$("#e2").show();
					$(".overlay").hide();
				}
			}
		})
	})
	
	
	$("body").delegate("#list3","click",function(event){
		event.preventDefault();
		
		$(".overlay").show();
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {list3:1},
			success : function(data){
				$('.overlay').hide();
				if(data=="yes")
				{	
			        alert("yes");
				}
				else{
					
					$("#e2").html(data);
					//$("#e2").show();
					$(".overlay").hide();
				}
			}
		})
	})
	
		$("body").delegate("#list4","click",function(event){
		event.preventDefault();
		
		$(".overlay").show();
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {list4:1},
			success : function(data){
				$('.overlay').hide();
				if(data=="yes")
				{	
			        alert("yes");
				}
				else{
					
					$("#e2").html(data);
					//$("#e2").show();
					$(".overlay").hide();
				}
			}
		})
	})
	
	
	$("body").delegate("#btn9","click",function(event){
		event.preventDefault();
		  var x=$("#postid").val();
		$(".overlay").show();
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {btn9:1,X:x},
			success : function(data){
				$('.overlay').hide();
				if(data=="yes")
				{	
			       $("postid").val("");
				   window.location.href = "profile.php"
				}
				else{
			        window.location.href = "profile.php"
					$(".overlay").hide();
				}
			}
		})
	})
	
	
	$("body").delegate("#pp1","click",function(event){
		event.preventDefault();
      
		  var y=$("#postid").val();
		$(".overlay").show();
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {pp1:1,X:y},
			success : function(data){
				$('.overlay').hide();
				if(data=="yes")
				{	
			    
			       $("postid").val("");
				   $("#ii1").html(data);
				}
				else{
				
			        $("#ii1").html(data);
					$(".overlay").hide();
				}
			}
		})
	})
	
	
	
	$("body").delegate("#c1","click",function(event){
		event.preventDefault();
		var fid=$(this).attr("fid");
		$(".overlay").show();
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {c1:1,fId:fid},
			success : function(data){
				$('.overlay').hide();
				if(data=="yes")
				{	
			        alert("yes");
					$("#c3").hide();
					$("#c3").html(data);
				}
				else{
					
					
					$("#c3").html(data);
					$(".overlay").hide();
				}
			}
		})
	})
	
	
	$("body").delegate("#myself_profile","click",function(event){
		event.preventDefault();
		$(".overlay").show();
		window.location.href = "myself.php"
	})
	
	
	
	$("body").delegate("#cmntbtn","click",function(event){
		var pid = $(this).attr("pid");
		var a=$(this).attr("c_count");
		//var no_of=$(this).attr("no_of");
		//var no_of1=parseInt(no_of)+1;
		//var postdata = $(this).attr("postdata");
		//var imgid1=$(this).attr("imgid");
		//var img2=$(this).attr("img2");
		
		event.preventDefault();
		$(".overlay").show();
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {cmnt:1,proId:pid,A:a},
			success : function(data){
				$('.overlay').hide();
				if(data=="yes")
				{	
			alert("yes");
			//$("#no_likes").text(no_of1).css("color","black");
			//window.location.href = "profile.php";
			//document.getElementById("#no_likes").focus();
			//$("#no_likes1").text("likes").css("color","black");
				}
				else{
					//document.getElementById('abc1').style.display = "block";
					//var img="pictures/"+img2;
					//var img3="pictures/"+imgid1;
		            //$("#a2").attr("src",img);
					//$("#a3").text(postdata).css("color","blue");
				    //$("#a1").attr("src",img3);
					
					//$("#loginbtn1").attr("no_of",x);
					var pid1="#"+"mydiv"+pid;
					
					$(pid1).html(data);
					$(".overlay").hide();
				//$("#no_likes").text(no_of1).css("color","black");
			    // window.location.href = "profile.php";
				}
			}
		})
	})
    /*$("body").delegate("#cmntbtn","click",function(event){
        document.getElementById('abc1').style.display = "block";
		var img = $(this).attr("imgid1");
		//$("#imgid").text(img).css("color","red");
		var img1="pictures/"+img;
		$("#imgid1").attr("src",img1);
		event.preventDefault();
		$(".overlay").show();
	})
	*/
	
	
	
	
})

function type(x){ 
			var value=$("#textid").val();
			if(value!="Write something here...")
			{
			  $("#postid").css("background-color", "rgb(85, 105, 151)");
		    }
		}

function div_show() {
document.getElementById('abc').style.display = "block";
}
//Function to Hide Popup
function div_hide(){
document.getElementById('abc').style.display = "none";
window.location.href = "profile.php";
}
function div_hide1(){
document.getElementById('popupContact2').style.display = "none";
window.location.href = "profile.php";
}
	function reset(){
		 alert("Time out!");
       	$("#expr").text("nahi hua").css("color","red");
		$("#text1").val("67");
		//window.location.href = "profile.php";
	}
</script>
</head>
<body style="background-color:rgb(242, 242, 242);height:auto;width:100%;position:absolute;margin-left:-10px;margin-top:-10px;" id="body">

<section class="a6" style="background-color:rgb(242, 242, 242);"> 
<div>
<p style="margin-top:30px; margin-left:10px;color:LightGray;"> CONTACTS </p>
<div id="z3">
</div>
<div>

</div>
</div>    		
</section> 
  <header style="position:fixed; margin-top:-1px;">
    <div class="topnav">
     
	 <img style="margin-left:38px; height:25px;position:absolute; padding:2px;width:25px; margin-top:10px;" src="pictures/logo.png"/>
      
	  <div class="search-container" >
        <form action="/action_page.php">
          <input  style="position:absolute; margin-top:12px;width:450px;padding:3px; " type="text" placeholder="Search....." name="search"/>
         <i style="font-size:24px;color:white;margin-left:457px;margin-top:13px;position:absolute;" class="fa">&#xf002;</i>
     
		 </form>
      </div>
   
     <div style="position:fixed;margin-left:700px; width:400px; height:40px; margin-top:5px;">
	  <?php  echo "<img class='x1' id='myself_profile' src='pictures/$image'>"; ?>
	  <div style="position:fixed;margin-left:25px;">
	   
	    <button class="x2"><?php echo $fname; ?></button>
	    <button id="home" class="x2"><i style="font-size:18px" class="fa">&#xf015;</i></button>
	    <button class="x2">Create</button>
		
		<?php
		echo "<i id='list1' class='material-icons' style='cursor:pointer;margin-top:5px;position:absolute;margin-left:10px;margin-top:15px;'>&#xe7ef;
		 </i>"; 
		  ?>  
		  <label id="e1" style="position:absolute;margin-left:1px;margin-top:40px;"></label>
		<?php  
		echo "<i id='list3' class='fa' style='cursor:pointer;margin-top:5px;position:absolute;margin-left:50px;margin-top:15px;font-size:22px;'>&#xf003;
		</i>";
		echo "<i id='list2' class='material-icons' style='cursor:pointer;margin-top:5px;position:absolute;margin-left:90px;margin-top:15px;'>&#xe7f5;
		</i>";
		
		 echo "<i id='list4' class='material-icons' style='cursor:pointer;margin-top:5px;position:absolute;margin-left:120px;margin-top:15px;'>&#xe0c6;</i>";
		 ?>
		 <label id="oo2" style="position:absolute;margin-top:7px; margin-left:60px;"></label>
		 <label id="oo3" style="position:absolute;margin-top:7px; margin-left:100px;"><label>
		
	   </div>
	   <label id="oo1" style="position:absolute;margin-top:7px; margin-left:221px;"><label>
   </div>
    

</header>



<section class="a1">
  <br>
 <div class="btn-group">
  <button class="a5"><?php  echo "<img class='imag8' src='pictures/$image'>"; ?>
      <b><?php echo $fname." ".$lname; ?></b></button>
	  
  <button class="a5"><?php  echo "<img class='imag1' src='pictures/c12.png'>"; ?> News Feed</button>
  <button class="a5"><?php  echo "<img class='imag1' src='pictures/msg.png'>"; ?> Messanger</button>
    <button class="a5"><?php  echo "<img class='imag1' src='pictures/c13.jpg'>"; ?> Watch</button>
	  <button class="a5"><?php  echo "<img class='imag1' src='pictures/c11.jpg'>"; ?> Marketplace</button>
	 
	<b style="margin-left:1px;float:left;">Shortcuts</b>   
</div>
  <div class="btn-group">
   <?php
      include "db.php";
      $sql="select g.gp_name,g.gp_image from `group_info` as g,`my_gp` as m WHERE m.user_id='$id' and m.gp_id=g.gp_id";
	  $run_query=mysqli_multi_query($con,$sql);
	  if($run_query)
      {	
       do{
		   if($result=mysqli_store_result($con))
		   {	
		    while( $row = mysqli_fetch_row($result))
			{
            $gp_name=$row[0];
			$image2=$row[1];
            echo "<div><button class='a5'> <img class='imag1' src='pictures/$image2'>  $gp_name </button> </div>";
			}
		  }
	 }
	  while(mysqli_more_results($con) && mysqli_next_result($con));
	}
      

    ?>
   </div>  
   <b style="margin-left:10px;">Explore</b> 
   <div class="btn-group">
  <?php  echo "<div><button class='a5'><img class='imag1' src='pictures/c5.png'/> Groups </button> </div>" ?>
  <?php  echo "<div><button class='a5'><img class='imag1' src='pictures/c8.png'/> Fundraisers </button> </div>" ?>
  <?php  echo "<div><button class='a5'><img class='imag1' src='pictures/c7.jpg'/> Pages </button> </div>" ?>
  <?php  echo "<div><button class='a5'><img class='imag1' src='pictures/c9.png'/> Events </button> </div>" ?>
  <?php  echo "<div><button class='a5'><img class='imag1' src='pictures/c10.png'/> Friend lists </button> </div>" ?>
	  
</div>   
</section>
<div class="a2" id="uu1" style="background-color:none;">
<div style="position:fixed;color:white;background-color:none;margin-left:505px;margin-top:65px;width:270px;float:right;height:600px;">
<label id="e2" style="position:fixed;margin-left:20px;margin-top:-20px;"></label>
<div id="z1">
</div>
<br>
<div id="z2">
</div>
<label id="z5" style="float:left;margin-top:100px;">p</label>
</div>
<div style="background-color:none;height:auto;width:500px;">
<br>
<div style="background-color:rgb(242, 242, 242);border-radius:4px;border:1px solid LightGray;height:auto;width:100%;margin-top:45px;">
 
 <div style="background-color:rgb(242, 242, 242);height:30px;width:100%;">
   <b style="color:gray;margin-left:10px;margin-top:5px;">Create post </b>
 </div>
 <form>
 <div style="background-color:yellow;width:50px;height:80px;border:none;">
 
 <input type="text" id="postid" placeholder="        write something here..." 
 style="margin-top:50px;width:500px;margin-top:0px;border:none;height:80px;">
 
 
 </div>
 <div id="ii1">
 </div>
 <div style="background-color:rgb(242, 242, 242);width:100%;height:50px;">
   <div class="btn-group1" style="margin-top:10px;margin-left:15px;">
      <button id="pp1"> <img style="float:left;width:25px; height:25px; border-radius:4px;" src="pictures/c14.png"/>
	 
	   <b style="float:left; margin-top:5px; color:Gray;">Photos/Videos</b></button>
       <button ><img style="float:left;width:25px; height:25px; border-radius:4px;" src="pictures/c15.jpg"/>Tag Friends</button>
        <button><img style="float:left;width:25px; height:25px; border-radius:4px;" src="pictures/c16.jpg"/>Feeling/Activity</button>	 
   <!-- <button><input type="file" id="image" name="photo"/></button> -->
   </div>
  
 </div>
  <div id="r1">
		</div>
	</form>	
</div>
<!-- side portion --> 
<!-- ...... --> 
  
 <!-- stories -->  
 <div class="k1">
 <div id="s1">
 </div>
 
 </div>
 <!-- ....... -->
<?php 
     
	  include "db.php";
	  $id=$_SESSION["uid"];
	  $u=1;
      $sql="select f.friend_id,p.post,p.post_id,p.privacy,p.no_of_likes,p.no_of_share,p.imagedata ,u.fname,u.lname,u.user_image,p.share_status
			 from `friend_list` as f,`postdata` as p ,`user_info` as u 
			  where f.user_id='$id' and f.status='$u'
			  and f.friend_id=p.user_id 
			    and 
			   u.user_id=f.friend_id 
			   ORDER BY p.datedata DESC" ;
	       
	  $run_query=mysqli_multi_query($con,$sql); 
	 if($run_query)
	 {	
      do{
		 if($result=mysqli_store_result($con))
		 {	
		    while($row = mysqli_fetch_row($result))
		    {	
		    
                 $post1=$row[1];
			     $pid=$row[2];
			     $privacy1=$row[3];
			     $no_of_likes=$row[4];
			     $no_of_share=$row[5];
			     $image_data=$row[6];
				 $fname1=$row[7];
				 $lname1=$row[8];
				 $image9=$row[9];
				 $status=0;
				 $u_id=$row[0];
				 $share_status=$row[10];
				 $sql1="select * from `postlike` where post_id='$pid' and user_id='$id'";
				 $run_query1=mysqli_query($con,$sql1);
				 if(mysqli_num_rows($run_query1)>0)
				 {
					 $row1=mysqli_fetch_array($run_query1);
					 $status=$row1["like_type"];
				 }
				 
			    ?>
                  <div style="height:auto;border: 1px solid LightGray; margin-top:10px; border-radius:5px;">
				  
                <?php
				
				 echo "<img class='imag7' src='pictures/$image9'>";
                ?>				
			   <div style="margin-left:50px;margin-top:20px;">
				<?php
				 if($share_status==0){
                  echo $fname1." ".$lname1." <b>updated a photograph</b>";
				 }
                else
				{
					$sql6="select * from `user_info` where user_id='$share_status'";
					$run_query6=mysqli_query($con,$sql6);
				 if(mysqli_num_rows($run_query6)>0)
				 {
					 $row6=mysqli_fetch_array($run_query6);
					 $fn=$row6["fname"];
					 $ln=$row6["lname"];					 
					echo $fname1." ".$lname1." <b>shared a photograph</b>"." of "." <b id='o_data' oid='$share_status' style='color:blue;cursor:pointer;'>$fn $ln</b>";
				 }
				}					
				?>
				</div>
				<br/>				
				<?php
				  echo "<p style='color:RoyalBlue;margin-left:5px;font-size:17px;margin-bottom:-10px;margin-top:-5px;'>$post1</p>";
				  ?>
				  <br/>
				  <div style="width:100%;height:auto;">
				  <?php
				  if(!empty($image_data)){
				  echo "<img style='width:100%; height:100%;' src='pictures/$image_data'>";
				  }
				 
				?>
				</div>
				
				<label  style="color:DarkSlateBlue;" id="like<?php echo $pid; ?>"><?php echo $no_of_likes;?></label> <b style="color:DarkSlateBlue;">likes</b>
				
				     
				
				<hr style="width:90%; margin-left:15px;"/>
				<?php
                  $r=0;	
			if($status==0){
				echo "<div><button style='margin-left:4px;border-style:none solid none none;' class='btn_btn1' pid='$pid' id='likebtn' no_of='$no_of_likes'> 
				 <i style='color:DarkSlateBlue;font-size:20px;float:left;margin-left:50px;' class='fa' id='mm1'>&#xf087;Like</i></button>
				 <button style='border-style:none solid none none;' class='btn_btn1' id='cmntbtn' c_count='$r' pid='$pid'> 
				  <i style='color:DarkSlateBlue;font-size:20px;float:left;margin-left:30px;' class='fa'>&#xf0e5;Comment</i></button>
				  <button style='border-style:none none none none;' class='btn_btn1' pid='$pid' Uid='$u_id' id='sharebtn'> 
				  <i style='color:DarkSlateBlue;font-size:20px;float:left;margin-left:40px;' class='fa'>&#xf064;Share</i></button> </div>";
			}
			else{   
				
				echo "<div><button style='margin-left:4px;border-style:none solid none none;' class='btn_btn1' pid='$pid'  id='likebtn' no_of='$no_of_likes'> 
				 <i style='font-size:20px;float:left;margin-left:50px;color:red;' class='fa' id='mm2' >&#xf087;Like</i></button>
				 <button style='border-style:none solid none none;' class='btn_btn1' id='cmntbtn' c_count='$r' pid='$pid'> 
				  <i style='color:DarkSlateBlue;font-size:20px;float:left;margin-left:30px;' class='fa'>&#xf0e5;Comment</i></button>
				  <button style='border-style:none none none none;' class='btn_btn1' pid='$pid' Uid='$u_id' id='sharebtn'> 
				  <i style='color:DarkSlateBlue;font-size:20px;float:left;margin-left:40px;' class='fa'>&#xf064;Share</i></button> </div>";
                   
			}
				
				
				
				
				?>
				
				  <div id="mydiv<?php echo $pid; ?>">
				       
				       </div> 
			 </div>
			  <?php
			} 
		
		 }
	   }
        while(mysqli_more_results($con) && mysqli_next_result($con));	
	 }	
?>
<br><br>
</div>
</div>
</body>
</html>