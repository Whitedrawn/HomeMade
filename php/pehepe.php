<?php

$name = $_POST['name'];
$email = $_POST['email']; 
$phone = $_POST['phone']; 
$story = $_POST['story'];
$color = $_POST['color'];
$features = $_POST['features'];
$size = $_POST['size'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title>Thank you for entering</title>
<style type="text/css">
body {margin: 20px; 
      background-color: #C4DF9B;
    font-family: Verdana, Helvetica, sans-serif;
    font-size: 90%;}
h1 {color: #005825;
    border-bottom: 1px solid #005825;}
h2 {font-size: 1.2em;
    color: #4A0048;}
</style>
</head>
<body>
  <h1>THANK YOU</h1>

<p>Thank you for entering the Forcefield Sneaker "Pimp My Shoe" contest. We have received the following information with your entry:</p>

<h2>About you:</h2>
<ul>
<li><strong>Name:</strong> <em><?php echo $name ?></em></li>
<li><strong>Email Address:</strong> <em><?php echo $email ?></em></li>
<li><strong>Telephone number:</strong> <em><?php echo $phone ?></em></li>
</ul>
<p><strong>Sad shoe story:</strong> <em><?php echo $story ?></em></p>

<h2>Your shoe design (if you win)</h2>

<li><strong>Shoe color:</strong> <em><?php echo $color?></em></li>
<li><strong>Features:</strong></li>
<p><?php foreach ($features as $feature) {
    print $feature ;
    echo "</br>";
} ?></p>
<li><strong>Shoe size:</strong> <em><?php echo $size?></em></li>

</body>
</html>

