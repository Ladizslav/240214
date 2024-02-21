<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<pre>";
    if(empty($_SESSION["jmeno"])){
        echo "You are logged"
    }else{
        echo "You are not logged"
    }
    print_r($_SESSION);
    ?>
</body>
</html>