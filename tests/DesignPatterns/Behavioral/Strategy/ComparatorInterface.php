<?php
namespace Tests\DesignPatterns\Behavioral\Strategy;

interface ComparatorInterface
{
    public function compare($a,$b): int;
}