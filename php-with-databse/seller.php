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
        <table border="1">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" id=""></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" id=""></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" value="m" name="gender" id="">Male<br />
                    <input type="radio" value="f" name="gender" id="">FeMale<br />
                </td>
            </tr>
            <tr>
                <td>Categories</td>
                <td>
                    <input type="checkbox" name="categories[]" id="" value="ladies">LADIES<br />
                    <input type="checkbox" name="categories[]" id="" value="gents">MANS WEAR<br />
                    <input type="checkbox" name="categories[]" id="" value="kids">KIDS WEAR<br />
                </td>
            </tr>
            <tr>
                <td>State</td>
                <td>
                    <select name="state" id="">
                        <option value="guj">GUJARAT</option>
                        <option value="maha">MAHARASHTRA</option>
                        <option value="panjab">PANJAAAB</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td>Logo</td>
                <td><input type="file" name="profile_photo" accept="image/*" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="ADD"></td>
                <td><input type="reset" value="CANCEL"></td>
            </tr>
        </table>
    </form>
</body>

</html>