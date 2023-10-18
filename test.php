<?php
$date = date('Y-m-d', time());
$calender = "2023-05-07";

if($calender >= $date){
    echo "valide";
}else{
   echo "not valid";
}
