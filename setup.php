<?php
    if (file_exists(".env")) {
    }

    $submit = htmlspecialchars($_GET['submit']);

    

    if ($submit == 2.2) {
        $makeenv = fopen(".env", "w") or die("gagal membuat env!");
        $makeenvvalue = "#connect database \n username=" . $_POST["dbuser"] . "\n password=" . $_POST["dbpass"] . "\n database=" . $_POST["dbname"]. "\n server=" . $_POST["dburl"];
        fwrite($makeenv, $makeenvvalue);
        fclose($makeenv);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quicksetup</title>
</head>
<body>

    <h3>step 1</h3>
    <form action="setup.php?submit=1" method="post">
        <label for="withdb">dengan database</label>
        <input type="radio" name="withdb" id="withdb">
        <label for="nodb">tanpa database</label>
        <input type="radio" name="nodb" id="nodb">
        <button type="submit">berikutnya</button>
    </form>

    <h3>step 2</h3>
    selection 1
    <form action="setup.php?submit=2.1" method="post">
        <input type="text" placeholder="put database server url" name="dburl">
        <input type="text" placeholder="put database username" name="dbuser">
        <input type="password" placeholder="put database password" name="dbpass">
        <button type="submit">berikutnya</button>
    </form>

    selection 2
    <form action="setup.php?submit=2.2" method="post">
        <input type="text" placeholder="put database name" name="dbname">
        <input type="text" placeholder="put database server url" name="dburl">
        <input type="text" placeholder="put database username" name="dbuser">
        <input type="password" placeholder="put database password" name="dbpass">
        <button type="submit">berikutnya</button>
    </form>

    <h3>step 3</h3>
    <form action="setup.php?submit=3" method="post">
        <p>buat akun admin</p>
        <input type="text" placeholder="username" name="username">
        <input type="password" placeholder="password" name="password">
        <button type="submit">berikutnya</button>
    </form>

    <h3>step 4 selesai</h3>
    <button>buka home</button>
</body>
</html>