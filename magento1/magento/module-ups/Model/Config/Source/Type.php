<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Ups\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

class Type implements OptionSourceInterface
{
    /**
     * @inheritdoc
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'UPS', 'label' => __('United Parcel Service')],
            ['value' => 'UPS_XML', 'label' => __('United Parcel Service XML')],
            ['value' => 'UPS_REST', 'label' => __('United Parcel Service REST')]
        ];
    }
}
