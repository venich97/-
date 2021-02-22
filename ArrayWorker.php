<?php
    class ArrayWorker {
        protected $array=array();
        
            public function __construct() {
            $this->fill();
            $this->reindex();
        }
        
        protected function fill() {
            for ($i=0; $i<10; $i++){
                $this->array[$i]=mt_rand(0,100);
            }
        }
        
        protected function reindex() {
            $min_index = $this->min_index();
            $max_index = $this->max_index();
            $temp = $this->array[$min_index];
            $this->array[$min_index] = $this->array[$max_index];
            $this->array[$max_index] = $temp;
        }
        
        public function dump() {
            $max_index = $this->max_index();
            $min_index = $this->min_index();
            $sum = $min_index + $max_index;
            print "Сумма индексов максимального и минимального значений равна $sum";
        }
        
        protected function min_index() {
        $min_index = 0;
        $min = $this->array[0];
        for ($i=1; $i<10; $i++){
        if ($min > $this->array[$i]) {
                    $min_index = $i;
                    $min = $this->array[$i];
            }
        }
        return $min_index;
        }
        
        protected function max_index() {
            $max_index = 0;
             $max = $this->array[0];
             for ($i=1; $i<10; $i++){
                if ($max < $this->array[$i]) {
                    $max_index = $i;
                    $max = $this->array[$i];
                }
            }
            return $max_index;
        }
        
    }

?>
