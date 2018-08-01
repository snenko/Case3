<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 21.07.2018
 * Time: 13:33
 */
function makeCal($year, $month){
    //Номер дня недели для 1го числа в месяце
    //1 понедельник 2 вторник...
    $wday = date('N');
    //
    $n = 0-($wday-1);

    //
    for( $y=0;$y<6;$y++){
        $row = [];
        $notEmpty = false;
        for($x=0;$x<7;$x++, $n++){
            if(checkdate($month, $n, $year)){
                $row []= $n;
                $notEmpty = true;
            }else{
                $row[] = " ";
            }
        }
        if (!$notEmpty)break;
        $cal[]=$row;

    }
    return $cal;
}
$now = getdate();
$cal = makeCal( $now['year'],$now['mon']);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function strToTime();</title>
</head>
<body>
<table border="1">
    <tr>
        <td>Понедельник</td>
        <td>Вторник</td>
        <td>Среда</td>
        <td>Четверг</td>
        <td>Пятница</td>
        <td>Суббота</td>
        <td style="color: red">Воскресенье</td>
    </tr>
    <?php foreach ($cal as $row) {?>
    <tr>
        <?php foreach ($row as $i => $v)  {?>

            <td style="<?=$i==6 ? 'color:red' : 'color:green' ?>">
             <?=$v ? $v : "&nbsp;"?>
         </td>
        <?php }?>
    </tr>
    <?php }
    echo '<pre>';
    print_r($now);

    ?>

</table>
</body>
</html>
