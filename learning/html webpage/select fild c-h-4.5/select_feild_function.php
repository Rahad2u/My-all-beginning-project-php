<?php


function displayOptions($option, $selectedValues){
    foreach($option as $option){
        $selected="";
       
        if(in_array(ucwords($option), $selectedValues)){
            $selected="selected";
        }
        printf("<option value='%s' %s>%s</option>\n",ucwords($option), $selected, ucwords($option));
    }
}
