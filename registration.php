<?php
declare(strict_types=1);

/**
 * File: registration.php
 *
 * @author Łukasz Kilijański <contact@lukasz-k.com>
 * @copyright Copyright (C) 2024
 *  Łukasz Kilijański (https://https://lukasz-k.com/)
 */

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'LukaszKilijanski_Kickoff',
    __DIR__
);
