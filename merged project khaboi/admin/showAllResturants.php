<?php  
require_once 'controller/ResturantInfo.php';

$resturants = fetchAllResturants();


    include "nav.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>SHOW ALL RESTAURANTS</h1>
<br>
<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Location</th>
			<th>ContactNumber</th>
			<th>Email</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
	</thead> 
	<tbody>
		<?php foreach ($resturants as $i => $resturant): ?>
			<tr>
				<td><a href="showResturant.php?id=<?php echo $resturant['ID'] ?>"><?php echo $resturant['Name'] ?></a></td>
				<td><?php echo $resturant['Location'] ?></td>
				<td><?php echo $resturant['ContactNumber'] ?></td>
				<td><?php echo $resturant['Email'] ?></td>
				<td><img width="100px" src="uploads/<?php echo $resturant['image'] ?>" alt="<?php echo $resturant['Name'] ?>"></td>
				<td>
					<a href="editResturant.php?id=<?php echo $resturant['ID'] ?>">Edit</a>
					&nbsp;
					<a href="controller/deleteResturant.php?id=<?php echo $resturant['ID'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a>
				</td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>