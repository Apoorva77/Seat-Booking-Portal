<?php  
//action.php
$connect = mysqli_connect('localhost', 'root', '', 'booking');

$input = filter_input_array(INPUT_POST);

$first_name = mysqli_real_escape_string($connect, $input["Department"]);
$last_name = mysqli_real_escape_string($connect, $input["Seats"]);

if($input["action"] === 'edit')
{
	$query = "UPDATE seats SET Department = '".$first_name."', Seats = '".$last_name."' WHERE id = '".$input["id"]."'";
    mysqli_query($connect, $query);
}

if($input["action"] === 'delete')
{
	$query = "DELETE FROM seats WHERE id = '".$input["id"]."'";
	mysqli_query($connect, $query);
}

echo json_encode($input);
?>