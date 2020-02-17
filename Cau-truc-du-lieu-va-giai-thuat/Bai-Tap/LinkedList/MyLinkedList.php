<?php
    require 'Node.php';

    class MyLinkedList
    {
        private $firstNode;
        private $lastNode;
        private $count;

        public function __construct()
        {
            $this->firstNode = null;
            $this->lastNode = null;
            $this->count = 0;
        }

        public function insertFirst($data)
        {
            $newNode = new Node($data);
            $newNode->next = $this->firstNode;
            $this->firstNode = $newNode;
            
            if ($this->lastNode === null) {
                $this->lastNode = $newNode;
            }
            $this->count++;
            return $this;
        }

        public function addFirst($data)
        {
            $newNode = new Node($data);
            $newNode->next = $this->firstNode;
            $this->firstNode = $newNode;
            if ($this->lastNode === null) {
                $this->lastNode = $newNode;
            }
            $this->count++;
            return $this;
        }

        public function insertLast($data)
        {
            if ($this->firstNode !== null) {
                $link = new Node($data);
                $this->lastNode->next = $link;
                $link->next = null;
                $this->lastNode = $link;
                $this->count++;
            } else {
                $this->insertFirst($data);
            }
            return $this;
        }

        public function addLast($data)
        {
            if ($this->firstNode === null) {
                $this->addFirst($data);
            } else {
                $newNode = new Node($data);
                $this->lastNode->next = $newNode;
                $newNode->next = null;
                $this->lastNode = $newNode;
                $this->count++;
            }
            return $this;
        }

        public function totalNodes()
        {
            return $this->count;
        }


        public function readList()
        {
            $listData = [];
            $current = $this->firstNode;
            while ($current !== null) {
                $listData[] = $current->readNode();
                $current = $current->next;
            }

            return $listData;
        }

        public function emptyList()
        {
            $this->firstNode = null;
            return $this;
        }

        public function readNode($nodePos)
        {
            if ($nodePos <= $this->count) {
                $current = $this->firstNode;
                $pos = 1;

                while ($pos !== $nodePos) {
                    if ($current->next === null) {
                        return null;
                    } else {
                        $current = $current->next;
                    }
                    $pos++;
                }

                return $current->data;
            } else {
                return null;
            }
        }

        public function deleteNode($key)
        {
            $current = $this->firstNode;
            $previous = $this->firstNode;

            while ($current->data !== $key) {
                if ($current->next === null) {
                    return null;
                } else {
                    $previous = $current;
                    $current = $current->next;
                }
            }

            if ($current === $this->firstNode) {
                if ($this->count === 1) {
                    $this->lastNode = $this->firstNode;
                }
                $this->firstNode = $this->firstNode->next;
            } else {
                if ($this->lastNode === $current) {
                    $this->lastNode = $previous;
                }
                $previous->next = $current->next;
            }
            $this->count--;
            return $this;
        }

        public function deleteFirst()
        {
            if ($this->firstNode !== null) {
                if ($this->firstNode->next !== null) {
                    $this->firstNode = $this->firstNode->next;
                } else {
                    $this->firstNode = null;
                }
                $this->count--;
                return true;
            }
            return false;
        }

        public function deleteLast()
        {
            if ($this->firstNode !== null) {
                if ($this->firstNode->next === null) {
                    $this->firstNode = null;
                    $this->count--;
                } else {
                    $previous = $this->firstNode;
                    $current = $this->firstNode->next;

                    while ($current->next !== null) {
                        $previous = $current;
                        $current = $current->next;
                    }
                    $current->next = null;
                    $this->count--;
                }
            }
        }

        public function get($value)
        {
            $current = $this->firstNode;
            while ($current->data !== $value) {
                if ($current->next === null) {
                    return null;
                } else {
                    $current = $current->next;
                }
            }
            return $current;
        }

        public function reverseList()
        {
            if ($this->firstNode !== null) {
                if ($this->firstNode->next !== null) {
                    $current = $this->firstNode;
                    $new = null;

                    while ($current !== null) {
                        $temp = $current->next;
                        $current->next = $new;
                        $new = $current;
                        $current = $temp;
                    }
                    $this->firstNode = $new;
                }
            }
            return $this;
        }
    }
?>