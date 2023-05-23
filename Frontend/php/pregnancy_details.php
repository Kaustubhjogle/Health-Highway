<?php include('db_conn.php'); ?>
<?php
	$trimester = $_POST['trimester'];
	$getcart = mysqli_query($conn,"SELECT * FROM `pregnancy` WHERE Trimesters='$trimester'");
	$rows = mysqli_num_rows($getcart);
?>
<!DOCTYPE html>
<html>
<head>
<title>Pregnancy Details</title>
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
     height: 600px;
     position: absolute;
     top: 50%;
     left: 30%;
     transform: translate(-50%,-50%);
     background-color:#000;
 }
/* sidediv */
.sidediv {
  border: none;    
  position: absolute;
  left: 50px;
  top: 50px;
  width: 1000px;
  max-height: 550px;
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
  left: 990px;
  top: 700px;
  width: 240px;
  height: 50px;
  font-size: 15px;
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
            <a href="pregnancy_main.html"><button>Back</button></a>
        </div>
    </nav>
    <div class="bgback">
	<div class="sidediv">
		<h1>Pregnancy Do's and Don'ts for<br><?php echo $trimester; ?></h1>
		<table border= 0px width=990px style="background-color: black; color: white;">
		<?php while($row = mysqli_fetch_array($getcart)){ ?>
		<tr>
		<th></th>
		<th style="text-align: center;"><h2>Do's</h2><br></th>
		<th></th>
		<th style="text-align: center;"><h2>Don'ts</h2><br></th>
		<th></th>
		</tr>
		<?php 
			$arr1 = explode("</p>",$row["Do's"]);
			$arr2 = explode("</p>",$row["Don'ts"]);
		?>
		<?php for($i=0;$i<count($arr1)-1;$i++){ ?>
		<tr>
		<td style="width: 50px;"></td>
		<td style="width:450px;">
			<h3>
				<ul>
 				<?php
					echo "<li>".$arr1[$i]."</li><br>";  
				?>
				</ul>
			</h3>
		</td>
		<td style="width:50px;"></td>
		<td style="width:450px;">
			<h3>
				<ul>
				<?php 
					if($i < count($arr2)-1){
						echo "<li>".$arr2[$i]."</li><br>"; 
					}
				?>
				</ul>
			</h3>
		</td>
		<td style="width: 50px;"></td>
		</tr>
		<?php } ?>
		<?php  } ?>
		</table>
		<br><br>
	</div>
</div>
</body>
</html>

		