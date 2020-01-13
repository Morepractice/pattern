<?php
namespace Tests\DesignPatterns\Behavioral\Iterator\Tests;

use Tests\DesignPatterns\Behavioral\Iterator\Book;
use Tests\DesignPatterns\Behavioral\Iterator\BookList;
use PHPUnit\Framework\TestCase;

class Iterator extends TestCase
{
    public function testCanAddBookToList()
    {
        $book = new Book('Clean Code', 'Robert C. Martin');
        $book2 = new Book('Professional Php Design Patterns', 'Aaron Saray');

        $bookList = new BookList();
        $bookList->addBook($book);
        $bookList->addBook($book2);

        $books = [];
        foreach($bookList as $book){
            $books[] = $book->getTitleAndAuthor();
        }

        $this->assertCount(2, $bookList);
        $this->assertEquals([
            'Clean Code by Robert C. Martin',
            'Professional Php Design Patterns by Aaron Saray'
        ],$books);
        return $bookList;
    }
    

    /**
     * @depends testCanAddBookToList
     */
    public function testCanRemoveBookFromList(BookList $bookList)
    {
        $book = new Book('Clean Code', 'Robert C. Martin');
        $bookList->removeBook($book);
        
        $bookList->rewind();
        $books = [];
        While($bookList->valid())
        {
            $books[] = $bookList->current()->getTitleAndAuthor();
            $bookList->next();
        }

        $this->assertEquals(['Professional Php Design Patterns by Aaron Saray'],$books);
        // $this->assertCount(1,$bookList);
        // $this->assertEquals(0,$bookList->key());
    }
}