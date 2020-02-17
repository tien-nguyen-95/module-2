<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[Bài tập] Triển khai các phương thức của LinkedList</title>
</head>
<body>
    <?php
        require 'MyLinkedList.php';
        $linkedList = new MyLinkedList();
        $totalNodes = $linkedList->insertFirst(2)->insertLast(3)->insertFirst(1)->insertLast(4)->totalNodes();
        $readList = implode(" ",$linkedList->readList());
        echo "List :$readList<br>Node: $totalNodes";
        $linkedList->deleteFirst();
        $readList = implode(" ",$linkedList->readList());
        $totalNodes=$linkedList->totalNodes();
        echo "<br>Xoá :<br>List :$readList<br>Node: $totalNodes";
    ?>
</body>
</html>