<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSichVExportProtocolResponse StructType
 * @subpackage Structs
 */
class GetSichVExportProtocolResponse extends AbstractStructBase
{
    /**
     * The MidocoTssExportProtocol
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    protected array $MidocoTssExportProtocol = [];
    /**
     * Constructor method for GetSichVExportProtocolResponse
     * @uses GetSichVExportProtocolResponse::setMidocoTssExportProtocol()
     * @param mixed[] $midocoTssExportProtocol
     */
    public function __construct(array $midocoTssExportProtocol = [])
    {
        $this
            ->setMidocoTssExportProtocol($midocoTssExportProtocol);
    }
    /**
     * Get MidocoTssExportProtocol value
     * @return mixed[]
     */
    public function getMidocoTssExportProtocol(): array
    {
        return $this->MidocoTssExportProtocol;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTssExportProtocol method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTssExportProtocol method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTssExportProtocolForArrayConstraintsFromSetMidocoTssExportProtocol(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSichVExportProtocolResponseMidocoTssExportProtocolItem) {
            // validation for constraint: itemType
            if (false) {
                $invalidValues[] = is_object($getSichVExportProtocolResponseMidocoTssExportProtocolItem) ? get_class($getSichVExportProtocolResponseMidocoTssExportProtocolItem) : sprintf('%s(%s)', gettype($getSichVExportProtocolResponseMidocoTssExportProtocolItem), var_export($getSichVExportProtocolResponseMidocoTssExportProtocolItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTssExportProtocol property can only contain items of type mixed, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTssExportProtocol value
     * @throws InvalidArgumentException
     * @param mixed[] $midocoTssExportProtocol
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetSichVExportProtocolResponse
     */
    public function setMidocoTssExportProtocol(array $midocoTssExportProtocol = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTssExportProtocolArrayErrorMessage = self::validateMidocoTssExportProtocolForArrayConstraintsFromSetMidocoTssExportProtocol($midocoTssExportProtocol))) {
            throw new InvalidArgumentException($midocoTssExportProtocolArrayErrorMessage, __LINE__);
        }
        $this->MidocoTssExportProtocol = $midocoTssExportProtocol;
        
        return $this;
    }
    /**
     * Add item to MidocoTssExportProtocol value
     * @throws InvalidArgumentException
     * @param mixed $item
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetSichVExportProtocolResponse
     */
    public function addToMidocoTssExportProtocol(mixed $item): self
    {
        // validation for constraint: itemType
        if (false) {
            throw new InvalidArgumentException(sprintf('The MidocoTssExportProtocol property can only contain items of type mixed, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTssExportProtocol[] = $item;
        
        return $this;
    }
}
