<?php
/**
 * Created by PhpStorm.
 * User: totio
 * Date: 26/04/2016
 * Time: 22:02
 */
define('DB_SERVER', 'ap-cdbr-azure-east-c.cloudapp.net');
define('DB_USERNAME', 'bdde94d00d0ccb');
define('DB_PASSWORD','5055409e');
define('DB_DATABASE','cmm007aldb-1507085');
$db=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>