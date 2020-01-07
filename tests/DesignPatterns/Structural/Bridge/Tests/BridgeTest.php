<?php
namespace Tests\DesignPatterns\Structural\Bridge\Tests;

use Tests\DesignPatterns\Structural\Bridge\HelloService;
use Tests\DesignPatterns\Structural\Bridge\HtmlFormatter;
use Tests\DesignPatterns\Structural\Bridge\PlainTextFormatter;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
    public function testCanPrintUsingThePlainTextPrinter()
    {
        $service = new HelloService(new HtmlFormatter());
        $this->assertEquals('<p>Hello</p>',$service->get());

        $service->setImplementation(new PlainTextFormatter());
        $this->assertEquals('Hello',$service->get());
    }

}