<?php
    namespace Tests\DesignPatterns\Creational\FactoryMethod\Tests;
    
    use Tests\DesignPatterns\Creational\FactoryMethod\FileLogger;
    use Tests\DesignPatterns\Creational\FactoryMethod\FileLoggerFactory;
    use Tests\DesignPatterns\Creational\FactoryMethod\StdoutLogger;
    use Tests\DesignPatterns\Creational\FactoryMethod\StdoutLoggerFactory;
    use PHPUnit\Framework\TestCase;

    class FactoryMethodTest extends TestCase
    {
        public function testCanCreateStdoutLogger()
        { 
            $stdoutLoggerFactory = new StdoutLoggerFactory();
            $stdoutlogger = $stdoutLoggerFactory->createLogger();
            $this->assertInstanceOf(StdoutLogger::class, $stdoutlogger);
        }

        public function testCanCreateFileLogger()
        {
            $fileLoggerFactory = new FileLoggerFactory('test');
            $fileLogger = $fileLoggerFactory->createLogger();
            $this->assertInstanceOf(FileLogger::class, $fileLogger);
        }
    }