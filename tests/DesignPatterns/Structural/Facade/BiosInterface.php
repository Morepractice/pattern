<?php
namespace Tests\DesignPatterns\Structural\Facade;

/**
 * 声明输入输出流接口
 */
interface BiosInterface
{
    public function execute();

    public function waitForKeyPress();

    public function launch(OsInterface $os);

    public function powerOff();
}