<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>

<body>
   <form action="form_action.php" method="post">
        <label for="">Username : </label>
        <input type="text" name="username" placeholder="Username">
        <br>
        <label for="">Password : </label>
        <input type="password "name="password" placeholder="Username">
        <br>
        <label for="">Jenis kelamin : </label>
        <br>
        <label for=""><input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki</label>
        <br>
        <label for=""><input type="radio" name="jenis_kelamin" value="perempuan">Perepuan</label>
        <label for="">Agama: </label>
        <select name="agama" id="agama">
            <option value="">Pilih Agama</option>
            <option value="islam">Islam</option>
            <option value="kristen">Kristem</option>
            <option value="hindu">Hindu</option>
            <option value="buddha">Buddha</option>
            <option value="konghucu">Konghucu</option>
        </select>
        <br>
        <br>
        <button type="submit" name="kirim">Kirim</button>

   </form> 
</body>

</html>