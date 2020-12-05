<form name="form1" method="post" action="" enctype="multipart/form-data">
    <p>
        <label for="v2">Username : </label>
        <input type="text" name="v2" id="v2" placeholder="USERNAME">
    </p>

    <P>
        <label for="v3">Name : </label>
        <input type="text" name="v3" id="v3" placeholder="FULLNAME">
    </P>

    <p>
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
            }

            $sqlm = mysqli_query($kon, "INSERT INTO member(username, name, waktudaftar, foto) VALUES ('$_POST[v2]', '$_POST[v3]', NOW(), '$namefoto')");

            if($sqlm) {
                echo "SUCCESFUL";
            } else {
                echo "FAILED";
            }
            echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=test'>";
        }
    ?>
</form>