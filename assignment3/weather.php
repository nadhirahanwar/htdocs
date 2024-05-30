<!-- HUSNA NADHIRAH BINTI KHAIRUL ANWAR -->
<!-- 2211170 -->
<!DOCTYPE html>
<html>
<head>
  <title>Weather</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      outline: none;
      box-sizing: border-box;
    }

    body {
      font-family: 'Roboto', sans-serif;
      background-color: #601EF9; 
    }

    .container {
      position: absolute;
      top: 50%; 
      left: 50%;
      transform: translate(-50%, -50%);
      width: 400px;
      box-shadow: 0px 31px 35px -26px #080c21; 
      border-radius: 36px;
      background-color: #efedfa;
      border: 10px solid #bbb5e1;
      padding: 30px;
    }

    h2 {
      text-align: center;
      font-size: 32px; 
      margin-bottom: 20px;
      color: #333333;
    }

    input[type="text"],
    input[type="number"],
    input[type="submit"] {
      width: calc(100% - 20px); 
      padding: 15px; 
      margin-bottom: 20px; 
      border: none;
      border-radius: 20px; 
      font-size: 18px; 
    }

    input[type="text"],
    input[type="number"] {
      background-color: #f3f3f3; 
    }

    input[type="submit"] {
      background-color: #4caf50; 
      color: #ffffff;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

<form action="output.php" method="post">
  <div class="container">
    <h2>Weather In Country</h2>
    <input type="text" name="country" placeholder="Enter Country" required><br>
    <input type="number" name="fahrenheit" placeholder="Enter Fahrenheit" required><br>
    <input type="submit" value="Submit">
  </div>
</form>

</body>
</html>
