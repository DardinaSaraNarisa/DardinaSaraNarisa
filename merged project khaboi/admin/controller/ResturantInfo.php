<?php 

require_once ('model/model.php');

function fetchAllResturants(){
	return showAllResturants();

}
function fetchResturant($id){
	return showResturant($id);

}
