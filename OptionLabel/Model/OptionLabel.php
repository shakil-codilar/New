<?php
namespace Codilar\OptionLabel\Model;

use Codilar\OptionLabel\Api\Data\OptionLabelInterface;
use Magento\Framework\Model\AbstractExtensibleModel;

/**
 * Class ConfigurableItemOptionValue
 */
class OptionLabel extends AbstractExtensibleModel implements OptionLabelInterface
{
    //@codeCoverageIgnoreStart

    /**
     * {@inheritdoc}
     */
    public function getOptionId()
    {
        return $this->getData(self::OPTION_ID);
    }

    /**
     * {@inheritdoc}
     */
    public function setOptionId($value)
    {
        return $this->setData(self::OPTION_ID, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function getOptionValue()
    {
        return $this->getData(self::OPTION_VALUE);
    }

    /**
     * {@inheritdoc}
     */
    public function setOptionValue($value)
    {
        return $this->setData(self::OPTION_VALUE, $value);
    }
    /**
     * {@inheritdoc}
     */
    public function getOptionLabel()
    {
        return $this->getData(self::OPTION_LABEL);
    }

    /**
     * {@inheritdoc}
     */
    public function setOptionLabel($value)
    {
        return $this->setData(self::OPTION_LABEL, $value);
    }

    /**
     * Retrieve existing extension attributes object or create a new one.
     *
     * @return \Codilar\OptionLabel\Api\Data\OptionLabelExtensionInterface|null
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * Set an extension attributes object.
     *
     * @param \Codilar\OptionLabel\Api\Data\OptionLabelExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \Codilar\OptionLabel\Api\Data\OptionLabelExtensionInterface $extensionAttributes
    ) {
        return $this->_setExtensionAttributes($extensionAttributes);
    }
}
