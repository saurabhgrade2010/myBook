<?php
        session_start();
		include "db.php";
        $id=$_SESSION["uid"];
		$fname=$_SESSION["fname"];
		$lname=$_SESSION["lname"];
		$image=$_SESSION["image1"];
		
		
		if(isset($_POST["o_data"]))
		{
			$x=$_POST["X"];
			$_SESSION["o_value"]=$x;
		}
		
		
		if(isset($_POST["share"]))
		{
		   $pid=$_POST["Pid"];
		   $u_id=$_POST["Uid"];
		   $uid=$_SESSION["uid"];
		   $sql="select * from `postdata` where post_id='$pid'";
		   
		   $run_query = mysqli_query($con,$sql);
	        if(mysqli_num_rows($run_query)>= 1)
	        {
				$row = mysqli_fetch_array($run_query);
		        $id=$row["user_id"]; 
				$img=$row["imagedata"];
                $post=$row["post"];
                $sql1="INSERT INTO `postdata` 
		          (`user_id`, `imagedata`,`post`,`share_status`) 
		           VALUES ('$uid','$img','$post','$u_id')";
                mysqli_query($con,$sql1);   				
	        }			
			exit(); 
		}
		
		
		
		
		
		if(isset($_POST["register1"]))
		{
		   $fname1=$_POST["Fname"];
		   $lname1=$_POST["Lname"];
		   $email=$_POST["Mobile"];
		   $password=$_POST["Password"];
		   $gender=$_POST["Gender"];
		   $img="default.jpg";
		   $d1=$_POST["D1"];
		   $sql="INSERT INTO `user_info` 
		          (`fname`, `lname`,`email`,`password`,`user_image`,`cover_image`,`dob`,`gender`) 
		           VALUES ('$fname1','$lname1','$email','$password','$img','$img','$d1','$gender')";
            mysqli_query($con,$sql);
			$sql1 = "SELECT * FROM `user_info` WHERE email = '$email' AND password = '$password'";
	        $run_query = mysqli_query($con,$sql1);
	        if(mysqli_num_rows($run_query)>= 1)
	        {
				$row = mysqli_fetch_array($run_query);
		        $id=$row["user_id"]; 
				$x=1;
				$sql2="INSERT INTO `friend_list` 
		          (`user_id`, `friend_id`,`status`) 
		           VALUES ('$id','$id','$x')";
                 mysqli_query($con,$sql2);			
	        }
			exit(); 
		}
		
		
		if(isset($_POST["add_frnd"]))
		{
		   $sid=$_POST["Sid"];
		   $uid=$_SESSION["uid"];
		   $x=0;
		   $sql="INSERT INTO `friend_list` 
		          (`user_id`, `friend_id`,`status`) 
		           VALUES ('$sid','$uid','$x')";
            mysqli_query($con,$sql);			
			exit(); 
		}
		
		
		
		
		if(isset($_POST["logout"]))
		{
			unset($_SESSION["uid"]);
            unset($_SESSION["fname"]);
            unset($_SESSION["image1"]);
			unset($_SESSION["lname"]);	
            unset($_SESSION["email"]);
            unset($_SESSION["c_image"]);
            unset($_SESSION["bio"]);
            unset($_SESSION["o_value"]);			
			echo "yes";
			exit();
		}
		
		
		if(isset($_POST["join_gp"]))
		{
			$gp_id=$_POST["Gp_id"];
			$user_id=$_SESSION["uid"];
			
            $sql="INSERT INTO `my_gp` 
		          (`user_id`, `gp_id`) 
		           VALUES ('$user_id','$gp_id')";
			     mysqli_query($con,$sql);	
			exit();
		}
		
		
		if(isset($_POST["list4"]))
		{
			echo "<div style='position:absolute;margin-top:5px;margin-left:-1px;margin-top:15px;width:200px;height:250px;background-color:LightGray;'>		    
				  <div style='width:100%;height:30px;background-color:white;'>	
				      <p style='margin-top:5px;float:left;color:DarkSlateBlue;margin-right:10px;'>Settings</p>
				        </div>
	               <button id='logout' style='margin-top:1px;width:100%;height:30px;'>Logout</button>
                   </div>				   
  				   
				   ";
				  
				   echo "</div>";
				  
		}
		
		
		if(isset($_POST["list3"]))
		{
			echo "<div style='position:absolute;margin-top:5px;margin-left:-300px;margin-top:15px;width:470px;height:400px;background-color:white;'>		    
				  <div style='width:100%;height:30px;background-color:white;'>
				      <p style='color:gray;margin-left:10px;margin-top:5px;position:absolute;'>Messages</p>			
				      <p style='margin-top:5px;float:right;color:DarkSlateBlue;margin-right:10px;'>Settings</p>
				      <p style='margin-top:5px;float:right;color:DarkSlateBlue;margin-right:10px;'>Mark all as read</p>	   
				  </div>
			  
				   ";
				   $user_id=$_SESSION["uid"];
				   $sql="select distinct c.friend_id,c.user_msg,c.friend_msg,
				   c.status,u.fname,u.lname,u.user_image,c.msg_time
				   from `chating` as c,`user_info` as u
				   where c.user_id='$user_id' and u.user_id=c.friend_id
				   group by c.friend_id
			       ORDER BY c.msg_time DESC";
				   $run_query=mysqli_multi_query($con,$sql);
				   if($run_query)
	               {	
                       do{
		                   if($result=mysqli_store_result($con))
		                  {	
		                      
    							while( $row = mysqli_fetch_row($result)){
		                         $id=$row[0];
								 $user_msg=$row[1];
                                 $friend_msg=$row[2];
                                 $status=$row[3];
                                 $fname=$row[4];
								 $lname=$row[5];
								 $img1=$row[6];
		
								 $x="";
								 if(empty($user_msg)==true)
								 {
									 $x=$friend_msg;
								 }
								 else{
									 $x=$user_msg;
								 }
								 if($status==0 && empty($friend_msg)!=true){
								 echo "
								     <div id='msg_btn' user_id='$id' style='position:cursor;width:100%;height:60px;margin-top:2px;background-color:LightGray;'>
									   <img src='pictures/$img1' style='position:absolute;margin:5px;width:45px;height:45px;border-radius:50%;'>
									   <p style='position:absolute;margin-left:60px;margin-top:2px;color:black;'>$fname $lname </p> 
									   <p style='position:absolute;margin-left:60px;margin-top:23px;color:red;'>$x</p>
									 </div>
									 ";
								 }
								 else
								 {
									echo "
								     <div id='msg_btn' user_id='$id' style='position:cursor;width:100%;height:60px;margin-top:2px;background-color:LightGray;'>
									   <img src='pictures/$img1' style='position:absolute;margin:5px;width:45px;height:45px;border-radius:50%;'>
									   <p style='position:absolute;margin-left:60px;margin-top:2px;color:black;'>$fname $lname </p> 
									   <p style='position:absolute;margin-left:60px;margin-top:23px;color:DarkSlateBlue;'>$x</p>
									 </div>
									 "; 
								 }
								}
							
						  }
					   } while(mysqli_more_results($con) && mysqli_next_result($con));
				   }
				   
				   echo "</div>";
				  
		}
		
		
		
		if(isset($_POST["btnn"]))
		{
		   echo "<div style='width:100%;height:80px;background-color:white;height:auto;'>
			   
				<div id='k8'> 
				</div>
				 <input type='file' id='photo' name='photo'>
			   </div>";
			exit(); 
		}
		
		
		
		if(isset($_POST["post_kar2"]))
		{
			echo "<div  style='background-color:white;width:100%;height:115px;'>		
			<div class='btn-group2'>
	        <section>
	   <label class='container' style='text-align:center;'>News Feed <input type='checkbox' checked='checked' value='cc1' id='cc1'>
       <span class='checkmark'></span>
	    <button style='background-color:white;color:black;float:right;border-radius:5px;'><b>Friends</b></button>
   </label></section>
     
	 </div>
     <div class='btn-group2'>
	 <section>
	   <label class='container' style='text-align:center;'>News Feed <input type='checkbox' value='cc2' id='cc2'>
       <span class='checkmark'></span>
	   <button style='background-color:white;color:black;float:right;border-radius:2px;'><b>Customs</b></button>
   </label>
	</section>
     
	 </div>
			
		<button id='btn_n' style='width:99%;margin-left:2px;border-radius:2px;height:28px;background-color:rgb(242, 242, 242);'>post</button>	
			   </div>";
		}
		
		
		
		
		if(isset($_POST["pp1"]))
		{
			echo "<div style='width:500px;height:80px;background-color:pink;'>
			     <input type='file'>
			   </div>";
			exit();
		}		

		
		
		
		
		
		if(isset($_POST["btn_n"]))
		{
		
		    $x=$_POST["X"];
			
			if(!empty($photo)){
				move_uploaded_file($_FILES['photo']['tmp_name'], 'pictures/'.$photo);
				$filename = $photo;	
			}
			$y=$_POST["Y"];
			$user_id=$_SESSION["uid"];
			$u=$_POST["U"];
			$v=$_POST["V"];
			if($u==1)
			{
			   $sql="INSERT INTO `stories` 
		          (`user_id`, `post`,`s_image`) 
		           VALUES ('$user_id', '$y','$x')";
			     mysqli_query($con,$sql);		        
			}
			$sql="INSERT INTO `postdata` 
		          (`user_id`, `post`,`imagedata`) 
		           VALUES ('$user_id', '$y','$x')";
			 if(mysqli_query($con,$sql))
		    {
			  echo $x;
			  exit();
		   }
			
		}
		
		
		if(isset($_POST["btn9"]))
		{
			$p=$_POST["X"];
			$user_id=$_SESSION["uid"];
			$sql="INSERT INTO `postdata` 
		          (`user_id`, `post`) 
		           VALUES ('$user_id', '$p')";
			 if(mysqli_query($con,$sql))
		   {
			  echo "yes";
			  exit();
		   }
			
		}
		
		
		if(isset($_POST["btnn"]))
		{
		   echo "<div style='position:fixed;width:500px;height:80px;background-color:pink;'>
			    
			   </div>";
			exit(); 
		}
		
		
		
		if(isset($_POST["friend_notify"]))
		{
			$user_id=$_SESSION["uid"];
			$x=0;
			$y=0;
	       $sql = "select p.post_id,l.user_id,l.status from `postdata` as p,`postlike` as l 
		          where ( p.user_id='$user_id' or ( p.user_id!=$user_id and p.share_status = $user_id) )  and p.post_id=l.post_id and l.status='$x' order by l.like_time";
	       $run_query=mysqli_multi_query($con,$sql);
		   if($run_query)
		   {
			   do{
			      
				   if($result=mysqli_store_result($con))
			       {         
			         	 while($row = mysqli_fetch_row($result))
				         {
				            $y++;			 
				         }		
			       }
		        } while(mysqli_more_results($con) && mysqli_next_result($con));	
		   }
		   if($y!=0)
		   {
			    echo "<div style='position:absolute;background-color:red;width:20px;height:20px;border-radius:50%;'>
			 <b style='color:white;float:center;margin-left:3px;'>
			       $y
				   </b>
				   </div>
				   ";
			 exit();
		   }
		   
		}
		
		if(isset($_POST["list2"]))
		{
			echo "<div style='position:absolute;margin-top:13px;overflow-y:auto;margin-left:-200px;width:400px;height:400px;background-color:white;'>		    
				  <div style='width:100%;height:30px;background-color:white;'>
				      <p style='color:gray;margin-left:10px;margin-top:5px;position:absolute;'>Notification</p>			
				      <p style='margin-top:5px;float:right;color:DarkSlateBlue;margin-right:10px;'>Settings</p>
				      <p style='margin-top:5px;float:right;color:DarkSlateBlue;margin-right:10px;'>Mark all as read</p>	   
				  </div>
			  
				   ";
				   $user_id=$_SESSION["uid"];
				   $r=0;
				   $x=0;
				  /* $sql8 = "CREATE TEMPORARY TABLE TEMP_TABLE (
                             `post_id` int NOT NULL,
                             `user_id` int NOT NULL,
                             `type` int NOT NULL,
                             `share_status` int NOT NULL,
                             `temp_time` timestamp
                            )"; 

                   mysql_query($sql8, $con);
				   
				   $sql6 = "INSERT INTO `TEMP_TABLE` (`post_id`,`user_id`,`type`,`share_status`)
							values('1','2','3','4')";
					 $run_q=mysqli_query($sql6, $con);
					 $count=mysqli_num_rows($run_q);
				    echo "
			       <div style='width:100%;height:30px;border:none;background-color:white;color:black;margin:1px;'>
			          <div style='margin-top:5px;position:absolute;color:black;margin-left:10px;'> <b style='color:RoyalBlue;cursor:pointer;margin-top:-11px;'>helloo</b> liked your photo
					  </div> 
				   </div>
				   
				   "; 
				  $sql7 = "select * from TEMP_TABLE";	  
				   $run_query7=mysqli_query($con,$sql7);
				   
				   if(mysqli_num_rows($run_query7)>0)
				   {
					   while($row7=mysqli_fetch_array($run_query7))
					   {
						   echo "
			       <div style='width:100%;height:30px;border:none;background-color:white;color:black;margin:1px;'>
			          <div style='margin-top:5px;position:absolute;color:black;margin-left:10px;'> <b style='color:RoyalBlue;cursor:pointer;margin-top:-11px;'>hello</b> liked your photo
					  </div> 
				   </div>
				   
				   "; 
					   }
				   } */
				   
				   $sql = "select p.post_id,p.share_status,l.user_id,l.status,u.fname,u.lname,u.user_id,l.post_id from `user_info` as u,`postdata` as p,`postlike` as l 
		          where  u.user_id=l.user_id and ( p.user_id='$user_id' or ( p.user_id!=$user_id and p.share_status = $user_id) )  and p.post_id=l.post_id and l.status='$x' order by l.like_time DESC,p.datedata DESC";
				   $run_query=mysqli_query($con,$sql);
				   if(mysqli_num_rows($run_query)>0)
				   {
					   while($row=mysqli_fetch_array($run_query))
					   {
						   $y = $row[1];
						   $i= $row[0];
                           $j= $row[7];			
                            echo "<p style='background-color:red;'>$i $j</p>";						   // check krna h ki post share ki yaa like h bus
						   if($y == 0 || ($i == $j && $row[3] == 0)){
						  echo "
			       <div style='width:100%;height:30px;border:none;background-color:white;color:black;margin:1px;'>
			       <div style='margin-top:5px;position:absolute;color:black;margin-left:10px;'> <b id='notify_check' Uid='$i' Sid='$y' style='text-decoration:none;color:RoyalBlue;cursor:pointer;margin-top:-11px;'>$row[4] $row[5]</b> liked your photo</div> 
				   </div>
				   
				   "; 
						   }
						   else{
							   echo "
			       <div style='width:100%;height:30px;border:none;background-color:LightGreen;color:black;margin:1px;'>
			       <div style='margin-top:5px;position:absolute;color:black;margin-left:10px;'> <b id='notify_check' Uid='$id' Sid='$y' style='text-decoration:none;color:RoyalBlue;cursor:pointer;margin-top:-11px;'>$row[4] $row[5]</b> shared your photo</div> 
				   </div>
				   
				   "; 
						   }
					   }
				   }
				   echo "</div>";
				  
		}
		
		
		
		
		
		
		
		if(isset($_POST["friend_request"]))
		{
			$user_id=$_SESSION["uid"];
			$x=0;
	       $sql = "select * from `friend_list` where user_id='$user_id' and status='$x'";
	       $run_query=mysqli_query($con,$sql);
		   $count=mysqli_num_rows($run_query);
		   if($count==0)
		   {
			   echo "yes";
			   exit();
		   }
		   if($count>0 && $count<20)
	       {
			 echo "<div style='position:absolute;background-color:red;width:20px;height:20px;border-radius:50%;'>
			 <b style='color:white;float:center;margin-left:3px;'>
			       $count
				   </b>
				   </div>
				   ";
			 exit();
	       }
		   else
		   {
			   echo "no";
			   exit();
		   }
		}
		
		
		
		
		
		if(isset($_POST["list1"]))
		{
			echo "<div style='position:absolute;margin-top:5px;margin-left:-300px;width:470px;height:auto;overflow-x: hidden; overflow-y: scroll;background-color:red;'>		    
				  <div style='width:100%;height:30px;background-color:white;'>
				      <p style='color:gray;margin-left:10px;margin-top:5px;position:absolute;'>Friend Requests</p>			
				      <p style='margin-top:5px;float:right;color:DarkSlateBlue;margin-right:5px;'>Settings</p>
				      <p style='margin-top:5px;float:right;color:DarkSlateBlue;margin-right:5px;'>Find Friends</p>	   
				  </div>
			  
				   ";
				   $user_id=$_SESSION["uid"];
				   $r=0;
				   $sql="select * from `friend_list` where user_id='$user_id' and status='$r' ORDER BY f_time DESC";
				   $run_query=mysqli_query($con,$sql);
				   if(mysqli_num_rows($run_query)>0)
				   {
					   while($row=mysqli_fetch_array($run_query))
					   {
						   $fid=$row["friend_id"];
						   $sql1="select * from `user_info` where user_id='$fid'";
						   $run_query1=mysqli_query($con,$sql1);
						   if(mysqli_num_rows($run_query1)>0)
						   {
							   $row1=mysqli_fetch_array($run_query1);
							   $fname7=$row1["fname"];
							   $lname7=$row1["lname"];
							   $img=$row1["user_image"];
							   echo "<div style='width:100%;border-style:solid none none none;border:1px solid LightGray;height:60px;background-color:white;'>
                                     <img src='pictures/$img' style='position:absolute;margin-left:10px;margin-top:5px;width:50px;height:50px;border-radius:50%;'>
                                     <p style='color:RoyalBlue;position:absolute;font-size:17px;margin-top:20px; margin-left:70px;'>$fname7 $lname7</p>
									<div id='c3' style='margin-top:10px;background-color:none;width:150px;margin-left:300px;'>
						<button id='c1' fid='$fid' style='height:27px;width:65px;border-radius:4px;border:none;background-color:RoyalBlue;margin-left:10px;margin-top:10px;'>Confirm</button>
						<button id='c2' fid='$fid'style='height:27px;width:65px;border-radius:4px;border-none;color:black;background-color:LightGray;float:right;margin-top:10px;'>Delete</button>
									</div>
									</div>";
						   }
					   }
				   }
				   echo "</div>";
				  
		}
		
		
		
		if(isset($_POST["post_kar"]))
		{
           
			echo "<div  style='background-color:white;width:100%;height:115px;'>		
			<div class='btn-group2'>
	        <section>
	   <label class='container'>News Feed <input type='checkbox' checked='checked'>
       <span class='checkmark'></span>
	    <button style='background-color:white;color:black;float:right;border-radius:5px;'><b>Friends</b></button>
   </label></section>
     
	 </div>
     <div class='btn-group2'>
	 <section>
	   <label class='container'>News Feed <input type='checkbox' />
       <span class='checkmark'></span>
	   <button style='background-color:white;color:black;float:right;border-radius:2px;'><b>Customs</b></button>
   </label>
	</section>
     
	 </div>
			
		<button id='btn9' style='width:99%;margin-left:2px;border-radius:2px;height:28px;background-color:rgb(242, 242, 242);'>post</button>	
			   </div>";
		}
		
		
		
		
		
		
		
		
		
		
		
		
		
		if(isset($_POST["cmnt_kar"]))
		{
			$p_idd=$_POST["pId"];
			$user_id=$_SESSION["uid"];
			$c_data=$_POST["cmn_data"];
			$image=$_SESSION["image1"];
			$fname=$_SESSION["fname"];
			$lname=$_SESSION["lname"];
			if(empty($c_data))
			{
				exit();
			}
	      $sql="INSERT INTO `comment_data` 
		          (`post_id`, `user_id`, `c_data`) 
		           VALUES ('$p_idd', '$user_id', '$c_data')";
		   if(mysqli_query($con,$sql))
		   {
			   echo "
			         <div style='margin-top:5px;background-color:none;height:auto;width:100%;'>
					 <img src='pictures/$image' style='position:absolute;margin:2px;width:30px;height:30px;border-radius:50%;'>		 
			         <div style='margin-left:-7px;min-height:40px;max-height:auto;margin-left:40px;background-color:none;'>
					 <p style='margin:2px; font-size:17px;'>$fname $lname</p>
					 <div style='border-radius:10px;margin-top:-18px;max-width:30%;min-width:400px;min-height:40px;max-height:auto;background-color:LightGray;'>
					 <p style='color:DarkSlateBlue; margin-left:20px;'>$c_data</p></div>
					 </div>
			
			</div>	
							   ";
			   exit();
		   }
		   else{
			   echo "no";
			   exit();
		   }
             		   
		}
		if(isset($_POST["friend_msg"]))
		{
			$user_id=$_SESSION["uid"];
			$x=0;
	       $sql = "select DISTINCT(friend_id) from `chating` where user_id='$user_id' and status='$x' 
		   order by msg_time DESC
		   
		   ";
	       $run_query=mysqli_query($con,$sql);
		   $count=mysqli_num_rows($run_query);
	       if($count==0)
		   {
			 echo "yes";
			 exit();
	       }
		   else if($count>0 && $count <20)
		   {
			   echo "<div style='position:absolute;background-color:red;width:20px;height:20px;border-radius:50%;'>
			   <b style='color:white;float:center;margin-left:3px;'>
			       $count
				   </b>
				   </div>";
			   exit();
		   }
		   else 
		   {
			   echo "<div style='position:absolute;background-color:red;width:20px;height:20px;border-radius:50%;'>
			 <b style='color:white;float:center;font-size:10px;margin-left:3px;'>
			      20+
				   </b>
				   </div>";
				   exit();
		   }
		}
		if(isset($_POST["cmnt_like"]))
		{
			$p_idd=$_POST["cId"];
			$no=$_POST["c_No"];
	       $sql = "UPDATE `comment_data` SET  no_like='$no' WHERE cmnt_id ='$p_idd'";
	       if( mysqli_query($con,$sql))
	       {
			 echo "yes";
			 exit();
	       }
		   else
		   {
			   echo "no";
			   exit();
		   }
		}
		
		
		if(isset($_POST["c1"]))
		{
			$fid=$_POST["fId"];
			$id=$_SESSION["uid"];		
			$x=1;
	       $sql = "UPDATE `friend_list` SET  status='$x' WHERE user_id='$id' and friend_id='$fid'";
	       if( mysqli_query($con,$sql))
	       {
			 $sql1="INSERT INTO `friend_list` 
		          (`user_id`, `friend_id`, `status`) 
		           VALUES ('$fid', '$id', '$x')";
				   mysqli_query($con,$sql1);
			 echo "<div style='width:100px;background-color:none;'>
			     <button style='margin-left:20px;background-color:gray;height:27px;border-radius:5px;width:65px;margin-top:10px;'>Friends</button>
			 </div>";
			 exit();
	       }
		   else
		   {
			   echo "no";
			   exit();
		   }
		}
		
		
		
		
		
		
		if(isset($_POST["msg_send"]))
		{
			$fid=$_POST["fId"];
			$user_id=$_POST["user_Id"];
			$msg=$_POST["msg"];
			$x="";
			if(empty($msg))
			{
				exit();
			}				
	         $sql="INSERT INTO `chating` 
		          (`user_id`, `friend_id`, `user_msg`,`friend_msg`) 
		           VALUES ('$fid', '$user_id', '$msg','$x')";
		   if(mysqli_query($con,$sql))
		   {
			   echo "yes";
			   exit();
		   }
		}
		if(isset($_POST["story_show"]))
		{
			$user_id=$_SESSION["uid"];
			$image=$_SESSION["image1"];
			$fname1=$_SESSION["fname"];
			$lname1=$_SESSION["lname"];
			$A=$_POST["A"]; 
			     $sql="select f.friend_id,s.post,s.s_image,u.fname,u.lname,u.user_image
			     from `friend_list` as f,`stories` as s,`user_info` as u
				 where f.user_id='$user_id' and s.user_id=f.friend_id
				  and u.user_id=f.friend_id
				  order by s.s_time LIMIT 3 OFFSET $A";
			$A=$A+3;	  
			$run_query=mysqli_multi_query($con,$sql);
			 if($run_query)
	         {	
               do{
		           if($result=mysqli_store_result($con))
		           {	
			   echo "<div style='background-color:white;border-radius:5px;'>
			        <b style='position:absolute; margin-top:10px;margin-left:10px;color:gray;'>Stories</b> 
					 <p id='j1' A='$A'style='cursor:pointer;margin-top:10px;float:right;margin-right:10px;color:powderblue;'>more</p> 
				   <button style='background-image:url(pictures/$image);background-size:100px 180px;border:none;' class='s3'> 
                   <div>
		       <img src='pictures/plus.png' style='width:35px;height:35px;border-radius:50%;float:left; margin-top:-80px;'>
                    <p style='position:absolute;font-size:15px;margin-top:50px;margin-left:6px;'>Add to Story</p>	
                 				
				 </div>
				   </button>			
			      "; 
				       $r=1;
		                while($row = mysqli_fetch_row($result))
		                {	
					       $r=0;
					       $fname=$row[3];
						   $lname=$row[4];
						   $img2=$row[5];
						   $s_image=$row[2];
						   echo "
						      <button style='background-image:url(pictures/$s_image);background-size:100px 180px; border:none;' class='s3'>
               <img src='pictures/$img2' style='border:4px solid LightBlue;width:35px;height:35px;border-radius:50%;float:left; margin-top:10px;'>
			             <div style=' width:100px;height:auto;margin-left:3px;margin-top:165px;'>
							  <b style='font-size:15px;'>$fname $lname</b>
                          </div> 							  
				                </button> 
							   ";
				        }
			              
						   
						if($r==1)
						{
							 echo "
						      <button style='background-size:100px 180px; border:none;' class='s3'>
			             <div style='position:absolute; width:100px;height:auto;margin-left:3px;margin-top:30px;'>
							  <p style='font-size:15px;'>No more Stories!!</p>
                          </div> 							  
				                </button> 
							   ";
						}	
                     echo "</div>";						
				   }
			   } while(mysqli_more_results($con) && mysqli_next_result($con));
			 }
			
		}
		
		
		if(isset($_POST["msg_kar"]))
		{
			$user_id=$_SESSION["uid"];
			$friend_id=$_POST["user_Id"];
			$sql="select * from `user_info` where user_id='$friend_id'";
			$run_query=mysqli_query($con,$sql);
			if(mysqli_num_rows($run_query)>0)
			{
				$u=1;
				 $sql = "UPDATE `chating` SET  status='$u' WHERE user_id='$user_id' and friend_id='$friend_id'";
	             if( mysqli_query($con,$sql))
	             {
			    $row=mysqli_fetch_array($run_query);
                $fname=$row["fname"];
                $lname=$row["lname"];
                $friend_image=$row["user_image"];
                $sql1="select * from `chating` where (user_id='$user_id' and friend_id='$friend_id') or
				  (friend_id='$user_id' and user_id='$friend_id')";
                $run_query1=mysqli_query($con,$sql1);
                echo "<div id='popupContact2'>
                          <form class='form2' action='#' id='form2' method='post' name='form2'>  
						 ";
					echo "<div style='position:fixed;background-color:rgb(85, 105, 151);border-radius: 10px;width:230px;'>
					          <img src='pictures/$friend_image' class='x11'>				  
					          <b>$fname $lname</b>
							  <img style='margin-left:85px;position:fixed;width:30px; border-radius:50%;'id='close1' src='pictures/close2.png' onclick ='div_hide1()'>
					      </div><br><br>";
				if(mysqli_num_rows($run_query1)>0)
				{
					while($row1=mysqli_fetch_array($run_query1))
					{
						$user_id1=$row1["user_id"];
						$friend_id1=$row1["friend_id"];
						$user_msg=$row1["user_msg"];
						$x="";
						
						$friend_msg=$row1["friend_msg"];
						if($friend_id1 == $user_id)
						{
							$x=$user_msg;
						}
						else{
							
						}
						 if($x=="")
						 {
								   echo "<div class='m2' style='color:RoyalBlue;'>
							       $user_msg
							       </div>";
						 }
						 else{
							echo "<div class='m1' style='color:DarkSlateBlue;'>
							       $x
							       </div>"; 
						 }
                          
					}
				}
                  echo "
					   <input id='text_msg' style='margin-top:5px;border-radius:3px;margin-bottom:1px; width:100%;height:50px;' type='text' placeholder='text here...'>
						 <button id='text_msg_btn' user_id='$user_id' fid='$friend_id' 
						  style='margin-left:20px;border-radius:5px;height:20px;'>send</button>
					  
						</form>
						    </div>";				
	      		   exit();
		    }
		   }
		}
		
		if(isset($_POST["online_list"]))
		{
			$id=$_SESSION["uid"];
	        $sql = "SELECT * from `friend_list` where user_id='$id' and friend_id !='$id' and status=1 ORDER BY f_time";
		   $run_query=mysqli_query($con,$sql);
	       if(mysqli_num_rows($run_query)>0)
	       {
			  while($row=mysqli_fetch_array($run_query))
			  {
				  $user_id=$row["friend_id"];
				  $sql1="select * from `user_info` where user_id='$user_id'";
				  $run_query1=mysqli_query($con,$sql1);
				  if(mysqli_num_rows($run_query1)>0)
				  {
					  $row1=mysqli_fetch_array($run_query1);
					  $fname=$row1["fname"];
					  $lname=$row1["lname"];
					  $img1=$row1["user_image"];
					  $a=$row1["online_status"];
					  if($a!=0){
					 echo "<button class='a8' id='msg_btn' user_id='$user_id'>
					 <img class='i2' src='pictures/$img1'> $fname $lname 
					  <img class='i1' src='pictures/green.jpg'>
					  </button>"; }
				  }
			  }
	       }
		}
		
		
		
		if(isset($_POST["side_ki_cheeje"]))
		{ 	
	     $user_id=$_SESSION["uid"];
        $sql="select g.gp_name,g.gp_id,g.gp_image,g.no_member from `group_info` as g,`my_gp` as m order by rand() limit 1";
	    $run_query=mysqli_multi_query($con,$sql);
	    if($run_query)
        {	
           do{
		   if($result=mysqli_store_result($con))
		   {	
		    while( $row = mysqli_fetch_row($result))
			{
                $gp_name=$row[0];  
				$gp_id=$row[1];
				
				$gp_image=$row[2];
				$no=$row[3];
				
				$sql1="select * from `my_gp` where gp_id='$gp_id' and user_id='$user_id'";
				 $run_query1=mysqli_query($con,$sql1);
				if(mysqli_num_rows($run_query1)>0)
				{
					echo "<div style='border:1px solid LightGray; margin-right:10px;border-radius:5px;'>
				         <img  style='width:258px; height:200px; border-radius:5px;' src='pictures/$gp_image' >
				         <br>
					  <b style='color:blue; margin-left:5px;'> $gp_name</b> 
					  <br>
					   <b style='color:gray; margin-left:5px;'> $no members</b><br></div>";
				}
				else{
				echo "<div style='border:1px solid LightGray; margin-right:10px;border-radius:5px;'>
				         <img  style='width:258px; height:200px; border-radius:5px;' src='pictures/$gp_image' >
				         <br>
					  <b style='color:blue; margin-left:5px;'> $gp_name</b> 
					  <button id='join_gp' gp_id='$gp_id' style='float:right;margin-top:5px; color:gray; margin-right:5px;border-radius:5px;background-color:white;'> Join Group</button><br>
					   <b style='color:gray; margin-left:5px;'> $no members</b><br></div>";
				}
			}
		  }
	    }
	  while(mysqli_more_results($con) && mysqli_next_result($con));
	}
  }
		if(isset($_POST["suggestion"]))
		{
			$id=$_SESSION["uid"];
			
	       $sql="select * from `user_info` where user_id!='$id'  order by rand() limit 1";
		   $run_query=mysqli_query($con,$sql);
		   if(mysqli_num_rows($run_query)>0)
		   {
			   $row=mysqli_fetch_array($run_query);
			    $fname=$row["fname"];
				$lname=$row["lname"];  
				$s_id=$row["user_id"];
				$user_image=$row["user_image"];
				echo "<div style='border:1px solid LightGray; margin-right:10px;border-radius:5px;'>
				         <img  style='width:258px; height:200px; border-radius:5px;' src='pictures/$user_image' >
				         <br>
					  <b style='color:blue; margin-left:5px;'> $fname $lname</b> 
					  <button id='add_frnd' Sid='$s_id' style='float:right;margin-top:5px; color:gray; margin-right:5px;border-radius:5px;background-color:white;'> Add</button><br>
					  <br></div>";
		   }
		}
		
		
		if(isset($_POST["likebtn"]))
		{
			$p_idd=$_POST["proId"];
			$d=0;
			$user_id=$_SESSION["uid"];
			$sql1="select * from `postlike` where post_id='$p_idd' and user_id='$user_id'";
			$run_query1=mysqli_query($con,$sql1);
			
			if(mysqli_num_rows($run_query1)>0)
			{
				$row=mysqli_fetch_array($run_query1);
				$d=$row["like_type"];
			}
			$ii=0;
			if($d==0)
			{	  	
			      $no=$_POST["no_of_id"]+1;
	              $sql = "UPDATE `postdata` SET no_of_likes ='$no' WHERE post_id ='$p_idd'";
	              if( mysqli_query($con,$sql))
	              {
			           $x=1;
                       $sql2="INSERT INTO `postlike` 
		                        (`post_id`, `user_id`, `like_type`) 
		                       VALUES ('$p_idd','$user_id','$x')";
		               if(mysqli_query($con,$sql2))
		               {
			               echo "yes1";
			               exit();
		               }
		          }
		     
			}
			else{
				  $no=$_POST["no_of_id"]-1;
	              $sql3 = "UPDATE `postdata` SET no_of_likes ='$no' WHERE post_id ='$p_idd'";
	              if( mysqli_query($con,$sql3))
	              {
			          
                       $sql4="Delete from `postlike` where post_id='$p_idd' and user_id='$user_id'";
		               $run_query4=mysqli_query($con,$sql4);
					   if(mysqli_num_rows($run_query4)>0)
		               {
			               echo "yes2";
			               exit();
		               }
		          }
	
			}
		}
		
		
		
		
		if(isset($_POST["cmnt"]))
		{
			$p_idd=$_POST["proId"];
			$t=1;
			$A=$_POST["A"];
			
			$sql="select c.cmnt_id,c.c_data,c.no_like,c.user_id ,u.fname,u.lname,u.user_image,c.c_time
			  from `comment_data` as c,`user_info` as u where c.post_id='$p_idd' and c.user_id=u.user_id ORDER BY c.c_time DESC LIMIT 5 OFFSET $A";
			 $run_query=mysqli_multi_query($con,$sql); 
	       if($run_query)
	       {	
	     
	          echo "<hr style='width:90%; margin-left:15px;'/>";
              do{
		             if($result=mysqli_store_result($con))
		             {	
				          
				        
		                while($row = mysqli_fetch_row($result))
		                {	
					
					        
		                    $user_image=$row[6]; 
							$fname=$row[4];
							$post=$row[1];
							$lname=$row[5];
							$timestamp = strtotime($row[7]);
							$date = date('d/m/Y', $timestamp);
                            $time = date('H:i:s', $timestamp);
							
              echo "<div style='margin-top:5px;background-color:none;height:auto;width:100%;'>
			        
					 <img src='pictures/$user_image' style='position:absolute;margin:2px;width:30px;height:30px;border-radius:50%;'>		 
			         <div style='margin-left:-7px;min-height:40px;max-height:auto;margin-left:40px;background-color:none;'>
					 <p style='margin:2px; font-size:17px;'>$fname $lname</p>
					 
					 <div style='border-radius:10px;margin-top:-18px;max-width:30%;min-width:400px;min-height:40px;max-height:auto;background-color:LightGray;'>
					 <p style='color:DarkSlateBlue; margin-left:20px;'>$post</p>
					   <p style='float:right;color:Gray;font-size:10px;'>$date</p></div>
					
					 </div>
			
			</div>			     
				 
				 ";
				 $t=0;
		                }
		             }
	            }
				 while(mysqli_more_results($con) && mysqli_next_result($con));	
		   }
		   $A=$A+5;
		   if($t==0){
		    echo "
			 <label id='v1'></label>
			<b style='color:blue;cursor:pointer;' id='cmntbtn' c_count='$A' pid='$p_idd'>View more comments</b>";
		   }
			echo "
			 
		     <div style='background-color:none;width:100%;height:60px;margin-bottom:10px;'>
			 
			 <input type='text' id='text_likh' placeholder='write your comment....' style='background-color:white;border-radius:20px;border:1 px solid LightGray;width:60%;height:40px;margin:5px;'>
			  <button id='cmnt_kar' c_count='$A' pid='$p_idd' style='background-color:LightGray;color:DarkSlateBlue;border-radius:5px;width:70px;height:20px;'>
			   Comment</button>
			 
			 <div>
		   ";
		   exit();
		         
		}
	
?>