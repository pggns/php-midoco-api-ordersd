<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Save ServiceType
 * @subpackage Services
 */
class Save extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\OrderSD\ServiceType\Save
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named saveSupplier
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierRequest $paramSaveSupplierRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierResponse|bool
     */
    public function saveSupplier(\Pggns\MidocoApi\OrderSD\StructType\SaveSupplierRequest $paramSaveSupplierRequest)
    {
        try {
            $this->setResult($resultSaveSupplier = $this->getSoapClient()->__soapCall('saveSupplier', [
                $paramSaveSupplierRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveSupplier;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveSupplierAddress
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierAddressRequest $paramSaveSupplierAddressRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierAddressResponse|bool
     */
    public function saveSupplierAddress(\Pggns\MidocoApi\OrderSD\StructType\SaveSupplierAddressRequest $paramSaveSupplierAddressRequest)
    {
        try {
            $this->setResult($resultSaveSupplierAddress = $this->getSoapClient()->__soapCall('saveSupplierAddress', [
                $paramSaveSupplierAddressRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveSupplierAddress;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveSupplierCcCard
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierCcCardRequest $paramSaveSupplierCcCardRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierCcCardResponse|bool
     */
    public function saveSupplierCcCard(\Pggns\MidocoApi\OrderSD\StructType\SaveSupplierCcCardRequest $paramSaveSupplierCcCardRequest)
    {
        try {
            $this->setResult($resultSaveSupplierCcCard = $this->getSoapClient()->__soapCall('saveSupplierCcCard', [
                $paramSaveSupplierCcCardRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveSupplierCcCard;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveSupplierAccountAssign
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierAccountAssignRequest $paramSaveSupplierAccountAssignRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierAccountAssignResponse|bool
     */
    public function saveSupplierAccountAssign(\Pggns\MidocoApi\OrderSD\StructType\SaveSupplierAccountAssignRequest $paramSaveSupplierAccountAssignRequest)
    {
        try {
            $this->setResult($resultSaveSupplierAccountAssign = $this->getSoapClient()->__soapCall('saveSupplierAccountAssign', [
                $paramSaveSupplierAccountAssignRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveSupplierAccountAssign;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveSupplierDocumentShipping
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierDocumentShippingRequest $paramSaveSupplierDocumentShippingRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierDocumentShippingResponse|bool
     */
    public function saveSupplierDocumentShipping(\Pggns\MidocoApi\OrderSD\StructType\SaveSupplierDocumentShippingRequest $paramSaveSupplierDocumentShippingRequest)
    {
        try {
            $this->setResult($resultSaveSupplierDocumentShipping = $this->getSoapClient()->__soapCall('saveSupplierDocumentShipping', [
                $paramSaveSupplierDocumentShippingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveSupplierDocumentShipping;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveSupplierPaymentCondition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierPaymentConditionRequest $paramSaveSupplierPaymentConditionRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierPaymentConditionResponse|bool
     */
    public function saveSupplierPaymentCondition(\Pggns\MidocoApi\OrderSD\StructType\SaveSupplierPaymentConditionRequest $paramSaveSupplierPaymentConditionRequest)
    {
        try {
            $this->setResult($resultSaveSupplierPaymentCondition = $this->getSoapClient()->__soapCall('saveSupplierPaymentCondition', [
                $paramSaveSupplierPaymentConditionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveSupplierPaymentCondition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveSupplierCancelCondition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierCancelConditionRequest $paramSaveSupplierCancelConditionRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierCancelConditionResponse|bool
     */
    public function saveSupplierCancelCondition(\Pggns\MidocoApi\OrderSD\StructType\SaveSupplierCancelConditionRequest $paramSaveSupplierCancelConditionRequest)
    {
        try {
            $this->setResult($resultSaveSupplierCancelCondition = $this->getSoapClient()->__soapCall('saveSupplierCancelCondition', [
                $paramSaveSupplierCancelConditionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveSupplierCancelCondition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveSuppCancelCMapping
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveSuppCancelCMappingRequest $paramSaveSuppCancelCMappingRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveSuppCancelCMappingResponse|bool
     */
    public function saveSuppCancelCMapping(\Pggns\MidocoApi\OrderSD\StructType\SaveSuppCancelCMappingRequest $paramSaveSuppCancelCMappingRequest)
    {
        try {
            $this->setResult($resultSaveSuppCancelCMapping = $this->getSoapClient()->__soapCall('saveSuppCancelCMapping', [
                $paramSaveSuppCancelCMappingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveSuppCancelCMapping;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveSuppCancelCEmail
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveSuppCancelCEmailRequest $paramSaveSuppCancelCEmailRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveSuppCancelCEmailResponse|bool
     */
    public function saveSuppCancelCEmail(\Pggns\MidocoApi\OrderSD\StructType\SaveSuppCancelCEmailRequest $paramSaveSuppCancelCEmailRequest)
    {
        try {
            $this->setResult($resultSaveSuppCancelCEmail = $this->getSoapClient()->__soapCall('saveSuppCancelCEmail', [
                $paramSaveSuppCancelCEmailRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveSuppCancelCEmail;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveAccount
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveAccountRequest $paramSaveAccountRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveAccountResponse|bool
     */
    public function saveAccount(\Pggns\MidocoApi\OrderSD\StructType\SaveAccountRequest $paramSaveAccountRequest)
    {
        try {
            $this->setResult($resultSaveAccount = $this->getSoapClient()->__soapCall('saveAccount', [
                $paramSaveAccountRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveAccount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMediatorCondition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveMediatorConditionRequest $paramSaveMediatorConditionRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveMediatorConditionResponse|bool
     */
    public function saveMediatorCondition(\Pggns\MidocoApi\OrderSD\StructType\SaveMediatorConditionRequest $paramSaveMediatorConditionRequest)
    {
        try {
            $this->setResult($resultSaveMediatorCondition = $this->getSoapClient()->__soapCall('saveMediatorCondition', [
                $paramSaveMediatorConditionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMediatorCondition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMediatorType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveMediatorTypeRequest $paramSaveMediatorTypeRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveMediatorTypeResponse|bool
     */
    public function saveMediatorType(\Pggns\MidocoApi\OrderSD\StructType\SaveMediatorTypeRequest $paramSaveMediatorTypeRequest)
    {
        try {
            $this->setResult($resultSaveMediatorType = $this->getSoapClient()->__soapCall('saveMediatorType', [
                $paramSaveMediatorTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMediatorType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMidocoTextRemark
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoTextRemarksRequest $paramSaveMidocoTextRemarksRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoTextRemarksResponse|bool
     */
    public function saveMidocoTextRemark(\Pggns\MidocoApi\OrderSD\StructType\SaveMidocoTextRemarksRequest $paramSaveMidocoTextRemarksRequest)
    {
        try {
            $this->setResult($resultSaveMidocoTextRemark = $this->getSoapClient()->__soapCall('saveMidocoTextRemark', [
                $paramSaveMidocoTextRemarksRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMidocoTextRemark;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMidocoRuleSet
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoRuleSetRequest $paramSaveMidocoRuleSetRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoRuleSetResponse|bool
     */
    public function saveMidocoRuleSet(\Pggns\MidocoApi\OrderSD\StructType\SaveMidocoRuleSetRequest $paramSaveMidocoRuleSetRequest)
    {
        try {
            $this->setResult($resultSaveMidocoRuleSet = $this->getSoapClient()->__soapCall('saveMidocoRuleSet', [
                $paramSaveMidocoRuleSetRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMidocoRuleSet;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMidocoFeeType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoFeeTypeRequest $paramSaveMidocoFeeTypeRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoFeeTypeResponse|bool
     */
    public function saveMidocoFeeType(\Pggns\MidocoApi\OrderSD\StructType\SaveMidocoFeeTypeRequest $paramSaveMidocoFeeTypeRequest)
    {
        try {
            $this->setResult($resultSaveMidocoFeeType = $this->getSoapClient()->__soapCall('saveMidocoFeeType', [
                $paramSaveMidocoFeeTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMidocoFeeType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMidocoFeeTypeLocal
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoFeeTypeLocalRequest $paramSaveMidocoFeeTypeLocalRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoFeeTypeLocalResponse|bool
     */
    public function saveMidocoFeeTypeLocal(\Pggns\MidocoApi\OrderSD\StructType\SaveMidocoFeeTypeLocalRequest $paramSaveMidocoFeeTypeLocalRequest)
    {
        try {
            $this->setResult($resultSaveMidocoFeeTypeLocal = $this->getSoapClient()->__soapCall('saveMidocoFeeTypeLocal', [
                $paramSaveMidocoFeeTypeLocalRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMidocoFeeTypeLocal;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveBankAccount
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveBankAccountRequest $paramSaveBankAccountRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveBankAccountResponse|bool
     */
    public function saveBankAccount(\Pggns\MidocoApi\OrderSD\StructType\SaveBankAccountRequest $paramSaveBankAccountRequest)
    {
        try {
            $this->setResult($resultSaveBankAccount = $this->getSoapClient()->__soapCall('saveBankAccount', [
                $paramSaveBankAccountRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveBankAccount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMidocoTemplate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoTemplateRequest $paramSaveMidocoTemplateRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoTemplateResponse|bool
     */
    public function saveMidocoTemplate(\Pggns\MidocoApi\OrderSD\StructType\SaveMidocoTemplateRequest $paramSaveMidocoTemplateRequest)
    {
        try {
            $this->setResult($resultSaveMidocoTemplate = $this->getSoapClient()->__soapCall('saveMidocoTemplate', [
                $paramSaveMidocoTemplateRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMidocoTemplate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMidocoTemplateType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoTemplateTypeRequest $paramSaveMidocoTemplateTypeRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoTemplateTypeResponse|bool
     */
    public function saveMidocoTemplateType(\Pggns\MidocoApi\OrderSD\StructType\SaveMidocoTemplateTypeRequest $paramSaveMidocoTemplateTypeRequest)
    {
        try {
            $this->setResult($resultSaveMidocoTemplateType = $this->getSoapClient()->__soapCall('saveMidocoTemplateType', [
                $paramSaveMidocoTemplateTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMidocoTemplateType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMidocoSupplierCommisssion
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoSupplierCommissionRequest $paramSaveMidocoSupplierCommissionRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoSupplierCommissionResponse|bool
     */
    public function saveMidocoSupplierCommisssion(\Pggns\MidocoApi\OrderSD\StructType\SaveMidocoSupplierCommissionRequest $paramSaveMidocoSupplierCommissionRequest)
    {
        try {
            $this->setResult($resultSaveMidocoSupplierCommisssion = $this->getSoapClient()->__soapCall('saveMidocoSupplierCommisssion', [
                $paramSaveMidocoSupplierCommissionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMidocoSupplierCommisssion;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveCashBookItemType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveCashBookItemTypeRequest $paramSaveCashBookItemTypeRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveCashBookItemTypeResponse|bool
     */
    public function saveCashBookItemType(\Pggns\MidocoApi\OrderSD\StructType\SaveCashBookItemTypeRequest $paramSaveCashBookItemTypeRequest)
    {
        try {
            $this->setResult($resultSaveCashBookItemType = $this->getSoapClient()->__soapCall('saveCashBookItemType', [
                $paramSaveCashBookItemTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveCashBookItemType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveAccomodationCode
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveAccomodationCodeRequest $paramSaveAccomodationCodeRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveAccomodationCodeResponse|bool
     */
    public function saveAccomodationCode(\Pggns\MidocoApi\OrderSD\StructType\SaveAccomodationCodeRequest $paramSaveAccomodationCodeRequest)
    {
        try {
            $this->setResult($resultSaveAccomodationCode = $this->getSoapClient()->__soapCall('saveAccomodationCode', [
                $paramSaveAccomodationCodeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveAccomodationCode;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveCateringCode
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveCateringCodeRequest $paramSaveCateringCodeRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveCateringCodeResponse|bool
     */
    public function saveCateringCode(\Pggns\MidocoApi\OrderSD\StructType\SaveCateringCodeRequest $paramSaveCateringCodeRequest)
    {
        try {
            $this->setResult($resultSaveCateringCode = $this->getSoapClient()->__soapCall('saveCateringCode', [
                $paramSaveCateringCodeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveCateringCode;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveAreaCode
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveAreaCodeRequest $paramSaveAreaCodeRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveAreaCodeResponse|bool
     */
    public function saveAreaCode(\Pggns\MidocoApi\OrderSD\StructType\SaveAreaCodeRequest $paramSaveAreaCodeRequest)
    {
        try {
            $this->setResult($resultSaveAreaCode = $this->getSoapClient()->__soapCall('saveAreaCode', [
                $paramSaveAreaCodeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveAreaCode;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveRemarkOrgunit
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveRemarkOrgunitRequest $paramSaveRemarkOrgunitRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveRemarkOrgunitResponse|bool
     */
    public function saveRemarkOrgunit(\Pggns\MidocoApi\OrderSD\StructType\SaveRemarkOrgunitRequest $paramSaveRemarkOrgunitRequest)
    {
        try {
            $this->setResult($resultSaveRemarkOrgunit = $this->getSoapClient()->__soapCall('saveRemarkOrgunit', [
                $paramSaveRemarkOrgunitRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveRemarkOrgunit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveSupplierSettlementAccount
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierSettlementAccountRequest $paramSaveSupplierSettlementAccountRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierSettlementAccountResponse|bool
     */
    public function saveSupplierSettlementAccount(\Pggns\MidocoApi\OrderSD\StructType\SaveSupplierSettlementAccountRequest $paramSaveSupplierSettlementAccountRequest)
    {
        try {
            $this->setResult($resultSaveSupplierSettlementAccount = $this->getSoapClient()->__soapCall('saveSupplierSettlementAccount', [
                $paramSaveSupplierSettlementAccountRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveSupplierSettlementAccount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveRemarkSupplier
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveRemarkSupplierRequest $paramSaveRemarkSupplierRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveRemarkSupplierResponse|bool
     */
    public function saveRemarkSupplier(\Pggns\MidocoApi\OrderSD\StructType\SaveRemarkSupplierRequest $paramSaveRemarkSupplierRequest)
    {
        try {
            $this->setResult($resultSaveRemarkSupplier = $this->getSoapClient()->__soapCall('saveRemarkSupplier', [
                $paramSaveRemarkSupplierRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveRemarkSupplier;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveSettlementCharge
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveSettlementChargeRequest $paramSaveSettlementChargeRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveSettlementChargeResponse|bool
     */
    public function saveSettlementCharge(\Pggns\MidocoApi\OrderSD\StructType\SaveSettlementChargeRequest $paramSaveSettlementChargeRequest)
    {
        try {
            $this->setResult($resultSaveSettlementCharge = $this->getSoapClient()->__soapCall('saveSettlementCharge', [
                $paramSaveSettlementChargeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveSettlementCharge;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveSupplierAgency
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierAgencyRequest $paramSaveSupplierAgencyRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierAgencyResponse|bool
     */
    public function saveSupplierAgency(\Pggns\MidocoApi\OrderSD\StructType\SaveSupplierAgencyRequest $paramSaveSupplierAgencyRequest)
    {
        try {
            $this->setResult($resultSaveSupplierAgency = $this->getSoapClient()->__soapCall('saveSupplierAgency', [
                $paramSaveSupplierAgencyRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveSupplierAgency;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveUserQuery
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveUserQueryRequest $paramSaveUserQueryRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveUserQueryResponse|bool
     */
    public function saveUserQuery(\Pggns\MidocoApi\OrderSD\StructType\SaveUserQueryRequest $paramSaveUserQueryRequest)
    {
        try {
            $this->setResult($resultSaveUserQuery = $this->getSoapClient()->__soapCall('saveUserQuery', [
                $paramSaveUserQueryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveUserQuery;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveDunningLetter
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveDunningLetterRequest $paramSaveDunningLetterRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveDunningLetterResponse|bool
     */
    public function saveDunningLetter(\Pggns\MidocoApi\OrderSD\StructType\SaveDunningLetterRequest $paramSaveDunningLetterRequest)
    {
        try {
            $this->setResult($resultSaveDunningLetter = $this->getSoapClient()->__soapCall('saveDunningLetter', [
                $paramSaveDunningLetterRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveDunningLetter;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveProductTypeMediatorCondition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveProductTypeMediatorConditionRequest $paramSaveProductTypeMediatorConditionRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveProductTypeMediatorConditionResponse|bool
     */
    public function saveProductTypeMediatorCondition(\Pggns\MidocoApi\OrderSD\StructType\SaveProductTypeMediatorConditionRequest $paramSaveProductTypeMediatorConditionRequest)
    {
        try {
            $this->setResult($resultSaveProductTypeMediatorCondition = $this->getSoapClient()->__soapCall('saveProductTypeMediatorCondition', [
                $paramSaveProductTypeMediatorConditionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveProductTypeMediatorCondition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveFeeTypeForOrgunit
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveFeeTypeForOrgunitRequest $paramSaveFeeTypeForOrgunitRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveFeeTypeForOrgunitResponse|bool
     */
    public function saveFeeTypeForOrgunit(\Pggns\MidocoApi\OrderSD\StructType\SaveFeeTypeForOrgunitRequest $paramSaveFeeTypeForOrgunitRequest)
    {
        try {
            $this->setResult($resultSaveFeeTypeForOrgunit = $this->getSoapClient()->__soapCall('saveFeeTypeForOrgunit', [
                $paramSaveFeeTypeForOrgunitRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveFeeTypeForOrgunit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveFeeGroupAssign
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveFeeGroupAssignRequest $paramSaveFeeGroupAssignRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveFeeGroupAssignResponse|bool
     */
    public function saveFeeGroupAssign(\Pggns\MidocoApi\OrderSD\StructType\SaveFeeGroupAssignRequest $paramSaveFeeGroupAssignRequest)
    {
        try {
            $this->setResult($resultSaveFeeGroupAssign = $this->getSoapClient()->__soapCall('saveFeeGroupAssign', [
                $paramSaveFeeGroupAssignRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveFeeGroupAssign;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveFeeGroup
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveFeeGroupRequest $paramSaveFeeGroupRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveFeeGroupResponse|bool
     */
    public function saveFeeGroup(\Pggns\MidocoApi\OrderSD\StructType\SaveFeeGroupRequest $paramSaveFeeGroupRequest)
    {
        try {
            $this->setResult($resultSaveFeeGroup = $this->getSoapClient()->__soapCall('saveFeeGroup', [
                $paramSaveFeeGroupRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveFeeGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveAutoRemark
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveAutoRemarkRequest $paramSaveAutoRemarkRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveAutoRemarkResponse|bool
     */
    public function saveAutoRemark(\Pggns\MidocoApi\OrderSD\StructType\SaveAutoRemarkRequest $paramSaveAutoRemarkRequest)
    {
        try {
            $this->setResult($resultSaveAutoRemark = $this->getSoapClient()->__soapCall('saveAutoRemark', [
                $paramSaveAutoRemarkRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveAutoRemark;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveSupplierTraveltype
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierTraveltypeRequest $paramSaveSupplierTraveltypeRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierTraveltypeResponse|bool
     */
    public function saveSupplierTraveltype(\Pggns\MidocoApi\OrderSD\StructType\SaveSupplierTraveltypeRequest $paramSaveSupplierTraveltypeRequest)
    {
        try {
            $this->setResult($resultSaveSupplierTraveltype = $this->getSoapClient()->__soapCall('saveSupplierTraveltype', [
                $paramSaveSupplierTraveltypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveSupplierTraveltype;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMarketingKey
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveMarketingKeyRequest $paramSaveMarketingKeyRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveMarketingKeyResponse|bool
     */
    public function saveMarketingKey(\Pggns\MidocoApi\OrderSD\StructType\SaveMarketingKeyRequest $paramSaveMarketingKeyRequest)
    {
        try {
            $this->setResult($resultSaveMarketingKey = $this->getSoapClient()->__soapCall('saveMarketingKey', [
                $paramSaveMarketingKeyRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMarketingKey;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMarketingKeyDescription
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveMarketingKeyDescriptionRequest $paramSaveMarketingKeyDescriptionRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveMarketingKeyDescriptionResponse|bool
     */
    public function saveMarketingKeyDescription(\Pggns\MidocoApi\OrderSD\StructType\SaveMarketingKeyDescriptionRequest $paramSaveMarketingKeyDescriptionRequest)
    {
        try {
            $this->setResult($resultSaveMarketingKeyDescription = $this->getSoapClient()->__soapCall('saveMarketingKeyDescription', [
                $paramSaveMarketingKeyDescriptionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMarketingKeyDescription;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveBookingText
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveBookingTextRequest $paramSaveBookingTextRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveBookingTextResponse|bool
     */
    public function saveBookingText(\Pggns\MidocoApi\OrderSD\StructType\SaveBookingTextRequest $paramSaveBookingTextRequest)
    {
        try {
            $this->setResult($resultSaveBookingText = $this->getSoapClient()->__soapCall('saveBookingText', [
                $paramSaveBookingTextRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveBookingText;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMidocoSupplierImportFormat
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoSupplierImportFormatRequest $paramSaveMidocoSupplierImportFormatRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoSupplierImportFormatResponse|bool
     */
    public function saveMidocoSupplierImportFormat(\Pggns\MidocoApi\OrderSD\StructType\SaveMidocoSupplierImportFormatRequest $paramSaveMidocoSupplierImportFormatRequest)
    {
        try {
            $this->setResult($resultSaveMidocoSupplierImportFormat = $this->getSoapClient()->__soapCall('saveMidocoSupplierImportFormat', [
                $paramSaveMidocoSupplierImportFormatRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMidocoSupplierImportFormat;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMidocoSettlementType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoSettlementTypeRequest $paramSaveMidocoSettlementTypeRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoSettlementTypeResponse|bool
     */
    public function saveMidocoSettlementType(\Pggns\MidocoApi\OrderSD\StructType\SaveMidocoSettlementTypeRequest $paramSaveMidocoSettlementTypeRequest)
    {
        try {
            $this->setResult($resultSaveMidocoSettlementType = $this->getSoapClient()->__soapCall('saveMidocoSettlementType', [
                $paramSaveMidocoSettlementTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMidocoSettlementType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveCurrencyRates
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveCurrencyRatesRequest $paramSaveCurrencyRatesRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveCurrencyRatesResponse|bool
     */
    public function saveCurrencyRates(\Pggns\MidocoApi\OrderSD\StructType\SaveCurrencyRatesRequest $paramSaveCurrencyRatesRequest)
    {
        try {
            $this->setResult($resultSaveCurrencyRates = $this->getSoapClient()->__soapCall('saveCurrencyRates', [
                $paramSaveCurrencyRatesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveCurrencyRates;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveHedgeCurrencyRates
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveHedgeCurrencyRatesRequest $paramSaveHedgeCurrencyRatesRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveHedgeCurrencyRatesResponse|bool
     */
    public function saveHedgeCurrencyRates(\Pggns\MidocoApi\OrderSD\StructType\SaveHedgeCurrencyRatesRequest $paramSaveHedgeCurrencyRatesRequest)
    {
        try {
            $this->setResult($resultSaveHedgeCurrencyRates = $this->getSoapClient()->__soapCall('saveHedgeCurrencyRates', [
                $paramSaveHedgeCurrencyRatesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveHedgeCurrencyRates;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveTravelNumber
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveTravelNumberRequest $paramSaveTravelNumberRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveTravelNumberResponse|bool
     */
    public function saveTravelNumber(\Pggns\MidocoApi\OrderSD\StructType\SaveTravelNumberRequest $paramSaveTravelNumberRequest)
    {
        try {
            $this->setResult($resultSaveTravelNumber = $this->getSoapClient()->__soapCall('saveTravelNumber', [
                $paramSaveTravelNumberRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveTravelNumber;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveCostCentre
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveCostCentreRequest $paramSaveCostCentreRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveCostCentreResponse|bool
     */
    public function saveCostCentre(\Pggns\MidocoApi\OrderSD\StructType\SaveCostCentreRequest $paramSaveCostCentreRequest)
    {
        try {
            $this->setResult($resultSaveCostCentre = $this->getSoapClient()->__soapCall('saveCostCentre', [
                $paramSaveCostCentreRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveCostCentre;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveSupplierNotice
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierNoticeRequest $paramSaveSupplierNoticeRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierNoticeResponse|bool
     */
    public function saveSupplierNotice(\Pggns\MidocoApi\OrderSD\StructType\SaveSupplierNoticeRequest $paramSaveSupplierNoticeRequest)
    {
        try {
            $this->setResult($resultSaveSupplierNotice = $this->getSoapClient()->__soapCall('saveSupplierNotice', [
                $paramSaveSupplierNoticeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveSupplierNotice;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMiscPaymentSettings
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveMiscPaymentSettingRequest $paramSaveMiscPaymentSettingRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveMiscPaymentSettingResponse|bool
     */
    public function saveMiscPaymentSettings(\Pggns\MidocoApi\OrderSD\StructType\SaveMiscPaymentSettingRequest $paramSaveMiscPaymentSettingRequest)
    {
        try {
            $this->setResult($resultSaveMiscPaymentSettings = $this->getSoapClient()->__soapCall('saveMiscPaymentSettings', [
                $paramSaveMiscPaymentSettingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMiscPaymentSettings;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMidocoSupplierTemplate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoSupplierTemplateRequest $paramSaveMidocoSupplierTemplateRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoSupplierTemplateResponse|bool
     */
    public function saveMidocoSupplierTemplate(\Pggns\MidocoApi\OrderSD\StructType\SaveMidocoSupplierTemplateRequest $paramSaveMidocoSupplierTemplateRequest)
    {
        try {
            $this->setResult($resultSaveMidocoSupplierTemplate = $this->getSoapClient()->__soapCall('saveMidocoSupplierTemplate', [
                $paramSaveMidocoSupplierTemplateRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMidocoSupplierTemplate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMidocoCrsSystem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoCrsSystemRequest $paramSaveMidocoCrsSystemRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoCrsSystemResponse|bool
     */
    public function saveMidocoCrsSystem(\Pggns\MidocoApi\OrderSD\StructType\SaveMidocoCrsSystemRequest $paramSaveMidocoCrsSystemRequest)
    {
        try {
            $this->setResult($resultSaveMidocoCrsSystem = $this->getSoapClient()->__soapCall('saveMidocoCrsSystem', [
                $paramSaveMidocoCrsSystemRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMidocoCrsSystem;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMidocoQuestion
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoQuestionRequest $paramSaveMidocoQuestionRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoQuestionResponse|bool
     */
    public function saveMidocoQuestion(\Pggns\MidocoApi\OrderSD\StructType\SaveMidocoQuestionRequest $paramSaveMidocoQuestionRequest)
    {
        try {
            $this->setResult($resultSaveMidocoQuestion = $this->getSoapClient()->__soapCall('saveMidocoQuestion', [
                $paramSaveMidocoQuestionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMidocoQuestion;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMidocoQuestionValue
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoQuestionValueRequest $paramSaveMidocoQuestionValueRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoQuestionValueResponse|bool
     */
    public function saveMidocoQuestionValue(\Pggns\MidocoApi\OrderSD\StructType\SaveMidocoQuestionValueRequest $paramSaveMidocoQuestionValueRequest)
    {
        try {
            $this->setResult($resultSaveMidocoQuestionValue = $this->getSoapClient()->__soapCall('saveMidocoQuestionValue', [
                $paramSaveMidocoQuestionValueRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMidocoQuestionValue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveOrderLockReason
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveOrderLockReasonRequest $paramSaveOrderLockReasonRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveOrderLockReasonResponse|bool
     */
    public function saveOrderLockReason(\Pggns\MidocoApi\OrderSD\StructType\SaveOrderLockReasonRequest $paramSaveOrderLockReasonRequest)
    {
        try {
            $this->setResult($resultSaveOrderLockReason = $this->getSoapClient()->__soapCall('saveOrderLockReason', [
                $paramSaveOrderLockReasonRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveOrderLockReason;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveOrderLockReasonDescription
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveOrderLockReasonDescriptionRequest $paramSaveOrderLockReasonDescriptionRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveOrderLockReasonDescriptionResponse|bool
     */
    public function saveOrderLockReasonDescription(\Pggns\MidocoApi\OrderSD\StructType\SaveOrderLockReasonDescriptionRequest $paramSaveOrderLockReasonDescriptionRequest)
    {
        try {
            $this->setResult($resultSaveOrderLockReasonDescription = $this->getSoapClient()->__soapCall('saveOrderLockReasonDescription', [
                $paramSaveOrderLockReasonDescriptionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveOrderLockReasonDescription;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveTravelNumberAutoRemark
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveTravelNumberAutoRemarkRequest $paramSaveTravelNumberAutoRemarkRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveTravelNumberAutoRemarkResponse|bool
     */
    public function saveTravelNumberAutoRemark(\Pggns\MidocoApi\OrderSD\StructType\SaveTravelNumberAutoRemarkRequest $paramSaveTravelNumberAutoRemarkRequest)
    {
        try {
            $this->setResult($resultSaveTravelNumberAutoRemark = $this->getSoapClient()->__soapCall('saveTravelNumberAutoRemark', [
                $paramSaveTravelNumberAutoRemarkRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveTravelNumberAutoRemark;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveTravelNumberDocument
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveTravelNumberDocumentRequest $paramSaveTravelNumberDocumentRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveTravelNumberDocumentResponse|bool
     */
    public function saveTravelNumberDocument(\Pggns\MidocoApi\OrderSD\StructType\SaveTravelNumberDocumentRequest $paramSaveTravelNumberDocumentRequest)
    {
        try {
            $this->setResult($resultSaveTravelNumberDocument = $this->getSoapClient()->__soapCall('saveTravelNumberDocument', [
                $paramSaveTravelNumberDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveTravelNumberDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveDestinationAutoRemark
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveDestinationAutoRemarkRequest $paramSaveDestinationAutoRemarkRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveDestinationAutoRemarkResponse|bool
     */
    public function saveDestinationAutoRemark(\Pggns\MidocoApi\OrderSD\StructType\SaveDestinationAutoRemarkRequest $paramSaveDestinationAutoRemarkRequest)
    {
        try {
            $this->setResult($resultSaveDestinationAutoRemark = $this->getSoapClient()->__soapCall('saveDestinationAutoRemark', [
                $paramSaveDestinationAutoRemarkRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveDestinationAutoRemark;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveDestinationDocument
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveDestinationDocumentRequest $paramSaveDestinationDocumentRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveDestinationDocumentResponse|bool
     */
    public function saveDestinationDocument(\Pggns\MidocoApi\OrderSD\StructType\SaveDestinationDocumentRequest $paramSaveDestinationDocumentRequest)
    {
        try {
            $this->setResult($resultSaveDestinationDocument = $this->getSoapClient()->__soapCall('saveDestinationDocument', [
                $paramSaveDestinationDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveDestinationDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveSupplierDocument
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierDocumentRequest $paramSaveSupplierDocumentRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierDocumentResponse|bool
     */
    public function saveSupplierDocument(\Pggns\MidocoApi\OrderSD\StructType\SaveSupplierDocumentRequest $paramSaveSupplierDocumentRequest)
    {
        try {
            $this->setResult($resultSaveSupplierDocument = $this->getSoapClient()->__soapCall('saveSupplierDocument', [
                $paramSaveSupplierDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveSupplierDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveSupplierDisabledUnits
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierDisabledUnitsRequest $paramSaveSupplierDisabledUnitsRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierDisabledUnitsResponse|bool
     */
    public function saveSupplierDisabledUnits(\Pggns\MidocoApi\OrderSD\StructType\SaveSupplierDisabledUnitsRequest $paramSaveSupplierDisabledUnitsRequest)
    {
        try {
            $this->setResult($resultSaveSupplierDisabledUnits = $this->getSoapClient()->__soapCall('saveSupplierDisabledUnits', [
                $paramSaveSupplierDisabledUnitsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveSupplierDisabledUnits;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveProductTypeSupplier
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveProductTypeSupplierRequest $paramSaveProductTypeSupplierRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveProductTypeSupplierResponse|bool
     */
    public function saveProductTypeSupplier(\Pggns\MidocoApi\OrderSD\StructType\SaveProductTypeSupplierRequest $paramSaveProductTypeSupplierRequest)
    {
        try {
            $this->setResult($resultSaveProductTypeSupplier = $this->getSoapClient()->__soapCall('saveProductTypeSupplier', [
                $paramSaveProductTypeSupplierRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveProductTypeSupplier;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveSupplierFreeStornoDays
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierFreeStornoDaysRequest $paramSaveSupplierFreeStornoDaysRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierFreeStornoDaysResponse|bool
     */
    public function saveSupplierFreeStornoDays(\Pggns\MidocoApi\OrderSD\StructType\SaveSupplierFreeStornoDaysRequest $paramSaveSupplierFreeStornoDaysRequest)
    {
        try {
            $this->setResult($resultSaveSupplierFreeStornoDays = $this->getSoapClient()->__soapCall('saveSupplierFreeStornoDays', [
                $paramSaveSupplierFreeStornoDaysRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveSupplierFreeStornoDays;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveVoucherType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveVoucherTypeRequest $paramSaveVoucherTypeRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveVoucherTypeResponse|bool
     */
    public function saveVoucherType(\Pggns\MidocoApi\OrderSD\StructType\SaveVoucherTypeRequest $paramSaveVoucherTypeRequest)
    {
        try {
            $this->setResult($resultSaveVoucherType = $this->getSoapClient()->__soapCall('saveVoucherType', [
                $paramSaveVoucherTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveVoucherType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveExternVoucherType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveExternVoucherTypeRequest $paramSaveExternVoucherTypeRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveExternVoucherTypeResponse|bool
     */
    public function saveExternVoucherType(\Pggns\MidocoApi\OrderSD\StructType\SaveExternVoucherTypeRequest $paramSaveExternVoucherTypeRequest)
    {
        try {
            $this->setResult($resultSaveExternVoucherType = $this->getSoapClient()->__soapCall('saveExternVoucherType', [
                $paramSaveExternVoucherTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveExternVoucherType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveSupplierShipName
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierShipNameRequest $paramSaveSupplierShipNameRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierShipNameResponse|bool
     */
    public function saveSupplierShipName(\Pggns\MidocoApi\OrderSD\StructType\SaveSupplierShipNameRequest $paramSaveSupplierShipNameRequest)
    {
        try {
            $this->setResult($resultSaveSupplierShipName = $this->getSoapClient()->__soapCall('saveSupplierShipName', [
                $paramSaveSupplierShipNameRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveSupplierShipName;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveSupplierSettlementDiff
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierSettlementDiffRequest $paramSaveSupplierSettlementDiffRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierSettlementDiffResponse|bool
     */
    public function saveSupplierSettlementDiff(\Pggns\MidocoApi\OrderSD\StructType\SaveSupplierSettlementDiffRequest $paramSaveSupplierSettlementDiffRequest)
    {
        try {
            $this->setResult($resultSaveSupplierSettlementDiff = $this->getSoapClient()->__soapCall('saveSupplierSettlementDiff', [
                $paramSaveSupplierSettlementDiffRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveSupplierSettlementDiff;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveSupplierCommissionCondition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierCommissionConditionRequest $paramSaveSupplierCommissionConditionRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierCommissionConditionResponse|bool
     */
    public function saveSupplierCommissionCondition(\Pggns\MidocoApi\OrderSD\StructType\SaveSupplierCommissionConditionRequest $paramSaveSupplierCommissionConditionRequest)
    {
        try {
            $this->setResult($resultSaveSupplierCommissionCondition = $this->getSoapClient()->__soapCall('saveSupplierCommissionCondition', [
                $paramSaveSupplierCommissionConditionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveSupplierCommissionCondition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveSupplierSettlPaymentCondition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierSettlPaymentConditionRequest $paramSaveSupplierSettlPaymentConditionRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierSettlPaymentConditionResponse|bool
     */
    public function saveSupplierSettlPaymentCondition(\Pggns\MidocoApi\OrderSD\StructType\SaveSupplierSettlPaymentConditionRequest $paramSaveSupplierSettlPaymentConditionRequest)
    {
        try {
            $this->setResult($resultSaveSupplierSettlPaymentCondition = $this->getSoapClient()->__soapCall('saveSupplierSettlPaymentCondition', [
                $paramSaveSupplierSettlPaymentConditionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveSupplierSettlPaymentCondition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named savePaymentProvider
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SavePaymentProviderRequest $paramSavePaymentProviderRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SavePaymentProviderResponse|bool
     */
    public function savePaymentProvider(\Pggns\MidocoApi\OrderSD\StructType\SavePaymentProviderRequest $paramSavePaymentProviderRequest)
    {
        try {
            $this->setResult($resultSavePaymentProvider = $this->getSoapClient()->__soapCall('savePaymentProvider', [
                $paramSavePaymentProviderRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSavePaymentProvider;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named savePaymentProviderImportFormat
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SavePaymentProviderImportFormatRequest $paramSavePaymentProviderImportFormatRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SavePaymentProviderImportFormatResponse|bool
     */
    public function savePaymentProviderImportFormat(\Pggns\MidocoApi\OrderSD\StructType\SavePaymentProviderImportFormatRequest $paramSavePaymentProviderImportFormatRequest)
    {
        try {
            $this->setResult($resultSavePaymentProviderImportFormat = $this->getSoapClient()->__soapCall('savePaymentProviderImportFormat', [
                $paramSavePaymentProviderImportFormatRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSavePaymentProviderImportFormat;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveCabinClass
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SaveCabinClassRequest $paramSaveCabinClassRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveCabinClassResponse|bool
     */
    public function saveCabinClass(\Pggns\MidocoApi\OrderSD\StructType\SaveCabinClassRequest $paramSaveCabinClassRequest)
    {
        try {
            $this->setResult($resultSaveCabinClass = $this->getSoapClient()->__soapCall('saveCabinClass', [
                $paramSaveCabinClassRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveCabinClass;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveAccomodationCodeResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveAccountResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveAreaCodeResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveAutoRemarkResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveBankAccountResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveBookingTextResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveCabinClassResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveCashBookItemTypeResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveCateringCodeResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveCostCentreResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveCurrencyRatesResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveDestinationAutoRemarkResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveDestinationDocumentResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveDunningLetterResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveExternVoucherTypeResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveFeeGroupAssignResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveFeeGroupResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveFeeTypeForOrgunitResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveHedgeCurrencyRatesResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveMarketingKeyDescriptionResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveMarketingKeyResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveMediatorConditionResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveMediatorTypeResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveMidocoCrsSystemResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveMidocoFeeTypeLocalResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveMidocoFeeTypeResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveMidocoQuestionResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveMidocoQuestionValueResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveMidocoRuleSetResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveMidocoSettlementTypeResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveMidocoSupplierCommissionResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveMidocoSupplierImportFormatResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveMidocoSupplierTemplateResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveMidocoTemplateResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveMidocoTemplateTypeResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveMidocoTextRemarksResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveMiscPaymentSettingResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveOrderLockReasonDescriptionResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveOrderLockReasonResponse|\Pggns\MidocoApi\OrderSD\StructType\SavePaymentProviderImportFormatResponse|\Pggns\MidocoApi\OrderSD\StructType\SavePaymentProviderResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveProductTypeMediatorConditionResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveProductTypeSupplierResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveRemarkOrgunitResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveRemarkSupplierResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveSettlementChargeResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveSuppCancelCEmailResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveSuppCancelCMappingResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveSupplierAccountAssignResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveSupplierAddressResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveSupplierAgencyResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveSupplierCancelConditionResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveSupplierCcCardResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveSupplierCommissionConditionResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveSupplierDisabledUnitsResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveSupplierDocumentResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveSupplierDocumentShippingResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveSupplierFreeStornoDaysResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveSupplierNoticeResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveSupplierPaymentConditionResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveSupplierResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveSupplierSettlementAccountResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveSupplierSettlementDiffResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveSupplierSettlPaymentConditionResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveSupplierShipNameResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveSupplierTraveltypeResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveTravelNumberAutoRemarkResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveTravelNumberDocumentResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveTravelNumberResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveUserQueryResponse|\Pggns\MidocoApi\OrderSD\StructType\SaveVoucherTypeResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
