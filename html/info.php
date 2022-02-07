
<?php
 $dbhost = 'localhost';
      $dbuser = 'root';
      $dbpass = 'CAPst0ne12!@';
      $dbname = 'aitrust';
      $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

      if($mysqli->connect_errno ) {
         printf("Connect failed: %s<br />", $mysqli->connect_error);
         exit();
      }
      printf('Connected successfully.<br />');
     
      $username = $_POST['username'];
     $data = htmlspecialchars($username);
      $data = stripslashes($data);
      $username = trim($data);
      $age = $_POST['age'];
      $field = $_POST['field'];
      $gpa = $_POST['gpa'];
      $trust = $_POST['trust'];
      $feeling = $_POST['feeling'];
      $help = $_POST['help'];
      $gender=$_POST['gender'];
      $personal=$_POST['personal'];
$id = $_COOKIE['user'];
   $sql = "INSERT INTO info ". //need to add cookies to store user id and replace 1 here
         "(id,username,age,field,gpa,trust,feeling,help,gender,personalreccs) "."VALUES ".
         "($id,'$username','$age','$field','$gpa','$trust','$feeling',$help,'$gender','$personal')";

    
printf($sql);
if ($mysqli->query($sql)) {
         printf("Record inserted successfully.<br />");
      }
      if ($mysqli->errno) {
         printf("Could not insert record into table: %s<br />", $mysqli->error);
      }
$newURL="ins.html";
$mysqli->close();
header('Location: '.$newURL);
?>

