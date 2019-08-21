<?php
	if(isset($_POST['submit'])) {
		$x = $_FILES['file']['name'];
		echo $x;
		$array = explode('.', $x);
		echo '<br>';
		echo $array[1];

	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <form action="test.php" method="post" enctype="multipart/form-data">
 	file
 	<input type="file" name="file">
 	<input type="submit" name="submit" value="submit">
 </form>
</body>
</html>