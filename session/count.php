<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 06.08.2018
 * Time: 14:46
 */
session_start();
if(!isset($_SESSION['count']))
    $_SESSION['count']=0;
$_SESSION['count']=$_SESSION['count']+1;
?>
Вы посещали этот сайт:
<?=$_SESSION['count']?> раз
<br>
Чтобы обнулить счетчик - закройте браузер
<a href="<?=$_SERVER['SCRIPT_NAME'] ?>"target="_blank">Открыть дочернее окно браузера</a>
