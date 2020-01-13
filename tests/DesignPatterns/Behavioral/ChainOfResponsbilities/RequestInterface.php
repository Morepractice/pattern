<?php
namespace Tests\DesignPatterns\Behavioral\ChainOfResponsbilities;

interface RequestInterface
{
    public function getUri():RequestInterface;

    public function getMethod():string;

    public function getPath():string;

    public function getQuery():string;
}