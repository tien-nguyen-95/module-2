<?php
     namespace Model;
     class Image
    {
        public static function uploadImg($file)
        {
            $type = pathinfo($file['name'], PATHINFO_EXTENSION);
            if (in_array(strtolower($type), ['png', 'jpg', 'jpeg', 'gif'])) {
                $data = file_get_contents($file['tmp_name']);
                $base64 = "data:image/$type;charset=utf-8;base64," . base64_encode($data);
                return  $base64;
            }
        }
    }
    
?>