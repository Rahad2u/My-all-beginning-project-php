<?php

echo time();
?>
<br>
<br>
<?php
echo date('D/M/Y');
?>
<br>
<br>
<?php
echo microtime(true);
?>
<br>
<br>
<?php
var_dump (microtime(false));
?>
<br>
<br>
<?php

$microtime = microtime(true);
printf("%10.5f",$microtime);
?>
<br>
<br>
<?php
$start_microtime = microtime(true);
factorial(100);
$end_microtime   = microtime(true);
$ex_time         = $end_microtime - $start_microtime;
printf("%10.8f",$ex_time);
function factorial($n){
    $result = 1;
    for($i=1; $i<=$n; $i++){
        $result*=$i;
    }
}