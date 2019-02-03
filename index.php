<?php
	include_once ("includes/class_nasty.php");
	$nasty = new classNasty();
?>

 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Liquor Sausage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>
    function RefreshWindow()
{
         window.location.reload(true);
}
  </script>
</head>
<body>

<div class="container">
  <h1>Liquor Sausage</h1>
  <p>Random drink generator.</p>

  <p>Based on <a href="https://www.sfgate.com/entertainment/article/I-tried-John-McAfee-s-signature-cocktail-and-I-13575445.php" target="new">this SFGate article</a>.
<br><br>
<div class="card">
  <div class="card-header">
    <?php 
    $drinkname = $nasty->get_drink_name(); 
    echo $drinkname;
    echo '</div>
          <div class="card-body">
          <p class="card-text">';
    $nasty->get_drink($drinkname);
    echo '</p>';

    $nasty->check_for_old_gregg($drinkname);
    ?>
    
    <button class="btn btn-primary" onclick="return RefreshWindow();"/><span class="glyphicon glyphicon-refresh"></span>Fix me another!</button>
  </div>
</div>

<br><a href="mailto:info@liquorsausage.com">info@liquorsausage.com</a>

</div>

</body>
</html> 