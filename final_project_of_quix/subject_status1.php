<?php


session_start();
if(!isset($_SESSION['seas_user'])) 
{
header("location:/nitesh/final_project_of_quix/login.html");

}
   else
      {
$servername = "localhost";
$username = "Nitesh";
$password = "12345";
$dbname = "nitesh";

$conn = 
new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//$z=0;
//$test_value=isset($_GET['type']);
//if(isset($_GET['type']))
//{
//	$_SESSION['values']=$_GET['type'];
	 //$test_value=$_SESSION['values'];

	
    //print_r($_SESSION['value']);
//}
$b=$_SESSION['seas_user_id'];
$z=$_SESSION['values'];
$sql="UPDATE `nitesh`.`subject_status` 
	SET `status` = '1' , `created_on` = now() ,`updated_on` = now()
	WHERE
	`user_id` = '$b' AND 
	`status` = '0' AND 
	`subject_type` = '$z'";

if ($conn->query($sql) === TRUE) {
   header("location:/nitesh/final_project_of_quix/result.php");
                                } 
else 
{

    echo "Error: " . $sql . "<br>" . $conn->error;
}





mysqli_close($conn);

}
?>
