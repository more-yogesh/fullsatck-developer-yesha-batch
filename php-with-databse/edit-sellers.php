<?php
include('db.php');
$id = $_GET['edit_id'];
$seller = $connection->query("SELECT * FROM sellers WHERE id = $id");
// echo "<pre>";
$seller = $seller->fetch_object();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller</title>
</head>

<body>
    <form action="post_handler.php" method="post">

        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <table border="1">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" id="" value="<?php echo $seller->name; ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" id="" value="<?php echo $seller->email; ?>"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" value="m" name="gender" id="" <?php echo $seller->gender == 'm' ? 'checked' : ''; ?> <?php //if($seller->gender == 'm') { echo "checked"; }
                                                                                                                                ?>>Male<br />
                    <input type="radio" value="f" name="gender" id="" <?php echo $seller->gender == 'f' ? 'checked' : ''; ?> <?php //if($seller->gender == 'f') { echo "checked"; }
                                                                                                                                ?>>FeMale<br />
                </td>
            </tr>
            <tr>
                <td>Categories</td>
                <td>
                    <?php
                    $cats = explode(",", $seller->categories);
                    // print_r($cats);
                    ?>
                    <input type="checkbox" <?php echo in_array("ladies", $cats) ? 'checked' : ''; ?> name="categories[]" id="" value="ladies">LADIES<br />
                    <input type="checkbox" <?php echo in_array("gents", $cats) ? 'checked' : ''; ?> name="categories[]" id="" value="gents">MANS WEAR<br />
                    <input type="checkbox" <?php echo in_array("kids", $cats) ? 'checked' : ''; ?> name="categories[]" id="" value="kids">KIDS WEAR<br />
                </td>
            </tr>
            <tr>
                <td>State</td>
                <td>
                    <select name="state" id="">
                        <option value="guj" <?php echo $seller->state == 'guj' ? 'selected' : ''; ?>>GUJARAT</option>
                        <option value="maha" <?php echo $seller->state == 'maha' ? 'selected' : ''; ?>>MAHARASHTRA</option>
                        <option value="panjab" <?php echo $seller->state == 'panjab' ? 'selected' : ''; ?>>PANJAAAB</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td>
                    <textarea name="address" id="" cols="30" rows="10"><?php echo $seller->address; ?></textarea>
                </td>
            </tr>
            <tr>
                <td>Logo</td>
                <td><input type="file" name="profile_photo" accept="image/*" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="UPDATE" name="btnUpdate"></td>
                <td><input type="reset" value="CANCEL"></td>
            </tr>
        </table>
    </form>
</body>

</html>