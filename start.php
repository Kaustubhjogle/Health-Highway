<?php include('db_conn.php'); ?>
<?php
$data = array();
setcookie("gender", "Male");
setcookie("age", "Adult");
setcookie("added", json_encode($data));
echo "<script>window.location.href='symptoms.php';</script>";
exit;
?>