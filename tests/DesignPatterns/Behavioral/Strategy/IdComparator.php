<?php
namespace Tests\DesignPatterns\Behavioral\Strategy;

class idComparator implements ComparatorInterface
{
    public function compare($a,$b): int
    {
        return $a['id'] <=> $b['id'];
    }
}