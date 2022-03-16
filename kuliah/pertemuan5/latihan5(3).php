<?php
$mahasiswa = [
    ["Sandhika Galih", "043040023", "Teknik Informatika", "sandhikagalih@unpas.ac.id"],
    ["Doddy Ferdiansyah", "033040001", "Teknik Industri", "doddy@yahoo.com"],
    ["Erik", "023040123", "Teknik Planologi", "erik@gmail.com"]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs) : ?>
<ul>
    <li>Nama :<?= $mhs[0]; ?></li>
    <li>Nrp :<?= $mhs[1]; ?></li>
    <li>Jurusan :<?= $mhs[2]; ?></li>
    <li>Email: <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>