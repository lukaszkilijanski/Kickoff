<?php
declare(strict_types=1);

/**
 * File: HelloWorld.php
 *
 * @author Łukasz Kilijański <contact@lukasz-k.com>
 * @copyright Copyright (C) 2024
 *  Łukasz Kilijański (https://https://lukasz-k.com/)
 */


namespace LukaszKilijanski\Kickoff\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class HelloWorld implements ArgumentInterface
{
    /**
     * @return string
     */
    public function getHelloWord(): string
    {
        return "Hello";
    }

    /**
     * @return string
     */
    public function getWorldWord(): string
    {
        return "world !";
    }
}
