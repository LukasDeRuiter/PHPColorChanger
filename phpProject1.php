<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="project1.css">
    <title>Document</title>
</head>

<body>
<h1 class="<?php echo $titleColor = isset($_GET["inputColor"]) ? $_GET["inputColor"] : "black" ?>">Hello world</h1>

<form action="phpProject1.php" method="get">
    Color: <input type="text" name="inputColor">
    <br>
    <input type="submit">
</form>

<p> Your chosen color is: <?php echo isset($_GET["inputColor"]) ? $_GET["inputColor"] : "white" ?></p>

</body>

</html>