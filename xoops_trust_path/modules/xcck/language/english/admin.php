<?php
/**
 * @file
 * @package xcck
 * @version $Id$
**/
define('_AD_XCCK_DESC_XCCK', 'xCCK is Contents Creation Kit for XOOPS Cube Legacy. With this module, you can design fields you want freely. You can add fields of string, integer, textarea, select box, date, category and images.');

define('_MD_XCCK_LANG_CONFIG_CATEGORY_WIZARD', 'Category Setting');
define('_MD_XCCK_DESC_CONFIG_CATEGORY_WIZARD', 'xCCK can have category and permission management function through a LEGACY_CATEGORY("cat") or a LEGACY_GROUP("group") module. Select its type "cat", "group" or no category system.');
define('_MD_XCCK_LANG_CONFIG_CATEGORY2_WIZARD', 'Detailed Category Setting');
define('_MD_XCCK_DESC_CONFIG_CATEGORY2_WIZARD', 'Select a category module\'s dirname. If no select option exists, you must install category module first.');
define('_MD_XCCK_LANG_CONFIG_MAINTABLE_WIZARD', 'Parent xCCK Setting');
define('_MD_XCCK_DESC_CONFIG_MAINTABLE_WIZARD', 'If you will use this xCCK as a subtable module of other xCCK module, select the parent xCCK module\'s dirname.');
define('_MD_XCCK_LANG_CONFIG_IMAGES_WIZARD', 'Attached Image Setting');
define('_MD_XCCK_DESC_CONFIG_IMAGES_WIZARD', 'xCCK can hold attached images through a LEGACY_IMAGE module. You can write a image\'s name in form in each line.');
define('_MD_XCCK_LANG_CONFIG_PROGRESS_WIZARD', 'Publish Workflow Management Setting');
define('_MD_XCCK_DESC_CONFIG_PROGRESS_WIZARD', 'xCCK can use workflow management system through a LEGACY_WORKFLOW module.');

define('_AD_XCCK_LANG_ACCESS_CONTROLLER', 'dirname of the category management module');
define('_AD_XCCK_LANG_SHOW_ORDER', 'Select how to show list');
define('_AD_XCCK_LANG_AUTH_TYPE', 'Authentication Group Settings');
define('_AD_XCCK_LANG_USE_CATEGORY', 'Type of category management');
define('_AD_XCCK_LANG_IMAGES', 'Attached image name');
define('_AD_XCCK_LANG_MAINTABLE', 'Directory name of parent xCCK');
define('_AD_XCCK_LANG_PUBLISH', 'Type of Workflow Management');
define('_AD_XCCK_LANG_THRESHOLD', 'Number of votes to publish');


define('_AD_XCCK_LANG_SETTING_OUTPUT', 'Export the settings');
define('_AD_XCCK_DESC_SETTING_OUTPUT', '
Export the fields and preference settings of this module to another site. Copy and paste the PHP code into the textarea, 
and create the file "{Xcck dirname}Install.class.php" under (html)/modules/legacy/preload/. Then, install the module!<br />
When the dirname for Xcck is "Content", for example, create the file "ContentInstall.class.php" by copying the textarea contents.');
define('_AD_XCCK_LANG_TEMPLATE_OUTPUT', 'Template');
define('_AD_XCCK_LANG_TEMPLATE_OUTPUT_VIEW', 'View Template');
define('_AD_XCCK_DESC_TEMPLATE_OUTPUT_VIEW', 'The layout of PageView and its fields within xcck_page_view.html template is customizable. You can copy and paste the following code. Alternatively, delete the code block {foreach item=definition from=$definitions} ... {foreach}');
define('_AD_XCCK_LANG_TEMPLATE_OUTPUT_EDIT', 'Edit Template');
define('_AD_XCCK_DESC_TEMPLATE_OUTPUT_EDIT', 'The layout of layout PageEdit fields within xcck_page_edit.html is customizable. You can copy and paste the following code. Alternatively, delete the code block {foreach item=field from=$fields} ... {foreach}');
define('_AD_XCCK_LANG_TEMPLATE_OUTPUT_LIST', 'List Template');
define('_AD_XCCK_DESC_TEMPLATE_OUTPUT_LIST', 'The layout of layout PageList fields within xcck_page_list.html is customizable. You can copy and paste the following code. Alternatively, delete the code block {foreach item=def from=$definitions} ... {foreach}');
define('_AD_XCCK_LANG_ASC_ORDER_NUMBER', 'The Num. for ASC');
define('_AD_XCCK_LANG_DESC_ORDER_NUMBER', 'The Num. for DESC');
define('_AD_XCCK_LANG_ORDER_SHOW', 'The numbers for Default Order');
define('_AD_XCCK_DESC_ORDER_SHOW', 'You can set the following order number in the Preferences of the module.');

/* Block */
define('_AD_XCCK_LANG_DISPLAY_NUMBER', 'Number of Display');
define('_AD_XCCK_LANG_SHOW_CAT', 'Category No');
define('_AD_XCCK_LANG_ORDER', 'Order');
define('_AD_XCCK_LANG_WEIGHT_ASC', 'Weight, Ascending');
define('_AD_XCCK_LANG_WEIGHT_DESC', 'Weight, Descending');
define('_AD_XCCK_LANG_POSTTIME_ASC', 'Posttime, Ascending');
define('_AD_XCCK_LANG_POSTTIME_DESC', 'Posttime, Descending');
