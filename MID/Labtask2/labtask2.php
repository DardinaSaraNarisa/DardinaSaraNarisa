<?php



$name = "";
$name_error = "";
$email = "";
$email_error = "";
$dob = "";
$dob_error = "";
$gender = "";
$gender_error = "";
$degree = "";
$degree_error = "";
$bloodgroup = "";
$bloodgroup_error = ""; 

if (isset($_POST["submit"])) {

if(empty($_POST['name'])) {
$name_error = "Name can not be empty";
} else if(strlen($_POST['name']) < 2) {
$name_error = "Name must be greater than 2 character";
} else if(preg_match("/^[a-zA-Z-' ]/", $_POST['name']) != 1) {
$name_error = "Only letters and white space allowed";
} else {
$name = validate_input($_POST['name']);
}

if(empty($_POST["email"])) {
$email_error = "Email can not be empty";
} else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
$email_error = "Enter Valid email";
} else {
$email = validate_input($_POST['email']);
}

if(empty($_POST['dob'])) {
$dob_error = "Enter Date of birth";
} else if (preg_match("/^\d{4}-\d{2}-\d{2}$/", $_POST['dob']) != 1) {
$dob_error = "Enter valid Date";
} else {
$dob = validate_input($_POST['dob']);
}

if(empty($_POST['gender'])) {
$gender_error = "Select Gender ";
} else {
$gender = validate_input($_POST['gender']);
}

if(!isset($_POST['degree'])) {
$degree_error = "Enter Degree ";
} else if(count($_POST['degree']) < 2) {
$degree_error = "At least 2 option is required";
} else {
$degree = $_POST['degree'];
}

if(empty($_POST['bloodgroup'])) {
$bloodgroup_error = "Enter your Blood group ";
} else {
$bloodgroup = $_POST['bloodgroup'];

}
}
function validate_input($str) {
return htmlspecialchars(trim($str));
}

?>
<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="UTF-8">
<title>Labtask2 </title>


<style>
.error {
color: Green;
}
</style>
</head>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<fieldset>
<legend>
<label for="name">Name</label>
</legend>
<input type="text" name="name" id="name" value="<?php echo $name; ?>">
<span class="error"><?php echo $name_error; ?></span>
</fieldset>


<fieldset>
<legend>
<label for="email">Email</label>
</legend>
<input type="text" name="email" id="email" value="<?php echo $email; ?>">
<span class="error"><?php echo $email_error ?></span>
</fieldset>


<fieldset>
<legend>
<label for="dob">Date Of Birth</label>
</legend>
<input type="date" name="dob" id="dob" value="<?php echo $dob; ?>">
<span class="error"><?php echo $dob_error ?></span>
</fieldset>


<fieldset>
<legend>
<label for="gender">Gender</label>
</legend>
<input type="radio" name="gender" value="male" id="male"<?php echo ($gender == "male") ? " checked": ""; ?>><label for="male">Male</label>
<input type="radio" name="gender" value="female" id="female"<?php echo ($gender == "female") ? " checked": ""; ?>><label for="female">Female</label>
<input type="radio" name="gender" value="other" id="other"<?php echo ($gender == "other") ? " checked": ""; ?>><label for="other">Other</label>
<span class="error"><?php echo $gender_error ?></span>
</fieldset>


<fieldset>
<legend>
<label for="degree">Degree</label>
</legend>
<input type="checkbox" name="degree[]" value="ssc" id="ssc"<?php echo (is_array($degree) && count($degree) > 1 && in_array("ssc", $degree)) ? " checked": ""; ?>><label for="ssc">SSC</label>
<input type="checkbox" name="degree[]" value="hsc" id="hsc"<?php echo (is_array($degree) && count($degree) > 1 && in_array("hsc", $degree)) ? " checked": ""; ?>><label for="hsc">HSC</label>
<input type="checkbox" name="degree[]" value="bsc" id="bsc"<?php echo (is_array($degree) && count($degree) > 1 && in_array("bsc", $degree)) ? " checked": ""; ?>><label for="bsc">BSc</label>
<input type="checkbox" name="degree[]" value="msc" id="msc"<?php echo (is_array($degree) && count($degree) > 1 && in_array("msc", $degree)) ? " checked": ""; ?>><label for="msc">MSc</label>
<span class="error"><?php echo $degree_error ?></span>
</fieldset>


<fieldset>
<legend>
<label for="bloodgroup">Blood Group</label>
</legend>
<select name="bloodgroup" id="bloodgroup">
<option selected>Select group</option>
<option value="a+"<?php echo ($bloodgroup == "a+") ? " selected": ""; ?>>A+</option>
<option value="a-"<?php echo ($bloodgroup == "a-") ? " selected": ""; ?>>A-</option>
<option value="b+"<?php echo ($bloodgroup == "b+") ? " selected": ""; ?>>B+</option>
<option value="b-"<?php echo ($bloodgroup == "b-") ? " selected": ""; ?>>B-</option>
<option value="o+"<?php echo ($bloodgroup == "o+") ? " selected": ""; ?>>O+</option>
<option value="o-"<?php echo ($bloodgroup == "o-") ? " selected": ""; ?>>O-</option>
<option value="ab+"<?php echo ($bloodgroup == "ab+") ? " selected": ""; ?>>AB+</option>
<option value="ab-"<?php echo ($bloodgroup == "ab-") ? " selected": ""; ?>>AB-</option>
</select>
<span class="error"><?php echo $bloodgroup_error ?></span><br><br>
<input type="submit" name="submit" value="Submit">
</fieldset>
</form>



</body>

</html>