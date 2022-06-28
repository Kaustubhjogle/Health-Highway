<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=">
    <title>General Patient Details</title>
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style2.css">
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
</style>
<body>
    <!-- NAVIGATION -->
    <nav>
        <div id="logo">
            <img src="logo.png" alt="Health Highway">
        </div>

        <div id="right">
            <a href="diseases_common.php"><button>Search By Disease</button></a>
        </div>
    </nav>
    <div class="bgback">
    <!-- FORM -->
    <form action="details_process.php" method="POST">
        <h1 color="white">Patient General Details</h1>
	<center>
	<h2>Select Gender</h2><br>
	<label class="container">Male
  	<input type="radio" checked="checked" name="gender" value="Male">
  	<span class="checkmark"></span>
	</label>
	<label class="container">Female
  	<input type="radio" name="gender" value="Female">
  	<span class="checkmark"></span>
	</label><br>
	<h2>Select Age Range</h2><br>
	<label class="container">0-5
  	<input type="radio" checked="checked" name="age" value="Small">
  	<span class="checkmark"></span>
	</label>
	<label class="container">5-15
  	<input type="radio" name="age" value="Kids">
  	<span class="checkmark"></span>
	</label>
	<label class="container">15-25
  	<input type="radio" name="age" value="Adults">
  	<span class="checkmark"></span>
	</label>
	<label class="container">25-40
  	<input type="radio" name="age" value="Adults">
  	<span class="checkmark"></span>
	</label>
	<label class="container">40-50
  	<input type="radio" name="age" value="Adults">
  	<span class="checkmark"></span>
	</label>
	<label class="container">50-60
  	<input type="radio" name="age" value="Senior">
  	<span class="checkmark"></span>
	</label>
	<label class="container">Above 60
  	<input type="radio" name="age" value="Senior">
  	<span class="checkmark"></span>
	</label>
        <div class="input-submit">
            <input type="submit" value="Add Symptoms" name="symptoms">
        </div>
	</center>
    </form>
    </div>
</body>

</html>