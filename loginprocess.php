<?php include('db_conn.php'); ?>
<?php
$phone = $_POST['phone'];
if(strlen($phone) != 10){
	echo '<script> alert("Enter a Valid phone number.") </script>';
	echo "<script>window.location.href='javascript:window.history.back(-1)';</script>";
        exit;
}
$pwd = $_POST['pwd'];
$query = mysqli_query($conn, "SELECT * FROM `medical_assistants` WHERE Phone='$phone' AND Password='$pwd'");
$getrows = mysqli_num_rows($query);
if($getrows == 1){
	setcookie('account', 'Yes');
	echo '<script> alert("Login Succesful"); </script>';
	echo "<script>window.location.href='patient_details_gen.php';</script>";
        exit;
}
else{
	echo '<script> alert("Your Account Credentials Do Not Match. Verify and Try Again") </script>';
	echo "<script>window.location.href='javascript:window.history.back(-1)';</script>";
        exit;
}
?>