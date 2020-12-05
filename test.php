<?php 
    echo "<a href='?p=testadd'>ADD</a>";
    echo "<table width='100%' border='1' cellpadding='10' cellspacing='10'>
          <tr>
                <th>NO</th>
                <th>FOTO</th>
                <th>USERNAME</th>
                <th>NAME</th>
                <th>TERDAFTAR</th>
                <th>AKSI</th>
          </tr>
    ";
    $sqlm = mysqli_query($kon, "SELECT * FROM member ORDER BY waktudaftar DESC");
    $no=1;
    while ($rm = mysqli_fetch_array($sqlm)) {
        echo "
		<tr>
			<td>$no</td>
			<td><img src='img/$rm[foto]' width='100px'</td>
            <td>$rm[username]</td>
            <td>$rm[name]</td>
            <td>$rm[waktudaftar]</td>
			<td>
				<a href='?p=testedit&id=$rm[id]'>EDIT</a><hr>
				<a href='?p=testdel&id=$rm[id]'>HAPUS</a>
			</td>
		</tr>";
        $no++;
    }
    echo "</table>";
?>