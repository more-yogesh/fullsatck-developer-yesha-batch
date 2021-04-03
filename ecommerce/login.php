<?php
include('includes/header.php');
if (isset($_SESSION['myUserDetails'])) {
    header('location:dashboard.php');
}
?>
<form action="post-handler.php" method="post">
    <h1>Login Form</h1>
    <table border="0" align="center">
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" id=""></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" id=""></td>
        </tr>

        <tr>
            <td colspan="2">
                <button type="submit" name="btnLogin">Login</button>
            </td>
        </tr>
    </table>
</form>
<?php
include('includes/footer.php');
?>