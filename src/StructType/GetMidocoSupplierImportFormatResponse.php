<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoSupplierImportFormatResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoSupplierImportFormatResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierAgencyImportFormat
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierAgencyImportFormat
     * @var \Pggns\MidocoApi\OrderSD\StructType\SupplierAgencyImportFormatDTO[]
     */
    protected ?array $MidocoSupplierAgencyImportFormat = null;
    /**
     * Constructor method for GetMidocoSupplierImportFormatResponse
     * @uses GetMidocoSupplierImportFormatResponse::setMidocoSupplierAgencyImportFormat()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SupplierAgencyImportFormatDTO[] $midocoSupplierAgencyImportFormat
     */
    public function __construct(?array $midocoSupplierAgencyImportFormat = null)
    {
        $this
            ->setMidocoSupplierAgencyImportFormat($midocoSupplierAgencyImportFormat);
    }
    /**
     * Get MidocoSupplierAgencyImportFormat value
     * @return \Pggns\MidocoApi\OrderSD\StructType\SupplierAgencyImportFormatDTO[]
     */
    public function getMidocoSupplierAgencyImportFormat(): ?array
    {
        return $this->MidocoSupplierAgencyImportFormat;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSupplierAgencyImportFormat method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierAgencyImportFormat method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierAgencyImportFormatForArrayConstraintFromSetMidocoSupplierAgencyImportFormat(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoSupplierImportFormatResponseMidocoSupplierAgencyImportFormatItem) {
            // validation for constraint: itemType
            if (!$getMidocoSupplierImportFormatResponseMidocoSupplierAgencyImportFormatItem instanceof \Pggns\MidocoApi\OrderSD\StructType\SupplierAgencyImportFormatDTO) {
                $invalidValues[] = is_object($getMidocoSupplierImportFormatResponseMidocoSupplierAgencyImportFormatItem) ? get_class($getMidocoSupplierImportFormatResponseMidocoSupplierAgencyImportFormatItem) : sprintf('%s(%s)', gettype($getMidocoSupplierImportFormatResponseMidocoSupplierAgencyImportFormatItem), var_export($getMidocoSupplierImportFormatResponseMidocoSupplierAgencyImportFormatItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierAgencyImportFormat property can only contain items of type \Pggns\MidocoApi\OrderSD\StructType\SupplierAgencyImportFormatDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierAgencyImportFormat value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\OrderSD\StructType\SupplierAgencyImportFormatDTO[] $midocoSupplierAgencyImportFormat
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetMidocoSupplierImportFormatResponse
     */
    public function setMidocoSupplierAgencyImportFormat(?array $midocoSupplierAgencyImportFormat = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierAgencyImportFormatArrayErrorMessage = self::validateMidocoSupplierAgencyImportFormatForArrayConstraintFromSetMidocoSupplierAgencyImportFormat($midocoSupplierAgencyImportFormat))) {
            throw new InvalidArgumentException($midocoSupplierAgencyImportFormatArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierAgencyImportFormat = $midocoSupplierAgencyImportFormat;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierAgencyImportFormat value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\OrderSD\StructType\SupplierAgencyImportFormatDTO $item
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetMidocoSupplierImportFormatResponse
     */
    public function addToMidocoSupplierAgencyImportFormat(\Pggns\MidocoApi\OrderSD\StructType\SupplierAgencyImportFormatDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\OrderSD\StructType\SupplierAgencyImportFormatDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierAgencyImportFormat property can only contain items of type \Pggns\MidocoApi\OrderSD\StructType\SupplierAgencyImportFormatDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierAgencyImportFormat[] = $item;
        
        return $this;
    }
}
