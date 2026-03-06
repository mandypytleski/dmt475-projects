<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP Variables</title>
    </head>
    <body>
        <?php
            $myname = "Mandy Pytleski";
            $highschool = "GHEC";
            $graduate = 2023;
            $whyhere = "I like making websites and wanted the Web Tech minor.";

            echo "<h1>About Me</h1>";
            echo "<p>Hello, My name is " . $myname . ".</p>";
            echo "<p>I graduated from " . $highschool . " in " . $graduate . ".</p>";
            echo "<p>I am here because " . $whyhere . ".</p>";
        ?>
    </body>
</html>