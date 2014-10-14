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
 * Config Model
 * @package Mbiz_Social
 */
class Mbiz_Social_Model_Config extends Mage_Core_Model_Abstract
{

    /**
     * Twitter identifier config path
     * @const CONFIG_PATH_TWITTER_IDENTIFIER string
     */
    const CONFIG_PATH_TWITTER_IDENTIFIER = 'web/mbiz_social/twitter_identifier';

    /**
     * Facebook identifier config path
     * @const CONFIG_PATH_FACEBOOK_IDENTIFIER string
     */
    const CONFIG_PATH_FACEBOOK_IDENTIFIER = 'web/mbiz_social/facebook_identifier';

    /**
     * Google Plus identifier config path
     * @const CONFIG_PATH_GPLUS_IDENTIFIER string
     */
    const CONFIG_PATH_GPLUS_IDENTIFIER = 'web/mbiz_social/gplus_identifier';

    /**
     * LinkedIn identifier config path
     * @const CONFIG_PATH_LINKEDIN_IDENTIFIER string
     */
    const CONFIG_PATH_LINKEDIN_IDENTIFIER = 'web/mbiz_social/linkedin_identifier';

// Monsieur Biz Tag NEW_CONST

// Monsieur Biz Tag NEW_VAR

    /**
     * Retrieve the twitter identifier
     * @return string
     */
    public function getTwitterIdentifier()
    {
        return Mage::getStoreConfig(self::CONFIG_PATH_TWITTER_IDENTIFIER);
    }

    /**
     * Retrieve the facebook identifier
     * @return string
     */
    public function getFacebookIdentifier()
    {
        return Mage::getStoreConfig(self::CONFIG_PATH_FACEBOOK_IDENTIFIER);
    }

    /**
     * Retrieve the LinkedIn identifier
     * @return string
     */
    public function getLinkedinIdentifier()
    {
        return Mage::getStoreConfig(self::CONFIG_PATH_LINKEDIN_IDENTIFIER);
    }

    /**
     * Retrieve the Google Plus identifier
     * @return string
     */
    public function getGplusIdentifier()
    {
        return Mage::getStoreConfig(self::CONFIG_PATH_GPLUS_IDENTIFIER);
    }

// Monsieur Biz Tag NEW_METHOD

}