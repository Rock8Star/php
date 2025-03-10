<?php

function calculate_age($dob) {
    $dob_date = new DateTime($dob); // Convert DOB to DateTime object
    $today = new DateTime(); // Get today's date
    $age = $today->diff($dob_date)->y; // Get the difference in years (age)
    return $age;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the date of birth input from the form
    $dob = $_POST['dob'];

    $age = calculate_age($dob);

    
    if ($age >= 18) {
        echo "<h2>You are $age years old. You are eligible!</h2>";
    } else {
        echo "<h2>You are $age years old. Sorry, you must be at least 18 years old to proceed.</h2>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Age Validation</title>
</head>
<body>

<h1>Check if You Are 18 or Older</h1>

<form method="POST" action="">
    <label for="dob">Enter Your Date of Birth: </label>
    <input type="date" id="dob" name="dob" required>
    <br><br>
    <input type="submit" value="Check Age">
</form>

</body>
</html>
