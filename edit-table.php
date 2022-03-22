<?php
    if(!isset($_GET['id'])){
        die("You can not edit");
    }
    $cid = $_GET['id'];
    session_start();
    if(!isset($_SESSION['login']) || !$_SESSION['login']==1){
         header('Location:login.php');
    }
    $id = $_SESSION['user_id'];
    include('db/connect.php');
    $query = "SELECT * FROM User WHERE id='$id'";
    $result = mysqli_query($conn,$query);
    $data = mysqli_fetch_assoc($result);
    $GoalTableQuery = "SELECT * FROM GoalTable WHERE id = '$cid'";
    $GoalTableResult = mysqli_query($conn, $GoalTableQuery);
    if(mysqli_num_rows($GoalTableResult)==0){
        die("No record found with this id");
    }
    else{
        $row = mysqli_fetch_assoc($GoalTableResult);
    }

?>

<html>
  <head>
      <title>Home-Asmt News</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>
    <?php include('include/nav.php');?>    
 
    <div class="container">
      <div class="row">
        <div class="col-8">        
          <form method="POST" action="db/edit-table.php">
            <input type="hidden" name="id" value = "<?php echo $cid; ?>">
            <label>Goal Title</label>
            <div class="input-group">
              <input type="text" value = "<?php echo $row['GoalTitle']; ?>" class="form-control" name="title">
            </div>
            <br>
            <div class="input-group">
              <input type="text" value= "<?php echo $row['description']; ?>" class="form-control" name="description">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
        </div>
      </div>
    </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/833795b4ff.js" crossorigin="anonymous"></script>
  <script src="js/bootbox.min.js"></script>
  <script>
    function deleteConfirmation(id){
      bootbox.confirm({
      message: "Are you sure ?",
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
          window.location = 'db/delete-category.php?id='+id;
        }
    }
});
    }
  </script>
  </body>
</html>