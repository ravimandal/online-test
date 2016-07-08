<?php
session_start();
?>

<?php 
// print_r($_FILES['image']);exit();
   if($_FILES['image']['name'] != ''||$_FILES['image']['name'] == '')
{
    echo"Insert";
//   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      //$file_location="~/music/".$file_name;
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
$a=explode('.',$_FILES['image']['name']);
//print_r($a);exit;
      $file_ext=strtolower(end($a));


     // $file_ext=strtolower($a[1]);   $data[$parts[0]] = isset($parts[1]) ? $parts[1] : null;

      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,dirname(__DIR__)."/final_project_of_quix/images/".$file_name);
         echo "Success";
         $fileupload = $file_name;
      }else{
        //$file_location="Null";
        $fileupload = '';
         
      }
  // }

$servername = "localhost";
$username = "Nitesh";
$password = "12345";
$dbname = "nitesh";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



//if(isset($_POST['submit']))
  //   {              
         // Fetching variables of the form which travels in URL
$q_type = $_POST['type'];
$questions = $_POST['questions'];
$q_option1 = $_POST['option1'];
$q_option2= $_POST['option2'];
$q_option3= $_POST['option3'];
$q_option4= $_POST['option4'];
$q_answer= $_POST['correct'];
if($q_type !=''&&$questions !=''&&$q_option1 !=''&&$q_option2 !=''&&$q_option3 !=''&&$q_option4 !=''&&$q_answer !='')
    {

//Insert Query of SQL
$sql= "INSERT INTO questions_old (q_type,img_url,question, answer1,answer2,answer3,answer4, answer,created_on,updated_on) values
     ('$q_type','$fileupload', '$questions', '$q_option1','$q_option2','$q_option3','$q_option4','$q_answer', now(),now())";
    // header("location:question.php");


if ($conn->query($sql) === TRUE) {
echo "<center><h2>Data inserted Successfully</h2></center>";
                                } 
else 
{

    echo "Error: " . $sql . "<br>" . $conn->error;
}

}
//}





$conn->close();
}


?>


