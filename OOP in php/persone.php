

<?php 

class person {
    public $name ;
    public $surename ;
    private $age ;

    public function __construct($name , $surename)
    {
        $this->name = $name;
        $this->surename = $surename;
    }

    //  privete propatice can not access ( set/get ) methode 
    public function setAge($age){
        $this->age;
    }
    public function getage(){
        return $this->age;
    } 
}

?>