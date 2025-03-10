<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $age = $_POST['age'];

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
    <label for="age">Enter Your Age: </label>
    <input type="number" id="age" name="age" required>
    <br><br>
    <input type="submit" value="Check Age">
</form>

</body>
</html>
