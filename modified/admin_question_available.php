<?php
session_start();
   if(!isset($_SESSION['seas_admin'])) 
     {
     header("location:/nitesh/modified/admin_login.html");

     } 
      else
         {
?>


<!DOCTYPE html>
<html>
<head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="/nitesh/modified/style.css">
</head>

<title>login</title>
<body>
   <nav>
  <div class="container">
    <ul class="nav">      
      <li><a href="/nitesh/modified/admin_logout.php">Logout</a></li>

      </ul>
  </div>
</nav>

<center><h2>  </h2></center>
 <div class="log2">
  <form action="#" method="post">
  <fieldset>
  <legend> Questions In Database</legend>

<?php
      include'database.php';
      $sql = "SELECT * FROM questions ";
      ?>
      <table >
      <thead>
        <tr>
          <th>QuestionsId</th>
          <th>QuestionsType</th>
          <th>Images</th>
          <th>Questions</th>
          <th>Option1</th>
          <th>Option2</th>
          <th>Option3</th>
          <th>Options4</th>
          <th>Correct</th>
          <th>UpdateTyme</th>
        </tr>
      </thead>
      <tbody>
        
<?php
$result = $con->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {

            echo
            "<tr>
              <td>{$row['id']}</td>
              <td>{$row['q_type']}</td>
              <td>{$row['img_url']}</td>
              <td>{$row['question']}</td>
              <td>{$row['answer1']}</td>
              <td>{$row['answer2']}</td>
              <td>{$row['answer3']}</td>
              <td>{$row['answer4']}</td>
              <td>{$row['answer']}</td>
              <td>{$row['created_on']}</td> 
            </tr>"."\n";
          }}
        ?>
      </tbody>
    </table>
    <input type="hidden" value="Login">
</fieldset> 
 </form>
</div>
    </body>
    </html>
     <?php mysqli_close($con);
    } ?>
    