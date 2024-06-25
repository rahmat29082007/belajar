<?php
//redirect dengan php
/*this will give an error. Note the output 
*above, which is before the header() call*/
//header('location: index1.php?page');
//exit:
?>
<!-- redirect dengan javascript -->
<!DOCTYPE html>
<html>
<body>
      
<script type="text/javascript">
// function myFunction() {
// location.herf = "index1.php?page"    
//}
window.location = "index1.php?page";
</script>

</body>
</html>