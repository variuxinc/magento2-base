<?php
/**
 * Copyright © Variux Inc All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Variux\Base\Cron;

use Psr\Log\LoggerInterface;
use Variux\Base\Helper\CoreHelper;

class FetchingNews
{

    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * @var CoreHelper
     */
    protected $coreHelper;

    /**
     * Constructor
     *
     * @param CoreHelper      $coreHelper
     * @param LoggerInterface $logger
     */
    public function __construct(
        \Variux\Base\Helper\CoreHelper $coreHelper,
        \Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
        $this->coreHelper = $coreHelper;
    }

    /**
     * Execute the cron
     *
     * @return void
     */
    public function execute()
    {
        if($this->coreHelper->isEnabledFetchingNews()) {
            $this->logger->addInfo("Cronjob FetchingNews is executed.");
        }
    }
}

