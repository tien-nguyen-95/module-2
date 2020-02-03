<?php
$customerlist = [
    "1" => array("ten" => "Nguyễn Quang A", 
                 "ngaysinh" => "01-01-1991", 
                 "diachi" => "Hà Nội", 
                 "anh" => "images/image1.jpg"),
    "2" => array("ten" => "Nguyễn Quang B", 
                 "ngaysinh" => "02-02-1992", 
                 "diachi" => "Bắc Giang", 
                 "anh" => "images/image2.jpg"),
    "3" => array("ten" => "Nguyễn Quang C", 
                 "ngaysinh" => "03-03-1993", 
                 "diachi" => "Nam Định", 
                 "anh" => "images/image3.jpg"),
    "4" => array("ten" => "Nguyễn Quang D", 
                  "ngaysinh" => "04-04-1994", 
                  "diachi" => "Hà Tây", 
                  "anh" => "images/image4.jpg"),
    "5" => array("ten" => "Nguyễn Quang E", 
                  "ngaysinh" => "05-05-1995", 
                  "diachi" => "Huế", 
                  "anh" => "images/image5.jpg")
];
   foreach($customerlist as $key => $values){
    echo "<tr>";
    echo "<td>".$key."</td>";
    echo "<td>".$values['ten']."</td>";
    echo "<td>".$values['ngaysinh']."</td>";
    echo "<td>".$values['diachi']."</td>";
    echo "<td><image src ='".$values['anh']."' width = '60px' height ='60px'/></td>";
    echo "</tr>";
  }
?> 