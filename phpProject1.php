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
<div class="formBox">
<h1 class="<?php echo $titleColor = isset($_POST["inputColor"]) ? $_POST["inputColor"] : "black" ?>">Hello
    <?php echo $titleName = isset($_POST["inputName"]) ? $_POST["inputName"] : "World" ?></h1>

<form action="phpProject1.php" method="POST">
    Name: <input type="text" name="inputName">
    <br>
    Color: <input type="text" name="inputColor">
    <br>
    <input type="submit">
</form>

<p> Your chosen color is: <?php echo isset($_POST["inputColor"]) ? $_POST["inputColor"] : "white" ?></p>
</div>

<div class="formBox">
    <?php
    $userArray = array();

    if (isset($_POST["inputName"])) {
        $userArray += array($_POST["inputName"] => $_POST["inputColor"]);
        foreach($userArray as $name => $color) {
            echo $name . " has chosen the color: " .  "<p class=\"{$color}\">{$color}</p><br>";
        }
    }
    ?>
</div>

</body>

</html>