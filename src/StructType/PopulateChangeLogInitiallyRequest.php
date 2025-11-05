<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PopulateChangeLogInitiallyRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PopulateChangeLogInitiallyRequest extends AbstractStructBase
{
    /**
     * The simpleClassNames
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $simpleClassNames = null;
    /**
     * The onlyWhereNew
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $onlyWhereNew = null;
    /**
     * Constructor method for PopulateChangeLogInitiallyRequest
     * @uses PopulateChangeLogInitiallyRequest::setSimpleClassNames()
     * @uses PopulateChangeLogInitiallyRequest::setOnlyWhereNew()
     * @param string[] $simpleClassNames
     * @param bool $onlyWhereNew
     */
    public function __construct(?array $simpleClassNames = null, ?bool $onlyWhereNew = false)
    {
        $this
            ->setSimpleClassNames($simpleClassNames)
            ->setOnlyWhereNew($onlyWhereNew);
    }
    /**
     * Get simpleClassNames value
     * @return string[]
     */
    public function getSimpleClassNames(): ?array
    {
        return $this->simpleClassNames;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSimpleClassNames method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSimpleClassNames method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSimpleClassNamesForArrayConstraintFromSetSimpleClassNames(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $populateChangeLogInitiallyRequestSimpleClassNamesItem) {
            // validation for constraint: itemType
            if (!is_string($populateChangeLogInitiallyRequestSimpleClassNamesItem)) {
                $invalidValues[] = is_object($populateChangeLogInitiallyRequestSimpleClassNamesItem) ? get_class($populateChangeLogInitiallyRequestSimpleClassNamesItem) : sprintf('%s(%s)', gettype($populateChangeLogInitiallyRequestSimpleClassNamesItem), var_export($populateChangeLogInitiallyRequestSimpleClassNamesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The simpleClassNames property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set simpleClassNames value
     * @throws InvalidArgumentException
     * @param string[] $simpleClassNames
     * @return \Pggns\MidocoApi\OrderSD\StructType\PopulateChangeLogInitiallyRequest
     */
    public function setSimpleClassNames(?array $simpleClassNames = null): self
    {
        // validation for constraint: array
        if ('' !== ($simpleClassNamesArrayErrorMessage = self::validateSimpleClassNamesForArrayConstraintFromSetSimpleClassNames($simpleClassNames))) {
            throw new InvalidArgumentException($simpleClassNamesArrayErrorMessage, __LINE__);
        }
        $this->simpleClassNames = $simpleClassNames;
        
        return $this;
    }
    /**
     * Add item to simpleClassNames value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\OrderSD\StructType\PopulateChangeLogInitiallyRequest
     */
    public function addToSimpleClassNames(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The simpleClassNames property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->simpleClassNames[] = $item;
        
        return $this;
    }
    /**
     * Get onlyWhereNew value
     * @return bool|null
     */
    public function getOnlyWhereNew(): ?bool
    {
        return $this->onlyWhereNew;
    }
    /**
     * Set onlyWhereNew value
     * @param bool $onlyWhereNew
     * @return \Pggns\MidocoApi\OrderSD\StructType\PopulateChangeLogInitiallyRequest
     */
    public function setOnlyWhereNew(?bool $onlyWhereNew = false): self
    {
        // validation for constraint: boolean
        if (!is_null($onlyWhereNew) && !is_bool($onlyWhereNew)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($onlyWhereNew, true), gettype($onlyWhereNew)), __LINE__);
        }
        $this->onlyWhereNew = $onlyWhereNew;
        
        return $this;
    }
}
