<form action="input-datadiri.php" method="POST">
    <label for="nis"> Nomor Induk siswa :</label>
    <input type="number" name="nis" placeholder="Ex. 12001142" /><br>

    <label for="nama"> Nama Lengkap :</label>
    <input type="text" name="nama" placeholder="Ex. Firdaus" /><br>

    <label for="tanggal_lahir"> Tanggal lahir :</label>
    <input type="date" name="tanggal_lahir" /><br>

    <label for="nilai"> Nilai :</label>
    <input type="number" name="nilai" placeholder="Ex. 80.56" /><br>
    
    <input type="submit" name="simpan" value="simpan data" />
</form>

<?php
    include('./input-config.php');
    echo "<hr>";

    $no = 1;
    $tabledata = "";
    $data = mysqli_query($mysqli, " SELECT * FROM datadiri ");
    while($row = mysqli_fetch_array($data)) {
        $tabledata .= "
            <tr>
                <td>".$row["nis"]."</td>
                <td>".$row["namalengkap"]."</td>
                <td>".$row["tanggal_lahir"]."</td>
                <td>".$row["nilai"]."</td>
            </tr>
        ";
        $no++;
    }

    echo "
        <table cellpading=5 border=1 cellspacing=0>
            <tr>
                <th>NIS</th>
                <th>Nama lengkap</th>
                <th>Tanggal</th>
                <th>Nilai</th>
            </tr>
            $tabledata
        </table>
    ";
?>