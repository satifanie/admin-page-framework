<?php
/**
 Admin Page Framework v3.7.8b01 by Michael Uno
 Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
 <http://en.michaeluno.jp/admin-page-framework>
 Copyright (c) 2013-2015, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT>
 */
abstract class AdminPageFramework_PageMetaBox extends AdminPageFramework_PageMetaBox_Controller {
    function __construct($sMetaBoxID, $sTitle, $asPageSlugs = array(), $sContext = 'normal', $sPriority = 'default', $sCapability = 'manage_options', $sTextDomain = 'admin-page-framework') {
        if (empty($asPageSlugs)) {
            return;
        }
        if (!$this->_isInstantiatable()) {
            return;
        }
        parent::__construct($sMetaBoxID, $sTitle, $asPageSlugs, $sContext, $sPriority, $sCapability, $sTextDomain);
    }
}