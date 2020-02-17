<?php
    class MyList {
        public int $size;
        const DEFAULT_CAPACITY = 10;
        public $mylist;

        public function __construct()
        {
            $this->size = 0;
            $this->capacity = self::DEFAULT_CAPACITY;
            $this->mylist = array();
        }

        public function MyList($capacity)
        {
            $this->capacity = $capacity;
        }

        public function add($i, $e)
        {
            if ($this->isIndex($i) || $i < $this->capacity) {
                if ($this->contains($e)) {
                    $this->addE($e);
                }
                else {
                    array_splice($this->mylist,$i,0,$e);
                    $this->size++;
                }
            }
            else {
                die('die');
            }            
        }

        public function remove($i)
        {
            if ($this->isIndex($i)) {
                array_splice($this->mylist,$i,1);
                $this->size--;
            }
            else{
                die('Not be index');
            }
        }

        public function size()
        {
            return $this->size;
        }

        public function clone ()
        {
           return $this->mylist;
        }

        public function contains($e)
        {
            return in_array($e, $this->mylist);
        }

        public function indexOf($e)
        {
            return array_search($e, $this->mylist);
        }

        public function addE($e)
        {
            $i = $this->indexOf($e);
            $this->mylist[$i] = $e;
        }

        public function ensureCapacity()
        {
            return $this->capacity;
        }

        public function get($i)
        {
            return $this->isIndex($i) ? $this->mylist[$i] : die('Not isIndex');
        }

        public function clear()
        {
            $this->mylist = [];
            $this->size = 0;
        }

        public function isIndex($i)
        {
            return preg_match("/^[0-9]+$/",$i) && $i < $this->size();
        }
    }

?>