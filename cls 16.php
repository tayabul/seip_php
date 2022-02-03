
<?php

    class Car{
        public $data = 'Toyota';
        // private $data = 'Toyota';
        // protected $data = 'Toyota';
        private $privacy = 'Call Private from parent class';
        protected $privacy1 = 'Call Protected from child class';

        public function bmw(){
            echo 'This Nice Car.'.'<br/>';
            echo "<h2>$this->privacy</h2>";
        }
    }

    // $object = new Car;
    // echo $object->data;

    class MyCar extends Car{
        // public $data = 'Sujuky';
        // protected $data1 = 'Sujuky';
        // private $data1 = 'Sujuky';

        public function getcolor(){
            // return $this->data1;
            return "<h2>$this->privacy1</h2>";          // ques: method a kkon return krte hobe r kkon echo krte hobe.
            
        }

    }

    $obj = new MyCar;
    echo $obj->data.'<br/>';
    $obj->bmw();
    echo $obj->getcolor();



?>