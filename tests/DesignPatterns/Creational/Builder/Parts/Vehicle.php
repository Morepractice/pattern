<?php 
    namespace Tests\DesignPatterns\creational\Builder\Parts;

    abstract class Vehicle
    {
        /**
         * @var object
         */
        private $data = [];

        /**
         * @param string $key
         * @param object $value
         */
        public function setParts($key,$value){
            $this->data[$key] = $value;
        }
    }