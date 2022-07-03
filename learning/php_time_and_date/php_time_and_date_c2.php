<?php
date_default_timezone_set("asia/dhaka");
echo date('d/m/Y');
?>
<br>
<br>
<?php

echo date('dS M/Y');
//  10th april, 2022
?>
<br>
<br>
<?php
echo PHP_EOL;

echo "Time formet".' '. date('dS F/Y h:i:s');
//  10th april, 2022
?>
<br>
<br>
<?php
echo PHP_EOL;
echo "25 hours formet".' '. date('dS F/Y H:i:s');
// 24 hours formet
?>
<br>
<br>
<?php
echo PHP_EOL;
echo "set am/pm formet".' '. date('dS F/Y H:i:s a'); //And set A= capital leter(AM/PM)
// set am/pm 

?>
<br>
<br>
<?php
echo PHP_EOL;
echo "Year date count".' '. date('z l Y');
// Year date count

?>
<br>
<br>
<?php
echo PHP_EOL;
echo "how mutch day this month".' '. date('t');
// how mutch day this month