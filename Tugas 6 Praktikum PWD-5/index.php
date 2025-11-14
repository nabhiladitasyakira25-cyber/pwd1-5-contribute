<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        table {
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px 12px;
            text-align: center;
        }
        th {
            background: lightgreen;
        }
        .header-kiri {
            background: lightgreen;
            font-weight: bold;
        }
    </style>
<body>
    <h2>Tugas 6 Praktikum PWD</h2>

<?php
// BAGIAN 1: Bilangan Genap
echo "<h3>Bilangan Genap 1 - 10</h3>";

for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}

echo "<br><br>";

// BAGIAN 2: Tabel Perkalian 1-10
echo "<h3>Tabel Perkalian 1 - 10</h3>";
echo "<table border='1' cellpadding='8' cellspacing='0'>";

// Header kolom
echo "<tr>";
echo "<th>bilangan</th>";
for ($i = 1; $i <= 10; $i++) {
    echo "<th>$i</th>";
}
echo "</tr>";

// Isi tabel
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";

    // Kolom label kiri
    echo "<td class='header-kiri'>$i</td>";

    // Kolom isi
    for ($j = 1; $j <= 10; $j++) {
        $hasil = $i * $j;

        if ($hasil % 2 == 0) {
            echo "<td style='background: cyan;'>$hasil</td>";
        } else {
            echo "<td style='background: yellow;'>$hasil</td>";
        }
    }

    echo "</tr>";
}

echo "</table>";
?>
    
</body>
</html>
