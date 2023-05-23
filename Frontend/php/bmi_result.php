<?php 
	$bmi = $_COOKIE['bmi'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=">
    <title>BMI Calculator</title>
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<style>
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
form{
     /* border:1px solid red; */
     width: 700px;
     height: 550px;
     position: absolute;
     top:50%;
     left: 35%;
     transform: translate(-50%,-50%);
    background-color:#000;
 }
 .input-box input{
     border:1px solid white;
     font-size: 20px;
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
</style>
<body>
    <!-- NAVIGATION -->
    <nav>
        <div id="logo">
            <img src="logo.png" alt="Health Highway">
        </div>

        <div id="right">
            <a href="bmi.html"><button>Back</button></a>
        </div>
    </nav>
    <div class="bgback">
    <!-- FORM -->
    <form action="bmi_process.php" method="POST">
        <h1>BMI Calculator</h1>
	  <center>
        <div class="input-box">
            <input type="text" placeholder="Enter Weight" name="weight" value="<?php echo $bmi,"  BMI"; ?>" readonly>
		<?php 
			if($bmi < 18.5){ ?>
				<h2><font color="#049AC8">Underweight</font></h2>
			<?php } else if($bmi > 25){ ?>
				<h2><font color="#FB7881">Overweight</font></h2>
			<?php } else{ ?>
				<h2><font color="green">Normal</font></h2>
			<?php }
		?>
        </div><br>
        <img src="bmi.jpg" style="width: 80%; height: 80%;"/>
	  </center>
    </form>
    </div>
</body>

</html>