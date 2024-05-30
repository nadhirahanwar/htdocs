<!-- HUSNA NADHIRAH BINTI KHAIRUL ANWAR -->
<!-- 2211170 -->
<!DOCTYPE html>
<html>
<head>
  <title>Weather Output</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      outline: none;
    }

    body {
      font-family: 'Roboto', sans-serif;
      overflow: hidden;
      background: #601EF9;
    }

    .widget {
      position: absolute;
      top: 50%; 
      left: 50%;
      transform: translate(-50%, -50%);
      width: 500px; 
      box-shadow: 0px 31px 35px -26px #080c21; 
      display: block;
      margin: 0 auto;
      padding: 30px; 
      border-radius: 20px;
      background-color: #efedfa;
      border: 10px solid #bbb5e1;
    }

    .date {
      font-size: 20px; 
      font-weight: bold;
      color: rgba(0, 0, 0, 0.5);
      margin-bottom: 15px; 
    }

    .city {
      font-size: 28px; 
      font-weight: bold;
      text-transform: uppercase;
      color: rgba(0, 0, 0, 0.7);
      margin-bottom: 30px; 
    }

    .temp {
      font-size: 60px; 
      color: rgba(0, 0, 0, 0.9);
      font-weight: 100;
      display: flex; 
      align-items: center; 
    }

    .temp img {
      margin-right: 20px; 
      width: 60px; 
    }

    .highlight {
      color: #FF5733; 
    }

    .country-text {
      font-size: 24px; 
    }
  </style>
</head>
<body>

<div class="widget">
    <div class="left-panel panel">
        <div class="date">
            <?php echo date('l, j M Y'); ?>
        </div>
        <div class="city">
            <?php 
            $country = $_POST['country']; 
            echo "<span class='country-text'>A country of <span class='highlight'>" . $country . "</span> is currently</span>";
            ?>
        </div>
        <div class="temp">
            <img src="https://codefrog.space/cp/wp/ts.png" alt="" width="40"> 
            <?php
            function convertToFahrenheitToCelsius($fahrenheitInput) {
                $celsius = round(($fahrenheitInput - 32) * 5 / 9, 2); 
                echo $celsius . '&deg; C';
            }

            $fahrenheitInput = $_POST['fahrenheit'];
            convertToFahrenheitToCelsius($fahrenheitInput);
            ?>
        </div>
    </div>
</div>

</body>
</html>
