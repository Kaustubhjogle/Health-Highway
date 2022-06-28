<?php
$id = $_GET['id'];
setcookie('display', $id);
echo '<script> window.location.href="disease.php"; </script>';
exit;
?>