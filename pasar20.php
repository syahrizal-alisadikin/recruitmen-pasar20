<?php

class Pasar20
{
    private $count = 0;

    public function getResult(int $number)
    {
        if ($this->isMultipliedByThree($number) && $this->isMultipliedByFive($number)) {
            return $this->returnMultipliedByThreeAndFive($number);
        }

        if ($this->isMultipliedByThree($number)) {
            return $this->returnResultMultipliedByThree($number);
        }

        if ($this->isMultipliedByFive($number)) {
            return $this->returnResultMultipliedByFive($number);
        }
    }

    private function returnMultipliedByThreeAndFive()
    {
        $this->count++;

        if ($this->count <= 5) {
            return "Pasar 20 Belanja Pangan";
        }
    }

    private function returnResultMultipliedByThree()
    {
        if ($this->count >= 2) {
            return "Belanja pangan";
        }

        return "Pasar 20";
    }

    private function returnResultMultipliedByFive()
    {
        if ($this->count >= 2) {
            return "Pasar 20";
        }

        return "Belanja pangan";
    }

    private function isMultipliedByThree(int $number): bool
    {
        return $number % 3 === 0 ? true : false;
    }

    private function isMultipliedByFive(int $number): bool
    {
        return $number % 5 === 0 ? true : false;
    }

    public function getCount(): int
    {
        return $this->count;
    }
}