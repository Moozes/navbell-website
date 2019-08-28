
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <?php
	$x = array("name"=>"moussa", "age" => "22");
	$x = json_encode($x);
	$x = json_decode($x);


	$x = json_encode($x);

	// echo '<script>let questions = '.$x.';</script>'
  ?>
</head>
<body>
  <script type="text/javascript">
  	let questions = <?php echo $x; ?>;
  	console.log(questions);

  </script>
</body>
</html>