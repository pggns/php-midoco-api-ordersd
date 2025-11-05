<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\OrderSD\ServiceType\Get
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named getAvailableSuppliers
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetAvailableSupplierRequest $paramGetAvailableSupplierRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetAvailableSupplierResponse|bool
     */
    public function getAvailableSuppliers(\Pggns\MidocoApi\OrderSD\StructType\GetAvailableSupplierRequest $paramGetAvailableSupplierRequest)
    {
        try {
            $this->setResult($resultGetAvailableSuppliers = $this->getSoapClient()->__soapCall('getAvailableSuppliers', [
                $paramGetAvailableSupplierRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableSuppliers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailableSupplierAddresses
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetSupplierAddressRequest $paramGetSupplierAddressRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetSupplierAddressResponse|bool
     */
    public function getAvailableSupplierAddresses(\Pggns\MidocoApi\OrderSD\StructType\GetSupplierAddressRequest $paramGetSupplierAddressRequest)
    {
        try {
            $this->setResult($resultGetAvailableSupplierAddresses = $this->getSoapClient()->__soapCall('getAvailableSupplierAddresses', [
                $paramGetSupplierAddressRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableSupplierAddresses;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailableSupplierCcCard
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetSupplierCcCardRequest $paramGetSupplierCcCardRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetSupplierCcCardResponse|bool
     */
    public function getAvailableSupplierCcCard(\Pggns\MidocoApi\OrderSD\StructType\GetSupplierCcCardRequest $paramGetSupplierCcCardRequest)
    {
        try {
            $this->setResult($resultGetAvailableSupplierCcCard = $this->getSoapClient()->__soapCall('getAvailableSupplierCcCard', [
                $paramGetSupplierCcCardRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableSupplierCcCard;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailableSupplierAccountAssign
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetSupplierAccountAssignRequest $paramGetSupplierAccountAssignRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetSupplierAccountAssignResponse|bool
     */
    public function getAvailableSupplierAccountAssign(\Pggns\MidocoApi\OrderSD\StructType\GetSupplierAccountAssignRequest $paramGetSupplierAccountAssignRequest)
    {
        try {
            $this->setResult($resultGetAvailableSupplierAccountAssign = $this->getSoapClient()->__soapCall('getAvailableSupplierAccountAssign', [
                $paramGetSupplierAccountAssignRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableSupplierAccountAssign;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getAvailableSupplierDocumentShipping
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetSupplierDocumentShippingRequest $paramGetSupplierDocumentShippingRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetSupplierDocumentShippingResponse|bool
     */
    public function getAvailableSupplierDocumentShipping(\Pggns\MidocoApi\OrderSD\StructType\GetSupplierDocumentShippingRequest $paramGetSupplierDocumentShippingRequest)
    {
        try {
            $this->setResult($resultGetAvailableSupplierDocumentShipping = $this->getSoapClient()->__soapCall('getAvailableSupplierDocumentShipping', [
                $paramGetSupplierDocumentShippingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableSupplierDocumentShipping;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getAvailableSupplierPaymentCondition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetSupplierPaymentConditionRequest $paramGetSupplierPaymentConditionRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetSupplierPaymentConditionResponse|bool
     */
    public function getAvailableSupplierPaymentCondition(\Pggns\MidocoApi\OrderSD\StructType\GetSupplierPaymentConditionRequest $paramGetSupplierPaymentConditionRequest)
    {
        try {
            $this->setResult($resultGetAvailableSupplierPaymentCondition = $this->getSoapClient()->__soapCall('getAvailableSupplierPaymentCondition', [
                $paramGetSupplierPaymentConditionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableSupplierPaymentCondition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getAvailableSupplierCancelCondition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetSupplierCancelConditionRequest $paramGetSupplierCancelConditionRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetSupplierCancelConditionResponse|bool
     */
    public function getAvailableSupplierCancelCondition(\Pggns\MidocoApi\OrderSD\StructType\GetSupplierCancelConditionRequest $paramGetSupplierCancelConditionRequest)
    {
        try {
            $this->setResult($resultGetAvailableSupplierCancelCondition = $this->getSoapClient()->__soapCall('getAvailableSupplierCancelCondition', [
                $paramGetSupplierCancelConditionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableSupplierCancelCondition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAssignedSuppCancelCMapping
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetAssignedSuppCancelCMappingRequest $paramGetAssignedSuppCancelCMappingRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetAssignedSuppCancelCMappingResponse|bool
     */
    public function getAssignedSuppCancelCMapping(\Pggns\MidocoApi\OrderSD\StructType\GetAssignedSuppCancelCMappingRequest $paramGetAssignedSuppCancelCMappingRequest)
    {
        try {
            $this->setResult($resultGetAssignedSuppCancelCMapping = $this->getSoapClient()->__soapCall('getAssignedSuppCancelCMapping', [
                $paramGetAssignedSuppCancelCMappingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAssignedSuppCancelCMapping;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSuppCancelCMapping
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetSuppCancelCMappingRequest $paramGetSuppCancelCMappingRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetSuppCancelCMappingResponse|bool
     */
    public function getSuppCancelCMapping(\Pggns\MidocoApi\OrderSD\StructType\GetSuppCancelCMappingRequest $paramGetSuppCancelCMappingRequest)
    {
        try {
            $this->setResult($resultGetSuppCancelCMapping = $this->getSoapClient()->__soapCall('getSuppCancelCMapping', [
                $paramGetSuppCancelCMappingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSuppCancelCMapping;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSuppCancelCEmail
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetSuppCancelCEmailRequest $paramGetSuppCancelCEmailRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetSuppCancelCEmailResponse|bool
     */
    public function getSuppCancelCEmail(\Pggns\MidocoApi\OrderSD\StructType\GetSuppCancelCEmailRequest $paramGetSuppCancelCEmailRequest)
    {
        try {
            $this->setResult($resultGetSuppCancelCEmail = $this->getSoapClient()->__soapCall('getSuppCancelCEmail', [
                $paramGetSuppCancelCEmailRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSuppCancelCEmail;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSupplierPaymentCondition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetSpecifiedSupplierPaymentConditionRequest $paramGetSpecifiedSupplierPaymentConditionRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetSpecifiedSupplierPaymentConditionResponse|bool
     */
    public function getSupplierPaymentCondition(\Pggns\MidocoApi\OrderSD\StructType\GetSpecifiedSupplierPaymentConditionRequest $paramGetSpecifiedSupplierPaymentConditionRequest)
    {
        try {
            $this->setResult($resultGetSupplierPaymentCondition = $this->getSoapClient()->__soapCall('getSupplierPaymentCondition', [
                $paramGetSpecifiedSupplierPaymentConditionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplierPaymentCondition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailableAccounts
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetAvailableAccountsRequest $paramGetAvailableAccountsRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetAvailableAccountsResponse|bool
     */
    public function getAvailableAccounts(\Pggns\MidocoApi\OrderSD\StructType\GetAvailableAccountsRequest $paramGetAvailableAccountsRequest)
    {
        try {
            $this->setResult($resultGetAvailableAccounts = $this->getSoapClient()->__soapCall('getAvailableAccounts', [
                $paramGetAvailableAccountsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableAccounts;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAccountsFromSupplier
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetAccountsFromAccountAssignRequest $paramGetAccountsFromAccountAssignRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetAccountsFromAccountAssignResponse|bool
     */
    public function getAccountsFromSupplier(\Pggns\MidocoApi\OrderSD\StructType\GetAccountsFromAccountAssignRequest $paramGetAccountsFromAccountAssignRequest)
    {
        try {
            $this->setResult($resultGetAccountsFromSupplier = $this->getSoapClient()->__soapCall('getAccountsFromSupplier', [
                $paramGetAccountsFromAccountAssignRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAccountsFromSupplier;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTextRemarks
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetMidocoTextRemarksRequest $paramGetMidocoTextRemarksRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetMidocoTextRemarksResponse|bool
     */
    public function getTextRemarks(\Pggns\MidocoApi\OrderSD\StructType\GetMidocoTextRemarksRequest $paramGetMidocoTextRemarksRequest)
    {
        try {
            $this->setResult($resultGetTextRemarks = $this->getSoapClient()->__soapCall('getTextRemarks', [
                $paramGetMidocoTextRemarksRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTextRemarks;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDeliveryForCulture
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetDeliveriesForCultureRequest $paramGetDeliveriesForCultureRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetDeliveriesForCultureResponse|bool
     */
    public function getDeliveryForCulture(\Pggns\MidocoApi\OrderSD\StructType\GetDeliveriesForCultureRequest $paramGetDeliveriesForCultureRequest)
    {
        try {
            $this->setResult($resultGetDeliveryForCulture = $this->getSoapClient()->__soapCall('getDeliveryForCulture', [
                $paramGetDeliveriesForCultureRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDeliveryForCulture;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoRuleTypes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetMidocoRuleTypesRequest $paramGetMidocoRuleTypesRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetMidocoRuleTypesResponse|bool
     */
    public function getMidocoRuleTypes(\Pggns\MidocoApi\OrderSD\StructType\GetMidocoRuleTypesRequest $paramGetMidocoRuleTypesRequest)
    {
        try {
            $this->setResult($resultGetMidocoRuleTypes = $this->getSoapClient()->__soapCall('getMidocoRuleTypes', [
                $paramGetMidocoRuleTypesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoRuleTypes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoRuleSets
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetRuleSetsRequest $paramGetRuleSetsRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetRuleSetsResponse|bool
     */
    public function getMidocoRuleSets(\Pggns\MidocoApi\OrderSD\StructType\GetRuleSetsRequest $paramGetRuleSetsRequest)
    {
        try {
            $this->setResult($resultGetMidocoRuleSets = $this->getSoapClient()->__soapCall('getMidocoRuleSets', [
                $paramGetRuleSetsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoRuleSets;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAssignedOrgunitsForRule
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetAssignedOrgunitsForRuleRequest $paramGetAssignedOrgunitsForRuleRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetAssignedOrgunitsForRuleResponse|bool
     */
    public function getAssignedOrgunitsForRule(\Pggns\MidocoApi\OrderSD\StructType\GetAssignedOrgunitsForRuleRequest $paramGetAssignedOrgunitsForRuleRequest)
    {
        try {
            $this->setResult($resultGetAssignedOrgunitsForRule = $this->getSoapClient()->__soapCall('getAssignedOrgunitsForRule', [
                $paramGetAssignedOrgunitsForRuleRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAssignedOrgunitsForRule;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAssignedRuleSet
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetAssignedMidocoRuleSetRequest $paramGetAssignedMidocoRuleSetRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetAssignedMidocoRuleSetResponse|bool
     */
    public function getAssignedRuleSet(\Pggns\MidocoApi\OrderSD\StructType\GetAssignedMidocoRuleSetRequest $paramGetAssignedMidocoRuleSetRequest)
    {
        try {
            $this->setResult($resultGetAssignedRuleSet = $this->getSoapClient()->__soapCall('getAssignedRuleSet', [
                $paramGetAssignedMidocoRuleSetRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAssignedRuleSet;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAssignedMidocoRuleSetForOrgunit
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetAssignedMidocoRuleSetForOrgunitRequest $paramGetAssignedMidocoRuleSetForOrgunitRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetAssignedMidocoRuleSetForOrgunitResponse|bool
     */
    public function getAssignedMidocoRuleSetForOrgunit(\Pggns\MidocoApi\OrderSD\StructType\GetAssignedMidocoRuleSetForOrgunitRequest $paramGetAssignedMidocoRuleSetForOrgunitRequest)
    {
        try {
            $this->setResult($resultGetAssignedMidocoRuleSetForOrgunit = $this->getSoapClient()->__soapCall('getAssignedMidocoRuleSetForOrgunit', [
                $paramGetAssignedMidocoRuleSetForOrgunitRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAssignedMidocoRuleSetForOrgunit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoFeeType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetMidocoFeeTypeRequest $paramGetMidocoFeeTypeRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetMidocoFeeTypeResponse|bool
     */
    public function getMidocoFeeType(\Pggns\MidocoApi\OrderSD\StructType\GetMidocoFeeTypeRequest $paramGetMidocoFeeTypeRequest)
    {
        try {
            $this->setResult($resultGetMidocoFeeType = $this->getSoapClient()->__soapCall('getMidocoFeeType', [
                $paramGetMidocoFeeTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoFeeType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBankAccount
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetBankAccountRequest $paramGetBankAccountRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetBankAccountResponse|bool
     */
    public function getBankAccount(\Pggns\MidocoApi\OrderSD\StructType\GetBankAccountRequest $paramGetBankAccountRequest)
    {
        try {
            $this->setResult($resultGetBankAccount = $this->getSoapClient()->__soapCall('getBankAccount', [
                $paramGetBankAccountRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBankAccount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBankAccounts4OrgUnit
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetBankAccounts4OrgUnitRequest $paramGetBankAccounts4OrgUnitRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetBankAccounts4OrgUnitResponse|bool
     */
    public function getBankAccounts4OrgUnit(\Pggns\MidocoApi\OrderSD\StructType\GetBankAccounts4OrgUnitRequest $paramGetBankAccounts4OrgUnitRequest)
    {
        try {
            $this->setResult($resultGetBankAccounts4OrgUnit = $this->getSoapClient()->__soapCall('getBankAccounts4OrgUnit', [
                $paramGetBankAccounts4OrgUnitRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBankAccounts4OrgUnit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoTemplates
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetMidocoTemplatesRequest $paramGetMidocoTemplatesRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetMidocoTemplatesResponse|bool
     */
    public function getMidocoTemplates(\Pggns\MidocoApi\OrderSD\StructType\GetMidocoTemplatesRequest $paramGetMidocoTemplatesRequest)
    {
        try {
            $this->setResult($resultGetMidocoTemplates = $this->getSoapClient()->__soapCall('getMidocoTemplates', [
                $paramGetMidocoTemplatesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoTemplates;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoTemplateTypes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetMidocoTemplateTypesRequest $paramGetMidocoTemplateTypesRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetMidocoTemplateTypesResponse|bool
     */
    public function getMidocoTemplateTypes(\Pggns\MidocoApi\OrderSD\StructType\GetMidocoTemplateTypesRequest $paramGetMidocoTemplateTypesRequest)
    {
        try {
            $this->setResult($resultGetMidocoTemplateTypes = $this->getSoapClient()->__soapCall('getMidocoTemplateTypes', [
                $paramGetMidocoTemplateTypesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoTemplateTypes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoSupplierTemplate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetMidocoSupplierTemplateRequest $paramGetMidocoSupplierTemplateRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetMidocoSupplierTemplateResponse|bool
     */
    public function getMidocoSupplierTemplate(\Pggns\MidocoApi\OrderSD\StructType\GetMidocoSupplierTemplateRequest $paramGetMidocoSupplierTemplateRequest)
    {
        try {
            $this->setResult($resultGetMidocoSupplierTemplate = $this->getSoapClient()->__soapCall('getMidocoSupplierTemplate', [
                $paramGetMidocoSupplierTemplateRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoSupplierTemplate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAssignedSuppliersToTemplate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetAssignedSuppliersToTemplateRequest $paramGetAssignedSuppliersToTemplateRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetAssignedSuppliersToTemplateResponse|bool
     */
    public function getAssignedSuppliersToTemplate(\Pggns\MidocoApi\OrderSD\StructType\GetAssignedSuppliersToTemplateRequest $paramGetAssignedSuppliersToTemplateRequest)
    {
        try {
            $this->setResult($resultGetAssignedSuppliersToTemplate = $this->getSoapClient()->__soapCall('getAssignedSuppliersToTemplate', [
                $paramGetAssignedSuppliersToTemplateRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAssignedSuppliersToTemplate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoSupplierCommissions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetMidocoSupplierCommissionRequest $paramGetMidocoSupplierCommissionRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetMidocoSupplierCommissionResponse|bool
     */
    public function getMidocoSupplierCommissions(\Pggns\MidocoApi\OrderSD\StructType\GetMidocoSupplierCommissionRequest $paramGetMidocoSupplierCommissionRequest)
    {
        try {
            $this->setResult($resultGetMidocoSupplierCommissions = $this->getSoapClient()->__soapCall('getMidocoSupplierCommissions', [
                $paramGetMidocoSupplierCommissionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoSupplierCommissions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSupplierCommissionByLevelId
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetSupplierCommissionByLevelIdRequest $paramGetSupplierCommissionByLevelIdRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetSupplierCommissionByLevelIdResponse|bool
     */
    public function getSupplierCommissionByLevelId(\Pggns\MidocoApi\OrderSD\StructType\GetSupplierCommissionByLevelIdRequest $paramGetSupplierCommissionByLevelIdRequest)
    {
        try {
            $this->setResult($resultGetSupplierCommissionByLevelId = $this->getSoapClient()->__soapCall('getSupplierCommissionByLevelId', [
                $paramGetSupplierCommissionByLevelIdRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplierCommissionByLevelId;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCashBookItemType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetCashBookItemTypeRequest $paramGetCashBookItemTypeRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetCashBookItemTypeResponse|bool
     */
    public function getCashBookItemType(\Pggns\MidocoApi\OrderSD\StructType\GetCashBookItemTypeRequest $paramGetCashBookItemTypeRequest)
    {
        try {
            $this->setResult($resultGetCashBookItemType = $this->getSoapClient()->__soapCall('getCashBookItemType', [
                $paramGetCashBookItemTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCashBookItemType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAccomodationCodes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetAccomodationCodesRequest $paramGetAccomodationCodesRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetAccomodationCodesResponse|bool
     */
    public function getAccomodationCodes(\Pggns\MidocoApi\OrderSD\StructType\GetAccomodationCodesRequest $paramGetAccomodationCodesRequest)
    {
        try {
            $this->setResult($resultGetAccomodationCodes = $this->getSoapClient()->__soapCall('getAccomodationCodes', [
                $paramGetAccomodationCodesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAccomodationCodes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCateringCodes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetCateringCodesRequest $paramGetCateringCodesRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetCateringCodesResponse|bool
     */
    public function getCateringCodes(\Pggns\MidocoApi\OrderSD\StructType\GetCateringCodesRequest $paramGetCateringCodesRequest)
    {
        try {
            $this->setResult($resultGetCateringCodes = $this->getSoapClient()->__soapCall('getCateringCodes', [
                $paramGetCateringCodesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCateringCodes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAreaCodes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetAreaCodesRequest $paramGetAreaCodesRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetAreaCodesResponse|bool
     */
    public function getAreaCodes(\Pggns\MidocoApi\OrderSD\StructType\GetAreaCodesRequest $paramGetAreaCodesRequest)
    {
        try {
            $this->setResult($resultGetAreaCodes = $this->getSoapClient()->__soapCall('getAreaCodes', [
                $paramGetAreaCodesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAreaCodes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRemarkOrgunits
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetRemarkOrgunitsRequest $paramGetRemarkOrgunitsRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetRemarkOrgunitsResponse|bool
     */
    public function getRemarkOrgunits(\Pggns\MidocoApi\OrderSD\StructType\GetRemarkOrgunitsRequest $paramGetRemarkOrgunitsRequest)
    {
        try {
            $this->setResult($resultGetRemarkOrgunits = $this->getSoapClient()->__soapCall('getRemarkOrgunits', [
                $paramGetRemarkOrgunitsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetRemarkOrgunits;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSupplierSettlementAccounts
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetSupplierSettlementAccountsRequest $paramGetSupplierSettlementAccountsRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetSupplierSettlementAccountsResponse|bool
     */
    public function getSupplierSettlementAccounts(\Pggns\MidocoApi\OrderSD\StructType\GetSupplierSettlementAccountsRequest $paramGetSupplierSettlementAccountsRequest)
    {
        try {
            $this->setResult($resultGetSupplierSettlementAccounts = $this->getSoapClient()->__soapCall('getSupplierSettlementAccounts', [
                $paramGetSupplierSettlementAccountsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplierSettlementAccounts;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRemarkSuppliers
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetRemarkSuppliersRequest $paramGetRemarkSuppliersRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetRemarkSuppliersResponse|bool
     */
    public function getRemarkSuppliers(\Pggns\MidocoApi\OrderSD\StructType\GetRemarkSuppliersRequest $paramGetRemarkSuppliersRequest)
    {
        try {
            $this->setResult($resultGetRemarkSuppliers = $this->getSoapClient()->__soapCall('getRemarkSuppliers', [
                $paramGetRemarkSuppliersRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetRemarkSuppliers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getShortRemarkIdentifiers
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetShortRemarkIdentifiersRequest $paramGetShortRemarkIdentifiersRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetShortRemarkIdentifiersResponse|bool
     */
    public function getShortRemarkIdentifiers(\Pggns\MidocoApi\OrderSD\StructType\GetShortRemarkIdentifiersRequest $paramGetShortRemarkIdentifiersRequest)
    {
        try {
            $this->setResult($resultGetShortRemarkIdentifiers = $this->getSoapClient()->__soapCall('getShortRemarkIdentifiers', [
                $paramGetShortRemarkIdentifiersRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetShortRemarkIdentifiers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSupplierInkassoModes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetSupplierInkassoModesRequest $paramGetSupplierInkassoModesRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetSupplierInkassoModesResponse|bool
     */
    public function getSupplierInkassoModes(\Pggns\MidocoApi\OrderSD\StructType\GetSupplierInkassoModesRequest $paramGetSupplierInkassoModesRequest)
    {
        try {
            $this->setResult($resultGetSupplierInkassoModes = $this->getSoapClient()->__soapCall('getSupplierInkassoModes', [
                $paramGetSupplierInkassoModesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplierInkassoModes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSupplierAgencies
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetSupplierAgenciesRequest $paramGetSupplierAgenciesRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetSupplierAgenciesResponse|bool
     */
    public function getSupplierAgencies(\Pggns\MidocoApi\OrderSD\StructType\GetSupplierAgenciesRequest $paramGetSupplierAgenciesRequest)
    {
        try {
            $this->setResult($resultGetSupplierAgencies = $this->getSoapClient()->__soapCall('getSupplierAgencies', [
                $paramGetSupplierAgenciesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplierAgencies;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSupplierAgency
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetSupplierAgencyRequest $paramGetSupplierAgencyRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetSupplierAgencyResponse|bool
     */
    public function getSupplierAgency(\Pggns\MidocoApi\OrderSD\StructType\GetSupplierAgencyRequest $paramGetSupplierAgencyRequest)
    {
        try {
            $this->setResult($resultGetSupplierAgency = $this->getSoapClient()->__soapCall('getSupplierAgency', [
                $paramGetSupplierAgencyRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplierAgency;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSupplier
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetSupplierRequest $paramGetSupplierRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetSupplierResponse|bool
     */
    public function getSupplier(\Pggns\MidocoApi\OrderSD\StructType\GetSupplierRequest $paramGetSupplierRequest)
    {
        try {
            $this->setResult($resultGetSupplier = $this->getSoapClient()->__soapCall('getSupplier', [
                $paramGetSupplierRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplier;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getQueryCriteriaOpNames
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetQueryCriteriaOpNamesRequest $paramGetQueryCriteriaOpNamesRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetQueryCriteriaOpNamesResponse|bool
     */
    public function getQueryCriteriaOpNames(\Pggns\MidocoApi\OrderSD\StructType\GetQueryCriteriaOpNamesRequest $paramGetQueryCriteriaOpNamesRequest)
    {
        try {
            $this->setResult($resultGetQueryCriteriaOpNames = $this->getSoapClient()->__soapCall('getQueryCriteriaOpNames', [
                $paramGetQueryCriteriaOpNamesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetQueryCriteriaOpNames;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailableQueryCriteriaOps
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetAvailableQueryCriteriaOpsRequest $paramGetAvailableQueryCriteriaOpsRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetAvailableQueryCriteriaOpsResponse|bool
     */
    public function getAvailableQueryCriteriaOps(\Pggns\MidocoApi\OrderSD\StructType\GetAvailableQueryCriteriaOpsRequest $paramGetAvailableQueryCriteriaOpsRequest)
    {
        try {
            $this->setResult($resultGetAvailableQueryCriteriaOps = $this->getSoapClient()->__soapCall('getAvailableQueryCriteriaOps', [
                $paramGetAvailableQueryCriteriaOpsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableQueryCriteriaOps;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailableQueryFields
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetAvailableQueryFieldsRequest $paramGetAvailableQueryFieldsRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetAvailableQueryFieldsResponse|bool
     */
    public function getAvailableQueryFields(\Pggns\MidocoApi\OrderSD\StructType\GetAvailableQueryFieldsRequest $paramGetAvailableQueryFieldsRequest)
    {
        try {
            $this->setResult($resultGetAvailableQueryFields = $this->getSoapClient()->__soapCall('getAvailableQueryFields', [
                $paramGetAvailableQueryFieldsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableQueryFields;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getQueryPage
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetQueryPageRequest $paramGetQueryPageRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetQueryPageResponse|bool
     */
    public function getQueryPage(\Pggns\MidocoApi\OrderSD\StructType\GetQueryPageRequest $paramGetQueryPageRequest)
    {
        try {
            $this->setResult($resultGetQueryPage = $this->getSoapClient()->__soapCall('getQueryPage', [
                $paramGetQueryPageRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetQueryPage;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getUserQuery
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetUserQueryRequest $paramGetUserQueryRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetUserQueryResponse|bool
     */
    public function getUserQuery(\Pggns\MidocoApi\OrderSD\StructType\GetUserQueryRequest $paramGetUserQueryRequest)
    {
        try {
            $this->setResult($resultGetUserQuery = $this->getSoapClient()->__soapCall('getUserQuery', [
                $paramGetUserQueryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUserQuery;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDunningLetters
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetDunningLettersRequest $paramGetDunningLettersRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetDunningLettersResponse|bool
     */
    public function getDunningLetters(\Pggns\MidocoApi\OrderSD\StructType\GetDunningLettersRequest $paramGetDunningLettersRequest)
    {
        try {
            $this->setResult($resultGetDunningLetters = $this->getSoapClient()->__soapCall('getDunningLetters', [
                $paramGetDunningLettersRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDunningLetters;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getQueryFieldValues
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetQueryFieldValuesRequest $paramGetQueryFieldValuesRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetQueryFieldValuesResponse|bool
     */
    public function getQueryFieldValues(\Pggns\MidocoApi\OrderSD\StructType\GetQueryFieldValuesRequest $paramGetQueryFieldValuesRequest)
    {
        try {
            $this->setResult($resultGetQueryFieldValues = $this->getSoapClient()->__soapCall('getQueryFieldValues', [
                $paramGetQueryFieldValuesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetQueryFieldValues;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getProductTypeMediatorConditions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetProductTypeMediatorConditionsRequest $paramGetProductTypeMediatorConditionsRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetProductTypeMediatorConditionsResponse|bool
     */
    public function getProductTypeMediatorConditions(\Pggns\MidocoApi\OrderSD\StructType\GetProductTypeMediatorConditionsRequest $paramGetProductTypeMediatorConditionsRequest)
    {
        try {
            $this->setResult($resultGetProductTypeMediatorConditions = $this->getSoapClient()->__soapCall('getProductTypeMediatorConditions', [
                $paramGetProductTypeMediatorConditionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetProductTypeMediatorConditions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getFeeTypeForOrgunit
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetFeeTypeForOrgunitRequest $paramGetFeeTypeForOrgunitRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetFeeTypeForOrgunitResponse|bool
     */
    public function getFeeTypeForOrgunit(\Pggns\MidocoApi\OrderSD\StructType\GetFeeTypeForOrgunitRequest $paramGetFeeTypeForOrgunitRequest)
    {
        try {
            $this->setResult($resultGetFeeTypeForOrgunit = $this->getSoapClient()->__soapCall('getFeeTypeForOrgunit', [
                $paramGetFeeTypeForOrgunitRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetFeeTypeForOrgunit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getFeeGroupAssigns
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetFeeGroupAssignsRequest $paramGetFeeGroupAssignsRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetFeeGroupAssignsResponse|bool
     */
    public function getFeeGroupAssigns(\Pggns\MidocoApi\OrderSD\StructType\GetFeeGroupAssignsRequest $paramGetFeeGroupAssignsRequest)
    {
        try {
            $this->setResult($resultGetFeeGroupAssigns = $this->getSoapClient()->__soapCall('getFeeGroupAssigns', [
                $paramGetFeeGroupAssignsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetFeeGroupAssigns;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getFeeGroups
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetFeeGroupsRequest $paramGetFeeGroupsRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetFeeGroupsResponse|bool
     */
    public function getFeeGroups(\Pggns\MidocoApi\OrderSD\StructType\GetFeeGroupsRequest $paramGetFeeGroupsRequest)
    {
        try {
            $this->setResult($resultGetFeeGroups = $this->getSoapClient()->__soapCall('getFeeGroups', [
                $paramGetFeeGroupsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetFeeGroups;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSupplierByAccount
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetSupplierByAccountRequest $paramGetSupplierByAccountRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetSupplierByAccountResponse|bool
     */
    public function getSupplierByAccount(\Pggns\MidocoApi\OrderSD\StructType\GetSupplierByAccountRequest $paramGetSupplierByAccountRequest)
    {
        try {
            $this->setResult($resultGetSupplierByAccount = $this->getSoapClient()->__soapCall('getSupplierByAccount', [
                $paramGetSupplierByAccountRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplierByAccount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoPrintOption
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetMidocoPrintOptionRequest $paramGetMidocoPrintOptionRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetMidocoPrintOptionResponse|bool
     */
    public function getMidocoPrintOption(\Pggns\MidocoApi\OrderSD\StructType\GetMidocoPrintOptionRequest $paramGetMidocoPrintOptionRequest)
    {
        try {
            $this->setResult($resultGetMidocoPrintOption = $this->getSoapClient()->__soapCall('getMidocoPrintOption', [
                $paramGetMidocoPrintOptionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoPrintOption;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAutoRemarks
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetAutoRemarksRequest $paramGetAutoRemarksRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetAutoRemarksResponse|bool
     */
    public function getAutoRemarks(\Pggns\MidocoApi\OrderSD\StructType\GetAutoRemarksRequest $paramGetAutoRemarksRequest)
    {
        try {
            $this->setResult($resultGetAutoRemarks = $this->getSoapClient()->__soapCall('getAutoRemarks', [
                $paramGetAutoRemarksRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAutoRemarks;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSupplierTraveltypes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetSupplierTraveltypesRequest $paramGetSupplierTraveltypesRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetSupplierTraveltypesResponse|bool
     */
    public function getSupplierTraveltypes(\Pggns\MidocoApi\OrderSD\StructType\GetSupplierTraveltypesRequest $paramGetSupplierTraveltypesRequest)
    {
        try {
            $this->setResult($resultGetSupplierTraveltypes = $this->getSoapClient()->__soapCall('getSupplierTraveltypes', [
                $paramGetSupplierTraveltypesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplierTraveltypes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMarketingKeysForType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetMarketingKeysForTypeRequest $paramGetMarketingKeysForTypeRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetMarketingKeysForTypeResponse|bool
     */
    public function getMarketingKeysForType(\Pggns\MidocoApi\OrderSD\StructType\GetMarketingKeysForTypeRequest $paramGetMarketingKeysForTypeRequest)
    {
        try {
            $this->setResult($resultGetMarketingKeysForType = $this->getSoapClient()->__soapCall('getMarketingKeysForType', [
                $paramGetMarketingKeysForTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMarketingKeysForType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMarketingKeysLocalizedForType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetMarketingKeysLocalizedForTypeRequest $paramGetMarketingKeysLocalizedForTypeRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetMarketingKeysLocalizedForTypeResponse|bool
     */
    public function getMarketingKeysLocalizedForType(\Pggns\MidocoApi\OrderSD\StructType\GetMarketingKeysLocalizedForTypeRequest $paramGetMarketingKeysLocalizedForTypeRequest)
    {
        try {
            $this->setResult($resultGetMarketingKeysLocalizedForType = $this->getSoapClient()->__soapCall('getMarketingKeysLocalizedForType', [
                $paramGetMarketingKeysLocalizedForTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMarketingKeysLocalizedForType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMarketingKeyDescriptionsForType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetMarketingKeyDescriptionsForTypeRequest $paramGetMarketingKeyDescriptionsForTypeRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetMarketingKeyDescriptionsForTypeResponse|bool
     */
    public function getMarketingKeyDescriptionsForType(\Pggns\MidocoApi\OrderSD\StructType\GetMarketingKeyDescriptionsForTypeRequest $paramGetMarketingKeyDescriptionsForTypeRequest)
    {
        try {
            $this->setResult($resultGetMarketingKeyDescriptionsForType = $this->getSoapClient()->__soapCall('getMarketingKeyDescriptionsForType', [
                $paramGetMarketingKeyDescriptionsForTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMarketingKeyDescriptionsForType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBookingTexts
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetBookingTextsRequest $paramGetBookingTextsRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetBookingTextsResponse|bool
     */
    public function getBookingTexts(\Pggns\MidocoApi\OrderSD\StructType\GetBookingTextsRequest $paramGetBookingTextsRequest)
    {
        try {
            $this->setResult($resultGetBookingTexts = $this->getSoapClient()->__soapCall('getBookingTexts', [
                $paramGetBookingTextsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBookingTexts;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoSupplierImportFormat
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetMidocoSupplierImportFormatRequest $paramGetMidocoSupplierImportFormatRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetMidocoSupplierImportFormatResponse|bool
     */
    public function getMidocoSupplierImportFormat(\Pggns\MidocoApi\OrderSD\StructType\GetMidocoSupplierImportFormatRequest $paramGetMidocoSupplierImportFormatRequest)
    {
        try {
            $this->setResult($resultGetMidocoSupplierImportFormat = $this->getSoapClient()->__soapCall('getMidocoSupplierImportFormat', [
                $paramGetMidocoSupplierImportFormatRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoSupplierImportFormat;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoSettlementTypes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetMidocoSettlementTypesRequest $paramGetMidocoSettlementTypesRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetMidocoSettlementTypesResponse|bool
     */
    public function getMidocoSettlementTypes(\Pggns\MidocoApi\OrderSD\StructType\GetMidocoSettlementTypesRequest $paramGetMidocoSettlementTypesRequest)
    {
        try {
            $this->setResult($resultGetMidocoSettlementTypes = $this->getSoapClient()->__soapCall('getMidocoSettlementTypes', [
                $paramGetMidocoSettlementTypesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoSettlementTypes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCurrencyRate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetCurrencyRateRequest $paramGetCurrencyRateRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetCurrencyRateResponse|bool
     */
    public function getCurrencyRate(\Pggns\MidocoApi\OrderSD\StructType\GetCurrencyRateRequest $paramGetCurrencyRateRequest)
    {
        try {
            $this->setResult($resultGetCurrencyRate = $this->getSoapClient()->__soapCall('getCurrencyRate', [
                $paramGetCurrencyRateRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCurrencyRate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getHedgeCurrencyRate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetHedgeCurrencyRateRequest $paramGetHedgeCurrencyRateRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetHedgeCurrencyRateResponse|bool
     */
    public function getHedgeCurrencyRate(\Pggns\MidocoApi\OrderSD\StructType\GetHedgeCurrencyRateRequest $paramGetHedgeCurrencyRateRequest)
    {
        try {
            $this->setResult($resultGetHedgeCurrencyRate = $this->getSoapClient()->__soapCall('getHedgeCurrencyRate', [
                $paramGetHedgeCurrencyRateRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetHedgeCurrencyRate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailableSupplierId
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetAvailableSupplierIdRequest $paramGetAvailableSupplierIdRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetAvailableSupplierIdResponse|bool
     */
    public function getAvailableSupplierId(\Pggns\MidocoApi\OrderSD\StructType\GetAvailableSupplierIdRequest $paramGetAvailableSupplierIdRequest)
    {
        try {
            $this->setResult($resultGetAvailableSupplierId = $this->getSoapClient()->__soapCall('getAvailableSupplierId', [
                $paramGetAvailableSupplierIdRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableSupplierId;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTravelNumber
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetTravelNumberRequest $paramGetTravelNumberRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetTravelNumberResponse|bool
     */
    public function getTravelNumber(\Pggns\MidocoApi\OrderSD\StructType\GetTravelNumberRequest $paramGetTravelNumberRequest)
    {
        try {
            $this->setResult($resultGetTravelNumber = $this->getSoapClient()->__soapCall('getTravelNumber', [
                $paramGetTravelNumberRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTravelNumber;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCostCentres
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetCostCentresRequest $paramGetCostCentresRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetCostCentresResponse|bool
     */
    public function getCostCentres(\Pggns\MidocoApi\OrderSD\StructType\GetCostCentresRequest $paramGetCostCentresRequest)
    {
        try {
            $this->setResult($resultGetCostCentres = $this->getSoapClient()->__soapCall('getCostCentres', [
                $paramGetCostCentresRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCostCentres;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailableSupplierAddressesList
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetSupplierAddressListRequest $paramGetSupplierAddressListRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetSupplierAddressListResponse|bool
     */
    public function getAvailableSupplierAddressesList(\Pggns\MidocoApi\OrderSD\StructType\GetSupplierAddressListRequest $paramGetSupplierAddressListRequest)
    {
        try {
            $this->setResult($resultGetAvailableSupplierAddressesList = $this->getSoapClient()->__soapCall('getAvailableSupplierAddressesList', [
                $paramGetSupplierAddressListRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableSupplierAddressesList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSupplierNotices
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetSupplierNoticesRequest $paramGetSupplierNoticesRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetSupplierNoticesResponse|bool
     */
    public function getSupplierNotices(\Pggns\MidocoApi\OrderSD\StructType\GetSupplierNoticesRequest $paramGetSupplierNoticesRequest)
    {
        try {
            $this->setResult($resultGetSupplierNotices = $this->getSoapClient()->__soapCall('getSupplierNotices', [
                $paramGetSupplierNoticesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplierNotices;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRemarks4Orgunit
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetRemarks4OrgunitRequest $paramGetRemarks4OrgunitRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetRemarks4OrgunitResponse|bool
     */
    public function getRemarks4Orgunit(\Pggns\MidocoApi\OrderSD\StructType\GetRemarks4OrgunitRequest $paramGetRemarks4OrgunitRequest)
    {
        try {
            $this->setResult($resultGetRemarks4Orgunit = $this->getSoapClient()->__soapCall('getRemarks4Orgunit', [
                $paramGetRemarks4OrgunitRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetRemarks4Orgunit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailableMiscPaymentSettings
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetAvailableMiscPaymentSettingRequest $paramGetAvailableMiscPaymentSettingRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetAvailableMiscPaymentSettingResponse|bool
     */
    public function getAvailableMiscPaymentSettings(\Pggns\MidocoApi\OrderSD\StructType\GetAvailableMiscPaymentSettingRequest $paramGetAvailableMiscPaymentSettingRequest)
    {
        try {
            $this->setResult($resultGetAvailableMiscPaymentSettings = $this->getSoapClient()->__soapCall('getAvailableMiscPaymentSettings', [
                $paramGetAvailableMiscPaymentSettingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableMiscPaymentSettings;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoSupplierTemplates
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetMidocoSupplierTemplatesRequest $paramGetMidocoSupplierTemplatesRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetMidocoSupplierTemplatesResponse|bool
     */
    public function getMidocoSupplierTemplates(\Pggns\MidocoApi\OrderSD\StructType\GetMidocoSupplierTemplatesRequest $paramGetMidocoSupplierTemplatesRequest)
    {
        try {
            $this->setResult($resultGetMidocoSupplierTemplates = $this->getSoapClient()->__soapCall('getMidocoSupplierTemplates', [
                $paramGetMidocoSupplierTemplatesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoSupplierTemplates;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoCrsSystem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetMidocoCrsSystemRequest $paramGetMidocoCrsSystemRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetMidocoCrsSystemResponse|bool
     */
    public function getMidocoCrsSystem(\Pggns\MidocoApi\OrderSD\StructType\GetMidocoCrsSystemRequest $paramGetMidocoCrsSystemRequest)
    {
        try {
            $this->setResult($resultGetMidocoCrsSystem = $this->getSoapClient()->__soapCall('getMidocoCrsSystem', [
                $paramGetMidocoCrsSystemRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoCrsSystem;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoQuestion
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetMidocoQuestionRequest $paramGetMidocoQuestionRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetMidocoQuestionResponse|bool
     */
    public function getMidocoQuestion(\Pggns\MidocoApi\OrderSD\StructType\GetMidocoQuestionRequest $paramGetMidocoQuestionRequest)
    {
        try {
            $this->setResult($resultGetMidocoQuestion = $this->getSoapClient()->__soapCall('getMidocoQuestion', [
                $paramGetMidocoQuestionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoQuestion;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoQuestionValue
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetMidocoQuestionValueRequest $paramGetMidocoQuestionValueRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetMidocoQuestionValueResponse|bool
     */
    public function getMidocoQuestionValue(\Pggns\MidocoApi\OrderSD\StructType\GetMidocoQuestionValueRequest $paramGetMidocoQuestionValueRequest)
    {
        try {
            $this->setResult($resultGetMidocoQuestionValue = $this->getSoapClient()->__soapCall('getMidocoQuestionValue', [
                $paramGetMidocoQuestionValueRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoQuestionValue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrderLockReasons
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetOrderLockReasonsRequest $paramGetOrderLockReasonsRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetOrderLockReasonsResponse|bool
     */
    public function getOrderLockReasons(\Pggns\MidocoApi\OrderSD\StructType\GetOrderLockReasonsRequest $paramGetOrderLockReasonsRequest)
    {
        try {
            $this->setResult($resultGetOrderLockReasons = $this->getSoapClient()->__soapCall('getOrderLockReasons', [
                $paramGetOrderLockReasonsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrderLockReasons;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailableOrderLockReasons
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetAvailableOrderLockReasonsRequest $paramGetAvailableOrderLockReasonsRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetAvailableOrderLockReasonsResponse|bool
     */
    public function getAvailableOrderLockReasons(\Pggns\MidocoApi\OrderSD\StructType\GetAvailableOrderLockReasonsRequest $paramGetAvailableOrderLockReasonsRequest)
    {
        try {
            $this->setResult($resultGetAvailableOrderLockReasons = $this->getSoapClient()->__soapCall('getAvailableOrderLockReasons', [
                $paramGetAvailableOrderLockReasonsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableOrderLockReasons;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrderLockReasonDescriptions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetOrderLockReasonDescriptionsRequest $paramGetOrderLockReasonDescriptionsRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetOrderLockReasonDescriptionsResponse|bool
     */
    public function getOrderLockReasonDescriptions(\Pggns\MidocoApi\OrderSD\StructType\GetOrderLockReasonDescriptionsRequest $paramGetOrderLockReasonDescriptionsRequest)
    {
        try {
            $this->setResult($resultGetOrderLockReasonDescriptions = $this->getSoapClient()->__soapCall('getOrderLockReasonDescriptions', [
                $paramGetOrderLockReasonDescriptionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrderLockReasonDescriptions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getAvailableOrderLockReasonDescriptions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetAvailableOrderLockReasonDescriptionsRequest $paramGetAvailableOrderLockReasonDescriptionsRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetAvailableOrderLockReasonDescriptionsResponse|bool
     */
    public function getAvailableOrderLockReasonDescriptions(\Pggns\MidocoApi\OrderSD\StructType\GetAvailableOrderLockReasonDescriptionsRequest $paramGetAvailableOrderLockReasonDescriptionsRequest)
    {
        try {
            $this->setResult($resultGetAvailableOrderLockReasonDescriptions = $this->getSoapClient()->__soapCall('getAvailableOrderLockReasonDescriptions', [
                $paramGetAvailableOrderLockReasonDescriptionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableOrderLockReasonDescriptions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSupplierMapping
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetSupplierMappingRequest $paramGetSupplierMappingRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetSupplierMappingResponse|bool
     */
    public function getSupplierMapping(\Pggns\MidocoApi\OrderSD\StructType\GetSupplierMappingRequest $paramGetSupplierMappingRequest)
    {
        try {
            $this->setResult($resultGetSupplierMapping = $this->getSoapClient()->__soapCall('getSupplierMapping', [
                $paramGetSupplierMappingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplierMapping;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTravelNumberAutoRemarks
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetTravelNumberAutoRemarksRequest $paramGetTravelNumberAutoRemarksRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetTravelNumberAutoRemarksResponse|bool
     */
    public function getTravelNumberAutoRemarks(\Pggns\MidocoApi\OrderSD\StructType\GetTravelNumberAutoRemarksRequest $paramGetTravelNumberAutoRemarksRequest)
    {
        try {
            $this->setResult($resultGetTravelNumberAutoRemarks = $this->getSoapClient()->__soapCall('getTravelNumberAutoRemarks', [
                $paramGetTravelNumberAutoRemarksRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTravelNumberAutoRemarks;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTravelNumberDocuments
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetTravelNumberDocumentsRequest $paramGetTravelNumberDocumentsRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetTravelNumberDocumentsResponse|bool
     */
    public function getTravelNumberDocuments(\Pggns\MidocoApi\OrderSD\StructType\GetTravelNumberDocumentsRequest $paramGetTravelNumberDocumentsRequest)
    {
        try {
            $this->setResult($resultGetTravelNumberDocuments = $this->getSoapClient()->__soapCall('getTravelNumberDocuments', [
                $paramGetTravelNumberDocumentsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTravelNumberDocuments;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDestinationAutoRemarks
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetDestinationAutoRemarksRequest $paramGetDestinationAutoRemarksRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetDestinationAutoRemarksResponse|bool
     */
    public function getDestinationAutoRemarks(\Pggns\MidocoApi\OrderSD\StructType\GetDestinationAutoRemarksRequest $paramGetDestinationAutoRemarksRequest)
    {
        try {
            $this->setResult($resultGetDestinationAutoRemarks = $this->getSoapClient()->__soapCall('getDestinationAutoRemarks', [
                $paramGetDestinationAutoRemarksRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDestinationAutoRemarks;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDestinationDocuments
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetDestinationDocumentsRequest $paramGetDestinationDocumentsRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetDestinationDocumentsResponse|bool
     */
    public function getDestinationDocuments(\Pggns\MidocoApi\OrderSD\StructType\GetDestinationDocumentsRequest $paramGetDestinationDocumentsRequest)
    {
        try {
            $this->setResult($resultGetDestinationDocuments = $this->getSoapClient()->__soapCall('getDestinationDocuments', [
                $paramGetDestinationDocumentsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDestinationDocuments;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSupplierDisabledUnits
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetSupplierDisabledUnitsRequest $paramGetSupplierDisabledUnitsRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetSupplierDisabledUnitsResponse|bool
     */
    public function getSupplierDisabledUnits(\Pggns\MidocoApi\OrderSD\StructType\GetSupplierDisabledUnitsRequest $paramGetSupplierDisabledUnitsRequest)
    {
        try {
            $this->setResult($resultGetSupplierDisabledUnits = $this->getSoapClient()->__soapCall('getSupplierDisabledUnits', [
                $paramGetSupplierDisabledUnitsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplierDisabledUnits;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getUnitDisabledSuppliers
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetUnitDisabledSuppliersRequest $paramGetUnitDisabledSuppliersRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetUnitDisabledSuppliersResponse|bool
     */
    public function getUnitDisabledSuppliers(\Pggns\MidocoApi\OrderSD\StructType\GetUnitDisabledSuppliersRequest $paramGetUnitDisabledSuppliersRequest)
    {
        try {
            $this->setResult($resultGetUnitDisabledSuppliers = $this->getSoapClient()->__soapCall('getUnitDisabledSuppliers', [
                $paramGetUnitDisabledSuppliersRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUnitDisabledSuppliers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSupplierDocuments
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetSupplierDocumentsRequest $paramGetSupplierDocumentsRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetSupplierDocumentsResponse|bool
     */
    public function getSupplierDocuments(\Pggns\MidocoApi\OrderSD\StructType\GetSupplierDocumentsRequest $paramGetSupplierDocumentsRequest)
    {
        try {
            $this->setResult($resultGetSupplierDocuments = $this->getSoapClient()->__soapCall('getSupplierDocuments', [
                $paramGetSupplierDocumentsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplierDocuments;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoSettlementTypeForSupplier
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetMidocoSettlementTypeForSupplierRequest $paramGetMidocoSettlementTypeForSupplierRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetMidocoSettlementTypeForSupplierResponse|bool
     */
    public function getMidocoSettlementTypeForSupplier(\Pggns\MidocoApi\OrderSD\StructType\GetMidocoSettlementTypeForSupplierRequest $paramGetMidocoSettlementTypeForSupplierRequest)
    {
        try {
            $this->setResult($resultGetMidocoSettlementTypeForSupplier = $this->getSoapClient()->__soapCall('getMidocoSettlementTypeForSupplier', [
                $paramGetMidocoSettlementTypeForSupplierRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoSettlementTypeForSupplier;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getProductTypeSupplier
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetProductTypeSupplierRequest $paramGetProductTypeSupplierRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetProductTypeSupplierResponse|bool
     */
    public function getProductTypeSupplier(\Pggns\MidocoApi\OrderSD\StructType\GetProductTypeSupplierRequest $paramGetProductTypeSupplierRequest)
    {
        try {
            $this->setResult($resultGetProductTypeSupplier = $this->getSoapClient()->__soapCall('getProductTypeSupplier', [
                $paramGetProductTypeSupplierRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetProductTypeSupplier;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAllOrdCriteriaDescriptions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetAllOrdCriteriaDescriptionsRequest $paramGetAllOrdCriteriaDescriptionsRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetAllOrdCriteriaDescriptionsResponse|bool
     */
    public function getAllOrdCriteriaDescriptions(\Pggns\MidocoApi\OrderSD\StructType\GetAllOrdCriteriaDescriptionsRequest $paramGetAllOrdCriteriaDescriptionsRequest)
    {
        try {
            $this->setResult($resultGetAllOrdCriteriaDescriptions = $this->getSoapClient()->__soapCall('getAllOrdCriteriaDescriptions', [
                $paramGetAllOrdCriteriaDescriptionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAllOrdCriteriaDescriptions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMatchingProductTypeSupplier
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetMatchingProductTypeSupplierRequest $paramGetMatchingProductTypeSupplierRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetMatchingProductTypeSupplierResponse|bool
     */
    public function getMatchingProductTypeSupplier(\Pggns\MidocoApi\OrderSD\StructType\GetMatchingProductTypeSupplierRequest $paramGetMatchingProductTypeSupplierRequest)
    {
        try {
            $this->setResult($resultGetMatchingProductTypeSupplier = $this->getSoapClient()->__soapCall('getMatchingProductTypeSupplier', [
                $paramGetMatchingProductTypeSupplierRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMatchingProductTypeSupplier;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoBaggageAllowance
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetMidocoBaggageAllowanceRequest $paramGetMidocoBaggageAllowanceRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetMidocoBaggageAllowanceResponse|bool
     */
    public function getMidocoBaggageAllowance(\Pggns\MidocoApi\OrderSD\StructType\GetMidocoBaggageAllowanceRequest $paramGetMidocoBaggageAllowanceRequest)
    {
        try {
            $this->setResult($resultGetMidocoBaggageAllowance = $this->getSoapClient()->__soapCall('getMidocoBaggageAllowance', [
                $paramGetMidocoBaggageAllowanceRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoBaggageAllowance;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getVoucherType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetVoucherTypeRequest $paramGetVoucherTypeRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetVoucherTypeResponse|bool
     */
    public function getVoucherType(\Pggns\MidocoApi\OrderSD\StructType\GetVoucherTypeRequest $paramGetVoucherTypeRequest)
    {
        try {
            $this->setResult($resultGetVoucherType = $this->getSoapClient()->__soapCall('getVoucherType', [
                $paramGetVoucherTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetVoucherType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getExternVoucherType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetExternVoucherTypeRequest $paramGetExternVoucherTypeRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetExternVoucherTypeResponse|bool
     */
    public function getExternVoucherType(\Pggns\MidocoApi\OrderSD\StructType\GetExternVoucherTypeRequest $paramGetExternVoucherTypeRequest)
    {
        try {
            $this->setResult($resultGetExternVoucherType = $this->getSoapClient()->__soapCall('getExternVoucherType', [
                $paramGetExternVoucherTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetExternVoucherType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSupplierShipNames
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetSupplierShipNamesRequest $paramGetSupplierShipNamesRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetSupplierShipNamesResponse|bool
     */
    public function getSupplierShipNames(\Pggns\MidocoApi\OrderSD\StructType\GetSupplierShipNamesRequest $paramGetSupplierShipNamesRequest)
    {
        try {
            $this->setResult($resultGetSupplierShipNames = $this->getSoapClient()->__soapCall('getSupplierShipNames', [
                $paramGetSupplierShipNamesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplierShipNames;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailableSupplierHistorics
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetAvailableSupplierHistoricRequest $paramGetAvailableSupplierHistoricRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetAvailableSupplierHistoricResponse|bool
     */
    public function getAvailableSupplierHistorics(\Pggns\MidocoApi\OrderSD\StructType\GetAvailableSupplierHistoricRequest $paramGetAvailableSupplierHistoricRequest)
    {
        try {
            $this->setResult($resultGetAvailableSupplierHistorics = $this->getSoapClient()->__soapCall('getAvailableSupplierHistorics', [
                $paramGetAvailableSupplierHistoricRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableSupplierHistorics;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSupplierSettlementDiff
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetSpecifiedSupplierSettlementDiffRequest $paramGetSpecifiedSupplierSettlementDiffRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetSpecifiedSupplierSettlementDiffResponse|bool
     */
    public function getSupplierSettlementDiff(\Pggns\MidocoApi\OrderSD\StructType\GetSpecifiedSupplierSettlementDiffRequest $paramGetSpecifiedSupplierSettlementDiffRequest)
    {
        try {
            $this->setResult($resultGetSupplierSettlementDiff = $this->getSoapClient()->__soapCall('getSupplierSettlementDiff', [
                $paramGetSpecifiedSupplierSettlementDiffRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplierSettlementDiff;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSupplierCommissionCondition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetSupplierCommissionConditionRequest $paramGetSupplierCommissionConditionRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetSupplierCommissionConditionResponse|bool
     */
    public function getSupplierCommissionCondition(\Pggns\MidocoApi\OrderSD\StructType\GetSupplierCommissionConditionRequest $paramGetSupplierCommissionConditionRequest)
    {
        try {
            $this->setResult($resultGetSupplierCommissionCondition = $this->getSoapClient()->__soapCall('getSupplierCommissionCondition', [
                $paramGetSupplierCommissionConditionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplierCommissionCondition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSupplierSettlPaymentCondition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetSupplierSettlPaymentConditionRequest $paramGetSupplierSettlPaymentConditionRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetSupplierSettlPaymentConditionResponse|bool
     */
    public function getSupplierSettlPaymentCondition(\Pggns\MidocoApi\OrderSD\StructType\GetSupplierSettlPaymentConditionRequest $paramGetSupplierSettlPaymentConditionRequest)
    {
        try {
            $this->setResult($resultGetSupplierSettlPaymentCondition = $this->getSoapClient()->__soapCall('getSupplierSettlPaymentCondition', [
                $paramGetSupplierSettlPaymentConditionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplierSettlPaymentCondition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailableSupplierNames
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetAvailableSupplierNamesRequest $paramGetAvailableSupplierNamesRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetAvailableSupplierNamesResponse|bool
     */
    public function getAvailableSupplierNames(\Pggns\MidocoApi\OrderSD\StructType\GetAvailableSupplierNamesRequest $paramGetAvailableSupplierNamesRequest)
    {
        try {
            $this->setResult($resultGetAvailableSupplierNames = $this->getSoapClient()->__soapCall('getAvailableSupplierNames', [
                $paramGetAvailableSupplierNamesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableSupplierNames;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPaymentProviders
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetPaymentProvidersRequest $paramGetPaymentProvidersRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetPaymentProvidersResponse|bool
     */
    public function getPaymentProviders(\Pggns\MidocoApi\OrderSD\StructType\GetPaymentProvidersRequest $paramGetPaymentProvidersRequest)
    {
        try {
            $this->setResult($resultGetPaymentProviders = $this->getSoapClient()->__soapCall('getPaymentProviders', [
                $paramGetPaymentProvidersRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetPaymentProviders;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPaymentProviderImportFormat
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetPaymentProviderImportFormatRequest $paramGetPaymentProviderImportFormatRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetPaymentProviderImportFormatResponse|bool
     */
    public function getPaymentProviderImportFormat(\Pggns\MidocoApi\OrderSD\StructType\GetPaymentProviderImportFormatRequest $paramGetPaymentProviderImportFormatRequest)
    {
        try {
            $this->setResult($resultGetPaymentProviderImportFormat = $this->getSoapClient()->__soapCall('getPaymentProviderImportFormat', [
                $paramGetPaymentProviderImportFormatRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetPaymentProviderImportFormat;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getATOLClassifications
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetATOLClassificationsRequest $paramGetATOLClassificationsRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetATOLClassificationsResponse|bool
     */
    public function getATOLClassifications(\Pggns\MidocoApi\OrderSD\StructType\GetATOLClassificationsRequest $paramGetATOLClassificationsRequest)
    {
        try {
            $this->setResult($resultGetATOLClassifications = $this->getSoapClient()->__soapCall('getATOLClassifications', [
                $paramGetATOLClassificationsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetATOLClassifications;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCabinClass
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetCabinClassRequest $paramGetCabinClassRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetCabinClassResponse|bool
     */
    public function getCabinClass(\Pggns\MidocoApi\OrderSD\StructType\GetCabinClassRequest $paramGetCabinClassRequest)
    {
        try {
            $this->setResult($resultGetCabinClass = $this->getSoapClient()->__soapCall('getCabinClass', [
                $paramGetCabinClassRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCabinClass;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getExternalServiceLinks
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetExternalServiceLinksRequest $paramGetExternalServiceLinksRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetExternalServiceLinksResponse|bool
     */
    public function getExternalServiceLinks(\Pggns\MidocoApi\OrderSD\StructType\GetExternalServiceLinksRequest $paramGetExternalServiceLinksRequest)
    {
        try {
            $this->setResult($resultGetExternalServiceLinks = $this->getSoapClient()->__soapCall('getExternalServiceLinks', [
                $paramGetExternalServiceLinksRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetExternalServiceLinks;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAutoInvoiceConditions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GetAutoInvoiceConditionsRequest $paramGetAutoInvoiceConditionsRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetAutoInvoiceConditionsResponse|bool
     */
    public function getAutoInvoiceConditions(\Pggns\MidocoApi\OrderSD\StructType\GetAutoInvoiceConditionsRequest $paramGetAutoInvoiceConditionsRequest)
    {
        try {
            $this->setResult($resultGetAutoInvoiceConditions = $this->getSoapClient()->__soapCall('getAutoInvoiceConditions', [
                $paramGetAutoInvoiceConditionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAutoInvoiceConditions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetAccomodationCodesResponse|\Pggns\MidocoApi\OrderSD\StructType\GetAccountsFromAccountAssignResponse|\Pggns\MidocoApi\OrderSD\StructType\GetAllOrdCriteriaDescriptionsResponse|\Pggns\MidocoApi\OrderSD\StructType\GetAreaCodesResponse|\Pggns\MidocoApi\OrderSD\StructType\GetAssignedMidocoRuleSetForOrgunitResponse|\Pggns\MidocoApi\OrderSD\StructType\GetAssignedMidocoRuleSetResponse|\Pggns\MidocoApi\OrderSD\StructType\GetAssignedOrgunitsForRuleResponse|\Pggns\MidocoApi\OrderSD\StructType\GetAssignedSuppCancelCMappingResponse|\Pggns\MidocoApi\OrderSD\StructType\GetAssignedSuppliersToTemplateResponse|\Pggns\MidocoApi\OrderSD\StructType\GetATOLClassificationsResponse|\Pggns\MidocoApi\OrderSD\StructType\GetAutoInvoiceConditionsResponse|\Pggns\MidocoApi\OrderSD\StructType\GetAutoRemarksResponse|\Pggns\MidocoApi\OrderSD\StructType\GetAvailableAccountsResponse|\Pggns\MidocoApi\OrderSD\StructType\GetAvailableMiscPaymentSettingResponse|\Pggns\MidocoApi\OrderSD\StructType\GetAvailableOrderLockReasonDescriptionsResponse|\Pggns\MidocoApi\OrderSD\StructType\GetAvailableOrderLockReasonsResponse|\Pggns\MidocoApi\OrderSD\StructType\GetAvailableQueryCriteriaOpsResponse|\Pggns\MidocoApi\OrderSD\StructType\GetAvailableQueryFieldsResponse|\Pggns\MidocoApi\OrderSD\StructType\GetAvailableSupplierHistoricResponse|\Pggns\MidocoApi\OrderSD\StructType\GetAvailableSupplierIdResponse|\Pggns\MidocoApi\OrderSD\StructType\GetAvailableSupplierNamesResponse|\Pggns\MidocoApi\OrderSD\StructType\GetAvailableSupplierResponse|\Pggns\MidocoApi\OrderSD\StructType\GetBankAccountResponse|\Pggns\MidocoApi\OrderSD\StructType\GetBankAccounts4OrgUnitResponse|\Pggns\MidocoApi\OrderSD\StructType\GetBookingTextsResponse|\Pggns\MidocoApi\OrderSD\StructType\GetCabinClassResponse|\Pggns\MidocoApi\OrderSD\StructType\GetCashBookItemTypeResponse|\Pggns\MidocoApi\OrderSD\StructType\GetCateringCodesResponse|\Pggns\MidocoApi\OrderSD\StructType\GetCostCentresResponse|\Pggns\MidocoApi\OrderSD\StructType\GetCurrencyRateResponse|\Pggns\MidocoApi\OrderSD\StructType\GetDeliveriesForCultureResponse|\Pggns\MidocoApi\OrderSD\StructType\GetDestinationAutoRemarksResponse|\Pggns\MidocoApi\OrderSD\StructType\GetDestinationDocumentsResponse|\Pggns\MidocoApi\OrderSD\StructType\GetDunningLettersResponse|\Pggns\MidocoApi\OrderSD\StructType\GetExternalServiceLinksResponse|\Pggns\MidocoApi\OrderSD\StructType\GetExternVoucherTypeResponse|\Pggns\MidocoApi\OrderSD\StructType\GetFeeGroupAssignsResponse|\Pggns\MidocoApi\OrderSD\StructType\GetFeeGroupsResponse|\Pggns\MidocoApi\OrderSD\StructType\GetFeeTypeForOrgunitResponse|\Pggns\MidocoApi\OrderSD\StructType\GetHedgeCurrencyRateResponse|\Pggns\MidocoApi\OrderSD\StructType\GetMarketingKeyDescriptionsForTypeResponse|\Pggns\MidocoApi\OrderSD\StructType\GetMarketingKeysForTypeResponse|\Pggns\MidocoApi\OrderSD\StructType\GetMarketingKeysLocalizedForTypeResponse|\Pggns\MidocoApi\OrderSD\StructType\GetMatchingProductTypeSupplierResponse|\Pggns\MidocoApi\OrderSD\StructType\GetMidocoBaggageAllowanceResponse|\Pggns\MidocoApi\OrderSD\StructType\GetMidocoCrsSystemResponse|\Pggns\MidocoApi\OrderSD\StructType\GetMidocoFeeTypeResponse|\Pggns\MidocoApi\OrderSD\StructType\GetMidocoPrintOptionResponse|\Pggns\MidocoApi\OrderSD\StructType\GetMidocoQuestionResponse|\Pggns\MidocoApi\OrderSD\StructType\GetMidocoQuestionValueResponse|\Pggns\MidocoApi\OrderSD\StructType\GetMidocoRuleTypesResponse|\Pggns\MidocoApi\OrderSD\StructType\GetMidocoSettlementTypeForSupplierResponse|\Pggns\MidocoApi\OrderSD\StructType\GetMidocoSettlementTypesResponse|\Pggns\MidocoApi\OrderSD\StructType\GetMidocoSupplierCommissionResponse|\Pggns\MidocoApi\OrderSD\StructType\GetMidocoSupplierImportFormatResponse|\Pggns\MidocoApi\OrderSD\StructType\GetMidocoSupplierTemplateResponse|\Pggns\MidocoApi\OrderSD\StructType\GetMidocoSupplierTemplatesResponse|\Pggns\MidocoApi\OrderSD\StructType\GetMidocoTemplatesResponse|\Pggns\MidocoApi\OrderSD\StructType\GetMidocoTemplateTypesResponse|\Pggns\MidocoApi\OrderSD\StructType\GetMidocoTextRemarksResponse|\Pggns\MidocoApi\OrderSD\StructType\GetOrderLockReasonDescriptionsResponse|\Pggns\MidocoApi\OrderSD\StructType\GetOrderLockReasonsResponse|\Pggns\MidocoApi\OrderSD\StructType\GetPaymentProviderImportFormatResponse|\Pggns\MidocoApi\OrderSD\StructType\GetPaymentProvidersResponse|\Pggns\MidocoApi\OrderSD\StructType\GetProductTypeMediatorConditionsResponse|\Pggns\MidocoApi\OrderSD\StructType\GetProductTypeSupplierResponse|\Pggns\MidocoApi\OrderSD\StructType\GetQueryCriteriaOpNamesResponse|\Pggns\MidocoApi\OrderSD\StructType\GetQueryFieldValuesResponse|\Pggns\MidocoApi\OrderSD\StructType\GetQueryPageResponse|\Pggns\MidocoApi\OrderSD\StructType\GetRemarkOrgunitsResponse|\Pggns\MidocoApi\OrderSD\StructType\GetRemarks4OrgunitResponse|\Pggns\MidocoApi\OrderSD\StructType\GetRemarkSuppliersResponse|\Pggns\MidocoApi\OrderSD\StructType\GetRuleSetsResponse|\Pggns\MidocoApi\OrderSD\StructType\GetShortRemarkIdentifiersResponse|\Pggns\MidocoApi\OrderSD\StructType\GetSpecifiedSupplierPaymentConditionResponse|\Pggns\MidocoApi\OrderSD\StructType\GetSpecifiedSupplierSettlementDiffResponse|\Pggns\MidocoApi\OrderSD\StructType\GetSuppCancelCEmailResponse|\Pggns\MidocoApi\OrderSD\StructType\GetSuppCancelCMappingResponse|\Pggns\MidocoApi\OrderSD\StructType\GetSupplierAccountAssignResponse|\Pggns\MidocoApi\OrderSD\StructType\GetSupplierAddressListResponse|\Pggns\MidocoApi\OrderSD\StructType\GetSupplierAddressResponse|\Pggns\MidocoApi\OrderSD\StructType\GetSupplierAgenciesResponse|\Pggns\MidocoApi\OrderSD\StructType\GetSupplierAgencyResponse|\Pggns\MidocoApi\OrderSD\StructType\GetSupplierByAccountResponse|\Pggns\MidocoApi\OrderSD\StructType\GetSupplierCancelConditionResponse|\Pggns\MidocoApi\OrderSD\StructType\GetSupplierCcCardResponse|\Pggns\MidocoApi\OrderSD\StructType\GetSupplierCommissionByLevelIdResponse|\Pggns\MidocoApi\OrderSD\StructType\GetSupplierCommissionConditionResponse|\Pggns\MidocoApi\OrderSD\StructType\GetSupplierDisabledUnitsResponse|\Pggns\MidocoApi\OrderSD\StructType\GetSupplierDocumentShippingResponse|\Pggns\MidocoApi\OrderSD\StructType\GetSupplierDocumentsResponse|\Pggns\MidocoApi\OrderSD\StructType\GetSupplierInkassoModesResponse|\Pggns\MidocoApi\OrderSD\StructType\GetSupplierMappingResponse|\Pggns\MidocoApi\OrderSD\StructType\GetSupplierNoticesResponse|\Pggns\MidocoApi\OrderSD\StructType\GetSupplierPaymentConditionResponse|\Pggns\MidocoApi\OrderSD\StructType\GetSupplierResponse|\Pggns\MidocoApi\OrderSD\StructType\GetSupplierSettlementAccountsResponse|\Pggns\MidocoApi\OrderSD\StructType\GetSupplierSettlPaymentConditionResponse|\Pggns\MidocoApi\OrderSD\StructType\GetSupplierShipNamesResponse|\Pggns\MidocoApi\OrderSD\StructType\GetSupplierTraveltypesResponse|\Pggns\MidocoApi\OrderSD\StructType\GetTravelNumberAutoRemarksResponse|\Pggns\MidocoApi\OrderSD\StructType\GetTravelNumberDocumentsResponse|\Pggns\MidocoApi\OrderSD\StructType\GetTravelNumberResponse|\Pggns\MidocoApi\OrderSD\StructType\GetUnitDisabledSuppliersResponse|\Pggns\MidocoApi\OrderSD\StructType\GetUserQueryResponse|\Pggns\MidocoApi\OrderSD\StructType\GetVoucherTypeResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
