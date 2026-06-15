<?php
/*
 * Madilyn Carpenter
 * Assignment: Module 1.3 Programming Assignment
 * Purpose: Create a basic php page.
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>My First PHP Program</title>
</head>
<body>

    <h1>Welcome to My First PHP Program</h1>

    <?php
    echo "<p>Hello! PHP is running successfully through XAMPP.</p>";
    ?>

    <?php
    $name = "Madilyn";
    $currentYear = date("Y");

    echo "<p>My name is $name.</p>";
    echo "<p>The current year is $currentYear.</p>";
    ?>

    <?php
    $num1 = 10;
    $num2 = 20;
    $sum = $num1 + $num2;

    echo "<p>$num1 + $num2 = $sum</p>";
    ?>

</body>
</html>