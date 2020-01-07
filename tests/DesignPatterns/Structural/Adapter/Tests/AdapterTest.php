<?php
namespace Tests\DesignPatterns\Structural\Adapter\Tests;

use Tests\DesignPatterns\Structural\Adapter\Book;
use Tests\DesignPatterns\Structural\Adapter\Kindle;
use Tests\DesignPatterns\Structural\Adapter\EBookAdapter;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testCanTurnPageOnBook()
    {
        $book = new Book();
        $book->open();
        $book->turnPage();
        
        $this->assertEquals(2,$book->getPage());
    }

    public function testCanTurnPageOnKindleLikeOnANormalBook()
    {
        $kindle = new Kindle();
        $kindleAdapter = new EBookAdapter($kindle);
        $kindleAdapter->open();
        $kindleAdapter->turnPage();
        
        $this->assertEquals(2,$kindleAdapter->getPage());
    }
}