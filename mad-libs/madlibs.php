<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Mad Libs Output</title>
        <style>
           p{
            font-size: 1.5em;
           }

           .value{
            font-weight: bold;
            color: purple;
           }
        </style>
    </head>
    <body>
        <h1>Welcome <span class="value"><?php echo $_POST["name"]?></span></h1>
        <p>Let's begin, shall we?</p>
        <p>It was the one night everybody dreads. The night before hell week starts - AKA Finals week at <span class="value"><?php echo $_POST["collegename"]?></span>.</p>
        <p>The library was full of <span class="value"><?php echo $_POST["adjective1"]?></span> students all glued to their books and <span class="value"><?php echo $_POST["bodypart1"]?></span> deep in energy drink cans and empty coffee cups. One deperate student even had the guts to sneak in a(n) <span class="value"><?php echo $_POST["object"]?></span>. As expected, I couldn't find a decent place to sit so I had to sit next to the dude who smelled like <span class="value"><?php echo $_POST["odor"]?></span>. I thought I was going to <span class="value"><?php echo $_POST["action"]?></span></p>
        <p>Finally, at around 5 a.m. Monday morning, I started wandering back to my dorm room, but my <span class="value"><?php echo $_POST["bodypart2"]?></span> was so exhausted that I decided to crash at the <span class="value"><?php echo $_POST["place on campus"]?></span>. I was awoken 5 hours later by a not so friendly <span class="value"><?php echo $_POST["animal"]?></span> who was gnawing on my notes. I was late so I hopped in my <span class="value"><?php echo $_POST["cars"]?></span> and booked it to class.</p>
    </body>
</html>