
<!DOCTYPE html>
<html>
  <body>

<?php 
    include "nav.php";

?>

    <!-- [SEARCH FORM] -->
    <form method="post" action="controller/findResturant.php">
      <h1>SEARCH FOR RESTAURANTS</h1>
      <input type="text" name="resturant_name" />
      <input type="submit" name="findResturant" value="Search"/>
    </form>


 
  </body>
</html>