<?php include('db_conn.php'); ?>
<?php
$display = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM `diseases` WHERE Disease_id='$display'");
while($row = mysqli_fetch_array($query)){
	$name = $row['Name'];
	$info = $row['Information'];
	$causes = $row['Causes'];
	$symptoms = $row['Symptoms'];
	$diagnosis = $row['Diagnosis'];
	$mngt = $row['Management'];
	$prevention = $row['Prevention'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=">
    <title>Diseases</title>
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
</head>	
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
 /* CSS RESET */
 *{
     padding: 0px;
     margin: 0px;
     font-family: 'Slabo 27px', serif;
 }
 
 /* NAVIGATION */
 nav{
    display: flex;
justify-content: space-between;
border: 1px solid rgb(98, 98, 98);
height:70px;
align-items: center;
background-color:  #000;
font-family: 'Slabo 27px', serif;
color: white;
}

#logo img{
    height: 90px;
    width: 100px;

}
#center span:hover{
    /* text-decoration: underline; */
    margin-bottom: 2px;
    cursor: pointer;
    border-bottom: 2px solid white;
}
#center span{
    padding: 8px;
    margin: 5px;
    font-size: 18px;

}
#right{
    margin-right: 10px;
}
#right button{
    padding: 5px 15px;
    margin: 5px;
    background-color: rgb(0, 153, 255);
    border: none;
    outline: none;
    border-radius: 15px;
    font-size: 15px;
   font-weight: bold;
 
}
.maindiv{
     /* border:1px solid red; */
     width: 1200px;
     height: 630px;
     position: absolute;
     top:51%;
     left: 50%;
     transform: translate(-50%,-50%);
     background-color:#000;
     overflow-y: none;
 }
 h1{
     text-align: center;
     margin-top:20px ;
     margin-bottom: 20px;
     color: white;
 }
/* .input-box{
    border:1px solid  rgb(64, 193, 236);
    width:180px;
    margin: 20px auto;
    padding:12px;
    color: white;
    border-radius: 25px;
 } */

 .input-box input{
     border:1px solid white;
     font-size: 16px;
     width: 230px;
     border-radius:24px;
     padding: 15px;
     display: block;
     margin:12px auto;
     text-align: center;
    outline: none;
    background-color: transparent;
    color:white;
    border:1px solid rgb(64, 193, 236);
 }

 .input-box input[type="text"]:focus,.input-box input[type="password"]:focus{
  cursor: pointer;
  width: 280px;
  border:1px solid rgb(64, 236, 121);
 }

 .input-submit{
    margin: 20px auto;
        border:1px solid rgb(64, 236, 121);
        width:200px;
   	padding: 15px;
         border-radius: 25px;
     
 }
 .input-submit input{
  
        font-size: 16px;
        width: 99%;
       border: none;
       outline: none;
       background-color: transparent;
       color:white;
   font-weight: bold;
       
  
 }
 
 .input-submit:hover{
     background-color:rgb(64, 236, 121); 
     cursor: pointer;
 }

 .input-submit input:hover{
     color: black;
     font-weight: bold;
     cursor: pointer;
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
/* Notification message */
.message{
	position: absolute;
	top: 10px;
	left: 0px;
	width: 100%;
	height: 23px;
	color: white;
	font-size: 19px;
	background-color: black;
}
.display{
	position: absolute;
	left: 2%;
	width: 96%;
	height: 83%;
	top: 15%;
	background-color: #E7F2FC;
	overflow-y: auto;
}
.innerdisplay{
	position: absolute;
	left: 2%;
	height: 96%;
	top: 2%;
	width: 96%;
	overflow-y: auto;
	word-wrap: break-word
}


.btn-group button {
  background-color: rgb(0, 153, 255); /* Green background */
  border: 1px solid rgb(0, 153, 255); /* Green border */
  color: white; /* White text */
  padding: 10px 24px; /* Some padding */
  cursor: pointer; /* Pointer/hand icon */
  float: none; /* Float the buttons side by side */
}

/* Clear floats (clearfix hack) */
.btn-group:after {
  content: "";
  clear: both;
  display: table;
}

.btn-group button:not(:last-child) {
  border-right: none; /* Prevent double borders */
}

/* Add a background color on hover */
.btn-group button:hover {
  background-color: blue;;
}
</style>
<body>
<!-- NAVIGATION -->
    <nav>
        <div id="logo">
            <img src="logo.png" alt="Health Highway">
        </div>
	  <div id="right">
            <a href="diseases_common.php"><button>Back</button></a>
        </div>
    </nav>
<div class="bgback">
<div class="maindiv">
	<h1>Disease Informatics Portal</h1>
	<div class="display">
		<div class="innerdisplay">
				<pre><h2><?php echo $name; ?></h2><br></pre>
				<?php if($info != 'NULL'){ ?>
				<h3>Information</h3><br>
				<?php 
					$query = mysqli_query($conn, "SELECT * FROM `diseases` WHERE Information LIKE '%•%' AND Disease_id='$display'"); 
					$row = mysqli_num_rows($query);
					if($row == 0){
						echo $info.'<br>';
					} else {
						echo '<pre>'.$info.'</pre><br>';
					}
				?>
				<?php } ?>
				<?php if($causes != 'NULL'){ ?>
				<br><h3>Causes</h3><br>
				<?php 
					$query = mysqli_query($conn, "SELECT * FROM `diseases` WHERE Causes LIKE '%•%' AND Disease_id='$display'"); 
					$row = mysqli_num_rows($query);
					if($row == 0){
						echo $causes;
					} else {
						echo '<pre>'.$causes.'</pre>';
					}
				?>
				<?php } ?>
				<?php if($symptoms != 'NULL'){ ?>
				<br><h3>Symptoms</h3><br>
				<?php 
					$query = mysqli_query($conn, "SELECT * FROM `diseases` WHERE Symptoms LIKE '%•%' AND Disease_id='$display'"); 
					$row = mysqli_num_rows($query);
					if($row == 0){
						echo $symptoms;
					} else {
						echo '<pre>'.$symptoms.'</pre>';
					}
				?>
				<?php } ?>
				<?php if($diagnosis != 'NULL'){ ?>
				<br><br><h3>Diagnosis</h3><br>
				<?php 
					$query = mysqli_query($conn, "SELECT * FROM `diseases` WHERE Diagnosis LIKE '%•%' AND Disease_id='$display'"); 
					$row = mysqli_num_rows($query);
					if($row == 0){
						echo $diagnosis;
					} else {
						echo '<pre>'.$diagnosis.'</pre>';
					}
				?>
				<?php } ?>
				<?php if($mngt != 'NULL'){ ?>
				<br><br><h3>Management</h3><br>
				<?php 
					$query = mysqli_query($conn, "SELECT * FROM `diseases` WHERE Management LIKE '%•%' AND Disease_id='$display'"); 
					$row = mysqli_num_rows($query);
					if($row == 0){
						echo $mngt;
					} else {
						echo '<pre>'.$mngt.'</pre>';
					}
				?>
				<?php } ?>
				<?php if($prevention != 'NULL'){ ?>
				<br><br><h3>Prevention</h3><br>
				<?php 
					$query = mysqli_query($conn, "SELECT * FROM `diseases` WHERE Prevention LIKE '%•%' AND Disease_id='$display'"); 
					$row = mysqli_num_rows($query);
					if($row == 0){
						echo $prevention;
					} else {
						echo '<pre>'.$prevention.'</pre>';
					}
				?>
				<?php } ?>
		</div>
	</div>
</div>
</div>
</body>
</html>