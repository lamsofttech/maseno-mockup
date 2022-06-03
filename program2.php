<?php
$car1 ='Pass';
$car2 = 'Pass';

if ($car1=='Pass' && $car2=='Pass') {
	echo "Accident";

}
elseif ($car1=='Pass' && $car2=='Stay'  || $car1=='Stay' && $car2=='Pass') {
             echo "Patience Pay";

}elseif ($car1=='Stay' && car2=='Stay') {
	echo "No Motion";
}

?>
