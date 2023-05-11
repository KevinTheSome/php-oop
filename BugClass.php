<pre>
<?php   

class Kukainies{
    public $name;
    private $size;
    public $coler;
    private $lifeLeaght;

    function __construct(string $name, int $size, string $coler,int $lifeLeaght){
        $this->name = $name;
        $this->size = $size;
        $this->coler = $coler;
        $this->lifeLeaght = $lifeLeaght;
    }
    //get the stuff
    function getname(){
        return $this->name;
    }
    function getSize(){
        return $this->size;
    }
    function getColer(){
        return $this->coler;
    }
    function getLifeLeaght(){
        return $this->lifeLeaght;
    }
    //set the stuff
    function setname(int $name){
        $this->name = $name;
        return $this->name;
    }
    function setSize($size){
        $this->size = $size;
        return $this->size;
    }
    function setColer($coler){
        $this->coler = $coler;
        return $this->coler;
    }
    function setLifeLeaght($lifeLeaght){
        $this->lifeLeaght = $lifeLeaght;
        return $this->lifeLeaght;
    }
    //get and set proportys

    function propertieSetAndGet($propertie = "",$newValue = ""){
        if ($newValue == "" ){
            return $this->$propertie;
        }
        $this->$propertie = $newValue;
        return $this->$propertie;
    }

    //specList Mostly for testing;
    function getALL(){
        var_dump($this);
    }
    function quickSummary(){
        echo "\n";
        echo "name: " .$this->name."\n";
        echo "size: " .$this->size."\n";
        echo "color: " .$this->coler."\n";
        echo "lifeLeaght: " .$this->lifeLeaght."\n";
    }
}

class Snake extends Kukainies{
    public $Posienes;

    public function __construct(string $name, int $size, string $coler,int $lifeLeaght,bool $Posienes){
        parent::__construct($name,$size,$coler,$lifeLeaght);
        $this->Posienes = $Posienes;
    }

    function getPosienes(){
        return $this->Posienes;
    }
    function setPosienes($Posienes){
        $this->Posienes = $Posienes;
        return $this->Posienes;
    }
    function quickSummary(){
        parent::quickSummary();
        echo "Posienes: " .$this->Posienes."\n";
    }
}

$Kukainis1 = new Kukainies("zirneklis",8,"LightGray",8);
$cuska1 = new Snake("Odze",16,"black",8,TRUE);

$Kukainis1 ->setColer("Blue");
$Kukainis1 -> propertieSetAndGet("legcount",16);
$Kukainis1 -> propertieSetAndGet("legcount");
$Kukainis1 ->getALL();
$Kukainis1 -> propertieSetAndGet("NewproportyNeverSeen",64);
$Kukainis1 ->getALL();
$cuska1 ->getALL();

$Kukainis1 ->quickSummary();
echo "\n";
$cuska1 ->quickSummary();