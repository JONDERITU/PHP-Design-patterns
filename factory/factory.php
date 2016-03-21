<?php
class Television
{
    private $tvMake;
    private $tvModel;

    public function __construct($make, $model)
    {
        $this->tvMake = $make;
        $this->tvModel = $model;
    }

    public function getMakeAndModel()
    {
        return $this->tvMake . ' ' . $this->tvModel;
    }
}

class TelevisionFactory
{
    public static function create($make, $model)
    {
        return new Television($make, $model);
    }
}

// have the factory create the Television object
$samsung = TelevisionFactory::create('samsung', 'D500X');

print_r($samsung->getMakeAndModel()); // outputs "samsung D500X"