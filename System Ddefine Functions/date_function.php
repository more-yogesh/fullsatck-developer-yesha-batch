<?php
// echo "Unix Current Timestamp: ";
// echo time();

date_default_timezone_set('asia/kolkata');
// echo date("d l, F-Y h:i:s:u A");

// echo $independence = mktime(0,0,0,8,15,1947);


// echo date("d l,m-Y", $independence);


$nextDate =  date_create("2021-02-09"); //mktime(date('h'), date('i'), date('s'), date('m'), date('d')+10, date('y'));//mktime(date('h'), date('i'), date('s'), date('m'), date('d')+10, date('y'));
$currentDate = date_create("2021-02-12");

$date =  date_diff($nextDate, $currentDate);

echo $date->format("%R%a Days");


// $date1=date_create("2013-03-15");
// $date2=date_create("2013-12-12");
// echo $diff=date_diff($date1,$date2);
// echo date("d l,m-y", $nextDate);


// echo date("dl-m-Y",strtotime("+1 week"));
echo date("dl-m-Y", strtotime("next sunday"));
