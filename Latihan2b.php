<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 2b</title>
    <style>
        .kotak {
            display: inline-block;
            width: 30px;
            height: 30px;
            border: 1px solid black;
            text-align: center;
            line-height: 30px;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>

<?php
// Tentukan jumlah baris dan kolom
$jumlahBaris = 5;
$jumlahKolomMax = $jumlahBaris;

// Looping untuk membuat baris
for ($i = 1; $i <= $jumlahBaris; $i++) {
    // Looping untuk membuat kolom dalam setiap baris
    for ($j = 1; $j <= $i; $j++) {
        echo "<div class='kotak'>$j</div>";
    }
    echo "<div class='clear'></div>"; // Untuk membuat baris baru
}
?>

</body>
</html>