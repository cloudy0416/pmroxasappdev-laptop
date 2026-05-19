<?php
function volumeCube($side) {
    return pow($side, 3);
}
function volumeRectPrism($l, $w, $h) {
    return $l * $w * $h;
}
function volumeCylinder($r, $h) {
    return pi() * pow($r, 2) * $h;
}
function volumeCone($r, $h) {
    return (pi() * pow($r, 2) * $h) / 3;
}
function volumeSphere($r) {
    return (4/3) * pi() * pow($r, 3);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Volume of Shapes</title>
    <link rel="stylesheet" type="text/css" href="volume.css">
</head>
<body>
    <h1>Volume of Shapes</h1>
    <table>
        <tr><th>Shape</th><th>Formula</th><th>Result</th></tr>
        <tr><td>Cube (side=5)</td><td>s³</td><td><?php echo volumeCube(5); ?></td></tr>
        <tr><td>Rectangular Prism (2x3x4)</td><td>l × w × h</td><td><?php echo volumeRectPrism(2,3,4); ?></td></tr>
        <tr><td>Cylinder (r=3,h=7)</td><td>πr²h</td><td><?php echo volumeCylinder(3,7); ?></td></tr>
        <tr><td>Cone (r=3,h=7)</td><td>(πr²h)/3</td><td><?php echo volumeCone(3,7); ?></td></tr>
        <tr><td>Sphere (r=4)</td><td>(4/3)πr³</td><td><?php echo volumeSphere(4); ?></td></tr>
    </table>
</body>
</html>
