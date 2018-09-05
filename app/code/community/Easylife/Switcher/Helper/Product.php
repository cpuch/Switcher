<?php
/**
 * Easylife_Switcher extension
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE_EASYLIFE_SWITCHER.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 *
 * @category   	Easylife
 * @package	    Easylife_Switcher
 * @copyright   2013 - 2014 Marius Strajeru
 * @license	    http://opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Module helper
 *
 * @category    Easylife
 * @package	    Easylife_Switcher
 */
class Easylife_Switcher_Helper_Product extends Mage_Core_Helper_Abstract
{
    /**
     * 
     */
    public function isPrintOnDemand($product) {
        return ($product->getCoords() != "");
    }
}
