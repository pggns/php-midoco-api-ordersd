<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierOrdCritValueRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveSupplierOrdCritValueRequest extends AbstractStructBase
{
    /**
     * The MidocoOrdCriteriaValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrdCriteriaValue
     * @var \Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaValueDTO[]
     */
    protected ?array $MidocoOrdCriteriaValue = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * Constructor method for SaveSupplierOrdCritValueRequest
     * @uses SaveSupplierOrdCritValueRequest::setMidocoOrdCriteriaValue()
     * @uses SaveSupplierOrdCritValueRequest::setSupplierId()
     * @param \Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaValueDTO[] $midocoOrdCriteriaValue
     * @param string $supplierId
     */
    public function __construct(?array $midocoOrdCriteriaValue = null, ?string $supplierId = null)
    {
        $this
            ->setMidocoOrdCriteriaValue($midocoOrdCriteriaValue)
            ->setSupplierId($supplierId);
    }
    /**
     * Get MidocoOrdCriteriaValue value
     * @return \Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaValueDTO[]
     */
    public function getMidocoOrdCriteriaValue(): ?array
    {
        return $this->MidocoOrdCriteriaValue;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOrdCriteriaValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrdCriteriaValue method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrdCriteriaValueForArrayConstraintFromSetMidocoOrdCriteriaValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveSupplierOrdCritValueRequestMidocoOrdCriteriaValueItem) {
            // validation for constraint: itemType
            if (!$saveSupplierOrdCritValueRequestMidocoOrdCriteriaValueItem instanceof \Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaValueDTO) {
                $invalidValues[] = is_object($saveSupplierOrdCritValueRequestMidocoOrdCriteriaValueItem) ? get_class($saveSupplierOrdCritValueRequestMidocoOrdCriteriaValueItem) : sprintf('%s(%s)', gettype($saveSupplierOrdCritValueRequestMidocoOrdCriteriaValueItem), var_export($saveSupplierOrdCritValueRequestMidocoOrdCriteriaValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrdCriteriaValue property can only contain items of type \Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaValueDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrdCriteriaValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaValueDTO[] $midocoOrdCriteriaValue
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierOrdCritValueRequest
     */
    public function setMidocoOrdCriteriaValue(?array $midocoOrdCriteriaValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrdCriteriaValueArrayErrorMessage = self::validateMidocoOrdCriteriaValueForArrayConstraintFromSetMidocoOrdCriteriaValue($midocoOrdCriteriaValue))) {
            throw new InvalidArgumentException($midocoOrdCriteriaValueArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrdCriteriaValue = $midocoOrdCriteriaValue;
        
        return $this;
    }
    /**
     * Add item to MidocoOrdCriteriaValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaValueDTO $item
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierOrdCritValueRequest
     */
    public function addToMidocoOrdCriteriaValue(\Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaValueDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaValueDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoOrdCriteriaValue property can only contain items of type \Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaValueDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrdCriteriaValue[] = $item;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierOrdCritValueRequest
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
}
