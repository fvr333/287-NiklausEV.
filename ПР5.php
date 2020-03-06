<?

include 'VarDumper.php';

class pangolin {
	public $legs = 2;
	public $hands = 2;
	public $tired = 0;
	public $ants = 100; // 100 кг муравьёв.
	public $water = 1000; // 1000 литров воды.
	public $sleep = 0;
	public $life = 1;
	public $def = 1;

	// Панголин идёт.
    public function go(){
		return $this->tired++;
	}

	// Панголин прыгает.
    public function jump(){
		return $this->tired++;
		 
	}
	// Панголин кушает муравьёв.
    public function eat(){
		return $this->ants--;
	 
	}
	// Панголин спит.
    public function sleep(){
		return $this->sleep++;
		return $this->def++;
        return $this->tired--;
    }
    // Панголин защищается.
	public function defence(){
		return $this->def--;
	}	
	// Панголин пьёт воду.	
	public function drink(){
		return $this->water--; 
	}
	// Панголин умирает.	 
    public function dead(){
		return $this->life--;
    }
    }

$pangolin = new pangolin();

echo '<pre>';
print_r($pangolin);
echo '</pre>';
$pangolin->go();
$pangolin->jump();
$pangolin->eat();
$pangolin->sleep();
$pangolin->defence();
$pangolin->drink();
$pangolin->dead();
VarDumper::dump($pangolin,10,true);