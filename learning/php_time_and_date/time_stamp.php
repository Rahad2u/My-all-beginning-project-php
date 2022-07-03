<?php

echo time();
echo PHP_EOL;
echo mktime(0,0,0,4,13,2022);
echo PHP_EOL;
date_default_timezone_set('Asia/Dhaka');
echo mktime(0,0,0,4,13,2022);
echo PHP_EOL;
echo (86400-800)/(60*60);
echo PHP_EOL;
echo (mktime(0,0,0,4,14,2006) - mktime(0,0,0,4,13,2022))/(24*60*60);
echo PHP_EOL;

