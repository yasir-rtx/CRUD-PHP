<?php 
    $sqlm = mysqli_query($kon, "DELETE FROM member WHERE id='$_GET[id]'");
    if ($sqlm) {
        echo "DELETED";
    } else {
        echo "FAILED";
    }
    echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=test'>";
?>