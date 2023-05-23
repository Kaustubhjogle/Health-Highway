<?php include('db_conn.php'); ?>
<?php
	$index = $_GET['id'];
	$getcart = mysqli_query($conn, "SELECT * FROM `blogs` WHERE Index_blogs='$index'");
	$rows = mysqli_num_rows($getcart);
?>
<!DOCTYPE html>
<html>
<head>
<title>Blogs</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<style>
/* Scrollbar */
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: black; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #37B6FF; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #042F49; 
}

.bgback{
	 width: 100%;
	 height: 90%;
	 left: 0px;
	 top: 10%;
	 background-image: url(hhh.jpg);
     	 position: absolute;
   	 background-position: center;
   	 background-size: cover;
}
.blackbox{
     /* border:1px solid red; */
     width:750px;
     height: 800px;
     position: absolute;
     top: 20%;
     left: 30%;
     transform: translate(-50%,-50%);
     background-color:#000;
 }
/* sidediv */
.sidediv {
  border: none;    
  position: absolute;
  left: 50px;
  top: 10px;
  width: 1000px;
  height: 620px;
  overflow-y: auto;
  background-color: black;
}

a:link {
  text-decoration: none;
}

a:visited {
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

a:active {
  text-decoration: underline;
}

.text{
  position: absolute;
  left: 10%;
  top: 530px;
  width: 80%;
  height: auto;
  font-size: 20px;
  border: none;
}
</style>
</head>
<body>
 <!-- NAVIGATION -->
    <nav>
        <div id="logo">
            <img src="logo.png" alt="Health Highway">
        </div>

        <div id="right">
            <a href="blogs.php"><button>Back</button></a>
        </div>
    </nav>
    <div class="bgback">
	<div class="sidediv">
		<?php while($row = mysqli_fetch_array($getcart)){ ?>
		<h1><?php echo $row['Blog_name'];?></h1>
		<center>
		<img src="<?php echo $row['Related_images'];?>" style="width:600px;height: 350px;"/>
		</center>
		<div class="text">
			<font color="white">
				<?php 
					$arr = explode("</p>", $row['Blog Details']);
					for($i=0;$i<count($arr);$i++){
						echo $arr[$i]."<br><br>"; 
					}
				?>			
			<p style="text-align:right">BY <?php echo strtoupper($row['Blog Author']); ?><br><br><?php echo $row['Date'];?></p><br><br><br><br>
			</font>
		</div>
		<?php  } ?>
	</div>
</div>
</body>
</html>

		