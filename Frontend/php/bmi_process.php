<?php include('db_conn.php'); ?>
<?php
	if(isset($_POST['calculate'])){
		$weight = $_POST['weight'];
		$weight_unit = $_POST['units_weight'];
		$height = $_POST['height'];
		$height_unit = $_POST['units_height'];
		if($weight_unit == 'lbs'){
			$weight = $weight * 0.45359237;
			$weight = round($weight, 2);
		}
		if($height_unit == 'm'){
			$height = $height * 100;
			$height = round($height, 2);
		} else if($height_unit == 'in'){
			$height = $height * 2.54;
			$height = round($height, 2);
		}
		$bmi = ($weight/pow($height,2))*10000;
		$bmi = round($bmi, 1);
		if($bmi > 40 || $bmi < 16){
			echo "<script> alert('This BMI does not looks right. Make sure the height and weight you entered are correct'); </script>";
			echo "<script>window.location.href='javascript:window.history.back(-1)';</script>";
       	 	exit;
		} else{
			setcookie('bmi', $bmi);
			echo "<script>window.location.href='bmi_result.php';</script>";
       	 	exit;
		}
	}
?>