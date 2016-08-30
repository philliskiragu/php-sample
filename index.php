<?php
namespace shapes;
class Shapes
{
    // each shape has a name
    protected $name;

    // constructor that will require a name
    public function __construct($name){
        $this->name = $name;
    }

    // set a name for a shape
    public function setName($name){
        return $this->name = $name;
    }

    // get a name for a shape
    public function getName(){
        return $this->name;
    }
}

class Circle extends Shapes {
    // circle has a radius as smallest unit
    private $radius;

    //constructor of the circle
    // it initializes a shape name as "circle" and the radius
    public function __construct($radius){
        // parent constructor call
        parent::__construct("circle");
        $this->radius = $radius;
    }


    // set radius
    function setRadius($radius) {
        $this->radius = $radius;
    }

    // get radius
    function getRadius() {
        return $this->radius;
    }

    // PI is a constant value in circle calculations
    const PI = 3.142;

    // get circle area ( pi * r^2)
    public function getCircleArea($radius){
        $this->radius = $radius;
        return pow($this->radius, 2) * self::PI;
    }

    // get circle perimeter (2 * pi * r)
    public function getCirclePerimeter($radius){
        $this->radius = $radius;
        return 2 * $this->radius * self::PI;
    }

}
// creating an object
$shapeObject = new Circle(7);
echo $shapeObject->getName() . "  area = " . $shapeObject->getCircleArea($shapeObject->getRadius());

?>