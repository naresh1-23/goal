<?php
session_start();
include('connect.php');
$user_id = $_SESSION['User_id'];
if(isset($_POST['title'])
&& isset($_POST['description'])){
      $title = $_POST['title'];
      $description = $_POST['description'];
      $date = date('Y-m-d');
      $query = "INSERT INTO GoalTable(GoalTitle,description, GoalAccomplishDate, user_id) VALUES('$title', '$description', '$date', '$user_id')";
      if(mysqli_query($conn, $query)){
            $msg = "Data inserted";
            header('Location:../home.php?msg='.$msg);
      }
      else{
            $msg = "some error occured: ".mysqli_error($conn);
            header('Location:../home.php?msg='.$msg);
      }
}else{
      $msg = "all fields are required";
}
?>