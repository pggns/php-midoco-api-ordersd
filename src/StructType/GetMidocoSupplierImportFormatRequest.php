<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoSupplierImportFormatRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoSupplierImportFormatRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierAgencyImportFormat
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierAgencyImportFormat
     * @var \Pggns\MidocoApi\OrderSD\StructType\SupplierAgencyImportFormatDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\SupplierAgencyImportFormatDTO $MidocoSupplierAgencyImportFormat = null;
    /**
     * The loadAllWithFormatName
     * @var bool|null
     */
    protected ?bool $loadAllWithFormatName = null;
    /**
     * Constructor method for GetMidocoSupplierImportFormatRequest
     * @uses GetMidocoSupplierImportFormatRequest::setMidocoSupplierAgencyImportFormat()
     * @uses GetMidocoSupplierImportFormatRequest::setLoadAllWithFormatName()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SupplierAgencyImportFormatDTO $midocoSupplierAgencyImportFormat
     * @param bool $loadAllWithFormatName
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\SupplierAgencyImportFormatDTO $midocoSupplierAgencyImportFormat = null, ?bool $loadAllWithFormatName = null)
    {
        $this
            ->setMidocoSupplierAgencyImportFormat($midocoSupplierAgencyImportFormat)
            ->setLoadAllWithFormatName($loadAllWithFormatName);
    }
    /**
     * Get MidocoSupplierAgencyImportFormat value
     * @return \Pggns\MidocoApi\OrderSD\StructType\SupplierAgencyImportFormatDTO|null
     */
    public function getMidocoSupplierAgencyImportFormat(): ?\Pggns\MidocoApi\OrderSD\StructType\SupplierAgencyImportFormatDTO
    {
        return $this->MidocoSupplierAgencyImportFormat;
    }
    /**
     * Set MidocoSupplierAgencyImportFormat value
     * @param \Pggns\MidocoApi\OrderSD\StructType\SupplierAgencyImportFormatDTO $midocoSupplierAgencyImportFormat
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetMidocoSupplierImportFormatRequest
     */
    public function setMidocoSupplierAgencyImportFormat(?\Pggns\MidocoApi\OrderSD\StructType\SupplierAgencyImportFormatDTO $midocoSupplierAgencyImportFormat = null): self
    {
        $this->MidocoSupplierAgencyImportFormat = $midocoSupplierAgencyImportFormat;
        
        return $this;
    }
    /**
     * Get loadAllWithFormatName value
     * @return bool|null
     */
    public function getLoadAllWithFormatName(): ?bool
    {
        return $this->loadAllWithFormatName;
    }
    /**
     * Set loadAllWithFormatName value
     * @param bool $loadAllWithFormatName
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetMidocoSupplierImportFormatRequest
     */
    public function setLoadAllWithFormatName(?bool $loadAllWithFormatName = null): self
    {
        // validation for constraint: boolean
        if (!is_null($loadAllWithFormatName) && !is_bool($loadAllWithFormatName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($loadAllWithFormatName, true), gettype($loadAllWithFormatName)), __LINE__);
        }
        $this->loadAllWithFormatName = $loadAllWithFormatName;
        
        return $this;
    }
}
