<?php
namespace Tests\DesignPatterns\Structural\Proxy\Tests;

use Tests\DesignPatterns\Structural\Proxy\RecordProxy;
use PHPUnit\Framework\TestCase;

class RecordProxyTest extends TestCase
{
    public function testProxy()
    {
        $recordProxy = new RecordProxy();
        $recordProxy->xy = 'xy';

        $this->assertTrue(true === $recordProxy->isDirty());
    }
}