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
 

$sLangName  = "English";
// -------------------------------
// RESOURCE IDENTITFIER = STRING
// -------------------------------
$aLang = array(
'charset'                                   => '',
'fcpo_admin_title'                          => '',
'fcpo_main_title'                           => '',
'fcpo_main_log'                             => '',
'FCPO_MERCHANT_ID'                          => '',
'FCPO_PORTAL_ID'                            => '',
'FCPO_PORTAL_KEY'                           => '',
'FCPO_OPERATION_MODE'                       => '',
'FCPO_BONI_OPERATION_MODE'                  => '',
'FCPO_SUBACCOUNT_ID'                        => '',
'FCPO_BANKACCOUNTCHECK'                     => '',
'FCPO_DEACTIVATED'                          => '',
'FCPO_ACTIVATED'                            => 'Aktiv',
'FCPO_ACTIVATEDWITHPOS'                     => '',
'FCPO_LIVE_MODE'                            => '',
'FCPO_TEST_MODE'                            => '',
'fcpo_order_title'                          => '',
'FCPO_REFNR'                                => '',
'FCPO_TXID'                                 => '',
'fcpo_action_appointed'                     => '',
'fcpo_action_capture'                       => '',
'fcpo_action_paid'                          => '',
'fcpo_action_underpaid'                     => '',
'fcpo_action_overpaid'                      => '',
'fcpo_action_cancelation'                   => '',
'fcpo_action_refund'                        => '',
'fcpo_action_debit'                         => '',
'fcpo_action_transfer'                      => '',
'fcpo_action_reminder'                      => '',
'fcpo_clearingtype_elv'                     => '',
'fcpo_clearingtype_cc'                      => '',
'fcpo_clearingtype_vor'                     => '',
'fcpo_clearingtype_rec'                     => '',
'fcpo_clearingtype_cod'                     => '',
'fcpo_clearingtype_sb'                      => '',
'fcpo_clearingtype_wlt'                     => '',
'fcpo_clearingtype_fnc'                     => '',
'fcpo_clearingtype_csh'                     => '',
'fcpo_clearingtype_fcpoklarna'              => '',
'fcpo_clearingtype_fcpopo_bill'             => '',
'fcpo_clearingtype_fcpopo_debitnote'        => '',
'fcpo_clearingtype_fcpopo_installment'      => '',
'FCPO_CAPTURE_APPROVED'                     => '',
'FCPO_CAPTURE_ERROR'                        => '',
'FCPO_DEBIT_APPROVED'                       => '',
'FCPO_DEBIT_ERROR'                          => '',
'FCPO_LIST_HEADER_TXTIME'                   => '',
'FCPO_LIST_HEADER_ORDERNR'                  => '',
'FCPO_LIST_HEADER_TXID'                     => '',
'FCPO_LIST_HEADER_CLEARINGTYPE'             => 'Betalingsmetode',
'FCPO_LIST_HEADER_EMAIL'                    => '',
'FCPO_LIST_HEADER_PRICE'                    => '',
'FCPO_LIST_HEADER_TXACTION'                 => '',
'FCPO_EXECUTE'                              => '',
'FCPO_CAPTURE'                              => '',
'FCPO_DEBIT'                                => '',
'FCPO_ARE_YOU_SURE'                         => '',
'FCPO_DE'                                   => '',
'FCPO_AT'                                   => '',
'FCPO_NL'                                   => '',
'FCPO_HEADER_BANKACCOUNT'                   => '',
'FCPO_BANKCOUNTRY'                          => '',
'FCPO_BANKACCOUNT'                          => '',
'FCPO_BANKCODE'                             => '',
'FCPO_BANKACCOUNTHOLDER'                    => '',
'FCPO_SHOW'                                 => '',
'FCPO_HIDE'                                 => '',
'FCPO_PAYMENTTYPE'                          => '',
'FCPO_CARDEXPIREDATE'                       => '',
'FCPO_CARDTYPE'                             => '',
'FCPO_CARDPAN'                              => '',
'FCPO_BALANCE'                              => '',
'FCPO_RECEIVABLE'                           => '',
'FC_IS_PAYONE'                                => '',
'FCPO_HELP_MERCHANTID'                      => '',
'FCPO_HELP_PORTALID'                        => '',
'FCPO_HELP_PORTALKEY'                       => '',
'FCPO_HELP_OPERATIONMODE'                   => '',
'FCPO_HELP_OPERATIONMODE'                    => '',
'FCPO_HELP_SUBACCOUNTID'                    => '',
'FCPO_HELP_POSCHECK'                        => '',
'fcpo_admin_config'                         => '',
'fcpo_admin_config_payment'                 => '',
'fcpo_admin_protocol'                       => '',
'FCPO_NO_TRANSACTION'                       => '',
'fcpo_admin_information'                    => '',
'fcpo_admin_common'                         => '',
'fcpo_admin_support'                        => '',
'fcpo_admin_api_logs'                       => '',
'FCPO_LIST_HEADER_TIMESTAMP'                => 'Tid:',
'FCPO_LIST_HEADER_REQUEST'                  => '',
'FCPO_LIST_HEADER_RESPONSE'                 => '',
'FCPO_NO_APILOG'                            => '',
'FCPO_ACTIVE_CREDITCARD_TYPES'              => '',
'FCPO_CREDITCARDBRANDS_INFOTEXT'            => '',
'FCPO_ACTIVE_ONLINE_UBERWEISUNG_TYPES'      => '',
'FCPO_ONLINEUBERWEISUNG_INFOTEXT'           => '',
'FCPO_CHANNEL'                              => '',
'FCPO_AUTHORIZATION_METHOD'                 => '',
'FCPO_PREAUTHORIZATION'                     => '',
'FCPO_PREAUTHORIZATION_HELP'                => '',
'FCPO_AUTHORIZATION'                        => '',
'FCPO_AUTHORIZATION_HELP'                   => '',
'dyn_fcpayone'                              => '',
'FCPO_ONLY_PAYONE'                          => '',
'ORDER_LIST_YOUWANTTOSTORNO'                => '',
'FCPO_ORDER_LIST_YOUWANTTODELETE'           => '',
'fcpo_admin_config_bonicheck'               => '',
'FCPO_ADDRESSCHECKTYPE'                     => '',
'FCPO_NO_ADDRESSCHECK'                      => '',
'FCPO_BASIC_ADDRESSCHECK'                   => '',
'FCPO_PERSON_ADDRESSCHECK'                  => '',
'FCPO_BONIVERSUM_BASIC_ADDRESSCHECK'        => '',
'FCPO_BONIVERSUM_PERSON_ADDRESSCHECK'       => '',
'FCPO_HELP_NO_ADDRESSCHECK'                 => '',
'FCPO_HELP_BASIC_ADDRESSCHECK'              => '',
'FCPO_HELP_PERSON_ADDRESSCHECK'             => '',
'FCPO_CONSUMERSCORETYPE'                    => '',
'FCPO_NO_BONICHECK'                         => '',
'FCPO_HARD_BONICHECK'                       => '',
'FCPO_ALL_BONICHECK'                        => '',
'FCPO_ALL_SCORE_BONICHECK'                  => '',
'FCPO_BONIVERSUM_SCORE_BONICHECK'           => '',
'FCPO_HELP_NO_BONICHECK'                    => '',
'FCPO_HELP_HARD_BONICHECK'                  => '',
'FCPO_HELP_ALL_BONICHECK'                   => '',
'FCPO_HELP_ALL_SCORE_BONICHECK'             => '',
'FCPO_HELP_BONI_OPERATIONMODE'              => '',
'FCPO_SEND_ARTICLELIST'                     => '',
'FCPO_HELP_SEND_ARTICLELIST'                => '',
'FCPO_CHECK_DEL_ADDRESS'                    => '',
'FCPO_HELP_CHECK_DEL_ADDRESS'               => '',
'FCPO_CORRECT_ADDRESS'                      => '',
'FCPO_HELP_CORRECT_ADDRESS'                 => '',
'FCPO_STATUS_WITH_USER_CORRECTION'          => '',
'FCPO_ADDRESSCHECK_PPB'                     => '',
'FCPO_ADDRESSCHECK_PHB'                     => '',
'FCPO_ADDRESSCHECK_PAB'                     => '',
'FCPO_ADDRESSCHECK_PKI'                     => '',
'FCPO_ADDRESSCHECK_PNZ'                     => '',
'FCPO_ADDRESSCHECK_PPV'                     => '',
'FCPO_ADDRESSCHECK_PPF'                     => '',
'FCPO_DURABILITY_BONICHECK'                 => '',
'FCPO_HELP_DURABILITY_BONICHECK'            => '',
'FCPO_MODULE_VERSION'                       => '',
'FCPO_STARTLIMIT_BONICHECK'                 => '',
'FCPO_HELP_STARTLIMIT_BONICHECK'            => '',
'FCPO_HELP_ASSIGNCOUNTRIES'                 => '',
'fcpo_receivable_appointed1'                => '',
'fcpo_receivable_appointed2'                => '',
'fcpo_receivable_capture'                   => '',
'fcpo_receivable_debit1'                    => '',
'fcpo_receivable_debit2'                    => '',
'fcpo_receivable_reminder'                  => '',
'fcpo_receivable_cancelation'               => '',
'fcpo_payment_capture1'                     => '',
'fcpo_payment_capture2'                     => '',
'fcpo_payment_paid1'                        => '',
'fcpo_payment_paid2'                        => '',
'fcpo_payment_underpaid1'                   => '',
'fcpo_payment_underpaid2'                   => '',
'fcpo_payment_debit1'                       => '',
'fcpo_payment_debit2'                       => '',
'fcpo_payment_transfer'                     => '',
'fcpo_payment'                              => '',
'FCPO_MAIN_CONFIG_INFOTEXT'                 => '',
'FCPO_BONICHECK_CONFIG_INFOTEXT'            => '',
'FCPO_BONICHECK_CONFIG_INFOTEXT_SMALL'      => '',
'FCPO_INFOTEXT_SET_OPERATIONMODE'           => '',
'FCPO_DEFAULT_BONI'                         => '',
'FCPO_HELP_DEFAULT_BONI'                    => '',
'FCPO_SETTLE_ACCOUNT'                       => '',
'FCPO_HELP_SETTLE_ACCOUNT'                  => '',
'FCPO_PRESAVE_ORDER'                        => '',
'FCPO_REDUCE_STOCK'                         => '',
'FCPO_HELP_REDUCE_STOCK'                    => '',
'FCPO_REDUCE_STOCK_BEFORE'                  => '',
'FCPO_REDUCE_STOCK_AFTER'                   => '',
'FCPO_HELP_PRESAVE_ORDER'                   => '',
'FCPO_VOUCHER'                              => '',
'FCPO_DISCOUNT'                             => '',
'FCPO_WRAPPING'                             => "",
'FCPO_GIFTCARD'                             => "",
'FCPO_SURCHARGE'                            => 'Tillæg',
'FCPO_DEDUCTION'                            => 'Trækkes fra',
'FCPO_PAYMENTTYPE'                          => "",
'FCPO_SHIPPINGCOST'                         => "",
'FCPO_PRODUCT_CAPTURE'                      => "",
'FCPO_PRODUCT_AMOUNT'                       => "Mængde",
'FCPO_PRODUCT_PRICE'                        => "Stykpris",
'FCPO_PRODUCT_TITLE'                        => "Produkt",
'FCPO_COMPLETE_ORDER'                       => "Afslut bestilling",
'FCPO_CONSUMERSCORE_MOMENT'                 => "",
'FCPO_CONSUMERSCORE_BEFORE'                 => "",
'FCPO_CONSUMERSCORE_AFTER'                  => "",
'FCPO_HELP_CONSUMERSCORE_MOMENT'            => "",
'sFCPOApprovalText_default'                 => "",
'sFCPODenialText_default'                   => "",
'FCPO_APPROVALTEXT'                         => "",
'FCPO_DENIALTEXT'                           => "",
'FCPO_ORDERNOTCHECKED'                      => "",
'fcpo_admin_config_status_forwarding'       => "",
'fcpo_admin_config_status_mapping'          => "",
'fcpo_admin_config_error_mapping'           => "",
'fcpo_admin_config_add'                     => "tilføj",
'fcpo_admin_config_delete'                  => "",
'fcpo_admin_config_delete_confirm'          => "",
'fcpo_admin_config_paymenttype'             => "",
'fcpo_admin_config_status_payone'           => "",
'fcpo_admin_config_status_shop'             => "",
'fcpo_admin_config_status'                  => "",
'fcpo_admin_config_url'                     => "",
'fcpo_admin_config_timeout'                 => "",    
'fcpo_status_appointed'                     => "",
'fcpo_status_capture'                       => "",
'fcpo_status_paid'                          => "",
'fcpo_status_underpaid'                     => "",
'fcpo_status_cancelation'                   => "",
'fcpo_status_refund'                        => "",
'fcpo_status_debit'                         => "",
'fcpo_status_reminder'                      => "",
'fcpo_status_vauthorization'                => "",
'fcpo_status_vsettlement'                   => "",
'fcpo_status_transfer'                      => "",
'fcpo_status_invoice'                       => "",

'FCPO_KLARNA_STORE_ID_ADMIN'                => "",
'FCPO_KLARNA_ADD_STORE_ID'                  => "",
'FCPO_KLARNA_DELETE_STORE_ID'               => "",

'FCPO_CONFIG_GROUP_CONN'                    => "",
'FCPO_CONFIG_GROUP_GENERAL'                 => "",
'FCPO_CONFIG_GROUP_DEBITNOTE'               => "",
'FCPO_CONFIG_GROUP_CREDITCARD'              => "",
'FCPO_CONFIG_GROUP_KLARNA'                  => "",
'FCPO_CONFIG_GROUP_KLARNA_CAMPAIGNS'        => "",
'FCPO_CONFIG_GROUP_PAYOLUTION'              => '',
'FCPO_CONFIG_GROUP_RATEPAY'                 => '',
'FCPO_CONFIG_GROUP_AMAZONPAY'               => '',
'FCPO_AMAZONPAY_SELLERID'                   => '',
'FCPO_AMAZONPAY_CLIENTID'                   => '',
'FCPO_AMAZONPAY_GET_CONFIG'                 => '',
'FCPO_AMAZONPAY_ERROR_GETTING_CONFIG'       => '',
'FCPO_AMAZONPAY_SUCCESS_GETTING_CONFIG'     => '',
'FCPO_AMAZONPAY_BUTTON_TYPE'                => '',
'FCPO_AMAZONPAY_BUTTON_TYPE_PwA'            => '',
'FCPO_AMAZONPAY_BUTTON_TYPE_Pay'            => '',
'FCPO_AMAZONPAY_BUTTON_TYPE_A'              => '',
'FCPO_AMAZONPAY_BUTTON_COLOR'               => '',
'FCPO_AMAZONPAY_BUTTON_COLOR_GOLD'          => '',
'FCPO_AMAZONPAY_BUTTON_TYPE_LIGHT_GRAY'     => '',
'FCPO_AMAZONPAY_BUTTON_TYPE_DARKGRAY'       => '',
'FCPO_AMAZONPAY_BUTTON_LANG'                => '',
'FCPO_AMAZONPAY_BUTTON_LANG_NONE'           => '',
'FCPO_AMAZONPAY_BUTTON_LANG_ENGLISH_UK'     => '',
'FCPO_AMAZONPAY_BUTTON_LANG_GERMAN_GERMANY' => '',
'FCPO_AMAZONPAY_BUTTON_LANG_FRENCH_FRANCE'  => '',
'FCPO_AMAZONPAY_BUTTON_LANG_ITALIAN_ITALY'  => '',
'FCPO_AMAZONPAY_BUTTON_LANG_SPANISH_SPAIN'  => '',
'FCPO_AMAZONPAY_MODE'                       => '',
'FCPO_AMAZONPAY_MODE_ALWAYSSYNC'            => '',
'FCPO_AMAZONPAY_MODE_FIRSTSYNCTHENSYNC'     => '',
'FCPO_AMAZONPAY_LOGINMODE'                  => '',
'FCPO_AMAZONPAY_LOGINMODE_AUTO'             => '',
'FCPO_AMAZONPAY_LOGINMODE_POPUP'            => '',
'FCPO_AMAZONPAY_LOGINMODE_REDIRECT'         => '',

'FCPO_PROFILES_RATEPAY'                     => '',
'FCPO_RATEPAY_DELETE_PROFILE'               => '',
'FCPO_RATEPAY_ADD_PROFILE'                  => '',
'FCPO_PROFILES_RATEPAY_CURRENCY'            => '',
'FCPO_PROFILES_RATEPAY_PAYMENT'             => '',
'FCPO_RATEPAY_PROFILE_TOGGLE_DETAILS'       => '',
'FCPO_RATEPAY_PROFILE_DETAILS_FOR_ID'       => '',
'FCPO_RATEPAY_GENERAL_SETTINGS'             => '',
'FCPO_RATEPAY_B2BMODE'                      => '',
'FCPO_HELP_RATEPAY_B2BMODE'                 => '',

'FCPO_PAYOLUTION_B2BMODE'                   => '',
'FCPO_HELP_PAYOLUTION_B2BMODE'              => '',
'FCPO_PAYOLUTION_COMPANY'                   => '',
'FCPO_HELP_PAYOLUTION_COMPANY'              => '',
'FCPO_PAYOLUTION_MODE'                      => '',
'FCPO_PAYOLUTION_AUTH_USER'                 => '',
'FCPO_HELP_PAYOLUTION_AUTH_USER'            => '',
'FCPO_PAYOLUTION_AUTH_SECRET'               => '',
'FCPO_HELP_PAYOLUTION_AUTH_SECRET'          => '',

'fcpo_admin_config_payone_error_message'    => '',
'fcpo_admin_config_status_language'         => '',
'fcpo_admin_config_status_own_error_message'=> '',

'FCPO_KLARNA_CAMPAIGNS'                     => "",
'FCPO_KLARNA_CAMPAIGN_CODE'                 => "",
'FCPO_KLARNA_CAMPAIGN_TITLE'                => "Titel",
'FCPO_KLARNA_ADD_CAMPAIGN'                  => "",

'FCPO_CONFIG_DEBIT_BANKDATA'                => "",
'FCPO_CONFIG_DEBIT_MULTISELECT'             => "",
'FCPO_CONFIG_DEBIT_GER'                     => "",
'FCPO_CONFIG_DEBIT_SHOW_OLD_FIELDS'         => "",

'FCPO_CONFIG_DEBIT_MANDATE'                 => "",
'FCPO_CONFIG_DEBIT_MANDATE_TEXT'            => '',
'FCPO_CONFIG_DEBIT_MANDATE_ACTIVE'          => "",
'FCPO_CONFIG_DEBIT_MANDATE_DOWNLOAD'        => "",
'FCPO_CONFIG_DEBIT_MANDATE_DOWNLOAD_TEXT'   => '',
'FCPO_CONFIG_DEBIT_MANDATE_DOWNLOAD_ACTIVE' => "",

'fcpo_admin_config_error_iframe_mapping'    => '',
'fcpo_admin_config_payone_error_code'       => '',

'FCPO_SHOW_SOFO_IBAN_FIELDS'                => '',

'FCPO_SAVEBANKDATA'                         => '',
'FCPO_HELP_SAVEBANKDATA'                    => '',

'FCPO_PREAUTHORIZED_AMOUNT'                 => '',
'FCPO_CAPTURE_AMOUNT_GREATER_NULL'          => '',

'FCPO_HELP_ASSIGNCOUNTRIES_2'               => '',
'FCPO_HELP_ASSIGNCOUNTRIES_3'               => '',

'FCPO_ADDRESSCHECK_PUG'                     => '',
'FCPO_ADDRESSCHECK_PUZ'                     => '',
'FCPO_ADDRESSCHECK_UKN'                     => '',
'FCPO_ADDRESSCHECK_PNP'                     => '',


'FCPO_CONFIG_GROUP_PP_EXPRESS_LOGOS'        => "",
'FCPO_CONFIG_ADD_PP_EXPRESS_LOGO'           => "",

'FCPO_HELP_REFPREFIX'                       => "",
'FCPO_REFPREFIX'                            => "",
    
'FCPO_MANDATE_PDF'                          => "",
'FCPO_MANDATE_DOWNLOAD'                     => "",
    
'FCPO_EXPORT_CONFIG'                        => "",
    
'FCPO_ASSIGN_COUNTRIES'                     => "",
'FCPO_COUNTRIES'                            => "Lande",
'FCPO_LANGUAGE'                             => "",
'FCPO_CURRENCY'                             => "",
    
'FCPO_HELP_KLARNA_CAMPAIGNS'                => "",

'FCPO_PAYPAL_DELADDRESS'                    => '',
'FCPO_HELP_PAYPAL_DELADDRESS'               => '',
'FCPO_PAYPAL_LOGOS'                         => '',    
'FCPO_PAYPAL_LOGOS_ACTIVE'                  => '',
'FCPO_PAYPAL_LOGOS_LANG'                    => '',
'FCPO_PAYPAL_LOGOS_LOGO'                    => '',
'FCPO_PAYPAL_LOGOS_UPLOAD'                  => '',
'FCPO_PAYPAL_LOGOS_DEFAULT'                 => '',
'FCPO_PAYPAL_LOGOS_NOT_EXISTING'            => '',

'ORDER_OVERVIEW_FCPO_ELV_BLZ'               => "",
'ORDER_OVERVIEW_FCPO_ELV_KTONR'             => "",
'ORDER_OVERVIEW_FCPO_ELV_IBAN'              => "IBAN:",
'ORDER_OVERVIEW_FCPO_ELV_BIC'               => "BIC:",

'FCPO_CC_CONFIG'                            => '',
'FCPO_CC_STANDARD_STYLE'                    => '',
'FCPO_CC_ERRORS'                            => '',
    
'FCPO_CC_STANDARD_INPUT'                    => '',
'FCPO_CC_STANDARD_SELECTION'                => 'Udvalg',
'FCPO_CC_STANDARD_FIELDS'                   => '',
'FCPO_CC_STANDARD_IFRAME'                   => '',
    
'FCPO_CC_ACTIVE'                            => 'Aktiv',
'FCPO_CC_LANGUAGE'                          => '',
'FCPO_CC_SELECT'                            => 'Udvalg',
    
'FCPO_CC_ERRORLANG_DE'                      => '',
'FCPO_CC_ERRORLANG_EN'                      => 'English',
'FCPO_CC_CUSTOM_TEMPLATE'                   => '',
'FCPO_CC_PREVIEW'                           => '',
    
'FCPO_CREDITCARD'                           => '',
'FCPO_NUMBER'                               => '',
'FCPO_CARD_SECURITY_CODE'                   => '',
'FCPO_VALID_UNTIL'                          => '',
'FCPO_FIRSTNAME'                            => '',
'FCPO_LASTNAME'                             => '',
    
'FCPO_PREVIEW_NOTICE'                       => '',
    
'FCPO_CC_TYPE'                              => "",
'FCPO_HELP_CC_TYPE'                         => "",

'FCPO_CC_HEADER_TYPE'                       => 'Type',
'FCPO_CC_HEADER_DIGIT_COUNT'                => '',
'FCPO_CC_HEADER_DIGIT_MAX'                  => '',
'FCPO_CC_HEADER_IFRAME'                     => '',
'FCPO_CC_HEADER_WIDTH'                      => 'Bredde',
'FCPO_CC_HEADER_HEIGHT'                     => 'Højde',
'FCPO_CC_HEADER_STYLE'                      => '',
'FCPO_CC_HEADER_CSS'                        => '',
    
'FCPO_CC_ROW_CC_Number'                     => '',
'FCPO_CC_ROW_CC_CVC'                        => '',
'FCPO_CC_ROW_CC_Month'                      => '',
'FCPO_CC_ROW_CC_Year'                       => '',
    
'FCPO_CC_TYPE_NUMERIC'                      => '',
'FCPO_CC_TYPE_PASSWORD'                     => 'Password',
'FCPO_CC_TYPE_TEXT'                         => '',
    
'FCPO_CC_IFRAME_STANDARD'                   => '',
'FCPO_CC_IFRAME_CUSTOM'                     => '',
'FCPO_CC_USE_CVC'                           => '',
'FCPO_CONFIG_DEBIT_BIC_MANDATORY'           => '',
'FCPO_MALUSHANDLING'                        => '',
'FCPO_PERSONSTATUS'                            => '',
'FCPO_MALUS'                                => 'Trækkes fra',
'FCPO_MALUS_PPB'                            => '',
'FCPO_MALUS_PHB'                            => '',
'FCPO_MALUS_PAB'                            => '',
'FCPO_MALUS_PKI'                            => '',
'FCPO_MALUS_PNZ'                            => '',
'FCPO_MALUS_PPV'                            => '',
'FCPO_MALUS_PPF'                            => '',
'FCPO_HELP_MALUS'                           => '',
'FCPO_CREDITRATING_BONIVERSUM_FALLBACK'     => '',
'FCPO_CREDITRATING_BONIVERSUM_RED'          => '',
'FCPO_CREDITRATING_BONIVERSUM_YELLOW'       => '',
'FCPO_CREDITRATING_BONIVERSUM_GREEN'        => '',
'FCPO_CONFIG_GROUP_SECINVOICE'              => '',
'FCPO_SECINVOICE_PORTAL_ID'                 => '',
'FCPO_SECINVOICE_PORTAL_KEY'                => '',
'FCPO_CONFIG_GROUP_PAYDIREKT'               => '',
'FCPO_PAYDIREKT_BUTTONTYPE'                 => '',
'FCPO_HELP_PAYDIREKT_BUTTONTYPE'            => '',
'FCPO_PAYDIREKT_EXPRESS_BUTTON_NONE'        => 'ingen',
'FCPO_PAYDIREKT_EXPRESS_BUTTON_GREEN'       => '',
'FCPO_PAYDIREKT_EXPRESS_BUTTON_GREEN2'      => '',
'FCPO_PAYDIREKT_EXPRESS_BUTTON_WHITE'       => '',
'FCPO_PAYDIREKT_EXPRESS_BUTTON_WHITE2'      => '',
'FCPO_PAYDIREKT_SHIPPING_TERMS_URL'         => '',
'FCPO_HELP_PAYDIREKT_SHIPPING_TERMS_URL'    => '',
'FCPO_PAYDIREKT_EXPRESS_DELIVERY_NONE'      => '',
'FCPO_HELP_PAYDIREKT_DELIVERYSET'           => '',
'FCPO_PAYDIREKT_DELIVERYSET'                => '',
'FCPO_GROUP_LOGGING'                        => '',
'FCPO_TRANSACTIONREDIRECTLOGGING_NONE'      => '',
'FCPO_TRANSACTIONREDIRECTLOGGING_ALL'       => '',
'FCPO_TRANSACTIONREDIRECTLOGGING'           => '',
'FCPO_HELP_TRANSACTIONREDIRECTLOGGING'      => '',
'FCPO_HASH_METHOD'                          => '',
'FCPO_HELP_HASH_METHOD'                     => '',
'FCPO_BONI_ERROR_SET_TO_BONIVERSUM_PERSON'  => '',
'FCPO_BONI_ERROR_DEACTIVATED_REGULAR_ADDRESSCHECK' => '',
'FCPO_BONI_ERROR_DEACTIVATED_BONI_ADDRESSCHECK' => '',
'FCPO_BONI_ERROR_NO_BONIADDRESSCHECK_SET'  => '',
'FCPO_BONI_ERROR_SET_TO_BASIC'              => '',
'FCPO_BONI_ERROR_SET_TO_PERSON'             => '',
'FCPO_ADDRESSCHECKTYPE_REGULAR_SET_INACTIVE' => '',
'FCPO_EMAIL_CLEARING_SUBJECT'                   => '',
'FCPO_EMAIL_CLEARING_BODY_WELCOME'              => "",
'FCPO_EMAIL_BANK'                               => '',
'FCPO_EMAIL_ROUTINGNUMBER'                      => '',
'FCPO_EMAIL_ACCOUNTNUMBER'                      => '',
'FCPO_EMAIL_BIC'                                => '',
'FCPO_EMAIL_IBAN'                               => '',
'FCPO_EMAIL_CLEARING_BODY_THANKYOU'             => '',
'FCPO_EMAIL_USAGE'                              => '',
);

/*
[{ oxmultilang ident="GENERAL_YOUWANTTODELETE" }]
*/
