<?php

$mahasiswa = ["nama" => "Adison Simanullang", "prodi" => "S1 informatika", "fakultas"=> "informatika",  "sisaUang" => 5000000, "hutanPerpustakan"=> false, "ipk"=> 3.4];

$jumlahSks = 20;
$hargaPerSks = 150000;
$totalTagihan = $jumlahSks * $hargaPerSks;
$sisaUangAkhir = $mahasiswa["sisaUang"] - $totalTagihan;


function cekUang(int $sisaDuit): string {
    if($sisaDuit >= 0){
        return "LUNAS, bisa ambil krs\n";
    }
    return "DITOLAK, uang kurang\n";
}

echo cekUang($sisaUangAkhir);

$lolosKrs = ($mahasiswa["ipk"] > 3.0 && $mahasiswa["sisaUang"] >= 0) || $mahasiswa['hutanPerpustakan'] == false && $mahasiswa["sisaUang"] >= 0;

if($lolosKrs){
    echo "LOLOS KRS";
}else{
    echo "GAGAL KRS";
}