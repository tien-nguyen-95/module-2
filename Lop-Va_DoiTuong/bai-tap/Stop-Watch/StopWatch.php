<?php
    class StopWatch{
        private $startTime;
        private $endTime;
    
        public function getStart()
        {
            return $this->startTime;
        }
    
        public function getEnd()
        {
            return $this->endTime;
        }
    
        public function start()
        {
            $this->startTime = microtime(true);
        }
    
        public function stop()
        {
            $this->endTime = microtime(true);
        }
    
        public function getElapsedTime()
        {
            return $this->getEnd() - $this->getStart();
        }
    }
    
    ?>