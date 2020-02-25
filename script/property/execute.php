<?php
final class Test 
{
    /**
     * プロパティに型指定できるのはphp7.4から
     */
    private int $value;

    public function __construct($value) {
        $this->value = $value;
    }

    public function getValue(): int
    {
        return $this->value;
    }
}

$test = new Test(1);

// Fatal error: Uncaught TypeError: Typed property Test::$value must be int, array used
// $test = new Test([1, 2, 3]);

echo $test->getValue() . PHP_EOL;