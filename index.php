<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD TEST UTS</title>
</head>
<body>
    <h1>CRUD TEST UTS</h1>

    <?php 
        include "koneksi.php";
        if($_GET["p"] == "testadd") {
            include "testadd.php";
        } elseif ($_GET["p"] == "testedit") {
            include "testedit.php";
        } elseif ($_GET["p"] == "testdel") {
            include "testdel.php";
        } else {
            include "test.php";
        }
    ?>
</body>
</html>