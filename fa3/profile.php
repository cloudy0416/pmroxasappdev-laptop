<!DOCTYPE html>
<html>
<head>
    <title>MotoGP Riders</title>
    <link rel="stylesheet" type="text/css" href="profile.css">
</head>
<body>
<h2 class="title">MotoGP Riders</h2>
<?php
$riders = array(
    array("name"=>"Marc Marquez","img"=>"Marc.jpg","age"=>31,"birthday"=>"1993-02-17","contact"=>"09123456789"),
    array("name"=>"Fabio Quartararo","img"=>"Fabio.jpg","age"=>25,"birthday"=>"1999-04-20","contact"=>"09234567890"),
    array("name"=>"Francesco Bagnaia","img"=>"Francesco.jpg","age"=>27,"birthday"=>"1997-01-14","contact"=>"09345678901"),
    array("name"=>"Joan Mir","img"=>"Joan.jpg","age"=>28,"birthday"=>"1998-09-01","contact"=>"09456789012"),
    array("name"=>"Aleix Espargaro","img"=>"Aleix.jpg","age"=>34,"birthday"=>"1989-07-30","contact"=>"09567890123"),
    array("name"=>"Maverick Vinales","img"=>"Maverick.jpg","age"=>29,"birthday"=>"1995-01-12","contact"=>"09678901234"),
    array("name"=>"Jack Miller","img"=>"Jack.jpg","age"=>29,"birthday"=>"1995-01-18","contact"=>"09789012345"),
    array("name"=>"Brad Binder","img"=>"Brad.jpg","age"=>28,"birthday"=>"1998-08-11","contact"=>"09890123456"),
    array("name"=>"Jorge Martin","img"=>"Jorge.jpg","age"=>26,"birthday"=>"1998-01-29","contact"=>"09901234567"),
    array("name"=>"Enea Bastianini","img"=>"Enea.jpg","age"=>26,"birthday"=>"1998-12-30","contact"=>"09112233445")
);

usort($riders, function($a, $b) {
    return strcmp($a["name"], $b["name"]);
});
?>
<table>
    <tr><th>Name</th><th>Image</th><th>Age</th><th>Birthday</th><th>Contact</th></tr>
    <?php foreach($riders as $r): ?>
    <tr>
        <td><?php echo $r["name"]; ?></td>
        <td><img src="<?php echo $r["img"]; ?>" class="rider-img"></td>
        <td><?php echo $r["age"]; ?></td>
        <td><?php echo $r["birthday"]; ?></td>
        <td><?php echo $r["contact"]; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
