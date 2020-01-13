<?php
namespace Tests\DesignPatterns\Behavioral\ChainOfResponsbilities;

abstract class Handler
{
    /**
     * @var Handler
     * 声明一个责任对象
     */
    private $successor;

    public function __construct(Handler $successor)
    {
        $this->successor = $successor;
    }

    /**
     * 使用模板方法模式
     * 规定子类继承该方法
     * 若处理方法放回null，则使用下一个指定顺序对象
     * @param Request
     * @return string|null
     */
    public function handle(RequestInterface $request)
    {
        $processed = $this->processing($request);

        if(null == $processed)
        {
            return $this->successor->processing($request);
        }
        return $processed;
    }
    
    /**
     * 声明处理方法
     */
    abstract protected function processing(RequestInterface $request);
}