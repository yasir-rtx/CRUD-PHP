<?php 
    $sqlm = mysqli_query($kon , "SELECT * FROM member WHERE id='$_GET[id]'");
    $rm = mysqli_fetch_array($sqlm);
?>

<form name="form1" method="post" action="" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo "$rm[id]"; ?>">
    <p>
        <label for="v2">Username : </label>
        <input type="text" name="v2" id="v2" value="<?php echo "$rm[username]"; ?>"">
    </p>

    <P>
        <label for="v3">Name : </label>
        <input type="text" name="v3" id="v3" value="<?php echo "$rm[name]"; ?>">
    </P>

    <p>
        <?php echo "<img src='img/$rm[foto]' width='100px'>"; ?><br>
        <label for="v5">Foto : </label>
        <input type="file" name="v5" id="v5">
    </p>
    <p>
        <input type="submit" value="SAVE" name="save">
    </p>

    <?php 
        if ($_POST["save"]) {
            include "koneksi.php";
            
            $namefoto = $_FILES["v5"]["name"];
            $pathfoto = $_FILES["v5"]["tmp_name"];

            if (!empty($pathfoto)) {
                move_uploaded_file($pathfoto, "img/$namefoto");
                $v5 = ", v5='$namefoto";
            } else {
                $v5 = "";
            }

            $sqlm = mysqli_query($kon, "UPDATE member SET username='$_POST[v2]', name='$_POST[v3]' $v5 WHERE id='$_POST[id]'");

            if($sqlm) {
                echo "SUCCESFUL";
            } else {
                echo "FAILED";
            }
            echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=test'>";
        }
    ?>
</form>