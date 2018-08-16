<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Плохая гостевая книга</title>
</head>
<body>
<H1>НЕ МОЖНА БРЕХАТИ</H1>
<?php
$FNAME = "BOOK.txt";
if(@$_REQUEST['doAdd']) {
    $f = fopen($FNAME, "a");
    if(@$_REQUEST['text']) fputs($f, htmlspecialchars($_REQUEST['text'])."\n");
    fclose($f);
}
$gb = @file($FNAME);
if(!$gb) $gb = [];
?>
<form action="<?=$_SERVER['SCRIPT_NAME']?>" method="post">
    Text: <br>
    <textarea name="text" cols="30" rows="10"></textarea> <br>
    <input type="submit" name="doAdd" value="Send">
</form>
<?php
foreach ($gb as $text){?>
    <?=$text?><br />
    <hr/>
<?php } ?>
</body>
</html>