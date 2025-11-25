<?php
interface IntelligentArrayInterface {
    public function fillRandom(int $n, int $min, int $max): void;
    public function printArray(): void;
    public function getMin();
    public function getMax();
    public function getAverage();
    public function getSum();
    public function import(IntelligentArrayInterface $other): void;

    public function getElements(): array;
}

class IntelligentArray implements IntelligentArrayInterface {
    private $elements = [];

    public function fillRandom(int $n, int $min, int $max): void {
        $this->elements = [];
        for ($i = 0; $i < $n; $i++) {
            $this->elements[] = rand($min, $max);
        }
    }

    public function printArray(): void {
        print implode(", ", $this->elements) . PHP_EOL;
    }

    public function getMin() {
        return count($this->elements) > 0 ? min($this->elements) : null;
    }

    public function getMax() {
        return count($this->elements) > 0 ? max($this->elements) : null;
    }

    public function getSum() {
        return array_sum($this->elements);
    }

    public function getAverage(): float {
        return count($this->elements) > 0 
            ? array_sum($this->elements) / count($this->elements) 
            : 0;
    }

    public function import(IntelligentArrayInterface $other): void {
        foreach ($other->getElements() as $value) {
            if (!in_array($value, $this->elements)) {
                $this->elements[] = $value;
            }
        }
    }

    // Elemek lekérdezése
    public function getElements(): array {
        return $this->elements;
    }
}


class TestArray {
    public static function run() {
        $a = new IntelligentArray();
        $a->fillRandom(5, 1, 10);
        print "Tömb A: ";
        $a->printArray();
        print "Összeg A: " . $a->getSum() . PHP_EOL;
        print "Átlag A: " . $a->getAverage() . PHP_EOL;
        print "Min A: " . $a->getMin() . PHP_EOL;
        print "Max A: " . $a->getMax() . PHP_EOL;

        $b = new IntelligentArray();
        $b->fillRandom(5, 5, 15);
        print "Tömb B: ";
        $b->printArray();

        $a->import($b);
        print "Tömb A az importálás után: ";
        $a->printArray();
    }
}

TestArray::run();
