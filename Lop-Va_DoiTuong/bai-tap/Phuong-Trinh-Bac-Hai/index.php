<?php
    class QuadraticEquation
    {
        private $a;
        private $b;
        private $c;

        public function __construct(float $a, float $b, float $c)
        {
            $this->a = $a;
            $this->b = $b;
            $this->c = $c;
        }
       
        public function getDiscriminant()
        {
            return $this->b ** 2 - (4 * $this->a * $this->c);
        }
    
        public function getRoot1()
        {
            return (-$this->b + pow($this->getDiscriminant(), 0.5)) / (2 * $this->a);
        }
    
        public function getRoot2()
        {
            return (-$this->b - pow($this->getDiscriminant(), 0.5)) / (2 * $this->a);
        }
    
        public function getBothRoot()
        {
            return (-$this->b) / (2 * $this->a);
        }
    }

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuadraticEquation</title>
</head>
<body>
    <form method="POST">
        Nhập a:<br><input type="text" name="a" value="<?= $a?? NULL?>" ><br><br>
        Nhập b:<br><input type="text" name="b" value="<?= $b?? NULL?>" ><br><br>
        Nhập c:<br><input type="text" name="c" value="<?= $c?? NULL?>" ><br><br>
        <span style="color: red;"><?= $error?? NULL ?></span><br>
        <input type="submit" value="Kết quả" name='submit'><br>
        <span style="color: blue;"><?= $result?? NULL ?></span><br>
    </form>
</body>
</html>