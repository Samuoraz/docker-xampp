<?php

if ($_GET == null)
{
    echo $_GET['username'];
    echo $_GET['pw'];


    $query = "SELECT * FROM utenti WHERE username='$username' AND pw='$pw'";
}   
else if ($_POST == null)
{
    echo $_POST['username'];
    echo $_POST['pw'];
}    
?>