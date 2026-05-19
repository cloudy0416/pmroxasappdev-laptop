<?php
$fruits = [
    ["name" => "Apple", "image" => "apple.jpg", "desc" => "Sweet red fruit", "fact" => "Rich in fiber"],
    ["name" => "Banana", "image" => "banana.jpg", "desc" => "Yellow tropical fruit", "fact" => "High in potassium"],
    ["name" => "Cherry", "image" => "cherry.jpg", "desc" => "Small red fruit", "fact" => "Contains antioxidants"],
    ["name" => "Grapes", "image" => "grapes.jpg", "desc" => "Clustered juicy fruit", "fact" => "Used for wine"],
    ["name" => "Kiwi", "image" => "kiwi.jpg", "desc" => "Brown fuzzy fruit", "fact" => "Rich in Vitamin C"],
    ["name" => "Lemon", "image" => "lemon.jpg", "desc" => "Sour yellow fruit", "fact" => "Boosts immunity"],
    ["name" => "Mango", "image" => "mango.jpg", "desc" => "Sweet tropical fruit", "fact" => "National fruit of the Philippines"],
    ["name" => "Orange", "image" => "orange.jpg", "desc" => "Citrus fruit", "fact" => "High in Vitamin C"],
    ["name" => "Pineapple", "image" => "pineapple.jpg", "desc" => "Spiky tropical fruit", "fact" => "Contains bromelain enzyme"],
    ["name" => "Strawberry", "image" => "strawberry.jpg", "desc" => "Red heart-shaped fruit", "fact" => "Popular in desserts"]
];

usort($fruits, function($a, $b) {
    return strcmp($a["name"], $b["name"]);
});
?>
<!DOCTYPE html>
<html>
<head>
    <title>Fruit Directory</title>
    <link rel="stylesheet" type="text/css" href="fruits.css">
</head>
<body>
    <h1>Fruit Directory</h1>
    <table>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th>Fact</th>
        </tr>
        <?php foreach ($fruits as $fruit): ?>
        <tr>
            <td><img src="<?php echo $fruit['image']; ?>" alt="<?php echo $fruit['name']; ?>"></td>
            <td><?php echo $fruit['name']; ?></td>
            <td><?php echo $fruit['desc']; ?></td>
            <td><?php echo $fruit['fact']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
