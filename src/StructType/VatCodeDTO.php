<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VatCodeDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class VatCodeDTO extends AbstractStructBase
{
    /**
     * The adjustAmount
     * @var bool|null
     */
    protected ?bool $adjustAmount = null;
    /**
     * The countryCode
     * @var string|null
     */
    protected ?string $countryCode = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The factor
     * @var float|null
     */
    protected ?float $factor = null;
    /**
     * The isInputVat
     * @var bool|null
     */
    protected ?bool $isInputVat = null;
    /**
     * The isVisible
     * @var bool|null
     */
    protected ?bool $isVisible = null;
    /**
     * The percent
     * @var float|null
     */
    protected ?float $percent = null;
    /**
     * The reverseChargePercent
     * @var float|null
     */
    protected ?float $reverseChargePercent = null;
    /**
     * The secondaryPercent
     * @var float|null
     */
    protected ?float $secondaryPercent = null;
    /**
     * The secondaryVatCode
     * @var string|null
     */
    protected ?string $secondaryVatCode = null;
    /**
     * The validFrom
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The validUntil
     * @var string|null
     */
    protected ?string $validUntil = null;
    /**
     * The vatCode
     * @var string|null
     */
    protected ?string $vatCode = null;
    /**
     * The voidInputVat
     * @var bool|null
     */
    protected ?bool $voidInputVat = null;
    /**
     * Constructor method for VatCodeDTO
     * @uses VatCodeDTO::setAdjustAmount()
     * @uses VatCodeDTO::setCountryCode()
     * @uses VatCodeDTO::setDescription()
     * @uses VatCodeDTO::setFactor()
     * @uses VatCodeDTO::setIsInputVat()
     * @uses VatCodeDTO::setIsVisible()
     * @uses VatCodeDTO::setPercent()
     * @uses VatCodeDTO::setReverseChargePercent()
     * @uses VatCodeDTO::setSecondaryPercent()
     * @uses VatCodeDTO::setSecondaryVatCode()
     * @uses VatCodeDTO::setValidFrom()
     * @uses VatCodeDTO::setValidUntil()
     * @uses VatCodeDTO::setVatCode()
     * @uses VatCodeDTO::setVoidInputVat()
     * @param bool $adjustAmount
     * @param string $countryCode
     * @param string $description
     * @param float $factor
     * @param bool $isInputVat
     * @param bool $isVisible
     * @param float $percent
     * @param float $reverseChargePercent
     * @param float $secondaryPercent
     * @param string $secondaryVatCode
     * @param string $validFrom
     * @param string $validUntil
     * @param string $vatCode
     * @param bool $voidInputVat
     */
    public function __construct(?bool $adjustAmount = null, ?string $countryCode = null, ?string $description = null, ?float $factor = null, ?bool $isInputVat = null, ?bool $isVisible = null, ?float $percent = null, ?float $reverseChargePercent = null, ?float $secondaryPercent = null, ?string $secondaryVatCode = null, ?string $validFrom = null, ?string $validUntil = null, ?string $vatCode = null, ?bool $voidInputVat = null)
    {
        $this
            ->setAdjustAmount($adjustAmount)
            ->setCountryCode($countryCode)
            ->setDescription($description)
            ->setFactor($factor)
            ->setIsInputVat($isInputVat)
            ->setIsVisible($isVisible)
            ->setPercent($percent)
            ->setReverseChargePercent($reverseChargePercent)
            ->setSecondaryPercent($secondaryPercent)
            ->setSecondaryVatCode($secondaryVatCode)
            ->setValidFrom($validFrom)
            ->setValidUntil($validUntil)
            ->setVatCode($vatCode)
            ->setVoidInputVat($voidInputVat);
    }
    /**
     * Get adjustAmount value
     * @return bool|null
     */
    public function getAdjustAmount(): ?bool
    {
        return $this->adjustAmount;
    }
    /**
     * Set adjustAmount value
     * @param bool $adjustAmount
     * @return \Pggns\MidocoApi\OrderSD\StructType\VatCodeDTO
     */
    public function setAdjustAmount(?bool $adjustAmount = null): self
    {
        // validation for constraint: boolean
        if (!is_null($adjustAmount) && !is_bool($adjustAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($adjustAmount, true), gettype($adjustAmount)), __LINE__);
        }
        $this->adjustAmount = $adjustAmount;
        
        return $this;
    }
    /**
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $countryCode
     * @return \Pggns\MidocoApi\OrderSD\StructType\VatCodeDTO
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\OrderSD\StructType\VatCodeDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get factor value
     * @return float|null
     */
    public function getFactor(): ?float
    {
        return $this->factor;
    }
    /**
     * Set factor value
     * @param float $factor
     * @return \Pggns\MidocoApi\OrderSD\StructType\VatCodeDTO
     */
    public function setFactor(?float $factor = null): self
    {
        // validation for constraint: float
        if (!is_null($factor) && !(is_float($factor) || is_numeric($factor))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($factor, true), gettype($factor)), __LINE__);
        }
        $this->factor = $factor;
        
        return $this;
    }
    /**
     * Get isInputVat value
     * @return bool|null
     */
    public function getIsInputVat(): ?bool
    {
        return $this->isInputVat;
    }
    /**
     * Set isInputVat value
     * @param bool $isInputVat
     * @return \Pggns\MidocoApi\OrderSD\StructType\VatCodeDTO
     */
    public function setIsInputVat(?bool $isInputVat = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isInputVat) && !is_bool($isInputVat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isInputVat, true), gettype($isInputVat)), __LINE__);
        }
        $this->isInputVat = $isInputVat;
        
        return $this;
    }
    /**
     * Get isVisible value
     * @return bool|null
     */
    public function getIsVisible(): ?bool
    {
        return $this->isVisible;
    }
    /**
     * Set isVisible value
     * @param bool $isVisible
     * @return \Pggns\MidocoApi\OrderSD\StructType\VatCodeDTO
     */
    public function setIsVisible(?bool $isVisible = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isVisible) && !is_bool($isVisible)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isVisible, true), gettype($isVisible)), __LINE__);
        }
        $this->isVisible = $isVisible;
        
        return $this;
    }
    /**
     * Get percent value
     * @return float|null
     */
    public function getPercent(): ?float
    {
        return $this->percent;
    }
    /**
     * Set percent value
     * @param float $percent
     * @return \Pggns\MidocoApi\OrderSD\StructType\VatCodeDTO
     */
    public function setPercent(?float $percent = null): self
    {
        // validation for constraint: float
        if (!is_null($percent) && !(is_float($percent) || is_numeric($percent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($percent, true), gettype($percent)), __LINE__);
        }
        $this->percent = $percent;
        
        return $this;
    }
    /**
     * Get reverseChargePercent value
     * @return float|null
     */
    public function getReverseChargePercent(): ?float
    {
        return $this->reverseChargePercent;
    }
    /**
     * Set reverseChargePercent value
     * @param float $reverseChargePercent
     * @return \Pggns\MidocoApi\OrderSD\StructType\VatCodeDTO
     */
    public function setReverseChargePercent(?float $reverseChargePercent = null): self
    {
        // validation for constraint: float
        if (!is_null($reverseChargePercent) && !(is_float($reverseChargePercent) || is_numeric($reverseChargePercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($reverseChargePercent, true), gettype($reverseChargePercent)), __LINE__);
        }
        $this->reverseChargePercent = $reverseChargePercent;
        
        return $this;
    }
    /**
     * Get secondaryPercent value
     * @return float|null
     */
    public function getSecondaryPercent(): ?float
    {
        return $this->secondaryPercent;
    }
    /**
     * Set secondaryPercent value
     * @param float $secondaryPercent
     * @return \Pggns\MidocoApi\OrderSD\StructType\VatCodeDTO
     */
    public function setSecondaryPercent(?float $secondaryPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($secondaryPercent) && !(is_float($secondaryPercent) || is_numeric($secondaryPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($secondaryPercent, true), gettype($secondaryPercent)), __LINE__);
        }
        $this->secondaryPercent = $secondaryPercent;
        
        return $this;
    }
    /**
     * Get secondaryVatCode value
     * @return string|null
     */
    public function getSecondaryVatCode(): ?string
    {
        return $this->secondaryVatCode;
    }
    /**
     * Set secondaryVatCode value
     * @param string $secondaryVatCode
     * @return \Pggns\MidocoApi\OrderSD\StructType\VatCodeDTO
     */
    public function setSecondaryVatCode(?string $secondaryVatCode = null): self
    {
        // validation for constraint: string
        if (!is_null($secondaryVatCode) && !is_string($secondaryVatCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($secondaryVatCode, true), gettype($secondaryVatCode)), __LINE__);
        }
        $this->secondaryVatCode = $secondaryVatCode;
        
        return $this;
    }
    /**
     * Get validFrom value
     * @return string|null
     */
    public function getValidFrom(): ?string
    {
        return $this->validFrom;
    }
    /**
     * Set validFrom value
     * @param string $validFrom
     * @return \Pggns\MidocoApi\OrderSD\StructType\VatCodeDTO
     */
    public function setValidFrom(?string $validFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($validFrom) && !is_string($validFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validFrom, true), gettype($validFrom)), __LINE__);
        }
        $this->validFrom = $validFrom;
        
        return $this;
    }
    /**
     * Get validUntil value
     * @return string|null
     */
    public function getValidUntil(): ?string
    {
        return $this->validUntil;
    }
    /**
     * Set validUntil value
     * @param string $validUntil
     * @return \Pggns\MidocoApi\OrderSD\StructType\VatCodeDTO
     */
    public function setValidUntil(?string $validUntil = null): self
    {
        // validation for constraint: string
        if (!is_null($validUntil) && !is_string($validUntil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validUntil, true), gettype($validUntil)), __LINE__);
        }
        $this->validUntil = $validUntil;
        
        return $this;
    }
    /**
     * Get vatCode value
     * @return string|null
     */
    public function getVatCode(): ?string
    {
        return $this->vatCode;
    }
    /**
     * Set vatCode value
     * @param string $vatCode
     * @return \Pggns\MidocoApi\OrderSD\StructType\VatCodeDTO
     */
    public function setVatCode(?string $vatCode = null): self
    {
        // validation for constraint: string
        if (!is_null($vatCode) && !is_string($vatCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatCode, true), gettype($vatCode)), __LINE__);
        }
        $this->vatCode = $vatCode;
        
        return $this;
    }
    /**
     * Get voidInputVat value
     * @return bool|null
     */
    public function getVoidInputVat(): ?bool
    {
        return $this->voidInputVat;
    }
    /**
     * Set voidInputVat value
     * @param bool $voidInputVat
     * @return \Pggns\MidocoApi\OrderSD\StructType\VatCodeDTO
     */
    public function setVoidInputVat(?bool $voidInputVat = null): self
    {
        // validation for constraint: boolean
        if (!is_null($voidInputVat) && !is_bool($voidInputVat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($voidInputVat, true), gettype($voidInputVat)), __LINE__);
        }
        $this->voidInputVat = $voidInputVat;
        
        return $this;
    }
}
