<?php

// trait can be use to inherite from child class convinently
trait AddOperation
{
    public function addOperation(int $a, int $b)
    {
        return $a + $b;
    }
}
trait SubtractOpetaion
{
    public function substract(int $a, int $b)
    {
        return $a - $b;
    }

}

class OperationClass
{
    use AddOperation, SubtractOpetaion;

}

$operation = new OperationClass();

print('Addition: ');
print $operation->addOperation(12, 12);
print("Substraction: ");
print $operation->substract(12, 2);
