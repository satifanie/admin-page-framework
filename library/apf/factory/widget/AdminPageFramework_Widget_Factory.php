<?php
/**
 Admin Page Framework v3.7.8b01 by Michael Uno
 Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
 <http://en.michaeluno.jp/admin-page-framework>
 Copyright (c) 2013-2015, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT>
 */
class AdminPageFramework_Widget_Factory extends WP_Widget {
    public function __construct($oCaller, $sWidgetTitle, array $aArguments = array()) {
        $aArguments = $aArguments + array('classname' => 'admin_page_framework_widget', 'description' => '',);
        parent::__construct($oCaller->oProp->sClassName, $sWidgetTitle, $aArguments);
        $this->oCaller = $oCaller;
        $this->oCaller->oProp->aFormCallbacks = array('hfID' => array($this, 'get_field_id'), 'hfTagID' => array($this, 'get_field_id'), 'hfName' => array($this, '_replyToGetFieldName'), 'hfInputName' => array($this, '_replyToGetFieldInputName'),) + $this->oCaller->oProp->aFormCallbacks;
        $this->oCaller->oForm->aCallbacks = $this->oCaller->oProp->aFormCallbacks + $this->oCaller->oForm->aCallbacks;
    }
    public function widget($aArguments, $aFormData) {
        echo $aArguments['before_widget'];
        $this->oCaller->oUtil->addAndDoActions($this->oCaller, 'do_' . $this->oCaller->oProp->sClassName, $this->oCaller);
        $_sContent = $this->oCaller->oUtil->addAndApplyFilters($this->oCaller, "content_{$this->oCaller->oProp->sClassName}", $this->oCaller->content('', $aArguments, $aFormData), $aArguments, $aFormData);
        echo $this->_getTitle($aArguments, $aFormData);
        echo $_sContent;
        echo $aArguments['after_widget'];
    }
    private function _getTitle(array $aArguments, array $aFormData) {
        if (!$this->oCaller->oProp->bShowWidgetTitle) {
            return '';
        }
        $_sTitle = apply_filters('widget_title', $this->oCaller->oUtil->getElement($aFormData, 'title', ''), $aFormData, $this->id_base);
        if (!$_sTitle) {
            return '';
        }
        return $aArguments['before_title'] . $_sTitle . $aArguments['after_title'];
    }
    public function update($aSubmittedFormData, $aSavedFormData) {
        return $this->oCaller->oUtil->addAndApplyFilters($this->oCaller, "validation_{$this->oCaller->oProp->sClassName}", call_user_func_array(array($this->oCaller, 'validate'), array($aSubmittedFormData, $aSavedFormData, $this->oCaller)), $aSavedFormData, $this->oCaller);
    }
    public function form($aFormData) {
        $this->oCaller->oProp->aOptions = $aFormData;
        $this->_loadFrameworkFactory();
        $this->oCaller->_printWidgetForm();
        $this->oCaller->oForm = new AdminPageFramework_Form_widget(array('register_if_action_already_done' => false,) + $this->oCaller->oProp->aFormArguments, $this->oCaller->oProp->aFormCallbacks, $this->oCaller->oMsg);
    }
    private function _loadFrameworkFactory() {
        $this->oCaller->load($this->oCaller);
        $this->oCaller->oUtil->addAndDoActions($this->oCaller, array('load_' . $this->oCaller->oProp->sClassName,), $this->oCaller);
    }
    public function _replyToGetFieldName() {
        $_aParams = func_get_args() + array(null, null, null);
        $aFieldset = $_aParams[1];
        return $this->_getNameAttributeDimensions($aFieldset);
    }
    private function _getNameAttributeDimensions($aFieldset) {
        $_sSectionIndex = isset($aFieldset['section_id'], $aFieldset['_section_index']) ? "[{$aFieldset['_section_index']}]" : "";
        $_sDimensions = $this->oCaller->isSectionSet($aFieldset) ? $aFieldset['section_id'] . "]" . $_sSectionIndex . "[" . $aFieldset['field_id'] : $aFieldset['field_id'];
        return 'widget-' . $this->id_base . '[' . $this->number . '][' . $_sDimensions . ']';
    }
    public function _replyToGetFieldInputName() {
        $_aParams = func_get_args() + array(null, null, null);
        $aFieldset = $_aParams[1];
        $sIndex = $_aParams[2];
        $_sIndex = $this->oCaller->oUtil->getAOrB('0' !== $sIndex && empty($sIndex), '', "[" . $sIndex . "]");
        return $this->_replyToGetFieldName('', $aFieldset) . $_sIndex;
    }
}