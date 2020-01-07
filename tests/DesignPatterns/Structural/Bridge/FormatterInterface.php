<?php
namespace Tests\DesignPatterns\Structural\Bridge;

interface FormatterInterface
{
    public function format(string $text);
}