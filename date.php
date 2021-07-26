<?php

//hour
//h(01 to 12)
//H(00 to 23)
//g(1 to 12)
//G(0 to 23)


//miniutes
//i(00 to 59);


//seconds
//s(00 to 59);


//meridiem
//a(am or pm);
//A(AM or PM);


//day
//d->14
//D->Wed
//m->07
//M->Jul
//y->21
//Y->2021
//l->Wednesday


echo date('d')."<br>"; //Day->14
echo date('D')."<br>"; //Day->Wed
echo date('m')."<br>"; //Month->07
echo date('M')."<br>"; //Month->Jul
echo date('Y')."<br>"; //Year->2021
echo date('y')."<br>"; //Year->21
echo date('l')."<br>"; //Day of the week->Wednesday


echo date('Y/m/d')."<br>";  //2021/07/14
echo date('m/d/Y')."<br>";  //07/14/2021

echo date('h')."<br>"; //hour->07
echo date('i')."<br>"; //min->40
echo date('s')."<br>"; //second->11
echo date('a')."<br>";  //meridiem am or pm

//set timezone
date_default_timezone_set("Asia/dhaka");
echo date('h:i:sa')."<br>"; //07:40:11am
echo date("H:i:s")."<br>";  //07:40:11
echo date("Y-m-d H:i:s")."<br>";   //2021-07-14 07:40:11

/***
 * *
 *  date("F j, Y, g:i a") effective date time format
 * *
***/
echo date("F j, Y, g:i a")."<br>";  //July 14, 2021, 7:40 am



//strtotime-->>2014-04-15 10:30:00pm
$day = strtotime("10:30pm April 15 2014");
echo $day."<br>";
echo date("Y-m-d h:i:sa", $day);

?>

