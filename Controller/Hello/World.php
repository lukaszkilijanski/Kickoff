<?php
declare(strict_types=1);

/**
 * File: registration.php
 *
 * @author Łukasz Kilijański <contact@lukasz-k.com>
 * @copyright Copyright (C) 2024
 *  Łukasz Kilijański (https://https://lukasz-k.com/)
 */

namespace LukaszKilijanski\Kickoff\Controller\Hello;

use Magento\Framework\App\Action\HttpGetActionInterface;

class World implements HttpGetActionInterface
{
    /**
     * @return void
     */
    public function execute() : void
    {
        die('Hello world!');
    }
}
