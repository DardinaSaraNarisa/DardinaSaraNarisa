


<html>

<br>
</html>
<?php

require 'model/model.php';

if (isset($_POST['findResturant'])) 
{
	
		echo $_POST['resturant_name'];


    try 
	{
    	
    	$allSearchedResturants = searchResturant($_POST['resturant_name']);
    	require 'showSearchedResturant.php';

    } catch (Exception $ex) 
	{
    	echo $ex->getMessage();
    }
}
else echo "Sorry this restaurant is not in the list";

?>
