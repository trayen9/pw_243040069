<?php
$mahasiswa = [
    [
        "nama" => "Destrian",
        "nrp" => "243040069",
        "email" => "grahadestrian9@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Adriel Reihansyah",
        "nrp" => "243040091",
        "email" => "adriel1239@gmail.com",
        "jurusan" => "Teknologi Informatika"
    ],
    [
        "nama" => "Yaiza Ananda",
        "nrp" => "243040077",
        "email" => "yaizaananda9@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Tastaftian",
        "nrp" => "243040053",
        "email" => "tastaftian7@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Dimas Muhamad",
        "nrp" => "243040023",
        "email" => "Dimas3@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Agil",
        "nrp" => "243040013",
        "email" => "agil@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Egi",
        "nrp" => "243040004",
        "email" => "egi@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Moch Ibrahim",
        "nrp" => "243040012",
        "email" => "ibrahim@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Azriel",
        "nrp" => "243040003",
        "email" => "zriel@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Trian",
        "nrp" => "243040009",
        "email" => "trian@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama: <?= $mhs["nama"]; ?></li>
            <li>NRP: <?= $mhs["nrp"]; ?></li>
            <li>Email: <?= $mhs["email"]; ?></li>
            <li>Jurusan: <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>