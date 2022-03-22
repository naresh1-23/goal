<?php
    if(!isset($_POST['title'])){
        die("can not edit the record");
    }
    else{
        $c = $_POST['title'];
        $i = $_POST['description'];
        $id = $_POST['id'];
        include('connect.php');
        $query = "UPDATE GoalTable SET GoalTitle='$c', description = '$i' WHERE id='$id'";
        if(mysqli_query($conn, $query)){
            header('Location:../goal.php?msg=successfully updated');
        }
        else{
            header('Location:../goal.php?errmsg='.mysqli_error($conn));
        }
    }
?>