<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Temperature Converter</title>
</head>
<body>
  <h1>Temperature Converter</h1>

  <?php
  $result = '';

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['T'], $_POST['unit']) && is_numeric($_POST['T'])) {
      $temp = $_POST['T'];
      $dir  = $_POST['unit'];

      if ($dir === 'C2F') {
        $f = $temp * 9/5 + 32;
        $result = "{$temp}°C = " .$f. "°F";
      } elseif ($dir === 'F2C') {
        $c = ($temp - 32) * 5/9;
        $result = "{$temp}°F = " .$c. "°C";
      } else {
        $result = "error.";
      }
    } else {
      $result = "Please enter a numeric temperature.";
    }
  }
  ?>

  <?php if ($result): ?>
    <p><?php echo $result; ?></p>
  <?php endif; ?>

  <form method="post" action="">
    <label for="T">Enter Temperature</label>
    <input type="number" name="T" id="T" required>

    <select name="unit" id="unit" aria-label="Conversion direction">
      <option value="C2F">Celsius to Fahrenheit</option>
      <option value="F2C">Fahrenheit to Celsius</option>
    </select>

    <button type="submit">Convert</button>
  </form>
</body>
</html>
