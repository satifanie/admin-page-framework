<?php
/**
 Admin Page Framework v3.5.7b04 by Michael Uno
 Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
 <http://en.michaeluno.jp/admin-page-framework>
 Copyright (c) 2013-2015, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT>
 */
class AdminPageFramework_HelpPane_MetaBox extends AdminPageFramework_HelpPane_Base {
    function __construct($oProp) {
        parent::__construct($oProp);
        if ($oProp->bIsAdminAjax) {
            return;
        }
        add_action('admin_head', array($this, '_replyToRegisterHelpTabTextForMetaBox'));
    }
    public function _addHelpText($sHTMLContent, $sHTMLSidebarContent = "") {
        $this->oProp->aHelpTabText[] = "<div class='contextual-help-description'>" . $sHTMLContent . "</div>";
        $this->oProp->aHelpTabTextSide[] = "<div class='contextual-help-description'>" . $sHTMLSidebarContent . "</div>";
    }
    public function _addHelpTextForFormFields($sFieldTitle, $sHelpText, $sHelpTextSidebar = "") {
        $this->_addHelpText("<span class='contextual-help-tab-title'>" . $sFieldTitle . "</span> - " . PHP_EOL . $sHelpText, $sHelpTextSidebar);
    }
    public function _replyToRegisterHelpTabTextForMetaBox() {
        if (!$this->_isInThePage()) {
            return false;
        }
        $this->_setHelpTab($this->oProp->sMetaBoxID, $this->oProp->sTitle, $this->oProp->aHelpTabText, $this->oProp->aHelpTabTextSide);
    }
    protected function _isInThePage() {
        if (!$this->oProp->bIsAdmin) {
            return false;
        }
        if (!in_array($this->oProp->sPageNow, array('post.php', 'post-new.php'))) {
            return false;
        }
        if (!in_array($this->oUtil->getCurrentPostType(), $this->oProp->aPostTypes)) {
            return false;
        }
        return true;
    }
}