<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=">
    <title>Treatment Given</title>
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="signstyle.css">
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
    </nav>
    <div class="bgback">
    <!-- FORM -->
    <form action="treatmentprocess.php" method="POST">
        <h1 color="white">Treatment Details</h1>
	<div class="input-box">
            <input type="text" placeholder="Enter Patient Name" name="name">
        </div>
	<div class="input-box">
            <input type="text" placeholder="Enter Age" name="lisc">
        </div>
        <div class="input-box">
            <input type="text" placeholder="Enter Status" name="pin">
        </div>
        <div class="input-box">
            <input type="text" placeholder="Enter Diseases" name="pwd">
        </div>
        <div class="input-box">
            <input type="text" placeholder="Enter Stable(Yes/No)" name="cnfpwd">
        </div>
        <div class="input-box">
            <input type="text" placeholder="Enter Treatment Given" name="cnfpwd">
        </div>
	<div class="input-box">
		<input type="file" id="img" name="img" accept="image/*">
	</div>
        <div class="input-submit">
            <input type="submit" value="Add Details" name="signup">
        </div>
    </form>
    </div>
</body>

</html>