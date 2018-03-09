<?php
//How to get the day 3 days from now:
$today = date("j");
$thisMonth = date("n");
$thisYear = date("Y");
echo date("F j Y", mktime(0,0,0, $thisMonth, $today+3, $thisYear)); 
 
//1 week from now:
list($today,$thisMonth,$thisYear) = explode(" ", date("j n Y"));
echo date("F j Y", mktime(0,0,0, $thisMonth, $today+7, $thisYear));
 
//4 months from now:
list($today,$thisMonth,$thisYear) = explode(" ", date("j n Y"));
echo date("F j Y", mktime(0,0,0, $thisMonth+4, $today, $thisYear)); 
 
//3 years, 2 months and 35 days from now:
list($today,$thisMonth,$thisYear) = explode(" ", date("j n Y"));
echo date("F j Y", mktime(0,0,0, $thisMonth+2, $today+35, $thisYear+3));
?>