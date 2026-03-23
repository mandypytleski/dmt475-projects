<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Week 7 Conditionals-Loops</title>
    </head>
    <body>
        <h1>Task 1: If Statement</h1>
        <?php
            $shirt="blue";

            if($shirt == "blue"){
                echo "Your shirt is blue";
            }
        ?>

        <h1>Task 2: If-Else Statement</h1>
        <?php
            $topping = "pineapple";
            $preference = "NO";

            if($preference == "yes"){
                echo "Pineapple on pizza is amazing but this won't print because it's wrong";
            }
            else{
                echo "YUCK. Pineapple does not belong on pizza";
            }
        ?>

        <h1>Task 3: Else-If Statement</h1>
        <?php
            $grade = "71";

            if($grade >= 90){
                echo "You've got an A. Excellent work!";
            }
            elseif($grade >= 80){
                echo "You've got a B. Great job!";
            }
            elseif($grade >= 70){
                echo "You've got a C. That's okay...";
            }
            elseif($grade >= 60){
                echo "You've got a D. Try harder.";
            }
            elseif($grade <= 59){
                echo "You've got an F. Drop the class.";
            }
            else{
                echo "Invalid grade entered.";
            }
        ?>

        <h1>Extra Task: Nested IF Statement</h1>
        <?php
            $x = 9;
            $y = 9;

            if($x==9){
                if($y== 9){
                    echo "both are 9";
                }
            }
        ?>

        <h1>Task 4: While loop</h1>
        <?php
            $counter = 1;

            while($counter <= 10){
                $tax = number_format($counter * 0.055,2);
                echo "Tax for $counter dollar(s) is $counter X 0.055 = $$tax.<br><br>";
                
                $counter++;
            }
        ?>

        <h1>Task 5: Do-While loop</h1>
        <?php
            $counter = 12;

            do{
                $tax = number_format($counter * 0.055,2);
                echo "Tax for $counter dollar(s) is $counter X 0.055 = $$tax.<br><br>";
                
                $counter++;
            }while($counter <= 10)
        ?>

        <h1>Task 6: For Loop</h1>
        <?php
            
            for($counter = 2020; $counter <= 2055; $counter += 4){
                echo "$counter is a leap year.<br>";
            }
        ?>

        <!--For each loops, can only be used with arrays-->
        <h1>Task 7: For Each Loop</h1>
        <h2>Languages from around the world</h2>
        <ul>
        <?php
            
            $languages = array("Swedish", "Swahili", "Chinese", "German", "English");
            foreach($languages as $languages){
                echo "<li>$languages</li>";
            }

        ?>

        </ul>
    </body>
</html>