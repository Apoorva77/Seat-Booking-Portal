<?php
$servername="localhost";
$username="root";
$password="";
$dbname="booking";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("connection failed:".$conn->connect_error);
}
/*else
  echo "Connection successful";*/
if(isset($_POST['submit_button']))
{
	$name=$_POST['name'];
	$contact=$_POST['contact'];
	$fname=$_POST['fname'];
	$amount=$_POST['amount'];
	$transaction=$_POST['transaction'];
	$deptname = $_POST['userselect'];

	$next="INSERT INTO information (Name,Contact_number,Fathers_Name,Amount_paid,Transaction_type) values('$name','$contact','$fname','$amount','$transaction')";
	if($conn->query($next)==TRUE)
	{
		echo"<br>Inserted data Successfully";
	}
	else
	{
		echo"<br>Unsuccessful Insertion".$conn->error;
	}

    $query="SELECT seats from seats where Department='$deptname'";
    //echo $query;
    $result = mysqli_query($conn,$query);  
	$seatCount=0; 

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {  
	    //echo $row['seats'];   
	    $seatCount=$row['seats'];
    }
    if($seatCount==0)
	{
	    echo "Seats not available";
	}  
	else
	{
		$seatCount= $seatCount-1;//decrement the count
		$new="UPDATE seats SET Seats = $seatCount WHERE Department='$deptname'";
		if ($conn->query($new) === TRUE) {
		    //echo "Record updated successfully";
			session_start();
    	$_SESSION['success_message'] = "<div align='center'>Seat booked successfully</div>";
    	header("Location: index.php");
    	exit();
		} 
		else {
  				echo "Error updating record: " . $conn->error;
		}
	//update the seat table after decrementing the seatcount using the update table command in php 
	//insert into the table info with the student details
	}
	mysqli_free_result($result);
    //echo "Fetched data successfully\n";
    mysqli_close($conn);
    //echo $query;
}
?>