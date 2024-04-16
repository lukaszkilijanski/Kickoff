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
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

class World implements HttpGetActionInterface
{
    /**
     * @param PageFactory $pageFactory
     */
    public function __construct(
        private PageFactory $pageFactory
    ){
    }

    /**
     * @return Page
     */
    public function execute() : Page
    {
        return $this->pageFactory->create();
    }
}
