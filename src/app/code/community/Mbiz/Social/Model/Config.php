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
     * Identifier config path
     * @const CONFIG_PATH_IDENTIFIER string
     */
    const CONFIG_PATH_IDENTIFIER = 'web/mbiz_social/%s_identifier';

// Monsieur Biz Tag NEW_CONST

// Monsieur Biz Tag NEW_VAR

    /**
     * Retrieve an identifier
     * @param string $network (twitter, facebook, gplus, pinterest…)
     * @return string
     */
    protected function _getIdentifier($network)
    {
        return Mage::getStoreConfig(sprintf(
            self::CONFIG_PATH_IDENTIFIER,
            $network
        ));
    }

    /**
     * Retrieve the twitter identifier
     * @return string
     */
    public function getTwitterIdentifier()
    {
        return $this->_getIdentifier('twitter');
    }

    /**
     * Retrieve the facebook identifier
     * @return string
     */
    public function getFacebookIdentifier()
    {
        return $this->_getIdentifier('facebook');
    }

    /**
     * Retrieve the LinkedIn identifier
     * @return string
     */
    public function getLinkedinIdentifier()
    {
        return $this->_getIdentifier('linkedin');
    }

    /**
     * Retrieve the Google Plus identifier
     * @return string
     */
    public function getGplusIdentifier()
    {
        return $this->_getIdentifier('gplus');
    }

    /**
     * Retrieve the Pinterest identifier
     * @return string
     */
    public function getPinterestIdentifier()
    {
        return $this->_getIdentifier('pinterest');
    }

    /**
     * Retrieve the Instagram identifier
     * @return string
     */
    public function getInstagramIdentifier()
    {
        return $this->_getIdentifier('instagram');
    }

// Monsieur Biz Tag NEW_METHOD

}
