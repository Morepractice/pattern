<?php
namespace Tests\DesignPatterns\Structural\DependencyInjection\Tests;

use Tests\DesignPatterns\Structural\DependencyInjection\DatabaseConfiguration;
use Tests\DesignPatterns\Structural\DependencyInjection\DatabaseConnection;
use PHPUnit\Framework\TestCase;

class DependencyInjectionTest extends TestCase
{
    public function testDependencyInjection()
    {
        $configuration = new DatabaseConfiguration('localhost',3306,'sihua','sihua');
        $connection = new DatabaseConnection($configuration);

        $this->assertEquals('sihua:sihua@localhost:3306',$connection->getDsn());
    }
}