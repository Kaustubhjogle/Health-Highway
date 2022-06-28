<?php include('db_conn.php'); ?>
<?php
$query = mysqli_query($conn,"SELECT `Name`,`Disease_id` FROM `diseases`");
$i = 0;
while($row = mysqli_fetch_array($query)){
	$id[$i] = $row['Disease_id'];
	$name[$i] = $row['Name'];
	$i = $i + 1;
} 
$total = $i;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=">
    <title>Disease Portal</title>
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
  height: 400px;
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
            <a href="main.php"><img src="logo.png" alt="Health Highway"></a>
        </div>

        <div id="right">
            <a href="patient_details_gen.php"><button>Search By Symptoms</button></a>
        </div>
    </nav>
<div class="bgback">
<form>
<h1>Disease Portal</h1>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for diseases.....(Click on the disease name to get details)" title="Type in a name">

<ul id="myUL">
	<?php for($i = 0;$i<$total;$i++){ ?>
		<li><a href="view_disease.php?id=<?php echo $id[$i]; ?>"><?php echo $name[$i]; ?></a></li>
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
