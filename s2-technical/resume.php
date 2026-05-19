<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Resume</title>
    <link rel="stylesheet" href="resume.css">
</head>
<body>
    <h1>My Resume</h1>
    <img src="resume.jpg" alt="My Picture" class="profile-pic">

    <?php
        include("career.php");
        include("personal.php");
        include("education.php");
        include("skills.php");
        include("experience.php");
        include("contact.php");
    ?>
</body>
</html>
