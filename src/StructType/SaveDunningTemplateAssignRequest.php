<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDunningTemplateAssignRequest StructType
 * @subpackage Structs
 */
class SaveDunningTemplateAssignRequest extends AbstractStructBase
{
    /**
     * The MidocoDunningTemplateAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoDunningTemplateAssign
     * @var \Pggns\MidocoApi\OrderSD\StructType\DunningTemplateAssignDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\DunningTemplateAssignDTO $MidocoDunningTemplateAssign = null;
    /**
     * Constructor method for SaveDunningTemplateAssignRequest
     * @uses SaveDunningTemplateAssignRequest::setMidocoDunningTemplateAssign()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DunningTemplateAssignDTO $midocoDunningTemplateAssign
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\DunningTemplateAssignDTO $midocoDunningTemplateAssign = null)
    {
        $this
            ->setMidocoDunningTemplateAssign($midocoDunningTemplateAssign);
    }
    /**
     * Get MidocoDunningTemplateAssign value
     * @return \Pggns\MidocoApi\OrderSD\StructType\DunningTemplateAssignDTO|null
     */
    public function getMidocoDunningTemplateAssign(): ?\Pggns\MidocoApi\OrderSD\StructType\DunningTemplateAssignDTO
    {
        return $this->MidocoDunningTemplateAssign;
    }
    /**
     * Set MidocoDunningTemplateAssign value
     * @param \Pggns\MidocoApi\OrderSD\StructType\DunningTemplateAssignDTO $midocoDunningTemplateAssign
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveDunningTemplateAssignRequest
     */
    public function setMidocoDunningTemplateAssign(?\Pggns\MidocoApi\OrderSD\StructType\DunningTemplateAssignDTO $midocoDunningTemplateAssign = null): self
    {
        $this->MidocoDunningTemplateAssign = $midocoDunningTemplateAssign;
        
        return $this;
    }
}
