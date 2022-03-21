<html>
  <head>
      <title>Sign up</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
<body>
<?php include('include/navbar.php') ?><br>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form class="row g-3" method ="POST" action="db/signup.php">
                        <div class="col-md-12">
                            <label for="" class="form-label">Full Name</label>
                            <input type="fullname" name="fullname" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-12">
                            <label for="" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-md-12">
                            <label for="inputPassword4" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="inputPassword4">
                        </div>
                        
                        <div class="col-12">
                            <input type="submit" name="submit" class="btn btn-primary" value="Sign Up">
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