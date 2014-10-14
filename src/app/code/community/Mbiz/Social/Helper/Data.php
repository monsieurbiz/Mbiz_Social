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
     * Retrieve the twitter URL
     * @return string|null NULL if no twitter identifier set
     */
    public function getTwitterPageUrl()
    {
        if (!$id = Mage::getSingleton('mbiz_social/config')->getTwitterIdentifier()) {
            return null;
        }
        return sprintf('https://twitter.com/%s', $id);
    }

    /**
     * Retrieve the facebook URL
     * @return string|null NULL if no facebook identifier set
     */
    public function getFacebookPageUrl()
    {
        if (!$id = Mage::getSingleton('mbiz_social/config')->getFacebookIdentifier()) {
            return null;
        }
        return sprintf('https://facebook.com/%s', $id);
    }

    /**
     * Retrieve the google plus URL
     * @return string|null NULL if no google plus identifier set
     */
    public function getGplusPageUrl()
    {
        if (!$id = Mage::getSingleton('mbiz_social/config')->getGplusIdentifier()) {
            return null;
        }
        return sprintf('https://plus.google.com/+%s', $id);
    }

    /**
     * Retrieve the Linkedin URL
     * @return string|null NULL if no linkedin identifier set
     */
    public function getLinkedinPageUrl()
    {
        if (!$id = Mage::getSingleton('mbiz_social/config')->getLinkedinIdentifier()) {
            return null;
        }
        return sprintf('https://www.linkedin.com/profile/view?id=%s', $id);
    }

    /**
     * Retrieve the Pinterest URL
     * @return string|null NULL if no pinterest identifier set
     */
    public function getPinterestPageUrl()
    {
        if (!$id = Mage::getSingleton('mbiz_social/config')->getPinterestIdentifier()) {
            return null;
        }
        return sprintf('http://www.pinterest.com/%s/', $id);
    }

    /**
     * Retrieve the Instagram URL
     * @return string|null NULL if no instagram identifier set
     */
    public function getInstagramPageUrl()
    {
        if (!$id = Mage::getSingleton('mbiz_social/config')->getInstagramIdentifier()) {
            return null;
        }
        return sprintf('http://instagram.com/%s', $id);
    }

// Monsieur Biz Tag NEW_METHOD

}
