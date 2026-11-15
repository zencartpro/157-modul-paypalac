<?php
/**
 * PayPal RESTful API Advanced Checkout for Zen Cart German 1.5.7k
 * based on PayPal Advanced Checkout for Zen Cart - Copyright 2026 by Numinix - www.numinix.com
 * Zen Cart German Specific (zencartpro adaptations) 
 * @copyright Copyright 2003-2026 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: paypalac_shared.php 2026-11-15 10:29:14Z webchills $
 */

define('MODULE_PAYMENT_PAYPALAC_PAYMENT_TRANSACTION_ID','Zahlungs Transaktions ID: ');  //- Should end with a space
define('MODULE_PAYMENT_PAYPALAC_TRANSACTION_ID','Transaktions ID: ');  //- Should end with a space
define('MODULE_PAYMENT_PAYPALAC_PAYPAL_ORDER_ID','PayPal Bestell ID: ');  //- Should end with a space
define('MODULE_PAYMENT_PAYPALAC_TRANSACTION_TYPE','Zahlungsart: PayPal Advanced Checkout (%s)');  //- %s filled in with either 'paypal' or 'card'
define('MODULE_PAYMENT_PAYPALAC_TRANSACTION_PAYMENT_STATUS','Zahlungsstatus: ');  //- Should end with a space
define('MODULE_PAYMENT_PAYPALAC_TRANSACTION_AMOUNT','Betrag: ');  //- Should end with a space
define('MODULE_PAYMENT_PAYPALAC_BUYER_EMAIL','Käufer E-Mail: ');  //- Should end with a space
define('MODULE_PAYMENT_PAYPALAC_FUNDING_SOURCE','Quelle: ');  //- Should end with a space
define('MODULE_PAYMENT_PAYPALAC_TXN_TYPE','Typ: ');
define('MODULE_PAYMENT_PAYPALAC_TXN_PARENT_TXN_ID','Übergeordnete Transaktions-ID / Transaktions ID:');
define('MODULE_PAYMENT_PAYPALAC_TXN_PAYPAL_ORDER_ID','PayPal Bestell ID:');
define('MODULE_PAYMENT_PAYPALAC_TXN_PAYMENT_ID','Zahlungs Transaktions ID:');
define('MODULE_PAYMENT_PAYPALAC_ACTION','Aktion');
define('MODULE_PAYMENT_PAYPALAC_ACTION_DETAILS','Details');
define('MODULE_PAYMENT_PAYPALAC_ACTION_REAUTH','Erneut autorisieren');
define('MODULE_PAYMENT_PAYPALAC_ACTION_VOID','Ungültig machen');
define('MODULE_PAYMENT_PAYPALAC_ACTION_CAPTURE','Erfassen');
define('MODULE_PAYMENT_PAYPALAC_ACTION_REFUND','Erstatten');
define('MODULE_PAYMENT_PAYPALAC_TXN_STATUS','Transaktions Status');
define('MODULE_PAYMENT_PAYPALAC_CONFIRM','Bestätigen');
define('MODULE_PAYMENT_PAYPALAC_DAYSTOSETTLE','Tage bis zur Abwicklung:');
define('MODULE_PAYMENT_PAYPALAC_AMOUNT','Betrag:');
define('MODULE_PAYMENT_PAYPALAC_CUSTOMER_NOTE','Kundenhinweis:');
define('MODULE_PAYMENT_PAYPALAC_DATE_CREATED','Erstellt am:');
define('MODULE_PAYMENT_PAYPALAC_AMOUNT_RANGE','Geben Sie einen Betrag an zwischen %1$s 1.00 und %1$s %2$s.');
define('MODULE_PAYMENT_PAYPALAC_NOTES','Bemerkungen:');
define('MODULE_PAYMENT_PAYPALAC_DETAILS_TITLE','PayPal Transaktion Details (%s)');    //- %s is one of the following two strings
define('MODULE_PAYMENT_PAYPALAC_DETAILS_TYPE_PAYPAL','PayPal Wallet');
define('MODULE_PAYMENT_PAYPALAC_DETAILS_TYPE_CARD','Kreditkarte');
define('MODULE_PAYMENT_PAYPALAC_BUYER_INFO','Käufer Information');
define('MODULE_PAYMENT_PAYPALAC_PAYER_NAME','Käufer Name:');
define('MODULE_PAYMENT_PAYPALAC_PAYER_EMAIL','Käufer E-Mail:');
define('MODULE_PAYMENT_PAYPALAC_BUSINESS_NAME','Firmenname:');
define('MODULE_PAYMENT_PAYPALAC_ADDRESS_NAME','Empfänger Name:');
define('MODULE_PAYMENT_PAYPALAC_ADDRESS_STREET','Straße:');
define('MODULE_PAYMENT_PAYPALAC_ADDRESS_CITY','Ort:');
define('MODULE_PAYMENT_PAYPALAC_ADDRESS_STATE','Bundesland:');
define('MODULE_PAYMENT_PAYPALAC_ADDRESS_ZIP','PLZ:');
define('MODULE_PAYMENT_PAYPALAC_ADDRESS_COUNTRY','Land:');
define('MODULE_PAYMENT_PAYPALAC_SELLER_INFO','Verkäufer Information');
define('MODULE_PAYMENT_PAYPALAC_CART_ITEMS','Artikel im Warenkorb:');
define('MODULE_PAYMENT_PAYPALAC_MERCHANT_NAME','Verkäufer Name:');
define('MODULE_PAYMENT_PAYPALAC_MERCHANT_EMAIL','Verkäufer E-Mail:');
define('MODULE_PAYMENT_PAYPALAC_MERCHANT_ID','Merchant ID:');
define('MODULE_PAYMENT_PAYPALAC_SELLER_PROTECTION','Verkäuferschutz:');
define('MODULE_PAYMENT_PAYPALAC_PROCESSOR_RESPONSE','Prozessorantwort:');
define('MODULE_PAYMENT_PAYPALAC_AVS_CODE','AVS Code (%s)');
define('MODULE_PAYMENT_PAYPALAC_RESPONSE_CODE','Antwort Code (%s)');
define('MODULE_PAYMENT_PAYPALAC_CVV_CODE','CVV Code (%s)');
define('MODULE_PAYMENT_PAYPALAC_AUTH_RESULT','Authentifizierungsergebnis:');
define('MODULE_PAYMENT_PAYPALAC_LIABILITY','Haftungsumkehr (%s)');
define('MODULE_PAYMENT_PAYPALAC_AUTH_STATUS','Authentifizierung Status (%s)');
define('MODULE_PAYMENT_PAYPALAC_ENROLL_STATUS','Enrollment Status (%s)');
define('MODULE_PAYMENT_PAYPALAC_AMOUNT_MISMATCH','Abweichung beim Bestellwert: %s');    //- %s is the base order-calculation amount/currency-code
define('MODULE_PAYMENT_PAYPALAC_CALCULATED_AMOUNT','Berechneter Bestellwert:');
define('MODULE_PAYMENT_PAYPALAC_INVOICE_NUMBER','Rechnungsnummer:');

define('MODULE_PAYMENT_PAYPALAC_REFUND_TITLE','Zahlung erstatten');
define('MODULE_PAYMENT_PAYPALAC_REFUND_INSTRUCTIONS','Sie können eine erfasste Zahlung ganz oder teilweise zurückerstatten.');
define('MODULE_PAYMENT_PAYPALAC_REFUND_NOTE1','Mit einem <em>vollständigen</em> Rückerstattungsvorgang wird der verbleibende, noch nicht erstattete Restbetrag der erfassten Zahlung zurückerstattet.');
define('MODULE_PAYMENT_PAYPALAC_REFUND_NOTE2','Eine <em>teilweise</em> Rückerstattung erstattet einen Teil des eingegangenen Betrags zurück.');
define('MODULE_PAYMENT_PAYPALAC_REFUND_NOTE3','Sie können mehrere <em>Teilrückerstattungen</em> vornehmen, und zwar bis zur Höhe des verbleibenden, noch nicht erstatteten Restbetrags.');
define('MODULE_PAYMENT_PAYPALAC_REFUND_CAPTURE_ID','Capture Transaktions ID:');
define('MODULE_PAYMENT_PAYPALAC_REMAINING_TO_REFUND','Verbleibender Betrag zur Rückerstattung:');
define('MODULE_PAYMENT_PAYPALAC_REFUND_AMOUNT','Rückerstattungsbetrag:');
define('MODULE_PAYMENT_PAYPALAC_REFUND_FULL','Volle Rückerstattung?');
define('MODULE_PAYMENT_PAYPALAC_REFUND_DEFAULT_MESSAGE','Rückerstattet vom Shopinhaber');

define('MODULE_PAYMENT_PAYPALAC_REFUND_PARAM_ERROR','Beim Versuch, eine Zahlung für diese Bestellung zurückzuerstatten, wurden ungültige Parameter angegeben (CP %u); bitte versuchen Sie es erneut.');
define('MODULE_PAYMENT_PAYPALAC_REFUND_ERROR','Es gab ein Problem beim Rückerstatten der Transaktion');

define('MODULE_PAYMENT_PAYPALAC_REFUND_COMPLETE','Eine Rückerstattung in der Höhe von %s wurde abgeschlossen.');

define('MODULE_PAYMENT_PAYPALAC_REAUTH_TITLE','Bestellung erneut autorisieren');
define('MODULE_PAYMENT_PAYPALAC_REAUTH_INSTRUCTIONS','Um sicherzustellen, dass noch Guthaben vorhanden ist, können Sie eine Zahlung nach Ablauf der ursprünglichen dreitägigen Zahlungsfrist erneut autorisieren.');
define('MODULE_PAYMENT_PAYPALAC_REAUTH_NOTE1','Innerhalb der 29-tägigen Gültigkeitsdauer der Autorisierung können Sie nach Ablauf der dreitägigen Nachfrist für die zuvor erteilte Autorisierung mehrere erneute Autorisierungen erteilen.');
define('MODULE_PAYMENT_PAYPALAC_REAUTH_NOTE2','Sind seit dem Datum der ursprünglichen Autorisierung 30 Tage vergangen, müssen Sie eine autorisierte Zahlung erstellen, anstatt die ursprüngliche Autorisierung erneut zu bestätigen.');
define('MODULE_PAYMENT_PAYPALAC_REAUTH_NOTE3','Für eine erneut autorisierte Zahlung gilt eine neue Einlösungsfrist von drei Tagen.');
define('MODULE_PAYMENT_PAYPALAC_REAUTH_NOTE4','Sie können eine autorisierte Zahlung <em>einmal</em> um bis zu 115 % des ursprünglich autorisierten Betrags (%s) erneut autorisieren, wobei die Erhöhung 75 EUR nicht überschreiten darf.');

define('MODULE_PAYMENT_PAYPALAC_REAUTH_ORIGINAL','Originalbetrag:');
define('MODULE_PAYMENT_PAYPALAC_REAUTH_NEW_AMOUNT','Autorisierter Betrag:');
define('MODULE_PAYMENT_PAYPALAC_REAUTH_DAYS_FROM_LAST','Tage seit letzter Autorisierung:');
define('MODULE_PAYMENT_PAYPALAC_REAUTH_NOT_POSSIBLE','Der Auftrag kann nicht erneut genehmigt werden, da eine Schonfrist läuft.');

define('MODULE_PAYMENT_PAYPALAC_REAUTH_PARAM_ERROR','Beim Versuch, diese Bestellung erneut zu autorisieren, wurden ungültige Parameter angegeben (CP %u); bitte versuchen Sie es erneut.');
define('MODULE_PAYMENT_PAYPALAC_REAUTH_ERROR','Es gab ein Problem beim Autorisieren der Transaktion.');
define('MODULE_PAYMENT_PAYPALAC_REAUTH_TOO_SOON','Eine erneute Genehmigung ist ab dem 4. bis zum 29. Tag ab dem Datum der ursprünglichen Genehmigung nur einmal zulässig.');

define('MODULE_PAYMENT_PAYPALAC_REAUTH_COMPLETE','Eine Reautorisierung in der Höhe von %s wurde abgeschlossen.');

define('MODULE_PAYMENT_PAYPALAC_CAPTURE_TITLE','Eine Autorisierung erfassen');
define('MODULE_PAYMENT_PAYPALAC_CAPTURE_INSTRUCTIONS','Um den ausstehenden Betrag für diesen Auftrag ganz oder teilweise zu verbuchen, geben Sie unten den „Betrag“ ein, geben Sie an, ob es sich hierbei um die <b>endgültige</b> Verbuchung für den Auftrag handelt, und klicken Sie auf die Schaltfläche „Erfassen“.');
define('MODULE_PAYMENT_PAYPALAC_CAPTURE_FINAL_TEXT','Endgültige Erfassung?');
define('MODULE_PAYMENT_PAYPALAC_CAPTURE_REMAINING','Verbleibende Mittel erfassen?');
define('MODULE_PAYMENT_PAYPALAC_CAPTURED_SO_FAR','Zuvor erfasst:');
define('MODULE_PAYMENT_PAYPALAC_REMAINING_TO_CAPTURE','Verbleibend zum Erfassen:');
define('MODULE_PAYMENT_PAYPALAC_CAPTURE_DEFAULT_MESSAGE','Danke für Ihre Bestellung.');

define('MODULE_PAYMENT_PAYPALAC_CAPTURE_PARAM_ERROR','Invalid parameters were supplied (CP %u) when attempting to capture funds for this order; please try again.');
define('MODULE_PAYMENT_PAYPALAC_CAPTURE_ERROR','There was a problem capturing the transaction.');
define('MODULE_PAYMENT_PAYPALAC_CAPTURE_AMOUNT','The captured amount must be greater than zero unless you are capturing the remaining funds.');

define('MODULE_PAYMENT_PAYPALAC_CAPTURE_NO_REMAINING','All authorized funds for this order have been successfully captured.');
define('MODULE_PAYMENT_PAYPALAC_CAPTURE_COMPLETE','The payment for order#%u has been captured.');
define('MODULE_PAYMENT_PAYPALAC_PARTIAL_CAPTURE','Partially captured.');
define('MODULE_PAYMENT_PAYPALAC_FINAL_CAPTURE','Final capture.');

define('MODULE_PAYMENT_PAYPALAC_VOID_TITLE','Void an Authorization');
define('MODULE_PAYMENT_PAYPALAC_VOID_INSTRUCTIONS','To void this transaction, enter/copy the &quot;Authorization ID&quot; into the input field below and click the &quot;Void&quot; button.');
define('MODULE_PAYMENT_PAYPALAC_VOID_AUTH_ID','Authorization ID:');
define('MODULE_PAYMENT_PAYPALAC_VOID_DEFAULT_MESSAGE','Transaction voided.');

define('MODULE_PAYMENT_PAYPALAC_VOID_PARAM_ERROR','Invalid parameters were supplied when attempting to void an authorization for this order; please try again.');
define('MODULE_PAYMENT_PAYPALAC_VOID_BAD_AUTH_ID','Only an order\'s <em>primary</em> authorization can be voided; please try again.');
define('MODULE_PAYMENT_PAYPALAC_VOID_ERROR','There was a problem voiding the transaction.');
define('MODULE_PAYMENT_PAYPALAC_VOID_MEMO','Transaction voided by %1$s.');
define('MODULE_PAYMENT_PAYPALAC_VOID_INVALID_TXN_ID','The transaction ID you entered (%1$s) was not found; please try again.');
define('MODULE_PAYMENT_PAYPALAC_VOID_COMPLETE','The payment authorization for order#%u has been voided.');

define('MODULE_PAYMENT_PAYPALAC_NO_RECORDS_FOUND','Für diese Bestellung sind keine PayPal-Transaktionen in der Datenbank erfasst.');

define('MODULE_PAYMENT_PAYPALAC_TXN_TABLE_CAPTION','PayPal Transaktionen');
define('MODULE_PAYMENT_PAYPALAC_PAYMENTS_TABLE_CAPTION','Settled Payments');
define('MODULE_PAYMENT_PAYPALAC_PAYMENTS_TABLE_NOTE','Note: Fees for refunds are reversed by PayPal!');
define('MODULE_PAYMENT_PAYPALAC_PAYMENTS_NONE','No currently-settled payments.');
define('MODULE_PAYMENT_PAYPALAC_PAYMENTS_TOTAL','Settled Totals:');
define('MODULE_PAYMENT_PAYPALAC_NAME_EMAIL_ID','Payer Name / Email / Payer ID');
define('MODULE_PAYMENT_PAYPALAC_PAYER_ID','Payer ID:');
define('MODULE_PAYMENT_PAYPALAC_PAYER_STATUS','Payer Status:');
define('MODULE_PAYMENT_PAYPALAC_PAYMENT_TYPE','Payment Type:');
define('MODULE_PAYMENT_PAYPALAC_PAYMENT_STATUS','Payment Status:');
define('MODULE_PAYMENT_PAYPALAC_PENDING_REASON','Pending Reason:');
define('MODULE_PAYMENT_PAYPALAC_INVOICE','Invoice:');
define('MODULE_PAYMENT_PAYPALAC_PAYMENT_DATE','Payment Date:');
define('MODULE_PAYMENT_PAYPALAC_GROSS_AMOUNT','Gross Amount:');
define('MODULE_PAYMENT_PAYPALAC_PAYMENT_FEE','Payment Fee:');
define('MODULE_PAYMENT_PAYPALAC_SETTLE_AMOUNT','Settled Amount:');
define('MODULE_PAYMENT_PAYPALAC_EXCHANGE_RATE','Exchange Rate:');
define('MODULE_PAYMENT_PAYPALAC_TXN_TYPE','Txn Type:');
define('MODULE_PAYMENT_PAYPALAC_TXN_ID','Txn ID:');
define('MODULE_PAYMENT_PAYPALAC_TXN_PARENT_TXN_ID','Parent Txn ID / Txn ID:');
define('MODULE_PAYMENT_PAYPALAC_TXN_PAYPAL_ORDER_ID','PayPal Order ID:');
define('MODULE_PAYMENT_PAYPALAC_TXN_PAYMENT_ID','Payment Txn ID:');