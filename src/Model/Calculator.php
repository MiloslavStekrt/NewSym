<?php

namespace App\Model;

use App\Entity\Operation;

class Calculator
{
    const 
        ADD = 1,
        SUBTRACT = 2,
        MULTIPLY = 3, 
        DIVIDE = 4;

    public function getOperations(): array
    {
        return [
            'Sčítaní' => self::ADD,
            'Odčítání' => self::SUBTRACT,
            'Násobení' => self::MULTIPLY,
            'Dělení' => self::DIVIDE
        ];
    }
    public function calclate()
    {
        $x = $operation->getX();
        $y = $operation->getY();
        
        switch ($operation->getOperation()) {
            case self::ADD:
                return $this->add($x, $y);
            case self::SUBTRACT:
                return $this->subtract($x, $y);
            case self::MULTIPLY:
                return $this->multiply($x, $y);
            case self::DIVIDE:
                return $this->divide($x, $y);
            default:
                return null;
        }
    }
    
    public function add(int $x, int $y)
    {
        return $x + $y;
    }
    public function subtract(int $x, int $y)
    {
        return $x - $y;
    }
    public function multiply(int $x, int $y)
    {
        return $x * $y;
    }
    public function divide(int $x, int $y)
    {
        return $x / $y;
    }
}