<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="story">
<h2>Activity 2: String Functions with MotoGP Riders</h2>

<?php
$names = [
    "Marc Marquez", "Valentino Rossi", "Jorge Lorenzo", "Dani Pedrosa", "Andrea Dovizioso",
    "Fabio Quartararo", "Francesco Bagnaia", "Joan Mir", "Aleix Espargaro", "Pol Espargaro",
    "Maverick Vinales", "Jack Miller", "Alex Rins", "Cal Crutchlow", "Takaaki Nakagami",
    "Brad Binder", "Miguel Oliveira", "Enea Bastianini", "Johann Zarco", "Stefan Bradl"
];

echo "<table border='1' cellpadding='8' cellspacing='0' style='margin:auto; border-collapse:collapse;'>";
echo "<tr>
        <th>Original Name</th>
        <th>Length</th>
        <th>Uppercase First Letter</th>
        <th>Replace Vowels</th>
        <th>Position of 'a'</th>
        <th>Reverse</th>
      </tr>";

foreach ($names as $name) {
    $length = strlen($name);
    $upper = ucfirst($name);
    $replace = str_replace(['a','e','i','o','u','A','E','I','O','U'], '@', $name);
    $pos = strpos($name, 'a');
    $position = ($pos !== false) ? $pos : "Not found";
    $reverse = strrev($name);

    echo "<tr>
            <td>$name</td>
            <td>$length</td>
            <td>$upper</td>
            <td>$replace</td>
            <td>$position</td>
            <td>$reverse</td>
          </tr>";
}
echo "</table>";
?>

</div>


