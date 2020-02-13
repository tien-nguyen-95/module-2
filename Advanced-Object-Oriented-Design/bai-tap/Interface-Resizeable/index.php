<?php
    include_once('Circle.php');
    include_once('Rectangle.php');
    include_once('Square.php');
    $show = '';
    $shapes= [
            new Circle(),
            new Rectangle(),
            new Square()
        ];
    
    foreach($shapes as $value){
        $show .= $value->toString()."<br>After"
        .$value->resize()->toString()."<hr>";
    }
    include_once 'index.view.php';
?>