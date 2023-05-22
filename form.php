<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>formulir pendaftaran</h2>
    <form action="proses_pendaftaran.php" method="post">
        <label for="nama">nama lengkap</label><br>
        <input type="text" id="nama" name="nama"><br>

        <label for="email">alamat email</label><br>
        <input type="email" id="email" name="email"><br>

        <label for="password">nomor telpon</label><br>
        <input type="password" id="password" name="password"><br>

        <input type="sumbit" value="daftar">
    </form>
</body>
</html>