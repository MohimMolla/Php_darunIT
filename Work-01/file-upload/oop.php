<?php
class first{
	public $a,$b,$c;
	public function __construct($x,$y){
		$this->a=$x;
		$this->b=$y;
	}

	public function myNum(){
		$this->c=$this->a+$this->b;
		return $this->c;
	}
}
$m= new first(50,55);
// $m->a=50;
// $m->b=50;
echo $m->myNum();
?>
<br>
<?php
$n=new first(45,5);
echo $n->myNum();
?>
