<?php
    require_once("../../db_connect.php");

    $con = mysqli_connect($servername, $db_username, $db_password, $db_name);

    //IF no connection is made, throws error to console and kills attempt.
    if(!$con){
        die("Connection failed: " .mysqli_connect_error());
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8-">
        <title></title>
    </head>
</html>