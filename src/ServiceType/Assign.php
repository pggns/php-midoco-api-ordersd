<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Assign ServiceType
 * @subpackage Services
 */
class Assign extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\OrderSD\ServiceType\Assign
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named assignMidocoRuleSet
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\AssignMidocoRuleRequest $paramAssignMidocoRuleRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\AssignMidocoRuleResponse|bool
     */
    public function assignMidocoRuleSet(\Pggns\MidocoApi\OrderSD\StructType\AssignMidocoRuleRequest $paramAssignMidocoRuleRequest)
    {
        try {
            $this->setResult($resultAssignMidocoRuleSet = $this->getSoapClient()->__soapCall('assignMidocoRuleSet', [
                $paramAssignMidocoRuleRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAssignMidocoRuleSet;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named assignTemplateToSuppliers
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\TemplateSuppliersAssignType $paramAssignTemplateToSuppliersRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\AssignTemplateToSuppliersResponse|bool
     */
    public function assignTemplateToSuppliers(\Pggns\MidocoApi\OrderSD\StructType\TemplateSuppliersAssignType $paramAssignTemplateToSuppliersRequest)
    {
        try {
            $this->setResult($resultAssignTemplateToSuppliers = $this->getSoapClient()->__soapCall('assignTemplateToSuppliers', [
                $paramAssignTemplateToSuppliersRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAssignTemplateToSuppliers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\OrderSD\StructType\AssignMidocoRuleResponse|\Pggns\MidocoApi\OrderSD\StructType\AssignTemplateToSuppliersResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
