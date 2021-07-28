<?php
$person = [
    ["name" => "John Cena", "height" => 1.8, "weight" => 100],
    ["name" => "Undertaker", "height" => 1.75, "weight" => 80],
    ["name" => "Khali", "height" => 2.1, "weight" => 120],
    ["name" => "Bobby Leshley", "height" => 1.9, "weight" => 95],
];
/**
 * case: mengetahui BMI dan kategori di tiap orang
 */

 /**
  * object -> everythings that have attribute and behaviour. Attribute is part of object, 
  * behaviour is action of object.
  * example: Ayam, 
  * attributes: genre, wings, ceker, paruh, 
  * behaviour: bertelur, berjalan, berkokok
  
  * class ->  pattern of object (kerangka dari object)

  * analogi -> object itu kue, class itu cetakan kue, 
  * satu cetakan bisa menghasilkan banyak kue.
  */

  /**
   * class : Person
   * attributes: name, height, weight 
   * behaviour: count BMI and get Category
   */
class Person{
    // atribut itu diimplementasukan sebagai variabel class
    public $name, $weight, $height;

    // constructor itu adalah fungsi yg pertama kali dijalankan
    // saat proses pembuatan objek baru (ada keyword "new")
    public function __construct($name, $height, $weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // behaviour itu diimplementasikan sebagai method atau fungsi
    
    public function countBMI()
    {
        // this itu digunakan untuk mengakses atribut dari class
        $bmi = $this->weight / ($this->height * $this->height);
        return $bmi;
    }

    public function getCategory()
    {
        $bmi = $this->countBMI();
        if ($bmi < 18.5) {
            return "Kurang berat badan";
        } elseif ($bmi >= 18.5 && $bmi < 23) {
            return "Normal";
        } elseif ($bmi >= 23 && $bmi < 30) {
            return "Cenderung Obesitas";
        } elseif ($bmi >= 30) {
            return "Obesitas";
        }
    }
}

// create object
$person1 = new Person("John Cena", 1.8, 100);
echo "BMI dari ".$person1->name." adalah ".$person1->countBMI();
echo " dengan kategori ".$person1->getCategory();

echo nl2br("\n"); // nl2br itu digunakan utk apply break line 

$person2 = new Person("Undertaker", 1.75, 80);
echo "BMI dari ".$person2->name." adalah ".$person2->countBMI();
echo " dengan kategori ".$person2->getCategory();

echo nl2br("\n"); // nl2br itu digunakan utk apply break line

$person3 = new Person("Khali", 2.1, 120);
echo "BMI dari ".$person3->name." adalah ".$person3->countBMI();
echo " dengan kategori ".$person3->getCategory();


?>