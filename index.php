<?php
// calling phpqrcode generator
include "./phpqrcode/qrlib.php";
include "./db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="./components/style.css">
</head>

<body>
    <!-- navbar -->
    <?php include "./components/nav.php"; ?>
    <h1>C41</h1>
    <h3>Cari Fotomu Disini</h3>
    <form action="./findid.php">
        <label for="findid">Order ID</label>
        <input type="text" placeholder="Masukan Order ID" id="findid" name="findid">
        <button type="submit" value="submit">Cari</button>
    </form>
</body>

</html>