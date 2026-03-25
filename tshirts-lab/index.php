

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TShirt</title>
    </head>
    <body>
        <h1>Example 1</h1>
        <?php
            function familyName($firstName) {

            echo "$firstName Pytleski.<br>";

            }

            familyName("Clayton");

            familyName("Mary Ann");

            familyName("Chris");

            familyName("Lia");

            familyName("Courtney");

            familyName("Mandy");

        ?>

        <h1>Example 2</h1>
        <?php
            function addNumbers($num1, $num2) {

            $sum = $num1 + $num2;

            echo "Sum of the two numbers is $sum<br>";

            }

            addNumbers(10, 20);

            addNumbers(1, 2);

            addNumbers(15, 5);

        ?>

        <h1>Example 3</h1>
        <?php
            function familyInfo($firstname, $age, $species) {

            echo "$firstname Banger is $age years old and is a $species.<br>";

            }

            familyInfo("Cami", 42, "human");

            familyInfo("Chet", 40, "human");

            familyInfo("Jace", 11, "human");

            familyInfo("Cole", 17, "human");

            familyInfo("Barkley", 11, "dog");

            familyInfo("Pippen", 4, "dog");

            ?>
    </body>
</html>