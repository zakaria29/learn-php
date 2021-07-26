<?php
/** 
 * array adalah kumpulan nilai yg berjenis sama
 * setiap data punya posisi yg disebut index (start from 0)
 * 
 * variabel -> individu
 * array -> populasi
*/
// $student = "Bill Gates";
// $siswa = ["John Cena","The Rock","Batista","Rey Mysterio"];
// echo $siswa[3];

// array numeric -> array yg indexnya berupa numerik
// array assosiative -> array yg indexnya berupa string

// array digunakan saat ada data yg bisa di kelompokkan
$person1_nama = "Gopal";
$person1_address = "Madrid";
$person1_age = 40;

$person1 = ["name" => "Gopal", "address" => "Madrid", "age" => 40];
$person2 = ["name" => "Kaizo", "address" => "Saturnus", "age" => 80];


$person = [
    ["name" => "Gopal", "address" => "Madrid", "age" => 40],
    ["name" => "Kaizo", "address" => "Saturnus", "age" => 80],
    ["name" => "Kokochi", "address" => "Pluto", "age" => 20],
];

echo $person[2]["address"];
?>