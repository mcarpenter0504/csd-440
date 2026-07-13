<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madilyn's Customers</title>
</head>
<body>

<h1>Customer Records</h1>

<?php
/*
 * Madilyn Carpenter
 * Date: July 12, 2026
 * Assignment: Module 5.2 Programming Assignment
 * Purpose: This program creates and searches an array of customer records.
 */

// Array of 10 customers
$customers = [
    ["firstName" => "John", "lastName" => "Smith", "age" => 28, "phone" => "555-1111"],
    ["firstName" => "Sarah", "lastName" => "Johnson", "age" => 35, "phone" => "555-2222"],
    ["firstName" => "Michael", "lastName" => "Brown", "age" => 42, "phone" => "555-3333"],
    ["firstName" => "Emily", "lastName" => "Davis", "age" => 24, "phone" => "555-4444"],
    ["firstName" => "David", "lastName" => "Wilson", "age" => 31, "phone" => "555-5555"],
    ["firstName" => "Jessica", "lastName" => "Moore", "age" => 27, "phone" => "555-6666"],
    ["firstName" => "Chris", "lastName" => "Taylor", "age" => 39, "phone" => "555-7777"],
    ["firstName" => "Amanda", "lastName" => "Anderson", "age" => 22, "phone" => "555-8888"],
    ["firstName" => "Brian", "lastName" => "Thomas", "age" => 45, "phone" => "555-9999"],
    ["firstName" => "Ashley", "lastName" => "Jackson", "age" => 30, "phone" => "555-0000"]
];

// Display all customers
echo "<h2>All Customers</h2>";

echo "<table border='1' cellpadding='5'>
<tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Age</th>
    <th>Phone</th>
</tr>";

foreach ($customers as $customer) {
    echo "<tr>";
    echo "<td>{$customer['firstName']}</td>";
    echo "<td>{$customer['lastName']}</td>";
    echo "<td>{$customer['age']}</td>";
    echo "<td>{$customer['phone']}</td>";
    echo "</tr>";
}

echo "</table>";


// Find customer by first name
echo "<h2>Search by First Name: Emily</h2>";

foreach ($customers as $customer) {
    if ($customer["firstName"] == "Emily") {
        echo "{$customer['firstName']} {$customer['lastName']}, Age: {$customer['age']}, Phone: {$customer['phone']}<br>";
    }
}


// Find customers older than 30
echo "<h2>Customers Older Than 30</h2>";

foreach ($customers as $customer) {
    if ($customer["age"] > 30) {
        echo "{$customer['firstName']} {$customer['lastName']} - Age: {$customer['age']}<br>";
    }
}


// Find customer by phone number
echo "<h2>Search by Phone Number: 555-6666</h2>";

foreach ($customers as $customer) {
    if ($customer["phone"] == "555-6666") {
        echo "{$customer['firstName']} {$customer['lastName']} - Phone: {$customer['phone']}<br>";
    }
}

?>

</body>
</html>