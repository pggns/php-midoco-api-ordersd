<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAssignedMidocoRuleSetResponse StructType
 * @subpackage Structs
 */
class GetAssignedMidocoRuleSetResponse extends AbstractStructBase
{
    /**
     * The MidocoRuleSet
     * Meta information extracted from the WSDL
     * - ref: MidocoRuleSet
     * @var \Pggns\MidocoApi\OrderSD\StructType\RulesetDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\RulesetDTO $MidocoRuleSet = null;
    /**
     * Constructor method for GetAssignedMidocoRuleSetResponse
     * @uses GetAssignedMidocoRuleSetResponse::setMidocoRuleSet()
     * @param \Pggns\MidocoApi\OrderSD\StructType\RulesetDTO $midocoRuleSet
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\RulesetDTO $midocoRuleSet = null)
    {
        $this
            ->setMidocoRuleSet($midocoRuleSet);
    }
    /**
     * Get MidocoRuleSet value
     * @return \Pggns\MidocoApi\OrderSD\StructType\RulesetDTO|null
     */
    public function getMidocoRuleSet(): ?\Pggns\MidocoApi\OrderSD\StructType\RulesetDTO
    {
        return $this->MidocoRuleSet;
    }
    /**
     * Set MidocoRuleSet value
     * @param \Pggns\MidocoApi\OrderSD\StructType\RulesetDTO $midocoRuleSet
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetAssignedMidocoRuleSetResponse
     */
    public function setMidocoRuleSet(?\Pggns\MidocoApi\OrderSD\StructType\RulesetDTO $midocoRuleSet = null): self
    {
        $this->MidocoRuleSet = $midocoRuleSet;
        
        return $this;
    }
}
