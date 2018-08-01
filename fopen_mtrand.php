<?php
$ourFile = fopen("C:/xampp/htdocs/text.txt", "r");
for($i = 0; $s = fgets($ourFile,1000);$i++){
    if(mt_rand(0,$i)==0) $line = $s;
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
setlocale(LC_ALL,"");
echo $line."<br/>";
echo mt_getrandmax();
echo "<br/>";
mt_srand(time()+ (double)microtime()*100000+ getmygid());
for($i=0; $i<5;$i++) echo mt_rand()." ";
echo "<br/>";
mt_srand(time()+ (double)microtime()*100000+getmygid());//сброс mt_rand, для реально случаных чисел
for($i=0; $i<5;$i++) echo mt_rand()." ";
echo "<br/>";
echo random_int(-10,10);
echo "<br/>";
?>
</body>
</html>
