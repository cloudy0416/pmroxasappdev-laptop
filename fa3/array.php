<!DOCTYPE html>
<html>
<head>
    <title>Activity 2</title>
    <link rel="stylesheet" type="text/css" href="array.css">
</head>
<body>
<h2 class="title">Activity 2</h2>
<?php

$numbers = array(12, 7, 25, 3, 18, 9, 30, 5, 14, 20);

$sum = array_sum($numbers);
$difference = $numbers[0];
$product = 1;
$quotient = $numbers[0];

for($i=1; $i<count($numbers); $i++) {
    $difference -= $numbers[$i];
    $product *= $numbers[$i];
    $quotient /= $numbers[$i];
}
?>

<table>
    <tr><th colspan="10">Numbers Used</th></tr>
    <tr>
        <?php foreach($numbers as $value): ?>
        <td><?php echo $value; ?></td>
        <?php endforeach; ?>
    </tr>
</table>


<table>
    <tr><th>Operation</th><th>Result</th></tr>
    <tr><td>Sum</td><td><?php echo $sum; ?></td></tr>
    <tr><td>Difference</td><td><?php echo $difference; ?></td></tr>
    <tr><td>Product</td><td><?php echo $product; ?></td></tr>
    <tr><td>Quotient</td><td><?php echo $quotient; ?></td></tr>
</table>
</body>
</html>
