<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
    <link rel="stylesheet" href="multiplication.css">
</head>
<body>

<h1>Multiplication Table</h1>

<div class="table">

<?php

for ($row = 0; $row <= 10; $row++) {

    for ($col = 0; $col <= 10; $col++) {

        $value = $row * $col;

        
        if (($row + $col) % 2 == 0) {
            $class = "dark";
        } else {
            $class = "light";
        }

        echo "<div class='cell $class'>$value</div>";
    }
}

?>

</div>

</body>
</html>