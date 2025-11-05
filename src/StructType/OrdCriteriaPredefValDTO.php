<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrdCriteriaPredefValDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OrdCriteriaPredefValDTO extends AbstractStructBase
{
    /**
     * The definedValue
     * @var string|null
     */
    protected ?string $definedValue = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The typeId
     * @var string|null
     */
    protected ?string $typeId = null;
    /**
     * Constructor method for OrdCriteriaPredefValDTO
     * @uses OrdCriteriaPredefValDTO::setDefinedValue()
     * @uses OrdCriteriaPredefValDTO::setName()
     * @uses OrdCriteriaPredefValDTO::setTypeId()
     * @param string $definedValue
     * @param string $name
     * @param string $typeId
     */
    public function __construct(?string $definedValue = null, ?string $name = null, ?string $typeId = null)
    {
        $this
            ->setDefinedValue($definedValue)
            ->setName($name)
            ->setTypeId($typeId);
    }
    /**
     * Get definedValue value
     * @return string|null
     */
    public function getDefinedValue(): ?string
    {
        return $this->definedValue;
    }
    /**
     * Set definedValue value
     * @param string $definedValue
     * @return \Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaPredefValDTO
     */
    public function setDefinedValue(?string $definedValue = null): self
    {
        // validation for constraint: string
        if (!is_null($definedValue) && !is_string($definedValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($definedValue, true), gettype($definedValue)), __LINE__);
        }
        $this->definedValue = $definedValue;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaPredefValDTO
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get typeId value
     * @return string|null
     */
    public function getTypeId(): ?string
    {
        return $this->typeId;
    }
    /**
     * Set typeId value
     * @param string $typeId
     * @return \Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaPredefValDTO
     */
    public function setTypeId(?string $typeId = null): self
    {
        // validation for constraint: string
        if (!is_null($typeId) && !is_string($typeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeId, true), gettype($typeId)), __LINE__);
        }
        $this->typeId = $typeId;
        
        return $this;
    }
}
