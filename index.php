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
define("SITE_URL", "https://www.tutorialrepublic.com/");
?>
            <h1 style="font-family: Arial, Helvetica, sans-serif;">Christina's art</h1>
            <a style="font-family: Arial, Helvetica, sans-serif;" href="/loading.php">Cityscape</a></p>


 <?php
     // This is art
            # This is also art

// Using constant
echo 'Thank you for visiting - ' . SITE_URL;
 
// Displaying variables value
echo $txt;  // See you on the other side!
echo $number; // Output: 101
?>
        </body>

    </html>