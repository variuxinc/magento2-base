<?php
/**
 * Copyright © Variux Inc All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Variux\Base\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class UrlHelper extends AbstractHelper
{

    /**
     * @param \Magento\Framework\App\Helper\Context $context
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context
    ) {
        parent::__construct($context);
    }
}

