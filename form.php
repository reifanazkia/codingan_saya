<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>

<body>
    <!-- tag pembuka form -->
     <!-- jika method nya post baris 28 harus sama -->
    <!-- perbedaan post dan get adalah get menampilkan nama di url sedangkan post tidak -->
    <!-- form action berfungsi seperti a href -->
   <form action="form_action.php" method="post">
    <!-- action dan method di sebut aribut -->
    <!-- sedangkan yang berwarna oren di sebut value -->
        <label for="">Username : </label>
        <!-- name = $ username adalah nama  variabel -->
        <!-- sedangkan placeholder untuk memberi nama di dalam inputan -->
        <input type="text" name="username" placeholder="Username">
        <button type="submit" name="kirim">Kirim</button>

   </form> 
   <!-- tag penutup form -->
    <?php

if (isset($_POST['kirim'])) {
    
    if (empty($_POST['username'])) {
        echo 'input tidak boleh kosong';
   }else {
    $username = $_POST['username'];

    echo "username adalah : " . $username;

 } 

}


?>
</body>

</html>