<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="HTTPS://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="json_index.js"></script>
    <title>Передача JSON-данных</title>
</head>
<body>
    <p id='js-hello'>Здравствуйте</p>
    <form action="json_answer.php" method="get">
        <p>Name: <input type="text" name="name" value=""/></p>
        <p>Surname: <input type="text" name="surname" value=""/></p>
        <p><input type="submit" value="Send"></p>
    </form>
</body>
</html>

