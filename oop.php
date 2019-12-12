<?php

/////////////////////////////////////////* Section 1 */////////////////////////////////////////////////

//__construct()
//__destruct()
//__call()
//__callStatic()
//__get()
//__set()
//__isset()
//__unset()
//__sleep()
//__wakeup()
//__toString()
//__invoke()
//__set_state()
//__clone()

/////////////////////////////////////////* Section 2 */////////////////////////////////////////////////

class ParentClass
{
    public $pubVar = "Public Class Variable";
    private $priVar = "Private Class Variable";
    protected $proVar = "Protected Class Variable";

    public function pubMethod()
    {
        echo 'This Method is Public';
        echo $this -> pubVar;
        echo $this -> proVar;
        echo $this -> priVar;
    }

    protected function proMethod()
    {
        echo 'This Method is Protected';
    }

    private function priMethod()
    {
        echo 'This Method is Private';
    }

    // accessing private properties
    public function accessingPrivateProperties()
    {
        echo $this -> priVar = 'Private Variable Accessed!';
        echo $this -> proVar = 'Protected Variable Accessed!';

        self::priMethod();
        self::proMethod();
    }

    # this method is not accessible from any child class
    final public function getHello(){
        echo 'This Method is Non-Accessible';
    }
}// ParentClass ends

class ChildClass extends ParentClass
{
    public function parentPropertyAccessing()
    {
        echo '<br>-----------------------------<br>';

        self::proMethod();
        echo $this -> proVar = 'Accessed From Child';
    }
}// ChildClass ends

# ParentClass Objects
$obj = new ParentClass();
$obj -> pubMethod();
echo $obj -> pubVar = '<br>Public Class Variable Updating';

$obj2 = new ParentClass();
$obj2 -> accessingPrivateProperties();

# ChildClass Objects
$childObj = new ChildClass();
$childObj -> parentPropertyAccessing();

/////////////////////////////////////////* Section 3 */////////////////////////////////////////////////

//class Greeting{
//
//    private $name;
//    public function __construct($name){
//        $this->name = $name;
//    }
//    public function getHello(){
//        echo "Hello ". $this->name . ". ";
//    }
//}
//
//class Hello extends Greeting{
//    private $message = "How's your day!";
//
//    public function welcomeMsg(){
//        echo $this->getHello() . $this->message;
//    }
//}
//
//$hello = new Hello("Tamjid");
//$hello->welcomeMsg();

/////////////////////////////////////////* Section 4 */////////////////////////////////////////////////

//class Truck{
//
//    public $fuelInTank;
//
//    public function fuel($gallon){
//        $this->fuelInTank += $gallon;
//        return $this;
//    }
//    public function totalRide($miles){
//        $gallons = $miles/60;
//        $this->fuelInTank -= ($gallons);
//        return $this;
//    }
//}
//
//$truck = new Truck();
//
//$fuel = $truck->fuel(10)->totalRide(50)->fuelInTank;
//
//echo "Fuel left: ". $fuel. " gallons.";

/////////////////////////////////////////* Section 5 */////////////////////////////////////////////////

//class Greeting{
//
//    private $name = "Guest";
//    public function __construct($name = null){
//        if($name){
//            $this->name = $name;
//        }
//    }
//    public function getHello(){
//        echo "Hello ". $this->name . ".";
//    }
//}
//
//$greeting = new Greeting("Tamjid");
//$greeting->getHello();

/////////////////////////////////////////* Section 6 */////////////////////////////////////////////////

//class Greeting2{
//
//    private $name = "Guest";
//    public function __construct($name = null){
//        if($name){
//            $this->name = $name;
//        }
//    }
//    public function getHello(){
//        echo "Class name: ".__CLASS__.".<br> Hello ". $this->name . ".";
//    }
//}
//
//$greeting = new Greeting2("Tamjid");
//$greeting->getHello();

/////////////////////////////////////////* Section 7 */////////////////////////////////////////////////

//abstract class Truck {
//    // অ্যাবস্ট্রাক্ট ক্লাসের মধ্যে সাধারন প্রোপার্টি
//    protected $tankValue;
//
//    // অ্যাবস্ট্রাক্ট ক্লাসের মধ্যে সাধারন মেথড
//    public function setTankValue($value) {
//        $this->tankValue = $value;
//    }
//
//    // অ্যাবস্ট্রাক্ট মেথড
//    abstract public function calcMiles();
//}

/////////////////////////////////////////* Section 8 */////////////////////////////////////////////////

//interface Truck {
//    // মেথড সমূহ
//    public function setTruckModel($name);
//
//    public function getTruckModel();
//}
//
//interface Wheels {
//    public function setHasWheels($bool);
//
//    public function getHasWheels();
//}
//
//class TruckDetails implements Truck, Wheels {
//    private $model;
//    private $hasWheels;
//
//    public function setTruckModel($name) {
//        $this->model = $name;
//    }
//
//    public function getTruckModel() {
//        return $this->model;
//    }
//
//    public function setHasWheels($bool) {
//        $this->hasWheels = $bool;
//    }
//
//    public function getHasWheels() {
//        return ($this->hasWheels)? "Has wheels" : "No wheels";
//    }
//}

/////////////////////////////////////////* Section 9 */////////////////////////////////////////////////

//class Truck {
//    protected $model;
//    protected $hasBody;
//    protected $numberOfTires;
//    protected $price;
//
//    // স্ট্রিং(string) টাইপ হিন্টিং
//    public function setModel(string $model){
//        $this->model = $model;
//    }
//
//    // বুলিয়ান(boolean) টাইপ হিন্টিং
//    public function setHasBody(bool $value){
//        $this->hasBody = $value;
//    }
//
//    // ইন্টিজার(integer) টাইপ হিন্টিং
//    public function setNumberOfTires(int $value){
//        $this->numberOfTires = $value;
//    }
//
//    // ফ্লোট(float) টাইপ হিন্টিং
//    public function setPrice(float $value){
//        $this->price = $value;
//    }
//}

/////////////////////////////////////////* Section 10 */////////////////////////////////////////////////

//class Truck {
//    protected $driver;
//
//    // constructor ফাংশনটি আর্গুমেন্ট হিসাবে Driver অবজেক্ট গ্রহন করবে
//    public function __construct(Driver $driver)
//    {
//        $this->driver = $driver;
//    }
//}
//
//class Driver {}
//
//$driver = new Driver();
//$truck  = new Truck($driver)

/////////////////////////////////////////* Section 11 */////////////////////////////////////////////////

//function calcMiles(array $models) {
//
//foreach($models as $item) {
//
//    echo $truckModel = $item[0] . " : ";
//    echo $numberOfMiles = $item[1] * $item[2] .  "<br/>";
//}

/////////////////////////////////////////* Section 12 */////////////////////////////////////////////////

//class Add {
//    static public $number;
//
//    static public function setNumber($value) {
//        self::$number += $value;
//    }
//}
//
//Add::setNumber(5);
//echo Add::$number;
//echo "<br>";
//Add::setNumber(5);
//echo Add::$number;
//echo "<br>";
//Add::setNumber(5);
//echo Add::$number;


?>
