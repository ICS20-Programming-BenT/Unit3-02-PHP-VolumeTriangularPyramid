<?php
  //Get the user input
  $baseLength = floatval($_POST["base-length"]);
  $baseHeight = floatval($_POST["base-height"]);
  $heightOfPyramid = floatval($_POST["height-pyramid"]);

  //Calculate the area
  $volumeOfPyramid = (1/6) * $baseLength * $baseHeight * $heightOfPyramid;
  $volumeRounded = round($volumeOfPyramid, 2);
?>

<h3>Results:</h3>
The volume of the right triangular pyramid is <?php echo "$volumeRounded" ?> cm<sup>3</sup>.<br>