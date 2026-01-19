<?php
function cekKelulusan($nilai) {
    if ($nilai >= 75) {
        return "Lulus";
    } else {
        return "Tidak Lulus";
    }
}

// Uji coba
echo cekKelulusan(80); // Output: Lulus
?>