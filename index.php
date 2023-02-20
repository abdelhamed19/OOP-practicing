<?php
// C    O   N    S   T   R   U   C   T   O   R
class Fruit {
  public $name;
  public $color;
  public $price;

  public function __construct($name,$color) 
  {
    $this->name =$name;
    $this->color=$color;
  }
  public function info ($pric)
  {
    echo "<br>";
    echo $this->name."<br>";
    echo $this->color."<br>";
    echo $this->price=$pric."<br>";
  }
}
$apple = new Fruit("Apple","Red");
echo $apple-> name;
echo "<br>";
echo $apple ->color;
$apple->info(50);
echo "<br>";
echo "###################";
echo "<br>";



// D  E  S  T  R  U  C  T  O  R
class car
{
    public $car_name;
    public $car_color;
    public $car_price;
  
    public function __construct($cname,$ccolor,$cprice) 
    {
      $this->car_name =$cname;
      $this->car_color=$ccolor;
      $this->car_price=$cprice;
    }
    public function carinfo()
    {
        echo "The Name Is   ".$this->car_name."The Color is   ".$this->car_color."The Price Is    ".$this->car_price;
    }
}
$car_obj=new car("Toyota","Blue","2 Million");
//unset($car_obj);
$car_obj->carinfo();
echo "<br>";
echo "###################";
echo "<br>";



#T R Y  -  S T A T I C
class product 
{
  public static $pname="REDBULL";
  public $pid=1234;
  public static $pprice=35;
public static function red_bull_info()
{
  echo "From The Static Method "."<br>";
  echo product::$pname;

  echo "<br>";
  echo product::$pprice;
  echo "<br>";
}
}
$obj1= new product();
echo product::$pname."<br>";
echo product::$pprice."<br>";
product::red_bull_info();
echo "<br>";
echo "###################";
echo "<br>";



//M O R E  -  P R A C T I S E  -  A B O U T  -  S T A T I C
class menu
{
  public $food;
  const FORBIDEN="This is Forbiden";
  public static $sweets;
  public static function forb ($sweett)
  {
    self::$sweets=$sweett;
    return $sweett;
  }
  public function foo ($fod)
  {
    $this->food=$fod;
    return $fod;
  }
}
$menu_obj=new menu();
echo $menu_obj->foo("RICE")."<br>";
echo menu::FORBIDEN."<br>";
echo menu::forb("Cake");
echo "<br>";
echo "###################";
echo "<br>";



//M O R E  -  P R A C T I S E  -  A B O U T  -  S T A T I C
class vegtables extends menu
{
  public $vcolor;
  public static $vprice;
  public static function vvv()
  {
    self::$vprice=300;
    return self::$vprice."<br>".parent::FORBIDEN;
  }
}
echo vegtables::vvv();
echo "<br>";
echo "###################";
echo "<br>";



//M O R E  -  P R A C T I S E  -  A B O U T  -  S T A T I C
class no_name 
{
  public static $age;
  const NAME="abdelhamed";
  public static function inf($ag)
  {
    self::$age=$ag;
    return $ag."<br>".self::NAME;
  }
}
echo no_name::inf(23);
echo "<br>";
echo "###################";
echo "<br>";



//M O R E  -  P R A C T I S E  -  A B O U T  -  S T A T I C
class father 
{
  const NAME='Mohammed';
}
class son extends father
{
  public $sname="Ahmed";
  public static $ssname="Ali";

  public function infoo()
  {
    return $this->sname."   ".parent::NAME."  "."From Non-Static Method";
  }
  public static function st_infoo()
  {
    return self::$ssname."   ".parent::NAME."  "."From Static Method";
  }
}
$son_obj=new son();
echo $son_obj->infoo()."<br>";
echo son::NAME."<br>";
echo son::st_infoo();
echo "<br>";
echo "###################";
echo "<br>";



// A  B  S  T  R  A  C  T  -  A  N  D  -  M  E  T  H  O  D  C  H  A  I  N
abstract class player 
{
  public $natio;
  abstract public function player_name($pname);
  abstract public function player_value($pvalue);
  abstract public function player_age($p_age);
}
class play extends player 
{
  public $name;
  public $age;
  public $value;
   public function player_name($pname)
   {
    $this->name=$pname;
    echo "The Player Name IS  ".$pname."  ";
    return $this;
   }
   public function player_value($pvalue)
   {
    $this->value=$pvalue;
    echo "His Value IS  ".$pvalue."  ";
    return $this;
   }
   public function player_age($p_age)
   {
    $this->age=$p_age;
    echo "And The age IS  ".$p_age."  ";
    return $this;
   }
   public function player_nationality($nat)
   {
    $this->natio=$nat;
    echo "And The Nationality IS  ".$nat."  ";
    return $this;
   }
}
$player_obj=new play();
$player_obj->player_name("RODRI")->player_value("70M")->player_age(25)->player_nationality("Spain");
echo "<br>";
echo "###################";
echo "<br>";