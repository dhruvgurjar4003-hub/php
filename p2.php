 <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name  = $_POST["name"];
    $email = $_POST["email"];

    echo "<h2>Form Submitted Successfully</h2>";
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Validation Using JavaScript</title>

    <script>
        function validateForm() {
            let name  = document.forms["myForm"]["name"].value;
            let email = document.forms["myForm"]["email"].value;
 
            if (name.trim() === "") {
                alert("Name is required");
                return false;
            }
 
            let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                alert("Please enter a valid email address");
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

    <input type="submit" value="Submit">
</form>

</body>
</html>
