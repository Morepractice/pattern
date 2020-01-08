<?php
namespace Tests\DesignPatterns\Structural\Decorator;

class RenderInJson extends RenderDecorator
{
    public function renderData():string
    {
        return json_encode($this->wrapped->renderData());
    }
}
