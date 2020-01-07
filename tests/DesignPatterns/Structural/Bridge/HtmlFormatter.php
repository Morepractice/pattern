<?php
namespace Tests\DesignPatterns\Structural\Bridge;

class HtmlFormatter implements FormatterInterface
{
    /**
     * @param string 
     */
    public function format(string $text)
    {
        return sprintf('<p>%s</p>', $text);
    }
}