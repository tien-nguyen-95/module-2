<?php
    include 'QuadraticEquation.php';
    if(isset($_POST["submit"])){
        $a =  $_POST["a"];
        $b =  $_POST["b"];
        $c =  $_POST["c"];

        try{

            if( $a==null || $b==null || $c==null){
                throw new Exception("Hãy nhập đầy đủ");
            }

            if($a==0){
                throw new Exception("Nhập a khác 0");
            }
            
            if(!is_numeric($a) || !is_numeric($b) || !is_numeric($c))
            {
                throw new Exception("Hãy nhập số");
            }
            
            $quadratic = new QuadraticEquation($a, $b, $c);
            $delta = $quadratic->getDiscriminant();

            if ($delta == 0) { 
                $result = 'x1 = x2 = ' . $quadratic->getBothRoot();
            } else if ($delta < 0) {  
                $result = 'Phương trình vô nghiệm';
            } else { 
                $result = 'x1 = ' . $quadratic->getRoot1() . '<br>'
                        . 'x2 = ' . $quadratic->getRoot2() . '<br>';
            }
        }
        catch(Exception $e){
            $error = $e->getMessage();
        }
    }
?>