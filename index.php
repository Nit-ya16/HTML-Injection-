<!DOCTYPE html>
<html>
<head>
  <title>User Input Validation</title>
  <link rel="stylesheet" href="style.css">
  <script src="validate.js"></script>
</head>
<body>
  <h2>User Registration Form</h2>
  <form method="POST" action="process.php" onsubmit="return validateForm()">
    Name: <input type="text" name="username" id="username"><br><br>
    Email: <input type="text" name="email" id="email"><br><br>
    <input type="submit" value="Register">
  </form>
</body>
</html>
