<!DOCTYPE html>
<html>
<head>
    <title>Activity 3</title>
    <link rel="stylesheet" type="text/css" href="function.css">
</head>
<body>
<h2 class="title">Activity 3</h2>
<?php

function computeValues($a, $b, $c) {
    $sum = $a + $b + $c;
    $difference = $a - $b - $c;
    $product = $a * $b * $c;
    $quotient = $a / $b / $c;

    return array(
        "Sum"=>$sum,
        "Difference"=>$difference,
        "Product"=>$product,
        "Quotient"=>$quotient
    );
}


$param1 = 4;
$param2 = 16;
$param3 = 11;

$results = computeValues($param1, $param2, $param3);
?>

<table>
    <tr><th colspan="3">Parameters</th></tr>
    <tr>
        <td><?php echo $param1; ?></td>
        <td><?php echo $param2; ?></td>
        <td><?php echo $param3; ?></td>
    </tr>
</table>


<table>
    <tr><th>Operation</th><th>Result</th></tr>
    <?php foreach($results as $op=>$val): ?>
    <tr><td><?php echo $op; ?></td><td><?php echo $val; ?></td></tr>
    <?php endforeach; ?>
</table>
</body>
</html>
