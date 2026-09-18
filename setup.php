<?php
    if (file_exists(".env")) {
    }

    // $submit = htmlspecialchars($_GET['submit']);
    $step = 1;
    

    if (empty($_POST["setting"])) {
        $setting = "";
    } else {
        $setting = $_POST["setting"];
        checksetting($setting);
    }
    function checksetting($setting) {
        if ($setting == "nodb") {
            $step = 2.1;
            echo "tanpa database";
            } elseif ($setting == "withdb") {
            $step = 2.2;
            echo "dengan database";
        } else {

        }
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

    <?php 
        if ($step == 1) {
            echo "";
        }
    ?>
    <h3>step 1</h3>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label for="nodb">tanpa database</label>
        <input type="radio" name="setting" id="nodb"
        <?php if (isset($setting) && $setting=="nodb") echo "checked";?>
        value="nodb">
        <label for="withdb">dengan database</label>
        <input type="radio" name="setting" id="withdb" 
        <?php if (isset($setting) && $setting=="withdb") echo "checked";?>
        value="withdb">
        <button type="submit">berikutnya</button>
    </form>

    <!-- <h3>step 2</h3>
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
    <button>buka home</button> -->
</body>
</html>