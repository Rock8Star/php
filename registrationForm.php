<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>

    <h1>Registration Form</h1>
    
    <form method="POST" action="">
        <label for="name">Full Name: </label>
        <input type="text" id="name" name="name" required>
        <br><br>

        <label for="email">Email Address: </label>
        <input type="email" id="email" name="email" required>
        <br><br>

        <label for="gender">Gender: </label>
        <input type="radio" id="male" name="gender" value="Male" required> Male
        <input type="radio" id="female" name="gender" value="Female" required> Female
        <input type="radio" id="other" name="gender" value="Other" required> Other
        <br><br>

        <label for="hobbies">Select Hobbies (Check all that apply): </label><br>
        <input type="checkbox" id="reading" name="hobbies[]" value="Reading"> Reading
        <input type="checkbox" id="traveling" name="hobbies[]" value="Traveling"> Traveling
        <input type="checkbox" id="sports" name="hobbies[]" value="Sports"> Sports
        <input type="checkbox" id="music" name="hobbies[]" value="Music"> Music
        <br><br>

        <label for="country">Country: </label>
        <select id="country" name="country" required>
            <option value="USA">United States</option>
            <option value="Canada">Canada</option>
            <option value="India">India</option>
            <option value="UK">United Kingdom</option>
            <option value="Australia">Australia</option>
        </select>
        <br><br>

        <input type="submit" value="Register">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $hobbies = isset($_POST['hobbies']) ? implode(", ", $_POST['hobbies']) : 'No hobbies selected';
        $country = $_POST['country'];

        echo "<h2>Registration Details:</h2>";
        echo "<p>Name: " . htmlspecialchars($name) . "</p>";
        echo "<p>Email: " . htmlspecialchars($email) . "</p>";
        echo "<p>Gender: " . htmlspecialchars($gender) . "</p>";
        echo "<p>Hobbies: " . htmlspecialchars($hobbies) . "</p>";
        echo "<p>Country: " . htmlspecialchars($country) . "</p>";
    }
    ?>

</body>
</html>
