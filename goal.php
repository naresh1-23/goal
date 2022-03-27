<?php
  session_start();
  if(!isset($_SESSION['login']) || !$_SESSION['login']==1){
     header('Location:login.php');
  }

  $id = $_SESSION['id']; 
  $user_id = $_SESSION['User_id']; 

  include('db/connect.php');
  $query = "SELECT * FROM User WHERE id='$id'";
  $result = mysqli_query($conn,$query);
  $data = mysqli_fetch_assoc($result);
  $GoalTableQuery = "SELECT * FROM GoalTable where user_id = '$user_id'";
  $GoalTableResult = mysqli_query($conn, $GoalTableQuery);
?>

<html>
  <head>
      <title>Goal table</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
<body>
<?php include('include/navbar.php') ?><br>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
             <?php   if(mysqli_num_rows($GoalTableResult)==0){
                echo "<h3>No Category found</h3>";
              }
              else{
                ?>
                <table class="table table-hover">
                  <thead>
                    <th>Title</th>
                    <th>Accomplish Date</th>
                    <th>Action</th>
                  </thead>
                  <tbody>
                    <?php while($row = mysqli_fetch_assoc($GoalTableResult)){?>
                    <tr>
                      <td><?php echo $row['GoalTitle'];?></td>
                      <td><?php echo $row['GoalAccomplishDate'];?></td>
                      <td><a href="#" onclick="deleteConfirmation(<?php echo $row['id']; ?>);"><i class="fas fa-trash" style=color:red></i></a>   | <a href="edit-table.php?id=<?php echo $row['id']; ?>"><i class="fas fa-edit"></i></a></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              <?php } ?>
                </div>
                add goal <a href="home.php">HOME</a>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/f946cb11bd.js" crossorigin="anonymous"></script>
<script src="javascript/bootbox.min.js"></script>
<script>
    function deleteConfirmation(id){
      bootbox.confirm({
      message: "Are you sure you want to delete the goal?",
      buttons: {
        confirm: {
            label: 'Yes',
            className: 'btn-success'
        },
        cancel: {
            label: 'No',
            className: 'btn-danger'
        }
    },
    callback: function (result) {
        if(result){
          window.location = 'db/delete_table.php?id='+id;
        }
    }
    });
    }
  </script>
</body>
</html>