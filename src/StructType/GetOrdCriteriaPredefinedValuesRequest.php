<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrdCriteriaPredefinedValuesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrdCriteriaPredefinedValuesRequest extends AbstractStructBase
{
    /**
     * The MidocoOrdCriteriaType
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * - ref: MidocoOrdCriteriaType
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoOrdCriteriaType
     */
    protected \Pggns\MidocoApi\OrderSD\StructType\MidocoOrdCriteriaType $MidocoOrdCriteriaType;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * Constructor method for GetOrdCriteriaPredefinedValuesRequest
     * @uses GetOrdCriteriaPredefinedValuesRequest::setMidocoOrdCriteriaType()
     * @uses GetOrdCriteriaPredefinedValuesRequest::setName()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoOrdCriteriaType $midocoOrdCriteriaType
     * @param string $name
     */
    public function __construct(\Pggns\MidocoApi\OrderSD\StructType\MidocoOrdCriteriaType $midocoOrdCriteriaType, ?string $name = null)
    {
        $this
            ->setMidocoOrdCriteriaType($midocoOrdCriteriaType)
            ->setName($name);
    }
    /**
     * Get MidocoOrdCriteriaType value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoOrdCriteriaType
     */
    public function getMidocoOrdCriteriaType(): \Pggns\MidocoApi\OrderSD\StructType\MidocoOrdCriteriaType
    {
        return $this->MidocoOrdCriteriaType;
    }
    /**
     * Set MidocoOrdCriteriaType value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoOrdCriteriaType $midocoOrdCriteriaType
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetOrdCriteriaPredefinedValuesRequest
     */
    public function setMidocoOrdCriteriaType(\Pggns\MidocoApi\OrderSD\StructType\MidocoOrdCriteriaType $midocoOrdCriteriaType): self
    {
        $this->MidocoOrdCriteriaType = $midocoOrdCriteriaType;
        
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
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetOrdCriteriaPredefinedValuesRequest
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
}
