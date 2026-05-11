<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
    <link rel="stylesheet" href="registration.css">
</head>
<body>

<div class="container">
    <h2>Student Registration Form</h2>

    <form method="POST" action="registrationprocess.php">

        <h3>Personal Information</h3>

        <label>Full Name</label>
        <input type="text" name="fullname" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Gender</label>
        <select name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>

        <label>Civil Status</label>
        <div class="radio-group">
            <label><input type="radio" name="civil_status" value="Single" required> Single</label>
            <label><input type="radio" name="civil_status" value="Married"> Married</label>
        </div>

        <label>Date of Birth</label>
        <input type="date" name="dob" required>

        <h3>Academic Information</h3>

        <label>Student Number</label>
        <input type="number" name="student_no" required>

        <label>Grade Level</label>
        <select name="grade">
            <option value="7">Grade 7</option>
            <option value="8">Grade 8</option>
            <option value="9">Grade 9</option>
            <option value="10">Grade 10</option>
            <option value="11">Grade 11</option>
            <option value="12">Grade 12</option>
        </select>

        <label>Section</label>
        <input type="text" name="section" placeholder="e.g. TC27">

        <label>Scholarship Status</label>
        <select name="scholarship">
            <option value="None">None</option>
            <option value="Partial">Partial</option>
            <option value="Full">Full</option>
        </select>

        <h3>Educational Background</h3>

        <label>Grade School</label>
        <input type="text" name="grade_school">

        <label>High School</label>
        <input type="text" name="high_school">

        <label>Senior High School</label>
        <input type="text" name="senior_high">

        <h3>Emergency Contact</h3>

        <label>Contact Name</label>
        <input type="text" name="em_name">

        <label>Relationship</label>
        <input type="text" name="em_relation">

        <label>Contact Number</label>
        <input type="text" name="em_phone">

        <h3>Address</h3>

        <label>City</label>
        <input type="text" name="city">

        <label>Country</label>
        <input type="text" name="country">

        <br><br>
        <button type="submit">Register</button>

    </form>
</div>

</body>
</html>