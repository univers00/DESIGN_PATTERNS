<?php
require_once __DIR__.'/../vendor/autoload.php';

interface HousePlan
{
    public function setBasement(string $basement);
    public function setStructure(string $structure);
    public function setRoof(string $roof);
    public function setInterior(string $interior);
}

class House implements HousePlan
{

    public string $basement;
    public string $structure;
    public string $roof;
    public string $interior;

    public function setBasement(string $basement)
    {
        $this->basement = $basement;
    }
    public function setStructure(string $structure)
    {
        $this->structure = $structure;
    }
    public function setRoof(string $roof)
    {
        $this->roof = $roof;
    }
    public function setInterior(string $interior)
    {
        $this->interior=$interior;
    }


}

interface HouseBuilder
{
    public function buildBasement();
    public function buildStructure();
    public function buildRoof();
    public function buildInterior();
    public function getHouse();
}

class IglooHouse implements HouseBuilder
{
    private House $house;

    public function __construct()
    {
        $this->house =new House;
    }
    public function buildBasement()
    {
        $this->house->setBasement("basement igloo");
    }
    public function buildStructure()
    {
        $this->house->setStructure("structure igloo");
    }
    public function buildRoof()
    {
        $this->house->setRoof("roof igloo");
    }
    public function buildInterior()
    {
        $this->house->setInterior("interior igloo");
    }
    public function getHouse():House
    {
       return $this->house;
    }
}
class TipiHouse implements HouseBuilder
{
    private House $house;

    public function __construct()
    {
        $this->house = new House();
    }
    public function buildBasement()
    {
        $this->house->setBasement("basement tipi house");
    }
    public function buildStructure()
    {
        $this->house->setStructure("structure tipi house");
    }
    public function buildRoof()
    {
        $this->house->setRoof("roof tipi house");
    }
    public function buildInterior()
    {
        $this->house->setInterior("interior tipi house");
    }
    public function getHouse():House
    {
        return $this->house;
    }
}

class director
{
    private HouseBuilder $houseBuilder;

    public function __construct(HouseBuilder $houseBuilder)
    {
        $this->houseBuilder = $houseBuilder;

    }
    public function constructHouse():void
    {
        $this->houseBuilder->buildBasement();
        $this->houseBuilder->buildStructure();
        $this->houseBuilder->buildRoof();
        $this->houseBuilder->buildInterior();
    }
    public function makeHouse():House
    {
        return $this->houseBuilder->getHouse();
    }
}


$director = new director(new TipiHouse());
$director->constructHouse();
$house = $director->makeHouse();
var_dump($house);