<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://midoffice.midoco.net/ws/wsdl/OrderSDService.wsdl',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://midoffice.midoco.net/ws/wsdl/OrderSDService.wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Pggns\MidocoApi\OrderSD\ClassMap::get(),
];
/**
 * Samples for Save ServiceType
 */
$save = new \Pggns\MidocoApi\OrderSD\ServiceType\Save($options);
$save->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for saveSupplier operation/method
 */
if ($save->saveSupplier(new \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveSupplierAddress operation/method
 */
if ($save->saveSupplierAddress(new \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierAddressRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveSupplierCcCard operation/method
 */
if ($save->saveSupplierCcCard(new \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierCcCardRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveSupplierAccountAssign operation/method
 */
if ($save->saveSupplierAccountAssign(new \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierAccountAssignRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveSupplierDocumentShipping operation/method
 */
if ($save->saveSupplierDocumentShipping(new \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierDocumentShippingRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveSupplierPaymentCondition operation/method
 */
if ($save->saveSupplierPaymentCondition(new \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierPaymentConditionRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveSupplierCancelCondition operation/method
 */
if ($save->saveSupplierCancelCondition(new \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierCancelConditionRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveSuppCancelCMapping operation/method
 */
if ($save->saveSuppCancelCMapping(new \Pggns\MidocoApi\OrderSD\StructType\SaveSuppCancelCMappingRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveSuppCancelCEmail operation/method
 */
if ($save->saveSuppCancelCEmail(new \Pggns\MidocoApi\OrderSD\StructType\SaveSuppCancelCEmailRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveAccount operation/method
 */
if ($save->saveAccount(new \Pggns\MidocoApi\OrderSD\StructType\SaveAccountRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMediatorCondition operation/method
 */
if ($save->saveMediatorCondition(new \Pggns\MidocoApi\OrderSD\StructType\SaveMediatorConditionRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMediatorType operation/method
 */
if ($save->saveMediatorType(new \Pggns\MidocoApi\OrderSD\StructType\SaveMediatorTypeRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMidocoTextRemark operation/method
 */
if ($save->saveMidocoTextRemark(new \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoTextRemarksRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMidocoRuleSet operation/method
 */
if ($save->saveMidocoRuleSet(new \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoRuleSetRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMidocoFeeType operation/method
 */
if ($save->saveMidocoFeeType(new \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoFeeTypeRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMidocoFeeTypeLocal operation/method
 */
if ($save->saveMidocoFeeTypeLocal(new \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoFeeTypeLocalRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveBankAccount operation/method
 */
if ($save->saveBankAccount(new \Pggns\MidocoApi\OrderSD\StructType\SaveBankAccountRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMidocoTemplate operation/method
 */
if ($save->saveMidocoTemplate(new \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoTemplateRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMidocoTemplateType operation/method
 */
if ($save->saveMidocoTemplateType(new \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoTemplateTypeRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMidocoSupplierCommisssion operation/method
 */
if ($save->saveMidocoSupplierCommisssion(new \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoSupplierCommissionRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveCashBookItemType operation/method
 */
if ($save->saveCashBookItemType(new \Pggns\MidocoApi\OrderSD\StructType\SaveCashBookItemTypeRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveAccomodationCode operation/method
 */
if ($save->saveAccomodationCode(new \Pggns\MidocoApi\OrderSD\StructType\SaveAccomodationCodeRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveCateringCode operation/method
 */
if ($save->saveCateringCode(new \Pggns\MidocoApi\OrderSD\StructType\SaveCateringCodeRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveAreaCode operation/method
 */
if ($save->saveAreaCode(new \Pggns\MidocoApi\OrderSD\StructType\SaveAreaCodeRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveRemarkOrgunit operation/method
 */
if ($save->saveRemarkOrgunit(new \Pggns\MidocoApi\OrderSD\StructType\SaveRemarkOrgunitRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveSupplierSettlementAccount operation/method
 */
if ($save->saveSupplierSettlementAccount(new \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierSettlementAccountRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveRemarkSupplier operation/method
 */
if ($save->saveRemarkSupplier(new \Pggns\MidocoApi\OrderSD\StructType\SaveRemarkSupplierRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveSettlementCharge operation/method
 */
if ($save->saveSettlementCharge(new \Pggns\MidocoApi\OrderSD\StructType\SaveSettlementChargeRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveSupplierAgency operation/method
 */
if ($save->saveSupplierAgency(new \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierAgencyRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveUserQuery operation/method
 */
if ($save->saveUserQuery(new \Pggns\MidocoApi\OrderSD\StructType\SaveUserQueryRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveDunningLetter operation/method
 */
if ($save->saveDunningLetter(new \Pggns\MidocoApi\OrderSD\StructType\SaveDunningLetterRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveProductTypeMediatorCondition operation/method
 */
if ($save->saveProductTypeMediatorCondition(new \Pggns\MidocoApi\OrderSD\StructType\SaveProductTypeMediatorConditionRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveFeeTypeForOrgunit operation/method
 */
if ($save->saveFeeTypeForOrgunit(new \Pggns\MidocoApi\OrderSD\StructType\SaveFeeTypeForOrgunitRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveFeeGroupAssign operation/method
 */
if ($save->saveFeeGroupAssign(new \Pggns\MidocoApi\OrderSD\StructType\SaveFeeGroupAssignRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveFeeGroup operation/method
 */
if ($save->saveFeeGroup(new \Pggns\MidocoApi\OrderSD\StructType\SaveFeeGroupRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveAutoRemark operation/method
 */
if ($save->saveAutoRemark(new \Pggns\MidocoApi\OrderSD\StructType\SaveAutoRemarkRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveSupplierTraveltype operation/method
 */
if ($save->saveSupplierTraveltype(new \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierTraveltypeRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMarketingKey operation/method
 */
if ($save->saveMarketingKey(new \Pggns\MidocoApi\OrderSD\StructType\SaveMarketingKeyRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMarketingKeyDescription operation/method
 */
if ($save->saveMarketingKeyDescription(new \Pggns\MidocoApi\OrderSD\StructType\SaveMarketingKeyDescriptionRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveBookingText operation/method
 */
if ($save->saveBookingText(new \Pggns\MidocoApi\OrderSD\StructType\SaveBookingTextRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMidocoSupplierImportFormat operation/method
 */
if ($save->saveMidocoSupplierImportFormat(new \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoSupplierImportFormatRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMidocoSettlementType operation/method
 */
if ($save->saveMidocoSettlementType(new \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoSettlementTypeRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveCurrencyRates operation/method
 */
if ($save->saveCurrencyRates(new \Pggns\MidocoApi\OrderSD\StructType\SaveCurrencyRatesRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveHedgeCurrencyRates operation/method
 */
if ($save->saveHedgeCurrencyRates(new \Pggns\MidocoApi\OrderSD\StructType\SaveHedgeCurrencyRatesRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveTravelNumber operation/method
 */
if ($save->saveTravelNumber(new \Pggns\MidocoApi\OrderSD\StructType\SaveTravelNumberRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveCostCentre operation/method
 */
if ($save->saveCostCentre(new \Pggns\MidocoApi\OrderSD\StructType\SaveCostCentreRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveSupplierNotice operation/method
 */
if ($save->saveSupplierNotice(new \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierNoticeRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMiscPaymentSettings operation/method
 */
if ($save->saveMiscPaymentSettings(new \Pggns\MidocoApi\OrderSD\StructType\SaveMiscPaymentSettingRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMidocoSupplierTemplate operation/method
 */
if ($save->saveMidocoSupplierTemplate(new \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoSupplierTemplateRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMidocoCrsSystem operation/method
 */
if ($save->saveMidocoCrsSystem(new \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoCrsSystemRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMidocoQuestion operation/method
 */
if ($save->saveMidocoQuestion(new \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoQuestionRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMidocoQuestionValue operation/method
 */
if ($save->saveMidocoQuestionValue(new \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoQuestionValueRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveOrderLockReason operation/method
 */
if ($save->saveOrderLockReason(new \Pggns\MidocoApi\OrderSD\StructType\SaveOrderLockReasonRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveOrderLockReasonDescription operation/method
 */
if ($save->saveOrderLockReasonDescription(new \Pggns\MidocoApi\OrderSD\StructType\SaveOrderLockReasonDescriptionRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveTravelNumberAutoRemark operation/method
 */
if ($save->saveTravelNumberAutoRemark(new \Pggns\MidocoApi\OrderSD\StructType\SaveTravelNumberAutoRemarkRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveTravelNumberDocument operation/method
 */
if ($save->saveTravelNumberDocument(new \Pggns\MidocoApi\OrderSD\StructType\SaveTravelNumberDocumentRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveDestinationAutoRemark operation/method
 */
if ($save->saveDestinationAutoRemark(new \Pggns\MidocoApi\OrderSD\StructType\SaveDestinationAutoRemarkRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveDestinationDocument operation/method
 */
if ($save->saveDestinationDocument(new \Pggns\MidocoApi\OrderSD\StructType\SaveDestinationDocumentRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveSupplierDocument operation/method
 */
if ($save->saveSupplierDocument(new \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierDocumentRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveSupplierDisabledUnits operation/method
 */
if ($save->saveSupplierDisabledUnits(new \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierDisabledUnitsRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveProductTypeSupplier operation/method
 */
if ($save->saveProductTypeSupplier(new \Pggns\MidocoApi\OrderSD\StructType\SaveProductTypeSupplierRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveSupplierFreeStornoDays operation/method
 */
if ($save->saveSupplierFreeStornoDays(new \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierFreeStornoDaysRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveVoucherType operation/method
 */
if ($save->saveVoucherType(new \Pggns\MidocoApi\OrderSD\StructType\SaveVoucherTypeRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveExternVoucherType operation/method
 */
if ($save->saveExternVoucherType(new \Pggns\MidocoApi\OrderSD\StructType\SaveExternVoucherTypeRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveSupplierShipName operation/method
 */
if ($save->saveSupplierShipName(new \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierShipNameRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveSupplierSettlementDiff operation/method
 */
if ($save->saveSupplierSettlementDiff(new \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierSettlementDiffRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveSupplierCommissionCondition operation/method
 */
if ($save->saveSupplierCommissionCondition(new \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierCommissionConditionRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveSupplierSettlPaymentCondition operation/method
 */
if ($save->saveSupplierSettlPaymentCondition(new \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierSettlPaymentConditionRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for savePaymentProvider operation/method
 */
if ($save->savePaymentProvider(new \Pggns\MidocoApi\OrderSD\StructType\SavePaymentProviderRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for savePaymentProviderImportFormat operation/method
 */
if ($save->savePaymentProviderImportFormat(new \Pggns\MidocoApi\OrderSD\StructType\SavePaymentProviderImportFormatRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveCabinClass operation/method
 */
if ($save->saveCabinClass(new \Pggns\MidocoApi\OrderSD\StructType\SaveCabinClassRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Samples for Delete ServiceType
 */
$delete = new \Pggns\MidocoApi\OrderSD\ServiceType\Delete($options);
$delete->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for deleteSupplier operation/method
 */
if ($delete->deleteSupplier(new \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteSupplierCcCard operation/method
 */
if ($delete->deleteSupplierCcCard(new \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierCcCardRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteSupplierAccountAssign operation/method
 */
if ($delete->deleteSupplierAccountAssign(new \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierAccountAssignRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteSupplierDocumentShipping operation/method
 */
if ($delete->deleteSupplierDocumentShipping(new \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierDocumentShippingRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteSupplierPaymentCondition operation/method
 */
if ($delete->deleteSupplierPaymentCondition(new \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierPaymentConditionRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteSupplierCancelCondition operation/method
 */
if ($delete->deleteSupplierCancelCondition(new \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierCancelConditionRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteSuppCancelCMapping operation/method
 */
if ($delete->deleteSuppCancelCMapping(new \Pggns\MidocoApi\OrderSD\StructType\DeleteSuppCancelCMappingRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteSuppCancelCEmail operation/method
 */
if ($delete->deleteSuppCancelCEmail(new \Pggns\MidocoApi\OrderSD\StructType\DeleteSuppCancelCEmailRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteAccount operation/method
 */
if ($delete->deleteAccount(new \Pggns\MidocoApi\OrderSD\StructType\DeleteAccountRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMediatorCondition operation/method
 */
if ($delete->deleteMediatorCondition(new \Pggns\MidocoApi\OrderSD\StructType\DeleteMediatorConditionRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMediatorType operation/method
 */
if ($delete->deleteMediatorType(new \Pggns\MidocoApi\OrderSD\StructType\DeleteMediatorTypeRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMidocoTextRemark operation/method
 */
if ($delete->deleteMidocoTextRemark(new \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoTextRemarksRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMidocoRuleSet operation/method
 */
if ($delete->deleteMidocoRuleSet(new \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoRuleSetRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMidocoFeeType operation/method
 */
if ($delete->deleteMidocoFeeType(new \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoFeeTypeRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMidocoFeeTypeLocal operation/method
 */
if ($delete->deleteMidocoFeeTypeLocal(new \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoFeeTypeLocalRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteBankAccount operation/method
 */
if ($delete->deleteBankAccount(new \Pggns\MidocoApi\OrderSD\StructType\DeleteBankAccountRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMidocoTemplate operation/method
 */
if ($delete->deleteMidocoTemplate(new \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoTemplateRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMidocoTemplateType operation/method
 */
if ($delete->deleteMidocoTemplateType(new \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoTemplateTypeRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMidocoSupplierCommisssion operation/method
 */
if ($delete->deleteMidocoSupplierCommisssion(new \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoSupplierCommissionRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteCashBookItemType operation/method
 */
if ($delete->deleteCashBookItemType(new \Pggns\MidocoApi\OrderSD\StructType\DeleteCashBookItemTypeRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteAccomodationCode operation/method
 */
if ($delete->deleteAccomodationCode(new \Pggns\MidocoApi\OrderSD\StructType\DeleteAccomodationCodeRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteCateringCode operation/method
 */
if ($delete->deleteCateringCode(new \Pggns\MidocoApi\OrderSD\StructType\DeleteCateringCodeRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteAreaCode operation/method
 */
if ($delete->deleteAreaCode(new \Pggns\MidocoApi\OrderSD\StructType\DeleteAreaCodeRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteRemarkOrgunit operation/method
 */
if ($delete->deleteRemarkOrgunit(new \Pggns\MidocoApi\OrderSD\StructType\DeleteRemarkOrgunitRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteSupplierSettlementAccount operation/method
 */
if ($delete->deleteSupplierSettlementAccount(new \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierSettlementAccountRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteRemarkSupplier operation/method
 */
if ($delete->deleteRemarkSupplier(new \Pggns\MidocoApi\OrderSD\StructType\DeleteRemarkSupplierRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteSettlementCharge operation/method
 */
if ($delete->deleteSettlementCharge(new \Pggns\MidocoApi\OrderSD\StructType\DeleteSettlementChargeRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteSupplierAgency operation/method
 */
if ($delete->deleteSupplierAgency(new \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierAgencyRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteUserQuery operation/method
 */
if ($delete->deleteUserQuery(new \Pggns\MidocoApi\OrderSD\StructType\DeleteUserQueryRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteDunningLetter operation/method
 */
if ($delete->deleteDunningLetter(new \Pggns\MidocoApi\OrderSD\StructType\DeleteDunningLetterRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteProductTypeMediatorCondition operation/method
 */
if ($delete->deleteProductTypeMediatorCondition(new \Pggns\MidocoApi\OrderSD\StructType\DeleteProductTypeMediatorConditionRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteFeeTypeForOrgunit operation/method
 */
if ($delete->deleteFeeTypeForOrgunit(new \Pggns\MidocoApi\OrderSD\StructType\DeleteFeeTypeForOrgunitRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteFeeGroupAssign operation/method
 */
if ($delete->deleteFeeGroupAssign(new \Pggns\MidocoApi\OrderSD\StructType\DeleteFeeGroupAssignRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteFeeGroup operation/method
 */
if ($delete->deleteFeeGroup(new \Pggns\MidocoApi\OrderSD\StructType\DeleteFeeGroupRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteAutoRemark operation/method
 */
if ($delete->deleteAutoRemark(new \Pggns\MidocoApi\OrderSD\StructType\DeleteAutoRemarkRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteSupplierTraveltype operation/method
 */
if ($delete->deleteSupplierTraveltype(new \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierTraveltypeRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMarketingKeyDescription operation/method
 */
if ($delete->deleteMarketingKeyDescription(new \Pggns\MidocoApi\OrderSD\StructType\DeleteMarketingKeyDescriptionRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMarketingKey operation/method
 */
if ($delete->deleteMarketingKey(new \Pggns\MidocoApi\OrderSD\StructType\DeleteMarketingKeyRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteBookingText operation/method
 */
if ($delete->deleteBookingText(new \Pggns\MidocoApi\OrderSD\StructType\DeleteBookingTextRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMidocoSupplierImportFormat operation/method
 */
if ($delete->deleteMidocoSupplierImportFormat(new \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoSupplierImportFormatRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMidocoSettlementType operation/method
 */
if ($delete->deleteMidocoSettlementType(new \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoSettlementTypeRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteCurrencyRate operation/method
 */
if ($delete->deleteCurrencyRate(new \Pggns\MidocoApi\OrderSD\StructType\DeleteCurrencyRateRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteHedgeCurrencyRate operation/method
 */
if ($delete->deleteHedgeCurrencyRate(new \Pggns\MidocoApi\OrderSD\StructType\DeleteHedgeCurrencyRateRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteTravelNumber operation/method
 */
if ($delete->deleteTravelNumber(new \Pggns\MidocoApi\OrderSD\StructType\DeleteTravelNumberRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteCostCentre operation/method
 */
if ($delete->deleteCostCentre(new \Pggns\MidocoApi\OrderSD\StructType\DeleteCostCentreRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteSupplierAddress operation/method
 */
if ($delete->deleteSupplierAddress(new \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierAddressRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteSupplierNotice operation/method
 */
if ($delete->deleteSupplierNotice(new \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierNoticeRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMiscPaymentSetting operation/method
 */
if ($delete->deleteMiscPaymentSetting(new \Pggns\MidocoApi\OrderSD\StructType\DeleteMiscPaymentSettingRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMidocoSupplierTemplate operation/method
 */
if ($delete->deleteMidocoSupplierTemplate(new \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoSupplierTemplateRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMidocoCrsSystem operation/method
 */
if ($delete->deleteMidocoCrsSystem(new \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoCrsSystemRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMidocoQuestion operation/method
 */
if ($delete->deleteMidocoQuestion(new \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoQuestionRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMidocoQuestionValue operation/method
 */
if ($delete->deleteMidocoQuestionValue(new \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoQuestionValueRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteTravelNumberAutoRemark operation/method
 */
if ($delete->deleteTravelNumberAutoRemark(new \Pggns\MidocoApi\OrderSD\StructType\DeleteTravelNumberAutoRemarkRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteTravelNumberDocument operation/method
 */
if ($delete->deleteTravelNumberDocument(new \Pggns\MidocoApi\OrderSD\StructType\DeleteTravelNumberDocumentRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteDestinationAutoRemark operation/method
 */
if ($delete->deleteDestinationAutoRemark(new \Pggns\MidocoApi\OrderSD\StructType\DeleteDestinationAutoRemarkRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteDestinationDocument operation/method
 */
if ($delete->deleteDestinationDocument(new \Pggns\MidocoApi\OrderSD\StructType\DeleteDestinationDocumentRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteSupplierDocument operation/method
 */
if ($delete->deleteSupplierDocument(new \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierDocumentRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteSupplierDisabledUnits operation/method
 */
if ($delete->deleteSupplierDisabledUnits(new \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierDisabledUnitsRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteProductTypeSupplier operation/method
 */
if ($delete->deleteProductTypeSupplier(new \Pggns\MidocoApi\OrderSD\StructType\DeleteProductTypeSupplierRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteVoucherType operation/method
 */
if ($delete->deleteVoucherType(new \Pggns\MidocoApi\OrderSD\StructType\DeleteVoucherTypeRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteExternVoucherType operation/method
 */
if ($delete->deleteExternVoucherType(new \Pggns\MidocoApi\OrderSD\StructType\DeleteExternVoucherTypeRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteSupplierShipName operation/method
 */
if ($delete->deleteSupplierShipName(new \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierShipNameRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteSupplierSettlementDiff operation/method
 */
if ($delete->deleteSupplierSettlementDiff(new \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierSettlementDiffRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteSupplierCommissionCondition operation/method
 */
if ($delete->deleteSupplierCommissionCondition(new \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierCommissionConditionRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteSupplierSettlPaymentCondition operation/method
 */
if ($delete->deleteSupplierSettlPaymentCondition(new \Pggns\MidocoApi\OrderSD\StructType\DeleteSupplierSettlPaymentConditionRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deletePaymentProvider operation/method
 */
if ($delete->deletePaymentProvider(new \Pggns\MidocoApi\OrderSD\StructType\DeletePaymentProviderRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteCabinClass operation/method
 */
if ($delete->deleteCabinClass(new \Pggns\MidocoApi\OrderSD\StructType\DeleteCabinClassRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \Pggns\MidocoApi\OrderSD\ServiceType\Get($options);
$get->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for getAvailableSuppliers operation/method
 */
if ($get->getAvailableSuppliers(new \Pggns\MidocoApi\OrderSD\StructType\GetAvailableSupplierRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAvailableSupplierAddresses operation/method
 */
if ($get->getAvailableSupplierAddresses(new \Pggns\MidocoApi\OrderSD\StructType\GetSupplierAddressRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAvailableSupplierCcCard operation/method
 */
if ($get->getAvailableSupplierCcCard(new \Pggns\MidocoApi\OrderSD\StructType\GetSupplierCcCardRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAvailableSupplierAccountAssign operation/method
 */
if ($get->getAvailableSupplierAccountAssign(new \Pggns\MidocoApi\OrderSD\StructType\GetSupplierAccountAssignRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAvailableSupplierDocumentShipping operation/method
 */
if ($get->getAvailableSupplierDocumentShipping(new \Pggns\MidocoApi\OrderSD\StructType\GetSupplierDocumentShippingRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAvailableSupplierPaymentCondition operation/method
 */
if ($get->getAvailableSupplierPaymentCondition(new \Pggns\MidocoApi\OrderSD\StructType\GetSupplierPaymentConditionRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAvailableSupplierCancelCondition operation/method
 */
if ($get->getAvailableSupplierCancelCondition(new \Pggns\MidocoApi\OrderSD\StructType\GetSupplierCancelConditionRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAssignedSuppCancelCMapping operation/method
 */
if ($get->getAssignedSuppCancelCMapping(new \Pggns\MidocoApi\OrderSD\StructType\GetAssignedSuppCancelCMappingRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSuppCancelCMapping operation/method
 */
if ($get->getSuppCancelCMapping(new \Pggns\MidocoApi\OrderSD\StructType\GetSuppCancelCMappingRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSuppCancelCEmail operation/method
 */
if ($get->getSuppCancelCEmail(new \Pggns\MidocoApi\OrderSD\StructType\GetSuppCancelCEmailRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSupplierPaymentCondition operation/method
 */
if ($get->getSupplierPaymentCondition(new \Pggns\MidocoApi\OrderSD\StructType\GetSpecifiedSupplierPaymentConditionRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAvailableAccounts operation/method
 */
if ($get->getAvailableAccounts(new \Pggns\MidocoApi\OrderSD\StructType\GetAvailableAccountsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAccountsFromSupplier operation/method
 */
if ($get->getAccountsFromSupplier(new \Pggns\MidocoApi\OrderSD\StructType\GetAccountsFromAccountAssignRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTextRemarks operation/method
 */
if ($get->getTextRemarks(new \Pggns\MidocoApi\OrderSD\StructType\GetMidocoTextRemarksRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDeliveryForCulture operation/method
 */
if ($get->getDeliveryForCulture(new \Pggns\MidocoApi\OrderSD\StructType\GetDeliveriesForCultureRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoRuleTypes operation/method
 */
if ($get->getMidocoRuleTypes(new \Pggns\MidocoApi\OrderSD\StructType\GetMidocoRuleTypesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoRuleSets operation/method
 */
if ($get->getMidocoRuleSets(new \Pggns\MidocoApi\OrderSD\StructType\GetRuleSetsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAssignedOrgunitsForRule operation/method
 */
if ($get->getAssignedOrgunitsForRule(new \Pggns\MidocoApi\OrderSD\StructType\GetAssignedOrgunitsForRuleRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAssignedRuleSet operation/method
 */
if ($get->getAssignedRuleSet(new \Pggns\MidocoApi\OrderSD\StructType\GetAssignedMidocoRuleSetRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAssignedMidocoRuleSetForOrgunit operation/method
 */
if ($get->getAssignedMidocoRuleSetForOrgunit(new \Pggns\MidocoApi\OrderSD\StructType\GetAssignedMidocoRuleSetForOrgunitRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoFeeType operation/method
 */
if ($get->getMidocoFeeType(new \Pggns\MidocoApi\OrderSD\StructType\GetMidocoFeeTypeRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBankAccount operation/method
 */
if ($get->getBankAccount(new \Pggns\MidocoApi\OrderSD\StructType\GetBankAccountRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBankAccounts4OrgUnit operation/method
 */
if ($get->getBankAccounts4OrgUnit(new \Pggns\MidocoApi\OrderSD\StructType\GetBankAccounts4OrgUnitRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoTemplates operation/method
 */
if ($get->getMidocoTemplates(new \Pggns\MidocoApi\OrderSD\StructType\GetMidocoTemplatesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoTemplateTypes operation/method
 */
if ($get->getMidocoTemplateTypes(new \Pggns\MidocoApi\OrderSD\StructType\GetMidocoTemplateTypesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoSupplierTemplate operation/method
 */
if ($get->getMidocoSupplierTemplate(new \Pggns\MidocoApi\OrderSD\StructType\GetMidocoSupplierTemplateRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAssignedSuppliersToTemplate operation/method
 */
if ($get->getAssignedSuppliersToTemplate(new \Pggns\MidocoApi\OrderSD\StructType\GetAssignedSuppliersToTemplateRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoSupplierCommissions operation/method
 */
if ($get->getMidocoSupplierCommissions(new \Pggns\MidocoApi\OrderSD\StructType\GetMidocoSupplierCommissionRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSupplierCommissionByLevelId operation/method
 */
if ($get->getSupplierCommissionByLevelId(new \Pggns\MidocoApi\OrderSD\StructType\GetSupplierCommissionByLevelIdRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCashBookItemType operation/method
 */
if ($get->getCashBookItemType(new \Pggns\MidocoApi\OrderSD\StructType\GetCashBookItemTypeRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAccomodationCodes operation/method
 */
if ($get->getAccomodationCodes(new \Pggns\MidocoApi\OrderSD\StructType\GetAccomodationCodesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCateringCodes operation/method
 */
if ($get->getCateringCodes(new \Pggns\MidocoApi\OrderSD\StructType\GetCateringCodesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAreaCodes operation/method
 */
if ($get->getAreaCodes(new \Pggns\MidocoApi\OrderSD\StructType\GetAreaCodesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRemarkOrgunits operation/method
 */
if ($get->getRemarkOrgunits(new \Pggns\MidocoApi\OrderSD\StructType\GetRemarkOrgunitsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSupplierSettlementAccounts operation/method
 */
if ($get->getSupplierSettlementAccounts(new \Pggns\MidocoApi\OrderSD\StructType\GetSupplierSettlementAccountsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRemarkSuppliers operation/method
 */
if ($get->getRemarkSuppliers(new \Pggns\MidocoApi\OrderSD\StructType\GetRemarkSuppliersRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getShortRemarkIdentifiers operation/method
 */
if ($get->getShortRemarkIdentifiers(new \Pggns\MidocoApi\OrderSD\StructType\GetShortRemarkIdentifiersRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSupplierInkassoModes operation/method
 */
if ($get->getSupplierInkassoModes(new \Pggns\MidocoApi\OrderSD\StructType\GetSupplierInkassoModesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSupplierAgencies operation/method
 */
if ($get->getSupplierAgencies(new \Pggns\MidocoApi\OrderSD\StructType\GetSupplierAgenciesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSupplierAgency operation/method
 */
if ($get->getSupplierAgency(new \Pggns\MidocoApi\OrderSD\StructType\GetSupplierAgencyRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSupplier operation/method
 */
if ($get->getSupplier(new \Pggns\MidocoApi\OrderSD\StructType\GetSupplierRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getQueryCriteriaOpNames operation/method
 */
if ($get->getQueryCriteriaOpNames(new \Pggns\MidocoApi\OrderSD\StructType\GetQueryCriteriaOpNamesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAvailableQueryCriteriaOps operation/method
 */
if ($get->getAvailableQueryCriteriaOps(new \Pggns\MidocoApi\OrderSD\StructType\GetAvailableQueryCriteriaOpsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAvailableQueryFields operation/method
 */
if ($get->getAvailableQueryFields(new \Pggns\MidocoApi\OrderSD\StructType\GetAvailableQueryFieldsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getQueryPage operation/method
 */
if ($get->getQueryPage(new \Pggns\MidocoApi\OrderSD\StructType\GetQueryPageRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getUserQuery operation/method
 */
if ($get->getUserQuery(new \Pggns\MidocoApi\OrderSD\StructType\GetUserQueryRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDunningLetters operation/method
 */
if ($get->getDunningLetters(new \Pggns\MidocoApi\OrderSD\StructType\GetDunningLettersRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getQueryFieldValues operation/method
 */
if ($get->getQueryFieldValues(new \Pggns\MidocoApi\OrderSD\StructType\GetQueryFieldValuesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getProductTypeMediatorConditions operation/method
 */
if ($get->getProductTypeMediatorConditions(new \Pggns\MidocoApi\OrderSD\StructType\GetProductTypeMediatorConditionsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getFeeTypeForOrgunit operation/method
 */
if ($get->getFeeTypeForOrgunit(new \Pggns\MidocoApi\OrderSD\StructType\GetFeeTypeForOrgunitRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getFeeGroupAssigns operation/method
 */
if ($get->getFeeGroupAssigns(new \Pggns\MidocoApi\OrderSD\StructType\GetFeeGroupAssignsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getFeeGroups operation/method
 */
if ($get->getFeeGroups(new \Pggns\MidocoApi\OrderSD\StructType\GetFeeGroupsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSupplierByAccount operation/method
 */
if ($get->getSupplierByAccount(new \Pggns\MidocoApi\OrderSD\StructType\GetSupplierByAccountRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoPrintOption operation/method
 */
if ($get->getMidocoPrintOption(new \Pggns\MidocoApi\OrderSD\StructType\GetMidocoPrintOptionRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAutoRemarks operation/method
 */
if ($get->getAutoRemarks(new \Pggns\MidocoApi\OrderSD\StructType\GetAutoRemarksRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSupplierTraveltypes operation/method
 */
if ($get->getSupplierTraveltypes(new \Pggns\MidocoApi\OrderSD\StructType\GetSupplierTraveltypesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMarketingKeysForType operation/method
 */
if ($get->getMarketingKeysForType(new \Pggns\MidocoApi\OrderSD\StructType\GetMarketingKeysForTypeRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMarketingKeysLocalizedForType operation/method
 */
if ($get->getMarketingKeysLocalizedForType(new \Pggns\MidocoApi\OrderSD\StructType\GetMarketingKeysLocalizedForTypeRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMarketingKeyDescriptionsForType operation/method
 */
if ($get->getMarketingKeyDescriptionsForType(new \Pggns\MidocoApi\OrderSD\StructType\GetMarketingKeyDescriptionsForTypeRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBookingTexts operation/method
 */
if ($get->getBookingTexts(new \Pggns\MidocoApi\OrderSD\StructType\GetBookingTextsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoSupplierImportFormat operation/method
 */
if ($get->getMidocoSupplierImportFormat(new \Pggns\MidocoApi\OrderSD\StructType\GetMidocoSupplierImportFormatRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoSettlementTypes operation/method
 */
if ($get->getMidocoSettlementTypes(new \Pggns\MidocoApi\OrderSD\StructType\GetMidocoSettlementTypesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCurrencyRate operation/method
 */
if ($get->getCurrencyRate(new \Pggns\MidocoApi\OrderSD\StructType\GetCurrencyRateRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getHedgeCurrencyRate operation/method
 */
if ($get->getHedgeCurrencyRate(new \Pggns\MidocoApi\OrderSD\StructType\GetHedgeCurrencyRateRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAvailableSupplierId operation/method
 */
if ($get->getAvailableSupplierId(new \Pggns\MidocoApi\OrderSD\StructType\GetAvailableSupplierIdRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTravelNumber operation/method
 */
if ($get->getTravelNumber(new \Pggns\MidocoApi\OrderSD\StructType\GetTravelNumberRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCostCentres operation/method
 */
if ($get->getCostCentres(new \Pggns\MidocoApi\OrderSD\StructType\GetCostCentresRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAvailableSupplierAddressesList operation/method
 */
if ($get->getAvailableSupplierAddressesList(new \Pggns\MidocoApi\OrderSD\StructType\GetSupplierAddressListRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSupplierNotices operation/method
 */
if ($get->getSupplierNotices(new \Pggns\MidocoApi\OrderSD\StructType\GetSupplierNoticesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRemarks4Orgunit operation/method
 */
if ($get->getRemarks4Orgunit(new \Pggns\MidocoApi\OrderSD\StructType\GetRemarks4OrgunitRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAvailableMiscPaymentSettings operation/method
 */
if ($get->getAvailableMiscPaymentSettings(new \Pggns\MidocoApi\OrderSD\StructType\GetAvailableMiscPaymentSettingRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoSupplierTemplates operation/method
 */
if ($get->getMidocoSupplierTemplates(new \Pggns\MidocoApi\OrderSD\StructType\GetMidocoSupplierTemplatesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoCrsSystem operation/method
 */
if ($get->getMidocoCrsSystem(new \Pggns\MidocoApi\OrderSD\StructType\GetMidocoCrsSystemRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoQuestion operation/method
 */
if ($get->getMidocoQuestion(new \Pggns\MidocoApi\OrderSD\StructType\GetMidocoQuestionRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoQuestionValue operation/method
 */
if ($get->getMidocoQuestionValue(new \Pggns\MidocoApi\OrderSD\StructType\GetMidocoQuestionValueRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrderLockReasons operation/method
 */
if ($get->getOrderLockReasons(new \Pggns\MidocoApi\OrderSD\StructType\GetOrderLockReasonsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAvailableOrderLockReasons operation/method
 */
if ($get->getAvailableOrderLockReasons(new \Pggns\MidocoApi\OrderSD\StructType\GetAvailableOrderLockReasonsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrderLockReasonDescriptions operation/method
 */
if ($get->getOrderLockReasonDescriptions(new \Pggns\MidocoApi\OrderSD\StructType\GetOrderLockReasonDescriptionsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAvailableOrderLockReasonDescriptions operation/method
 */
if ($get->getAvailableOrderLockReasonDescriptions(new \Pggns\MidocoApi\OrderSD\StructType\GetAvailableOrderLockReasonDescriptionsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSupplierMapping operation/method
 */
if ($get->getSupplierMapping(new \Pggns\MidocoApi\OrderSD\StructType\GetSupplierMappingRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTravelNumberAutoRemarks operation/method
 */
if ($get->getTravelNumberAutoRemarks(new \Pggns\MidocoApi\OrderSD\StructType\GetTravelNumberAutoRemarksRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTravelNumberDocuments operation/method
 */
if ($get->getTravelNumberDocuments(new \Pggns\MidocoApi\OrderSD\StructType\GetTravelNumberDocumentsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDestinationAutoRemarks operation/method
 */
if ($get->getDestinationAutoRemarks(new \Pggns\MidocoApi\OrderSD\StructType\GetDestinationAutoRemarksRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDestinationDocuments operation/method
 */
if ($get->getDestinationDocuments(new \Pggns\MidocoApi\OrderSD\StructType\GetDestinationDocumentsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSupplierDisabledUnits operation/method
 */
if ($get->getSupplierDisabledUnits(new \Pggns\MidocoApi\OrderSD\StructType\GetSupplierDisabledUnitsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getUnitDisabledSuppliers operation/method
 */
if ($get->getUnitDisabledSuppliers(new \Pggns\MidocoApi\OrderSD\StructType\GetUnitDisabledSuppliersRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSupplierDocuments operation/method
 */
if ($get->getSupplierDocuments(new \Pggns\MidocoApi\OrderSD\StructType\GetSupplierDocumentsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoSettlementTypeForSupplier operation/method
 */
if ($get->getMidocoSettlementTypeForSupplier(new \Pggns\MidocoApi\OrderSD\StructType\GetMidocoSettlementTypeForSupplierRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getProductTypeSupplier operation/method
 */
if ($get->getProductTypeSupplier(new \Pggns\MidocoApi\OrderSD\StructType\GetProductTypeSupplierRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAllOrdCriteriaDescriptions operation/method
 */
if ($get->getAllOrdCriteriaDescriptions(new \Pggns\MidocoApi\OrderSD\StructType\GetAllOrdCriteriaDescriptionsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMatchingProductTypeSupplier operation/method
 */
if ($get->getMatchingProductTypeSupplier(new \Pggns\MidocoApi\OrderSD\StructType\GetMatchingProductTypeSupplierRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoBaggageAllowance operation/method
 */
if ($get->getMidocoBaggageAllowance(new \Pggns\MidocoApi\OrderSD\StructType\GetMidocoBaggageAllowanceRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getVoucherType operation/method
 */
if ($get->getVoucherType(new \Pggns\MidocoApi\OrderSD\StructType\GetVoucherTypeRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getExternVoucherType operation/method
 */
if ($get->getExternVoucherType(new \Pggns\MidocoApi\OrderSD\StructType\GetExternVoucherTypeRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSupplierShipNames operation/method
 */
if ($get->getSupplierShipNames(new \Pggns\MidocoApi\OrderSD\StructType\GetSupplierShipNamesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAvailableSupplierHistorics operation/method
 */
if ($get->getAvailableSupplierHistorics(new \Pggns\MidocoApi\OrderSD\StructType\GetAvailableSupplierHistoricRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSupplierSettlementDiff operation/method
 */
if ($get->getSupplierSettlementDiff(new \Pggns\MidocoApi\OrderSD\StructType\GetSpecifiedSupplierSettlementDiffRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSupplierCommissionCondition operation/method
 */
if ($get->getSupplierCommissionCondition(new \Pggns\MidocoApi\OrderSD\StructType\GetSupplierCommissionConditionRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSupplierSettlPaymentCondition operation/method
 */
if ($get->getSupplierSettlPaymentCondition(new \Pggns\MidocoApi\OrderSD\StructType\GetSupplierSettlPaymentConditionRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAvailableSupplierNames operation/method
 */
if ($get->getAvailableSupplierNames(new \Pggns\MidocoApi\OrderSD\StructType\GetAvailableSupplierNamesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getPaymentProviders operation/method
 */
if ($get->getPaymentProviders(new \Pggns\MidocoApi\OrderSD\StructType\GetPaymentProvidersRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getPaymentProviderImportFormat operation/method
 */
if ($get->getPaymentProviderImportFormat(new \Pggns\MidocoApi\OrderSD\StructType\GetPaymentProviderImportFormatRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getATOLClassifications operation/method
 */
if ($get->getATOLClassifications(new \Pggns\MidocoApi\OrderSD\StructType\GetATOLClassificationsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCabinClass operation/method
 */
if ($get->getCabinClass(new \Pggns\MidocoApi\OrderSD\StructType\GetCabinClassRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getExternalServiceLinks operation/method
 */
if ($get->getExternalServiceLinks(new \Pggns\MidocoApi\OrderSD\StructType\GetExternalServiceLinksRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAutoInvoiceConditions operation/method
 */
if ($get->getAutoInvoiceConditions(new \Pggns\MidocoApi\OrderSD\StructType\GetAutoInvoiceConditionsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Search ServiceType
 */
$search = new \Pggns\MidocoApi\OrderSD\ServiceType\Search($options);
$search->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for searchSupplierCcCard operation/method
 */
if ($search->searchSupplierCcCard(new \Pggns\MidocoApi\OrderSD\StructType\SearchSupplierCcCardRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchSupplierAccountAssign operation/method
 */
if ($search->searchSupplierAccountAssign(new \Pggns\MidocoApi\OrderSD\StructType\SearchSupplierAccountAssignRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchSupplierDocumentShipping operation/method
 */
if ($search->searchSupplierDocumentShipping(new \Pggns\MidocoApi\OrderSD\StructType\SearchSupplierDocumentShippingRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchSupplierPaymentCondition operation/method
 */
if ($search->searchSupplierPaymentCondition(new \Pggns\MidocoApi\OrderSD\StructType\SearchSupplierPaymentConditionRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchAccount operation/method
 */
if ($search->searchAccount(new \Pggns\MidocoApi\OrderSD\StructType\SearchAccountRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchMediatorConditions operation/method
 */
if ($search->searchMediatorConditions(new \Pggns\MidocoApi\OrderSD\StructType\SearchMediatorConditionRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchMediatorTypes operation/method
 */
if ($search->searchMediatorTypes(new \Pggns\MidocoApi\OrderSD\StructType\SearchMediatorTypeRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchBankAccount operation/method
 */
if ($search->searchBankAccount(new \Pggns\MidocoApi\OrderSD\StructType\SearchBankAccountRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchCurrencyRates operation/method
 */
if ($search->searchCurrencyRates(new \Pggns\MidocoApi\OrderSD\StructType\SearchCurrencyRatesRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchSupplierSettlementDiff operation/method
 */
if ($search->searchSupplierSettlementDiff(new \Pggns\MidocoApi\OrderSD\StructType\SearchSupplierSettlementDiffRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchSupplierSettlPaymentCondition operation/method
 */
if ($search->searchSupplierSettlPaymentCondition(new \Pggns\MidocoApi\OrderSD\StructType\SearchSupplierSettlPaymentConditionRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Samples for List ServiceType
 */
$list = new \Pggns\MidocoApi\OrderSD\ServiceType\_List($options);
$list->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for listAvailableSuppCancelCMapping operation/method
 */
if ($list->listAvailableSuppCancelCMapping(new \Pggns\MidocoApi\OrderSD\StructType\ListSuppCancelCMappingRequest()) !== false) {
    print_r($list->getResult());
} else {
    print_r($list->getLastError());
}
/**
 * Sample call for listAvailableSuppCancelCEmail operation/method
 */
if ($list->listAvailableSuppCancelCEmail(new \Pggns\MidocoApi\OrderSD\StructType\ListSuppCancelCEmailRequest()) !== false) {
    print_r($list->getResult());
} else {
    print_r($list->getLastError());
}
/**
 * Sample call for listMidocoFeeTypes operation/method
 */
if ($list->listMidocoFeeTypes(new \Pggns\MidocoApi\OrderSD\StructType\ListMidocoFeeTypesRequest()) !== false) {
    print_r($list->getResult());
} else {
    print_r($list->getLastError());
}
/**
 * Sample call for listMidocoFeeTypesLocal operation/method
 */
if ($list->listMidocoFeeTypesLocal(new \Pggns\MidocoApi\OrderSD\StructType\ListMidocoFeeTypesLocalRequest()) !== false) {
    print_r($list->getResult());
} else {
    print_r($list->getLastError());
}
/**
 * Sample call for listAssignedMidocoFeeTypes operation/method
 */
if ($list->listAssignedMidocoFeeTypes(new \Pggns\MidocoApi\OrderSD\StructType\ListAssignedMidocoFeeTypesRequest()) !== false) {
    print_r($list->getResult());
} else {
    print_r($list->getLastError());
}
/**
 * Sample call for listCashBookItemTypes operation/method
 */
if ($list->listCashBookItemTypes(new \Pggns\MidocoApi\OrderSD\StructType\ListCashBookItemTypesRequest()) !== false) {
    print_r($list->getResult());
} else {
    print_r($list->getLastError());
}
/**
 * Sample call for listSettlementCharges operation/method
 */
if ($list->listSettlementCharges(new \Pggns\MidocoApi\OrderSD\StructType\ListSettlementChargesRequest()) !== false) {
    print_r($list->getResult());
} else {
    print_r($list->getLastError());
}
/**
 * Sample call for listSettlementChargesForOrgUnit operation/method
 */
if ($list->listSettlementChargesForOrgUnit(new \Pggns\MidocoApi\OrderSD\StructType\ListSettlementChargesForOrgUnitRequest()) !== false) {
    print_r($list->getResult());
} else {
    print_r($list->getLastError());
}
/**
 * Sample call for listUserQueries operation/method
 */
if ($list->listUserQueries(new \Pggns\MidocoApi\OrderSD\StructType\ListUserQueriesRequest()) !== false) {
    print_r($list->getResult());
} else {
    print_r($list->getLastError());
}
/**
 * Sample call for listMidocoQuestion operation/method
 */
if ($list->listMidocoQuestion(new \Pggns\MidocoApi\OrderSD\StructType\ListMidocoQuestionRequest()) !== false) {
    print_r($list->getResult());
} else {
    print_r($list->getLastError());
}
/**
 * Sample call for listMidocoQuestionValue operation/method
 */
if ($list->listMidocoQuestionValue(new \Pggns\MidocoApi\OrderSD\StructType\ListMidocoQuestionValueRequest()) !== false) {
    print_r($list->getResult());
} else {
    print_r($list->getLastError());
}
/**
 * Sample call for listSupplierCommissionConditions operation/method
 */
if ($list->listSupplierCommissionConditions(new \Pggns\MidocoApi\OrderSD\StructType\ListSupplierCommissionConditionsRequest()) !== false) {
    print_r($list->getResult());
} else {
    print_r($list->getLastError());
}
/**
 * Sample call for listCabinClass operation/method
 */
if ($list->listCabinClass(new \Pggns\MidocoApi\OrderSD\StructType\ListCabinClassRequest()) !== false) {
    print_r($list->getResult());
} else {
    print_r($list->getLastError());
}
/**
 * Samples for Valid ServiceType
 */
$valid = new \Pggns\MidocoApi\OrderSD\ServiceType\Valid($options);
$valid->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for validAccountForPlan operation/method
 */
if ($valid->validAccountForPlan(new \Pggns\MidocoApi\OrderSD\StructType\ValidateAccountForPlanRequest()) !== false) {
    print_r($valid->getResult());
} else {
    print_r($valid->getLastError());
}
/**
 * Samples for Validate ServiceType
 */
$validate = new \Pggns\MidocoApi\OrderSD\ServiceType\Validate($options);
$validate->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for validatePremiumRule operation/method
 */
if ($validate->validatePremiumRule(new \Pggns\MidocoApi\OrderSD\StructType\ValidatePremiumRuleContentRequest()) !== false) {
    print_r($validate->getResult());
} else {
    print_r($validate->getLastError());
}
/**
 * Sample call for validateCompetitionRule operation/method
 */
if ($validate->validateCompetitionRule(new \Pggns\MidocoApi\OrderSD\StructType\ValidateCompetitionRuleContentRequest()) !== false) {
    print_r($validate->getResult());
} else {
    print_r($validate->getLastError());
}
/**
 * Sample call for validateSupplierAccess operation/method
 */
if ($validate->validateSupplierAccess(new \Pggns\MidocoApi\OrderSD\StructType\ValidateSupplierAccessRequest()) !== false) {
    print_r($validate->getResult());
} else {
    print_r($validate->getLastError());
}
/**
 * Samples for Assign ServiceType
 */
$assign = new \Pggns\MidocoApi\OrderSD\ServiceType\Assign($options);
$assign->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for assignMidocoRuleSet operation/method
 */
if ($assign->assignMidocoRuleSet(new \Pggns\MidocoApi\OrderSD\StructType\AssignMidocoRuleRequest()) !== false) {
    print_r($assign->getResult());
} else {
    print_r($assign->getLastError());
}
/**
 * Sample call for assignTemplateToSuppliers operation/method
 */
if ($assign->assignTemplateToSuppliers(new \Pggns\MidocoApi\OrderSD\StructType\TemplateSuppliersAssignType()) !== false) {
    print_r($assign->getResult());
} else {
    print_r($assign->getLastError());
}
/**
 * Samples for De ServiceType
 */
$de = new \Pggns\MidocoApi\OrderSD\ServiceType\De($options);
$de->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for deAssignMidocoRuleSet operation/method
 */
if ($de->deAssignMidocoRuleSet(new \Pggns\MidocoApi\OrderSD\StructType\DeAssignMidocoRuleRequest()) !== false) {
    print_r($de->getResult());
} else {
    print_r($de->getLastError());
}
/**
 * Samples for Discharge ServiceType
 */
$discharge = new \Pggns\MidocoApi\OrderSD\ServiceType\Discharge($options);
$discharge->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for dischargeTemplateFromSuppliers operation/method
 */
if ($discharge->dischargeTemplateFromSuppliers(new \Pggns\MidocoApi\OrderSD\StructType\TemplateSuppliersAssignType()) !== false) {
    print_r($discharge->getResult());
} else {
    print_r($discharge->getLastError());
}
/**
 * Samples for Edit ServiceType
 */
$edit = new \Pggns\MidocoApi\OrderSD\ServiceType\Edit($options);
$edit->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for editMidocoTextRemark operation/method
 */
if ($edit->editMidocoTextRemark(new \Pggns\MidocoApi\OrderSD\StructType\EditMidocoTextRemarkRequest()) !== false) {
    print_r($edit->getResult());
} else {
    print_r($edit->getLastError());
}
/**
 * Samples for Execute ServiceType
 */
$execute = new \Pggns\MidocoApi\OrderSD\ServiceType\Execute($options);
$execute->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for executeBillingQuery operation/method
 */
if ($execute->executeBillingQuery(new \Pggns\MidocoApi\OrderSD\StructType\ExecuteBillingQueryRequest()) !== false) {
    print_r($execute->getResult());
} else {
    print_r($execute->getLastError());
}
/**
 * Sample call for executeBookingsQuery operation/method
 */
if ($execute->executeBookingsQuery(new \Pggns\MidocoApi\OrderSD\StructType\ExecuteBookingsQueryRequest()) !== false) {
    print_r($execute->getResult());
} else {
    print_r($execute->getLastError());
}
/**
 * Sample call for executeCustomerQuery operation/method
 */
if ($execute->executeCustomerQuery(new \Pggns\MidocoApi\OrderSD\StructType\ExecuteCustomerQueryRequest()) !== false) {
    print_r($execute->getResult());
} else {
    print_r($execute->getLastError());
}
/**
 * Sample call for executeUserQuery operation/method
 */
if ($execute->executeUserQuery(new \Pggns\MidocoApi\OrderSD\StructType\ExecuteUserQueryRequest()) !== false) {
    print_r($execute->getResult());
} else {
    print_r($execute->getLastError());
}
/**
 * Sample call for executeOrgunitQuery operation/method
 */
if ($execute->executeOrgunitQuery(new \Pggns\MidocoApi\OrderSD\StructType\ExecuteOrgunitQueryRequest()) !== false) {
    print_r($execute->getResult());
} else {
    print_r($execute->getLastError());
}
/**
 * Samples for Update ServiceType
 */
$update = new \Pggns\MidocoApi\OrderSD\ServiceType\Update($options);
$update->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for updateFeeGroupComment operation/method
 */
if ($update->updateFeeGroupComment(new \Pggns\MidocoApi\OrderSD\StructType\UpdateFeeGroupCommentRequest()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Samples for Load ServiceType
 */
$load = new \Pggns\MidocoApi\OrderSD\ServiceType\Load($options);
$load->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for loadOrdTypeValuesAndDescriptions operation/method
 */
if ($load->loadOrdTypeValuesAndDescriptions(new \Pggns\MidocoApi\OrderSD\StructType\GetOrdTypeValuesAndDescriptionsRequest()) !== false) {
    print_r($load->getResult());
} else {
    print_r($load->getLastError());
}
/**
 * Samples for Has ServiceType
 */
$has = new \Pggns\MidocoApi\OrderSD\ServiceType\Has($options);
$has->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for hasTravelNumberSequence operation/method
 */
if ($has->hasTravelNumberSequence(new \Pggns\MidocoApi\OrderSD\StructType\HasTravelNumberSequenceRequest()) !== false) {
    print_r($has->getResult());
} else {
    print_r($has->getLastError());
}
/**
 * Samples for Populate ServiceType
 */
$populate = new \Pggns\MidocoApi\OrderSD\ServiceType\Populate($options);
$populate->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for populateChangeLogInitially operation/method
 */
if ($populate->populateChangeLogInitially(new \Pggns\MidocoApi\OrderSD\StructType\PopulateChangeLogInitiallyRequest()) !== false) {
    print_r($populate->getResult());
} else {
    print_r($populate->getLastError());
}
