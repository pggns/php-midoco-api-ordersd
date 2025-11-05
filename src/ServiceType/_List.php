<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for List ServiceType
 * @subpackage Services
 */
class _List extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\OrderSD\ServiceType\_List
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named listAvailableSuppCancelCMapping
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\ListSuppCancelCMappingRequest $paramListSuppCancelCMappingRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\ListSuppCancelCMappingResponse|bool
     */
    public function listAvailableSuppCancelCMapping(\Pggns\MidocoApi\OrderSD\StructType\ListSuppCancelCMappingRequest $paramListSuppCancelCMappingRequest)
    {
        try {
            $this->setResult($resultListAvailableSuppCancelCMapping = $this->getSoapClient()->__soapCall('listAvailableSuppCancelCMapping', [
                $paramListSuppCancelCMappingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultListAvailableSuppCancelCMapping;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named listAvailableSuppCancelCEmail
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\ListSuppCancelCEmailRequest $paramListSuppCancelCEmailRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\ListSuppCancelCEmailResponse|bool
     */
    public function listAvailableSuppCancelCEmail(\Pggns\MidocoApi\OrderSD\StructType\ListSuppCancelCEmailRequest $paramListSuppCancelCEmailRequest)
    {
        try {
            $this->setResult($resultListAvailableSuppCancelCEmail = $this->getSoapClient()->__soapCall('listAvailableSuppCancelCEmail', [
                $paramListSuppCancelCEmailRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultListAvailableSuppCancelCEmail;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named listMidocoFeeTypes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\ListMidocoFeeTypesRequest $paramListMidocoFeeTypesRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\ListMidocoFeeTypesResponse|bool
     */
    public function listMidocoFeeTypes(\Pggns\MidocoApi\OrderSD\StructType\ListMidocoFeeTypesRequest $paramListMidocoFeeTypesRequest)
    {
        try {
            $this->setResult($resultListMidocoFeeTypes = $this->getSoapClient()->__soapCall('listMidocoFeeTypes', [
                $paramListMidocoFeeTypesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultListMidocoFeeTypes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named listMidocoFeeTypesLocal
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\ListMidocoFeeTypesLocalRequest $paramListMidocoFeeTypesLocalRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\ListMidocoFeeTypesLocalResponse|bool
     */
    public function listMidocoFeeTypesLocal(\Pggns\MidocoApi\OrderSD\StructType\ListMidocoFeeTypesLocalRequest $paramListMidocoFeeTypesLocalRequest)
    {
        try {
            $this->setResult($resultListMidocoFeeTypesLocal = $this->getSoapClient()->__soapCall('listMidocoFeeTypesLocal', [
                $paramListMidocoFeeTypesLocalRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultListMidocoFeeTypesLocal;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named listAssignedMidocoFeeTypes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\ListAssignedMidocoFeeTypesRequest $paramListAssignedMidocoFeeTypesRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\ListAssignedMidocoFeeTypesResponse|bool
     */
    public function listAssignedMidocoFeeTypes(\Pggns\MidocoApi\OrderSD\StructType\ListAssignedMidocoFeeTypesRequest $paramListAssignedMidocoFeeTypesRequest)
    {
        try {
            $this->setResult($resultListAssignedMidocoFeeTypes = $this->getSoapClient()->__soapCall('listAssignedMidocoFeeTypes', [
                $paramListAssignedMidocoFeeTypesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultListAssignedMidocoFeeTypes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named listCashBookItemTypes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\ListCashBookItemTypesRequest $paramListCashBookItemTypesRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\ListCashBookItemTypesResponse|bool
     */
    public function listCashBookItemTypes(\Pggns\MidocoApi\OrderSD\StructType\ListCashBookItemTypesRequest $paramListCashBookItemTypesRequest)
    {
        try {
            $this->setResult($resultListCashBookItemTypes = $this->getSoapClient()->__soapCall('listCashBookItemTypes', [
                $paramListCashBookItemTypesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultListCashBookItemTypes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named listSettlementCharges
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\ListSettlementChargesRequest $paramListSettlementChargesRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\ListSettlementChargesResponse|bool
     */
    public function listSettlementCharges(\Pggns\MidocoApi\OrderSD\StructType\ListSettlementChargesRequest $paramListSettlementChargesRequest)
    {
        try {
            $this->setResult($resultListSettlementCharges = $this->getSoapClient()->__soapCall('listSettlementCharges', [
                $paramListSettlementChargesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultListSettlementCharges;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named listSettlementChargesForOrgUnit
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\ListSettlementChargesForOrgUnitRequest $paramListSettlementChargesForOrgUnitRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\ListSettlementChargesForOrgUnitResponse|bool
     */
    public function listSettlementChargesForOrgUnit(\Pggns\MidocoApi\OrderSD\StructType\ListSettlementChargesForOrgUnitRequest $paramListSettlementChargesForOrgUnitRequest)
    {
        try {
            $this->setResult($resultListSettlementChargesForOrgUnit = $this->getSoapClient()->__soapCall('listSettlementChargesForOrgUnit', [
                $paramListSettlementChargesForOrgUnitRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultListSettlementChargesForOrgUnit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named listUserQueries
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\ListUserQueriesRequest $paramListUserQueriesRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\ListUserQueriesResponse|bool
     */
    public function listUserQueries(\Pggns\MidocoApi\OrderSD\StructType\ListUserQueriesRequest $paramListUserQueriesRequest)
    {
        try {
            $this->setResult($resultListUserQueries = $this->getSoapClient()->__soapCall('listUserQueries', [
                $paramListUserQueriesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultListUserQueries;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named listMidocoQuestion
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\ListMidocoQuestionRequest $paramListMidocoQuestionRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\ListMidocoQuestionResponse|bool
     */
    public function listMidocoQuestion(\Pggns\MidocoApi\OrderSD\StructType\ListMidocoQuestionRequest $paramListMidocoQuestionRequest)
    {
        try {
            $this->setResult($resultListMidocoQuestion = $this->getSoapClient()->__soapCall('listMidocoQuestion', [
                $paramListMidocoQuestionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultListMidocoQuestion;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named listMidocoQuestionValue
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\ListMidocoQuestionValueRequest $paramListMidocoQuestionValueRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\ListMidocoQuestionValueResponse|bool
     */
    public function listMidocoQuestionValue(\Pggns\MidocoApi\OrderSD\StructType\ListMidocoQuestionValueRequest $paramListMidocoQuestionValueRequest)
    {
        try {
            $this->setResult($resultListMidocoQuestionValue = $this->getSoapClient()->__soapCall('listMidocoQuestionValue', [
                $paramListMidocoQuestionValueRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultListMidocoQuestionValue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named listSupplierCommissionConditions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\ListSupplierCommissionConditionsRequest $paramListSupplierCommissionConditionsRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\ListSupplierCommissionConditionsResponse|bool
     */
    public function listSupplierCommissionConditions(\Pggns\MidocoApi\OrderSD\StructType\ListSupplierCommissionConditionsRequest $paramListSupplierCommissionConditionsRequest)
    {
        try {
            $this->setResult($resultListSupplierCommissionConditions = $this->getSoapClient()->__soapCall('listSupplierCommissionConditions', [
                $paramListSupplierCommissionConditionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultListSupplierCommissionConditions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named listCabinClass
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\ListCabinClassRequest $paramListCabinClassRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\ListCabinClassResponse|bool
     */
    public function listCabinClass(\Pggns\MidocoApi\OrderSD\StructType\ListCabinClassRequest $paramListCabinClassRequest)
    {
        try {
            $this->setResult($resultListCabinClass = $this->getSoapClient()->__soapCall('listCabinClass', [
                $paramListCabinClassRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultListCabinClass;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\OrderSD\StructType\ListAssignedMidocoFeeTypesResponse|\Pggns\MidocoApi\OrderSD\StructType\ListCabinClassResponse|\Pggns\MidocoApi\OrderSD\StructType\ListCashBookItemTypesResponse|\Pggns\MidocoApi\OrderSD\StructType\ListMidocoFeeTypesLocalResponse|\Pggns\MidocoApi\OrderSD\StructType\ListMidocoFeeTypesResponse|\Pggns\MidocoApi\OrderSD\StructType\ListMidocoQuestionResponse|\Pggns\MidocoApi\OrderSD\StructType\ListMidocoQuestionValueResponse|\Pggns\MidocoApi\OrderSD\StructType\ListSettlementChargesForOrgUnitResponse|\Pggns\MidocoApi\OrderSD\StructType\ListSettlementChargesResponse|\Pggns\MidocoApi\OrderSD\StructType\ListSuppCancelCEmailResponse|\Pggns\MidocoApi\OrderSD\StructType\ListSuppCancelCMappingResponse|\Pggns\MidocoApi\OrderSD\StructType\ListSupplierCommissionConditionsResponse|\Pggns\MidocoApi\OrderSD\StructType\ListUserQueriesResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
