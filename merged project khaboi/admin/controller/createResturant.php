<?php  
require_once '../model/model.php';

//Resturant
if (isset($_POST['createResturant'])) {
	$data['name'] = $_POST['name'];
	$data['location'] = $_POST['location'];
	$data['contactNumber'] = $_POST['contactNumber'];
	$data['email'] = $_POST['email'];
	$data['image'] = basename($_FILES["image"]["name"]);
	if(isset($_POST['display'])){
		$data['display'] = 1;
	}else
	$data['display'] = 0;


	$target_dir = "../uploads/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);

	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }

  if (addResturant($data)) {
  	echo 'Successfully added!!';
  }
} else {
	echo 'You are not allowed to access this page.';
}

?>