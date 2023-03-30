<?php
/**
 * Copyright © Variux Inc All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types = 1);

namespace Variux\Base\Rewrite\Magento\CatalogImportExport\Model\Import;

class Product extends \Magento\CatalogImportExport\Model\Import\Product
{

    private function getUrlHelper(){
        return \Variux\Base\Helper\UrlHelper::getInstance();
    }

    protected function _prepareRowForDb(array $rowData)
    {
        $rowData = parent::_prepareRowForDb($rowData);
        foreach ($this->_imagesArrayKeys as $column) {
            if (!empty($rowData[$column])) {
                $imageUrls = array_map(
                    'trim',
                    explode($this->getMultipleValueSeparator(), $rowData[$column])
                );
                foreach ($imageUrls as &$imageUrl){
                    $imageUrl = $this->getUrlHelper()->reGenerate($imageUrl);
                }
                $rowData[$column] = implode($this->getMultipleValueSeparator(), $imageUrls);
            }
        }
        return $rowData;
    }
}

