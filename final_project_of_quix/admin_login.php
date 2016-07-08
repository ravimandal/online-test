<?php  
session_start();//session starts here  
  
?>  
  

<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'nitesh');
define('DB_USER','Nitesh');
define('DB_PASSWORD','12345');

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_connect_error());
$db=mysqli_select_db($con, DB_NAME) or die("Failed to connect to MySQL: " . mysqli_connect_error());
$email = $_POST['userid'];
$pass = $_POST['pass'];
$sql="SELECT * FROM admin_login WHERE  admin_id='$email' and  admin_pass='$pass'";
$result=mysqli_query($con,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

if($count==1){
session_start();
$_SESSION['seas_user']=$email;
//$_SESSION['seas_user_id']=$row['student_id'];



// Register $myusername, $mypassword and redirect to file "login_success.php"


header('Location:/nitesh/final_project_of_quix/admin_options.php');

}}}
else {
echo "<center><h2>Wrong Username or Password</br> Please check your </b> Id and Password </h2></center>";
}
?>




