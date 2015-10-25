<?php 
/**
	Admin Page Framework v3.6.1b03 by Michael Uno 
	Facilitates WordPress plugin and theme development.
	<http://en.michaeluno.jp/admin-page-framework>
	Copyright (c) 2013-2015, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
$aClassFiles = array( 
	"AdminPageFramework"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/admin_page/AdminPageFramework.php", 
	"AdminPageFramework_Controller"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/admin_page/AdminPageFramework_Controller.php", 
	"AdminPageFramework_Form_Controller"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/admin_page/AdminPageFramework_Form_Controller.php", 
	"AdminPageFramework_Form_Model"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/admin_page/AdminPageFramework_Form_Model.php", 
	"AdminPageFramework_Form_Model_Export"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/admin_page/AdminPageFramework_Form_Model_Export.php", 
	"AdminPageFramework_Form_Model_Imort"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/admin_page/AdminPageFramework_Form_Model_Imort.php", 
	"AdminPageFramework_Form_Model_Validation"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/admin_page/AdminPageFramework_Form_Model_Validation.php", 
	"AdminPageFramework_Form_Model_Validation_Opiton"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/admin_page/AdminPageFramework_Form_Model_Validation_Opiton.php", 
	"AdminPageFramework_Form_View"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/admin_page/AdminPageFramework_Form_View.php", 
	"AdminPageFramework_Menu_Controller"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/admin_page/AdminPageFramework_Menu_Controller.php", 
	"AdminPageFramework_Menu_Model"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/admin_page/AdminPageFramework_Menu_Model.php", 
	"AdminPageFramework_Menu_View"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/admin_page/AdminPageFramework_Menu_View.php", 
	"AdminPageFramework_Model"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/admin_page/AdminPageFramework_Model.php", 
	"AdminPageFramework_Page_Controller"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/admin_page/AdminPageFramework_Page_Controller.php", 
	"AdminPageFramework_Page_Model"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/admin_page/AdminPageFramework_Page_Model.php", 
	"AdminPageFramework_Page_View"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/admin_page/AdminPageFramework_Page_View.php", 
	"AdminPageFramework_Page_View_MetaBox"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/admin_page/AdminPageFramework_Page_View_MetaBox.php", 
	"AdminPageFramework_Router"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/admin_page/AdminPageFramework_Router.php", 
	"AdminPageFramework_View"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/admin_page/AdminPageFramework_View.php", 
	"AdminPageFramework_HelpPane_Page"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/admin_page/controller/AdminPageFramework_HelpPane_Page.php", 
	"AdminPageFramework_Link_Page"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/admin_page/controller/AdminPageFramework_Link_Page.php", 
	"AdminPageFramework_Resource_Page"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/admin_page/controller/AdminPageFramework_Resource_Page.php", 
	"AdminPageFramework_CustomSubmitFields"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/admin_page/model/AdminPageFramework_CustomSubmitFields.php", 
	"AdminPageFramework_ExportOptions"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/admin_page/model/AdminPageFramework_ExportOptions.php", 
	"AdminPageFramework_FormEmail"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/admin_page/model/AdminPageFramework_FormEmail.php", 
	"AdminPageFramework_ImportOptions"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/admin_page/model/AdminPageFramework_ImportOptions.php", 
	"AdminPageFramework_Property_Page"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/admin_page/model/AdminPageFramework_Property_Page.php", 
	"AdminPageFramework_FormDefinition_Page"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/admin_page/model/AdminPageFramework_FormDefinition/AdminPageFramework_FormDefinition_Page.php", 
	"AdminPageFramework_Format_InPageTab"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/admin_page/model/format/AdminPageFramework_Format_InPageTab.php", 
	"AdminPageFramework_Format_InPageTabs"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/admin_page/model/format/AdminPageFramework_Format_InPageTabs.php", 
	"AdminPageFramework_Format_NavigationTab_InPageTab"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/admin_page/model/format/AdminPageFramework_Format_NavigationTab_InPageTab.php", 
	"AdminPageFramework_Format_SubMenuItem"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/admin_page/model/format/AdminPageFramework_Format_SubMenuItem.php", 
	"AdminPageFramework_Format_SubMenuLink"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/admin_page/model/format/AdminPageFramework_Format_SubMenuLink.php", 
	"AdminPageFramework_Format_SubMenuPage"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/admin_page/model/format/AdminPageFramework_Format_SubMenuPage.php", 
	"AdminPageFramework_PageLoadInfo_Page"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/admin_page/view/AdminPageFramework_PageLoadInfo_Page.php", 
	"AdminPageFramework_MetaBox"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/meta_box/AdminPageFramework_MetaBox.php", 
	"AdminPageFramework_MetaBox_Controller"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/meta_box/AdminPageFramework_MetaBox_Controller.php", 
	"AdminPageFramework_MetaBox_Model"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/meta_box/AdminPageFramework_MetaBox_Model.php", 
	"AdminPageFramework_MetaBox_Router"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/meta_box/AdminPageFramework_MetaBox_Router.php", 
	"AdminPageFramework_MetaBox_View"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/meta_box/AdminPageFramework_MetaBox_View.php", 
	"AdminPageFramework_HelpPane_MetaBox"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/meta_box/controller/AdminPageFramework_HelpPane_MetaBox.php", 
	"AdminPageFramework_Resource_MetaBox"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/meta_box/controller/AdminPageFramework_Resource_MetaBox.php", 
	"AdminPageFramework_Property_MetaBox"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/meta_box/model/AdminPageFramework_Property_MetaBox.php", 
	"AdminPageFramework_NetworkAdmin"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/network_admin_page/AdminPageFramework_NetworkAdmin.php", 
	"AdminPageFramework_Link_NetworkAdmin"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/network_admin_page/controller/AdminPageFramework_Link_NetworkAdmin.php", 
	"AdminPageFramework_Property_NetworkAdmin"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/network_admin_page/model/AdminPageFramework_Property_NetworkAdmin.php", 
	"AdminPageFramework_PageLoadInfo_NetworkAdminPage"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/network_admin_page/view/AdminPageFramework_PageLoadInfo_NetworkAdminPage.php", 
	"AdminPageFramework_MetaBox_Page"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/page_meta_box/AdminPageFramework_MetaBox_Page.php", 
	"AdminPageFramework_MetaBox_Page_Controller"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/page_meta_box/AdminPageFramework_MetaBox_Page_Controller.php", 
	"AdminPageFramework_MetaBox_Page_Model"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/page_meta_box/AdminPageFramework_MetaBox_Page_Model.php", 
	"AdminPageFramework_MetaBox_Page_Router"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/page_meta_box/AdminPageFramework_MetaBox_Page_Router.php", 
	"AdminPageFramework_MetaBox_Page_View"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/page_meta_box/AdminPageFramework_MetaBox_Page_View.php", 
	"AdminPageFramework_HelpPane_MetaBox_Page"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/page_meta_box/controller/AdminPageFramework_HelpPane_MetaBox_Page.php", 
	"AdminPageFramework_Resource_MetaBox_Page"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/page_meta_box/controller/AdminPageFramework_Resource_MetaBox_Page.php", 
	"AdminPageFramework_Property_MetaBox_Page"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/page_meta_box/model/AdminPageFramework_Property_MetaBox_Page.php", 
	"AdminPageFramework_PostType"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/post_type/AdminPageFramework_PostType.php", 
	"AdminPageFramework_PostType_Controller"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/post_type/AdminPageFramework_PostType_Controller.php", 
	"AdminPageFramework_PostType_Model"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/post_type/AdminPageFramework_PostType_Model.php", 
	"AdminPageFramework_PostType_Router"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/post_type/AdminPageFramework_PostType_Router.php", 
	"AdminPageFramework_PostType_View"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/post_type/AdminPageFramework_PostType_View.php", 
	"AdminPageFramework_Link_PostType"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/post_type/controller/AdminPageFramework_Link_PostType.php", 
	"AdminPageFramework_Resource_PostType"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/post_type/controller/AdminPageFramework_Resource_PostType.php", 
	"AdminPageFramework_Property_PostType"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/post_type/model/AdminPageFramework_Property_PostType.php", 
	"AdminPageFramework_PageLoadInfo_PostType"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/post_type/view/AdminPageFramework_PageLoadInfo_PostType.php", 
	"AdminPageFramework_TaxonomyField"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/taxonomy_field/AdminPageFramework_TaxonomyField.php", 
	"AdminPageFramework_TaxonomyField_Controller"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/taxonomy_field/AdminPageFramework_TaxonomyField_Controller.php", 
	"AdminPageFramework_TaxonomyField_Model"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/taxonomy_field/AdminPageFramework_TaxonomyField_Model.php", 
	"AdminPageFramework_TaxonomyField_Router"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/taxonomy_field/AdminPageFramework_TaxonomyField_Router.php", 
	"AdminPageFramework_TaxonomyField_View"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/taxonomy_field/AdminPageFramework_TaxonomyField_View.php", 
	"AdminPageFramework_HelpPane_TaxonomyField"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/taxonomy_field/controller/AdminPageFramework_HelpPane_TaxonomyField.php", 
	"AdminPageFramework_Resource_TaxonomyField"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/taxonomy_field/controller/AdminPageFramework_Resource_TaxonomyField.php", 
	"AdminPageFramework_Property_TaxonomyField"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/taxonomy_field/model/AdminPageFramework_Property_TaxonomyField.php", 
	"AdminPageFramework_UserMeta"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/user_meta/AdminPageFramework_UserMeta.php", 
	"AdminPageFramework_UserMeta_Controller"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/user_meta/AdminPageFramework_UserMeta_Controller.php", 
	"AdminPageFramework_UserMeta_Model"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/user_meta/AdminPageFramework_UserMeta_Model.php", 
	"AdminPageFramework_UserMeta_Router"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/user_meta/AdminPageFramework_UserMeta_Router.php", 
	"AdminPageFramework_UserMeta_View"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/user_meta/AdminPageFramework_UserMeta_View.php", 
	"AdminPageFramework_HelpPane_UserMeta"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/user_meta/controller/AdminPageFramework_HelpPane_UserMeta.php", 
	"AdminPageFramework_Resource_UserMeta"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/user_meta/controller/AdminPageFramework_Resource_UserMeta.php", 
	"AdminPageFramework_Property_UserMeta"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/user_meta/model/AdminPageFramework_Property_UserMeta.php", 
	"AdminPageFramework_Widget"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/widget/AdminPageFramework_Widget.php", 
	"AdminPageFramework_Widget_Controller"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/widget/AdminPageFramework_Widget_Controller.php", 
	"AdminPageFramework_Widget_Factory"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/widget/AdminPageFramework_Widget_Factory.php", 
	"AdminPageFramework_Widget_Model"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/widget/AdminPageFramework_Widget_Model.php", 
	"AdminPageFramework_Widget_Router"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/widget/AdminPageFramework_Widget_Router.php", 
	"AdminPageFramework_Widget_View"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/widget/AdminPageFramework_Widget_View.php", 
	"AdminPageFramework_HelpPane_Widget"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/widget/controller/AdminPageFramework_HelpPane_Widget.php", 
	"AdminPageFramework_Resource_Widget"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/widget/controller/AdminPageFramework_Resource_Widget.php", 
	"AdminPageFramework_Property_Widget"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/widget/model/AdminPageFramework_Property_Widget.php", 
	"AdminPageFramework_Factory"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/AdminPageFramework_Factory.php", 
	"AdminPageFramework_Factory_Controller"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/AdminPageFramework_Factory_Controller.php", 
	"AdminPageFramework_Factory_Model"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/AdminPageFramework_Factory_Model.php", 
	"AdminPageFramework_Factory_Router"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/AdminPageFramework_Factory_Router.php", 
	"AdminPageFramework_Factory_View"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/AdminPageFramework_Factory_View.php", 
	"AdminPageFramework_HelpPane_Base"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/controller/AdminPageFramework_HelpPane_Base.php", 
	"AdminPageFramework_Link_Base"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/controller/AdminPageFramework_Link_Base.php", 
	"AdminPageFramework_Resource_Base"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/controller/AdminPageFramework_Resource_Base.php", 
	"AdminPageFramework_InclusionClassFilesHeader"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/model/AdminPageFramework_InclusionClassFilesHeader.php", 
	"AdminPageFramework_Message"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/model/AdminPageFramework_Message.php", 
	"AdminPageFramework_Property_Base"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/model/AdminPageFramework_Property_Base.php", 
	"AdminPageFramework_Format_Base"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/model/format/AdminPageFramework_Format_Base.php", 
	"AdminPageFramework_Format_CollapsibleSection"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/model/format/AdminPageFramework_Format_CollapsibleSection.php", 
	"AdminPageFramework_Format_EachField"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/model/format/AdminPageFramework_Format_EachField.php", 
	"AdminPageFramework_Format_EachSection"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/model/format/AdminPageFramework_Format_EachSection.php", 
	"AdminPageFramework_Format_Fields"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/model/format/AdminPageFramework_Format_Fields.php", 
	"AdminPageFramework_Format_Fieldset"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/model/format/AdminPageFramework_Format_Fieldset.php", 
	"AdminPageFramework_Format_FieldsetOutput"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/model/format/AdminPageFramework_Format_FieldsetOutput.php", 
	"AdminPageFramework_Format_FormField_Base"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/model/format/AdminPageFramework_Format_FormField_Base.php", 
	"AdminPageFramework_Format_Sectionset"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/model/format/AdminPageFramework_Format_Sectionset.php", 
	"AdminPageFramework_Format_SubSection"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/model/format/AdminPageFramework_Format_SubSection.php", 
	"AdminPageFramework_FormDefinition"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/model/form_definition/AdminPageFramework_FormDefinition.php", 
	"AdminPageFramework_FormDefinition_Base"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/model/form_definition/AdminPageFramework_FormDefinition_Base.php", 
	"AdminPageFramework_FormDefinition_Meta"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/model/form_definition/AdminPageFramework_FormDefinition_Meta.php", 
	"AdminPageFramework_Sort_Base"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/model/sort/AdminPageFramework_Sort_Base.php", 
	"AdminPageFramework_Sort_Input"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/model/sort/AdminPageFramework_Sort_Input.php", 
	"AdminPageFramework_ArrayHandler"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/utility/AdminPageFramework_ArrayHandler.php", 
	"AdminPageFramework_Debug"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/utility/AdminPageFramework_Debug.php", 
	"AdminPageFramework_ErrorReporting"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/utility/AdminPageFramework_ErrorReporting.php", 
	"AdminPageFramework_RegisterClasses"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/utility/AdminPageFramework_RegisterClasses.php", 
	"AdminPageFramework_Utility"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/utility/base_utility/AdminPageFramework_Utility.php", 
	"AdminPageFramework_Utility_Array"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/utility/base_utility/AdminPageFramework_Utility_Array.php", 
	"AdminPageFramework_Utility_Deprecated"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/utility/base_utility/AdminPageFramework_Utility_Deprecated.php", 
	"AdminPageFramework_Utility_File"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/utility/base_utility/AdminPageFramework_Utility_File.php", 
	"AdminPageFramework_Utility_Path"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/utility/base_utility/AdminPageFramework_Utility_Path.php", 
	"AdminPageFramework_Utility_String"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/utility/base_utility/AdminPageFramework_Utility_String.php", 
	"AdminPageFramework_Utility_SystemInformation"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/utility/base_utility/AdminPageFramework_Utility_SystemInformation.php", 
	"AdminPageFramework_Utility_URL"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/utility/base_utility/AdminPageFramework_Utility_URL.php", 
	"AdminPageFramework_WPUtility"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/utility/wp_utility/AdminPageFramework_WPUtility.php", 
	"AdminPageFramework_WPUtility_File"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/utility/wp_utility/AdminPageFramework_WPUtility_File.php", 
	"AdminPageFramework_WPUtility_HTML"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/utility/wp_utility/AdminPageFramework_WPUtility_HTML.php", 
	"AdminPageFramework_WPUtility_Hook"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/utility/wp_utility/AdminPageFramework_WPUtility_Hook.php", 
	"AdminPageFramework_WPUtility_Option"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/utility/wp_utility/AdminPageFramework_WPUtility_Option.php", 
	"AdminPageFramework_WPUtility_Page"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/utility/wp_utility/AdminPageFramework_WPUtility_Page.php", 
	"AdminPageFramework_WPUtility_Post"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/utility/wp_utility/AdminPageFramework_WPUtility_Post.php", 
	"AdminPageFramework_WPUtility_SiteInformation"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/utility/wp_utility/AdminPageFramework_WPUtility_SiteInformation.php", 
	"AdminPageFramework_WPUtility_SystemInformation"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/utility/wp_utility/AdminPageFramework_WPUtility_SystemInformation.php", 
	"AdminPageFramework_WPUtility_URL"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/utility/wp_utility/AdminPageFramework_WPUtility_URL.php", 
	"AdminPageFramework_CSS"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/AdminPageFramework_CSS.php", 
	"AdminPageFramework_FieldTypeRegistration"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/AdminPageFramework_FieldTypeRegistration.php", 
	"AdminPageFramework_PageLoadInfo_Base"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/AdminPageFramework_PageLoadInfo_Base.php", 
	"AdminPageFramework_TabNavigationBar"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/AdminPageFramework_TabNavigationBar.php", 
	"AdminPageFramework_Attribute_Base"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/attribute/AdminPageFramework_Attribute_Base.php", 
	"AdminPageFramework_Attribute_Field"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/attribute/AdminPageFramework_Attribute_Field.php", 
	"AdminPageFramework_Attribute_FieldContainer_Base"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/attribute/AdminPageFramework_Attribute_FieldContainer_Base.php", 
	"AdminPageFramework_Attribute_Fieldrow"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/attribute/AdminPageFramework_Attribute_Fieldrow.php", 
	"AdminPageFramework_Attribute_Fields"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/attribute/AdminPageFramework_Attribute_Fields.php", 
	"AdminPageFramework_Attribute_Fieldset"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/attribute/AdminPageFramework_Attribute_Fieldset.php", 
	"AdminPageFramework_Attribute_SectionTable"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/attribute/AdminPageFramework_Attribute_SectionTable.php", 
	"AdminPageFramework_Attribute_SectionTableBody"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/attribute/AdminPageFramework_Attribute_SectionTableBody.php", 
	"AdminPageFramework_Attribute_SectionTableContainer"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/attribute/AdminPageFramework_Attribute_SectionTableContainer.php", 
	"AdminPageFramework_Attribute_SectionsTablesContainer"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/attribute/AdminPageFramework_Attribute_SectionsTablesContainer.php", 
	"AdminPageFramework_FieldType"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/field_type/AdminPageFramework_FieldType.php", 
	"AdminPageFramework_FieldType_Base"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/field_type/AdminPageFramework_FieldType_Base.php", 
	"AdminPageFramework_FieldType_checkbox"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/field_type/AdminPageFramework_FieldType_checkbox.php", 
	"AdminPageFramework_FieldType_color"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/field_type/AdminPageFramework_FieldType_color.php", 
	"AdminPageFramework_FieldType_default"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/field_type/AdminPageFramework_FieldType_default.php", 
	"AdminPageFramework_FieldType_export"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/field_type/AdminPageFramework_FieldType_export.php", 
	"AdminPageFramework_FieldType_file"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/field_type/AdminPageFramework_FieldType_file.php", 
	"AdminPageFramework_FieldType_hidden"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/field_type/AdminPageFramework_FieldType_hidden.php", 
	"AdminPageFramework_FieldType_image"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/field_type/AdminPageFramework_FieldType_image.php", 
	"AdminPageFramework_FieldType_import"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/field_type/AdminPageFramework_FieldType_import.php", 
	"AdminPageFramework_FieldType_media"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/field_type/AdminPageFramework_FieldType_media.php", 
	"AdminPageFramework_FieldType_number"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/field_type/AdminPageFramework_FieldType_number.php", 
	"AdminPageFramework_FieldType_posttype"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/field_type/AdminPageFramework_FieldType_posttype.php", 
	"AdminPageFramework_FieldType_radio"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/field_type/AdminPageFramework_FieldType_radio.php", 
	"AdminPageFramework_FieldType_section_title"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/field_type/AdminPageFramework_FieldType_section_title.php", 
	"AdminPageFramework_FieldType_select"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/field_type/AdminPageFramework_FieldType_select.php", 
	"AdminPageFramework_FieldType_size"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/field_type/AdminPageFramework_FieldType_size.php", 
	"AdminPageFramework_FieldType_submit"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/field_type/AdminPageFramework_FieldType_submit.php", 
	"AdminPageFramework_FieldType_system"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/field_type/AdminPageFramework_FieldType_system.php", 
	"AdminPageFramework_FieldType_taxonomy"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/field_type/AdminPageFramework_FieldType_taxonomy.php", 
	"AdminPageFramework_FieldType_text"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/field_type/AdminPageFramework_FieldType_text.php", 
	"AdminPageFramework_FieldType_textarea"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/field_type/AdminPageFramework_FieldType_textarea.php", 
	"AdminPageFramework_WalkerTaxonomyChecklist"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/field_type/AdminPageFramework_WalkerTaxonomyChecklist.php", 
	"AdminPageFramework_FormPart_Base"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/form_part/AdminPageFramework_FormPart_Base.php", 
	"AdminPageFramework_FormPart_CollapsibleSectionTitle"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/form_part/AdminPageFramework_FormPart_CollapsibleSectionTitle.php", 
	"AdminPageFramework_FormPart_DebugInfo"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/form_part/AdminPageFramework_FormPart_DebugInfo.php", 
	"AdminPageFramework_FormPart_Description"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/form_part/AdminPageFramework_FormPart_Description.php", 
	"AdminPageFramework_FormPart_FieldsetRow"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/form_part/AdminPageFramework_FormPart_FieldsetRow.php", 
	"AdminPageFramework_FormPart_SectionTitle"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/form_part/AdminPageFramework_FormPart_SectionTitle.php", 
	"AdminPageFramework_FormPart_Table"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/form_part/AdminPageFramework_FormPart_Table.php", 
	"AdminPageFramework_FormPart_TableCaption"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/form_part/AdminPageFramework_FormPart_TableCaption.php", 
	"AdminPageFramework_FormPart_TableRow"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/form_part/AdminPageFramework_FormPart_TableRow.php", 
	"AdminPageFramework_FormFieldset"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/form_part/fieldset/AdminPageFramework_FormFieldset.php", 
	"AdminPageFramework_FormFieldset_Base"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/form_part/fieldset/AdminPageFramework_FormFieldset_Base.php", 
	"AdminPageFramework_Input_Base"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/form_part/input/AdminPageFramework_Input_Base.php", 
	"AdminPageFramework_Input_checkbox"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/form_part/input/AdminPageFramework_Input_checkbox.php", 
	"AdminPageFramework_Input_radio"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/form_part/input/AdminPageFramework_Input_radio.php", 
	"AdminPageFramework_Input_select"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/form_part/input/AdminPageFramework_Input_select.php", 
	"AdminPageFramework_Generate_Base"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/generator/AdminPageFramework_Generate_Base.php", 
	"AdminPageFramework_Generate_FieldAddress"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/generator/field/AdminPageFramework_Generate_FieldAddress.php", 
	"AdminPageFramework_Generate_FieldInputID"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/generator/field/AdminPageFramework_Generate_FieldInputID.php", 
	"AdminPageFramework_Generate_FieldInputName"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/generator/field/AdminPageFramework_Generate_FieldInputName.php", 
	"AdminPageFramework_Generate_FieldName"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/generator/field/AdminPageFramework_Generate_FieldName.php", 
	"AdminPageFramework_Generate_FieldTagID"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/generator/field/AdminPageFramework_Generate_FieldTagID.php", 
	"AdminPageFramework_Generate_Field_Base"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/generator/field/AdminPageFramework_Generate_Field_Base.php", 
	"AdminPageFramework_Generate_FlatFieldInputName"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/generator/field/AdminPageFramework_Generate_FlatFieldInputName.php", 
	"AdminPageFramework_Generate_FlatFieldName"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/generator/field/AdminPageFramework_Generate_FlatFieldName.php", 
	"AdminPageFramework_Generate_SectionName"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/generator/section/AdminPageFramework_Generate_SectionName.php", 
	"AdminPageFramework_Generate_Section_Base"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/generator/section/AdminPageFramework_Generate_Section_Base.php", 
	"AdminPageFramework_Script_AttributeUpdator"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/script/AdminPageFramework_Script_AttributeUpdator.php", 
	"AdminPageFramework_Script_Base"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/script/AdminPageFramework_Script_Base.php", 
	"AdminPageFramework_Script_CheckboxSelector"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/script/AdminPageFramework_Script_CheckboxSelector.php", 
	"AdminPageFramework_Script_CollapsibleSection"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/script/AdminPageFramework_Script_CollapsibleSection.php", 
	"AdminPageFramework_Script_MediaUploader"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/script/AdminPageFramework_Script_MediaUploader.php", 
	"AdminPageFramework_Script_OptionStorage"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/script/AdminPageFramework_Script_OptionStorage.php", 
	"AdminPageFramework_Script_RegisterCallback"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/script/AdminPageFramework_Script_RegisterCallback.php", 
	"AdminPageFramework_Script_RepeatableField"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/script/AdminPageFramework_Script_RepeatableField.php", 
	"AdminPageFramework_Script_RepeatableSection"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/script/AdminPageFramework_Script_RepeatableSection.php", 
	"AdminPageFramework_Script_SortableField"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/script/AdminPageFramework_Script_SortableField.php", 
	"AdminPageFramework_Script_SortableSection"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/script/AdminPageFramework_Script_SortableSection.php", 
	"AdminPageFramework_Script_Tab"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/script/AdminPageFramework_Script_Tab.php", 
	"AdminPageFramework_Script_Utility"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/script/AdminPageFramework_Script_Utility.php", 
	"AdminPageFramework_Script_Widget"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/_abstract/view/script/AdminPageFramework_Script_Widget.php", 
	"AdminPageFramework_AdminNotice"	=>	AdminPageFramework_Registry::$sDirPath . "/utility/AdminPageFramework_AdminNotice.php", 
	"AdminPageFramework_PluginBootstrap"	=>	AdminPageFramework_Registry::$sDirPath . "/utility/AdminPageFramework_PluginBootstrap.php", 
	"AdminPageFramework_Requirement"	=>	AdminPageFramework_Registry::$sDirPath . "/utility/AdminPageFramework_Requirement.php", 
	"AdminPageFramework_TableOfContents"	=>	AdminPageFramework_Registry::$sDirPath . "/utility/AdminPageFramework_TableOfContents.php", 
	"AdminPageFramework_Zip"	=>	AdminPageFramework_Registry::$sDirPath . "/utility/AdminPageFramework_Zip.php", 
	"AdminPageFramework_WPReadmeParser"	=>	AdminPageFramework_Registry::$sDirPath . "/utility/AdminPageFramework_WPReadmeParser/AdminPageFramework_WPReadmeParser.php", 
	"AdminPageFramework_Parsedown"	=>	AdminPageFramework_Registry::$sDirPath . "/utility/AdminPageFramework_WPReadmeParser/library/AdminPageFramework_Parsedown/AdminPageFramework_Parsedown.php", 
	"AdminPageFramework_Form_Model_Import"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/admin_page/AdminPageFramework_Form_Model_Imort.php", 
);