<?php
namespace Codilar\OptionLabel\Api\Data;

interface OptionLabelInterface extends \Magento\Framework\Api\ExtensibleDataInterface
{

    const OPTION_ID = 'option_id';

    const OPTION_VALUE = 'option_value';

    const OPTION_LABEL = 'option_label';

    /**#@-*/

    /**
     * Get option SKU
     *
     * @return string
     */
    public function getOptionId();

    /**
     * Set option SKU
     *
     * @param string $value
     * @return void
     */
    public function setOptionId($value);

    /**
     * Get item id
     *
     * @return int|null
     */
    public function getOptionValue();

    /**
     * Set item id
     *
     * @param int|null $value
     * @return void
     */
    public function setOptionValue($value);
    /**
     * Get item label
     *
     * @return mixed
     */
    public function getOptionLabel();

    /**
     * Set item label
     *
     * @param mixed $value
     * @return void
     */
    public function setOptionLabel($value);

    /**
     * Retrieve existing extension attributes object or create a new one.
     *
     * @return \Codilar\OptionLabel\Api\Data\OptionLabelExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object.
     *
     * @param \Codilar\OptionLabel\Api\Data\OptionLabelExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \Codilar\OptionLabel\Api\Data\OptionLabelExtensionInterface $extensionAttributes
    );
}
