<?php
namespace Tests\DesignPatterns\Behavioral\Mediator;

interface MediatorInterface
{
    /**
     * 做请求
     */
    public function makeRequest();

    /**
     * 发出响应
     */
    public function sendResponse(string $content);

    /**
     * 查询数据库
     */
    public function queryDB();
}