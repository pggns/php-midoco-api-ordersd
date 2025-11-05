<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrdCriteriaTypeDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OrdCriteriaTypeDTO extends AbstractStructBase
{
    /**
     * The editValue
     * @var bool|null
     */
    protected ?bool $editValue = null;
    /**
     * The forceUpshift
     * @var bool|null
     */
    protected ?bool $forceUpshift = null;
    /**
     * The isPasswordType
     * @var bool|null
     */
    protected ?bool $isPasswordType = null;
    /**
     * The predefinedValues
     * @var bool|null
     */
    protected ?bool $predefinedValues = null;
    /**
     * The required
     * @var bool|null
     */
    protected ?bool $required = null;
    /**
     * The requiresUpdateRight
     * @var bool|null
     */
    protected ?bool $requiresUpdateRight = null;
    /**
     * The typeId
     * @var string|null
     */
    protected ?string $typeId = null;
    /**
     * The valueTakeover
     * @var bool|null
     */
    protected ?bool $valueTakeover = null;
    /**
     * Constructor method for OrdCriteriaTypeDTO
     * @uses OrdCriteriaTypeDTO::setEditValue()
     * @uses OrdCriteriaTypeDTO::setForceUpshift()
     * @uses OrdCriteriaTypeDTO::setIsPasswordType()
     * @uses OrdCriteriaTypeDTO::setPredefinedValues()
     * @uses OrdCriteriaTypeDTO::setRequired()
     * @uses OrdCriteriaTypeDTO::setRequiresUpdateRight()
     * @uses OrdCriteriaTypeDTO::setTypeId()
     * @uses OrdCriteriaTypeDTO::setValueTakeover()
     * @param bool $editValue
     * @param bool $forceUpshift
     * @param bool $isPasswordType
     * @param bool $predefinedValues
     * @param bool $required
     * @param bool $requiresUpdateRight
     * @param string $typeId
     * @param bool $valueTakeover
     */
    public function __construct(?bool $editValue = null, ?bool $forceUpshift = null, ?bool $isPasswordType = null, ?bool $predefinedValues = null, ?bool $required = null, ?bool $requiresUpdateRight = null, ?string $typeId = null, ?bool $valueTakeover = null)
    {
        $this
            ->setEditValue($editValue)
            ->setForceUpshift($forceUpshift)
            ->setIsPasswordType($isPasswordType)
            ->setPredefinedValues($predefinedValues)
            ->setRequired($required)
            ->setRequiresUpdateRight($requiresUpdateRight)
            ->setTypeId($typeId)
            ->setValueTakeover($valueTakeover);
    }
    /**
     * Get editValue value
     * @return bool|null
     */
    public function getEditValue(): ?bool
    {
        return $this->editValue;
    }
    /**
     * Set editValue value
     * @param bool $editValue
     * @return \Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaTypeDTO
     */
    public function setEditValue(?bool $editValue = null): self
    {
        // validation for constraint: boolean
        if (!is_null($editValue) && !is_bool($editValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($editValue, true), gettype($editValue)), __LINE__);
        }
        $this->editValue = $editValue;
        
        return $this;
    }
    /**
     * Get forceUpshift value
     * @return bool|null
     */
    public function getForceUpshift(): ?bool
    {
        return $this->forceUpshift;
    }
    /**
     * Set forceUpshift value
     * @param bool $forceUpshift
     * @return \Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaTypeDTO
     */
    public function setForceUpshift(?bool $forceUpshift = null): self
    {
        // validation for constraint: boolean
        if (!is_null($forceUpshift) && !is_bool($forceUpshift)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forceUpshift, true), gettype($forceUpshift)), __LINE__);
        }
        $this->forceUpshift = $forceUpshift;
        
        return $this;
    }
    /**
     * Get isPasswordType value
     * @return bool|null
     */
    public function getIsPasswordType(): ?bool
    {
        return $this->isPasswordType;
    }
    /**
     * Set isPasswordType value
     * @param bool $isPasswordType
     * @return \Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaTypeDTO
     */
    public function setIsPasswordType(?bool $isPasswordType = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPasswordType) && !is_bool($isPasswordType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPasswordType, true), gettype($isPasswordType)), __LINE__);
        }
        $this->isPasswordType = $isPasswordType;
        
        return $this;
    }
    /**
     * Get predefinedValues value
     * @return bool|null
     */
    public function getPredefinedValues(): ?bool
    {
        return $this->predefinedValues;
    }
    /**
     * Set predefinedValues value
     * @param bool $predefinedValues
     * @return \Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaTypeDTO
     */
    public function setPredefinedValues(?bool $predefinedValues = null): self
    {
        // validation for constraint: boolean
        if (!is_null($predefinedValues) && !is_bool($predefinedValues)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($predefinedValues, true), gettype($predefinedValues)), __LINE__);
        }
        $this->predefinedValues = $predefinedValues;
        
        return $this;
    }
    /**
     * Get required value
     * @return bool|null
     */
    public function getRequired(): ?bool
    {
        return $this->required;
    }
    /**
     * Set required value
     * @param bool $required
     * @return \Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaTypeDTO
     */
    public function setRequired(?bool $required = null): self
    {
        // validation for constraint: boolean
        if (!is_null($required) && !is_bool($required)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($required, true), gettype($required)), __LINE__);
        }
        $this->required = $required;
        
        return $this;
    }
    /**
     * Get requiresUpdateRight value
     * @return bool|null
     */
    public function getRequiresUpdateRight(): ?bool
    {
        return $this->requiresUpdateRight;
    }
    /**
     * Set requiresUpdateRight value
     * @param bool $requiresUpdateRight
     * @return \Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaTypeDTO
     */
    public function setRequiresUpdateRight(?bool $requiresUpdateRight = null): self
    {
        // validation for constraint: boolean
        if (!is_null($requiresUpdateRight) && !is_bool($requiresUpdateRight)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($requiresUpdateRight, true), gettype($requiresUpdateRight)), __LINE__);
        }
        $this->requiresUpdateRight = $requiresUpdateRight;
        
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
     * @return \Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaTypeDTO
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
    /**
     * Get valueTakeover value
     * @return bool|null
     */
    public function getValueTakeover(): ?bool
    {
        return $this->valueTakeover;
    }
    /**
     * Set valueTakeover value
     * @param bool $valueTakeover
     * @return \Pggns\MidocoApi\OrderSD\StructType\OrdCriteriaTypeDTO
     */
    public function setValueTakeover(?bool $valueTakeover = null): self
    {
        // validation for constraint: boolean
        if (!is_null($valueTakeover) && !is_bool($valueTakeover)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($valueTakeover, true), gettype($valueTakeover)), __LINE__);
        }
        $this->valueTakeover = $valueTakeover;
        
        return $this;
    }
}
