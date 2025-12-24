<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    echo "<h2>Form Submitted Successfully!</h2>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Form Validation Example</title>
    <script>
        function validateForm() {
            let name = document.forms["myForm"]["name"].value;
            let email = document.forms["myForm"]["email"].value;
            let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

            if (name === "") {
                alert("Name must be filled out");
                return false;
            }
            if (email === "") {
                alert("Email must be filled out");
                return false;
            }
            if (!email.match(emailPattern)) {
                alert("Please enter a valid email address");
                return false;
            }
            return true;
        }
    </script>
</head>

<body>
    <h1>Registration Form</h1>
    <form name="myForm" method="post" action="" onsubmit="return validateForm()">
        <label for="name">Name:</label>
        <input type="text" name="name"><br><br>

        <label for="email">Email:</label>
        <input type="text" name="email"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>