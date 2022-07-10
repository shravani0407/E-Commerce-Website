<?php 
include 'config.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
  rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
  crossorigin="anonymous">
  <title>login</title>

  <style>
    .login_main .container form {
      color: black;
      margin-left: 30%;
      margin-top: 150px;
      margin-right: 30%;
      padding: 10px;
      box-shadow: 0px 0px 10px 10px rgb(169, 224, 169);  
    }
    body p{
      text-align: center;
      color: black;
      line-height: 10px;
      padding-top: 10px;
    }
    body a{
      text-align: center;
      margin-left: 47% ;
      padding-top:10px;
    }
    @media screen and (max-width: 400px) {
      .login_main{
        width: 400px;
      }
      .login_main .container{
        padding-top: 150px;
      }
      .login_main .container form{
        padding: 20px;
        margin: 20px;
      }
    }
  </style>
</head>

<body>
  <div class="login_main">
  <div class="container">
    <form method="POST" action="config.php">
      <div class="mb-3">
        <label for="exampleInputEmail" class="form-label">Email id</label>
        <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" name="emailidl">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="passwordl">
      </div>
      <button type="submit" class="btn btn-primary" name="login">Submit</button>
    </form>
  </div>
  <p>New User?</p>
  <a href="register.php">SignUp</a>
  <a href="index.php">Back</a>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>