<?php
    function Convert($num) {
        $string = "";
        $nums = [
            0                   => 'zero',
            1                   => 'one',
            2                   => 'two',
            3                   => 'three',
            4                   => 'four',
            5                   => 'five',
            6                   => 'six',
            7                   => 'seven',
            8                   => 'eight',
            9                   => 'nine',
            10                  => 'ten',
            11                  => 'eleven',
            12                  => 'twelve',
            13                  => 'thirteen',
            14                  => 'fourteen',
            15                  => 'fifteen',
            16                  => 'sixteen',
            17                  => 'seventeen',
            18                  => 'eighteen',
            19                  => 'nineteen',
            20                  => 'twenty',
            30                  => 'thirty',
            40                  => 'forty',
            50                  => 'fifty',
            60                  => 'sixty',
            70                  => 'seventy',
            80                  => 'eighty',
            90                  => 'ninety',
        ];
        switch($num){
            case 0:
            case $num < 21:
                $string = $nums[$num];
            break;
            case $num < 100:
                if($num % 10 == 0) $string = $nums[$num];
                else {
                    $tens = floor($num / 10) *10;
                    $ones = $num % 10;
                    $string = $nums[$tens]." ".$nums[$ones];
                }
            break;
            case $num < 1000:
                $hundreds = floor($num/100);
                if($num % 100 == 0 ) {
                    $string = $nums[$hundreds]." hundred";
                }
                else {
                    $tensAndOnes = $num % 100;
                    $string = $nums[$hundreds]. " hundred " . Convert($tensAndOnes);
                }
            break;
        }
        return $string;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["num"];

        if($num >=0 || $num <1000) {
            $readNum = Convert($num);
            echo "<br> $readNum";
        }
    }
?>