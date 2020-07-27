<?php
$db=include "db.php";
//header("Content-Type: image/jpeg");
if(isset($_POST["insert"]))
{
		$photo = $_FILES['photo']['name'];
			if(!empty($photo)){
				move_uploaded_file($_FILES['photo']['tmp_name'], 'pictures/'.$photo);
				$filename = $photo;	
			}
			//else{
			//	$filename = $user['photo'];
			//}
	    $sql="INSERT into `sgr`(`photo`) values('$photo')";
	    if(mysqli_query($con,$sql))
	    {
		echo "yes";
    	}
	    else
	    {
		 echo "no";
	    }
	
}


?>
<html>
<head>
<style>
div.fileinputs {
	position: relative;
}

div.fakefile {
	position: absolute;
	top: 0px;
	left: 0px;
	z-index: 1;
}

input.file {
	position: relative;
	text-align: right;
	-moz-opacity:0 ;
	filter:alpha(opacity: 0);
	opacity: 0;
	z-index: 2;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>

<form action="demo2.php" method="post" enctype="multipart/form-data">
<input type="file" id="image" name="photo">
<input type="submit" name="insert" id="insert">
</form>
<br><br><br><p>hell</p>

<?php
$sql1="select * from `sgr` LIMIT 1";
$run_query=mysqli_query($con,$sql1);
if(mysqli_num_rows($run_query)>0)
{
	$row=mysqli_fetch_array($run_query);
	$img=$row["photo"];
	//echo "<img style='width:100px;height:auto;' src='pictures/$img'>";
}
?>

<p>fghjkl;lkjh</p>

<div class="fileinputs">
	<input type="file" class="file" />
	<div class="fakefile">
		<input />
	</div>
</div>
</body>
</html>