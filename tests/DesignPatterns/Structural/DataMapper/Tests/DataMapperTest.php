<?php
namespace Tests\DesignPatterns\Structural\DataMapper\Tests;

use Tests\DesignPatterns\Structural\DataMapper\StorageAdapter;
use Tests\DesignPatterns\Structural\DataMapper\User;
use Tests\DesignPatterns\Structural\DataMapper\UserMapper;
use PHPUnit\Framework\TestCase;

class DataMapperTest extends TestCase
{
    public function testCanMapUserFromStorage()
    {
        $adapter = new StorageAdapter([1 => ['name' => 'sihua','email' => 'sihua@example.com']]);
        $mapper = new UserMapper($adapter);
        $user = $mapper->findById(1);

        $this->assertInstanceOf(user::class, $user);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testWillNotMapInvalidData()
    {
        $adapter = new StorageAdapter([]);
        $mapper = new UserMapper($adapter);
        $mapper->findById(1);
    }
}