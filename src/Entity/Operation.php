<?php

namespace App\Entity;

use App\Model\Calculator;
use Symfony\Component\Validator\Constraints as Assert;

class Operation
{
    private $operation = Calculator::ADD;
    private $x = 0;
    public function getOperation(): int
    {
        return $this->operation;
    }
    public function setOperation(int $operation): self
    {
        $this->operation = $operation;
        return $this;
    }
    public function getX(): int
    {
        return $this->x;
    }
    public function setX(int $x): self
    {
        $this->x = $x;
        return $this;
    }
    public function getY(): int
    {
        return $this->y;
    }
    public function setY(int $y): self
    {
        $this->y = $y;
        return $this;
    }
    public function isDividedByZero(): bool
    {
        return $this->getOperation() == Calculator::DIVIDE && $this->getY() == 0;
    }
}