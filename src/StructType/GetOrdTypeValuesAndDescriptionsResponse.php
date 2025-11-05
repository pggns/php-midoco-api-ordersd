<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrdTypeValuesAndDescriptionsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrdTypeValuesAndDescriptionsResponse extends AbstractStructBase
{
    /**
     * The MidocoOrdCriteriaType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrdCriteriaType
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoOrdCriteriaType[]
     */
    protected ?array $MidocoOrdCriteriaType = null;
    /**
     * The MidocoOrdCriteriaDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrdCriteriaDescription
     * @var \Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaDescriptionDTO[]
     */
    protected ?array $MidocoOrdCriteriaDescription = null;
    /**
     * The GetOrdTypeValuesAndDescriptionsDTO
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: GetOrdTypeValuesAndDescriptionsDTO
     * @var \Pggns\MidocoApi\OrderSD\StructType\GetOrdTypeValuesAndDescriptionsDTO[]
     */
    protected ?array $GetOrdTypeValuesAndDescriptionsDTO = null;
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
     * Constructor method for GetOrdTypeValuesAndDescriptionsResponse
     * @uses GetOrdTypeValuesAndDescriptionsResponse::setMidocoOrdCriteriaType()
     * @uses GetOrdTypeValuesAndDescriptionsResponse::setMidocoOrdCriteriaDescription()
     * @uses GetOrdTypeValuesAndDescriptionsResponse::setGetOrdTypeValuesAndDescriptionsDTO()
     * @uses GetOrdTypeValuesAndDescriptionsResponse::setMidocoOrdCriteriaPredefVal()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoOrdCriteriaType[] $midocoOrdCriteriaType
     * @param \Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaDescriptionDTO[] $midocoOrdCriteriaDescription
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetOrdTypeValuesAndDescriptionsDTO[] $getOrdTypeValuesAndDescriptionsDTO
     * @param \Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaPredefValDTO[] $midocoOrdCriteriaPredefVal
     */
    public function __construct(?array $midocoOrdCriteriaType = null, ?array $midocoOrdCriteriaDescription = null, ?array $getOrdTypeValuesAndDescriptionsDTO = null, ?array $midocoOrdCriteriaPredefVal = null)
    {
        $this
            ->setMidocoOrdCriteriaType($midocoOrdCriteriaType)
            ->setMidocoOrdCriteriaDescription($midocoOrdCriteriaDescription)
            ->setGetOrdTypeValuesAndDescriptionsDTO($getOrdTypeValuesAndDescriptionsDTO)
            ->setMidocoOrdCriteriaPredefVal($midocoOrdCriteriaPredefVal);
    }
    /**
     * Get MidocoOrdCriteriaType value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoOrdCriteriaType[]
     */
    public function getMidocoOrdCriteriaType(): ?array
    {
        return $this->MidocoOrdCriteriaType;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOrdCriteriaType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrdCriteriaType method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrdCriteriaTypeForArrayConstraintFromSetMidocoOrdCriteriaType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrdTypeValuesAndDescriptionsResponseMidocoOrdCriteriaTypeItem) {
            // validation for constraint: itemType
            if (!$getOrdTypeValuesAndDescriptionsResponseMidocoOrdCriteriaTypeItem instanceof \Pggns\MidocoApi\OrderSD\StructType\MidocoOrdCriteriaType) {
                $invalidValues[] = is_object($getOrdTypeValuesAndDescriptionsResponseMidocoOrdCriteriaTypeItem) ? get_class($getOrdTypeValuesAndDescriptionsResponseMidocoOrdCriteriaTypeItem) : sprintf('%s(%s)', gettype($getOrdTypeValuesAndDescriptionsResponseMidocoOrdCriteriaTypeItem), var_export($getOrdTypeValuesAndDescriptionsResponseMidocoOrdCriteriaTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrdCriteriaType property can only contain items of type \Pggns\MidocoApi\OrderSD\StructType\MidocoOrdCriteriaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrdCriteriaType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoOrdCriteriaType[] $midocoOrdCriteriaType
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetOrdTypeValuesAndDescriptionsResponse
     */
    public function setMidocoOrdCriteriaType(?array $midocoOrdCriteriaType = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrdCriteriaTypeArrayErrorMessage = self::validateMidocoOrdCriteriaTypeForArrayConstraintFromSetMidocoOrdCriteriaType($midocoOrdCriteriaType))) {
            throw new InvalidArgumentException($midocoOrdCriteriaTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrdCriteriaType = $midocoOrdCriteriaType;
        
        return $this;
    }
    /**
     * Add item to MidocoOrdCriteriaType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoOrdCriteriaType $item
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetOrdTypeValuesAndDescriptionsResponse
     */
    public function addToMidocoOrdCriteriaType(\Pggns\MidocoApi\OrderSD\StructType\MidocoOrdCriteriaType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\OrderSD\StructType\MidocoOrdCriteriaType) {
            throw new InvalidArgumentException(sprintf('The MidocoOrdCriteriaType property can only contain items of type \Pggns\MidocoApi\OrderSD\StructType\MidocoOrdCriteriaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrdCriteriaType[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoOrdCriteriaDescription value
     * @return \Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaDescriptionDTO[]
     */
    public function getMidocoOrdCriteriaDescription(): ?array
    {
        return $this->MidocoOrdCriteriaDescription;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOrdCriteriaDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrdCriteriaDescription method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrdCriteriaDescriptionForArrayConstraintFromSetMidocoOrdCriteriaDescription(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrdTypeValuesAndDescriptionsResponseMidocoOrdCriteriaDescriptionItem) {
            // validation for constraint: itemType
            if (!$getOrdTypeValuesAndDescriptionsResponseMidocoOrdCriteriaDescriptionItem instanceof \Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaDescriptionDTO) {
                $invalidValues[] = is_object($getOrdTypeValuesAndDescriptionsResponseMidocoOrdCriteriaDescriptionItem) ? get_class($getOrdTypeValuesAndDescriptionsResponseMidocoOrdCriteriaDescriptionItem) : sprintf('%s(%s)', gettype($getOrdTypeValuesAndDescriptionsResponseMidocoOrdCriteriaDescriptionItem), var_export($getOrdTypeValuesAndDescriptionsResponseMidocoOrdCriteriaDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrdCriteriaDescription property can only contain items of type \Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaDescriptionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrdCriteriaDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaDescriptionDTO[] $midocoOrdCriteriaDescription
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetOrdTypeValuesAndDescriptionsResponse
     */
    public function setMidocoOrdCriteriaDescription(?array $midocoOrdCriteriaDescription = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrdCriteriaDescriptionArrayErrorMessage = self::validateMidocoOrdCriteriaDescriptionForArrayConstraintFromSetMidocoOrdCriteriaDescription($midocoOrdCriteriaDescription))) {
            throw new InvalidArgumentException($midocoOrdCriteriaDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrdCriteriaDescription = $midocoOrdCriteriaDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoOrdCriteriaDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaDescriptionDTO $item
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetOrdTypeValuesAndDescriptionsResponse
     */
    public function addToMidocoOrdCriteriaDescription(\Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaDescriptionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaDescriptionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoOrdCriteriaDescription property can only contain items of type \Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaDescriptionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrdCriteriaDescription[] = $item;
        
        return $this;
    }
    /**
     * Get GetOrdTypeValuesAndDescriptionsDTO value
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetOrdTypeValuesAndDescriptionsDTO[]
     */
    public function getGetOrdTypeValuesAndDescriptionsDTO(): ?array
    {
        return $this->GetOrdTypeValuesAndDescriptionsDTO;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setGetOrdTypeValuesAndDescriptionsDTO method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetOrdTypeValuesAndDescriptionsDTO method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetOrdTypeValuesAndDescriptionsDTOForArrayConstraintFromSetGetOrdTypeValuesAndDescriptionsDTO(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrdTypeValuesAndDescriptionsResponseGetOrdTypeValuesAndDescriptionsDTOItem) {
            // validation for constraint: itemType
            if (!$getOrdTypeValuesAndDescriptionsResponseGetOrdTypeValuesAndDescriptionsDTOItem instanceof \Pggns\MidocoApi\OrderSD\StructType\GetOrdTypeValuesAndDescriptionsDTO) {
                $invalidValues[] = is_object($getOrdTypeValuesAndDescriptionsResponseGetOrdTypeValuesAndDescriptionsDTOItem) ? get_class($getOrdTypeValuesAndDescriptionsResponseGetOrdTypeValuesAndDescriptionsDTOItem) : sprintf('%s(%s)', gettype($getOrdTypeValuesAndDescriptionsResponseGetOrdTypeValuesAndDescriptionsDTOItem), var_export($getOrdTypeValuesAndDescriptionsResponseGetOrdTypeValuesAndDescriptionsDTOItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The GetOrdTypeValuesAndDescriptionsDTO property can only contain items of type \Pggns\MidocoApi\OrderSD\StructType\GetOrdTypeValuesAndDescriptionsDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set GetOrdTypeValuesAndDescriptionsDTO value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetOrdTypeValuesAndDescriptionsDTO[] $getOrdTypeValuesAndDescriptionsDTO
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetOrdTypeValuesAndDescriptionsResponse
     */
    public function setGetOrdTypeValuesAndDescriptionsDTO(?array $getOrdTypeValuesAndDescriptionsDTO = null): self
    {
        // validation for constraint: array
        if ('' !== ($getOrdTypeValuesAndDescriptionsDTOArrayErrorMessage = self::validateGetOrdTypeValuesAndDescriptionsDTOForArrayConstraintFromSetGetOrdTypeValuesAndDescriptionsDTO($getOrdTypeValuesAndDescriptionsDTO))) {
            throw new InvalidArgumentException($getOrdTypeValuesAndDescriptionsDTOArrayErrorMessage, __LINE__);
        }
        $this->GetOrdTypeValuesAndDescriptionsDTO = $getOrdTypeValuesAndDescriptionsDTO;
        
        return $this;
    }
    /**
     * Add item to GetOrdTypeValuesAndDescriptionsDTO value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetOrdTypeValuesAndDescriptionsDTO $item
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetOrdTypeValuesAndDescriptionsResponse
     */
    public function addToGetOrdTypeValuesAndDescriptionsDTO(\Pggns\MidocoApi\OrderSD\StructType\GetOrdTypeValuesAndDescriptionsDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\OrderSD\StructType\GetOrdTypeValuesAndDescriptionsDTO) {
            throw new InvalidArgumentException(sprintf('The GetOrdTypeValuesAndDescriptionsDTO property can only contain items of type \Pggns\MidocoApi\OrderSD\StructType\GetOrdTypeValuesAndDescriptionsDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->GetOrdTypeValuesAndDescriptionsDTO[] = $item;
        
        return $this;
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
        foreach ($values as $getOrdTypeValuesAndDescriptionsResponseMidocoOrdCriteriaPredefValItem) {
            // validation for constraint: itemType
            if (!$getOrdTypeValuesAndDescriptionsResponseMidocoOrdCriteriaPredefValItem instanceof \Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaPredefValDTO) {
                $invalidValues[] = is_object($getOrdTypeValuesAndDescriptionsResponseMidocoOrdCriteriaPredefValItem) ? get_class($getOrdTypeValuesAndDescriptionsResponseMidocoOrdCriteriaPredefValItem) : sprintf('%s(%s)', gettype($getOrdTypeValuesAndDescriptionsResponseMidocoOrdCriteriaPredefValItem), var_export($getOrdTypeValuesAndDescriptionsResponseMidocoOrdCriteriaPredefValItem, true));
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
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetOrdTypeValuesAndDescriptionsResponse
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
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetOrdTypeValuesAndDescriptionsResponse
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
