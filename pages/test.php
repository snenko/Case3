<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 24.07.2018
 * Time: 21:56
 */
require_once 'StaticPage.php';
$id = 1;
$page = new StaticPage($id);
$page->render();
echo $page->id($id);