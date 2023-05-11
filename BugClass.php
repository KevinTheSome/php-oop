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
    function specList(){
        echo "\n";
        echo "name: " .$this->name ."\n";
        echo "size: " . $this->size ."\n";
        echo "color: " . $this->coler ."\n";
        echo "lifeLeaght: " . $this->lifeLeaght ."\n";
        echo "\n";
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
}

$Kukainis1 = new Kukainies(8,24,"red",69);
$cuska1 = new Snake(8,24,"red",69,TRUE);

$Kukainis1 ->setColer("Blue");
$Kukainis1 -> propertieSetAndGet("legcount",16);
$Kukainis1 ->specList();
echo $Kukainis1 -> propertieSetAndGet("NewproportyNeverSeen",64);
var_dump($Kukainis1);
$Kukainis1 ->specList();
var_dump($cuska1);