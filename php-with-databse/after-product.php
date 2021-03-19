<?php

$connection = new mysqli('localhost', 'root', '', 'ecom');

if (isset($_POST['btnAdd'])) {
    $connection->query("INSERT INTO products (name, price) VALUES ('$_POST[p_name]', '$_POST[price]')");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>

<body>
    <form action="" method="post">
        <fieldset style="width: 25%;">
            <legend>
                <h3>Create New Product</h3>
            </legend>
            <table border="0">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="p_name"></td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td><input type="number" name="price">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="btnAdd" value="ADD"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>