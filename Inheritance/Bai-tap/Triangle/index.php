<?php
    include 'Triangle.php';

    if(isset($_POST['submit'])){
        $side1 =  $_POST['side1'];
        $side2 =  $_POST['side2'];
        $side3 =  $_POST['side3'];
        $color = $_POST['color'];

        try{
            if($side1 == NULL || $side2 == NULL || $side3 == NULL || $color == NULL){
                throw new Exception("Hãy đầy đủ !!!");
            }

            if(!is_numeric($side1) || !is_numeric($side2) || !is_numeric($side3)){
                throw new Exception("Cạnh phải là số !!!");
            }

            if($side1 <=0 || $side2 <=0 || $side3 <=0){
                throw new Exception("Cạnh phải lớn hơn 0 !!!");
            }

            $triangle = new Triangle();
            $result = $triangle->setSide1($side1)->setSide2($side2)->setSide3($side3)->setColor($color)->toString();
        }
        catch(Exception $e){
            $error = $e->getMessage();
        }
        
    }
?>