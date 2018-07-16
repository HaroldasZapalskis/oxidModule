<?php
/**
 *Haroldas Zapalskis First Test Module
 *
 * @category      module
 * @package       haroldaszapalskis
 * @author        Haroldas Zapalskis
 * @link          http://oxidshop.local
 * @copyright (C) Haroldas Zapalskis2018
 */

/**
 * Metadata version
 */
$sMetadataVersion = '1.1';

/**
 * Module information
 */
/**
 * TODO: Replace sample names and paths (like '[ParentClassName]', '[your_template]', etc.) with real ones You need.
 * TODO: Uncomment lines You need, add more if needed, delete not required.
 * TODO: Remove all this TODO comment.
 */
$aModule = array(
    'id'          => 'hzharoldaszapalskis',
    'title'       => array(
        'de' => '[TR - HZ Haroldas Zapalskis]',
        'en' => 'HZ Haroldas Zapalskis',
    ),
    'description' => array(
        'de' => '[TR - HZ Haroldas Zapalskis Module]',
        'en' => 'HZ Haroldas Zapalskis Module',
    ),
    'thumbnail'   => 'out/pictures/picture.png',
    'version'     => '1.0.0',
    'author'      => 'Haroldas Zapalskis',
    'url'         => 'http://oxidshop.local',
    'email'       => 'haroldas.zapalskis@gmail.com',
    'extend'      => array(
        //'oxarticle' => 'hz/haroldaszapalskis//var/www/oxideshop/vendor/oxid-esales/oxideshop-unified-namespace-generator/generated/OxidEsales/Eshop/Application/Model/hzharoldaszapalskisoxarticle',
        //'[ParentClassName]' => 'hz/haroldaszapalskis/[appropriate_folder]/hzharoldaszapalskis[parent_class_name]',
    ),
    'files'       => array(
        'hzharoldaszapalskismodule' => 'hz/haroldaszapalskis/core/hzharoldaszapalskismodule.php',
        'hzharoldaszapalskisharoldascontroller' => 'hz/haroldaszapalskis/controllers/hzharoldaszapalskisharoldascontroller.php',
        //'hzharoldaszapalskisharoldasarticle' => 'hz/haroldaszapalskis/models/hzharoldaszapalskisharoldasarticle.php',
        //'[your_class_name]' => 'hz/haroldaszapalskis/[appropriate_folder]/hzharoldaszapalskis[your_class_name].php',
),
    'templates'   => array(
        'hzharoldaszapalskisharoldascontroller.tpl' => 'hz/haroldaszapalskis/views/pages/hzharoldaszapalskisharoldascontroller.tpl',
        //'[your_template].tpl' => 'hz/haroldaszapalskis/views/pages/[theme_folder_path]/hzharoldaszapalskis[your_template].tpl',
),
    'blocks'      => array(
        array(
            'template' => 'page/details/inc/productmain.tpl',
            'block' => 'details_productmain_title',
            'file' => 'views/blocks/hzharoldaszapalskisproductclass.tpl',
        ),
    ),
    'settings'    => array(
        /*array(
            'group' => 'hzHaroldasZapalskis[SettingsGroup]',
            'name'  => 'hzHaroldasZapalskis[SettingName]',
            //TODO: Change type to one You need: 'bool', 'str', 'num', 'arr', 'aarr', 'select'. Remove this comment.
            'type'  => 'str',
            'value' => '[initial_setting_value]',
        ),*/
),
    'events'      => array(
        'onActivate'   => 'hzHaroldasZapalskisModule::onActivate',
        'onDeactivate' => 'hzHaroldasZapalskisModule::onDeactivate',
    ),
);
