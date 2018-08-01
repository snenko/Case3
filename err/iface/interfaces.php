<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 30.07.2018
 * Time: 13:21
 */
interface iException{}
    interface iInternalException extends iException{}
        interface iFileException extends iInternalException{}
        interface iNetException extends iInternalException{}
    interface iUserException extends iException{}

