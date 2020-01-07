<?php
namespace Tests\DesignPatterns\Structural\Bridge;

class PlainTextFormatter implements FormatterInterface
{
    /**
     * @param string
     */
    public function format(string $text)
    {
        return $text;
    }
}