<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplierSettlPaymentCondHistoricDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SupplierSettlPaymentCondHistoricDTO extends AbstractStructBase
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
     * The validCreationTravel
     * @var string|null
     */
    protected ?string $validCreationTravel = null;
    /**
     * The validDate
     * @var string|null
     */
    protected ?string $validDate = null;
    /**
     * The validFrom
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * Constructor method for SupplierSettlPaymentCondHistoricDTO
     * @uses SupplierSettlPaymentCondHistoricDTO::setFinalPaymentDays()
     * @uses SupplierSettlPaymentCondHistoricDTO::setImmediatePayment()
     * @uses SupplierSettlPaymentCondHistoricDTO::setSettlementType()
     * @uses SupplierSettlPaymentCondHistoricDTO::setSupplierId()
     * @uses SupplierSettlPaymentCondHistoricDTO::setTraveltype()
     * @uses SupplierSettlPaymentCondHistoricDTO::setValidCreationTravel()
     * @uses SupplierSettlPaymentCondHistoricDTO::setValidDate()
     * @uses SupplierSettlPaymentCondHistoricDTO::setValidFrom()
     * @param int $finalPaymentDays
     * @param bool $immediatePayment
     * @param string $settlementType
     * @param string $supplierId
     * @param string $traveltype
     * @param string $validCreationTravel
     * @param string $validDate
     * @param string $validFrom
     */
    public function __construct(?int $finalPaymentDays = null, ?bool $immediatePayment = null, ?string $settlementType = null, ?string $supplierId = null, ?string $traveltype = null, ?string $validCreationTravel = null, ?string $validDate = null, ?string $validFrom = null)
    {
        $this
            ->setFinalPaymentDays($finalPaymentDays)
            ->setImmediatePayment($immediatePayment)
            ->setSettlementType($settlementType)
            ->setSupplierId($supplierId)
            ->setTraveltype($traveltype)
            ->setValidCreationTravel($validCreationTravel)
            ->setValidDate($validDate)
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
     * @return \Pggns\MidocoApi\OrderSD\StructType\SupplierSettlPaymentCondHistoricDTO
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
     * @return \Pggns\MidocoApi\OrderSD\StructType\SupplierSettlPaymentCondHistoricDTO
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
     * @return \Pggns\MidocoApi\OrderSD\StructType\SupplierSettlPaymentCondHistoricDTO
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
     * @return \Pggns\MidocoApi\OrderSD\StructType\SupplierSettlPaymentCondHistoricDTO
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
     * @return \Pggns\MidocoApi\OrderSD\StructType\SupplierSettlPaymentCondHistoricDTO
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
     * Get validCreationTravel value
     * @return string|null
     */
    public function getValidCreationTravel(): ?string
    {
        return $this->validCreationTravel;
    }
    /**
     * Set validCreationTravel value
     * @param string $validCreationTravel
     * @return \Pggns\MidocoApi\OrderSD\StructType\SupplierSettlPaymentCondHistoricDTO
     */
    public function setValidCreationTravel(?string $validCreationTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($validCreationTravel) && !is_string($validCreationTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validCreationTravel, true), gettype($validCreationTravel)), __LINE__);
        }
        $this->validCreationTravel = $validCreationTravel;
        
        return $this;
    }
    /**
     * Get validDate value
     * @return string|null
     */
    public function getValidDate(): ?string
    {
        return $this->validDate;
    }
    /**
     * Set validDate value
     * @param string $validDate
     * @return \Pggns\MidocoApi\OrderSD\StructType\SupplierSettlPaymentCondHistoricDTO
     */
    public function setValidDate(?string $validDate = null): self
    {
        // validation for constraint: string
        if (!is_null($validDate) && !is_string($validDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validDate, true), gettype($validDate)), __LINE__);
        }
        $this->validDate = $validDate;
        
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
     * @return \Pggns\MidocoApi\OrderSD\StructType\SupplierSettlPaymentCondHistoricDTO
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
