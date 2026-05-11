<?php

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$civil_status = $_POST['civil_status'];
$dob = $_POST['dob'];

$student_no = $_POST['student_no'];
$grade = $_POST['grade'];
$section = $_POST['section'];
$scholarship = $_POST['scholarship'];

$grade_school = $_POST['grade_school'];
$high_school = $_POST['high_school'];
$senior_high = $_POST['senior_high'];

$em_name = $_POST['em_name'];
$em_relation = $_POST['em_relation'];
$em_phone = $_POST['em_phone'];

$city = $_POST['city'];
$country = $_POST['country'];


$fullname = ucwords(strtolower($fullname));
$email = strtolower($email);
$section = strtoupper($section);
$city = ucwords(strtolower($city));
$country = strtoupper($country);

$grade_school = ucwords(strtolower($grade_school));
$high_school = ucwords(strtolower($high_school));
$senior_high = ucwords(strtolower($senior_high));

$em_name = ucwords(strtolower($em_name));
$em_relation = ucwords(strtolower($em_relation));

$student_no = number_format($student_no);
$grade = "Grade " . $grade;
$dob = date("F d, Y", strtotime($dob));

?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Output</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Registered Student</h2>

    <p><strong>Name:</strong> <?php echo $fullname; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
    <p><strong>Gender:</strong> <?php echo $gender; ?></p>
    <p><strong>Civil Status:</strong> <?php echo $civil_status; ?></p>
    <p><strong>Birth Date:</strong> <?php echo $dob; ?></p>

    <h3>Academic Details</h3>
    <p><strong>Student No:</strong> <?php echo $student_no; ?></p>
    <p><strong>Grade Level:</strong> <?php echo $grade; ?></p>
    <p><strong>Section:</strong> <?php echo $section; ?></p>
    <p><strong>Scholarship:</strong> <?php echo $scholarship; ?></p>

    <h3>Educational Background</h3>
    <p><strong>Grade School:</strong> <?php echo $grade_school; ?></p>
    <p><strong>High School:</strong> <?php echo $high_school; ?></p>
    <p><strong>Senior High:</strong> <?php echo $senior_high; ?></p>

    <h3>Emergency Contact</h3>
    <p><strong>Name:</strong> <?php echo $em_name; ?></p>
    <p><strong>Relationship:</strong> <?php echo $em_relation; ?></p>
    <p><strong>Contact No:</strong> <?php echo $em_phone; ?></p>

    <h3>Address</h3>
    <p><strong>City:</strong> <?php echo $city; ?></p>
    <p><strong>Country:</strong> <?php echo $country; ?></p>

</div>

</body>
</html>