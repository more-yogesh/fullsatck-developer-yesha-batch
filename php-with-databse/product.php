<?php
if (isset($_POST['btnSubmit'])) {
    // echo "clicked";
    echo $name = $_POST['p_name'];
    echo $price = $_POST['price'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <title>Product Insert</title>
    <style>
        p,
        h1,
        span,
        div {
            background: tan;
        }
    </style>
</head>

<body>
    <!--  <p>Hello World</p>
    <h1>Hello World</h1>
    <span>Hello World</span>
    <span>Hello World</span>
    <div>yogesh</div>

    <table border="10" align="center">
        <tr>
            <td>12</td>
            <td>12</td>
            <td>12</td>
        </tr>
    </table>
    <input type="text"><button>ADD</button>
    <form>
        <input type="text" name="fname">
        <button type="submit">ADD</button>
    </form>
    <a href="#">Login</a>-->

    <form action="" method="post">
        <label for="pro_id">Product Name</label>
        <input type="text" name="p_name" id="pro_id"><br />
        <hr />
        <label for="price">PRICE</label>
        <input type="text" name="price" id="price">
        <br />
        <input type="hidden" name="secret_id" value="4sf654f6sf54gf6g54">
        <input type="submit" value="INSERT" name="btnSubmit" />
        <hr />
        <!-- <input type="checkbox" id="terms">
        <label for="terms">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex vel sapiente, labore iusto consectetur repellat obcaecati perferendis, deserunt quaerat neque dignissimos porro architecto corporis! In hic voluptates rerum commodi natus.
        </label> -->
    </form>
</body>

</html>