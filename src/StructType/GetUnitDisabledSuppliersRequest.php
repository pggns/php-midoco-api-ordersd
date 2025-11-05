<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUnitDisabledSuppliersRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetUnitDisabledSuppliersRequest extends AbstractStructBase
{
    /**
     * The unitName
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    protected string $unitName;
    /**
     * Constructor method for GetUnitDisabledSuppliersRequest
     * @uses GetUnitDisabledSuppliersRequest::setUnitName()
     * @param string $unitName
     */
    public function __construct(string $unitName)
    {
        $this
            ->setUnitName($unitName);
    }
    /**
     * Get unitName value
     * @return string
     */
    public function getUnitName(): string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetUnitDisabledSuppliersRequest
     */
    public function setUnitName(string $unitName): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
}
