<?php
include('db.php');
$sellers = $connection->query("SELECT * FROM sellers");

if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $deleteQuery = "DELETE FROM sellers WHERE id = $id";
    $connection->query($deleteQuery);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller List</title>
</head>

<body>
    <h1>List Of sellers</h1>
    <table border="1" width="100%">
        <tr>
            <td>#</td>
            <td>name</td>
            <td>email</td>
            <td>gender</td>
            <td>address</td>
            <td>categories</td>
            <td>state</td>
            <td>Action</td>
        </tr>
        <?php
        while ($sel = $sellers->fetch_object()) {
        ?>
            <tr>
                <td>#</td>
                <td><?php echo $sel->name; ?></td>
                <td><?php echo $sel->email; ?></td>
                <td>
                    <?php if ($sel->gender == 'm') {
                        echo 'MALE';
                    } else {
                        echo "FEMALE";
                    } ?>
                </td>
                <td><?php echo $sel->address; ?></td>
                <td><?php echo $sel->categories; ?></td>
                <td><?php echo $sel->state; ?></td>
                <td><a href="show-sellers.php?delete_id=<?php echo $sel->id; ?>">DELETE</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>