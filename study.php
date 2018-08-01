<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">
        <p>input first num: </p>
        <input type="number" name="first_n">
        <br/>
        <p>input second num: </p>
        <input type="number" name="second_n">
        <br/>
        <input type="submit" >
        </form>
        <?php
        $a = $_REQUEST['first_n']   ;
        $b = $_REQUEST['second_n'];
        if(isset($a)){
            echo mt_rand($a, $b);
        }else
        echo "Данные с адресной строки: {$_SERVER['QUERY_STRING']};"
        ?>

    </div>
</body>
</html>