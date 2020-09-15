<?php
/** 
 * PAYONE OXID Connector is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * PAYONE OXID Connector is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with PAYONE OXID Connector.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.payone.de
 * @copyright (C) Payone GmbH
 * @version   OXID eShop CE
 */
 
$sLangName  = "Français";
// -------------------------------
// RESOURCE IDENTITFIER = STRING
// -------------------------------
$aLang = array(
'charset'                                       => 'UTF-8',
'FCPO_IBAN_INVALID'                             => '',
'FCPO_BIC_INVALID'                              => '',
'FCPO_BLZ_INVALID'                              => '',
'FCPO_KTONR_INVALID'                            => '',
'FCPO_ERROR'                                    => '',
'FCPO_PAY_ERROR_REDIRECT'                       => '',
'FCPO_ERROR_BLOCKED'                            => '',
'FCPO_CC_NUMBER_INVALID'                        => '',
'FCPO_CC_DATE_INVALID'                          => '',
'FCPO_CC_CVC2_INVALID'                          => '',
'fcpo_so_ktonr'                                 => '',
'fcpo_so_blz'                                   => '',
'FCPO_MANIPULATION'                             => '',
'FCPO_REMARK_APPOINTED_MISSING'                 => '',
'FCPO_THANKYOU_APPOINTED_ERROR'                 => '',
'FCPO_CARDSEQUENCENUMBER'                       => '',
'FCPO_ADDRESSCHECK_FAILED1'                     => '',
'FCPO_ADDRESSCHECK_FAILED2'                     => '',
'FCPO_ADDRESSCHECK_PPB'                         => '',
'FCPO_ADDRESSCHECK_PHB'                         => '',
'FCPO_ADDRESSCHECK_PAB'                         => '',
'FCPO_ADDRESSCHECK_PKI'                         => '',
'FCPO_ADDRESSCHECK_PNZ'                         => '',
'FCPO_ADDRESSCHECK_PPV'                         => '',
'FCPO_ADDRESSCHECK_PPF'                         => '',
'FCPO_ONLINE_UEBERWEISUNG_TYPE'                 => '',
'FCPO_BANKGROUPTYPE'                            => '',
'FCPO_BANKACCOUNTHOLDER'                        => '',
'FCPO_VOUCHER'                                  => '',
'FCPO_DISCOUNT'                                 => '',
'FCPO_WRAPPING'                                 => "Emballage cadeau:",
'FCPO_GIFTCARD'                                 => "Carte de voeux",
'FCPO_SURCHARGE'                                => 'Frais additionels',
'FCPO_DEDUCTION'                                => 'Déduction',
'FCPO_PAYMENTTYPE'                              => "",
'FCPO_SHIPPINGCOST'                             => "",
    
'FCPO_BANK_COUNTRY'                             => '',
'FCPO_BANK_IBAN'                                => '',
'FCPO_BANK_BIC'                                 => '',
'FCPO_BANK_CODE'                                => '',
'FCPO_BANK_ACCOUNT_NUMBER'                      => '',
'FCPO_BANK_ACCOUNT_HOLDER'                      => '',
'FCPO_CREDITCARD'                               => "",
'FCPO_CREDITCARD_CHOOSE' => "",
'FCPO_CARD_VISA'                                => "Visa",
'FCPO_CARD_MASTERCARD'                          => "Mastercard",
'FCPO_NUMBER'                                   => "",
'FCPO_FIRSTNAME'                                => "",
'FCPO_LASTNAME'                                 => "",
'FCPO_BANK_ACCOUNT_HOLDER_2'                    => "",
'FCPO_IF_DEFERENT_FROM_BILLING_ADDRESS'         => "",
'FCPO_VALID_UNTIL'                              => "",
'FCPO_CARD_SECURITY_CODE'                       => "",
'FCPO_CARD_SECURITY_CODE_DESCRIPTION'           => "The CVV2/CVC2 three-digit value is printed just above the signature panel in reverse italics on the back of your card.<br>Usually it is preceded by your card number.",
'FCPO_TYPE_OF_PAYMENT'                          => "",
'FCPO_MIN_ORDER_PRICE'                          => "Montant de commande minimum",
'FCPO_PREVIOUS_STEP'                            => "",
'FCPO_CONTINUE_TO_NEXT_STEP'                    => "",
'FCPO_PAYMENT_INFORMATION'                      => "Information paiement",
'FCPO_PAGE_CHECKOUT_PAYMENT_EMPTY_TEXT'         => '',

'FCPO_EMAIL_BANK_DETAILS'                       => 'Détails banque',
'FCPO_EMAIL_BANK'                               => '',
'FCPO_EMAIL_ROUTINGNUMBER'                      => '',
'FCPO_EMAIL_ACCOUNTNUMBER'                      => '',
'FCPO_EMAIL_BIC'                                => '',
'FCPO_EMAIL_IBAN'                               => '',

'FCPO_KLV_CONFIRM'                              => '',
'FCPO_KLV_TELEPHONENUMBER'                      => 'Téléphone',
'FCPO_KLV_TELEPHONENUMBER_INVALID'              => '',
'FCPO_KLV_BIRTHDAY'                             => 'Date de naissance:',
'FCPO_KLV_BIRTHDAY_INVALID'                     => '',
'FCPO_KLV_ADDINFO'                              => 'Info supplémentaire',
'FCPO_KLV_ADDINFO_INVALID'                      => '',
'FCPO_KLV_ADDINFO_DEL'                          => '',
'FCPO_KLV_SAL'                                  => 'Titre',
'FCPO_KLV_PERSONALID'                           => '',
'FCPO_KLV_PERSONALID_INVALID'                   => '',
'FCPO_KLV_INFO_NEEDED'                          => '',
'FCPO_KLV_CONFIRMATION_MISSING'                 => '',

'FCPO_KLS_CHOOSE_CAMPAIGN'                      => '',
'FCPO_KLS_CAMPAIGN_INVALID'                     => '',
'FCPO_KLS_NO_CAMPAIGN'                          => '',

'FCPO_ORDER_MANDATE_HEADER'                     => '',
'FCPO_ORDER_MANDATE_INFOTEXT'                   => '',
'FCPO_ORDER_MANDATE_CHECKBOX'                   => '',
'FCPO_ORDER_MANDATE_ERROR'                      => '',

'FCPO_THANKYOU_PDF_LINK'                        => '',
'FCPO_MANAGEMANDATE_ERROR'                      => '',
    
'FCPO_PAYPALEXPRESS_USER_SECURITY_ERROR'        => '',

'FCPO_YAPITAL_HEADER'                           => '',
'FCPO_YAPITAL_TEXT'                             => '',
    
'FCPO_CC_IFRAME_HEADER'                         => '',
'FCPO_OR'                                       => 'ou',
'FCPO_PAYOLUTION_USTID'                         => '',
'FCPO_PAYOLUTION_PHONE'                         => '',
'FCPO_PAYOLUTION_BIRTHDATE'                     => '',
'FCPO_PAYOLUTION_PRECHECK_FAILED'               => '',
'FCPO_PAYOLUTION_YEAR'                          => 'Année',
'FCPO_PAYOLUTION_MONTH'                         => '',
'FCPO_PAYOLUTION_DAY'                           => 'jour',
'FCPO_PAYOLUTION_PLEASE SELECT'                 => '',
'FCPO_PAYOLUTION_BIRTHDATE_INVALID'             => '',
'FCPO_PAYOLUTION_AGREEMENT_PART_1'              => '',
'FCPO_PAYOLUTION_AGREEMENT_PART_1_FCPOPO_DEBITNOTE'             => '',
'FCPO_PAYOLUTION_AGREEMENT_PART_1_FCPOPO_INSTALLMENT'           => '',
'FCPO_PAYOLUTION_AGREEMENT_PART_1_FCPOPO_BILL'                  => '',
'FCPO_PAYOLUTION_AGREEMENT_PART_2'              => '',
'FCPO_PAYOLUTION_AGREE'                         => '',
'FCPO_PAYOLUTION_EMAIL_CLEARING'                => '',
'FCPO_PAYOLUTION_NOT_AGREED'                    => '',
'FCPO_PAYOLUTION_SEPA_NOT_AGREED'               => '',
'FCPO_PAYOLUTION_PHONE_MISSING' => '',
'FCPO_PAYOLUTION_SEPA_AGREEMENT_PART_1'         => '',
'FCPO_PAYOLUTION_SEPA_AGREE'                    => '',
'FCPO_PAYOLUTION_ACCOUNTHOLDER'                 => '',
'FCPO_PAYOLUTION_BANKDATA_INCOMPLETE'           => '',
'FCPO_PAYOLUTION_CHECK_INSTALLMENT_AVAILABILITY'=> '',
'FCPO_PAYOLUTION_INSTALLMENT_SELECTION'         => '',
'FCPO_PAYOLUTION_SELECT_INSTALLMENT'            => '',
'FCPO_PAYOLUTION_INSTALLMENT_SUMMARY_AND_ACCOUNT'=> '',
'FCPO_PAYOLUTION_PLEASE_CHECK_AVAILABLILITY'    => '',
'FCPO_PAYOLUTION_INSTALLMENT_PER_MONTH'         => '',
'FCPO_PAYOLUTION_INSTALLMENT_RATES'             => '',
'FCPO_PAYOLUTION_INSTALLMENT_RATE'              => '',
'FCPO_PAYOLUTION_INSTALLMENT_MONTHLY_RATES'     => '',
'FCPO_PAYOLUTION_INSTALLMENT_INTEREST_RATE'     => '',
'FCPO_PAYOLUTION_INSTALLMENT_EFF_INTEREST_RATE' => '',
'FCPO_PAYOLUTION_INSTALLMENT_DUE_AT'            => '',
'FCPO_PAYOLUTION_INSTALLMENT_DOWNLOAD_DRAFT'    => '',
'FCPO_PAYOLUTION_INSTALLMENTS_NUMBER'           => '',
'FCPO_PAYOLUTION_INSTALLMENT_FINANCING_AMOUNT'  => 'Quantité',
'FCPO_PAYOLUTION_INSTALLMENT_FINANCING_SUM'     => 'Total',
'FCPO_PAYOLUTION_INSTALLMENT_NOT_YET_SELECTED'  => 'Choisissez',
'FCPO_PAYOLUTION_NO_INSTALLMENT_SELECTED'       => '',
'FCPO_AMAZON_SELECT_ADDRESS'                    => '',
'FCPO_AMAZON_SELECT_PAYMENT'                    => '',
'FCPO_AMAZON_LOGOFF'                            => '',
'FCPO_AMAZON_PROBLEM'                           => '',
'FCPO_AMAZON_NO_SHIPPING_TO_COUNTRY'            => '',
'FCPO_AMAZON_THANKYOU_MESSAGE'                  => '',
'FCPO_AMAZON_ERROR_TRANSACTION_TIMED_OUT'       => '',
'FCPO_AMAZON_ERROR_INVALID_PAYMENT_METHOD'      => '',
'FCPO_AMAZON_ERROR_REJECTED'                    => '',
'FCPO_AMAZON_ERROR_PROCESSING_FAILURE'          => '',
'FCPO_AMAZON_ERROR_BUYER_EQUALS_SELLER'         => '',
'FCPO_AMAZON_ERROR_PAYMENT_NOT_ALLOWED'         => '',
'FCPO_AMAZON_ERROR_PAYMENT_PLAN_NOT_SET'        => '',
'FCPO_AMAZON_ERROR_SHIPPING_ADDRESS_NOT_SET'    => '',
'FCPO_AMAZON_ERROR_900'                         => '',
'FCPO_SECINVOICE_BIRTHDATE'                     => '',
'FCPO_SECINVOICE_USTID'                         => '',
'FCPO_SECINVOICE_NO_COMPANY'                    => '',
'FCPO_NOT_ADULT'                                => '',
'FCPO_BIRTHDATE_INVALID'                        => '',

'FCPO_CC_HOSTED_ERROR_CARDTYPE'                 => '',
'FCPO_CC_HOSTED_ERROR_CVC'                      => '',
'FCPO_CC_HOSTED_ERROR_INCOMPLETE'               => '',
'FCPO_EMAIL_CLEARING_SUBJECT'                   => '',
'FCPO_EMAIL_CLEARING_BODY_WELCOME'              => "",
'FCPO_EMAIL_CLEARING_BODY_THANKYOU'             => '',
'FCPO_EMAIL_USAGE'                              => '',
);

/*
[{oxmultilang ident="GENERAL_YOUWANTTODELETE"}]
*/
