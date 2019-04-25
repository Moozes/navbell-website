<?php
    include('./pages/resetpwd/code_verification.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="code">
        <input type="submit" name="submit" value="Verify code">
    </form>
</body>
</html>