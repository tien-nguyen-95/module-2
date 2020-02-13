<?php
    $a = new SplDoublyLinkedList;
    $arr=[2,6,4,8,3,5,1];
    
    // Thêm
    for($i = 0 ; $i < count($arr) ; $i++){
        $a->add($i,$arr[$i]);
        echo " ".$a->offsetGet($i);
    }
    //Tìm kiếm
    echo "<br>".$a->offsetGet(3)."<br>";
    //Sửa
    echo "<br>".$a->offsetSet(3,10)."<br>";
    for($i = 0 ; $i < $a->count() ; $i++){
       
        echo " ".$a->offsetGet($i);
    }
    echo "<br>";
   // xóa
   $a->rewind();
   $delIndex=3;
   for($i=0  ;$i < $a->count()-1 ; $i++){
        if($i >= $delIndex){
            $a->offsetSet($i,$a->offsetGet($i+1));
        }
        $a->next();
    }
    $a->pop();
    for($i = 0 ; $i < $a->count() ; $i++){
       
        echo " ".$a->offsetGet($i);
    }
