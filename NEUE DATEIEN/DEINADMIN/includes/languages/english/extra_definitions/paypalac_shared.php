<?php
/**
 * PayPal RESTful API Advanced Checkout for Zen Cart German 1.5.7k
 * based on PayPal Advanced Checkout for Zen Cart - Copyright 2026 by Numinix - www.numinix.com
 * Zen Cart German Specific (zencartpro adaptations) 
 * @copyright Copyright 2003-2026 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: paypalac_shared.php 2026-11-14 18:29:14Z webchills $
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
define('MODULE_PAYMENT_PAYPALAC_TXN_PARENT_TXN_ID','Parent Txn ID / Txn ID:');
define('MODULE_PAYMENT_PAYPALAC_TXN_PAYPAL_ORDER_ID','PayPal Order ID:');
define('MODULE_PAYMENT_PAYPALAC_TXN_PAYMENT_ID','Payment Txn ID:');
define('MODULE_PAYMENT_PAYPALAC_ACTION','Action');
define('MODULE_PAYMENT_PAYPALAC_ACTION_DETAILS','Details');
define('MODULE_PAYMENT_PAYPALAC_ACTION_REAUTH','Re-Authorize');
define('MODULE_PAYMENT_PAYPALAC_ACTION_VOID','Void');
define('MODULE_PAYMENT_PAYPALAC_ACTION_CAPTURE','Capture');
define('MODULE_PAYMENT_PAYPALAC_ACTION_REFUND','Refund');
define('MODULE_PAYMENT_PAYPALAC_TXN_STATUS','Txn Status');
define('MODULE_PAYMENT_PAYPALAC_CONFIRM','Confirm');
define('MODULE_PAYMENT_PAYPALAC_DAYSTOSETTLE','Days to Settle:');
define('MODULE_PAYMENT_PAYPALAC_AMOUNT','Amount:');
define('MODULE_PAYMENT_PAYPALAC_CUSTOMER_NOTE','Customer Note:');
define('MODULE_PAYMENT_PAYPALAC_DATE_CREATED','Date Created:');
define('MODULE_PAYMENT_PAYPALAC_AMOUNT_RANGE','Enter an amount between %1$s 1.00 and %1$s %2$s.');
define('MODULE_PAYMENT_PAYPALAC_NOTES','Notes:');
define('MODULE_PAYMENT_PAYPALAC_DETAILS_TITLE','PayPal Transaction Details (%s)');    //- %s is one of the following two strings
define('MODULE_PAYMENT_PAYPALAC_DETAILS_TYPE_PAYPAL','PayPal Wallet');
define('MODULE_PAYMENT_PAYPALAC_DETAILS_TYPE_CARD','Credit Card');
define('MODULE_PAYMENT_PAYPALAC_BUYER_INFO','Buyer Information');
define('MODULE_PAYMENT_PAYPALAC_PAYER_NAME','Payer Name:');
define('MODULE_PAYMENT_PAYPALAC_PAYER_EMAIL','Payer Email:');
define('MODULE_PAYMENT_PAYPALAC_BUSINESS_NAME','Business Name:');
define('MODULE_PAYMENT_PAYPALAC_ADDRESS_NAME','Ship-to Name:');
define('MODULE_PAYMENT_PAYPALAC_ADDRESS_STREET','Street:');
define('MODULE_PAYMENT_PAYPALAC_ADDRESS_CITY','City:');
define('MODULE_PAYMENT_PAYPALAC_ADDRESS_STATE','State:');
define('MODULE_PAYMENT_PAYPALAC_ADDRESS_ZIP','Zip:');
define('MODULE_PAYMENT_PAYPALAC_ADDRESS_COUNTRY','Country:');
define('MODULE_PAYMENT_PAYPALAC_SELLER_INFO','Seller Information');
define('MODULE_PAYMENT_PAYPALAC_CART_ITEMS','Cart items:');
define('MODULE_PAYMENT_PAYPALAC_MERCHANT_NAME','Seller Name:');
define('MODULE_PAYMENT_PAYPALAC_MERCHANT_EMAIL','Seller Email:');
define('MODULE_PAYMENT_PAYPALAC_MERCHANT_ID','Merchant ID:');
define('MODULE_PAYMENT_PAYPALAC_SELLER_PROTECTION','Seller Protection:');
define('MODULE_PAYMENT_PAYPALAC_PROCESSOR_RESPONSE','Processor Response:');
define('MODULE_PAYMENT_PAYPALAC_AVS_CODE','AVS Code (%s)');
define('MODULE_PAYMENT_PAYPALAC_RESPONSE_CODE','Response Code (%s)');
define('MODULE_PAYMENT_PAYPALAC_CVV_CODE','CVV Code (%s)');
define('MODULE_PAYMENT_PAYPALAC_AUTH_RESULT','Authentication Result:');
define('MODULE_PAYMENT_PAYPALAC_LIABILITY','Liability Shift (%s)');
define('MODULE_PAYMENT_PAYPALAC_AUTH_STATUS','Authentication Status (%s)');
define('MODULE_PAYMENT_PAYPALAC_ENROLL_STATUS','Enrollment Status (%s)');
define('MODULE_PAYMENT_PAYPALAC_AMOUNT_MISMATCH','Order Amount Mismatch: %s');    //- %s is the base order-calculation amount/currency-code
define('MODULE_PAYMENT_PAYPALAC_CALCULATED_AMOUNT','Calculated Amount:');
define('MODULE_PAYMENT_PAYPALAC_INVOICE_NUMBER','Invoice #:');

define('MODULE_PAYMENT_PAYPALAC_REFUND_TITLE','Refund a Payment');
define('MODULE_PAYMENT_PAYPALAC_REFUND_INSTRUCTIONS','You can refund all or part of a captured payment.');
define('MODULE_PAYMENT_PAYPALAC_REFUND_NOTE1','A <em>full</em> refund refunds the remaining unrefunded balance of the captured payment.');
define('MODULE_PAYMENT_PAYPALAC_REFUND_NOTE2','A <em>partial</em> refund refunds a portion of the captured payment.');
define('MODULE_PAYMENT_PAYPALAC_REFUND_NOTE3','You can issue multiple <em>partial</em> refunds, up to the remaining unrefunded balance.');
define('MODULE_PAYMENT_PAYPALAC_REFUND_CAPTURE_ID','Capture Txn Id:');
define('MODULE_PAYMENT_PAYPALAC_REMAINING_TO_REFUND','Remaining to Refund:');
define('MODULE_PAYMENT_PAYPALAC_REFUND_AMOUNT','Amount to Refund:');
define('MODULE_PAYMENT_PAYPALAC_REFUND_FULL','Full Refund?');
define('MODULE_PAYMENT_PAYPALAC_REFUND_DEFAULT_MESSAGE','Refunded by store administrator.');

define('MODULE_PAYMENT_PAYPALAC_REFUND_PARAM_ERROR','Invalid parameters were supplied (CP %u) when attempting to refund a payment for this order; please try again.');
define('MODULE_PAYMENT_PAYPALAC_REFUND_ERROR','There was a problem refunding the transaction.');

define('MODULE_PAYMENT_PAYPALAC_REFUND_COMPLETE','A refund in the amount of %s has been completed.');

define('MODULE_PAYMENT_PAYPALAC_REAUTH_TITLE','Re-Authorize an Order');
define('MODULE_PAYMENT_PAYPALAC_REAUTH_INSTRUCTIONS','To ensure that funds are still available, you can re-authorize a payment after its initial three-day honor period expires.');
define('MODULE_PAYMENT_PAYPALAC_REAUTH_NOTE1','Within the 29-day authorization period, you can issue multiple re-authorizations after the 3-day honor period expires for the previously-issued authorization.');
define('MODULE_PAYMENT_PAYPALAC_REAUTH_NOTE2','If 30 days have transpired since the date of the original authorization, you must create an authorized payment instead of re-authorizing the original.');
define('MODULE_PAYMENT_PAYPALAC_REAUTH_NOTE3','A re-authorized payment itself has a new honor period of three days.');
define('MODULE_PAYMENT_PAYPALAC_REAUTH_NOTE4','You can re-authorize an authorized payment <em>once</em> for up to 115%% of the original authorized amount (%s), not to exceed an increase of $75 USD.');

define('MODULE_PAYMENT_PAYPALAC_REAUTH_ORIGINAL','Original Amount:');
define('MODULE_PAYMENT_PAYPALAC_REAUTH_NEW_AMOUNT','Authorized Amount:');
define('MODULE_PAYMENT_PAYPALAC_REAUTH_DAYS_FROM_LAST','Days Since Last Authorization:');
define('MODULE_PAYMENT_PAYPALAC_REAUTH_NOT_POSSIBLE','The order cannot be re-authorized because an honor period is active.');

define('MODULE_PAYMENT_PAYPALAC_REAUTH_PARAM_ERROR','Invalid parameters were supplied (CP %u) when attempting to re-authorize this order; please try again.');
define('MODULE_PAYMENT_PAYPALAC_REAUTH_ERROR','There was a problem authorizing the transaction.');
define('MODULE_PAYMENT_PAYPALAC_REAUTH_TOO_SOON','A reauthorization is only allowed once from Day 4 to Day 29 since the date of the original authorization.');

define('MODULE_PAYMENT_PAYPALAC_REAUTH_COMPLETE','A re-authorization in the amount of %s has been completed.');

define('MODULE_PAYMENT_PAYPALAC_CAPTURE_TITLE','Capture an Authorization');
define('MODULE_PAYMENT_PAYPALAC_CAPTURE_INSTRUCTIONS','To capture all or part of the outstanding funds for this order, enter the &quot;Amount&quot; below, indicate whether this is the <b>final</b> capture for the order and click the &quot;Capture&quot; button.');
define('MODULE_PAYMENT_PAYPALAC_CAPTURE_FINAL_TEXT','Final Capture?');
define('MODULE_PAYMENT_PAYPALAC_CAPTURE_REMAINING','Capture remaining funds?');
define('MODULE_PAYMENT_PAYPALAC_CAPTURED_SO_FAR','Previously Captured:');
define('MODULE_PAYMENT_PAYPALAC_REMAINING_TO_CAPTURE','Remaining to Capture:');
define('MODULE_PAYMENT_PAYPALAC_CAPTURE_DEFAULT_MESSAGE','Thank you for your order.');

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

define('MODULE_PAYMENT_PAYPALAC_TXN_TABLE_CAPTION','PayPal Transactionen');
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
define('MODULE_PAYMENT_PAYPALAC_ACTION','Action');
define('MODULE_PAYMENT_PAYPALAC_ACTION_DETAILS','Details');
define('MODULE_PAYMENT_PAYPALAC_ACTION_REAUTH','Re-Authorize');
define('MODULE_PAYMENT_PAYPALAC_ACTION_VOID','Void');
define('MODULE_PAYMENT_PAYPALAC_ACTION_CAPTURE','Capture');
define('MODULE_PAYMENT_PAYPALAC_ACTION_REFUND','Refund');
define('MODULE_PAYMENT_PAYPALAC_TXN_STATUS','Txn Status');

define('MODULE_PAYMENT_PAYPALAC_CONFIRM','Confirm');
define('MODULE_PAYMENT_PAYPALAC_DAYSTOSETTLE','Days to Settle:');
define('MODULE_PAYMENT_PAYPALAC_AMOUNT','Amount:');
define('MODULE_PAYMENT_PAYPALAC_CUSTOMER_NOTE','Customer Note:');
define('MODULE_PAYMENT_PAYPALAC_DATE_CREATED','Date Created:');
define('MODULE_PAYMENT_PAYPALAC_AMOUNT_RANGE','Enter an amount between %1$s 1.00 and %1$s %2$s.');
define('MODULE_PAYMENT_PAYPALAC_NOTES','Notes:');