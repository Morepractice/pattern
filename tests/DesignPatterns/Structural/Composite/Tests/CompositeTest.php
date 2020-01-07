<?php
namespace Tests\DesignPatterns\Structural\Composite\Tests;

use Tests\DesignPatterns\Structural\Composite\Form;
use Tests\DesignPatterns\Structural\Composite\TextElement;
use Tests\DesignPatterns\Structural\Composite\InputElement;
use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{
    public function testRender()
    {
        $form = new Form();
        $form->addElement(new TextElement('name:'));
        $form->addElement(new InputElement());

        $mbed = new Form();
        $mbed->addElement(new TextElement('password:'));
        $mbed->addElement(new InputElement());
        $form->addElement($mbed);
        $this->assertEquals("<form>name:<input type='text' /><form>password:<input type='text' /></form></form>",$form->render());
    }
}