<?php include('db_conn.php'); ?>
<?php
$name = $_POST['name'];
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      echo '<script> alert("Only letters and white space allowed in name") </script>';
      echo "<script>window.location.href='signup.html';</script>";
      exit;
    }
$email = $_POST['email'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo '<script> alert("Enter a valid Email Address") </script>';
      echo "<script>window.location.href='javascript:window.history.back(-1)';</script>";
      exit;
}
$phone = $_POST['phone'];
if(strlen($phone) != 10){
	echo '<script> alert("Enter a Valid phone number.") </script>';
	echo "<script>window.location.href='javascript:window.history.back(-1)';</script>";
        exit;
}
$lisc = $_POST['lisc'];
$pin = $_POST['pin'];
if(strlen($pin) != 6){
	echo '<script> alert("Your Pincode is not Valid.") </script>';
	echo "<script>window.location.href='javascript:window.history.back(-1)';</script>";
        exit;
}
$pwd = $_POST['pwd'];
$cnfpwd = $_POST['cnfpwd'];
if($cnfpwd !=  $pwd){
	echo '<script> alert("Check Your Password") </script>';
	echo "<script>window.location.href='javascript:window.history.back(-1)';</script>";
        exit;
}
$query = mysqli_query($conn, "SELECT * FROM `medical_assistants` WHERE Phone='$phone' AND Email='$email'");
$getrows = mysqli_num_rows($query);
if($getrows == 1){
	echo '<script> alert("The EmailID or Phone number you entered are already registered."); </script>';
	echo "<script>window.location.href='javascript:window.history.back(-1)';</script>";
        exit;
}
else{
	$query = mysqli_query($conn, "INSERT INTO `medical_assistants`(`ID`, `Name`, `Email`, `Phone`, `Hospital_lic`, `Pincode`, `Password`) VALUES ('','$name','$email','$phone','$lisc','$pin','$cnfpwd')");
	setcookie('account', 'Yes');
	echo '<script> alert("Sign Up Succesfull") </script>';
	echo "<script>window.location.href='patient_details_gen.php';</script>";
        exit;
}
?>