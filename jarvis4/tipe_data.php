<?php
//String
$nama = "Putra Prayoga";

echo str_replace("Putra","Yoga", $nama);

echo "<br><br>";

//Integer
$umur = "19";

echo $umur + 3 . "<br>";

var_dump($umur);

echo "<br><br>";

//Float
$nilai = 3.85;

var_dump($nilai);

echo "<br><br>";

//Boolean
$is_student = true;

var_dump($is_student);

echo "<br><br>";

//Array Biasa
$mahasiswa1 = ["Putra", 19, 3.85, false];

var_dump($mahasiswa1);
echo "<br><br>";
echo "Umur saya $mahasiswa1[1]";

echo "<br><br>";

//Array Assosiatif
$mahasiswa2 = [
    "nama" => "Putra",
    "umur" => 19,
    "nilai" => 3.85,
    "is_active" => true
];

var_dump($mahasiswa2);

echo "<br>";

echo "Hello, saya " . $mahasiswa2['nama'];
?>

