<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetGenericCSVImportMetaDataResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetGenericCSVImportMetaDataResponse extends AbstractStructBase
{
    /**
     * The MidocoGenericCsvImportMetadata
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoGenericCsvImportMetadata
     * @var \Pggns\MidocoApi\OrderSD\StructType\GenericCsvImportMetadataDTO[]
     */
    protected ?array $MidocoGenericCsvImportMetadata = null;
    /**
     * Constructor method for GetGenericCSVImportMetaDataResponse
     * @uses GetGenericCSVImportMetaDataResponse::setMidocoGenericCsvImportMetadata()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GenericCsvImportMetadataDTO[] $midocoGenericCsvImportMetadata
     */
    public function __construct(?array $midocoGenericCsvImportMetadata = null)
    {
        $this
            ->setMidocoGenericCsvImportMetadata($midocoGenericCsvImportMetadata);
    }
    /**
     * Get MidocoGenericCsvImportMetadata value
     * @return \Pggns\MidocoApi\OrderSD\StructType\GenericCsvImportMetadataDTO[]
     */
    public function getMidocoGenericCsvImportMetadata(): ?array
    {
        return $this->MidocoGenericCsvImportMetadata;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoGenericCsvImportMetadata method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoGenericCsvImportMetadata method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoGenericCsvImportMetadataForArrayConstraintFromSetMidocoGenericCsvImportMetadata(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getGenericCSVImportMetaDataResponseMidocoGenericCsvImportMetadataItem) {
            // validation for constraint: itemType
            if (!$getGenericCSVImportMetaDataResponseMidocoGenericCsvImportMetadataItem instanceof \Pggns\MidocoApi\OrderSD\StructType\GenericCsvImportMetadataDTO) {
                $invalidValues[] = is_object($getGenericCSVImportMetaDataResponseMidocoGenericCsvImportMetadataItem) ? get_class($getGenericCSVImportMetaDataResponseMidocoGenericCsvImportMetadataItem) : sprintf('%s(%s)', gettype($getGenericCSVImportMetaDataResponseMidocoGenericCsvImportMetadataItem), var_export($getGenericCSVImportMetaDataResponseMidocoGenericCsvImportMetadataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoGenericCsvImportMetadata property can only contain items of type \Pggns\MidocoApi\OrderSD\StructType\GenericCsvImportMetadataDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoGenericCsvImportMetadata value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\OrderSD\StructType\GenericCsvImportMetadataDTO[] $midocoGenericCsvImportMetadata
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetGenericCSVImportMetaDataResponse
     */
    public function setMidocoGenericCsvImportMetadata(?array $midocoGenericCsvImportMetadata = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoGenericCsvImportMetadataArrayErrorMessage = self::validateMidocoGenericCsvImportMetadataForArrayConstraintFromSetMidocoGenericCsvImportMetadata($midocoGenericCsvImportMetadata))) {
            throw new InvalidArgumentException($midocoGenericCsvImportMetadataArrayErrorMessage, __LINE__);
        }
        $this->MidocoGenericCsvImportMetadata = $midocoGenericCsvImportMetadata;
        
        return $this;
    }
    /**
     * Add item to MidocoGenericCsvImportMetadata value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\OrderSD\StructType\GenericCsvImportMetadataDTO $item
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetGenericCSVImportMetaDataResponse
     */
    public function addToMidocoGenericCsvImportMetadata(\Pggns\MidocoApi\OrderSD\StructType\GenericCsvImportMetadataDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\OrderSD\StructType\GenericCsvImportMetadataDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoGenericCsvImportMetadata property can only contain items of type \Pggns\MidocoApi\OrderSD\StructType\GenericCsvImportMetadataDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoGenericCsvImportMetadata[] = $item;
        
        return $this;
    }
}
