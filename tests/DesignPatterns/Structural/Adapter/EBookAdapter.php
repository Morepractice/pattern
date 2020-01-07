<?php
namespace Tests\DesignPatterns\Structural\Adapter;

class EBookAdapter implements BookInterface
{
    /**
     * @var int
     */
    private $ebook;

    /**
     * @var EBookInterface
     */
    public function __construct(EBookInterface $ebook)
    {
        $this->ebook = $ebook;
    }

    public function open()
    {
        $this->ebook->unlock();
    }

    public function turnPage()
    {
        $this->ebook->pressNext();
    }

    public function getPage():int
    {
        return $this->ebook->getPage()[0];
    }
}