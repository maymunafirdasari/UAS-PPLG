<!DOCTYPE html>
<html>
<head>
    <title>Aktifitasmu</title>
</head>
<body>
    <?php
    // Array daftar aktivitas
    $daftarAktivitas = array(
        "Belajar",
        "Sekolah",
        "Olahraga",
        "Berkumpul dengan teman",
        "Menonton film",
    );

    // Menampilkan daftar aktivitas dalam bentuk pilihan
    echo "<h2>Aktivitas Anda Hari Ini</h2>";
    echo "<h4>Pilih aktifitas anda hari ini?</h4>";
    echo "<form method='post'>";
    foreach ($daftarAktivitas as $aktivitas) {
        echo "<input type='radio' name='pilihan' value='" . $aktivitas . "'>" . $aktivitas . "<br>";
    }
    echo "<br>";
    echo "<button type='submit' name='submit'>Pilih</button>";
    echo "</form>";

    // Menampilkan hasil pilihan
    if (isset($_POST['submit'])) {
        $pilihan = $_POST['pilihan'];

        // Memeriksa apakah pilihan valid
        if (in_array($pilihan, $daftarAktivitas)) {
            echo "<h2>Hasil Pilihan:</h2>";
            echo "Anda memilih aktivitas " . $pilihan . ".";
        } else {
            echo "<h2>Hasil Pilihan:</h2>";
            echo "Aktivitas yang Anda pilih tidak tersedia.";
        }
    }
    ?>
</body>
</html>