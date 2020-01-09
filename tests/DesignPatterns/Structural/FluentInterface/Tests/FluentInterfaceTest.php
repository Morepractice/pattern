<?php
namespace Tests\DesignPatterns\Structural\FluentInterface\Tests;

use Tests\DesignPatterns\Structural\FluentInterface\Sql;
use PHPUnit\Framework\TestCase;

class FluentInterfaceTest extends TestCase
{
    public function testBuildSql()
    {
        $sql = (new Sql())
                ->select(['foo','bar'])
                ->from('user','a')
                ->where('id = ?')
                ->where('name = ?');
        
        $this->assertEquals('SELECT foo,bar FROM user AS a WHERE id = ? AND name = ?',(strval($sql)));
    }
}