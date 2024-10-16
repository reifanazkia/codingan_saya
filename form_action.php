<?php

if (isset($_POST['username'])) {

    $username = $_POST['username'];

    echo "Username nya adalah " . $username;

}else{
   header('Location: from.php');
   exit;
}

?>