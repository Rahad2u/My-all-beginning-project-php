<?php

$string= "Bangladesh is a small and beautifullllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll country in South Asia";
$s_w= wordwrap($string, 16/*word lenth*/,"<br/> \n",true);
echo $s_w;