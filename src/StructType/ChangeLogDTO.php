<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChangeLogDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ChangeLogDTO extends AbstractStructBase
{
    /**
     * The changeType
     * @var string|null
     */
    protected ?string $changeType = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The isExported
     * @var bool|null
     */
    protected ?bool $isExported = null;
    /**
     * The isGui
     * @var bool|null
     */
    protected ?bool $isGui = null;
    /**
     * The key
     * @var string|null
     */
    protected ?string $key = null;
    /**
     * The subType
     * @var string|null
     */
    protected ?string $subType = null;
    /**
     * The timestamp
     * @var string|null
     */
    protected ?string $timestamp = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * The xmlAfter
     * @var string|null
     */
    protected ?string $xmlAfter = null;
    /**
     * The xmlBefore
     * @var string|null
     */
    protected ?string $xmlBefore = null;
    /**
     * Constructor method for ChangeLogDTO
     * @uses ChangeLogDTO::setChangeType()
     * @uses ChangeLogDTO::setId()
     * @uses ChangeLogDTO::setIsExported()
     * @uses ChangeLogDTO::setIsGui()
     * @uses ChangeLogDTO::setKey()
     * @uses ChangeLogDTO::setSubType()
     * @uses ChangeLogDTO::setTimestamp()
     * @uses ChangeLogDTO::setType()
     * @uses ChangeLogDTO::setUnitName()
     * @uses ChangeLogDTO::setUserId()
     * @uses ChangeLogDTO::setXmlAfter()
     * @uses ChangeLogDTO::setXmlBefore()
     * @param string $changeType
     * @param int $id
     * @param bool $isExported
     * @param bool $isGui
     * @param string $key
     * @param string $subType
     * @param string $timestamp
     * @param string $type
     * @param string $unitName
     * @param int $userId
     * @param string $xmlAfter
     * @param string $xmlBefore
     */
    public function __construct(?string $changeType = null, ?int $id = null, ?bool $isExported = null, ?bool $isGui = null, ?string $key = null, ?string $subType = null, ?string $timestamp = null, ?string $type = null, ?string $unitName = null, ?int $userId = null, ?string $xmlAfter = null, ?string $xmlBefore = null)
    {
        $this
            ->setChangeType($changeType)
            ->setId($id)
            ->setIsExported($isExported)
            ->setIsGui($isGui)
            ->setKey($key)
            ->setSubType($subType)
            ->setTimestamp($timestamp)
            ->setType($type)
            ->setUnitName($unitName)
            ->setUserId($userId)
            ->setXmlAfter($xmlAfter)
            ->setXmlBefore($xmlBefore);
    }
    /**
     * Get changeType value
     * @return string|null
     */
    public function getChangeType(): ?string
    {
        return $this->changeType;
    }
    /**
     * Set changeType value
     * @param string $changeType
     * @return \Pggns\MidocoApi\OrderSD\StructType\ChangeLogDTO
     */
    public function setChangeType(?string $changeType = null): self
    {
        // validation for constraint: string
        if (!is_null($changeType) && !is_string($changeType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($changeType, true), gettype($changeType)), __LINE__);
        }
        $this->changeType = $changeType;
        
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Pggns\MidocoApi\OrderSD\StructType\ChangeLogDTO
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get isExported value
     * @return bool|null
     */
    public function getIsExported(): ?bool
    {
        return $this->isExported;
    }
    /**
     * Set isExported value
     * @param bool $isExported
     * @return \Pggns\MidocoApi\OrderSD\StructType\ChangeLogDTO
     */
    public function setIsExported(?bool $isExported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isExported) && !is_bool($isExported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isExported, true), gettype($isExported)), __LINE__);
        }
        $this->isExported = $isExported;
        
        return $this;
    }
    /**
     * Get isGui value
     * @return bool|null
     */
    public function getIsGui(): ?bool
    {
        return $this->isGui;
    }
    /**
     * Set isGui value
     * @param bool $isGui
     * @return \Pggns\MidocoApi\OrderSD\StructType\ChangeLogDTO
     */
    public function setIsGui(?bool $isGui = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isGui) && !is_bool($isGui)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isGui, true), gettype($isGui)), __LINE__);
        }
        $this->isGui = $isGui;
        
        return $this;
    }
    /**
     * Get key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->key;
    }
    /**
     * Set key value
     * @param string $key
     * @return \Pggns\MidocoApi\OrderSD\StructType\ChangeLogDTO
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->key = $key;
        
        return $this;
    }
    /**
     * Get subType value
     * @return string|null
     */
    public function getSubType(): ?string
    {
        return $this->subType;
    }
    /**
     * Set subType value
     * @param string $subType
     * @return \Pggns\MidocoApi\OrderSD\StructType\ChangeLogDTO
     */
    public function setSubType(?string $subType = null): self
    {
        // validation for constraint: string
        if (!is_null($subType) && !is_string($subType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subType, true), gettype($subType)), __LINE__);
        }
        $this->subType = $subType;
        
        return $this;
    }
    /**
     * Get timestamp value
     * @return string|null
     */
    public function getTimestamp(): ?string
    {
        return $this->timestamp;
    }
    /**
     * Set timestamp value
     * @param string $timestamp
     * @return \Pggns\MidocoApi\OrderSD\StructType\ChangeLogDTO
     */
    public function setTimestamp(?string $timestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($timestamp) && !is_string($timestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timestamp, true), gettype($timestamp)), __LINE__);
        }
        $this->timestamp = $timestamp;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\OrderSD\StructType\ChangeLogDTO
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\OrderSD\StructType\ChangeLogDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get userId value
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $userId
     * @return \Pggns\MidocoApi\OrderSD\StructType\ChangeLogDTO
     */
    public function setUserId(?int $userId = null): self
    {
        // validation for constraint: int
        if (!is_null($userId) && !(is_int($userId) || ctype_digit($userId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->userId = $userId;
        
        return $this;
    }
    /**
     * Get xmlAfter value
     * @return string|null
     */
    public function getXmlAfter(): ?string
    {
        return $this->xmlAfter;
    }
    /**
     * Set xmlAfter value
     * @param string $xmlAfter
     * @return \Pggns\MidocoApi\OrderSD\StructType\ChangeLogDTO
     */
    public function setXmlAfter(?string $xmlAfter = null): self
    {
        // validation for constraint: string
        if (!is_null($xmlAfter) && !is_string($xmlAfter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($xmlAfter, true), gettype($xmlAfter)), __LINE__);
        }
        $this->xmlAfter = $xmlAfter;
        
        return $this;
    }
    /**
     * Get xmlBefore value
     * @return string|null
     */
    public function getXmlBefore(): ?string
    {
        return $this->xmlBefore;
    }
    /**
     * Set xmlBefore value
     * @param string $xmlBefore
     * @return \Pggns\MidocoApi\OrderSD\StructType\ChangeLogDTO
     */
    public function setXmlBefore(?string $xmlBefore = null): self
    {
        // validation for constraint: string
        if (!is_null($xmlBefore) && !is_string($xmlBefore)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($xmlBefore, true), gettype($xmlBefore)), __LINE__);
        }
        $this->xmlBefore = $xmlBefore;
        
        return $this;
    }
}
