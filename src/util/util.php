<?php
    class RandomNumbers {
        
        private $numbers = array();

        public function getNumbers(){
            sort($this->numbers);
            return $this->numbers;
        }

        public function setNumbers($arg){
            $this->numbers[] = $arg;
        }

        public function generate($x, $y){
            while (count($this->getNumbers()) < 6){
                $num = rand(1, 60);

                in_array($num, $this->getNumbers()) ? : $this->setNumbers($num); 

            }
        }

    }
?>