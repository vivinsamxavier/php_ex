<?php


if(isset($_POST['submit'])){
	$string =$_POST['string'];
	$button=$_POST['submit'];
	$str="";
	switch ($button) {
		case 'upper':
			$str = strtoupper($string);
			break;
		
		case 'lower':
		$str = strtolower($string);
		break;
		case 'first1':
		$str = ucfirst($string);
		break;
		case 'last1':
		$str =substr($string, -3);
		break;
		case 'replace':
		$str = str_replace('a', 'e', $string);
		break;
		case 'select3w':
		$str  = implode("", array_slice(explode("", $string), 0,3));
	}

}

?>
<!DOCTYPE html>
	<html>
		<head>
			<title>string function</title>
		</head>
<body>
	<h1 style="text-align:center;" >string fuction</h1>
	<form action="" method="post" class="form">
	<label>string value</label>
	<input type="text" name="string" id="string"><br><br>
	<input type="submit" name="submit" value="upper">
	<input type="submit" name="submit" value="lower">
	<input type="submit" name="submit" value="first1">
	<input type="submit" name="submit" value="last1">
	<input type="submit" name="submit" value="replace">
	<input type="submit" name="submit" value="select3w">
	<br><br>
	<lable>result:</lable>
	<input type="text" name="str" value="<?php echo $str; ?>">
</form>
</body>
<style>
	
	.form{
		text-align: center;
		padding-top: 85px;
	}
</style>

</html>

