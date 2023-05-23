<?php include('db_conn.php'); ?>
<?php
	$getcart = mysqli_query($conn, "SELECT `news_id`, `name`, `title`, `url`, `urlToImage`, `publishedAt`, `content` FROM `news` ORDER BY Rand()");
	$rows = mysqli_num_rows($getcart);
?>
<!DOCTYPE html>
<html>
<head>
<title>News</title>
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
            <a href="main.php"><button>Back</button></a>
        </div>
    </nav>
    <div class="bgback">
	<div class="sidediv">
		<h1>All you need to know about Health</h1>
		<table border= 0px width=990px style="background-color: black; color: white;">
		<?php while($row = mysqli_fetch_array($getcart)){ ?>
		<tr>
		<td style="text-align:center"><img src="<?php echo $row['urlToImage']; ?>" style="width: 200px; height: 200px;" alt=" "></td>
		<td style="width: 30px;"></td>
		<td style="text-align:left; width: 480px;"><h3><?php echo $row['title']; ?></h3><br><?php $arr = explode("..", $row['content']); echo $arr[0]; ?>.............<a href="<?php echo $row['url']; ?>" style="color: white;">Read More</a></td>
		<td style="width: 50px;"></td>
		<td style="text-align:center;"><h3>Source: <?php echo $row['name']; ?><br><br>Published on: <?php $abc = explode("T", $row['publishedAt']); echo $abc[0]." ".substr($abc[1],0,8);?></h3></td>
		</tr>
		<tr style="height: 30px;"></tr>
		<?php  } ?>
		</table>
	</div>
</div>
</body>
</html>

		