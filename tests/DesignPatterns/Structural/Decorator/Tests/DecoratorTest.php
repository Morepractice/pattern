<?php
namespace Tests\DesignPatterns\Structural\Decorator\Tests;

use Tests\DesignPatterns\Structural\Decorator\WebService;
use Tests\DesignPatterns\Structural\Decorator\RenderInXml;
use Tests\DesignPatterns\Structural\Decorator\RenderInJson;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    /** @var WebService*/
    private $service;

    public function setUp()
    {
        $this->service = new WebService('fool');
    }

    public function testJsonDecorator()
    {
        $service = new RenderInJson($this->service);

        $this->assertEquals('"fool"', $service->renderData());
    }

    public function testXmlDecorator()
    {
        $service = new RenderInXml($this->service);

        $this->assertXmlStringEqualsXmlString("<?xml version='1.0'?><content>fool</content>",$service->renderData());

    }
}