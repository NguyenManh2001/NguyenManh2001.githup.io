<?php
    $files = scandir('result');
        for($i = 3;$i < count($files); $i++){
        $items = explode('_',$files[$i])[6];
    }

    
?>