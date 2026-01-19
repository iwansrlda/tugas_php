<?php
function hitungTotalNilai($daftarNilai) {
    $total = 0;
    foreach ($daftarNilai as $n) {
        $total += $n; // Menjumlahkan setiap elemen ke variabel total
    }
    return $total;
}

// Uji coba dengan array
$nilaiSiswa = [80, 75, 90, 85];
echo "Total Nilai: " . hitungTotalNilai($nilaiSiswa);
?>