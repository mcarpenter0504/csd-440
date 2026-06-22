<?php
/*
 * Madilyn Carpenter
 * Date: June 21, 2026
 * Assignment: Module 2.2 Programming Assignment
 * Purpose: Create an HTML table using PHP nested loops that displays random numbers in each cell.
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madilyn Table 2</title>

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

<h2>Random Number Table</h2>

<table>

<?php
for ($row = 1; $row <= 5; $row++) {
?>
    <tr>
    <?php
    for ($col = 1; $col <= 5; $col++) {
    ?>
        <td><?php echo rand(1, 100); ?></td>
    <?php
    }
    ?>
    </tr>
<?php
}
?>

</table>

</body>
</html>