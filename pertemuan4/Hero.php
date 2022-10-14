<?php
//Paradigma Prosedural
$hero1_name = "Alucard";
$hero1_hp = 4000;
$hero1_defense = 120;
$hero1_damage = 300;
$hero1_mana = 0;

$hero2_name = "Akai";
$hero2_hp = 4100;
$hero2_defense = 300;
$hero2_damage = 50;
$hero2_mana = 0;

//Paradigma OOP
class Hero {
    //Atribut/property
    public $name;
    public $hp;
    public $defanse;
    public $damage;
    public $mana;

    //Method
    //Kontructor
    public function __construct($name, $hp, $defanse,$damage, $mana)
    {
        $this->name = $name;
        $this->hp = $hp;
        $this->defanse = $defanse;
        $this->damage = $damage;
        $this->mana = $mana;
    }

    public function attack($target)
    {
        $target->hp = $target->hp - ($this->damage - $target->defanse);
        echo "$this->name menyerang $target->name\n";
        echo "HP $target->name saat ini adalah: $target->hp \n";
    }
}
$hero1 = new Hero("Alucard", 4000, 120, 400, 0);
$hero2 = new Hero("Akai", 4100, 200, 500, 0);

//Memanggil method
$hero1->attack($hero2);
?>