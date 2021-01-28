<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body onscroll="console.log('I am scrolling')">
    <form action="">
        <input type="text" onkeyup="showMyTextToDiv(this.value)" name="" id="fname" onblur="alert('I loos my focus');">
        <div id="showText"></div>
        <button type="button" onclick="document.getElementById('fname').style = 'display:none'">CLICK ME TO HIDE BOX</button>
    </form>
    <div id="demo" onmouseover="this.style='display:none'">
        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora est voluptas nihil saepe minus. Velit deleniti dolorum earum fuga veritatis? Corrupti suscipit neque dolorum tempora enim illo eaque obcaecati cumque?</h1>
        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora est voluptas nihil saepe minus. Velit deleniti dolorum earum fuga veritatis? Corrupti suscipit neque dolorum tempora enim illo eaque obcaecati cumque?</h1>
        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora est voluptas nihil saepe minus. Velit deleniti dolorum earum fuga veritatis? Corrupti suscipit neque dolorum tempora enim illo eaque obcaecati cumque?</h1>
        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora est voluptas nihil saepe minus. Velit deleniti dolorum earum fuga veritatis? Corrupti suscipit neque dolorum tempora enim illo eaque obcaecati cumque?</h1>
    </div>

    <script>
        function showMyTextToDiv(arg1) {
            // alert(arg1);
            // document.getElementById('showText').innerHTML = "My Name is yogesh";
            document.getElementById('showText').innerHTML = arg1;

        }
    </script>
</body>

</html>