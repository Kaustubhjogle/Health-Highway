<?php include('db_conn.php'); ?>
<?php
$added_symptoms = json_decode($_COOKIE['added'], true);
$query = mysqli_query($conn,"SELECT * FROM `symptoms`");
$i = 0;
while($row = mysqli_fetch_array($query)){
	$id[$i] = $row['Symptom_id'];
	$symptom_name[$i] = $row['Name'];
	$i = $i + 1;
} 
$total = $i;
$count_symptoms = count($added_symptoms);
$k = 0;
for($j = 0;$j<$count_symptoms;$j++){
	$getsymptoms = mysqli_query($conn, "SELECT `Name` FROM `symptoms` WHERE Symptom_id='$added_symptoms[$j]'");
	while($row = mysqli_fetch_array($getsymptoms)){
		$added_names[$k] = $row['Name'];
		$k = $k + 1;
	}
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=">
    <title>Symptoms</title>
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style_symptoms.css">
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
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 12px;
  background-repeat: no-repeat;
  left: 10%;
  width: 80%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
  position: relative;
}

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
  overflow-y: auto;
  height: 300px;
}

#myUL li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 15px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block;
  position: relative;
  left: 10%;
  width: 82%;
}

#myUL li a:hover:not(.header) {
  background-color: #eee;
}

.btn-group button {
  background-color: rgb(0, 153, 255); /* Green background */
  border: 2px solid black; /* Green border */
  border-radius: 25px;
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
.bgback{
	 width: 100%;
	 height: 91%;
	 left: 0px;
	 top: 9%;
	 background-image: url(hhh.jpg);
         position: absolute;
   	 background-position: center;
   	 background-size: cover;
}
.add{
  position: relative;
  left: 10%;
  width: 80%;
  overflow-y: none;
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
            <a href="diseases_common.php"><button>Search By Disease</button></a>
        </div>
    </nav>
<div class="bgback">
<form>
<h1>Symptoms</h1>
<div class="add">
<?php if($count_symptoms > 0){ ?>
<div class="btn-group">
	<?php for($i=0;$i<$count_symptoms;$i++){ ?>
  		<button><?php echo $added_names[$i]; ?> <a href="delete_symptom.php?id=<?php echo $added_symptoms[$i]; ?>" style='text-decoration:none;'>&#x274C;</a></button>
	<?php } ?>
	<a href="diseases_calc.php" style='text-decoration:none;'><div class="input-submit"><input type="submit" value="Search Diseases"></input></div></a>
</div>
<?php } ?>
</div>
<br>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for symptoms.." title="Type in a name">

<ul id="myUL">
	<?php for($i = 0;$i<$total;$i++){ ?>
		<li><a href="symptoms_add.php?id=<?php echo $id[$i]; ?>"><?php echo $symptom_name[$i]; ?></a></li>
	<?php } ?>

</ul>
</form>
</div>
<script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>

</body>
</html>
