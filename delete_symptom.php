<?php include('db_conn.php'); ?>
<?php
$symptom_remove = $_GET['id'];
$added_symptoms = json_decode($_COOKIE['added'], true);
if (($key = array_search($symptom_remove, $added_symptoms)) !== false) {
	unset($added_symptoms[$key]);
}
while ($key > 0) {
        $temp = array_shift($added_symptoms);
        $added_symptoms[] = $temp;
        $key--;
}
setcookie("added", json_encode($added_symptoms));
echo "<script>window.location.href='symptoms.php';</script>";
exit;
?>