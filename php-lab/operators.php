<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP Operators</title>
    </head>
    <body>
        <h1>Box Cubic Inches/Feet</h1>
        <?php
            $boxHeight = 10;
            $boxWidth = 8;
            $boxLength = 12;

            $boxCubicInches = $boxHeight * $boxWidth * $boxLength;
            $boxCubicFeet = $boxCubicInches/144;

            echo "This box is $boxCubicInches cubic inches or $boxCubicFeet cubic feet.";
        ?>

        <h1>Less Than or Greater Than</h1>
        <?php
            $x = 5;
            $y = 10;

            echo "<p>x = $x and y = $y<br></p>";
            if($x<$y)
                echo "It is true that x is less than y.<br>";
            if($x>$y)
                echo "It is true that x is greater than y.<br>";
            if($x==$y)
                echo "It is true that x is equal to y.<br>";
            if($x!=$y)
                echo "It is true that x is not equal to y.<br>";
            if($x>=$y)
                echo "It is true that x is greater than y.<br>";
            if($x<=$y)
                echo "It is true that x is greater than y.<br>";
        ?>

        <h1>Order of Operation</h1>
        <?php
            $item1 = 20;
            $item2 = 10;
            $item3 = 15;

            $salesTax = 0.07 * ($item1+$item2+$item3);
            $shipping = 10;
            
            $total = ($item1+$item2+$item3) + $salesTax + $shipping;

            echo "Your order total is $" . $total . "<br>";
            echo "Your sales tax is $" . $salesTax;
        ?>

        <h1>Increment and Decrement</h1>
        <?php
            $a = 5;
            echo "<h2>Pre-Increment Examples</h2>";
            echo "<p>Should be 6: " . ++$a;
            echo "<p>Should be 6: " . $a++;
            echo "<p>Should be 7: ". $a;
            echo "<p>Should be 6: " . --$a;
            echo "<p>Should be 6: " . $a--;
            echo "<p>Should be 5: ". $a;
            
        ?>

        <h1>Exercise 3: Operators</h1>
        <?php
            $size = array(
                        array("Small", 4, 10), 
                        array("Medium", 7, 6), 
                        array("Large", 12, 3));

            $subtract = array($size[0][1], $size[0][2], $size[1][1], $size[1][2], $size[2][1], $size[2][2]);
            $j = 0;    
            for($i = 0; $i < 3; $i++){
                echo "<p>Shirt Size: " . $size[$i][0] . "<br>In Stock: " . $size[$i][1] . "<br>Number Sold: " . $size[$i][2] . "<br>Quantity Available: " . ($subtract[$j] - $subtract[$j+1]) . "<br></p>";
                $j = $j + 2;
            }
        ?>
    </body>
</html>