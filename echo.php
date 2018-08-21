<?php
foreach(timezone_abbreviations_list() as $abbr => $timezone){
        foreach($timezone as $val){
                if(isset($val['timezone_id'])){
                        var_dump($abbr,$val['timezone_id']);
                }
        }
}

date_default_timezone_set('America/Mexico_City');
//$ahora = getdate();
$ahora=getdate(date("U"));
print_r($ahora);
print "<br>";
echo $ahora[hours],':',$ahora[minutes],':',$ahora[seconds];
print "<br>";


// Return date/time info of a timestamp; then format the output
$mydate=getdate(date("U"));
echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year] <br>";

if($ahora["hours"] < 7)
echo "It is not time to be awake
\
n";
else if($ahora["hours"] < 13)
echo "It is time to work
\
n";
else if($ahora["hours"] < 16)
echo "It is time to have lunch
\
n";
else if($ahora["hours"] < 20)
echo "It is time to work
\
n";
else if($ahora["hours"] < 23)
echo "It is time to have dinner
\
n";
else
echo "It is time to sleep
\
n";
?>