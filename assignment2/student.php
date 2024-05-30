<!DOCTYPE html>
<html>
<head>
  <title>Student Form</title>
  <link rel="stylesheet" href="style.css">
  <script>
    function validateForm() {
      var inputs = document.querySelectorAll('input[type="text"], input[type="number"]');
      for (var i = 0; i < inputs.length; i++) {
        if (!inputs[i].value) {
          alert('Please fill out all required fields.');
          return false;
        }
      }
      return true;
    }
  </script>
</head>
<body>

<form action="welcome.php" method="post" onsubmit="return validateForm()">
  <div class="container">
    <h2 class="h2">Student Information</h2>
    Name: <input type="text" name="name" required><br>
    E-mail: <input type="text" name="email" required><br>
    Matrix ID: <input type="number" name="matrix" required><br>
    Phone: <input type="number" name="phone" required><br>
    <input type="submit">
  </div>
</form>

</body>
</html>
