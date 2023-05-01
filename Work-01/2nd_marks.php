<?php
$marks=65;
// if($marks>=80 && $marks<=100){
// 	echo "You got A+";
// }
// elseif($marks>=70 && $marks<=79){
// 	echo "You got A";
// }
// elseif($marks>=60 && $marks<=69){
// 	echo "You got A-";
// }
// elseif($marks>=50 && $marks<=59){
// 	echo "You got B";
// }
// elseif($marks>=40 && $marks<=49){
// 	echo "You got C";
// }
// elseif($marks>=30 && $marks<=39){
// 	echo "You got D";
// }
// elseif($marks>=0 && $marks<=29){
// 	echo "You got F";
// }
// else{echo "You are absent";}
switch ($marks) {
	case($marks>=80 && $marks<=100):
		echo "You got A+";
		break;
	case($marks>=70 && $marks<=79):
		 	echo "You got A";
		break;
	case($marks>=60 && $marks<=69):
			echo "You got A-";
		break;
	case($marks>=50 && $marks<=59):
		echo "You got B";
		break;
	case($marks>=40 && $marks<=49):
		echo "You got C";
		break;
	case($marks>=30 && $marks<=39):
		echo "You got D";
		break;
	case($marks>=0 && $marks<=29):
		echo "You got F";
		break;
default: echo "You are absent";
}
?>
<br>
<?php
for($i=1; $i<=100; $i++ ){
	echo $i."<br>";
}
?>