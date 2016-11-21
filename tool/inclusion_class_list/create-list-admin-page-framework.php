<?php

/* Configuration */
$sTargetBaseDir     = dirname( dirname( dirname( __FILE__ ) ) );
$sResultFilePath    = $sTargetBaseDir . '/development/admin-page-framework-include-class-list.php';

/* If accessed from a browser, exit. */
$bIsCLI             = php_sapi_name() == 'cli';
$sCarriageReturn    = $bIsCLI ? PHP_EOL : '<br />';
if ( ! $bIsCLI ) { 
    exit; 
}

/* Include necessary files */
require( dirname( __FILE__ ) . '/class/PHP_Class_Files_Inclusion_List_Creator.php' );

/* Check the permission to write. */
if ( ! file_exists( $sResultFilePath ) ) {
    file_put_contents( $sResultFilePath, '', FILE_APPEND | LOCK_EX );
}
if ( 
    ( file_exists( $sResultFilePath ) && ! is_writable( $sResultFilePath ) )
    || ! is_writable( dirname( $sResultFilePath ) )     
) {
    exit( sprintf( 'The permission denied. Make sure if the folder, %1$s, allows to modify/create a file.', dirname( $sResultFilePath ) ) );
}

/* Create a minified version of the framework. */
echo 'Started...' . $sCarriageReturn;
new PHP_Class_Files_Inclusion_Script_Creator(
    $sTargetBaseDir . '/development',
    array( $sTargetBaseDir . '/development', ),     // scan directory paths
    $sResultFilePath, 
    array(
        'header_class_name'    => 'AdminPageFramework_InclusionClassFilesHeader',
        // 'header_class_path'    => $sTargetBaseDir . '/development/document/AdminPageFramework_InclusionClassFilesHeader.php',
        'output_buffer'        => true,
        'header_type'          => 'CONSTANTS',    
        'exclude_classes'      => array( 
            'AdminPageFramework_MinifiedVersionHeader', 
            // 'AdminPageFramework_InclusionClassFilesHeader',  <-- this will be listed but not in the beautified version, used to detect whether it is a development version or not.
            'AdminPageFramework_BeautifiedVersionHeader',
            'admin-page-framework',
            'AdminPageFramework_Registry_Base',
            'AdminPageFramework_Registry',
            'AdminPageFramework_Bootstrap',
            
            // fix some irregularly generated class names for the time being
            "name}_{pressed",
            "selector",
            "selector.",  
            'Files',

        ),
        // 'output_var_name'    =>    '$aAdminPageFramework_Inclusion_Class_Files',
        'base_dir_var'      => 'AdminPageFramework_Registry::$sDirPath',
        'search'            => array(
            'allowed_extensions'    => array( 'php' ),    // e.g. array( 'php', 'inc' )
            // 'exclude_dir_paths'        => array( $sTargetBaseDir . '/include/class/admin' ),
            'exclude_dir_names'     => array( '_document', 'document', 'del.bak' ),
            'is_recursive'          => true,
        ),
    )
);
echo 'Done!' . $sCarriageReturn;
