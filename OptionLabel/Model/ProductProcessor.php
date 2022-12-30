<?php
namespace Codilar\OptionLabel\Model;

use Magento\ConfigurableProduct\Api\Data\ConfigurableItemOptionValueInterface;
use Magento\ConfigurableProduct\Model\ProductOptionProcessor;
use Magento\Framework\DataObject;

class ProductProcessor extends ProductOptionProcessor
{

    /**
     * {@inheritdoc}
     */
    public function convertToProductOption(DataObject $request)
    {
        $superAttribute = $request->getSuperAttribute();
        $attributesInfo = $request->getProductOptions()['attributes_info'];
        $optionLabel ='';
        foreach ($attributesInfo as $key => $val){
            $optionLabel = $val['value'];
        }
        if (!empty($superAttribute) && is_array($superAttribute)) {
            $data = [];
            foreach ($superAttribute as $optionId => $optionValue) {
                /** @var ConfigurableItemOptionValueInterface $option */
                $option = $this->itemOptionValueFactory->create();
                $option->setOptionId($optionId);
                $option->setOptionValue($optionValue);
                $option->setOptionLabel($optionLabel);
                $data[] = $option;
            }

            return ['configurable_item_options' => $data];
        }
    }
}
