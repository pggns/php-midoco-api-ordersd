<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUnitDisabledSuppliersResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetUnitDisabledSuppliersResponse extends AbstractStructBase
{
    /**
     * The disabledSupplierIds
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $disabledSupplierIds = null;
    /**
     * Constructor method for GetUnitDisabledSuppliersResponse
     * @uses GetUnitDisabledSuppliersResponse::setDisabledSupplierIds()
     * @param string[] $disabledSupplierIds
     */
    public function __construct(?array $disabledSupplierIds = null)
    {
        $this
            ->setDisabledSupplierIds($disabledSupplierIds);
    }
    /**
     * Get disabledSupplierIds value
     * @return string[]
     */
    public function getDisabledSupplierIds(): ?array
    {
        return $this->disabledSupplierIds;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDisabledSupplierIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDisabledSupplierIds method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDisabledSupplierIdsForArrayConstraintFromSetDisabledSupplierIds(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getUnitDisabledSuppliersResponseDisabledSupplierIdsItem) {
            // validation for constraint: itemType
            if (!is_string($getUnitDisabledSuppliersResponseDisabledSupplierIdsItem)) {
                $invalidValues[] = is_object($getUnitDisabledSuppliersResponseDisabledSupplierIdsItem) ? get_class($getUnitDisabledSuppliersResponseDisabledSupplierIdsItem) : sprintf('%s(%s)', gettype($getUnitDisabledSuppliersResponseDisabledSupplierIdsItem), var_export($getUnitDisabledSuppliersResponseDisabledSupplierIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The disabledSupplierIds property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set disabledSupplierIds value
     * @throws InvalidArgumentException
     * @param string[] $disabledSupplierIds
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetUnitDisabledSuppliersResponse
     */
    public function setDisabledSupplierIds(?array $disabledSupplierIds = null): self
    {
        // validation for constraint: array
        if ('' !== ($disabledSupplierIdsArrayErrorMessage = self::validateDisabledSupplierIdsForArrayConstraintFromSetDisabledSupplierIds($disabledSupplierIds))) {
            throw new InvalidArgumentException($disabledSupplierIdsArrayErrorMessage, __LINE__);
        }
        $this->disabledSupplierIds = $disabledSupplierIds;
        
        return $this;
    }
    /**
     * Add item to disabledSupplierIds value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetUnitDisabledSuppliersResponse
     */
    public function addToDisabledSupplierIds(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The disabledSupplierIds property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->disabledSupplierIds[] = $item;
        
        return $this;
    }
}
