<!DOCTYPE html>
<html>
<body>

<?php
class Binatang {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$kucing = new Binatang();
$gajah  = new Binatang();
$sapi   = new Binatang();
$kucing->set_name('kucing');
$gajah ->set_name(' Gajah');
$sapi  ->set_name(' Sapi ');

echo $kucing->get_name();
echo "<br>";
echo $gajah->get_name();
echo "<br>";
echo $sapi ->get_name();
?>
 
</body>
</html>
