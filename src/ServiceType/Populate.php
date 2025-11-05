<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Populate ServiceType
 * @subpackage Services
 */
class Populate extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\OrderSD\ServiceType\Populate
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named populateChangeLogInitially
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\PopulateChangeLogInitiallyRequest $paramPopulateChangeLogInitiallyRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\PopulateChangeLogInitiallyResponse|bool
     */
    public function populateChangeLogInitially(\Pggns\MidocoApi\OrderSD\StructType\PopulateChangeLogInitiallyRequest $paramPopulateChangeLogInitiallyRequest)
    {
        try {
            $this->setResult($resultPopulateChangeLogInitially = $this->getSoapClient()->__soapCall('populateChangeLogInitially', [
                $paramPopulateChangeLogInitiallyRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPopulateChangeLogInitially;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\OrderSD\StructType\PopulateChangeLogInitiallyResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
