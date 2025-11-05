<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\OrderSD\ServiceType\Delete
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named deleteSupplier
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierRequest $paramDeleteSupplierRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierResponse|bool
     */
    public function deleteSupplier(\Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierRequest $paramDeleteSupplierRequest)
    {
        try {
            $this->setResult($resultDeleteSupplier = $this->getSoapClient()->__soapCall('deleteSupplier', [
                $paramDeleteSupplierRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSupplier;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSupplierCcCard
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierCcCardRequest $paramDeleteSupplierCcCardRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierCcCardResponse|bool
     */
    public function deleteSupplierCcCard(\Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierCcCardRequest $paramDeleteSupplierCcCardRequest)
    {
        try {
            $this->setResult($resultDeleteSupplierCcCard = $this->getSoapClient()->__soapCall('deleteSupplierCcCard', [
                $paramDeleteSupplierCcCardRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSupplierCcCard;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSupplierAccountAssign
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierAccountAssignRequest $paramDeleteSupplierAccountAssignRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierAccountAssignResponse|bool
     */
    public function deleteSupplierAccountAssign(\Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierAccountAssignRequest $paramDeleteSupplierAccountAssignRequest)
    {
        try {
            $this->setResult($resultDeleteSupplierAccountAssign = $this->getSoapClient()->__soapCall('deleteSupplierAccountAssign', [
                $paramDeleteSupplierAccountAssignRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSupplierAccountAssign;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSupplierDocumentShipping
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierDocumentShippingRequest $paramDeleteSupplierDocumentShippingRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierDocumentShippingResponse|bool
     */
    public function deleteSupplierDocumentShipping(\Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierDocumentShippingRequest $paramDeleteSupplierDocumentShippingRequest)
    {
        try {
            $this->setResult($resultDeleteSupplierDocumentShipping = $this->getSoapClient()->__soapCall('deleteSupplierDocumentShipping', [
                $paramDeleteSupplierDocumentShippingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSupplierDocumentShipping;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSupplierPaymentCondition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierPaymentConditionRequest $paramDeleteSupplierPaymentConditionRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierPaymentConditionResponse|bool
     */
    public function deleteSupplierPaymentCondition(\Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierPaymentConditionRequest $paramDeleteSupplierPaymentConditionRequest)
    {
        try {
            $this->setResult($resultDeleteSupplierPaymentCondition = $this->getSoapClient()->__soapCall('deleteSupplierPaymentCondition', [
                $paramDeleteSupplierPaymentConditionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSupplierPaymentCondition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSupplierCancelCondition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierCancelConditionRequest $paramDeleteSupplierCancelConditionRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierCancelConditionResponse|bool
     */
    public function deleteSupplierCancelCondition(\Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierCancelConditionRequest $paramDeleteSupplierCancelConditionRequest)
    {
        try {
            $this->setResult($resultDeleteSupplierCancelCondition = $this->getSoapClient()->__soapCall('deleteSupplierCancelCondition', [
                $paramDeleteSupplierCancelConditionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSupplierCancelCondition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSuppCancelCMapping
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteSuppCancelCMappingRequest $paramDeleteSuppCancelCMappingRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteSuppCancelCMappingResponse|bool
     */
    public function deleteSuppCancelCMapping(\Pggns\MidocoApi\OrderSD\StructType\DeleteSuppCancelCMappingRequest $paramDeleteSuppCancelCMappingRequest)
    {
        try {
            $this->setResult($resultDeleteSuppCancelCMapping = $this->getSoapClient()->__soapCall('deleteSuppCancelCMapping', [
                $paramDeleteSuppCancelCMappingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSuppCancelCMapping;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSuppCancelCEmail
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteSuppCancelCEmailRequest $paramDeleteSuppCancelCEmailRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteSuppCancelCEmailResponse|bool
     */
    public function deleteSuppCancelCEmail(\Pggns\MidocoApi\OrderSD\StructType\DeleteSuppCancelCEmailRequest $paramDeleteSuppCancelCEmailRequest)
    {
        try {
            $this->setResult($resultDeleteSuppCancelCEmail = $this->getSoapClient()->__soapCall('deleteSuppCancelCEmail', [
                $paramDeleteSuppCancelCEmailRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSuppCancelCEmail;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteAccount
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteAccountRequest $paramDeleteAccountRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteAccountResponse|bool
     */
    public function deleteAccount(\Pggns\MidocoApi\OrderSD\StructType\DeleteAccountRequest $paramDeleteAccountRequest)
    {
        try {
            $this->setResult($resultDeleteAccount = $this->getSoapClient()->__soapCall('deleteAccount', [
                $paramDeleteAccountRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteAccount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMediatorCondition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteMediatorConditionRequest $paramDeleteMediatorConditionRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteMediatorConditionResponse|bool
     */
    public function deleteMediatorCondition(\Pggns\MidocoApi\OrderSD\StructType\DeleteMediatorConditionRequest $paramDeleteMediatorConditionRequest)
    {
        try {
            $this->setResult($resultDeleteMediatorCondition = $this->getSoapClient()->__soapCall('deleteMediatorCondition', [
                $paramDeleteMediatorConditionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMediatorCondition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMediatorType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteMediatorTypeRequest $paramDeleteMediatorTypeRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteMediatorTypeResponse|bool
     */
    public function deleteMediatorType(\Pggns\MidocoApi\OrderSD\StructType\DeleteMediatorTypeRequest $paramDeleteMediatorTypeRequest)
    {
        try {
            $this->setResult($resultDeleteMediatorType = $this->getSoapClient()->__soapCall('deleteMediatorType', [
                $paramDeleteMediatorTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMediatorType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoTextRemark
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoTextRemarksRequest $paramDeleteMidocoTextRemarksRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoTextRemarksResponse|bool
     */
    public function deleteMidocoTextRemark(\Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoTextRemarksRequest $paramDeleteMidocoTextRemarksRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoTextRemark = $this->getSoapClient()->__soapCall('deleteMidocoTextRemark', [
                $paramDeleteMidocoTextRemarksRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoTextRemark;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoRuleSet
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoRuleSetRequest $paramDeleteMidocoRuleSetRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoRuleSetResponse|bool
     */
    public function deleteMidocoRuleSet(\Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoRuleSetRequest $paramDeleteMidocoRuleSetRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoRuleSet = $this->getSoapClient()->__soapCall('deleteMidocoRuleSet', [
                $paramDeleteMidocoRuleSetRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoRuleSet;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoFeeType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoFeeTypeRequest $paramDeleteMidocoFeeTypeRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoFeeTypeResponse|bool
     */
    public function deleteMidocoFeeType(\Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoFeeTypeRequest $paramDeleteMidocoFeeTypeRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoFeeType = $this->getSoapClient()->__soapCall('deleteMidocoFeeType', [
                $paramDeleteMidocoFeeTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoFeeType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoFeeTypeLocal
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoFeeTypeLocalRequest $paramDeleteMidocoFeeTypeLocalRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoFeeTypeLocalResponse|bool
     */
    public function deleteMidocoFeeTypeLocal(\Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoFeeTypeLocalRequest $paramDeleteMidocoFeeTypeLocalRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoFeeTypeLocal = $this->getSoapClient()->__soapCall('deleteMidocoFeeTypeLocal', [
                $paramDeleteMidocoFeeTypeLocalRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoFeeTypeLocal;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteBankAccount
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteBankAccountRequest $paramDeleteBankAccountRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteBankAccountResponse|bool
     */
    public function deleteBankAccount(\Pggns\MidocoApi\OrderSD\StructType\DeleteBankAccountRequest $paramDeleteBankAccountRequest)
    {
        try {
            $this->setResult($resultDeleteBankAccount = $this->getSoapClient()->__soapCall('deleteBankAccount', [
                $paramDeleteBankAccountRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteBankAccount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoTemplate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoTemplateRequest $paramDeleteMidocoTemplateRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoTemplateResponse|bool
     */
    public function deleteMidocoTemplate(\Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoTemplateRequest $paramDeleteMidocoTemplateRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoTemplate = $this->getSoapClient()->__soapCall('deleteMidocoTemplate', [
                $paramDeleteMidocoTemplateRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoTemplate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoTemplateType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoTemplateTypeRequest $paramDeleteMidocoTemplateTypeRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoTemplateTypeResponse|bool
     */
    public function deleteMidocoTemplateType(\Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoTemplateTypeRequest $paramDeleteMidocoTemplateTypeRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoTemplateType = $this->getSoapClient()->__soapCall('deleteMidocoTemplateType', [
                $paramDeleteMidocoTemplateTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoTemplateType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoSupplierCommisssion
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoSupplierCommissionRequest $paramDeleteMidocoSupplierCommissionRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoSupplierCommissionResponse|bool
     */
    public function deleteMidocoSupplierCommisssion(\Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoSupplierCommissionRequest $paramDeleteMidocoSupplierCommissionRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoSupplierCommisssion = $this->getSoapClient()->__soapCall('deleteMidocoSupplierCommisssion', [
                $paramDeleteMidocoSupplierCommissionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoSupplierCommisssion;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteCashBookItemType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteCashBookItemTypeRequest $paramDeleteCashBookItemTypeRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteCashBookItemTypeResponse|bool
     */
    public function deleteCashBookItemType(\Pggns\MidocoApi\OrderSD\StructType\DeleteCashBookItemTypeRequest $paramDeleteCashBookItemTypeRequest)
    {
        try {
            $this->setResult($resultDeleteCashBookItemType = $this->getSoapClient()->__soapCall('deleteCashBookItemType', [
                $paramDeleteCashBookItemTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteCashBookItemType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteAccomodationCode
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteAccomodationCodeRequest $paramDeleteAccomodationCodeRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteAccomodationCodeResponse|bool
     */
    public function deleteAccomodationCode(\Pggns\MidocoApi\OrderSD\StructType\DeleteAccomodationCodeRequest $paramDeleteAccomodationCodeRequest)
    {
        try {
            $this->setResult($resultDeleteAccomodationCode = $this->getSoapClient()->__soapCall('deleteAccomodationCode', [
                $paramDeleteAccomodationCodeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteAccomodationCode;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteCateringCode
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteCateringCodeRequest $paramDeleteCateringCodeRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteCateringCodeResponse|bool
     */
    public function deleteCateringCode(\Pggns\MidocoApi\OrderSD\StructType\DeleteCateringCodeRequest $paramDeleteCateringCodeRequest)
    {
        try {
            $this->setResult($resultDeleteCateringCode = $this->getSoapClient()->__soapCall('deleteCateringCode', [
                $paramDeleteCateringCodeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteCateringCode;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteAreaCode
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteAreaCodeRequest $paramDeleteAreaCodeRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteAreaCodeResponse|bool
     */
    public function deleteAreaCode(\Pggns\MidocoApi\OrderSD\StructType\DeleteAreaCodeRequest $paramDeleteAreaCodeRequest)
    {
        try {
            $this->setResult($resultDeleteAreaCode = $this->getSoapClient()->__soapCall('deleteAreaCode', [
                $paramDeleteAreaCodeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteAreaCode;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteRemarkOrgunit
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteRemarkOrgunitRequest $paramDeleteRemarkOrgunitRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteRemarkOrgunitResponse|bool
     */
    public function deleteRemarkOrgunit(\Pggns\MidocoApi\OrderSD\StructType\DeleteRemarkOrgunitRequest $paramDeleteRemarkOrgunitRequest)
    {
        try {
            $this->setResult($resultDeleteRemarkOrgunit = $this->getSoapClient()->__soapCall('deleteRemarkOrgunit', [
                $paramDeleteRemarkOrgunitRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteRemarkOrgunit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSupplierSettlementAccount
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierSettlementAccountRequest $paramDeleteSupplierSettlementAccountRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierSettlementAccountResponse|bool
     */
    public function deleteSupplierSettlementAccount(\Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierSettlementAccountRequest $paramDeleteSupplierSettlementAccountRequest)
    {
        try {
            $this->setResult($resultDeleteSupplierSettlementAccount = $this->getSoapClient()->__soapCall('deleteSupplierSettlementAccount', [
                $paramDeleteSupplierSettlementAccountRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSupplierSettlementAccount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteRemarkSupplier
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteRemarkSupplierRequest $paramDeleteRemarkSupplierRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteRemarkSupplierResponse|bool
     */
    public function deleteRemarkSupplier(\Pggns\MidocoApi\OrderSD\StructType\DeleteRemarkSupplierRequest $paramDeleteRemarkSupplierRequest)
    {
        try {
            $this->setResult($resultDeleteRemarkSupplier = $this->getSoapClient()->__soapCall('deleteRemarkSupplier', [
                $paramDeleteRemarkSupplierRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteRemarkSupplier;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSettlementCharge
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteSettlementChargeRequest $paramDeleteSettlementChargeRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteSettlementChargeResponse|bool
     */
    public function deleteSettlementCharge(\Pggns\MidocoApi\OrderSD\StructType\DeleteSettlementChargeRequest $paramDeleteSettlementChargeRequest)
    {
        try {
            $this->setResult($resultDeleteSettlementCharge = $this->getSoapClient()->__soapCall('deleteSettlementCharge', [
                $paramDeleteSettlementChargeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSettlementCharge;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSupplierAgency
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierAgencyRequest $paramDeleteSupplierAgencyRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierAgencyResponse|bool
     */
    public function deleteSupplierAgency(\Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierAgencyRequest $paramDeleteSupplierAgencyRequest)
    {
        try {
            $this->setResult($resultDeleteSupplierAgency = $this->getSoapClient()->__soapCall('deleteSupplierAgency', [
                $paramDeleteSupplierAgencyRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSupplierAgency;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteUserQuery
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteUserQueryRequest $paramDeleteUserQueryRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteUserQueryResponse|bool
     */
    public function deleteUserQuery(\Pggns\MidocoApi\OrderSD\StructType\DeleteUserQueryRequest $paramDeleteUserQueryRequest)
    {
        try {
            $this->setResult($resultDeleteUserQuery = $this->getSoapClient()->__soapCall('deleteUserQuery', [
                $paramDeleteUserQueryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteUserQuery;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteDunningLetter
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteDunningLetterRequest $paramDeleteDunningLetterRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteDunningLetterResponse|bool
     */
    public function deleteDunningLetter(\Pggns\MidocoApi\OrderSD\StructType\DeleteDunningLetterRequest $paramDeleteDunningLetterRequest)
    {
        try {
            $this->setResult($resultDeleteDunningLetter = $this->getSoapClient()->__soapCall('deleteDunningLetter', [
                $paramDeleteDunningLetterRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteDunningLetter;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteProductTypeMediatorCondition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteProductTypeMediatorConditionRequest $paramDeleteProductTypeMediatorConditionRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteProductTypeMediatorConditionResponse|bool
     */
    public function deleteProductTypeMediatorCondition(\Pggns\MidocoApi\OrderSD\StructType\DeleteProductTypeMediatorConditionRequest $paramDeleteProductTypeMediatorConditionRequest)
    {
        try {
            $this->setResult($resultDeleteProductTypeMediatorCondition = $this->getSoapClient()->__soapCall('deleteProductTypeMediatorCondition', [
                $paramDeleteProductTypeMediatorConditionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteProductTypeMediatorCondition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteFeeTypeForOrgunit
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteFeeTypeForOrgunitRequest $paramDeleteFeeTypeForOrgunitRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteFeeTypeForOrgunitResponse|bool
     */
    public function deleteFeeTypeForOrgunit(\Pggns\MidocoApi\OrderSD\StructType\DeleteFeeTypeForOrgunitRequest $paramDeleteFeeTypeForOrgunitRequest)
    {
        try {
            $this->setResult($resultDeleteFeeTypeForOrgunit = $this->getSoapClient()->__soapCall('deleteFeeTypeForOrgunit', [
                $paramDeleteFeeTypeForOrgunitRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteFeeTypeForOrgunit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteFeeGroupAssign
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteFeeGroupAssignRequest $paramDeleteFeeGroupAssignRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteFeeGroupAssignResponse|bool
     */
    public function deleteFeeGroupAssign(\Pggns\MidocoApi\OrderSD\StructType\DeleteFeeGroupAssignRequest $paramDeleteFeeGroupAssignRequest)
    {
        try {
            $this->setResult($resultDeleteFeeGroupAssign = $this->getSoapClient()->__soapCall('deleteFeeGroupAssign', [
                $paramDeleteFeeGroupAssignRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteFeeGroupAssign;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteFeeGroup
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteFeeGroupRequest $paramDeleteFeeGroupRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteFeeGroupResponse|bool
     */
    public function deleteFeeGroup(\Pggns\MidocoApi\OrderSD\StructType\DeleteFeeGroupRequest $paramDeleteFeeGroupRequest)
    {
        try {
            $this->setResult($resultDeleteFeeGroup = $this->getSoapClient()->__soapCall('deleteFeeGroup', [
                $paramDeleteFeeGroupRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteFeeGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteAutoRemark
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteAutoRemarkRequest $paramDeleteAutoRemarkRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteAutoRemarkResponse|bool
     */
    public function deleteAutoRemark(\Pggns\MidocoApi\OrderSD\StructType\DeleteAutoRemarkRequest $paramDeleteAutoRemarkRequest)
    {
        try {
            $this->setResult($resultDeleteAutoRemark = $this->getSoapClient()->__soapCall('deleteAutoRemark', [
                $paramDeleteAutoRemarkRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteAutoRemark;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSupplierTraveltype
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierTraveltypeRequest $paramDeleteSupplierTraveltypeRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierTraveltypeResponse|bool
     */
    public function deleteSupplierTraveltype(\Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierTraveltypeRequest $paramDeleteSupplierTraveltypeRequest)
    {
        try {
            $this->setResult($resultDeleteSupplierTraveltype = $this->getSoapClient()->__soapCall('deleteSupplierTraveltype', [
                $paramDeleteSupplierTraveltypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSupplierTraveltype;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMarketingKeyDescription
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteMarketingKeyDescriptionRequest $paramDeleteMarketingKeyDescriptionRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteMarketingKeyDescriptionResponse|bool
     */
    public function deleteMarketingKeyDescription(\Pggns\MidocoApi\OrderSD\StructType\DeleteMarketingKeyDescriptionRequest $paramDeleteMarketingKeyDescriptionRequest)
    {
        try {
            $this->setResult($resultDeleteMarketingKeyDescription = $this->getSoapClient()->__soapCall('deleteMarketingKeyDescription', [
                $paramDeleteMarketingKeyDescriptionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMarketingKeyDescription;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMarketingKey
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteMarketingKeyRequest $paramDeleteMarketingKeyRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteMarketingKeyResponse|bool
     */
    public function deleteMarketingKey(\Pggns\MidocoApi\OrderSD\StructType\DeleteMarketingKeyRequest $paramDeleteMarketingKeyRequest)
    {
        try {
            $this->setResult($resultDeleteMarketingKey = $this->getSoapClient()->__soapCall('deleteMarketingKey', [
                $paramDeleteMarketingKeyRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMarketingKey;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteBookingText
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteBookingTextRequest $paramDeleteBookingTextRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteBookingTextResponse|bool
     */
    public function deleteBookingText(\Pggns\MidocoApi\OrderSD\StructType\DeleteBookingTextRequest $paramDeleteBookingTextRequest)
    {
        try {
            $this->setResult($resultDeleteBookingText = $this->getSoapClient()->__soapCall('deleteBookingText', [
                $paramDeleteBookingTextRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteBookingText;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoSupplierImportFormat
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoSupplierImportFormatRequest $paramDeleteMidocoSupplierImportFormatRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoSupplierImportFormatResponse|bool
     */
    public function deleteMidocoSupplierImportFormat(\Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoSupplierImportFormatRequest $paramDeleteMidocoSupplierImportFormatRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoSupplierImportFormat = $this->getSoapClient()->__soapCall('deleteMidocoSupplierImportFormat', [
                $paramDeleteMidocoSupplierImportFormatRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoSupplierImportFormat;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoSettlementType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoSettlementTypeRequest $paramDeleteMidocoSettlementTypeRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoSettlementTypeResponse|bool
     */
    public function deleteMidocoSettlementType(\Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoSettlementTypeRequest $paramDeleteMidocoSettlementTypeRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoSettlementType = $this->getSoapClient()->__soapCall('deleteMidocoSettlementType', [
                $paramDeleteMidocoSettlementTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoSettlementType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteCurrencyRate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteCurrencyRateRequest $paramDeleteCurrencyRateRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteCurrencyRateResponse|bool
     */
    public function deleteCurrencyRate(\Pggns\MidocoApi\OrderSD\StructType\DeleteCurrencyRateRequest $paramDeleteCurrencyRateRequest)
    {
        try {
            $this->setResult($resultDeleteCurrencyRate = $this->getSoapClient()->__soapCall('deleteCurrencyRate', [
                $paramDeleteCurrencyRateRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteCurrencyRate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteHedgeCurrencyRate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteHedgeCurrencyRateRequest $paramDeleteHedgeCurrencyRateRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteHedgeCurrencyRateResponse|bool
     */
    public function deleteHedgeCurrencyRate(\Pggns\MidocoApi\OrderSD\StructType\DeleteHedgeCurrencyRateRequest $paramDeleteHedgeCurrencyRateRequest)
    {
        try {
            $this->setResult($resultDeleteHedgeCurrencyRate = $this->getSoapClient()->__soapCall('deleteHedgeCurrencyRate', [
                $paramDeleteHedgeCurrencyRateRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteHedgeCurrencyRate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteTravelNumber
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteTravelNumberRequest $paramDeleteTravelNumberRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteTravelNumberResponse|bool
     */
    public function deleteTravelNumber(\Pggns\MidocoApi\OrderSD\StructType\DeleteTravelNumberRequest $paramDeleteTravelNumberRequest)
    {
        try {
            $this->setResult($resultDeleteTravelNumber = $this->getSoapClient()->__soapCall('deleteTravelNumber', [
                $paramDeleteTravelNumberRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteTravelNumber;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteCostCentre
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteCostCentreRequest $paramDeleteCostCentreRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteCostCentreResponse|bool
     */
    public function deleteCostCentre(\Pggns\MidocoApi\OrderSD\StructType\DeleteCostCentreRequest $paramDeleteCostCentreRequest)
    {
        try {
            $this->setResult($resultDeleteCostCentre = $this->getSoapClient()->__soapCall('deleteCostCentre', [
                $paramDeleteCostCentreRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteCostCentre;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSupplierAddress
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierAddressRequest $paramDeleteSupplierAddressRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierAddressResponse|bool
     */
    public function deleteSupplierAddress(\Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierAddressRequest $paramDeleteSupplierAddressRequest)
    {
        try {
            $this->setResult($resultDeleteSupplierAddress = $this->getSoapClient()->__soapCall('deleteSupplierAddress', [
                $paramDeleteSupplierAddressRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSupplierAddress;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSupplierNotice
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierNoticeRequest $paramDeleteSupplierNoticeRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierNoticeResponse|bool
     */
    public function deleteSupplierNotice(\Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierNoticeRequest $paramDeleteSupplierNoticeRequest)
    {
        try {
            $this->setResult($resultDeleteSupplierNotice = $this->getSoapClient()->__soapCall('deleteSupplierNotice', [
                $paramDeleteSupplierNoticeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSupplierNotice;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMiscPaymentSetting
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteMiscPaymentSettingRequest $paramDeleteMiscPaymentSettingRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteMiscPaymentSettingResponse|bool
     */
    public function deleteMiscPaymentSetting(\Pggns\MidocoApi\OrderSD\StructType\DeleteMiscPaymentSettingRequest $paramDeleteMiscPaymentSettingRequest)
    {
        try {
            $this->setResult($resultDeleteMiscPaymentSetting = $this->getSoapClient()->__soapCall('deleteMiscPaymentSetting', [
                $paramDeleteMiscPaymentSettingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMiscPaymentSetting;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoSupplierTemplate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoSupplierTemplateRequest $paramDeleteMidocoSupplierTemplateRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoSupplierTemplateResponse|bool
     */
    public function deleteMidocoSupplierTemplate(\Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoSupplierTemplateRequest $paramDeleteMidocoSupplierTemplateRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoSupplierTemplate = $this->getSoapClient()->__soapCall('deleteMidocoSupplierTemplate', [
                $paramDeleteMidocoSupplierTemplateRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoSupplierTemplate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoCrsSystem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoCrsSystemRequest $paramDeleteMidocoCrsSystemRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoCrsSystemResponse|bool
     */
    public function deleteMidocoCrsSystem(\Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoCrsSystemRequest $paramDeleteMidocoCrsSystemRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoCrsSystem = $this->getSoapClient()->__soapCall('deleteMidocoCrsSystem', [
                $paramDeleteMidocoCrsSystemRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoCrsSystem;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoQuestion
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoQuestionRequest $paramDeleteMidocoQuestionRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoQuestionResponse|bool
     */
    public function deleteMidocoQuestion(\Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoQuestionRequest $paramDeleteMidocoQuestionRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoQuestion = $this->getSoapClient()->__soapCall('deleteMidocoQuestion', [
                $paramDeleteMidocoQuestionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoQuestion;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoQuestionValue
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoQuestionValueRequest $paramDeleteMidocoQuestionValueRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoQuestionValueResponse|bool
     */
    public function deleteMidocoQuestionValue(\Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoQuestionValueRequest $paramDeleteMidocoQuestionValueRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoQuestionValue = $this->getSoapClient()->__soapCall('deleteMidocoQuestionValue', [
                $paramDeleteMidocoQuestionValueRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoQuestionValue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteTravelNumberAutoRemark
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteTravelNumberAutoRemarkRequest $paramDeleteTravelNumberAutoRemarkRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteTravelNumberAutoRemarkResponse|bool
     */
    public function deleteTravelNumberAutoRemark(\Pggns\MidocoApi\OrderSD\StructType\DeleteTravelNumberAutoRemarkRequest $paramDeleteTravelNumberAutoRemarkRequest)
    {
        try {
            $this->setResult($resultDeleteTravelNumberAutoRemark = $this->getSoapClient()->__soapCall('deleteTravelNumberAutoRemark', [
                $paramDeleteTravelNumberAutoRemarkRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteTravelNumberAutoRemark;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteTravelNumberDocument
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteTravelNumberDocumentRequest $paramDeleteTravelNumberDocumentRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteTravelNumberDocumentResponse|bool
     */
    public function deleteTravelNumberDocument(\Pggns\MidocoApi\OrderSD\StructType\DeleteTravelNumberDocumentRequest $paramDeleteTravelNumberDocumentRequest)
    {
        try {
            $this->setResult($resultDeleteTravelNumberDocument = $this->getSoapClient()->__soapCall('deleteTravelNumberDocument', [
                $paramDeleteTravelNumberDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteTravelNumberDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteDestinationAutoRemark
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteDestinationAutoRemarkRequest $paramDeleteDestinationAutoRemarkRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteDestinationAutoRemarkResponse|bool
     */
    public function deleteDestinationAutoRemark(\Pggns\MidocoApi\OrderSD\StructType\DeleteDestinationAutoRemarkRequest $paramDeleteDestinationAutoRemarkRequest)
    {
        try {
            $this->setResult($resultDeleteDestinationAutoRemark = $this->getSoapClient()->__soapCall('deleteDestinationAutoRemark', [
                $paramDeleteDestinationAutoRemarkRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteDestinationAutoRemark;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteDestinationDocument
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteDestinationDocumentRequest $paramDeleteDestinationDocumentRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteDestinationDocumentResponse|bool
     */
    public function deleteDestinationDocument(\Pggns\MidocoApi\OrderSD\StructType\DeleteDestinationDocumentRequest $paramDeleteDestinationDocumentRequest)
    {
        try {
            $this->setResult($resultDeleteDestinationDocument = $this->getSoapClient()->__soapCall('deleteDestinationDocument', [
                $paramDeleteDestinationDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteDestinationDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSupplierDocument
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierDocumentRequest $paramDeleteSupplierDocumentRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierDocumentResponse|bool
     */
    public function deleteSupplierDocument(\Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierDocumentRequest $paramDeleteSupplierDocumentRequest)
    {
        try {
            $this->setResult($resultDeleteSupplierDocument = $this->getSoapClient()->__soapCall('deleteSupplierDocument', [
                $paramDeleteSupplierDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSupplierDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSupplierDisabledUnits
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierDisabledUnitsRequest $paramDeleteSupplierDisabledUnitsRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierDisabledUnitsResponse|bool
     */
    public function deleteSupplierDisabledUnits(\Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierDisabledUnitsRequest $paramDeleteSupplierDisabledUnitsRequest)
    {
        try {
            $this->setResult($resultDeleteSupplierDisabledUnits = $this->getSoapClient()->__soapCall('deleteSupplierDisabledUnits', [
                $paramDeleteSupplierDisabledUnitsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSupplierDisabledUnits;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteProductTypeSupplier
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteProductTypeSupplierRequest $paramDeleteProductTypeSupplierRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteProductTypeSupplierResponse|bool
     */
    public function deleteProductTypeSupplier(\Pggns\MidocoApi\OrderSD\StructType\DeleteProductTypeSupplierRequest $paramDeleteProductTypeSupplierRequest)
    {
        try {
            $this->setResult($resultDeleteProductTypeSupplier = $this->getSoapClient()->__soapCall('deleteProductTypeSupplier', [
                $paramDeleteProductTypeSupplierRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteProductTypeSupplier;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteVoucherType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteVoucherTypeRequest $paramDeleteVoucherTypeRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteVoucherTypeResponse|bool
     */
    public function deleteVoucherType(\Pggns\MidocoApi\OrderSD\StructType\DeleteVoucherTypeRequest $paramDeleteVoucherTypeRequest)
    {
        try {
            $this->setResult($resultDeleteVoucherType = $this->getSoapClient()->__soapCall('deleteVoucherType', [
                $paramDeleteVoucherTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteVoucherType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteExternVoucherType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteExternVoucherTypeRequest $paramDeleteExternVoucherTypeRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteExternVoucherTypeResponse|bool
     */
    public function deleteExternVoucherType(\Pggns\MidocoApi\OrderSD\StructType\DeleteExternVoucherTypeRequest $paramDeleteExternVoucherTypeRequest)
    {
        try {
            $this->setResult($resultDeleteExternVoucherType = $this->getSoapClient()->__soapCall('deleteExternVoucherType', [
                $paramDeleteExternVoucherTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteExternVoucherType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSupplierShipName
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierShipNameRequest $paramDeleteSupplierShipNameRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierShipNameResponse|bool
     */
    public function deleteSupplierShipName(\Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierShipNameRequest $paramDeleteSupplierShipNameRequest)
    {
        try {
            $this->setResult($resultDeleteSupplierShipName = $this->getSoapClient()->__soapCall('deleteSupplierShipName', [
                $paramDeleteSupplierShipNameRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSupplierShipName;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSupplierSettlementDiff
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierSettlementDiffRequest $paramDeleteSupplierSettlementDiffRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierSettlementDiffResponse|bool
     */
    public function deleteSupplierSettlementDiff(\Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierSettlementDiffRequest $paramDeleteSupplierSettlementDiffRequest)
    {
        try {
            $this->setResult($resultDeleteSupplierSettlementDiff = $this->getSoapClient()->__soapCall('deleteSupplierSettlementDiff', [
                $paramDeleteSupplierSettlementDiffRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSupplierSettlementDiff;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSupplierCommissionCondition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierCommissionConditionRequest $paramDeleteSupplierCommissionConditionRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierCommissionConditionResponse|bool
     */
    public function deleteSupplierCommissionCondition(\Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierCommissionConditionRequest $paramDeleteSupplierCommissionConditionRequest)
    {
        try {
            $this->setResult($resultDeleteSupplierCommissionCondition = $this->getSoapClient()->__soapCall('deleteSupplierCommissionCondition', [
                $paramDeleteSupplierCommissionConditionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSupplierCommissionCondition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * deleteSupplierSettlPaymentCondition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierSettlPaymentConditionRequest $paramDeleteSupplierSettlPaymentConditionRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierSettlPaymentConditionResponse|bool
     */
    public function deleteSupplierSettlPaymentCondition(\Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierSettlPaymentConditionRequest $paramDeleteSupplierSettlPaymentConditionRequest)
    {
        try {
            $this->setResult($resultDeleteSupplierSettlPaymentCondition = $this->getSoapClient()->__soapCall('deleteSupplierSettlPaymentCondition', [
                $paramDeleteSupplierSettlPaymentConditionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSupplierSettlPaymentCondition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deletePaymentProvider
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeletePaymentProviderRequest $paramDeletePaymentProviderRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeletePaymentProviderResponse|bool
     */
    public function deletePaymentProvider(\Pggns\MidocoApi\OrderSD\StructType\DeletePaymentProviderRequest $paramDeletePaymentProviderRequest)
    {
        try {
            $this->setResult($resultDeletePaymentProvider = $this->getSoapClient()->__soapCall('deletePaymentProvider', [
                $paramDeletePaymentProviderRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeletePaymentProvider;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteCabinClass
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeleteCabinClassRequest $paramDeleteCabinClassRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteCabinClassResponse|bool
     */
    public function deleteCabinClass(\Pggns\MidocoApi\OrderSD\StructType\DeleteCabinClassRequest $paramDeleteCabinClassRequest)
    {
        try {
            $this->setResult($resultDeleteCabinClass = $this->getSoapClient()->__soapCall('deleteCabinClass', [
                $paramDeleteCabinClassRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteCabinClass;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteAccomodationCodeResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteAccountResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteAreaCodeResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteAutoRemarkResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteBankAccountResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteBookingTextResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteCabinClassResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteCashBookItemTypeResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteCateringCodeResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteCostCentreResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteCurrencyRateResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteDestinationAutoRemarkResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteDestinationDocumentResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteDunningLetterResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteExternVoucherTypeResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteFeeGroupAssignResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteFeeGroupResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteFeeTypeForOrgunitResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteHedgeCurrencyRateResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteMarketingKeyDescriptionResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteMarketingKeyResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteMediatorConditionResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteMediatorTypeResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoCrsSystemResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoFeeTypeLocalResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoFeeTypeResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoQuestionResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoQuestionValueResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoRuleSetResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoSettlementTypeResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoSupplierCommissionResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoSupplierImportFormatResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoSupplierTemplateResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoTemplateResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoTemplateTypeResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoTextRemarksResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteMiscPaymentSettingResponse|\Pggns\MidocoApi\OrderSD\StructType\DeletePaymentProviderResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteProductTypeMediatorConditionResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteProductTypeSupplierResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteRemarkOrgunitResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteRemarkSupplierResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteSettlementChargeResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteSuppCancelCEmailResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteSuppCancelCMappingResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierAccountAssignResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierAddressResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierAgencyResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierCancelConditionResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierCcCardResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierCommissionConditionResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierDisabledUnitsResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierDocumentResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierDocumentShippingResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierNoticeResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierPaymentConditionResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierSettlementAccountResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierSettlementDiffResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierSettlPaymentConditionResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierShipNameResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierTraveltypeResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteTravelNumberAutoRemarkResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteTravelNumberDocumentResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteTravelNumberResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteUserQueryResponse|\Pggns\MidocoApi\OrderSD\StructType\DeleteVoucherTypeResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
