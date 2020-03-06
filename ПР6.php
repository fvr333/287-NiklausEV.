<?php

class Snake {
	public $map;
	public $pos;

	public function __construct ($map) {
        $this->map=$map;
		$this->pos=0;
	}
	public function move ($stop) {
	    $this->pos = strpos ($this->map,$stop,$this->pos) + strlen ($stop);
	}
	public function eat ($stop){
		$start = $this->pos;
		$this->move ($stop);
		for ($i = $start; $i < $this->pos - strlen($stop); $i++) {
			$this->map[$i] = ">";
			if ($i>0 ){
			   $this->map[$i-1] = "=";
			}
		}
	}
}

$snake = new Snake ('>--------------------------------------------------------------');
echo $snake->map;
echo "<br>";

$snake = new Snake ('>--------|-----------------------------------------------------');
$snake->move ('>');
$snake->eat ('|');
echo $snake->map;
echo "<br>";

$snake = new Snake ('>-----------------|---------------------------------------------');
$snake->move ('>');
$snake->eat ('|');
echo $snake->map;
echo "<br>";

$snake = new Snake('>--------------------------|------------------------------------');
$snake->move ('>');
$snake->eat ('|');
echo $snake->map;
echo "<br>";

$snake = new Snake('>----------------------------------|----------------------------');
$snake->move ('>');
$snake->eat ('|');
echo $snake->map;
echo "<br>";

$snake = new Snake('>------------------------------------------|--------------------');
$snake->move ('>');
$snake->eat ('|');
echo $snake->map;
echo "<br>";

$snake = new Snake('>---------------------------------------------------|-----------');
$snake->move ('>');
$snake->eat ('|');
echo $snake->map;
echo "<br>";

$snake = new Snake('>-----------------------------------------------------------|---');
$snake->move ('>');
$snake->eat ('|');
echo $snake->map;
echo "<br>";