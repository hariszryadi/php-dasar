<?php

$mysqli = new mysqli('localhost', 'root', '', 'tedc');
$result = $mysqli->query("SELECT students.nim, students.nama, study_programs.name AS study_program 
                            FROM students LEFT JOIN study_programs ON students.study_program_id = study_programs.id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Data Mahasiswa KA 2021</h1>
        <div class="mb-3">
            <a href="tambah_mahasiswa.php" class="btn btn-primary">Tambah Mahasiswa</a>
        </div>
        <table class="table table-bordered table-hover">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Program Studi</th>
            </tr>
            <?php
                $no = 1;
                while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['nim'] ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['study_program'] ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>