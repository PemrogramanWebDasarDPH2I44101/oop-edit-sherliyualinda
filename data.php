<table border=1>
    <thead>
        <th>Nama</th>
        <th>Nim</th>
        <th>Tanggal Lahir</th>
        <th>Aksi</th>
    </thead>
    <tbody>
<?php
$k = new Kalkulator();
if (mysqli_num_rows($k->bagi()) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $nim = $row['nim'];
        $id = $row['id'];
        echo "<tr>";
        echo "<td>" . $row["nama"]. "</td>"; 
        echo "<td>" . $row["nim"]. "</td>";
        echo "<td>" . $row["tgl_lahir"]. "</td>";
        echo "<td>
            <a href='edit.php?id=$id'>Edit</a>
            
            </td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}
mysqli_close($k->conn);
?> 
    </tbody>
</table>