<?php
$one=55;
$two=60;
$three=45;

if($one>$two && $one>$three){
	echo "  $one is greater than $two and $three";
}
else if ($two>$one && $two>$three){
	echo " $two is greater than $one and $three";
}
else{
	echo " $three is greater number";
}
?>