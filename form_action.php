<?php

if (isset($_POST['kirim'])) {
    if (empty($_POST['username'])&& ($_POST['password'])&& ($_POST['agama'])&&) {
        echo "inputan tidak boleh kosong"
    } else {
        $username = $_POST['username'];
        $pw = $_POST['password'];
        $jk = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        
        echo "Usernamenya adalah :" . $username;
        echo <"br">;
        echo "Passwornya adalah :" . $pw;
        echo <"br">;
        echo "Jenis kelaminnya :" . $jk;
        echo <"br">;
        echo "Agamanya adalah :" . $agama;
    }

} else {
    header('Location:../ from.php');
    exit;
}

?>