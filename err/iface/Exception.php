<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 30.07.2018
 * Time: 13:29
 */
require_once 'interfaces.php';

class FileNotFoundException extends Exception
    implements iFileException{}
class SocetException extends Exception
    implements iNetException{}
class WrongPassException extends Exception
    implements iUserException{}
class NetPrintedWriteException extends Exception
    implements iNetException, iFileException{}
class SqlConnectException extends Exception
    implements iInternalException, iUserException{}
