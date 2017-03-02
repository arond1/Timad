<!DOCTYPE html>
<html>
  <head>
  	<meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
    <meta charset="utf-8"/>
    <title>Putain de MERDE</title>    
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
<body>
<?php
$troll = 42;

echo '<input type="hidden" name="test" value="'.$troll.'" >';
echo '<script> var x = document.getElementsByName("test")[0].value;';
echo 'alert(x)';
echo '</script>';
?>
</body>
</html>