<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// to change a session variable, just overwrite it
$_SESSION["favcolor"] = "yellow";
$_SESSION["favanimal"] = "dog";
var_dump($_SESSION);
?>

</body>
</html>