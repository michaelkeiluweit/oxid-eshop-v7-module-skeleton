<?php declare(strict_types=1);


namespace MichaelKeiluweit\TestModule\Controller;

use OxidEsales\Eshop\Application\Controller\FrontendController;

class Foobar extends FrontendController
{
    public function render()
    {
        return '@moduletemplate/foobar-template';
    }
}
