<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Volume of a right triangular pyramid in PHP">
    <meta name="keywords" content="Immaculata, ICS2O">
    <meta name="author" content="Ben Thomson">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index1/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index1/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index1/favicon-16x16.png">
    <link rel="manifest" href="./fav_index1/site.webmanifest">
    
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Title -->
    <title>Volume of a Right Triangular Pyramid in JavaScript</title>
  </head>
  <body>
		<!-- Web page heading and body text -->
    <?php 
			echo "<h1>Calculating the Volume of a Right Triangular Pyramid with User Input</h1>";
			echo "<p>Welcome! This web page will use dimensions of your choice to calculate the volume of a right triangular pyramid. See the image below for the dimensions that need to be entered and the formula that will be used.</p>";
		?>

    <!-- Image -->
    <img src="./images/volume_triangle_pyramid.png" alt="Volume of a right triangular pyramid">
    <br>
    <br>

		<!-- User input form -->
    <form action="./calculations.php" method="post" target="result">
      <label for="base-length">Length of the pyramid's base (a) in cm:</label>
      <input type="number" step="0.01" min="0" id="base-length" placeholder="Length of base..." name="base-length"><br><br>
      <label for="base-height">Height of the pyramid's base (b) in cm:</label>
      <input type="number" step="0.01" min="0" id="base-height" placeholder="Height of base..." name="base-height"><br><br>
      <label for="height-pyramid">Height of the pyramid (h) in cm:</label>
      <input type="number" step = "0.01" min="0" id="height-pyramid" placeholder="Pyramid height..." name="height-pyramid"><br><br>
      <input type="submit" value="Calculate Volume!">
    </form>
    <br>

		<!-- iframe for the results to show on the web page. -->
		<iframe id="result" name="result">			
	  </iframe>
    <br>
  </body>
</html>