<?php
$servername="localhost";
$username="root";
$password="";
$dbname="booking";

$conn=new mysqli($servername,$username,$password,$dbname);
$employee= $_POST['employee'];
$pass= $_POST['pass'];

$sql="SELECT * FROM login WHERE Employee_id='$employee' AND Password='$pass'";
$result= mysqli_query($conn,$sql);
$row= mysqli_fetch_array($result);
/*if($employee=="" && $pass=="")
{
	header('location:new.html');
}*/
if($row['Employee_id']==$employee && $row['Password']==$pass)
{
	header("location:dashboard.php");

}
/*else
{
	echo "Failed";
}
if($employee=='admin' && $pass=='admin1')
{
	echo "Login";
    header("location:adminmainpage.html");

}*/
else
{
   session_start();

    $_SESSION['success_message'] = "<div align='center'>Login Failed</div>";
    
    header("location:main.php");
    exit();
}
?>