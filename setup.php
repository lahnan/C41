<?php
    if (file_exists(".env")) {
    }

    // $_POST["name"]

    $myfile = fopen(".env", "w") or die("gagal membuat env!");
    $txt = "John Doe\n";
    fwrite($myfile, $txt);
    $txt = "Jane Doe\n";
    fwrite($myfile, $txt);
    fclose($myfile);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quicksetup</title>
</head>
<body>
    <form action="setup.php" method="post">
        <input type="text" placeholder="put database name" name="dbname">
        <input type="text" placeholder="put database server url" name="dburl">
        <input type="text" placeholder="put database username" name="dbuser">
        <input type="password" placeholder="put database password" name="dbpass">
        <button type="submit">submit</button>
    </form>
</body>
</html>