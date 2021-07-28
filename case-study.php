<?php
/** first case */
$product = [
    ["name" => "Lenava", "qty" => 4, "price" => 1000000],
    ["name" => "Aser", "qty" => 2, "price" => 1500000],
    ["name" => "Toyiba", "qty" => 6, "price" => 2000000],
    ["name" => "Doll", "qty" => 1, "price" => 1200000],
    ["name" => "Susa", "qty" => 3, "price" => 1700000],
];
/** buat code untuk menghitung total jumlah yg dibeli */
$total = 0;
for ($i=0; $i < count($product); $i++) { 
    $totalEachItem = $product[$i]["qty"] * $product[$i]["price"];
    $total += $totalEachItem;
    // $total = $total + $totalEachItem;
}
// echo "Total of all item is $total"


/** second case
 * buat fungsi untuk menghitung bilangan faktorial
 * faktorial(5) -> 5 * 4 * 3 * 2 * 1 = 120
 */

 /**
  * fungsi itu cirinya ada tanda ()
  * fungsi -> void dan non-void
  * void -> fungsi yg tidak mengembalikan value
  * non-void -> fungsi yg mengembalikan value (return value)

  * analogi -> ketua kelas meminta info tentang saldo kas
  * fungsi hitungSaldo() -> return saldonya

  * analogi -> ketua kelas meminta bendahara utk narik kas 
  * fungsi narikKas()
  */

function faktorial($number)
 {
     $result = 1;
     for ($i=$number; $i >= 1 ; $i--) { 
         $result = $result * $i;
     }
    //  return $result;
    echo "Faktorial of $number is $result";
 }
  
//  echo "Faktorial of 10 is ". faktorial(10);
faktorial(6);

?>