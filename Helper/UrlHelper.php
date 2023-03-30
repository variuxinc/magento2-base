<?php
/**
 * Copyright © Variux Inc All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types = 1);

namespace Variux\Base\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\ObjectManager;

class UrlHelper extends AbstractHelper
{

    /**
     * @return \Variux\Base\Helper\UrlHelper
     */
    public static function getInstance()
    {
        return ObjectManager::getInstance()->get(\Variux\Base\Helper\UrlHelper::class);
    }

    /**
     * @param string|null $url
     * @return string|null
     */
    public function reGenerate(?string $url): ?string
    {
        if (preg_match('/^https?:\/\//i', $url)) {
            $parts = parse_url($url);
            $path = $parts['path'];

            $pathEncoded = $this->encodeUrlPath($path);
            $parts['path'] = $pathEncoded;

            if (function_exists('http_build_url')) {
                $url = http_build_url($parts);
            } else {
                $url = $this->build_url($parts);
            }
        }
        return $url;
    }

    /**
     * @param string $path
     * @return string
     */
    protected function encodeUrlPath(string $path): string
    {
        $paths = explode('/', $path);
        foreach ($paths as &$str) {
            $str = rawurlencode($str);
        }
        return implode('/', $paths);
    }

    /**
     * @param string[] $parts
     * @return string
     */
    protected function build_url(array $parts): string
    {
        return (isset($parts['scheme']) ? "{$parts['scheme']}:" : '') .
            ((isset($parts['user']) || isset($parts['host'])) ? '//' : '') .
            (isset($parts['user']) ? "{$parts['user']}" : '') .
            (isset($parts['pass']) ? ":{$parts['pass']}" : '') .
            (isset($parts['user']) ? '@' : '') .
            (isset($parts['host']) ? "{$parts['host']}" : '') .
            (isset($parts['port']) ? ":{$parts['port']}" : '') .
            (isset($parts['path']) ? "{$parts['path']}" : '') .
            (isset($parts['query']) ? "?{$parts['query']}" : '') .
            (isset($parts['fragment']) ? "#{$parts['fragment']}" : '');
    }
}

