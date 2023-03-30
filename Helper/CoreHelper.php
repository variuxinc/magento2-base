<?php
/**
 * Copyright © Variux Inc All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Variux\Base\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class CoreHelper extends AbstractHelper
{
    public const XML_MODULE_CONFIG_VENDOR = 'variux';

    public const XML_ENABLE_FETCHING_NEWS = '/fetching_news/enable';

    /**
     * @param \Magento\Framework\App\Helper\Context $context
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context
    ) {
        parent::__construct($context);
    }

    /**
     * @return bool
     */
    public function isEnabledFetchingNews()
    {
        return $this->scopeConfig->isSetFlag(self::XML_MODULE_CONFIG_VENDOR . self::XML_ENABLE_FETCHING_NEWS);
    }
}

