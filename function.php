<?php
/**
 * function / method / fungsi = blok kode yg akan dijalankan ketika dipanggil
 * blok kode -> kumpulan baris kode yg diapit oleh tanda { }
 * function punya parameter -> data yg akan diolah oleh fungsi tsb
 */

 function prokes(){
    echo "Memakai masker";
    echo "Menyabun tangan";
    echo "Mengurangi mobilitas";
 }

 function makan($nama_makanan){
     echo "Cuci tangan ";
     echo "Baca Doa ";
     echo "Masukkan $nama_makanan ";
     echo "Kunyah $nama_makanan ";
     echo "Telan $nama_makanan ";
 }

//  echo prokes();
 echo makan("Burger");
 echo makan("Soto");
 
?>