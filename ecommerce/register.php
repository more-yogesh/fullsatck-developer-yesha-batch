<?php
include('includes/header.php');
if (isset($_SESSION['myUserDetails'])) {
    header('location:dashboard.php');
}
?>
<form action="post-handler.php" method="post">
    <h1>Register Form</h1>
    <table border="0" align="center">
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" id=""></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" id=""></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" id=""></td>
        </tr>
        <tr>
            <td>Confirm Password</td>
            <td><input type="password" name="confirm_password" id=""></td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" name="btnRegister">Register</button>
            </td>
        </tr>
    </table>
</form>
<?php
include('includes/footer.php');
?>