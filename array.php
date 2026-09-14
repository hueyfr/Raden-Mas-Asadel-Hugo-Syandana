<?php 

$data_siswa = [
    [
        "nama"=>"Hugo",
        "usia"=>"17 Tahun",
        "hobi"=>"olahraga",
        "nis"=>"070209"
    ],
    [
        "nama"=>"Cumsky",
        "usia"=>"22 tahun",
        "hobi"=>"sholat",
        "nis"=>"161209"
    ],
    [
        "nama"=>"rakha",
        "usia"=>"100 tahun",
        "hobi"=>"maen cewe",
        "nis"=>"180509"
    ]
];

echo "<h2>Data seluruh siswa</h2>";
$no = 1;
foreach ($data_siswa as $siswa){
    echo "Data siswa ke-$no<br/>";
    foreach ($siswa as $key => $value){
        echo "$key : $value <br/>";
    }
    echo "<br/>";
    $no++;
}
?>