<?php
/*
 * Madilyn Carpenter
 * Date: June 29, 2026
 * Assignment: Module 3.2 Programming Assignment
 * Purpose: Create an HTML table using PHP nested loops and a function
 * stored in an external file. The function accepts two random numbers
 * and returns their sum for display in each table cell.
 */

include "TableFunctions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madilyn Table 3</title>

    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }

        td {
            border: 1px solid black;
            width: 60px;
            height: 40px;
            text-align: center;
            font-size: 18px;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>

<body>

<h2>Random Sum Table</h2>

<table>

<?php
for ($row = 1; $row <= 5; $row++) {
    echo "<tr>";

    for ($col = 1; $col <= 5; $col++) {

        $num1 = rand(1, 100);
        $num2 = rand(1, 100);

        echo "<td>" . addNumbers($num1, $num2) . "</td>";
    }

    echo "</tr>";
}
?>

</table>

</body>
</html>