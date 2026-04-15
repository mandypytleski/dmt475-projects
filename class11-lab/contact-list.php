<?php
    require_once("../db_connect.php");

    $con = mysqli_connect($servername, $db_username, $db_password, $db_name);

    //IF no connection is made, throws error to console and kills attempt.
    if(!$con){
        die("Connection failed: " .mysqli_connect_error());
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Friends of Hobbiton</title>
</head>
    <body>
        <div id="wrapper">            
            <h1>Friends of Hobbiton</h1>
            <div class="contact-container">
                <?php
                    //Pull information from the data table
                    $sql = "SELECT first_name, last_name, email_address, profile_pic, profile_pic_alt_text FROM contact_info";
                    $result = mysqli_query($con, $sql);

                    //Check if access to table was successful
                    if(!$result){
                        die("Access to table failed: " .mysqli_error($con));
                    }
                    else{
                        while($item = mysqli_fetch_array($result)){
                            $first = htmlspecialchars($item["first_name"]);
                            $last = htmlspecialchars($item["last_name"]);
                            $email = htmlspecialchars($item["email_address"]);
                            $img = htmlspecialchars($item["profile_pic"]);
                            $alt = htmlspecialchars($item["profile_pic_alt_text"]);
                            
                            //output each contact as a block of html
                            echo "<div class='contact'>
                            <img src='$img' alt='alt'>
                            <p><strong>Name:</strong> $first $last<br>
                            <strong>Email:</strong> <a href='mailto:$email'>$email</a>
                            </div>";

                        
                            
                        }
                    }
                ?>
            </div>
        </div>
    </body>
</html>