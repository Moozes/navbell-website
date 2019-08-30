
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <?php
  $x = [];

	// echo '<script>let questions = '.$x.';</script>'
  ?>
</head>
<body>
  <script type="text/javascript">
    let questions = <?php echo json_encode($x); ?>;
  	console.log(questions[0]);

  </script>
</body>
</html>