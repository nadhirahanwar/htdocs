<!DOCTYPE html>
<html>
<head>
  <title>Welcome</title>
  <link rel="stylesheet" href="style2.css">
</head>
<body>

<div class="container">
  <h2>Welcome <?php echo $_POST["name"]; ?></h2>
  <p>Your email address is <?php echo $_POST["email"]; ?></p>
  <p>Your matrix ID: <?php echo $_POST["matrix"]; ?></p>
  <p>Phone no: <?php echo $_POST["phone"]; ?></p>
</div>

</body>
</html>
