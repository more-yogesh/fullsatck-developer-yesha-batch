<?php
include('includes/header.php');
if (isset($_SESSION['myUserDetails'])) {
    header('location:dashboard.php');
}
if (isset($_GET['errorMessages'])) {
    $errMessages = json_decode($_GET['errorMessages']);
}
?>
<form action="post-handler.php" method="post">
    <h1>Login Form</h1>
    <table border="0" align="center">
        <tr>
            <td>Email</td>
            <td>
                <input type="email" name="email" id="" required>
                <?php
                if (isset($errMessages->email)) {
                    echo "Email field is required";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" id="" required>
                <?php
                if (isset($errMessages->password)) {
                    echo "Password field is required";
                }
                ?>
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <button type="submit" name="btnLogin">Login</button>
                <?php
                if (isset($_GET['loginError'])) {
                    echo $_GET['loginError'];
                }
                ?>
            </td>
        </tr>
    </table>
</form>
<?php
include('includes/footer.php');
?>