<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSupplierSettlementAccount StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoSupplierSettlementAccount extends SupplierSettlemAccountDTO
{
    /**
     * The isInheritance
     * @var bool|null
     */
    protected ?bool $isInheritance = null;
    /**
     * The isHistorical
     * @var bool|null
     */
    protected ?bool $isHistorical = null;
    /**
     * The validDate
     * @var string|null
     */
    protected ?string $validDate = null;
    /**
     * The validCreationTravel
     * @var string|null
     */
    protected ?string $validCreationTravel = null;
    /**
     * The interimAccountWritable
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $interimAccountWritable = null;
    /**
     * The provisionReceivableAccountWritable
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $provisionReceivableAccountWritable = null;
    /**
     * Constructor method for MidocoSupplierSettlementAccount
     * @uses MidocoSupplierSettlementAccount::setIsInheritance()
     * @uses MidocoSupplierSettlementAccount::setIsHistorical()
     * @uses MidocoSupplierSettlementAccount::setValidDate()
     * @uses MidocoSupplierSettlementAccount::setValidCreationTravel()
     * @uses MidocoSupplierSettlementAccount::setInterimAccountWritable()
     * @uses MidocoSupplierSettlementAccount::setProvisionReceivableAccountWritable()
     * @param bool $isInheritance
     * @param bool $isHistorical
     * @param string $validDate
     * @param string $validCreationTravel
     * @param bool $interimAccountWritable
     * @param bool $provisionReceivableAccountWritable
     */
    public function __construct(?bool $isInheritance = null, ?bool $isHistorical = null, ?string $validDate = null, ?string $validCreationTravel = null, ?bool $interimAccountWritable = true, ?bool $provisionReceivableAccountWritable = true)
    {
        $this
            ->setIsInheritance($isInheritance)
            ->setIsHistorical($isHistorical)
            ->setValidDate($validDate)
            ->setValidCreationTravel($validCreationTravel)
            ->setInterimAccountWritable($interimAccountWritable)
            ->setProvisionReceivableAccountWritable($provisionReceivableAccountWritable);
    }
    /**
     * Get isInheritance value
     * @return bool|null
     */
    public function getIsInheritance(): ?bool
    {
        return $this->isInheritance;
    }
    /**
     * Set isInheritance value
     * @param bool $isInheritance
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierSettlementAccount
     */
    public function setIsInheritance(?bool $isInheritance = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isInheritance) && !is_bool($isInheritance)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isInheritance, true), gettype($isInheritance)), __LINE__);
        }
        $this->isInheritance = $isInheritance;
        
        return $this;
    }
    /**
     * Get isHistorical value
     * @return bool|null
     */
    public function getIsHistorical(): ?bool
    {
        return $this->isHistorical;
    }
    /**
     * Set isHistorical value
     * @param bool $isHistorical
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierSettlementAccount
     */
    public function setIsHistorical(?bool $isHistorical = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isHistorical) && !is_bool($isHistorical)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isHistorical, true), gettype($isHistorical)), __LINE__);
        }
        $this->isHistorical = $isHistorical;
        
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
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierSettlementAccount
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
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierSettlementAccount
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
     * Get interimAccountWritable value
     * @return bool|null
     */
    public function getInterimAccountWritable(): ?bool
    {
        return $this->interimAccountWritable;
    }
    /**
     * Set interimAccountWritable value
     * @param bool $interimAccountWritable
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierSettlementAccount
     */
    public function setInterimAccountWritable(?bool $interimAccountWritable = true): self
    {
        // validation for constraint: boolean
        if (!is_null($interimAccountWritable) && !is_bool($interimAccountWritable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($interimAccountWritable, true), gettype($interimAccountWritable)), __LINE__);
        }
        $this->interimAccountWritable = $interimAccountWritable;
        
        return $this;
    }
    /**
     * Get provisionReceivableAccountWritable value
     * @return bool|null
     */
    public function getProvisionReceivableAccountWritable(): ?bool
    {
        return $this->provisionReceivableAccountWritable;
    }
    /**
     * Set provisionReceivableAccountWritable value
     * @param bool $provisionReceivableAccountWritable
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierSettlementAccount
     */
    public function setProvisionReceivableAccountWritable(?bool $provisionReceivableAccountWritable = true): self
    {
        // validation for constraint: boolean
        if (!is_null($provisionReceivableAccountWritable) && !is_bool($provisionReceivableAccountWritable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($provisionReceivableAccountWritable, true), gettype($provisionReceivableAccountWritable)), __LINE__);
        }
        $this->provisionReceivableAccountWritable = $provisionReceivableAccountWritable;
        
        return $this;
    }
}
