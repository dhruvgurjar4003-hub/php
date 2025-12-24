<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = $_POST["name"];
    $email    = $_POST["email"];
    $mob      = $_POST["mob"];
    $gender   = $_POST["gender"];
    $password = $_POST["password"];

    echo "<h2>Form Submitted Successfully</h2>";
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Mobile: " . htmlspecialchars($mob) . "<br>";
    echo "Gender: " . htmlspecialchars($gender) . "<br>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Form Validation Using JavaScript</title>

    <script>
        function validateForm() {
            let name = document.forms["myForm"]["name"].value;
            let email = document.forms["myForm"]["email"].value;
            let mob = document.forms["myForm"]["mob"].value;
            let password = document.forms["myForm"]["password"].value;
            let gender = document.forms["myForm"]["gender"];

            if (name.trim() === "") {
                alert("Name is required");
                return false;
            }

            let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                alert("Please enter a valid email address");
                return false;
            }


            if (isNaN(mob)) {
                alert("Only numbers are allowed in mobile number");
                return false;
            }

            if (mob.length !== 10) {
                alert("Mobile number must be exactly 10 digits");
                return false;
            }


            if (password.length < 6) {
                alert("Password must be at least 6 characters long");
                return false;
            }


            let genderSelected = false;
            for (let i = 0; i < gender.length; i++) {
                if (gender[i].checked) {
                    genderSelected = true;
                    break;
                }
            }

            if (!genderSelected) {
                alert("Please select your gender");
                return false;
            }

            return true;
        }
    </script>
</head>

<body>

    <h2>JavaScript Form Validation Example</h2>

    <form name="myForm" method="POST" onsubmit="return validateForm();">

        <label>Name:</label><br>
        <input type="text" name="name"><br><br>

        <label>Email:</label><br>
        <input type="text" name="email"><br><br>

        <label>Mobile:</label><br>
        <input type="text" name="mob"><br><br>

        <label>Password:</label><br>
        <input type="password" name="password"><br><br>

        <label>Gender:</label><br>
        <input type="radio" name="gender" value="Male"> Male<br><br>
        <input type="radio" name="gender" value="Female"> Female<br><br>
        <input type="radio" name="gender" value="other"> other<br><br>

        <input type="submit" value="Submit">

    </form>

</body>

</html>