<?php
echo mktime(0,0,0,1,1,1971);
echo PHP_EOL;
echo strtotime("1 january 1971");
echo PHP_EOL;
echo time();
echo PHP_EOL;
echo strtotime("now");
echo PHP_EOL;
echo strtotime("+1 week");
echo PHP_EOL;
echo strtotime("+1month 2 weeks 2 days 4 hours 2 seconds");
echo PHP_EOL;

// date_diff function use

$date1 = new DateTime('1981');
$date2 = new DateTime('2022');

// $difarance_date = date_diff($date1, $date2);

$difarance_date = $date1->diff($date2);
echo $difarance_date->format('%y year %m month %d days');
