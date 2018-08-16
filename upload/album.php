<?php
$imgDir = "img";
@mkdir($imgDir, 0777);

//проверяем нажата ли кнопка добавления
if(@$_REQUEST['doUpload']) {
    $data = $_FILES['file'];
    $tmp = $data['tmp_name'];
    //проверяем принят ли файл
    if(is_uploaded_file($tmp)) {
        $info = @getimagesize($tmp);
        //проверяем является ли файл изображением
        if(preg_match('{image/(.*)}is', $info['mime'], $p)) {
            //имя берем текущее время в секундах, а расширение
            //как часть MIME-типа после "image/"
            $name = "$imgDir/".time().$p[1];
            //добавляем файл в каталог с фотографиями
            move_uploaded_file($tmp, $name);
        } else {
            echo "<h2>Недопустимый формат файла!</h2>";
        }
    } else {
        echo "<h2>Ошибка закачки #{$data['error']}!</h2>";
    }
}

//теперь считываем массив в наш фотоальбом
$photos = array();
foreach (glob("$imgDir/*") as $path) {
    $sz = getimagesize($path);
    $tm = filemtime($path);
    // вставляем изображение в массив photos
    $photos[$tm] = [
        'time' => $tm,             //время добавления
        'name' => basename($path), //имя фала
        'url'  => $path,      // URI
        'w'    => $sz[0],     //ширина
        'h'    => $sz[1],     //высота
        'wh'    => $sz[2],    //"width = xxx height=yyy"
    ];
    ksort($photos);
}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Фотоальбом</title>
</head>
<body>
<form action="<?=$_SERVER['SCRIPT_NAME'] ?>" METHOD="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" name="doUpload" value="Send Photos">
    <hr>
</form>
<?php foreach ($photos as $n=>$img) {?>
    <p><img
            src="<?=$img['url']?>"
            alt="Добавлена в <?=date("D.m.Y H.i.s", $img['time'])?>">
    </p>
<?php } ?>
</body>
</html>
