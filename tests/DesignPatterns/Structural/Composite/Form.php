<?php
namespace Tests\DesignPatterns\Structural\Composite;

class Form implements RenderableInterface
{
    /**
     * @var RenderableInterface
     */
    private $elements;

    public function render():string
    {
        $code = '<form>';

        foreach ($this->elements as $element){
            $code .= $element->render();
        }
        $code .= '</form>';

        return $code;
    }

    public function addElement(RenderableInterface $element)
    {
        $this->elements[] = $element;
    }
}