<?php

$nilai = 100;

// return berfungsi untuk mengembalikan nilai

// untuk mengecek apakah $nilai lebih kecil sama dengan (<=) 100,
//jika terpenuhi akan di lanjutkan ke pengkondinsian selanjutnya,
//tetapi jika tidak terpenuhi maka baris/line 30 akan di jalankan
if ($nilai <= 150) {
    // untuk mengecek apakah nilai lebih besar sama dengan 0 (!=)
    if ($nilai != 0) {
         // Untuk mengecek apakah nilai lebih besar sama dengan (>=) 90
        if ($nilai >= 90) {
            echo "Keterangan : A";
            // Untuk mengecek apakah nilai lebih besar sama dengan (>=) 90
        } else if ($nilai >= 80) {
            echo "Keterangan : B";
             // Untuk mengecek apakah nilai lebih besar sama dengan (>=) 70
        } elseif ($nilai >= 70) {
            echo "Keterangan : C";
        } else {
            echo "Keterangan : D";
             // Untuk mengecek apakah nilai lebih besar sama dengan (>=) 0
        }
} else {
        echo "Keterangan : Tidak lulus";
     }
}else {
    return;
}

?>