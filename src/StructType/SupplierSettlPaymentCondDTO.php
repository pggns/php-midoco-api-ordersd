<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplierSettlPaymentCondDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SupplierSettlPaymentCondDTO extends AbstractStructBase
{
    /**
     * The finalPaymentDays
     * @var int|null
     */
    protected ?int $finalPaymentDays = null;
    /**
     * The immediatePayment
     * @var bool|null
     */
    protected ?bool $immediatePayment = null;
    /**
     * The settlementType
     * @var string|null
     */
    protected ?string $settlementType = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The traveltype
     * @var string|null
     */
    protected ?string $traveltype = null;
    /**
     * The validFrom
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * Constructor method for SupplierSettlPaymentCondDTO
     * @uses SupplierSettlPaymentCondDTO::setFinalPaymentDays()
     * @uses SupplierSettlPaymentCondDTO::setImmediatePayment()
     * @uses SupplierSettlPaymentCondDTO::setSettlementType()
     * @uses SupplierSettlPaymentCondDTO::setSupplierId()
     * @uses SupplierSettlPaymentCondDTO::setTraveltype()
     * @uses SupplierSettlPaymentCondDTO::setValidFrom()
     * @param int $finalPaymentDays
     * @param bool $immediatePayment
     * @param string $settlementType
     * @param string $supplierId
     * @param string $traveltype
     * @param string $validFrom
     */
    public function __construct(?int $finalPaymentDays = null, ?bool $immediatePayment = null, ?string $settlementType = null, ?string $supplierId = null, ?string $traveltype = null, ?string $validFrom = null)
    {
        $this
            ->setFinalPaymentDays($finalPaymentDays)
            ->setImmediatePayment($immediatePayment)
            ->setSettlementType($settlementType)
            ->setSupplierId($supplierId)
            ->setTraveltype($traveltype)
            ->setValidFrom($validFrom);
    }
    /**
     * Get finalPaymentDays value
     * @return int|null
     */
    public function getFinalPaymentDays(): ?int
    {
        return $this->finalPaymentDays;
    }
    /**
     * Set finalPaymentDays value
     * @param int $finalPaymentDays
     * @return \Pggns\MidocoApi\OrderSD\StructType\SupplierSettlPaymentCondDTO
     */
    public function setFinalPaymentDays(?int $finalPaymentDays = null): self
    {
        // validation for constraint: int
        if (!is_null($finalPaymentDays) && !(is_int($finalPaymentDays) || ctype_digit($finalPaymentDays))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($finalPaymentDays, true), gettype($finalPaymentDays)), __LINE__);
        }
        $this->finalPaymentDays = $finalPaymentDays;
        
        return $this;
    }
    /**
     * Get immediatePayment value
     * @return bool|null
     */
    public function getImmediatePayment(): ?bool
    {
        return $this->immediatePayment;
    }
    /**
     * Set immediatePayment value
     * @param bool $immediatePayment
     * @return \Pggns\MidocoApi\OrderSD\StructType\SupplierSettlPaymentCondDTO
     */
    public function setImmediatePayment(?bool $immediatePayment = null): self
    {
        // validation for constraint: boolean
        if (!is_null($immediatePayment) && !is_bool($immediatePayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($immediatePayment, true), gettype($immediatePayment)), __LINE__);
        }
        $this->immediatePayment = $immediatePayment;
        
        return $this;
    }
    /**
     * Get settlementType value
     * @return string|null
     */
    public function getSettlementType(): ?string
    {
        return $this->settlementType;
    }
    /**
     * Set settlementType value
     * @param string $settlementType
     * @return \Pggns\MidocoApi\OrderSD\StructType\SupplierSettlPaymentCondDTO
     */
    public function setSettlementType(?string $settlementType = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementType) && !is_string($settlementType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementType, true), gettype($settlementType)), __LINE__);
        }
        $this->settlementType = $settlementType;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\OrderSD\StructType\SupplierSettlPaymentCondDTO
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get traveltype value
     * @return string|null
     */
    public function getTraveltype(): ?string
    {
        return $this->traveltype;
    }
    /**
     * Set traveltype value
     * @param string $traveltype
     * @return \Pggns\MidocoApi\OrderSD\StructType\SupplierSettlPaymentCondDTO
     */
    public function setTraveltype(?string $traveltype = null): self
    {
        // validation for constraint: string
        if (!is_null($traveltype) && !is_string($traveltype)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($traveltype, true), gettype($traveltype)), __LINE__);
        }
        $this->traveltype = $traveltype;
        
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
     * @return \Pggns\MidocoApi\OrderSD\StructType\SupplierSettlPaymentCondDTO
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
}
