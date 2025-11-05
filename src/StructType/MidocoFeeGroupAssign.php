<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoFeeGroupAssign StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoFeeGroupAssign extends FeeAssignDTO
{
    /**
     * The MidocoFeeType
     * Meta information extracted from the WSDL
     * - ref: MidocoFeeType
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoFeeType|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoFeeType $MidocoFeeType = null;
    /**
     * The feeGroupComment
     * @var string|null
     */
    protected ?string $feeGroupComment = null;
    /**
     * The selected
     * @var bool|null
     */
    protected ?bool $selected = null;
    /**
     * The isNew
     * Meta information extracted from the WSDL
     * - documentation: for GUI color copy purpose
     * @var bool|null
     */
    protected ?bool $isNew = null;
    /**
     * The isFeeValueFromFeeType
     * Meta information extracted from the WSDL
     * - documentation: check whether fee value is from fee type table or not
     * @var bool|null
     */
    protected ?bool $isFeeValueFromFeeType = null;
    /**
     * The oldFeeValue
     * Meta information extracted from the WSDL
     * - documentation: Old fee value will be created after update the fee assign value in GUI and uses as a temp value to save the original fee value
     * @var float|null
     */
    protected ?float $oldFeeValue = null;
    /**
     * The newFeeValue
     * Meta information extracted from the WSDL
     * - documentation: New fee value will be created after update the fee assign value in GUI
     * @var float|null
     */
    protected ?float $newFeeValue = null;
    /**
     * The feeGroupDescription
     * Meta information extracted from the WSDL
     * - documentation: Add description from feeGroup to MidocoFeeGroupAssign and show it in GUI
     * @var string|null
     */
    protected ?string $feeGroupDescription = null;
    /**
     * The ticketTypeDescription
     * Meta information extracted from the WSDL
     * - documentation: Add ticket type description to MidocoFeeGroupAssign based of ticket type
     * @var string|null
     */
    protected ?string $ticketTypeDescription = null;
    /**
     * Constructor method for MidocoFeeGroupAssign
     * @uses MidocoFeeGroupAssign::setMidocoFeeType()
     * @uses MidocoFeeGroupAssign::setFeeGroupComment()
     * @uses MidocoFeeGroupAssign::setSelected()
     * @uses MidocoFeeGroupAssign::setIsNew()
     * @uses MidocoFeeGroupAssign::setIsFeeValueFromFeeType()
     * @uses MidocoFeeGroupAssign::setOldFeeValue()
     * @uses MidocoFeeGroupAssign::setNewFeeValue()
     * @uses MidocoFeeGroupAssign::setFeeGroupDescription()
     * @uses MidocoFeeGroupAssign::setTicketTypeDescription()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoFeeType $midocoFeeType
     * @param string $feeGroupComment
     * @param bool $selected
     * @param bool $isNew
     * @param bool $isFeeValueFromFeeType
     * @param float $oldFeeValue
     * @param float $newFeeValue
     * @param string $feeGroupDescription
     * @param string $ticketTypeDescription
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoFeeType $midocoFeeType = null, ?string $feeGroupComment = null, ?bool $selected = null, ?bool $isNew = null, ?bool $isFeeValueFromFeeType = null, ?float $oldFeeValue = null, ?float $newFeeValue = null, ?string $feeGroupDescription = null, ?string $ticketTypeDescription = null)
    {
        $this
            ->setMidocoFeeType($midocoFeeType)
            ->setFeeGroupComment($feeGroupComment)
            ->setSelected($selected)
            ->setIsNew($isNew)
            ->setIsFeeValueFromFeeType($isFeeValueFromFeeType)
            ->setOldFeeValue($oldFeeValue)
            ->setNewFeeValue($newFeeValue)
            ->setFeeGroupDescription($feeGroupDescription)
            ->setTicketTypeDescription($ticketTypeDescription);
    }
    /**
     * Get MidocoFeeType value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoFeeType|null
     */
    public function getMidocoFeeType(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoFeeType
    {
        return $this->MidocoFeeType;
    }
    /**
     * Set MidocoFeeType value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoFeeType $midocoFeeType
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoFeeGroupAssign
     */
    public function setMidocoFeeType(?\Pggns\MidocoApi\OrderSD\StructType\MidocoFeeType $midocoFeeType = null): self
    {
        $this->MidocoFeeType = $midocoFeeType;
        
        return $this;
    }
    /**
     * Get feeGroupComment value
     * @return string|null
     */
    public function getFeeGroupComment(): ?string
    {
        return $this->feeGroupComment;
    }
    /**
     * Set feeGroupComment value
     * @param string $feeGroupComment
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoFeeGroupAssign
     */
    public function setFeeGroupComment(?string $feeGroupComment = null): self
    {
        // validation for constraint: string
        if (!is_null($feeGroupComment) && !is_string($feeGroupComment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeGroupComment, true), gettype($feeGroupComment)), __LINE__);
        }
        $this->feeGroupComment = $feeGroupComment;
        
        return $this;
    }
    /**
     * Get selected value
     * @return bool|null
     */
    public function getSelected(): ?bool
    {
        return $this->selected;
    }
    /**
     * Set selected value
     * @param bool $selected
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoFeeGroupAssign
     */
    public function setSelected(?bool $selected = null): self
    {
        // validation for constraint: boolean
        if (!is_null($selected) && !is_bool($selected)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($selected, true), gettype($selected)), __LINE__);
        }
        $this->selected = $selected;
        
        return $this;
    }
    /**
     * Get isNew value
     * @return bool|null
     */
    public function getIsNew(): ?bool
    {
        return $this->isNew;
    }
    /**
     * Set isNew value
     * @param bool $isNew
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoFeeGroupAssign
     */
    public function setIsNew(?bool $isNew = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isNew) && !is_bool($isNew)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isNew, true), gettype($isNew)), __LINE__);
        }
        $this->isNew = $isNew;
        
        return $this;
    }
    /**
     * Get isFeeValueFromFeeType value
     * @return bool|null
     */
    public function getIsFeeValueFromFeeType(): ?bool
    {
        return $this->isFeeValueFromFeeType;
    }
    /**
     * Set isFeeValueFromFeeType value
     * @param bool $isFeeValueFromFeeType
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoFeeGroupAssign
     */
    public function setIsFeeValueFromFeeType(?bool $isFeeValueFromFeeType = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isFeeValueFromFeeType) && !is_bool($isFeeValueFromFeeType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isFeeValueFromFeeType, true), gettype($isFeeValueFromFeeType)), __LINE__);
        }
        $this->isFeeValueFromFeeType = $isFeeValueFromFeeType;
        
        return $this;
    }
    /**
     * Get oldFeeValue value
     * @return float|null
     */
    public function getOldFeeValue(): ?float
    {
        return $this->oldFeeValue;
    }
    /**
     * Set oldFeeValue value
     * @param float $oldFeeValue
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoFeeGroupAssign
     */
    public function setOldFeeValue(?float $oldFeeValue = null): self
    {
        // validation for constraint: float
        if (!is_null($oldFeeValue) && !(is_float($oldFeeValue) || is_numeric($oldFeeValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($oldFeeValue, true), gettype($oldFeeValue)), __LINE__);
        }
        $this->oldFeeValue = $oldFeeValue;
        
        return $this;
    }
    /**
     * Get newFeeValue value
     * @return float|null
     */
    public function getNewFeeValue(): ?float
    {
        return $this->newFeeValue;
    }
    /**
     * Set newFeeValue value
     * @param float $newFeeValue
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoFeeGroupAssign
     */
    public function setNewFeeValue(?float $newFeeValue = null): self
    {
        // validation for constraint: float
        if (!is_null($newFeeValue) && !(is_float($newFeeValue) || is_numeric($newFeeValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($newFeeValue, true), gettype($newFeeValue)), __LINE__);
        }
        $this->newFeeValue = $newFeeValue;
        
        return $this;
    }
    /**
     * Get feeGroupDescription value
     * @return string|null
     */
    public function getFeeGroupDescription(): ?string
    {
        return $this->feeGroupDescription;
    }
    /**
     * Set feeGroupDescription value
     * @param string $feeGroupDescription
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoFeeGroupAssign
     */
    public function setFeeGroupDescription(?string $feeGroupDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($feeGroupDescription) && !is_string($feeGroupDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeGroupDescription, true), gettype($feeGroupDescription)), __LINE__);
        }
        $this->feeGroupDescription = $feeGroupDescription;
        
        return $this;
    }
    /**
     * Get ticketTypeDescription value
     * @return string|null
     */
    public function getTicketTypeDescription(): ?string
    {
        return $this->ticketTypeDescription;
    }
    /**
     * Set ticketTypeDescription value
     * @param string $ticketTypeDescription
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoFeeGroupAssign
     */
    public function setTicketTypeDescription(?string $ticketTypeDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketTypeDescription) && !is_string($ticketTypeDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketTypeDescription, true), gettype($ticketTypeDescription)), __LINE__);
        }
        $this->ticketTypeDescription = $ticketTypeDescription;
        
        return $this;
    }
}
