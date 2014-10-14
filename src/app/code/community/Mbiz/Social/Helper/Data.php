<?php
/**
 * This file is part of Mbiz_Social for Magento.
 *
 * @license All rights reserved
 * @author Jacques Bodin-Hullin <@jacquesbh> <j.bodinhullin@monsieurbiz.com>
 * @category Mbiz
 * @package Mbiz_Social
 * @copyright Copyright (c) 2014 Monsieur Biz (http://monsieurbiz.com/)
 */

/**
 * Data Helper
 * @package Mbiz_Social
 */
class Mbiz_Social_Helper_Data extends Mage_Core_Helper_Abstract
{

// Monsieur Biz Tag NEW_CONST

// Monsieur Biz Tag NEW_VAR

    /**
     * Retrieve the twitter url
     * @return string
     */
    public function getTwitterPageUrl()
    {
        return sprintf('https://twitter.com/%s', Mage::getSingleton('mbiz_social/config')->getTwitterIdentifier());
    }

    /**
     * Retrieve the facebook url
     * @return string
     */
    public function getFacebookPageUrl()
    {
        return sprintf('https://facebook.com/%s', Mage::getSingleton('mbiz_social/config')->getFacebookIdentifier());
    }

    /**
     * Retrieve the google plus url
     * @return string
     */
    public function getGplusPageUrl()
    {
        return sprintf('https://plus.google.com/+%s', Mage::getSingleton('mbiz_social/config')->getGplusIdentifier());
    }

    /**
     * short_description_here
     * @return string
     */
    public function getLinkedinPageUrl()
    {
        return sprintf('https://www.linkedin.com/profile/view?id=%s', Mage::getSingleton('mbiz_social/config')->getLinkedinIdentifier());
    }

// Monsieur Biz Tag NEW_METHOD

}