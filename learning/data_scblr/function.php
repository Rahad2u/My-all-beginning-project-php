<?php

function displayKey($key){
        printf(" value = '%s' ",$key);
}
function datascrm($original_d, $key){
        $original_key="abcdefghijklmnopqrstuvwxyz1234567890";
        $data='';
        $lenth= strlen($original_d);
        for($i=0; $i<$lenth; $i++){
                $current_C = $original_d[$i];
                $position = strpos($original_key, $current_C);
                if($position !== false){
                        $data .= $key[$position];
                }else{
                        $data .= $current_C;
                }
        }
        return $data;
}