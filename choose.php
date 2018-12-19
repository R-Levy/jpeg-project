<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Choose Response</title>
    <link rel="stylesheet" type="text/css" href="media/main.css">
</head>
<body>

<?php
$counter = $_GET['counter'];
echo '
<span class="center">
<a target="_blank" href="Tasks/'.$counter.'/source.jpg">
  <img src="Tasks/'.$counter.'/source.jpg" alt="Your Image">
</a>
</span>
<form action="choose_response.php" method="get">
<input type="radio" name="choice" value= "sepia">Sepia <br>
<input type="radio" name="choice" value= "rainbow">Rainbow <br>
<input type="radio" name="choice" value= "pdf"> Create PDF <br>
<input type="hidden" name="counter" id="counter" value="'.$counter.'">';


?>
<input type="submit" name="submit">
</form>

</body>
</html>