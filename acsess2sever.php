<!DOCTYPE html>
<html lang="ru">
<head>
    <title>script cepвepa</title>
    <meta charset='utf-8'>
</head>
<body>
<?php
if(isset($_REQUEST['doGo'])){
    foreach ($_REQUEST['known']as $k=>$v){
        if($v) echo "u know lang. : $k <br/>";
        else echo "u don`t know: $k <br/>";
    }
}
?>
<form action="<?=$_SERVER['SCRIPT_NAME'] ?> " method="post">
    Какие языки програмирования вы знаете? <br/>
    <input type="hidden" name="known[PHP]" value="0">
    <input type="checkbox" name="known[PHP]" value="1">PHP <br/>
    <input type="hidden" name="known[Perl]" value="0">
    <input type="checkbox" name="known[Perl]" value="1">Perl <br/>

    <input type="submit" value="Send" name="doGo"><br/>
</form>
<?php
$a = ['a'=> 10, 'b' => 20];
$b = ['b' => 'new?'];
$a += $b;

print_r($a);

foreach ($b as $k=>$v) {
    $a[$k]=$v;
}
print_r($a);
$st= "4597219361|Thomas Anderson|l962-03-11|TeKcT, co~ep~a~ (|) !";
$person = explode("|", $st, 4);

list ($id, $name, $burn, $corranent) = $person;
print_r($person);
?>
</body>
</html>