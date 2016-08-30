<?php
namespace shapes;

interface itriangle{
    // set the contract
    // method should have no body
    public function getSides($a, $b, $c);
}

class Triangle extends Shapes{
    // each triangle base and height
    private $base;
    private $height;

    //constructor of the triangle
    // it initializes a shape name as "triangle" and the base , height
    public function __construct($base, $height){
        // parent constructor call
        parent::__construct("triangle");
        $this->base = $base;
        $this->height = $height;
    }

    //get area of triangle(1/2base * height)
    public function getTriangleArea($base, $height){
        $this->base = $base;
        $this->height = $height;
        return $height * $base / 2;
    }

    // get the perimeter (a+b+c)
    public function getTrianglePerimeter($a, $b, $c){
        return $a + $b + $c;
    }
}
class ScaleneTriangle extends Triangle implements itriangle{
//    check if it is a scalene
    public function getSides($a, $b, $c){
        if ($a != $b and $b != $c and $a != $c){
            echo "I am a triangle with unequal sides";
        }
    }
}
class EquilateralTriangle extends Triangle implements itriangle{
    // check if it is an equilateral
    public function getSides($a, $b, $c){

        if ($a == $b and $b == $c){
            echo "I am a triangle with all equal sides";
    }
    }
}class IsoscelesTriangle extends Triangle implements itriangle{
    // check if it is isosceles
    public function getSides($a, $b, $c){
        if ($a == $b and $a != $c )
        echo "I am a triangle with two equal sides";
    }
}

// the object
$triangleobject = new Triangle(4,4,4);
echo $triangleobject->getName() . "  area = " . $triangleobject->getTrianglePerimeter(6,6,6);

?>