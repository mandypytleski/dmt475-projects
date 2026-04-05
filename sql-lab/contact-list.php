<?php
    require_once("../db_connect.php");

    $con = mysqli_connect($servername, $db_username, $db_password, $db_name);

    //IF no connection is made, throws error to console and kills attempt.
    if(!$con){
        die("Connection failed: " .mysqli_connect_error());
    }

    //Pull information from the data table
    $sql = "SELECT first_name, last_name, email_address from contact_info";
    $result = mysqli_query($con, $sql);

    //Check if access to table was successful
    if(!$result){
        die("Access to table failed: " .mysqli_error($con));
    }

    else{
        echo "<h1>Friends of Mine</h1>\n";
        while($item = mysqli_fetch_array($result)){
            echo "<p><strong>Name:</strong> " . $item["first_name"] . " " . $item["last_name"] . "<br>\n<strong>Email: </strong><a href='mailto:" . $item["email_address"] . "'>" . $item["email_address"] . "</a></p>";
        }
    }
?>