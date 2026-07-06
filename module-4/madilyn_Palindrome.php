<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Checker</title>
</head>
<body>

<h1>Palindrome Checker</h1>

<?php
/*
 * Madilyn Carpenter
 * Date: June 29, 2026
 * Assignment: Module 3.2 Programming Assignment
 * Purpose: This program checks whether a string is a palindrome.
 * It displays the original string, the reversed string,
 * and whether or not the string is a palindrome.
 */

/**
 * @param string $text
 * @return bool
 */
function isPalindrome($text)
{
    // Remove spaces and convert to lowercase
    $cleanText = strtolower(str_replace(" ", "", $text));

    // Reverse the cleaned string
    $reverseText = strrev($cleanText);

    return $cleanText == $reverseText;
}

// Six test strings
$strings = [
    "racecar",
    "madam",
    "never odd or even",
    "hello",
    "computer",
    "OpenAI"
];

echo "<table border='1' cellpadding='8'>";
echo "<tr>
        <th>Original String</th>
        <th>Reversed String</th>
        <th>Result</th>
      </tr>";

foreach ($strings as $string)
{
    $clean = strtolower(str_replace(" ", "", $string));
    $reversed = strrev($clean);

    if (isPalindrome($string))
    {
        $result = "Palindrome";
    }
    else
    {
        $result = "Not a Palindrome";
    }

    echo "<tr>";
    echo "<td>$string</td>";
    echo "<td>$reversed</td>";
    echo "<td>$result</td>";
    echo "</tr>";
}

echo "</table>";

?>

</body>
</html>