<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 05.08.2018
 * Time: 17:34
 */
$Name = [];
if(isset($_REQUEST['name'])) $Name[]=trim($_REQUEST['name']);
if(isset($_REQUEST['surname'])) $Name[]=trim($_REQUEST['surname']);
if(count($Name)>0) echo "Здравствуйте, ".implode(" ", $Name)."!";