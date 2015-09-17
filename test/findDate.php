<?php 
$startDate = new DateTime( '2013-04-01' );    //intialize start date
$endDate = new DateTime( '2013-04-30' );    //initialize end date
$holiday = array('2013-04-11','2013-04-25');  //this is assumed list of holiday
$interval = new DateInterval('P1D');    // set the interval as 1 day
$daterange = new DatePeriod($startDate, $interval ,$endDate);
// var_dump($daterange);
foreach($daterange as $date){
	var_dump($date);
if($date->format("N") <6 AND !in_array($date->format("Y-m-d"),$holiday))
$result[] = $date->format("Y-m-d");
}
echo "<pre>";print_r($result);


 ?>