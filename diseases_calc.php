<?php include('db_conn.php'); ?>
<?php
$added_symptoms = json_decode($_COOKIE['added'], true);
$gender = $_COOKIE['gender'];
$age = $_COOKIE['age'];
for($i=0;$i<count($added_symptoms);$i++){
	if($added_symptoms[$i] < 10){
		$added_symptoms[$i] = '00'.$added_symptoms[$i];
	}
	else if($added_symptoms[$i] < 100 && $added_symptoms[$i] >= 10){
		$added_symptoms[$i] = '0'.$added_symptoms[$i];
	}
}
$j = 0;
for($i=0;$i<count($added_symptoms);$i++){
	$temp = '%'.$added_symptoms[$i].'%';
	$query = mysqli_query($conn, "SELECT * FROM `symptoms_map` WHERE (Symptoms_num LIKE '$temp') AND (Age='$age' OR Age='All') AND (Gender='$gender' OR Gender='Both');");
	while($row = mysqli_fetch_array($query)){
		$possible_diseases[$i][$j] = $row['Disease_name'];
		$id_map[$i][$j] = $row['ID'];
		$j = $j+1;
	}
	if(empty($possible_diseases[$i])){
		$possible_diseases[$i] = array();
		$id_map[$i] = array();
	}
}
$diseases = array();
$id = array();
if(count($added_symptoms) == 1){
	$diseases = $possible_diseases[0];
	$id = $id_map[0];
}
for($i = 0;$i<count($added_symptoms)-1;$i++){
	$diseases = array_merge($diseases ,array_intersect($possible_diseases[$i], $possible_diseases[$i+1]));
	$id = array_merge($id ,array_intersect($id_map[$i], $id_map[$i+1]));
}
if(empty($diseases)){
	$emp = 'Yes';
}
else{
	$emp = 'No';
}
setcookie("empty", $emp);
setcookie("display", $id[0]);
setcookie("disease", json_encode($diseases));
setcookie("disease_id", json_encode($id));
$disease_id = json_decode($_COOKIE['disease_id'], true);
echo "<script>window.location.href='disease.php';</script>";
exit; 
?>