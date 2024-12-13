<?php

function perkenalan($nama, $kelas = 'KA 2021') {
    echo "Halo, nama saya " . $nama . ", saya mahasiswa kelas " . $kelas;
    echo "Umur saya adalah " . hitungUmur(2024, 1995);
}

$nama = "Muhammad Harisz";
$kelas = "IF 2021";

function hitungUmur($tahun_sekarang, $tahun_lahir) {
    $umur = $tahun_sekarang - $tahun_lahir;

    return $umur;
}

perkenalan($nama, $kelas);
