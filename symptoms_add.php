<?php include('db_conn.php'); ?>
<?php
$symptom_id = $_GET['id'];
$added_symptoms = json_decode($_COOKIE['added'], true);
array_push($added_symptoms,"$symptom_id");
echo $added_symptoms[0];
setcookie("added", json_encode($added_symptoms));
echo "<script>window.location.href='symptoms.php';</script>";
exit;
?>