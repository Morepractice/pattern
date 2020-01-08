<?php
namespace Tests\DesignPatterns\Structural\Decorator;

abstract class RenderDecorator implements RenderableInterface
{
    /**
     * @var RenderDecorator
     * 注：装饰器模式必须要符合接口契约
     */
    protected $wrapped;

    public function __construct(RenderableInterface $service)
    {
        $this->wrapped = $service;
    }
    
}