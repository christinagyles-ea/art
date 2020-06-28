<?php include_once("index.html"); ?>
<!DOCTYPE html>
    <html>

        <head>
            <title>Christina'a Art Club entries</title>
            <!--<link href="style.css" rel="stylesheet">-->

        </head>

        <body>
        <?php
        // Declaring variables
$txt = "See you on the other side!";
$number = 101;
// Defining constant
define("SITE_URL", "https://christinasart.herokuapp.com/");
$my_str = 'https://christinasart.herokuapp.com/';
?>
            <h1 style="font-family: Arial, Helvetica, sans-serif;">Christina's art</h1>
            <a style="font-family: Arial, Helvetica, sans-serif;" href="/loading.php">Cityscape</a></p>


 <?php
     // This is art
            # This is also art

// Using constant
echo "<h4>This is a simple heading.</h4>" . SITE_URL;


echo "<a href="$my_str!">test</a><br>";      // Displays: Hello Worldstring!
// Displaying variables value
echo $txt;  // See you on the other side!
echo $number; // Output: 101
?>
        </body>

    </html>