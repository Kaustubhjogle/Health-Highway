<?php include('db_conn.php'); ?>
<?php
$gender = $_POST['gender'];
$age = $_POST['age'];
setcookie('age', $age);
setcookie('gender', $gender);
$data = array();
setcookie("added", json_encode($data));
echo '<script>window.location.href="symptoms.php";</script>';
exit;
?>