<?php
echo "<pre>";
// print_r($_GET['email']);

// print_r($_POST);
// print_r($_POST['email']);

print_r($_REQUEST);


// $_POST;


?>

<html>
<head>
    <title>My Page</title>
</head>
<body>
<form method="post">
    <input type="text" name="email">
    <input type="password" name="password">
    <input type="submit" value="LOGIN">
</form>
</body>
</html>