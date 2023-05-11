<pre>
<?php   

class Kukainies{
    public $legcount;
    private $size;
    public $coler;
    private $lifeLeaght;

    function __construct(int $legcount, int $size, string $coler,int $lifeLeaght){
        $this->legcount = $legcount;
        $this->size = $size;
        $this->coler = $coler;
        $this->lifeLeaght = $lifeLeaght;
    }
    //get the stuff
    function getLegcount(){
        return $this->legcount;
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
    function setLegcount(int $legcount){
        $this->legcount = $legcount;
        return $this->legcount;
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
    //get and set the stuff?

    function propertieSetAndGet($propertie = "",$newValue = ""){
        if ($newValue == "" ){
            return $this->$propertie;
        }
        $this->$propertie = $newValue;
        return $this->$propertie;
    }

    //get and set but multipel stuff?
    function propertieSet($propertie = "",$newValue = ""){
        $propertieSet = true;
        while ($propertieSet = true){
            if ($propertie = ""){
                $propertieSet = false;
            }
            $this->$propertie = $newValue;
            return $this->$propertie;
        }
    }

    //specList Mostly for testing;
    function specList(){
        echo "\n";
        echo "legcount: " .$this->legcount ."\n";
        echo "size: " . $this->size ."\n";
        echo "color: " . $this->coler ."\n";
        echo "lifeLeaght: " . $this->lifeLeaght ."\n";
        echo "\n";
    }
}

$Kukainis1 = new Kukainies(8,24,"red",69);

$Kukainis1 ->setColer("Blue");
$Kukainis1 -> propertieSetAndGet("legcount",16);
$Kukainis1 ->specList();
echo $Kukainis1 -> propertieSetAndGet("legcount");