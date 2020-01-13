<?php
namespace Tests\DesignPatterns\Behavioral\ChainOfResponsbilities\Tests;

use Tests\DesignPatterns\Behavioral\ChainOfResponsbilities\HttpInMemoryCacheHandler;
use Tests\DesignPatterns\Behavioral\ChainOfResponsbilities\SlowDatabaseHandler;
use Tests\DesignPatterns\Behavioral\ChainOfResponsbilities\RequestInterface;
use PHPUnit\Framework\TestCase;

class ChainTest extends TestCase
{
    private $chain;

    public function setUp()
    {
        $this->chain = new HttpInMemoryCacheHandler(['/foo/bar?index=1'=> 'Hello ketty'],
                                                    new SlowDatabaseHandler());
    }

    public function testCanRequestKeyInFastStorage()
    {
        $request = $this->createMock('RequestInterface');
        $request->method('getUri')->willReturn($request);
        $request->method('getMethod')->willReturn('GET');
        $request->method('getPath')->willReturn('/foo/bar');
        $request->method('getQuery')->willReturn('index=1');

        $this->assertEquals('Hello ketty',$this->chain->handle($request));
    }

    public function testCanRequestKeyInSlowStorage()
    {
        $request = $this->createMock('RequestInterface');
        $request->method('getUri')->willReturn($request);
        $request->method('getMethod')->willReturn('POST');
        $request->method('getPath')->willReturn('/foo/bar');
        $request->method('getQuery')->willReturn('index=1');

        $this->assertEquals('Hello World',$this->chain->handle($request));
    }
}