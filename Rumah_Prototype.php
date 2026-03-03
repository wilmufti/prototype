<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class House {
    public $floors;
    public $windows;
    public $garage;
    public $garden;

    public function __construct($floors, $windows, $garage, $garden) {
        $this->floors  = $floors;
        $this->windows = $windows;
        $this->garage  = $garage;
        $this->garden  = $garden;
    }

    public function clone(): static {
        return clone $this;
    }

    public function getInfo(): string {
        $garage = $this->garage ? 'Ya' : 'Tidak';
        $garden = $this->garden ? 'Ya' : 'Tidak';
        return "Lantai: {$this->floors}, Jendela: {$this->windows}, Garasi: {$garage}, Taman: {$garden}";
    }
}

$template = new House(2, 10, true, false);

$rumahA = $template->clone();

$rumahB = $template->clone();
$rumahB->garden = true;

$rumahC = $template->clone();
$rumahC->garage = false;
$rumahC->garden = true;

echo "Rumah A : " . $rumahA->getInfo() . PHP_EOL;
echo "Rumah B : " . $rumahB->getInfo() . PHP_EOL;
echo "Rumah C : " . $rumahC->getInfo() . PHP_EOL;
