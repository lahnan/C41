<?php
    if (!file_exists(".env")) {
        header("Location: setup.php?submit=0");
        die();
    }

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
    <div class="container">
        <h1>C41</h1>
        <h3>Cari Fotomu Disini</h3>
        <form action="./findid.php" class="findmain">
            <label for="findid"></label>
            <input type="text" placeholder="Masukan Order ID" id="findid" name="findid">
            <button type="submit" value="submit">Cari</button>
        </form>
    </div>

    <!-- footer -->
    <?php include "./components/footer.php"; ?>
</body>

</html>