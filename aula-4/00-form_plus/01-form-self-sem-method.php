<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=form, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = $_POST["nome"];

            echo $nome;
        }
    ?>

    <form action="<?php $_SERVER["PHP_SELF"]?>">
        <input type="text" name="nome" id="nome">
        <input type="submit" value="OK">
    </form>
</body>
</html>