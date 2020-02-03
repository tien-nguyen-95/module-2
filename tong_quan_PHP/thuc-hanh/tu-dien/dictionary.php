<?php
$dictionary = array(
    "hello"=>"xin chào", 
    "how"=>"thế nào", 
    "book"=>"quyển vở", 
    "computer"=>"máy tính");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchword = $_POST["search"]; 
    $flag = 0;
    foreach($dictionary as $word => $description) {
        if($word == $searchword){
            echo "Từ: " . $word . ". <br/>Nghĩa của từ: " . $description;
            echo "<br/>";
            $flag = 1;
        }
    } 

    if($flag == 0){
        echo "Không tìm thấy từ cần tra.";
    }
}
?>