<?php
session_start();

?>
<?php
include("db_conection.php");
if(isset($_POST['register']))
{
$user_email = $_POST['ruser_email'];
$user_password = $_POST['ruser_password'];
$user_firstname = $_POST['ruser_firstname'];
$user_lastname = $_POST['ruser_lastname'];
$user_address = $_POST['ruser_address'];



$check_user="select * from users WHERE user_email='$user_email'";
    $run_query=mysqli_query($dbcon,$check_user);

    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('Użytkwonik o podanych danych już insteje!')</script>";
 echo"<script>window.open('index.php','_self')</script>";
exit();
    }
 
$saveaccount="insert into users (user_email,user_password,user_firstname,user_lastname,user_address) VALUE ('$user_email','$user_password','$user_firstname','$user_lastname','$user_address')";
mysqli_query($dbcon,$saveaccount);
echo "<script>alert('Pomyślnie zapisano! Teraz możesz się zalogować.')</script>";
echo "<script>window.open('index.php','_self')</script>";


}

?>
