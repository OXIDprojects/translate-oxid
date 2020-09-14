<?php
/**
 * Copyright 2018 Klarna AB
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

$sLangName = "Deutsch informell";
// -------------------------------
// RESOURCE IDENTITFIER = STRING
// -------------------------------
$aLang = array(
    'charset' => 'UTF-8',

    'TCKLARNA_EXCEPTION_OUT_OF_STOCK' => 'Validierungsfehler',
    'TCKLARNA_CHECKOUT'               => 'Zur Kasse',

    'TCKLARNA_DISCOUNT_TITLE'                     => 'Rabatt',
    'TCKLARNA_VOUCHER_DISCOUNT'                   => 'Gutschein Rabatt',
    'TCKLARNA_GIFT_WRAPPING_TITLE'                => 'Geschenkverpackung',
    'TCKLARNA_GIFT_CARD_TITLE'                    => 'Grußkarte',
    'TCKLARNA_PAYMENT_FEE_TITLE'                  => 'Zahlartenaufschlag',
    'TCKLARNA_TRUSTED_SHOPS_EXCELLENCE_FEE_TITLE' => 'Trusted Shops Käuferschutz Gebühr',

    'TCKLARNA_PASSWORD'                          => 'Passwort',
    'TCKLARNA_TRUSTED_SHOP_BUYER_PROTECTION'     => 'Trusted Shops Käuferschutz',
    'TCKLARNA_ALREADY_A_CUSTOMER'                => 'Ich bin bereits Kunde',
    'TCKLARNA_LAW_NOTICE'                        => 'Es gelten die <a href="%s" class="klarna-notification" target="_blank">Nutzungsbedingungen</a> zur Datenübertragung.',
    'TCKLARNA_OUTSIDE_VOUCHER'                   => 'Sie haben einen Gutschein?',
    'TCKLARNA_GO_TO_CHECKOUT'                    => 'Zur Kasse',
    'TCKLARNA_BUY_NOW'                           => 'Jetzt kaufen',
    'TCKLARNA_USE_AS_DELIVERY_ADDRESS'           => 'Als Lieferanschrift verwenden',
    'TCKLARNA_CHOOSE_DELIVERY_ADDRESS'           => 'Lieferadresse wählen',
    'TCKLARNA_CREATE_USER_ACCOUNT'               => 'Kundenkonto erstellen',
    'TCKLARNA_SUBSCRIBE_TO_NEWSLETTER'           => 'Newsletter-Anmeldung',
    'TCKLARNA_CREATE_USER_ACCOUNT_AND_SUBSCRIBE' => 'Kundenkonto erstellen und Newsletter abonnieren',
    'TCKLARNA_NO_CHECKBOX'                       => 'Keine Checkbox anzeigen',
    'TCKLARNA_ALLOW_SEPARATE_SHIPPING_ADDRESS'   => 'Lieferanschrift darf von Rechnungsanschrift abweichen',
    'TCKLARNA_PHONE_NUMBER_MANDATORY'            => 'Telefonnummer ist Pflichtfeld',
    'TCKLARNA_DATE_OF_BIRTH_MANDATORY'           => 'Geburtsdatum ist Pflichtfeld',
    'TCKLARNA_CHOOSE_YOUR_SHIPPING_COUNTRY'      => 'Bitte wähle Dein Lieferland:',
    'TCKLARNA_CHOOSE_YOUR_NOT_SUPPORTED_COUNTRY' => 'Ist Dein Land nicht dabei?',
    'TCKLARNA_MORE_COUNTRIES'                    => 'Weitere Lieferländer',
    'TCKLARNA_MY_COUNTRY_IS_NOT_LISTED'          => 'Mein Land ist nicht in der Liste',
    'TCKLARNA_OTHER_COUNTRY'                     => 'Andere Länder',
    'TCKLARNA_RESET_COUNTRY'                     => 'Dein Land: <strong>%s</strong> ',
    'TCKLARNA_CHANGE_COUNTRY'                    => 'Land ändern',
    'TCKLARNA_LOGIN_INTO_AMAZON'                 => 'Bitte klicke auf diesen Button, um den Login mit Amazon zu starten',
    'KLARNA_ORDER_NOT_IN_SYNC'             => '<strong>Achtung!</strong> Die Daten dieser Bestellung weichen von den bei Klarna gespeicherten Daten ab. ',
    'KLARNA_ORDER_IS_CANCELLED'            => 'Die Bestellung wurde storniert. ',
    'KLARNA_SEE_ORDER_IN_PORTAL'           => '<a href="%s" target="_blank" class="alert-link">Diese Bestellung im Klarna Merchant Portal aufrufen.</a>',

    'KLARNA_WENT_WRONG_TRY_AGAIN' => 'Ein Fehler ist aufgetreten. Bitte noch einmal versuchen.',
    'KLARNA_WRONG_URLS_CONFIG'    => 'Fehler in der Konfiguration - prüfe die URLs zu AGBs und Widerrufsrecht',

    'TCKLARNA_KP_CURRENCY_DONT_MATCH'      => 'Um eine Klarna Zahlungsart verwenden zu können, muss die gewählte Währung mit der offiziellen Währung Deines Rechnungs-/Lieferland übereinstimmen.',
    'TCKLARNA_KP_MATCH_ERROR'              => 'Um diese Klarna Zahlungsart zu verwenden, müssen die Person und das Land in Rechnungs- und Lieferanschrift übereinstimmen.',
    'TCKLARNA_KP_INVALID_TOKEN'            => 'Ungültiger Authorization Token. Bitte probiere es noch einmal.',
    'TCKLARNA_KP_ORDER_DATA_CHANGED'       => 'Bestelldaten wurden geändert. Bitte versuche es erneut.',
    'KP_NOT_AVAILABLE_FOR_COMPANIES'  => 'Bezahlen mit dieser Klarna Zahlungsmethode steht derzeit für Bestellungen von Firmen nicht zur Verfügung.',
    'KP_AVAILABLE_FOR_PRIVATE_ONLY'   => 'Bezahlen mit dieser Klarna Zahlungsmethode steht nur für Bestellungen von Privatpersonen zur Verfügung.',
    'KP_AVAILABLE_FOR_COMPANIES_ONLY' => 'Bezahlen mit dieser Klarna Zahlungsmethode steht derzeit nur für Bestellungen von Firmen zur Verfügung.',
    'TCKLARNA_KP_NOT_KLARNA_CORE_COUNTRY'  => 'Konfigurationsfehler: In diesem Land sind keine Klarna Zahlungsarten  verfügbar.',

    'TCKLARNA_PLEASE_AGREE_TO_TERMS'            => 'Bitte stimme den AGB und den Widerrufsbedingungen für digitale Inhalte zu.',
    'TCKLARNA_ERROR_NOT_ENOUGH_IN_STOCK'        => 'Nicht genügend Artikel von Artikel %s auf Lager.',
    'TCKLARNA_ERROR_NO_SHIPPING_METHODS_SET_UP' => 'Derzeit ist keine Versandart für dieses Land definiert: %s',

    'TCKLARNA_PAY_LATER_SUBTITLE'    => 'Erst kaufen, dann bezahlen',
    'TCKLARNA_SLICE_IT_SUBTITLE'     => 'Bequem in Raten zahlen',
    'TCKLARNA_PAY_NOW_SUBTITLE'      => 'Einfach und direkt bezahlen',
    'TCKLARNA_ORDER_AMOUNT_TOO_HIGH' => 'Der Bestellwert ist zu hoch.',

    'TCKLARNA_ANONYMIZED_PRODUCT'                  => 'Anonymisierter Produkttitel:',

    'TCKLARNA_IS_ERROR_DEFAULT' => 'Etwas ist schief gelaufen. Lade die Seite neu und versuche es erneut.',
);

