<?php
$serve='localhost';
$username ='root';
$password = '';
$database ='ecommerce';

$con = mysqli_connect($serve, $username, $password, $database);

if($con -> connect_error){
    die("connection failed".$con -> connect_error);
}

echo"";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $emailid = $_POST['emailid'];
    $mobileno = $_POST['mobileno'];
    $password = $_POST['password'];
    $confirmpass = $_POST['confirmpass'];

    $sql = "INSERT INTO `users`(`name`, `emailid`, `mobileno`, `password`, `confirmpass`) VALUES ('$name','$emailid','$mobileno','$password','$confirmpass')";
    if(mysqli_query($con, $sql)){
        echo"record inserted successfully";
    }else{
        echo"ERROR: could not able to execute $sql".mysqli_error(($con));
    }
}

session_start();
if(isset($_POST['login'])){
    $emailid=$_POST['emailidl'];
    $passwordl= $_POST['passwordl'];

    $query="SELECT * FROM users WHERE 'emailidl'='$emailid' AND 'passwordl'='$password'";
    $result=mysqli_query($con, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if(mysqli_num_rows($result) == 1){
        header("location: index.php");
    }else{
        $error='email-id or password is incorrect';
    }
}
//mysqli_close($con);
?>