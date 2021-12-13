<?php  
require_once 'controller/ResturantInfo.php';

$resturant = fetchResturant($_GET['id']);


    include "nav.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<tr>
		<th>Name</th>
		<th>Location</th>
		<th>ContactNumber</th>
		<th>Email</th>
		<th>Image</th>
	</tr>
	<tr>
		<td><a href="showEmail.php?id=<?php echo $resturant['ID'] ?>"><?php echo $resturant['Name'] ?></a></td>
		<td><?php echo $resturant['Location'] ?></td>
		<td><?php echo $resturant['ContactNumber'] ?></td>
		<td><?php echo $resturant['Email'] ?></td>
		<td><img width="100px" src="uploads/<?php echo $resturant['image'] ?>" alt="<?php echo $resturant['Name'] ?>"></td>
	</tr>

</table>


</body>
</html>