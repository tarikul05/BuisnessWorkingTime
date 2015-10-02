<?php 
include 'Calculator.php';

use \BusinessDays\Calculator;

$holidays = [
    new \DateTime('2000-12-31'),
    new \DateTime('2001-01-01')
];

$freeDays = [
    new \DateTime('2000-12-28')
];

$freeWeekDays = [
    Calculator::SATURDAY,
    Calculator::SUNDAY
];

$calculator = new Calculator();
$calculator->setStartDate(new \DateTime('2000-12-27'));
$calculator->setFreeWeekDays($freeWeekDays); // repeat every week
$calculator->setHolidays($holidays);         // repeat every year
$calculator->setFreeDays($freeDays);         // don't repeat

$calculator->addBusinessDays(3);             // add X working days

$result = $calculator->getDate();            // \DateTime
echo $result->format('Y-m-d');               // 2001-01-03

 ?>