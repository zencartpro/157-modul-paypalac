<?php
/**
 * PayPal RESTful API Advanced Checkout for Zen Cart German 1.5.7k
 * based on PayPal Advanced Checkout for Zen Cart - Copyright 2026 by Numinix - www.numinix.com
 * Zen Cart German Specific (zencartpro adaptations) 
 * @copyright Copyright 2003-2026 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: paypalac_shared.php 2026-11-14 16:29:14Z webchills $
 */
define('MODULE_PAYMENT_PAYPALAC_TEXT_CAPTURE_FAILED', 'Wir konnten Ihre Zahlung nicht abschließen. Bitte versuchen Sie es erneut oder wählen eine andere Zahlungsart.');
define('MODULE_PAYMENT_PAYPALAC_ALERT_SUBJECT_ORDER_ATTN', 'Bestellung erfordert Aufmerksamkeit');
define('MODULE_PAYMENT_PAYPALAC_CC_CVV', 'CVV Nummer:');
define('MODULE_PAYMENT_PAYPALAC_CC_EXPIRES', 'Ablaufdatum:');
define('MODULE_PAYMENT_PAYPALAC_CC_EXPIRES_YEAR', 'Jahr:');
define('MODULE_PAYMENT_PAYPALAC_CC_FIRSTNAME', 'Vorname:');
define('MODULE_PAYMENT_PAYPALAC_CC_LASTNAME', 'Nachname:');
define('MODULE_PAYMENT_PAYPALAC_CC_NUMBER', 'Kreditkartennummer:');
define('MODULE_PAYMENT_PAYPALAC_CC_OWNER', 'Inhaber Name:');
define('MODULE_PAYMENT_PAYPALAC_NEW_CARD', 'Neue Karte verwenden');
define('MODULE_PAYMENT_PAYPALAC_SAVED_CARDS', 'Gespeicherte Karten:');
define('MODULE_PAYMENT_PAYPALAC_SAVED_CARD_GENERIC', 'Karte');
define('MODULE_PAYMENT_PAYPALAC_SAVE_CARD_PROMPT', 'Diese Karte für künftige Bestellungen speichern?');
define('MODULE_PAYMENT_PAYPALAC_SAVE_CARD_SUBSCRIPTION_NOTICE', 'Diese Karte wird für Ihre Abonnementzahlungen gespeichert.');
define('MODULE_PAYMENT_PAYPALAC_TEXT_CC_CVV_INVALID', 'CVV muss 3 oder 4 Zeichen haben.');
define('MODULE_PAYMENT_PAYPALAC_TEXT_CC_EXPIRY_REQUIRED', 'Ablaufdatum der Karte ist erforderlich.');
define('MODULE_PAYMENT_PAYPALAC_TEXT_CC_NUMBER_TOO_SHORT', 'Nummer der Kreditkarte zu kurz');
define('MODULE_PAYMENT_PAYPALAC_TEXT_CC_OWNER_TOO_SHORT', 'Name des Inhabers zu kurz.');
define('MODULE_PAYMENT_PAYPALAC_TEXT_CC_TYPE_GENERIC', 'Karte');
define('MODULE_PAYMENT_PAYPALAC_TEXT_CREATE_ORDER_ISSUE', 'Wir können Ihre Zahlung in Höhe von %1$s derzeit nicht bearbeiten. Bitte wenden Sie sich an uns, um Unterstützung zu erhalten, und geben Sie dabei diesen Code an: <b>%2$s</b>.');
define('MODULE_PAYMENT_PAYPALAC_TEXT_JS_CC_NUMBER', '* Die Kreditkartennummer muss mindestens ' . CC_NUMBER_MIN_LENGTH . ' Zeichen haben.\n');
define('MODULE_PAYMENT_PAYPALAC_TEXT_JS_CC_OWNER', '* Der Inhaber Name muss mindestens ' . CC_OWNER_MIN_LENGTH . ' Zeichen haben.\n');
define('MODULE_PAYMENT_PAYPALAC_TEXT_SAVED_CARD_NOT_FOUND', 'Die ausgewählte Karte ist nicht mehr verfügbar. Bitte wählen Sie eine andere Karte aus oder geben Sie eine neue ein.');
define('MODULE_PAYMENT_PAYPALAC_TEXT_STATUS_MISMATCH', 'Wir konnten Ihre Zahlungsanforderung nicht bearbeiten.');
define('MODULE_PAYMENT_PAYPALAC_TEXT_ORPHAN_CAPTURE_PENDING', 'Eine frühere Kartenzahlung ist noch offen. Sie kann nur mit demselben Warenkorb abgeschlossen werden. Kontaktieren Sie uns, wenn Sie eine Rückerstattung dieser Zahlung wünschen.');
define('MODULE_PAYMENT_PAYPALAC_TEXT_TRY_AGAIN', 'Bitte versuchen Sie es erneut, wählen Sie eine andere Zahlungsmethode aus oder wenden Sie sich an uns, wenn Sie Hilfe benötigen.');
define('MODULE_PAYMENT_PAYPALAC_PAYMENT_TRANSACTION_ID','Zahlungs Transaktions ID: ');  //- Should end with a space
define('MODULE_PAYMENT_PAYPALAC_TRANSACTION_ID','Transaktions ID: ');  //- Should end with a space
define('MODULE_PAYMENT_PAYPALAC_PAYPAL_ORDER_ID','PayPal Bestell ID: ');  //- Should end with a space
define('MODULE_PAYMENT_PAYPALAC_TRANSACTION_TYPE','Zahlungsart: PayPal Advanced Checkout (%s)');  //- %s filled in with either 'paypal' or 'card'
define('MODULE_PAYMENT_PAYPALAC_TRANSACTION_PAYMENT_STATUS','Zahlungsstatus: ');  //- Should end with a space
define('MODULE_PAYMENT_PAYPALAC_TRANSACTION_AMOUNT','Betrag: ');  //- Should end with a space
define('MODULE_PAYMENT_PAYPALAC_BUYER_EMAIL','Käufer E-Mail: ');  //- Should end with a space
define('MODULE_PAYMENT_PAYPALAC_FUNDING_SOURCE','Quelle: ');  //- Should end with a space