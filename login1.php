<?php
session_start();
if(isset($_POST['dergoni']))
{
    extract($_POST);
    include 'config.php';
    $sql=mysqli_query($conn,"Select * From ngarkoni where email='$email' and password='$password'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["id"] = $row['id'];
        $_SESSION["emri"]=$row['emri'];
        header("Location: home.php"); 
    }
    else
    {
        echo "<script>alert('Emri ose passwordi nuk jane vendosur sakte')</script>";
        echo "<script> location.href='login.php'; </script>";
        exit;
    }
}
?>