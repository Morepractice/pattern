<?php
namespace Tests\DesignPatterns\Structural\Decorator;

class RenderInXml extends RenderDecorator
{
    public function renderData():string
    {
        $doc = new \DOMDocument();
        $data = $this->wrapped->renderData();
        $doc->appendChild($doc->createElement('content',$data));

        return $doc->saveXML();
    }
}