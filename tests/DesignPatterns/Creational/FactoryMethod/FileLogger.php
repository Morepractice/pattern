<?php 
namespace Tests\DesignPatterns\Creational\FactoryMethod;

class FileLogger implements Logger
{
    /**
     * @var string
     */

    private $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function log($message)
    {
        file_put_contents($this->filePath, $message.PHP_EOL, FILE_APPEND);
    }
}