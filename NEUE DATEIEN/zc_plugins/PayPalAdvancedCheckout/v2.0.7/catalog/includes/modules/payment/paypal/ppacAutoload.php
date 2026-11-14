<?php
/**
 * PayPal Advanced Checkout for Zen Cart German 1.5.7k
 * Zen Cart German Specific (zencartpro adaptations) 
 * @copyright Copyright 2003-2026 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: ppacAutoload.php 2026-11-14 16:11:14Z webchills $
 */

$ppacAutoloadDir = __DIR__ . '/';

global $psr4Autoloader;
$psr4Autoloader->addPrefix('PayPalAdvancedCheckout\Admin', $ppacAutoloadDir . 'PayPalAdvancedCheckout/Admin');
$psr4Autoloader->addPrefix('PayPalAdvancedCheckout\Admin\Formatters', $ppacAutoloadDir . 'PayPalAdvancedCheckout/Admin/Formatters');
$psr4Autoloader->addPrefix('PayPalAdvancedCheckout\Compatibility', $ppacAutoloadDir . 'PayPalAdvancedCheckout/Compatibility');
$psr4Autoloader->addPrefix('PayPalAdvancedCheckout\Api', $ppacAutoloadDir . 'PayPalAdvancedCheckout/Api');
$psr4Autoloader->addPrefix('PayPalAdvancedCheckout\Api\Data', $ppacAutoloadDir . 'PayPalAdvancedCheckout/Api/Data');
$psr4Autoloader->addPrefix('PayPalAdvancedCheckout\Common', $ppacAutoloadDir . 'PayPalAdvancedCheckout/Common');
$psr4Autoloader->addPrefix('PayPalAdvancedCheckout\Token', $ppacAutoloadDir . 'PayPalAdvancedCheckout/Token');
$psr4Autoloader->addPrefix('PayPalAdvancedCheckout\Webhooks', $ppacAutoloadDir . 'PayPalAdvancedCheckout/Webhooks');
$psr4Autoloader->addPrefix('PayPalAdvancedCheckout\Zc2Pp', $ppacAutoloadDir . 'PayPalAdvancedCheckout/Zc2Pp');
