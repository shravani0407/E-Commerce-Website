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

  <title>register</title>

  <style>
    .container form {
      color: black;
      margin-left: 30%;
      margin-top: 40px;
      margin-right: 30%;
      padding: 10px;
      box-shadow: 0px 0px 10px 10px rgb(169, 224, 169);  
    }
    body p{
      text-align: center;
      color: black;
      line-height: 10px;
      padding-bottom: 10px;
    }
    body a{
      text-align: center;
      margin-left: 47% ;
      padding-top: 5px;
    }
  </style>
</head>

<body>
  <div class="container">
    <form method="POST" action="config.php">
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp" name="name">
          </div>
        <div class="mb-3">
            <label for="exampleInputMobileNo" class="form-label">Mobile no</label>
            <input type="number" class="form-control" id="exampleInputMobileNo" aria-describedby="numberHelp" name="mobileno">
          </div>
      <div class="mb-3">
        <label for="exampleInputEmail" class="form-label">Email id</label>
        <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" name="emailid">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
      </div>
      <div class="mb-3">
        <label for="exampleInputConfirmPassword" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="exampleInputConfirmPassword" name="confirmpass">
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
  </div>
    <br>
  <p>Already Registered?</p>|
  <a href="login.php">login</a>
  <a href="index.php">Back</a>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <script>
    const scriptURL = 'https://script.google.com/macros/s/AKfycbxPYXEfbYZ51HCa4JNcMrnLfhvEmLXfm9q13YsQ-XPhhw0isNb4CaSlPaI5LclzP8kcgQ/exec'
    const form = document.forms['form-googlesheet']

    form.addEventListener('submit', e => {
        e.preventDefault()
        fetch(scriptURL, { method: 'POST', body: new FormData(form) })
            .then(response => alert("Thank you !! your review will help us"))
            .catch(error => console.error('Error!', error.message))
    })
</script>
</body>

</html>