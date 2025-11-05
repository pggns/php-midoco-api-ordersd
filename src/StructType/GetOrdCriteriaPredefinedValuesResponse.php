<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrdCriteriaPredefinedValuesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrdCriteriaPredefinedValuesResponse extends AbstractStructBase
{
    /**
     * The MidocoOrdCriteriaPredefVal
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrdCriteriaPredefVal
     * @var \Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaPredefValDTO[]
     */
    protected ?array $MidocoOrdCriteriaPredefVal = null;
    /**
     * Constructor method for GetOrdCriteriaPredefinedValuesResponse
     * @uses GetOrdCriteriaPredefinedValuesResponse::setMidocoOrdCriteriaPredefVal()
     * @param \Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaPredefValDTO[] $midocoOrdCriteriaPredefVal
     */
    public function __construct(?array $midocoOrdCriteriaPredefVal = null)
    {
        $this
            ->setMidocoOrdCriteriaPredefVal($midocoOrdCriteriaPredefVal);
    }
    /**
     * Get MidocoOrdCriteriaPredefVal value
     * @return \Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaPredefValDTO[]
     */
    public function getMidocoOrdCriteriaPredefVal(): ?array
    {
        return $this->MidocoOrdCriteriaPredefVal;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOrdCriteriaPredefVal method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrdCriteriaPredefVal method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrdCriteriaPredefValForArrayConstraintFromSetMidocoOrdCriteriaPredefVal(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrdCriteriaPredefinedValuesResponseMidocoOrdCriteriaPredefValItem) {
            // validation for constraint: itemType
            if (!$getOrdCriteriaPredefinedValuesResponseMidocoOrdCriteriaPredefValItem instanceof \Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaPredefValDTO) {
                $invalidValues[] = is_object($getOrdCriteriaPredefinedValuesResponseMidocoOrdCriteriaPredefValItem) ? get_class($getOrdCriteriaPredefinedValuesResponseMidocoOrdCriteriaPredefValItem) : sprintf('%s(%s)', gettype($getOrdCriteriaPredefinedValuesResponseMidocoOrdCriteriaPredefValItem), var_export($getOrdCriteriaPredefinedValuesResponseMidocoOrdCriteriaPredefValItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrdCriteriaPredefVal property can only contain items of type \Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaPredefValDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrdCriteriaPredefVal value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaPredefValDTO[] $midocoOrdCriteriaPredefVal
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetOrdCriteriaPredefinedValuesResponse
     */
    public function setMidocoOrdCriteriaPredefVal(?array $midocoOrdCriteriaPredefVal = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrdCriteriaPredefValArrayErrorMessage = self::validateMidocoOrdCriteriaPredefValForArrayConstraintFromSetMidocoOrdCriteriaPredefVal($midocoOrdCriteriaPredefVal))) {
            throw new InvalidArgumentException($midocoOrdCriteriaPredefValArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrdCriteriaPredefVal = $midocoOrdCriteriaPredefVal;
        
        return $this;
    }
    /**
     * Add item to MidocoOrdCriteriaPredefVal value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaPredefValDTO $item
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetOrdCriteriaPredefinedValuesResponse
     */
    public function addToMidocoOrdCriteriaPredefVal(\Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaPredefValDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaPredefValDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoOrdCriteriaPredefVal property can only contain items of type \Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaPredefValDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrdCriteriaPredefVal[] = $item;
        
        return $this;
    }
}
