<?php
namespace Tests\DesignPatterns\Behavioral\Iterator;
class BookList implements \Countable, \Iterator
{
    /**
     * @var Book[]
     */
    private $books;

    /**
     * @var int
     */
    private $currentKey = 0;

    /**
     * @var int
     */
    private $key = 0; 

    public function addBook(Book $book)
    {
        $this->books[$this->key++] = $book;
    }

    public function removeBook(Book $removeBook)
    {
        foreach ($this->books as $key => $book) {
            if($book->getTitleAndAuthor() == $removeBook->getTitleAndAuthor())
            {
                unset($this->books[$key]);
                //若删除的key等于当前key，则当前key往后移动一个单位
                if($key == $this->currentKey){
                    $this->next();
                }
            }
        }
    }

    public function count(): int
    {
        return count($this->books);
    }

    public function current(): Book
    {
        return $this->books[$this->currentKey];
    }

    public function next()
    {
        $this->currentKey++;
          
        /**
         * 若此对象已被删除则往后移动一个单位
         */
        if(!$this->valid() && $this->currentKey == $this->key){
            $this->next();
        }
    }

    public function rewind()
    {
        $this->currentKey = 0;
    }

    public function key(): int
    {
        return $this->currentKey;
    }

    public function valid(): bool
    {
        return isset($this->books[$this->currentKey]);
    }
}