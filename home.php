<html>
  <head>
      <title>Goal</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
<body>
    <?php include('include/navbar.php') ?><br>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <form class="row g-3" method="POST" action="db/home.php"> 
                            <div class="col-md-12">
                                <label for="inputEmail4" class="form-label">Goal Title</label>
                                <input type="text" name = "title" class="form-control" id="inputEmail4">
                            </div>
                            <div class="col-md-12">
                                <label for="inputPassword4" class="form-label">Description</label>
                                <textarea rows="7" name ="description" class="form-control" id="description"></textarea>
                            </div>
                            <div class="col-12">
                            See the Goal <a href="goal.php">Goal</a><br>
                                <input type="submit" name="submit" class="btn btn-primary" value="Save">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>