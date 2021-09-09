<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['userName'];
       $to = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];
       $headers = "From: khoironyarief08@gmail.com" . "\r\n";

       if(empty($UserName) || empty($to) || empty($Subject) || empty($Msg))
       {
           header('location:contact.php?error');
       }
       else
       {

           if(mail($to,$Subject,$Msg,$headers))
           {
               header("location:contact.php?success");
           }
       }
    }
    else
    {
        header("location:contact.php");
    }
?>